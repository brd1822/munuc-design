<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use App\Rules\ReCaptcha;
use DB, Log;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    /**
     * Custom authenticate via ajax
     *
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $request->validate(
          [
              'email' => ['required','string','email','max:50','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
              'password'=> 'required|min:8|max:15',//|alpha_num|min:6
          ]
        );
        $credentials = $request->only('email', 'password');
        
        if (auth::attempt($credentials)) {
       // if (auth()->attempt($credentials)) {
       //dd($credentials);
            // Authentication passed...
            $redirectUrl = redirect()->intended('dashboard')->getTargetUrl();
            //for tracking
            $user = Auth::user();
            //$br= $this->getBrowser();
            // last login saved
            //$user->last_login = Carbon::now();
            //$user->ip = $request->ip();
           // $user->user_agent = $br['name'];
            //$user->login_status = 1;
            //$user->save();

            //$userId = Auth::user()->id;
            //$sqlUpdate = DB::table('users')->where('id', $userId)->update(array('last_login'=>date('d-m-Y H:i:s'),'ip'=>$request->ip(),'user_agent'=>$br['name'],'login_status'=>'1'));

            $signedupAt = Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at, "UTC");
            $user->signedupAt = $signedupAt->toIso8601ZuluString();

            $crisp_signature = hash_hmac("sha256", $user->email,env('CRISP_SECRET_KEY'));
            
            if ($request->expectsJson()) {
                //dd('HiOTT');
                $verified = $user->email_verified_at?true:false;
              //  $token= auth()->attempt($credentials);
               // return $this->createNewToken($token, $crisp_signature, $verified);
                return response()->json(['redirectUrl' => $redirectUrl, 'user' => $user,'crisp_signature'=>$crisp_signature,
                        'verified'=>$verified,'status'=>200]);
            }
                else  return redirect($redirectUrl);
        }

        if ($request->expectsJson()) {
            return response()->json(['message' => "Incorrect email or password. User not authenticated Demo.",
                                'status'=>401],401);
        }
        else{ 
          return back()->withInput()->with(['message', 'Incorrect email or password. User not authenticated!',
                            'status'=>401],401);
        
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function logout(Request $request)
    {
     
      $userId = Auth::user()->id;
      
        //$br= $this->getBrowser();
        //DB::table('users')->where('id', $userId)->update(array('last_login'=>date('d-m-Y H:i:s'),'ip'=>$request->ip(),'user_agent'=>$br['name'],'login_status'=>'0'));
          session()->flush();
          return redirect(
              property_exists($this, 'redirectAfterLogout')
                      ? $this->redirectAfterLogout : 'login'
          );
      
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
     /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */

    protected function authenticated(){
        \Auth::logoutOtherDevices(request('password'));
    }

    function getBrowser() {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version= "";

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
          $platform = 'linux';
        }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
          $platform = 'mac';
        }elseif (preg_match('/windows|win32/i', $u_agent)) {
          $platform = 'windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
          $bname = 'Internet Explorer';
          $ub = "MSIE";
        }elseif(preg_match('/Firefox/i',$u_agent)){
          $bname = 'Mozilla Firefox';
          $ub = "Firefox";
        }elseif(preg_match('/OPR/i',$u_agent)){
          $bname = 'Opera';
          $ub = "Opera";
        }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
          $bname = 'Google Chrome';
          $ub = "Chrome";
        }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
          $bname = 'Apple Safari';
          $ub = "Safari";
        }elseif(preg_match('/Netscape/i',$u_agent)){
          $bname = 'Netscape';
          $ub = "Netscape";
        }elseif(preg_match('/Edge/i',$u_agent)){
          $bname = 'Edge';
          $ub = "Edge";
        }elseif(preg_match('/Trident/i',$u_agent)){
          $bname = 'Internet Explorer';
          $ub = "MSIE";
        }

        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
      ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
          // we have no matching number just continue
        }
        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
          //we will have two since we are not using 'other' argument yet
          //see if version is before or after the name
          if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
              $version= $matches['version'][0];
          }else {
              $version= $matches['version'][1];
          }
        }else {
          $version= $matches['version'][0];
        }

        // check if we have a number
        if ($version==null || $version=="") {$version="?";}

        return array(
          'userAgent' => $u_agent,
          'name'      => $bname,
          'version'   => $version,
          'platform'  => $platform,
          'pattern'    => $pattern
        );
      }
}
