<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
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

        $memberDatas = Member::all();
        $manage_member = view('backend.members.browse',compact('memberDatas'));
        return view('backend.admin_master',compact('manage_member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_member = view('backend.members.edit_add');
        return view('backend.admin_master', compact('add_member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request)->validate();
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id', '_wysihtml5_mode', 'member_image');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            if ($request->hasFile('member_image')){
                $fileName = md5(time()).'.'.$request->file('member_image')->extension();
                $request->file('member_image')->storeAS('public/member_image_folder',$fileName);
                $data['member_image'] = $fileName;
            }

            //dd($data);
            Member::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Member profile created successfully.');
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

        $memberData = Member::findOrFail($id);
        $edit_member = view('backend.members.edit_add',compact('memberData'));
        return view('backend.admin_master', compact('edit_member'));
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
            'member_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'member_name' => ['required'],
            'member_category' => ['required'],
            /*'member_email' => ['email'],*/
            'member_ordering' => ['required'],
            /*'member_phone' => 'regex: /^01[1-9][0-9]{8}$/i',*/
        ]);

        $memberData = Member::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_member_image', '_wysihtml5_mode');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['member_image'] = $request->old_member_image;

            if ($request->hasFile('member_image')) {

                /*$request->validate([
                    'member_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/member_image_folder/'.$request->old_member_image);
                if ($exists == true){
                    Storage::delete('public/member_image_folder/'.$memberData->member_image);
                }

                $fileName = md5(time()).'.'.$request->file('member_image')->extension();
                $request->file('member_image')->storeAS('public/member_image_folder',$fileName);
                $data['member_image'] = $fileName;

            }

            $memberData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Member profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memberData = Member::findOrFail($id);
        $exists = Storage::exists('public/member_image_folder/'.$memberData->member_image);

        try {
            if ($exists == true){
                Storage::delete('public/member_image_folder/'.$memberData->member_image);
            }

            $memberData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Member profile deleted successfully.');
    }


    public function statusActiveInactive($id)
    {
        $memberData = Member::findOrFail($id);
        try {
            if ($memberData->status == 1)
            {
                $memberData->update(['status' => '2']);
            }else{
                $memberData->update(['status' => '1']);
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
            ->with('success', 'Member profile status updated successfully.');

    }


    /**
     * @param Request $request
     * @param false $edit
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private function validator(Request $request, $edit = false): \Illuminate\Contracts\Validation\Validator
    {
        $rules = [
            'member_image' => ['required','mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'member_name' => ['required'],
            'member_category' => ['required'],
            /*'member_email' => 'email',*/
            /*'member_phone' => 'regex: /^01[1-9][0-9]{8}$/i',*/
            'status' => ['required'],
        ];

        return Validator::make($request->all(), $rules);
        /*$attributes = [];
        foreach ($rules as $key => $rule) {
            $attributes[$key] = __('bread.beneficiaries.'. $key );
        }
        return Validator::make($request->all(), $rules, [], $attributes);*/
    }

}
