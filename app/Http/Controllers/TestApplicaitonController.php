<?php 

namespace App\Http\Controllers;

use DB;

use App\Http\Requests\ClientRequest;
use App\Clients;
class TestApplicaitonController extends Controller {

public function testsql()
	{
		//gets the 
		$results = DB::select('select * from client_info');
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
public function ssdd(ClientRequest $request)
{
    $c = new Clients;
    $c->fname = $request->input("fn");
    $c->lname = $request->input("ln");
    $c->email = $request->input("email");
    $c->country = $request->input("country");
    $c->state = $request->input("state");
    $c->city = $request->input("city");
    $c->zip = $request->input("zip");
    $c->phone = $request->input("phone");
    $c->dob = $request->input("dob");
    $c->gender = $request->input("gender");
    $c->category = $request->input("category");
    $c->talent = $request->input("talent");
    $c->portfolio = $request->input("portfolio");
    $c->audio = $request->input("audio");
    $c->video = $request->input("video");
    $c->desc = $request->input("desc");
    $c->opportunities = $request->input("opportunities");
    $c->representation = $request->input("representation");
    $c->talentdev = $request->input("talentdev");
    $c->genserv = $request->input("genserv");
    $c->vanityluxury = $request->input("vanityluxury");
    $c->additional = $request->input("additional");

    $c->save();
    return back()->withInput();

}
   public function appview()
    {
        return view('testapp');
    }
}