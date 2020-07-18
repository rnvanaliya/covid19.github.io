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
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html#preventid">Privenstions</a>
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
    <h3 class="text-uppercase text-center"> COVID-19 LIVE UPDATES OF INDIA</h3>
  </div>

  <div class="table-responsive">
    <table class=" table table-bordered table-striped text-center">
      <tr>
        <th class="text-capitalize">lastupdatedtime</th>
        <th class="text-capitalize">state</th>
        <th class="text-capitalize">confirmed</th>
        <th class="text-capitalize">active</th>
        <th class="text-capitalize">recovered</th>
        <th class="text-capitalize">deaths</th>
        
      </tr>
      <?php
        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coronalive = json_decode($data, true);

        // echo "<pre>";
        // print_r($coronalive);
        // echo "<pre>";
        $statecount = count($coronalive['statewise']);
    
        $i=1;
        while ( $i < $statecount) {
          ?>
          <tr>
            <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['state']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['active']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
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


