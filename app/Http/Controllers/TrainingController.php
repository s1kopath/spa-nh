<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        //
    }


    /* ********************** IT Training Section ********************** */

    /* ------------------- IT Training ------------------------ */
    public function digitalMarketing()
    {
        $home_content = view('frontend.pages.training.digital_marketing');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Graphics Design ------------------------ */
    public function graphicsDesign()
    {
        $home_content = view('frontend.pages.training.graphics_design');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Web Design Development ------------------------ */
    public function webDesignDevelopment()
    {
        $home_content = view('frontend.pages.training.web_design_development');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Mobile App Development ------------------------ */
    public function mobileAppDevelopment()
    {
        $home_content = view('frontend.pages.training.mobile_app_development');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Professional Short Course ------------------------ */
    public function professionalShortCourse()
    {
        $home_content = view('frontend.pages.training.professional_short_course');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Programming ------------------------ */
    public function programming()
    {
        $home_content = view('frontend.pages.training.programming');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Telecommunication ------------------------ */
    public function telecommunication()
    {
        $home_content = view('frontend.pages.training.telecommunication');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Ecommerce Solution ------------------------ */
    public function ecommerceSolution()
    {
        $home_content = view('frontend.pages.training.ecommerce_solution');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Industrial Attachment ------------------------ */
    public function industrialAttachment()
    {
        $home_content = view('frontend.pages.training.industrial_attachment');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ********************** Network Solution ********************** */
    /* ------------------- CISCO ------------------------ */
    public function cisco()
    {
        $home_content = view('frontend.pages.training.cisco');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Ccna Collaboration ------------------------ */
    public function ccnaCollaboration()
    {
        $home_content = view('frontend.pages.training.ccna_collaboration');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Ccna Routing And Switching ------------------------ */
    public function ccnaRoutingAndSwitching()
    {
        $home_content = view('frontend.pages.training.ccna_routing_and_switching');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Ccnp Routing And Switching ------------------------ */
    public function ccnpRoutingAndSwitching()
    {
        $home_content = view('frontend.pages.training.ccnp_routing_and_switching');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Mcsa 2016 Server ------------------------ */
    public function mcsa2016Server()
    {
        $home_content = view('frontend.pages.training.mcsa_2016_server');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- MikroTik ------------------------ */
    public function mikrotik()
    {
        $home_content = view('frontend.pages.training.mikrotik');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- A Network ------------------------ */
    public function aNetwork()
    {
        $home_content = view('frontend.pages.training.a_network');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Freelancer ------------------------ */
    public function freelancer()
    {
        $home_content = view('frontend.pages.training.freelancer');
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- PKSF ------------------------ */
    public function pksf()
    {
        $home_content = view('frontend.pages.training.pksf');
        return view('frontend.home_master', compact('home_content'));
    }
}
