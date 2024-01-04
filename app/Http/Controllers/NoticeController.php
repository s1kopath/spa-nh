<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class NoticeController extends Controller
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

        $noticeDatas = Notice::all();
        $manage_notice = view('backend.notice.browse',compact('noticeDatas'));
        return view('backend.admin_master',compact('manage_notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_notice = view('backend.notice.edit_add');
        return view('backend.admin_master', compact('add_notice'));
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
            'notice_file' => ['mimes:pdf,doc,docx,xls,xlsx,jpeg,jpg,png', 'max:5120'],
            'notice_title' => ['required'],
            'published_date' => ['date'],
            'status' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id', '_wysihtml5_mode');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            if ($request->hasFile('notice_file')){
                $fileName = md5(time()).'.'.$request->file('notice_file')->extension();
                $request->file('notice_file')->storeAS('public/notice_file_folder',$fileName);
                $data['notice_file'] = $fileName;
            }

            //dd($data);
            Notice::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Notice created successfully.');
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

        $noticeData = Notice::findOrFail($id);
        $edit_notice = view('backend.notice.edit_add',compact('noticeData'));
        return view('backend.admin_master', compact('edit_notice'));
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
            'notice_file' => ['mimes:pdf,doc,docx,xls,xlsx,jpeg,jpg,png', 'max:5120'],
            'notice_title' => ['required'],
            'published_date' => ['date'],
            'status' => ['required'],
        ]);

        $noticeData = Notice::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_notice_file', '_wysihtml5_mode');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['notice_file'] = $request->old_notice_file;

            if ($request->hasFile('notice_file')) {

                /*$request->validate([
                    'notice_file' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/notice_file_folder/'.$request->old_notice_file);
                if ($exists == true){
                    Storage::delete('public/notice_file_folder/'.$noticeData->notice_file);
                }

                $fileName = md5(time()).'.'.$request->file('notice_file')->extension();
                $request->file('notice_file')->storeAS('public/notice_file_folder',$fileName);
                $data['notice_file'] = $fileName;

            }

            $noticeData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Notice updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticeData = Notice::findOrFail($id);
        $exists = Storage::exists('public/notice_file_folder/'.$noticeData->notice_file);

        try {
            if ($exists == true){
                Storage::delete('public/notice_file_folder/'.$noticeData->notice_file);
            }

            $noticeData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Notice deleted successfully.');
    }

    public function statusActiveInactive($id)
    {
        $noticeData = Notice::findOrFail($id);
        try {
            if ($noticeData->status == 1)
            {
                $noticeData->update(['status' => '2']);
            }else{
                $noticeData->update(['status' => '1']);
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
            ->with('success', 'Notice status updated successfully.');

    }


}
