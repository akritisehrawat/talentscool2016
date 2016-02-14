<?php namespace App\Http\Controllers;

use DB;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function landing(){
		return view('index');
	}
	public function index()
	{
		return view('landingApp');
	}
	public function aboutUs()
	{
		return view('aboutus');
	}
	public function whatwedo()
	{
		return view('whatwedo');
	}
	public function sendmail(){
		$to='contact@talentscool.com'.',';
		$to.='michaelbpratt@gmail.com';
		$subject='Message from ';
		$subject.=\Input::get('receiver');
		$message=\Input::get('message');
		$headers = 'From: '.\Input::get('email')."\r\n".
				'Reply-To: '.\Input::get('email') . "\r\n";
		$status = mail($to,$subject,$message,$headers);
		$ret = "";
		if($status)
		{
			$ret = array("result"=> 'success');
		}
		else
			$ret = array("result" => 'fail');
		return \Response::json($ret);
	}
	//added by mohit
	public function testsql()
	{
		//gets the 
		$results = DB::select('select * from clients');
		echo '<table border ="2"><tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>City</th><th>State</th><th>Zipcode</th><th>Gender</th></tr>';
    	foreach ($results as $result)
    	{
    		echo '<tr><td>'.
    		$result->fname."\t</td>"."<td>".
    		$result->lname."\t</td>"."<td>".
    		$result->email."\t</td>". "<td>".
   			$result->city."\t</td>"."<td>".
    		$result->state."\t</td>"."<td>".
    		$result->zipcode."\t</td>"."<td>".
   			$result->gender."\t</td></tr>";
    	}
    	echo '</table>';		
	}

}
