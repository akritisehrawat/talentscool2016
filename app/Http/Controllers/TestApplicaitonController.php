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
    echo 'potato';
    $c = new Clients;
    $c->fname = $request->input("fn");

    echo 'double potato';
    $c->save();
    return back()->withInput();

}
   public function appview()
    {
        return view('testapp');
    }
}