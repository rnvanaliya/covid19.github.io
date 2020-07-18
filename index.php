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
      
    </ul>s
    
  </div>
</nav>
<!-- Nav Bar End -->
<!-- Nav Header Start-->
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-lg-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/COVID-Virus.png" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-lg-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>let's Stay & Fight Together Against Cor<span class="corona_rotet"><img src="images/coronavirus.svg"></span>na Virus</h1>
				
			</div>
			
		</div>
	</div>
</div>

<!-- CORONA Letest Update-->
<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center"> Covid-19 Updates</h3>
	</div>

	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>Total Confirmed</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				<th>NewConfirmed</th>
				<th>New Recovered</th>
				<th>New Deaths</th>
				<th>Sr No.</th>
			</tr>
		</table>
	</div>

</section>

<!-- About Section-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About COVID-19</h1>
	</div>
	
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/Coronavirus.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2> What is COVID-19 (corona-Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
			<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
			<p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads.</p>
		</div>
	</div>
</div>

<!-- Corona Symptoms -->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Corona Virus Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>runny nose</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.png" class="img-fluid" width="120" height="120">
				<figcaption>cold</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.png" class="img-fluid" width="120" height="120">
				<figcaption>tiredness</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.png" class="img-fluid" width="120" height="120">
				<figcaption>difficulty breathing (severe cases)</figcaption>
				</figure>
			</div>
		</div>
	</div>

	<!-- Corona Symptoms -->
	<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
		<div class="section_header text-center mb-5 mt-4">
			<h1> 6 Steps Prevention Against Coronavirus</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/washing-hands.svg" class="img-fluid" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Man suffering from covid 19 viral infection character set transparent png</p>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/washing-hands.svg" class="img-fluid" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Man suffering from covid 19 viral infection character set transparent png</p>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/washing-hands.svg" class="img-fluid" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Man suffering from covid 19 viral infection character set transparent png</p>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/washing-hands.svg" class="img-fluid" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Man suffering from covid 19 viral infection character set transparent png</p>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/washing-hands.svg" class="img-fluid" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Man suffering from covid 19 viral infection character set transparent png</p>
						</div>						
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/washing-hands.svg" class="img-fluid" width="90" height="90">
							</figure>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<p>Man suffering from covid 19 viral infection character set transparent png</p>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Us Section -->
	<div class="container-fluid pt-5 pb-5" id="contactid">
		<div class="section_header text-center mb-5 mt-4">
			<h1> Contact Us ASAP</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<form action="" method="POST">
					  	<div class="form-group">
					    <label for="exampleFormControlInput1">username</label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="name" autocomplete="off">
					  	</div>
					 	<div class="form-group">
					    <label for="exampleFormControlInput1">Email address</label>
					    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required  autocomplete="off" placeholder="name@example.com">
					  	</div>
					  	<div class="form-group">
					    <label for="exampleFormControlInput1">mobile</label>
					    <input type="number" class="form-control" id="exampleFormControlInput1" name="mobile" placeholder="mobile" autocomplete="off" required>
					  	</div>

					  	<div class="form-group">
					    <label for="exampleFormControlInput1">Select Symptoms</label> <br>
					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
					    	<label class="custom-control-label" for="customcheckbox1">Cold</label>
					    </div>
					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
					    	<label class="custom-control-label" for="customcheckbox2">Fever</label>
					    </div>
					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
					    	<label class="custom-control-label" for="customcheckbox3">difficulty in Breath</label>
					    </div>
					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
					    	<label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
					    </div>
					    </div>

					  
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Example textarea</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

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
	// 	delay:10,
	// 	time:3000
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

function fetch(){
	$.get("https://api.covid19api.com/summary",
		function (data){
			// console.log(data['Countries'].length);
			var tbval = document.getElementById("tbval");

			for (var i = 1;  i<(data['Countries'].length); i++) {

				var x = tbval.insertRow();
				x.insertCell(0);
				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
				tbval.rows[i].cells[0].style.background = '#7a4a91';
				tbval.rows[i].cells[0].style.color = '#fff';

				x.insertCell(1);
				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
				tbval.rows[i].cells[1].style.background = '#4bb7da';

				x.insertCell(2);
				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
				tbval.rows[i].cells[2].style.background = '#4bb7da';

				x.insertCell(3);
				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
				tbval.rows[i].cells[3].style.background = '#4bb7da';

				x.insertCell(4);
				tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
				tbval.rows[i].cells[4].style.background = '#4bb7da';
				
				x.insertCell(5);
				tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
				tbval.rows[i].cells[5].style.background = '#4bb7da';
				
				x.insertCell(6);
				tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
				tbval.rows[i].cells[6].style.background = '#4bb7da';

				x.insertCell(7);
				tbval.rows[i].cells[7].innerHTML = [i-1];
				tbval.rows[i].cells[7].style.background = '#4bb7da';

			}
		}
	);
}


</script>


</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];


	$chk ="";

	foreach ($symp as $chk1) {
		$chk .= $chk1.",";
	}

	$insertquery = " insert into coronacases(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$msg')";

	$query = mysqli_query($con, $insertquery);

	if ($con) {
	?>
	<script>
		alert("Connection Successful");
	</script>
	<?php
	}else{
	?>
	<script>
		alert("No Connection");
	</script>
	<?php
	}

}

?>