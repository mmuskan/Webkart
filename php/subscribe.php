<?php
$connect=mysqli_connect('localhost','root','','web1');
$flag=0;

$email=isset($_POST['email']) ? $_POST['email']: 'xyz';
//echo " ";
//echo $email;


$query="insert into subscribe(email) values('$email')";
if((mysqli_query($connect,$query)))
{
echo  "success";
//sleep(5);
$flag=1;
}
else 
{
echo "failed";
$flag=0;
} 
?>



<?php
if($flag==1)
{
	echo "<script type='text/javascript'>alert('Added Successfully')</script>";
}
	?>
