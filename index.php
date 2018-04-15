<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attende Table</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/booking.css"/>
  <link rel="stylesheet" href="css/jquery.fancybox.css"/>
  <link rel="stylesheet" href="css/owl-carousel.css"/>

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
  <!--========================================================
                            HEADER
  =========================================================-->
  <header class="vide" data-vide-bg="video/video-bg.mov">
    <div class="container vide_content">
      <div class="brand">
        <img src="images/alex.jpg" alt="" style="border: groove #221FBA; border-radius: 50%; width: 100px; height: 100px;"/>

        <h1 class="brand_name">
            Faculty of science 
        </h1>
        <p class="brand_slogan">
          Alexandria university
        </p>
         <p class="brand_slogan">
          Attende table 
        </p>
      </div>

    
      <form id="bookingForm" class="booking-form" action="frankViewAtt.php" method="post">
  
        <div class="tmInput">
          <p style="color: black;">Choose Depertment Of Subject</p>
          <br>
       <!--     <select id="car" onchange="ChangeCarList()" > 
             <option value="">Choose Depertment</option> 
             <option value="VO">Computer Science</option> 
             <option value="VW">Chmistry</option> 
             <option value="BMW">Phyics</option>
           <option value="nm">Geology</option>
             <option value="mm">Ocean Graphy</option>
             <option value="tt">Biochmistry</option>
             <option value="kk">Biophysics</option> </select>  -->
       <select id="car" onchange="ChangeCarList();" name="S1"> 
       <option value="">Choose Depertment</option> 
     <option value="VO">Computer Science</option> 
     <option value="VW">Stastics</option> 
     <option value="BMW">Math</option>
     </select> 
          
          
        </div>
        <br>
        <div class="tmInput">
          <p style="color: black;">Choose Subject</p>
          <br>
           <select id="carmodel" name="S2"></select>
        </div>
       
       <input class="btn" type="submit" value="View Attende Table!">
       <br>

       
    <!--    <div class="booking-form_controls">
          <a href="index2.html" class="btn" data-type="submit">View Attende Table!</a>
        </div> -->
      </form>
      
    </div>
  </header>
  <!--========================================================
                            CONTENT
  =========================================================-->
  <!-- <script>
var carsAndModels = {};
carsAndModels['VO'] = ['Java', 'Data Structure', 'Multi Media', 'Opreting System', 'Graphics', 'Ai'];
carsAndModels['VW'] = ['heterogeneous', 'Sp', 'Organic 1', 'Organic 2'];
carsAndModels['BMW'] = ['Experimental physics ' , 'Radiology Physics' ,
'High energy physic' 'Ultrasound'];
/** carsAndModels['nm'] = ['Layers and fossils', 'rocks and minerals', 'structural geology'];
carsAndModels['mm'] = ['Marine biology', 'fish biology', 'ecology'];
carsAndModels['tt'] = ['Precision Chromatography', 'Quality Measurement', 'Radiology Biology'];
carsAndModels['kk'] = ['Microscope', 'Thermal measurements', 'spectrum']; **/

function ChangeCarList() {
    var carList = document.getElementById("car");
    var modelList = document.getElementById("carmodel");
    var selCar = carList.options[carList.selectedIndex].value;
    while (modelList.options.length) {
        modelList.remove(0);
    }
    var cars = carsAndModels[selCar];
    if (cars) {
        var i;
        for (i = 0; i < cars.length; i++) {
            var car = new Option(cars[i], i);
            modelList.options.add(car);
        }
    }
} 
</script> -->
  <script>
var carsAndModels = {};
carsAndModels['VO'] = ['java', 'data-base', 'multi-media'];

carsAndModels['VW'] = ['Regrassion', 'Multi varient', 'Quality control', 'Experimental design'];
carsAndModels['BMW'] = ['Math one', 'Math two', 'Matrix'];


function ChangeCarList() {
    var carList = document.getElementById("car");
    var modelList = document.getElementById("carmodel");
    var selCar = carList.options[carList.selectedIndex].value;
    while (modelList.options.length) {
        modelList.remove(0);
    }
    var cars = carsAndModels[selCar];
    if (cars) {
        var i;
        for (i = 0; i < cars.length; i++) {
            var car = new Option(cars[i], i);
            modelList.options.add(car);
        }
    }
} 
</script>


<script src="js/script.js"></script>
<!-- coded by Diversant -->
</body>
</html>