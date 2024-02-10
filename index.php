<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table 07</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="css/style.css" />
	<style>
		.button {
			border: none;
			color: blue;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			transition-duration: 0.4s;
			cursor: pointer;
		}

		.button1 {
			background-color: green;
			color: black;
			border: 2px solid #04aa6d;
		}

		.button1:hover {
			background-color: #04aa6d;
			color: white;
		}

		.button2 {
			background-color: red;
			color: black;
			border: 2px solid red;
		}

		.button2:hover {
			background-color: red;
			color: white;
		}
	</style>
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">System Management</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
							<thead>
								<tr>
									<th>Post Number</th>
									<th>Starting hour</th>
									<th>End hour</th>
									<th>Total hour</th>
									<th>Start</th>
									<th>Stop</th>
									<th>Total Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td id="ch1"></td>
									<td id="eh1"></td>
									<td id="th1"></td>
                  <td  style="display: none;" id="cd1"></td>
									<td>
										<button class="button button1" id="bs1" onclick="startTimer(this)">
											Start
										</button>
									</td>
									<td>
										<button class="button button2" id="be1" onclick="stopTimer(this)">
											Stop
										</button>
									</td>
									<td id="tp1"></td>
								</tr>
								<tr>
									<th scope="row">1</th>
									<td id="ch2"></td>
									<td id="eh2"></td>
									<td id="th2"></td>
                  <td  style="display: none;" id="cd2"></td>
									<td>
										<button class="button button1" id="bs2" onclick="startTimer2(this)">
											Start
										</button>
									</td>
									<td>
										<button class="button button2" id="be2" onclick="stopTimer2(this)">
											Stop
										</button>
									</td>
									<td id="tp2"></td>
								</tr>
                <tr>
									<th scope="row">1</th>
									<td id="ch3"></td>
									<td id="eh3"></td>
									<td id="th3"></td>
                  <td  style="display: none;" id="cd3"></td>
									<td>
										<button class="button button1" id="bs3" onclick="startTimer3(this)">
											Start
										</button>
									</td>
									<td>
										<button class="button button2" id="be3" onclick="stopTimer3(this)">
											Stop
										</button>
									</td>
									<td id="tp3"></td>
								</tr>
                <tr>
									<th scope="row">1</th>
									<td id="ch4"></td>
									<td id="eh4"></td>
									<td id="th4"></td>
                  <td  style="display: none;" id="cd4"></td>
									<td>
										<button class="button button1" id="bs4" onclick="startTimer4(this)">
											Start
										</button>
									</td>
									<td>
										<button class="button button2" id="be4" onclick="stopTimer4(this)">
											Stop
										</button>
									</td>
									<td id="tp4"></td>
								</tr>
                <tr>
									<th scope="row">5</th>
									<td id="ch5"></td>
									<td id="eh5"></td>
									<td id="th5"></td>
                  <td  style="display: none;" id="cd5"></td>
									<td>
										<button class="button button1" id="bs5" onclick="startTimer5(this)">
											Start
										</button>
									</td>
									<td>
										<button class="button button2" id="be5" onclick="stopTimer5(this)">
											Stop
										</button>
									</td>
									<td id="tp5"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script>


		function startTimer(button) {
      document.getElementById("eh1").innerText = "";
      document.getElementById("th1").innerText = "";
			var currentDate = new Date();
      document.getElementById("cd1").innerText = currentDate;
			// Get the current hour, minute, and second
			var currentHour = currentDate.getHours();
			var currentMinute = currentDate.getMinutes();
			var currentSecond = currentDate.getSeconds();

			// Update the content of the elements with respective ids
			document.getElementById("ch1").innerText =
				currentHour + ":" + currentMinute + ":" + currentSecond;

		}
		function stopTimer(button) {
			// Get the current date and time
			var stopTime = new Date();
			// Get the current hour, minute, and second
			var stopHour = stopTime.getHours();
			var stopMinute = stopTime.getMinutes();
			var stopSecond = stopTime.getSeconds();
			// Update the content of the element with id "eh1"
			document.getElementById("eh1").innerText = stopHour + ":" + stopMinute + ":" + stopSecond;
			var stringValue = document.getElementById("cd1").innerHTML;
      var dateObject = new Date(stringValue);
      var zbi = dateObject.getTime();
      var krk = stopTime.getTime();
      var timeDifferenceInMilliseconds = krk - zbi;
      var timeDifferenceInHours = timeDifferenceInMilliseconds / (1000 * 60 * 60);
      console.log("Time difference in hours:", timeDifferenceInHours);
      document.getElementById("th1").innerText = timeDifferenceInHours;
      document.getElementById("tp1").innerText = timeDifferenceInHours*20;
      
		}

    function startTimer2(button) {
      document.getElementById("eh2").innerText = "";
      document.getElementById("th2").innerText = "";
			var currentDate = new Date();
      document.getElementById("cd2").innerText = currentDate;
			// Get the current hour, minute, and second
			var currentHour = currentDate.getHours();
			var currentMinute = currentDate.getMinutes();
			var currentSecond = currentDate.getSeconds();

			// Update the content of the elements with respective ids
			document.getElementById("ch2").innerText =
				currentHour + ":" + currentMinute + ":" + currentSecond;

		}
		function stopTimer2(button) {
			// Get the current date and time
			var stopTime = new Date();
			// Get the current hour, minute, and second
			var stopHour = stopTime.getHours();
			var stopMinute = stopTime.getMinutes();
			var stopSecond = stopTime.getSeconds();
			// Update the content of the element with id "eh1"
			document.getElementById("eh2").innerText = stopHour + ":" + stopMinute + ":" + stopSecond;
			var stringValue = document.getElementById("cd2").innerHTML;
      var dateObject = new Date(stringValue);
      var zbi = dateObject.getTime();
      var krk = stopTime.getTime();
      var timeDifferenceInMilliseconds = krk - zbi;
      var timeDifferenceInHours = timeDifferenceInMilliseconds / (1000 * 60 * 60);
      console.log("Time difference in hours:", timeDifferenceInHours);
      document.getElementById("th2").innerText = timeDifferenceInHours;
      document.getElementById("tp2").innerText = timeDifferenceInHours*20;
		}

    function startTimer3(button) {
      document.getElementById("eh3").innerText = "";
      document.getElementById("th3").innerText = "";
			var currentDate = new Date();
      document.getElementById("cd3").innerText = currentDate;
			// Get the current hour, minute, and second
			var currentHour = currentDate.getHours();
			var currentMinute = currentDate.getMinutes();
			var currentSecond = currentDate.getSeconds();

			// Update the content of the elements with respective ids
			document.getElementById("ch3").innerText =
				currentHour + ":" + currentMinute + ":" + currentSecond;
    }
		function stopTimer3(button) {
			// Get the current date and time
			var stopTime = new Date();
			// Get the current hour, minute, and second
			var stopHour = stopTime.getHours();
			var stopMinute = stopTime.getMinutes();
			var stopSecond = stopTime.getSeconds();
			// Update the content of the element with id "eh1"
			document.getElementById("eh3").innerText = stopHour + ":" + stopMinute + ":" + stopSecond;
			var stringValue = document.getElementById("cd3").innerHTML;
      var dateObject = new Date(stringValue);
      var zbi = dateObject.getTime();
      var krk = stopTime.getTime();
      var timeDifferenceInMilliseconds = krk - zbi;
      var timeDifferenceInHours = timeDifferenceInMilliseconds / (1000 * 60 * 60);
      console.log("Time difference in hours:", timeDifferenceInHours);
      document.getElementById("th3").innerText = timeDifferenceInHours;
      document.getElementById("tp3").innerText = timeDifferenceInHours*20;
		}

    function startTimer4(button) {
      document.getElementById("eh4").innerText = "";
      document.getElementById("th4").innerText = "";
			var currentDate = new Date();
      document.getElementById("cd4").innerText = currentDate;
			// Get the current hour, minute, and second
			var currentHour = currentDate.getHours();
			var currentMinute = currentDate.getMinutes();
			var currentSecond = currentDate.getSeconds();

			// Update the content of the elements with respective ids
			document.getElementById("ch4").innerText =
				currentHour + ":" + currentMinute + ":" + currentSecond;
    }
    function stopTimer4(button) {
			// Get the current date and time
			var stopTime = new Date();
			// Get the current hour, minute, and second
			var stopHour = stopTime.getHours();
			var stopMinute = stopTime.getMinutes();
			var stopSecond = stopTime.getSeconds();
			// Update the content of the element with id "eh1"
			document.getElementById("eh4").innerText = stopHour + ":" + stopMinute + ":" + stopSecond;
			var stringValue = document.getElementById("cd4").innerHTML;
      var dateObject = new Date(stringValue);
      var zbi = dateObject.getTime();
      var krk = stopTime.getTime();
      var timeDifferenceInMilliseconds = krk - zbi;
      var timeDifferenceInHours = timeDifferenceInMilliseconds / (1000 * 60 * 60);
      console.log("Time difference in hours:", timeDifferenceInHours);
      document.getElementById("th4").innerText = timeDifferenceInHours;
      document.getElementById("tp4").innerText = timeDifferenceInHours*20;
		}


    function startTimer5(button) {
      document.getElementById("eh5").innerText = "";
      document.getElementById("th5").innerText = "";
			var currentDate = new Date();
      document.getElementById("cd5").innerText = currentDate;
			// Get the current hour, minute, and second
			var currentHour = currentDate.getHours();
			var currentMinute = currentDate.getMinutes();
			var currentSecond = currentDate.getSeconds();

			// Update the content of the elements with respective ids
			document.getElementById("ch5").innerText =
				currentHour + ":" + currentMinute + ":" + currentSecond;
    }
    function stopTimer5(button) {
			// Get the current date and time
			var stopTime = new Date();
			// Get the current hour, minute, and second
			var stopHour = stopTime.getHours();
			var stopMinute = stopTime.getMinutes();
			var stopSecond = stopTime.getSeconds();
			// Update the content of the element with id "eh1"
			document.getElementById("eh5").innerText = stopHour + ":" + stopMinute + ":" + stopSecond;
			var stringValue = document.getElementById("cd5").innerHTML;
      var dateObject = new Date(stringValue);
      var zbi = dateObject.getTime();
      var krk = stopTime.getTime();
      var timeDifferenceInMilliseconds = krk - zbi;
      var timeDifferenceInHours = timeDifferenceInMilliseconds / (1000 * 60 * 60);
      console.log("Time difference in hours:", timeDifferenceInHours);
      document.getElementById("th5").innerText = timeDifferenceInHours;
      document.getElementById("tp5").innerText = timeDifferenceInHours*20;
		}
	</script>
    
  </body>
</html>