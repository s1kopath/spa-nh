<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SliderController extends Controller
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
        $sliderDatas = Slider::all();
        $manage_slider = view('backend.slider.browse',compact('sliderDatas'));
        return view('backend.admin_master',compact('manage_slider'));
            //->with('admin_content', $manage_slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_slider = view('backend.slider.edit_add');
        return view('backend.admin_master', compact('add_slider'));
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
            'slider_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png, image/gif', 'max:2048'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            $fileName = md5(time()).'.'.$request->file('slider_image')->extension();
            $request->file('slider_image')->storeAS('public/slider_images_folder',$fileName);
            $data['slider_image'] = $fileName;

            Slider::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Slider created successfully.');
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
        $sliderData = Slider::findOrFail($id);
        $edit_admin = view('backend.slider.edit_add',compact('sliderData'));
        return view('backend.admin_master', compact('edit_admin'));
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
        $sliderData = Slider::findOrFail($id);

        $request->validate([
            'slider_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
        ]);

        $data = $request->except('_token', 'admin_id', 'old_slider_image');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['slider_image'] = $request->old_slider_image;

            if ($request->hasFile('slider_image')) {

                /*$request->validate([
                    'slider_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/slider_images_folder/'.$request->old_slider_image);
                if ($exists == true){
                    Storage::delete('public/slider_images_folder/'.$sliderData->slider_image);
                }

                $fileName = md5(time()).'.'.$request->file('slider_image')->extension();
                $request->file('slider_image')->storeAS('public/slider_images_folder',$fileName);
                $data['slider_image'] = $fileName;

            }

            $sliderData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliderData = Slider::findOrFail($id);
        $exists = Storage::exists('public/slider_images_folder/'.$sliderData->slider_image);

        try {
            if ($exists == true){
                Storage::delete('public/slider_images_folder/'.$sliderData->slider_image);
            }

            $sliderData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Slider deleted successfully.');
    }


    public function statusActiveInactive($id)
    {
        $sliderData = Slider::findOrFail($id);
        try {
            if ($sliderData->status == 1)
            {
                $sliderData->update(['status' => '2']);
            }else{
                $sliderData->update(['status' => '1']);
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
            ->with('success', 'Slider status updated successfully.');

    }

}
