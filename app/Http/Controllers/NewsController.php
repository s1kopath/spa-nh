<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    /**
     * for authentication
     */
    public function AuthCheck()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return;
        } else {
            return Redirect::to('/admin-panel')->send();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AuthCheck();

        $newsDatas = News::all();
        $manage_news = view('backend.news.browse',compact('newsDatas'));
        return view('backend.admin_master',compact('manage_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_news = view('backend.news.edit_add');
        return view('backend.admin_master', compact('add_news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'news_image' => ['required','mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'news_title' => ['required'],
            'news_content' => ['required'],
            'published_date' => ['date'],
            'status' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id', '_wysihtml5_mode');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            if ($request->hasFile('news_image')){
                $fileName = md5(time()).'.'.$request->file('news_image')->extension();
                $request->file('news_image')->storeAS('public/news_image_folder',$fileName);
                $data['news_image'] = $fileName;
            }

            //dd($data);
            News::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->AuthCheck();

        $newsData = News::findOrFail($id);
        $edit_news = view('backend.news.edit_add',compact('newsData'));
        return view('backend.admin_master', compact('edit_news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'news_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'news_title' => ['required'],
            'news_content' => ['required'],
            'published_date' => ['date'],
            'status' => ['required'],
        ]);

        $newsData = News::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_news_image', '_wysihtml5_mode');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['news_image'] = $request->old_news_image;

            if ($request->hasFile('news_image')) {

                /*$request->validate([
                    'news_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/news_image_folder/'.$request->old_news_image);
                if ($exists == true){
                    Storage::delete('public/news_image_folder/'.$newsData->news_image);
                }

                $fileName = md5(time()).'.'.$request->file('news_image')->extension();
                $request->file('news_image')->storeAS('public/news_image_folder',$fileName);
                $data['news_image'] = $fileName;

            }

            $newsData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsData = News::findOrFail($id);
        $exists = Storage::exists('public/news_image_folder/'.$newsData->news_image);

        try {
            if ($exists == true){
                Storage::delete('public/news_image_folder/'.$newsData->news_image);
            }

            $newsData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'News deleted successfully.');
    }

    public function statusActiveInactive($id)
    {
        $newsData = News::findOrFail($id);
        try {
            if ($newsData->status == 1)
            {
                $newsData->update(['status' => '2']);
            }else{
                $newsData->update(['status' => '1']);
            }
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'News status updated successfully.');

    }

}
