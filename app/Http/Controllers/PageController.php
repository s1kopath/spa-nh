<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
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
        $pageDatas = Page::all();
        $manage_pages = view('backend.pages.browse',compact('pageDatas'));
        return view('backend.admin_master',compact('manage_pages'));
            //->with('admin_content', 'manage_pages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_pages = view('backend.pages.edit_add');
        return view('backend.admin_master', compact('add_pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pages_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'pages_title' => ['required'],
            'pages_content' => ['required'],
            'pages_slug' => ['required'],
            'status' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id', '_wysihtml5_mode');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            $fileName = md5(time()).'.'.$request->file('pages_image')->extension();
            $request->file('pages_image')->storeAS('public/pages_image_folder',$fileName);
            $data['pages_image'] = $fileName;
            //dd($data);
            Page::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Page created successfully.');
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
        $pageData = Page::findOrFail($id);
        $edit_page = view('backend.pages.edit_add',compact('pageData'));
        return view('backend.admin_master', compact('edit_page'));
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
            'pages_title' => ['required'],
            'pages_content' => ['required'],
            'pages_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
        ]);

        $pageData = Page::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_pages_image', '_wysihtml5_mode');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['pages_image'] = $request->old_pages_image;

            if ($request->hasFile('pages_image')) {

                /*$request->validate([
                    'pages_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/pages_image_folder/'.$request->old_pages_image);
                if ($exists == true){
                    Storage::delete('public/pages_image_folder/'.$pageData->pages_image);
                }

                $fileName = md5(time()).'.'.$request->file('pages_image')->extension();
                $request->file('pages_image')->storeAS('public/pages_image_folder',$fileName);
                $data['pages_image'] = $fileName;

            }

            $pageData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pageData = Page::findOrFail($id);
        $exists = Storage::exists('public/pages_image_folder/'.$pageData->pages_image);

        try {
            if ($exists == true){
                Storage::delete('public/pages_image_folder/'.$pageData->pages_image);
            }

            $pageData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Page deleted successfully.');
    }

    public function statusActiveInactive($id)
    {
        $pageData = Page::findOrFail($id);
        try {
            if ($pageData->status == 1)
            {
                $pageData->update(['status' => '2']);
            }else{
                $pageData->update(['status' => '1']);
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
            ->with('success', 'Page status updated successfully.');

    }

}
