<?php
$db = mysqli_connect('localhost','root','','realestate') or die('Error connecting to MySQL server.');
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$comments=$_POST["comments"];
$q = "select email from subs where email='$email'";
$q1=mysqli_query($db, $q) or die('Error querying database.');
if (mysqli_num_rows($q1) == 0){
	$query = "insert into subs(name,email) values('$name','$email')";
	mysqli_query($db, $query) or die('Error querying database.');
	$query1 = "insert into contact(name,email,subject,comment) values('$name','$email','$subject','$comments')";
	mysqli_query($db, $query1) or die('Error querying database.');
	echo "<script type='text/javascript'>alert('Your query has been recorded! We will get in touch with you soon');</script>";
	echo '<script type="text/javascript">window.location= "contact.html"</script>';
}
else{
	$query3 = "insert into contact(name,email,subject,comments) values('$name','$email','$subject','$comments')";
	mysqli_query($db, $query3) or die('Error querying database.');
	echo "<script type='text/javascript'>alert('Your query has been recorded! We will get in touch with you soon');</script>";
	echo '<script type="text/javascript">window.location= "contact.html"</script>';
}
?>