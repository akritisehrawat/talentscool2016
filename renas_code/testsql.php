<html>
<body>

<style>
</style>
<?php

function viewTable()
{
    $link = mysqli_connect('50.87.145.4', 'tscool_newtest', 'Test123!@#', 'tscool_test') or die('Could not connect to mysql'. mysql_error());
    $sql    = "Select `id`, `fname`, `lname`, `nname`, `email`, `city`, `state`, `zipcode`, `gender`, `self_introduction`, `phone_number`, `dob`, 
	`personal_photo`, `status`, `created_at`, `updated_at` FROM `clients` WHERE fname ="."'".$_GET['firstname']."'";
    $result = mysqli_query($link, $sql);

    if (!$result) {    echo "DB Error, could not query the database\n";    echo 'MySQL Error: ' . mysql_error();    exit;}
    echo '<table border ="2"><tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>E-Mail</th><th>City</th><th>State</th><th>Zipcode</th><th>Gender</th></tr>';
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    echo '<tr><td>'.
    $row['fname']."\t</td>"."<td>".
    $row['lname']."\t</td>"."<td>".
    $row['email']."\t</td>". "<td>".
    $row['city']."\t</td>"."<td>".
    $row['state']."\t</td>"."<td>".
    $row['zipcode']."\t</td>"."<td>".
    $row['gender']."\t</td></tr>";
    }
    echo '</table>';
}
function insertIntoTable()
{
	#need to check auto increment of ID
	$id = 92910;
    $link = mysqli_connect('50.87.145.4', 'tscool_newtest', 'Test123!@#', 'tscool_test') or die('Could not connect to mysql'. mysql_error());
    $sql    = "INSERT INTO `clients`
	(`id`, `fname`, `lname`, `nname`, `email`, `city`, `state`, `zipcode`, `gender`, 
	`self_introduction`, `phone_number`, `dob`, `personal_photo`, `status`, `created_at`, `updated_at`) 
	VALUES ('',
	"."'".$_POST['fname']."'".",
	"."'".$_POST['lname']."'".",
	'Deadpool',
	"."'".$_POST['email']."'".",
	"."'".$_POST['city']."'".",
	"."'".$_POST['state']."'".",
	"."'".$_POST['zip']."'".",
	"."'".$_POST['gender']."'".",
	'Ideas are Bulletproof', 
	"."'".$_POST['phone']."'".",
	"."'".$_POST['dob']."'".",
	'',
	'',
	'',
	'')";
	
	$result = mysqli_query($link, $sql);

    if (!$result) {    echo "DB Error, could not query the database\n";    echo 'MySQL Error: ' . mysql_error();    exit;}
    echo 'Successfully inserted the following entries into table!<br>';
	echo 'firstname = '.$_POST['fname'].'<br>';
	echo 'lastname = '.$_POST['lname'].'<br>';
	echo 'email = '.$_POST['email'].'<br>';
	echo 'gender = '.$_POST['gender'].'<br>';
	echo 'city = '.$_POST['city'].'<br>';
	echo 'state = '.$_POST['state'].'<br>';
	echo 'zip = '.$_POST['zip'].'<br>';
	echo 'phonenumber = '.$_POST['phone'].'<br>';
	echo 'dateofbirth = '.$_POST['dob'].'<br>';
	echo 'profilepic? = '.$_POST['pp'].'<br>';
	echo 'country = '.$_POST['country'].'<br>';
	echo 'zip = '.$_POST['zip'].'<br>';
}
if(isset($_GET['submit']))
{
   viewTable();
}
else
	insertIntoTable();
?>
<form method = "GET">
<p>Enter First name </p> 
<input type = "text" name = "firstname" id = "firstname">
<input type = "submit" name = "submit" value = "CLICKINGTHING">
</form>


</html>