<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Member;
use App\SiteInfo;
use App\Project;
use App\Event;
use App\News;
use App\Notice;
use App\ImgGallery;
use App\Photo;

class HomeController extends Controller
{
    /* ------------------- Frontend Home ------------------------ */
    public function index()
    {
        $home_content = view('frontend.pages.home_master_content');

        return view('frontend.home_master', compact('home_content'));
        //return view('frontend.home_master')->with('home_content',$home_content);
    }

    /* ------------------- Search Result ------------------------ */
    /*public function searchResult()
    {
        $home_content = view('frontend.pages.search_result');

        return view('frontend.home_master', compact('home_content'));
        //return view('frontend.home_master')->with('home_content',$home_content);
    }*/

    /* ------------------- Frontend About SPA ------------------------ */
    public function about()
    {
        $aboutSpa = Page::where(['status' => '1', 'pages_slug' => 'about_spa'])->first();
        $home_content = view('frontend.pages.about_spa', compact('aboutSpa'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Frontend Mission & Vision ------------------------ */
    public function missionVision()
    {
        $mission = Page::where(['status' => '1', 'pages_slug' => 'mission'])->first();
        $vision = Page::where(['status' => '1', 'pages_slug' => 'vision'])->first();
        $home_content = view('frontend.pages.mission_vision', compact('mission', 'vision'));
        return view('frontend.home_master', compact('home_content'));
    }


    /* ------------------- All Members ------------------------ */
    public function allMembers($memberCategory)
    {
        /* jason_contains() works on mysql 5.6>upper version.
         * $allMembers = Member::where(['status'=> '1'])
            ->whereJsonContains('member_category', $memberCategory)
            ->orderBy('member_ordering','ASC')->get();
        */

        //query to get all members
        $query = Member::where('status', '1')
            ->orderBy('member_ordering','ASC')->get();

        //filtering to get only $memberCategory members
        $allMembers = NULL;
        $i = 0;
        foreach($query as $q){
            foreach ($q->member_category as $vq){
                if ($vq == $memberCategory){
                    $allMembers[$i] = $q;
                    $i++;
                }
            }
        }

        $home_content = view('frontend.pages.all_members', compact('allMembers','memberCategory'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Single Member Profile ------------------------ */
    public function singleMemberProfile($id)
    {
        $singleMemberProfile = Member::findOrFail($id);
        $home_content = view('frontend.pages.single_member_profile', compact('singleMemberProfile'));
        return view('frontend.home_master', compact('home_content'));
    }


    /* ------------------- Frontend education ------------------------ */
    public function education()
    {
        $education = Page::where(['status' => '1', 'pages_slug' => 'education'])->first();
        $home_content = view('frontend.pages.education', compact('education'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Frontend health ------------------------ */
    public function health()
    {
        $health = Page::where(['status' => '1', 'pages_slug' => 'health'])->first();
        $home_content = view('frontend.pages.health', compact('health'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Frontend training ------------------------ */
    public function training()
    {
        $training = Page::where(['status' => '1', 'pages_slug' => 'training'])->first();
        $home_content = view('frontend.pages.training', compact('training'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Completed Projects ------------------------ */
    public function completedProjects()
    {
        $completedProjects = Project::where(['status' => '1', 'project_category' => Project::CATEGORY_COMPLETED])->paginate(9);
        $home_content = view('frontend.pages.completed_projects', compact('completedProjects'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Running Projects ------------------------ */
    public function runningProjects()
    {
        $runningProjects = Project::where(['status' => '1', 'project_category' => Project::CATEGORY_RUNNING])->paginate(9);
        $home_content = view('frontend.pages.running_projects', compact('runningProjects'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Future Projects ------------------------ */
    public function futureProjects()
    {
        $futureProjects = Project::where(['status' => '1', 'project_category' => Project::CATEGORY_UPCOMING])->paginate(9);
        $home_content = view('frontend.pages.future_projects', compact('futureProjects'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Single Project ------------------------ */
    public function singleProject($id)
    {
        $singleProject = Project::findOrFail($id);
        $home_content = view('frontend.pages.single_project', compact('singleProject'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- All Events ------------------------ */
    public function allEvents()
    {
        $allEvents = Event::where('status', 1)->orderBy('start_date','DESC')->paginate(9);
        $home_content = view('frontend.pages.all_events', compact('allEvents'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Single Event ------------------------ */
    public function singleEvent($id)
    {
        $singleEvent = Event::findOrFail($id);
        $home_content = view('frontend.pages.single_event', compact('singleEvent'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- All News ------------------------ */
    public function allNews()
    {
        $allNewses = News::where('status', 1)->orderBy('published_date','DESC')->paginate(9);
        $home_content = view('frontend.pages.all_news', compact('allNewses'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Single News ------------------------ */
    public function singleNews($id)
    {
        $singleNews = News::findOrFail($id);
        $home_content = view('frontend.pages.single_news', compact('singleNews'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- All Notice ------------------------ */
    public function allNotice()
    {
        $allNotices = Notice::where('status', 1)->orderBy('published_date','DESC')->paginate(9);
        $home_content = view('frontend.pages.all_notice', compact('allNotices'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Single Notice ------------------------ */
    public function singleNotice($id)
    {
        $singleNotice = Notice::findOrFail($id);
        $home_content = view('frontend.pages.single_notice', compact('singleNotice'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Photo Galleries ------------------------ */
    public function photoGallery()
    {
        $photoAlbums = ImgGallery::where('status', 1)->orderBy('created_at','DESC')->paginate(9);
        $home_content = view('frontend.pages.photo_gallery', compact('photoAlbums'));
        return view('frontend.home_master', compact('home_content'));
    }

    /* ------------------- Single Gallery Album ------------------------ */
    public function singlePhotoAlbum($id)
    {
        $imgGallery = ImgGallery::findOrFail($id);
        $singlePhotoAlbum = Photo::where('img_gallery_id',$id)->get();
        $home_content = view('frontend.pages.single_photo_gallery', compact('singlePhotoAlbum','imgGallery'));
        return view('frontend.home_master', compact('home_content'));
    }



    /* ------------------- Frontend Contact Us ------------------------ */
    public function contactUs()
    {
        $contact = SiteInfo::first();
        $home_content = view('frontend.pages.contact_us', compact('contact'));
        //$home_content = view('frontend.pages.contact_us');
        return view('frontend.home_master', compact('home_content'));
    }

}
