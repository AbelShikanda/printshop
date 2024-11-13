<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\newAccount;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
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
    public function __construct()
    {
        $this->middleware('guest');
    }

    // /**
    //  * Show the application registration form.
    //  *
    //  * @return \Illuminate\View\View
    //  */
    // public function showRegistrationForm(Request $request)
    // {
    //     // Store the previous URL in the session
    //     $request->session()->put('previous_url', url()->previous());

    //     return view('auth.register');
    // }

    // /**
    //  * Handle a registration request for the application.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // public function register(Request $request)
    // {
    //     // Validate incoming registration request
    //     $this->validator($request->all())->validate();

    //     // Create new user instance
    //     $user = $this->create($request->all());

    //     // Dispatch Registered event
    //     event(new Registered($user));

    //     // Determine redirect path
    //     $redirectTo = session('previous_url') ?? $this->redirectTo;

    //     // Clear the session variable
    //     session()->forget('previous_url');

    //     // After registration, redirect to the previous URL or $redirectTo
    //     return redirect()->intended($redirectTo);
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'town' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'town' => $data['town'],
            'location' => $data['location'],
            'password' => Hash::make($data['password']),
        ]);
        
        $email = Admin::where('is_admin', 1)->pluck('email');
    
        Mail::to('printshopeld@gmail.com')
        ->bcc($email)
        ->send(new newAccount($user));

        return $user;
    }
}
