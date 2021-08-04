<?php
$connect=mysqli_connect('localhost','root','','web1');
$flag=0;
$name=isset($_POST['name']) ? $_POST['name']: 'xyz';
//echo $name;
$email=isset($_POST['email']) ? $_POST['email']: 'xyz';
//echo " ";
//echo $email;

$mobile=isset($_POST['mobile']) ? $_POST['mobile']: 'xyz';
//echo " ";
//echo $mobile;

$comment=isset($_POST['comment']) ? $_POST['comment']: 'xyz';
//echo $comment;



$query="insert into contact_us(name,email,mobile,comment) values('$name','$email','$mobile','$comment')";
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
