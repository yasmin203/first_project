<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }		

	protected function showLoginForm()
	{
		$systems = User::distinct()->get(['sys']);
		return view('auth.login')->with('systems',$systems);
	}

	protected function authenticated(Request $request, $user)
    {
		$sys = $request->sys;
		if(null === $sys)
			return;
		session()->put('user_system',$sys); // we can use this later in a middleware 
		                                    //to prevent user from seeing other user page
		$targetRoute = url($sys.'/routes');
		return redirect($targetRoute);
    }
}
