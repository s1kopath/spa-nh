<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
//use Yajra\DataTables\DataTables;    // for data table
//use Illuminate\Support\Str; //for built in string functions
//use Illuminate\Support\Facades\Storage; //for storage and file uploading
//use Illuminate\Support\Facades\Auth;  // for authentication

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
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
        $adminDatas = Admin::all();
        $manage_admin = view('backend.admin.browse',compact('adminDatas'));
        return view('backend.admin_master',compact('manage_admin'));
            //->with('admin_content', $manage_admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();
        $add_admin = view('backend.admin.edit_add');
        return view('backend.admin_master', compact('add_admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request)->validate();

        /** @var User $authUser */
        //$authUser = Auth::user();
        //dd($authUser);
        $data = $request->except('_token', 'admin_id', 'password_confirmation');
        //dd($data);

        try {
            $data['created_by'] = $request->admin_id;
            $data['password'] = md5($data['password']);
            Admin::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('this is show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $this->AuthCheck();
        $adminData = Admin::findOrFail($id);
        $edit_admin = view('backend.admin.edit_add',compact('adminData'));
        return view('backend.admin_master', compact('edit_admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $adminData = Admin::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'password', 'password_confirmation');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;

            if(isset($request->password) && !empty($request->password))
            {
                $data['password'] = md5($request->password);
            }

            $adminData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Admin updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adminData = Admin::findOrFail($id);

        try {
            $adminData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Admin deleted successfully.');

    }


    public function statusActiveInactive($id)
    {
        $adminDdata = Admin::findOrFail($id);
        //dd($adminDdata,$adminDdata->status);
        try {
            if ($adminDdata->status == 1)
            {
                $adminDdata->update(['status' => '2']);
            }else{
                $adminDdata->update(['status' => '1']);
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
            ->with('success', 'Admin status updated successfully.');

    }


    /**
     * @param Request $request
     * @param false $edit
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private function validator(Request $request, $edit = false): \Illuminate\Contracts\Validation\Validator
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'phone_number' => 'required|regex: /^01[1-9][0-9]{8}$/i|unique:admins',
            'password' => 'required|confirmed',
            'access_level' => 'required',
            'status' => 'required'
        ];

        return Validator::make($request->all(), $rules);
        /*$attributes = [];
        foreach ($rules as $key => $rule) {
            $attributes[$key] = __('bread.beneficiaries.'. $key );
        }
        return Validator::make($request->all(), $rules, [], $attributes);*/
    }


    /*public function getDatatable(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Admin::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {

                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
                    //->toJson();
            }

            //return view('users');
            //return $this->beneficiaryService->getDatatable($request);
        } catch (\Exception $ex) {
            return response()->json([], 404);
        }
    }*/


}
