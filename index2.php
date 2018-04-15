<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Table</title>
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

    
      <form id="bookingForm" class="booking-form" method="post" action="../../../Project/HomeStu.php">
  <table style="color: black;">
  <tr>
    <th>Table</th>
    <th>State</th>
  </tr>
  <tr>
    <td>Lecture 1</td>
    <td id="lec1"  style="text-align: center;"><?php echo $ATT1; ?></td>
  </tr>
  <tr>
    <td>Lecture 2</td>
    <td id="lec2"  style="text-align: center;"><?php echo $ATT2; ?></td>
  </tr>
  <tr>
    <td>Lecture 3</td>
    <td id="lec3"  style="text-align: center;"><?php echo $ATT3; ?></td>
  </tr>
  <tr>
    <td>Lecture 4</td>
    <td id="lec4"  style="text-align: center;"><?php echo $ATT4; ?></td>
  </tr>
  <tr>
    <td>Lecture 5</td>
    <td id="lec5"  style="text-align: center;"><?php echo $ATT5; ?></td>
  </tr>
  <tr>
    <td>Lecture 6</td>
    <td id="lec6" style="text-align: center;"><?php echo $ATT6; ?></td>
  </tr>
  <tr>
    <td>Lecture 7</td>
    <td id="lec7"  style="text-align: center;"><?php echo $ATT7; ?></td>
  </tr>
  <tr>
    <td>Lecture 8</td>
    <td id="lec8"  style="text-align: center;"><?php echo $ATT8; ?></td>
  </tr>
    <tr>
    <td>Lecture 9</td>
    <td id="lec9"  style="text-align: center;"><?php echo $ATT9; ?></td>
  </tr>
   <tr>
    <td>Lecture 10</td>
    <td id="lec10"  style="text-align: center;"><?php echo $ATT10; ?></td>
  </tr>
   <tr>
    <td>Lecture 11</td>
    <td id="lec11"  style="text-align: center;"><?php echo $ATT11; ?></td>
  </tr>
   <tr>
    <td>Lecture 12</td>
    <td id="lec12"  style="text-align: center;"><?php echo $ATT12; ?></td>
  </tr>
  <tr>
    <td>Lecture 13</td>
    <td id="lec13"  style="text-align: center;"><?php echo $ATT13; ?></td>
  </tr>
   <tr>
    <td>Lecture 14</td>
    <td id="lec14"  style="text-align: center;"><?php echo $ATT14; ?></td>
  </tr>
   <tr>
    <td>Lecture 15</td>
    <td id="lec15"  style="text-align: center;"><?php echo $ATT15; ?></td>
  </tr>
   <tr>
    <td>Lecture 16</td>
    <td id="lec16"  style="text-align: center;"><?php echo $ATT16; ?></td>
  </tr>
</table>
  

 <br>

 <!--
<a href="file:///E:/gRADUATION/percenrage/Student/شكوي%20و%20جدول/جدول%20حضور/index.html" target="_blank">
 <input class="btn" type="submit" value="Check Other Subject"></a> -->

    <!--    <div class="booking-form_controls">
          <a href="file:///E:/gRADUATION/percenrage/Student/Student%20Run/Frank/index.html" target="_blank" class="btn" data-type="submit">Return Home!</a>
          <br>
          <a href="file:///E:/gRADUATION/percenrage/Student/Student%20Run/Frank/index.html" target="_blank" class="btn" data-type="submit">Check Other Subject!</a>
        </div> -->
      </form>
    <!--  <form method="post" action="index.html">
  <input class="btn" type="submit" value="Check Other Subject">
 </form> -->
      
    </div>
  </header>
  <!--
                            CONTENT
  -->
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
 


<script src="js/script.js"></script>
<!-- coded by Diversant -->
</body>
</html>