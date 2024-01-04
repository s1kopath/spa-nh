<?php

namespace App\Http\Controllers;

use App\SiteInfo;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class SiteInfoController extends Controller
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

    public function show()
    {
        $this->AuthCheck();
        $siteInfoData = SiteInfo::first();
        $edit_admin = view('backend.site_info.edit_add',compact('siteInfoData'));
        return view('backend.admin_master', compact('edit_admin'));
    }

    public function update(Request $request, $id)
    {
        //dd($request,$id);
        /*$request->validate([
            'pages_title' => ['required'],
            'pages_content' => ['required'],
        ]);*/

        $siteInfoData = SiteInfo::findOrFail($id);

        $data = $request->except('_token', 'old_site_logo');
        //dd($data);

        try {
            $data['site_logo'] = $request->old_site_logo;

            if ($request->hasFile('site_logo')) {

                $request->validate([
                    'site_logo' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);

                $exists = Storage::exists('public/'.$request->old_site_logo);
                if ($exists == true){
                    Storage::delete('public/'.$siteInfoData->site_logo);
                }

                $fileName = md5(time()).'.'.$request->file('site_logo')->extension();
                $request->file('site_logo')->storeAS('public/',$fileName);
                $data['site_logo'] = $fileName;

            }
//dd($data);
            $siteInfoData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Site information updated successfully.');
    }
}
