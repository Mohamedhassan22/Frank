
<?php






  $db =mysqli_connect("localhost","root","", "login");

if( $db )
{

$name = $_POST['n1'];
$pass = $_POST['n2'];
$select = $_POST['Catagory'];
$x='Administration';
$y='AcademicGuide';
$z='Doctor';
$v='Student';

if($select==$x)

{
	
$query="SELECT * FROM admin WHERE n1='$name' AND n2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
  

	include 'Home.php';
  
  
  

}
else
{
     include 'Wrong.php';
		
}


}else
if($select==$y){
  
  
  $query="SELECT * FROM guid WHERE n1='$name' AND n2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
	
include 'HomeAcd.php';
}
else
{
     include 'Wrong.php';
		 
}
  

  
  
}else
if($select==$z){
  
      $query="SELECT * FROM doc WHERE n1='$name' AND n2='$pass'";
        $res= mysqli_query($db,$query);
         $row =mysqli_num_rows($res);
            if($row > 0)
                      {
	
                        include 'HomeDoc.php';
                      }
             else
                      {
                        include 'Wrong.php';
		                    
                      }
  
}
else{
  
  
$query="SELECT * FROM stu WHERE n1='$name' AND n2='$pass'";
        $res= mysqli_query($db,$query);
         $row =mysqli_num_rows($res);
            if($row > 0)
                      {
	
                        include 'HomeStu.php';
                        
                      }
             else
                      {
                        include 'Wrong.php';
		                    
                      }
  
  
  
  
}





}


else
{
	echo "لم يتم الاتصال بقاعدة البيانات";
}








/*
$name = $_POST['username'];
$pass = (int) $_POST['password'];
$q = "INSERT INTO Like1 VALUES('$name',$pass)";
	$res = mysqli_query($connect,$q);
	if($res){
		echo "Success";
		include 'boom2.php';
	}
	else 
			echo "NO";
			
			
			
			
			$query = "SELECT  FROM Like1 
WHERE Name='$name' AND Password = $pass   ";

	$res= mysqli_query($connect,$query);

	if(mysqli_num_rows($res)>0){
		while($row =mysqli_fetch_assoc($res)){
		include 'boom2.php';
		}

	}
	else {
		echo " Wrong Data";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	$name = $_POST['username'];
$pass = (int) $_POST['password'];

$query="SELECT  FROM Like1 WHERE '$name' AND '$pass'";
if(!mysqli_query($connect,$query))
{
die("الرقم الجامعي او كلمة المرور غير صحيحه ");
}
else
{

include 'boom2.php';
}




$query = "SELECT  * FROM Like1 
WHERE Name='$name' AND Password = $pass   ";

$res= mysqli_query($connect,$query);
$rows= mysqli_num_rows($res);
	if($rows>0){
		while($row =mysqli_fetch_assoc($res)){
		include 'boom2.php';
		}

	}
	else {
		echo " Wrong Data";
	}
		
*/





?>
 
 
	 	  