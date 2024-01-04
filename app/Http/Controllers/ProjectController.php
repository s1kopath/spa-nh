<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use Illuminate\Support\Facades\Validator;   //for validation
use Illuminate\Support\Facades\Log; //for log debug
use Illuminate\Support\Facades\Storage; //for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
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
        $projectDatas = Project::all();
        $manage_projects = view('backend.projects.browse',compact('projectDatas'));
        return view('backend.admin_master',compact('manage_projects'));
            //->with('admin_content', 'manage_projects');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_projects = view('backend.projects.edit_add');
        return view('backend.admin_master', compact('add_projects'));
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
            'project_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'project_title' => ['required'],
            'project_content' => ['required'],
            'project_category' => ['required'],
            'status' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'admin_id', '_wysihtml5_mode');
        //dd($data);


        try {
            $data['created_by'] = $request->admin_id;

            $fileName = md5(time()).'.'.$request->file('project_image')->extension();
            $request->file('project_image')->storeAS('public/projects_image_folder',$fileName);
            $data['project_image'] = $fileName;
            //dd($data);
            Project::create($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Project created successfully.');
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
        $projectData = Project::findOrFail($id);
        $edit_project = view('backend.projects.edit_add',compact('projectData'));
        return view('backend.admin_master', compact('edit_project'));
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
            'project_title' => ['required'],
            'project_content' => ['required'],
            'project_category' => ['required'],
            'status' => ['required'],
            'project_image' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
        ]);

        $projectData = Project::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'old_project_image', '_wysihtml5_mode');
        //dd($data);

        try {
            $data['updated_by'] = $request->admin_id;
            $data['project_image'] = $request->old_project_image;

            if ($request->hasFile('project_image')) {

                /*$request->validate([
                    'project_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
                ]);*/

                $exists = Storage::exists('public/projects_image_folder/'.$request->old_project_image);
                if ($exists == true){
                    Storage::delete('public/projects_image_folder/'.$projectData->project_image);
                }

                $fileName = md5(time()).'.'.$request->file('project_image')->extension();
                $request->file('project_image')->storeAS('public/projects_image_folder',$fileName);
                $data['project_image'] = $fileName;

            }

            $projectData->update($data);
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projectData = Project::findOrFail($id);
        $exists = Storage::exists('public/projects_image_folder/'.$projectData->project_image);

        try {
            if ($exists == true){
                Storage::delete('public/projects_image_folder/'.$projectData->project_image);
            }

            $projectData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Project deleted successfully.');
    }

    public function statusActiveInactive($id)
    {
        $projectData = Project::findOrFail($id);
        try {
            if ($projectData->status == 1)
            {
                $projectData->update(['status' => '2']);
            }else{
                $projectData->update(['status' => '1']);
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
            ->with('success', 'Project status updated successfully.');

    }

}
