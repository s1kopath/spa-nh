<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Donation;

//for validation
use Illuminate\Support\Facades\Validator;

//for log debug
use Illuminate\Support\Facades\Log;

//for storage and file uploading
use Illuminate\Support\Facades\Storage;


//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller
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

        $donationDatas = Donation::all();
        $manage_donation = view('backend.donations.browse',compact('donationDatas'));
        return view('backend.admin_master',compact('manage_donation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = view('frontend.pages.make_donation');
        return view('frontend.home_master')->with('home_content', $content);
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
        //dd($_POST["g-recaptcha-response"]);

        $validatedData = $request->validate([
            'doner_name' => ['required'],
            'doner_email' => ['required', 'email'],
            'doner_phone' => ['required', 'regex: /^01[1-9][0-9]{8}$/i'],
            'donation_amount' => ['required'],
            'receiver_bkash_no' => ['required', 'regex: /^01[1-9][0-9]{8}$/i'],
            'sender_bkash_no' => ['required', 'regex: /^01[1-9][0-9]{8}$/i'],
            'payment_method' => ['required'],
        ]);
        //dd($validatedData);

        $data = $request->except('_token', 'g-recaptcha-response');

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
                return redirect()->route('donation.create')
                    ->with('error', 'Google verification error!!');
            } else {
                //dd($data);
                /*=============================*/

                Donation::create($data);
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
            ->with('success', 'You have successfully make your donation...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->AuthCheck();

        $donationData = Donation::findOrFail($id);
        $show_donation = view('backend.donations.read',compact('donationData'));
        return view('backend.admin_master', compact('show_donation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donationData = Donation::findOrFail($id);

        try {
            $donationData->delete();
        }catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Donation deleted successfully.');
    }
}
