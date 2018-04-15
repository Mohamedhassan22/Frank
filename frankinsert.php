
<?php

  $connect =mysqli_connect("localhost","root","", "login");

if( $connect )
{

$name=$_POST['n1'];
$pass=$_POST['n2'];
$add=$_POST['n4'];


if(empty($name) or empty($pass) or empty($add))

{
	include 'ErroReg.php';
}
else
{
$q="INSERT INTO stu (n1 , n2 , n4) VALUES ( '$name' , '$pass' , '$add' )";
		$res = mysqli_query($connect,$q);
	if($res)
	{
		include 'sucreg.php';
	}
	else 
			include 'ErroReg.php';
}}
else
{
	echo "لم يتم الاتصال بقاعدة البيانات";
}

?>