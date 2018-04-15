
<?php


	
$select1 = $_POST['SS1'];                 /** depert **/

$x='VT';                                    /**cs**/
$y='VP';                                   /**stat**/
$z='BWM';                                  /**math**/





$select2 = $_POST['MS1'];             /**deliver to**/

$v='MO';                              /**وكيل الكلية لشئون التعليم والطلاب**/
$t='WO';                             /** رئيس قسم المحدد بالاعلي**/
$p='NO';                              /** مرشد القسم **/




$connect =mysqli_connect("localhost","root","", "comp");

$name=$_POST['xe1'];
$pass=$_POST['xe2'];
$add=$_POST['xe3'];
$name1=$_POST['xe4'];
$pass1=$_POST['xe5'];
$add1=$_POST['xe6'];
$name2=$_POST['ms'];
$pass2=$_POST['mw'];
$add2=$_POST['masa'];


if( $connect )
{
  
if($select1==$x)
{
 
              if($select2==$t)
              {
               
                  $q="INSERT INTO comptodoccs (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
               
              }
              
              else if($select2==$p)
              {
               
               
                 $q="INSERT INTO comptoguidcs (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
                     
                     
               
              }
              
              else
              {
               
                 $q="INSERT INTO master (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
              }
              
}
else if($select1==$y)
{
               
               if($select2==$t)
              {
               
               $q="INSERT INTO comptodocstat (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
              }
              
              else if($select2==$p)
              {
               
                $q="INSERT INTO comptoguidstat (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
              }
              
              else
              {
               
               
               $q="INSERT INTO master (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
               
              }
 
 
 
 
}

else
{
 
              if($select2==$t)
              {
               
               $q="INSERT INTO comptodocmath (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
               
              }
              
              else if($select2==$p)
              {
               
               $q="INSERT INTO comptoguidmath (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
              }
              
              else
              {
               
                 $q="INSERT INTO master (xe1 , xe2 , xe3 , xe4 , xe5 , xe6 , ms , mw , masa) VALUES ( '$name' , '$pass' , '$add' , '$name1' , '$pass1' , '$add1' , '$name2' , '$pass2' , '$add2' )";
	                	$res = mysqli_query($connect,$q);
	                 if($res)
                 	{
	                   	include 'Thank.php';
	                 }
                 	else 
			                  include 'NotSend.php';
               
              }
}

 
 
}

else 
 {
	echo "لم يتم الاتصال بقاعدة البيانات";
}
 
 
 
 
 ?>