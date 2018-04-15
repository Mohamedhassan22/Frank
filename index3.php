<!DOCTYPE html>
<html lang="en">
<head>
  <title>Complaint Form</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/booking.css"/>
  <link rel="stylesheet" href="css/jquery.fancybox.css"/>
  <link rel="stylesheet" href="css/owl-carousel.css"/>
  
  <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    background-color: #418E41;
    width: 100%;
    color: black;
}

td, th {
  background-color: #418E41;
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color: black;
}

tr:nth-child(even) {
    background-color: #2D2222;}
}

</style>

  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>

  <!--[if lt IE 9]>
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <script src='js/device.min.js'></script>
</head>

<body>
  
  
  
  <?php
		// Start the session
         session_start();
         
		?>
		
    
    
    
    
<div class="page">
  <!--
                            HEADER
 -->
  <header class="vide" data-vide-bg="video/video-bg">
    <div class="container vide_content">
      <div class="brand">
        <img src="images/alex.jpg" alt="" style="border: groove #221FBA; border-radius: 50%; width: 100px; height: 100px;"/>

        <h1 class="brand_name">
          <a href="./">
            Faculty of science 
          </a>
        </h1>
        <p class="brand_slogan">
          Alexandria university
        </p>
         <p class="brand_slogan">
          Attende table 
        </p>
      </div>

    
      <form id="bookingForm" class="booking-form" action="frankInsertComp.php" method="post" > <!-- هبعت لفورم بي اتش بي تبعت لدتا بيز ولوبعتت تظهر صفحه ثانك لو مبعتتش تطلع كلمهايرور -->
        <h3 style="text-align: center; color: black; size: 20px;">Complaint Form</h3>
        <br>
        <div class="tmInput" style="color: black; text-align: left;">
        Student Name:
        <input type="text" readonly="readonly" value="<?php echo $_SESSION["nameSet"]; ?>" name="xe1">
        <br>
        <br>
        Level:
        <input type="text" placeholder="Academic level" name="xe2">
        <br>
        <br>
        Phone Number:
        <input type="text" placeholder="Phone Number" name="xe3">
        <br>
        <br>
        E-mail:
        <input type="text" placeholder="Enter Valid E-mail" name="xe4">
        <br>
        <br>
        Home Address:
        <input type="text" placeholder="Home Address" name="xe5">
        <br>
        <br>
        Student ID:
        <input type="text" readonly="readonly" value="<?php echo $_SESSION["IdSet"]; ?>" name="xe6">
        <br>
      
     
         <br>
        Explain your complaint in detail:
        <input type="text" placeholder="Enter Text Here...." name="ms">
        <br>
         The final outcome you want from your complaint:
         <input type="text" placeholder="Enter Text Here...." name="mw">
        <br>
        <br>
        Data:
        <input style="color: black;" type="date" placeholder="Enter today data" name="masa">
        <br>
        <br>

           Specialization:
         <select id="car" name="SS1"> 
                <option value="">Choose Depertment</option> 
                <option value="VT">Computer Science</option> 
                <option value="VP">Statstics</option> 
                <option value="BWM">MATH</option>
        
         </select>
         <br>
        <br>
        Addressed to:
        <select id="car" name="MS1"> 
                <option value="MO">وكيل الكلية لشئون التعليم والطلاب</option> 
                <option value="WO">رئيس قسم المحدد بالاعلي</option>
                <option value="NO">مرشد القسم المحدد بالاعلي</option> 
         </select>
        
        <input style="margin-left: 65px;" class="btn" type="Submit" value="SEND COMPLAINT!">
     
      </form>
      </div>
      
    </div>
  </header>
  <!--
                            CONTENT
  -->




<script src="js/script.js"></script>
<!-- coded by Diversant -->
</body>
</html>