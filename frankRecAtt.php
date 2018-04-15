
<?php

  $connect =mysqli_connect("localhost","root","", "database");

if( $connect )
{

$name=$_POST['b1'];
$add=$_POST['b2'];
$data=$_POST['s18'];
$photo=$_POST['b3'];
$phot=$_POST['b4'];

if(empty($name) or empty($add) or empty($data) or empty($photo) or empty($phot))

{
	include 'ErroReg.php';
}
else
{
$q="INSERT INTO lecone (B1 , B2 , s18 , B3 , B4) VALUES ( '$name' , '$add' , '$data' , '$photo' , '$phot' )";
		$res = mysqli_query($connect,$q);
	if($res)
	{
		include 'Stu-Check.php';
	}
	else 
				include 'ErroReg.php';
}}
else
{
	echo "لم يتم الاتصال بقاعدة البيانات";
}

?>