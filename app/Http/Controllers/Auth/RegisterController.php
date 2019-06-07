<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\MediaRepository;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    protected $image;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MediaRepository $image)
    {
        $this->middleware('guest');
        $this->image = $image;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fullname' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (Input::file('image')) {
            $data = (object) $data;
            $image = $this->image->storeFileUpload($data);
        }

        $user = User::create([
            'username' => $data->username,
            'email' => $data->email,
            'fullname' => $data->fullname,
            'password' => Hash::make($data->password),
            'password_confirmation' => Hash::make($data->password_confirmation),
            'avatar_id' => $image->id,
        ]);

        return $user;
    }
}
