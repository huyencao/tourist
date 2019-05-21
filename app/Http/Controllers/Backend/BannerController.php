<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Models\Media;
use App\Repositories\BannerRepository;
use App\Repositories\MediaRepository;

class BannerController extends Controller
{
    protected $banner;
    protected $banner_image;

    public function __construct(BannerRepository $banner, MediaRepository $image)
    {
        $this->banner = $banner;
        $this->banner_image = $image;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_banner = $this->banner->cateSelect();

        return view('backend.banner.index', compact('data_banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->banner_image->storeFileUpload($request);
        }
        $request->merge([
            'slug' => str_slug($request->name),
            'media_id' => $image->id,
        ]);
        $banner = $this->banner->create($request->all());

        return redirect()->route('banner.index');
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
        try {
            $banner = $this->banner->findBanner($id);
            $link_image = $this->banner_image->findImage($banner->media_id);

            return view('backend.banner.edit', compact('banner', 'link_image'));
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        try {
            $banner = $this->banner->update($id, $request->all());
            if ($request->hasFile('image')) {
                $image = $this->banner_image->updateFileUpload($banner->media_id, $request);
            }

            return redirect()->route('banner.index');
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $banner = $this->banner->findBanner($id);
            $image = $this->banner_image->findImage($banner->media_id);
            if (file_exists($image->link_url)) {
                unlink($image->link_url);
            }
            $delete_image = $this->banner_image->delete($banner->media_id);
            $delete_banner = $this->banner->delete($id);

            return redirect()->route('banner.index');
        } catch (ModelNotFoundException $ex) {
            return $ex->getMessage();
        }
    }
}
