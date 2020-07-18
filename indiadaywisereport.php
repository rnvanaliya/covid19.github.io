<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">
<!-- Nav Bar Stat -->
<nav class="navbar navbar-expand-lg navbar-light bg-light p-3 nav_style">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#preventid">Privenstions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywisereport.php">indiaDaywise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contactid">Contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<!-- Nav Bar End -->

<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center"> COVID-19 LIVE UPDATES OF INDIA DAY WISE</h3>
  </div>

  <div class="table-responsive">
    <table class="table text-center">
      
      <?php
        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coronadata = json_decode($data, true);

        $totalcount = count($coronadata['cases_time_series']);
    
        $i=0;
        while ( $i < $totalcount) {
          ?>

          <tr>
          	<th class="text-left" colspan="6"> Date & Month</th>
          </tr>
          <tr>
          	<td colspan="6" class="text-left"><?php echo $coronadata['cases_time_series'][$i]['date']."<br>"; ?></td>
          </tr>
          <tr class="text-capitalize text-white">
            <th style="color: #fff; background-color: #2196f3;">Total Confirmed</th>
            <th style="color: #fff; background-color: #ffc107;">Daily Confirmed</th>
            <th style="color: #fff; background-color: #008C76FF;">Daily Recovered</th>
            <th style="color: #fff; background-color: #e91e7f;">Daily Deceased</th>
            <th style="color: #fff; background-color: #4caf50;">Total Recovered</th>
            <th style="color: #fff; background-color: #EE2737FF;">Total Deceased</th>
          </tr>
          <tr>
          	<td style="background-color: #bed2f3;"><?php echo $coronadata['cases_time_series'][$i]['totalconfirmed']."<br>"; ?></td>
          	<td style="background-color: #ffe493;"><?php echo $coronadata['cases_time_series'][$i]['dailyconfirmed']."<br>"; ?></td>
          	<td style="background-color: #9ED9CCFF;"><?php echo $coronadata['cases_time_series'][$i]['dailyrecovered']."<br>"; ?></td>
          	<td style="background-color: #fc95c6;"><?php echo $coronadata['cases_time_series'][$i]['dailydeceased']."<br>"; ?></td>
          	<td style="background-color: #88d28b;"><?php echo $coronadata['cases_time_series'][$i]['totalrecovered']."<br>"; ?></td>
          	<td style="background-color: #fb99a1;"><?php echo $coronadata['cases_time_series'][$i]['totaldeceased']."<br>"; ?></td>
          </tr>
         

      <?php
          $i++;
        }

      ?>

    </table>
  </div>

</section>

<!-- top cursor -->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!-- Footer Section -->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>copyright by DataNews</p>
  </div>
</footer>
<script type="text/javascript">

  // $('.count').counterup({
  //  delay:10,
  //  time:3000
  // })


  mybutton =document.getElementById("myBtn");

  window.onscroll = function () { scrollFunction()};
  function scrollFunction() {
    if (dicument.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    }else {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

// Get Data fro API



</script>


</body>
</html>


