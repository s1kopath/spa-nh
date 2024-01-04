<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ImgGallery;
use App\Photo;

use Illuminate\Support\Facades\Validator;

//for validation
use Illuminate\Support\Facades\Log;

//for log debug
use Illuminate\Support\Facades\Storage;

//for storage and file uploading

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ImgGalleryController extends Controller
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

        $imgGalleryDatas = ImgGallery::all();
        $manage_img_gallery = view('backend.image_gallery.browse', compact('imgGalleryDatas'));
        return view('backend.admin_master', compact('manage_img_gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AuthCheck();

        $add_img_gallery = view('backend.image_gallery.edit_add');
        return view('backend.admin_master', compact('add_img_gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_images' => ['required'],
            'gallery_images.*' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'gallery_title' => ['required'],
            'status' => ['required'],
        ]);

        $data = $request->except('_token', 'admin_id', 'gallery_images');

        try {
            $data['created_by'] = $request->admin_id;

            DB::beginTransaction();

            $imgGallery = ImgGallery::create($data);

            if ($request->hasFile('gallery_images')) {
                $i = 1;
                foreach ($request->gallery_images as $gallery_image) {
                    $fileName = md5(time()) . $i . '.' . $gallery_image->extension();
                    $gallery_image->storeAS('public/gallery_images_folder', $fileName);
                    $imgGallery->photos()->create(['gallery_image' => $fileName]);
                    $i++;
                }
            }
            DB::commit();

        } catch (\Throwable $exception) {
            DB::rollBack();
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return redirect()->route('photo-gallery.index')
            ->with('success', 'Gallery created successfully.');
        /*return back()
            ->with('success', 'Gallery created successfully.');*/

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->AuthCheck();

        $imgGalleryData = ImgGallery::findOrFail($id);
        $edit_img_gallery = view('backend.image_gallery.edit_add', compact('imgGalleryData'));
        return view('backend.admin_master', compact('edit_img_gallery'));
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
        $request->validate([
            //'gallery_images' => ['required'],
            'gallery_images.*' => ['mimetypes:image/jpeg,image/jpg,image/png', 'max:2048'],
            'gallery_title' => ['required'],
            'status' => ['required'],
        ]);

        $imgGalleryData = ImgGallery::findOrFail($id);

        $data = $request->except('_token', 'admin_id', 'gallery_images');

        try {
            $data['created_by'] = $request->admin_id;

            DB::beginTransaction();

            $imgGalleryData->update($data);
            //$imgGallery = ImgGallery::create($data);

            if ($request->hasFile('gallery_images')) {
                $i = 1;
                foreach ($request->gallery_images as $gallery_image) {
                    $fileName = md5(time()) . $i . '.' . $gallery_image->extension();
                    $gallery_image->storeAS('public/gallery_images_folder', $fileName);
                    $imgGalleryData->photos()->create(['gallery_image' => $fileName]);
                    $i++;
                }
            }
            DB::commit();

        } catch (\Throwable $exception) {
            DB::rollBack();
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }

        return redirect()->route('photo-gallery.index')
            ->with('success', 'Gallery created successfully.');
        /*return back()
            ->with('success', 'Gallery created successfully.');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imgGalleryData = ImgGallery::findOrFail($id);
        $photos = $imgGalleryData->photos()->get();

        try {
            foreach ($photos as $photo) {
                $exists = Storage::exists('public/gallery_images_folder/' . $photo->gallery_image);
                if ($exists == true) {
                    Storage::delete('public/gallery_images_folder/' . $photo->gallery_image);
                }
            }

            DB::beginTransaction();
            $imgGalleryData->photos()->delete();
            $imgGalleryData->delete();
            DB::commit();
        } catch (\Throwable $exception) {
            DB::rollBack();
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Gallery deleted successfully.');
    }


    public function deleteSinglePhoto($id)
    {
        $photo = Photo::findOrFail($id);

        $exists = Storage::exists('public/gallery_images_folder/' . $photo->gallery_image);
        try {
            if ($exists == true) {
                Storage::delete('public/gallery_images_folder/' . $photo->gallery_image);
            }

            $photo->delete();
        } catch (\Throwable $exception) {
            Log::debug($exception->getMessage());
            return back()
                ->with([
                    'message' => $exception,
                    'alert-type' => 'error'
                ]);
        }
        return back()
            ->with('success', 'Photo deleted successfully.');
    }

    public function statusActiveInactive($id)
    {
        $imgGalleryData = ImgGallery::findOrFail($id);
        try {
            if ($imgGalleryData->status == 1) {
                $imgGalleryData->update(['status' => '2']);
            } else {
                $imgGalleryData->update(['status' => '1']);
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
            ->with('success', 'Photo Gallery status updated successfully.');

    }

}
