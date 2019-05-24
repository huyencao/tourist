<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Model;
use App\Models\Media;
use App\Repositories\UserRepository;
use App\Repositories\MediaRepository;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    protected $user;
    protected $image;

    public function __construct(UserRepository $user, MediaRepository $image)
    {
        $this->user = $user;
        $this->image = $image;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->user->listUser();

        return view('backend.user.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if ($request->hasFile('image')) {
            $image = $this->image->storeFileUpload($request);
        }
        $request->merge([
            'avatar_id' => $image->id,
        ]);
        $this->user->create($request->all());

        return redirect()->route('user.index');
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
        $user = $this->user->findUser($id);

        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = $this->user->update($id, $request->all());
        if ($request->hasFile('image')) {
            $image = $this->image->updateFileUpload($user->avatar_id, $request);
        }

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->user->findUser($id);
        if (file_exists($user->media->link_url)) {
            unlink($user->media->link_url);
        }
        $this->user->delete($id);
        $this->image->delete($user->avatar_id);

        return redirect()->route('user.index');
    }
}
