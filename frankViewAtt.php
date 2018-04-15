
<?php

		// Start the session
         session_start();
	
$select1 = $_POST['S1'];
/**main mamu**/
$x='VO';
$y='VW';
$z='BMW';

$select2 = $_POST['S2'];
/**cs sub menu**/
$v='java';
$t='data-base';
$p='multi-media';

if($select1==$x)
{
  /**cs**/
  
 /**if($select2==$v){
    /**java*
    
  }**/



    /**Database**/
    
 $db =mysqli_connect("localhost","root","", "database");

if( $db )
{
  $name=$_SESSION["nameSet"];
  $pass=$_SESSION["IdSet"];
  	
$query="SELECT * FROM lecone WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT1='Attende';
}
else
{
     $ATT1='Absanet';
		
}
  
  	
$query="SELECT * FROM lectwo WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT2='Attende';
}
else
{
     $ATT2='Absanet';
		
}
  
$query="SELECT * FROM lecthere WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT3='Attende';
}
else
{
     $ATT3='Absanet';
		
}

$query="SELECT * FROM lecfour WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT4='Attende';
}
else
{
     $ATT4='Absanet';
		
}


$query="SELECT * FROM lecfive WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT5='Attende';
}
else
{
     $ATT5='Absanet';
		
}


$query="SELECT * FROM lecsix WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT6='Attende';
  
 
}
else
{
     $ATT6='Absanet';
    	 
}

  
  $query="SELECT * FROM lecseven WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT7='Attende';
}
else
{
     $ATT7='Absanet';
		
}



$query="SELECT * FROM leceight WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT8='Attende';
}
else
{
     $ATT8='Absanet';
		
}




$query="SELECT * FROM lecnine WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT9='Attende';
}
else
{
     $ATT9='Absanet';
		
}




$query="SELECT * FROM lecten WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT10='Attende';
}
else
{
     $ATT10='Absanet';
		
}





$query="SELECT * FROM leceleven WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT11='Attende';
}
else
{
     $ATT11='Absanet';
		
}




$query="SELECT * FROM lectwowalv WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT12='Attende';
}
else
{
     $ATT12='Absanet';
		
}




$query="SELECT * FROM lectherten WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT13='Attende';
}
else
{
     $ATT13='Absanet';
		
}




$query="SELECT * FROM lecfourten WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT14='Attende';
}
else
{
     $ATT14='Absanet';
		
}




$query="SELECT * FROM lecfiveten WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT15='Attende';
}
else
{
     $ATT15='Absanet';
		
}
 
 
 
 
 $query="SELECT * FROM lecsixten WHERE B1='$name' AND B2='$pass'";
$res= mysqli_query($db,$query);
$row =mysqli_num_rows($res);
if($row > 0)
{
 $ATT16='Attende';
 include 'index2.php';	
}
else
{
     $ATT16='Absanet';
		include 'index2.php';	
}
  
  
  
}
else
{
	echo "لم يتم الاتصال بقاعدة البيانات";
}

/**end for database lec16**/    
  


}



































/*

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
}*/








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
 
 
	 	  