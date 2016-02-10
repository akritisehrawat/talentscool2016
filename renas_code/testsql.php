<?php
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    viewTable();$link = mysqli_connect('68.181.201.23', 'tscool_newtest', 'Test123!@#', 'tscool_test') or die('Could not connect to mysql');
$sql    = "Select `id`, `fname`, `lname`, `nname`, `email`, `city`, `state`, `zipcode`, `gender`, `self_introduction`, `phone_number`, `dob`, `personal_photo`, `status`, `created_at`, `updated_at` FROM `clients` WHERE fname like 'Akriti'";
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
?>