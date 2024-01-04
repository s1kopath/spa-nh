<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Volunteer;

use Illuminate\Support\Facades\Validator;

//for validation
use Illuminate\Support\Facades\Log;

//for log debug
use Illuminate\Support\Facades\Storage;

//for storage and file uploading

//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class VolunteerController extends Controller
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

        $volunteerDatas = Volunteer::all();
        $manage_volunteer = view('backend.volunteers.browse',compact('volunteerDatas'));
        return view('backend.admin_master',compact('manage_volunteer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = view('frontend.pages.volunteer_register');

        return view('frontend.home_master')->with('home_content', $content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //dd($_POST["g-recaptcha-response"]);

        $validatedData = $request->validate([
            'v_image' => ['required', 'mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'v_name' => ['required'],
            'v_email' => ['required', 'email', 'unique:volunteers'],
            'v_phone' => ['required', 'regex: /^01[1-9][0-9]{8}$/i', 'unique:volunteers'],
            'v_ocupation' => ['required'],
            'v_reasoning' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'v_image', 'g-recaptcha-response');

        try {

            /*==============================*/
            //google recaptha verification

            $secret = '6Le10DUaAAAAAEWSHJ2KhCfe4USsOxkl054Ado6s';
            $response = $_POST["g-recaptcha-response"];

            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $googleData = array(
                'secret' => '6Le10DUaAAAAAEWSHJ2KhCfe4USsOxkl054Ado6s',
                'response' => $_POST["g-recaptcha-response"]
            );

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'content' => 'http_build_query($googleData)'
                )
            );

            $context = stream_context_create($options);
            $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");

            $captcha_success = json_decode($verify);

            if ($captcha_success->success == false) {
                return redirect()->route('volunteer.create')
                    ->with('error', 'Google verification error!!');
            } else {
                //dd($data);
                /*=============================*/

                if ($request->hasFile('v_image')) {
                    $fileName = md5(time()) . '.' . $request->file('v_image')->extension();
                    $request->file('v_image')->storeAS('public/volunteer_image_folder', $fileName);
                    $data['v_image'] = $fileName;
                }

                Volunteer::create($data);
            }

        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return back()
            ->with('success', 'You have successfully registered...');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->AuthCheck();

        $volunteerData = Volunteer::findOrFail($id);
        $show_volunteer = view('backend.volunteers.read',compact('volunteerData'));
        return view('backend.admin_master', compact('show_volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteerData = Volunteer::findOrFail($id);
        $exists = Storage::exists('public/volunteer_image_folder/'.$volunteerData->v_image);

        try {
            if ($exists == true){
                Storage::delete('public/volunteer_image_folder/'.$volunteerData->v_image);
            }

            $volunteerData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Volunteer deleted successfully.');
    }
}
