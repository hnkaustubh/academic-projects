<!DOCTYPE html>
<html>
<head>
	<title>Smart Street</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		function toggleSideBar(){
			document.getElementById("sidebar").classList.toggle('active');
		}
		function sayHi(){
			alert('Hi....Coding in Progress');
		}
		// function closeSideBar(){
		// 	var sidebar = document.getElementById('sidebar');
		// 	sidebar.style.display = 'none';
		// }
		// window.addEventListener('mouseup',funtion(event)){
		// 	var toggle = document.getElementById('sidebar');
		// 	if(event.target != toggle){
		// 		sidebar.style.display = 'none';
		// 	}
		// }
	</script>
</head>
<body background="cloud.jpeg">
	<div id="sidebar" class="sidebar" onclick="toggleSideBar()">
		<div id="toggle-btn" class="toggle-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<ul>
			<li><a>Sensor Station</a></li>
			<li><a>Infrastructure Manager</a></li>
			<li><a>Smart Street Manager</a></li>
			<li><a>Dashboard</a></li>
		</ul>
	</div>
	<div class="first">
		<ul>
			<li><a>Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="products.html">Products and Services</a>
				<ul></ul>
			</li>
			<li><a href="news.html">News</a></li>
			<li><a href="contacts.php">Contacts</a></li>
		</ul>
	</div>
	<br>
	<br>
	<div class="second">
		<h1 class="heading">GoTech Smart Solutions</h1>
		<embed id="video" src="smartstreet.mp4" width="600" height="360"></embed>
		<blockquote id="quote"><em><strong>"Energy Conservation is the Foundation of Energy Independence - Tom Allen"</em></strong></blockquote>
	</div>
	<div class="third">
		<ul>
			<li><a>City</a>
				<ul>
					<li>Santa Clara</li>
					<li>Palo Alto</li>
					<li>Mountain View</li>
					<li>Sunnywale</li>
				</ul>
			</li>
			<li><a>Zip Code</a>
				<ul>
					<li>95050</li>
					<li>95126</li>
					<li>95342</li>
					<li>95999</li>
				</ul>
			</li>
			<li><a>Street</a>
				<ul>
					<li>Santa Clara & 1st</li>
					<li>Santa Clara & 2nd</li>
					<li>Santa Clara & 3rd</li>
					<li>Santa Clara & 4th</li>
				</ul>
			</li>
			<li><a>Start Time</a>
				<ul>
					<li>1 AM</li>
					<li>2 AM</li>
					<li>3 AM</li>
					<li>4 AM</li>
					<li>5 AM</li>
					<li>6 AM</li>
					<li>7 AM</li>
					<li>8 AM</li>
					<li>9 AM</li>
					<li>10 AM</li>
					<li>11 AM</li>
					<li>12 PM</li>
					<li>1 PM</li>
					<li>2 PM</li>
					<li>3 PM</li>
					<li>4 PM</li>
					<li>5 PM</li>
					<li>6 PM</li>
					<li>7 PM</li>
					<li>8 PM</li>
					<li>9 PM</li>
					<li>10 PM</li>
					<li>11 PM</li>
					<li>12 PM</li>
				</ul>
			</li>
			<li><a>End Time</a>
				<ul>
					<li>1 AM</li>
					<li>2 AM</li>
					<li>3 AM</li>
					<li>4 AM</li>
					<li>5 AM</li>
					<li>6 AM</li>
					<li>7 AM</li>
					<li>8 AM</li>
					<li>9 AM</li>
					<li>10 AM</li>
					<li>11 AM</li>
					<li>12 PM</li>
					<li>1 PM</li>
					<li>2 PM</li>
					<li>3 PM</li>
					<li>4 PM</li>
					<li>5 PM</li>
					<li>6 PM</li>
					<li>7 PM</li>
					<li>8 PM</li>
					<li>9 PM</li>
					<li>10 PM</li>
					<li>11 PM</li>
					<li>12 PM</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="fourth">
		<input onclick="sayHi()" type="image" name="" src="submit.png" />
	</div>
</body>
</html>
















