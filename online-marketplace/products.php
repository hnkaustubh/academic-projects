<?php
		// function lastVisitedPages(){
		// 	if(isset($_POST['smartlights']))
		// 		setcookie('smartlights','SL',time()+3600);
		// 	else if (isset($_POST['smartwater'])) 
		// 		setcookie('smartwater','SW',time()+3600);
		// 	else if (isset($_POST['smartgas'])) 
		// 		setcookie('smartgas','SG',time()+3600);
		// 	else if (isset($_POST['smartmeter'])) 
		// 		setcookie('smartmeter','SM',time()+3600);
		// 	else if (isset($_POST['smartparking'])) 
		// 		setcookie('smartparking','SP',time()+3600);
		// }
		
		function labcookies(){
		$conn = mysqli_connect("54.193.22.204","tester","password","project_281");
		if(isset($_POST['smartlights'])){
			if(isset($_COOKIE['Smart-Lights'])){
				setcookie('Smart-Lights',$_COOKIE['Smart-Lights']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Lights',1,time()+(86400*30));
			}
			$query = "INSERT INTO slmv(rating) VALUES ('1')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Lamps/smartlamps.php');
		}
		else if (isset($_POST['smartwater'])) {
			if(isset($_COOKIE['Smart-Water'])){
				setcookie('Smart-Water',$_COOKIE['Smart-Water']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Water',1,time()+(86400*30));
			}
			$query = "INSERT INTO swmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Water/smartwater.php');
		}	
		else if (isset($_POST['smartgas'])) {
			if(isset($_COOKIE['Smart-Gas'])){
				setcookie('Smart-Gas',$_COOKIE['Smart-Gas']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Gas',1,time()+(86400*30));
			}
			$query = "INSERT INTO sgmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Gas/smartgas.php');
		}
		else if (isset($_POST['smartmeter'])) {
			if(isset($_COOKIE['Smart-Meter'])){
				setcookie('Smart-Meter',$_COOKIE['Smart-Meter']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Meter',1,time()+(86400*30));
			}
			$query = "INSERT INTO smmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Meter/smartmeter.php');
		}
		else if (isset($_POST['smartparking'])) {
			if(isset($_COOKIE['Smart-Parking'])){
				setcookie('Smart-Parking',$_COOKIE['Smart-Parking']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Parking',1,time()+(86400*30));
			}
			$query = "INSERT INTO spmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Parking/smartparking.php');
		}
		else if (isset($_POST['smarttrash'])) {
			if(isset($_COOKIE['Smart-Trash'])){
				setcookie('Smart-Trash',$_COOKIE['Smart-Trash']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Trash',1,time()+(86400*30));
			}
			$query = "INSERT INTO stmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Trash/smarttrash.php');
		}
		else if (isset($_POST['publicwifi'])) {
			if(isset($_COOKIE['Public-Wifi'])){
				setcookie('Public-Wifi',$_COOKIE['Public-Wifi']+1,time()+(86400*30));
			}else{
				setcookie('Public-Wifi',1,time()+(86400*30));
			}
			$query = "INSERT INTO pwmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Public Wifi/publicwifi.php');
		}
		else if (isset($_POST['smarttransportation'])) {
			if(isset($_COOKIE['Smart-Transportation'])){
				setcookie('Smart-Transportation',$_COOKIE['Smart-Transportation']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Transportation',1,time()+(86400*30));
			}
			$query = "INSERT INTO stransmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Transportation/smarttransportation.php');
		}
		else if (isset($_POST['smartsecurity'])) {
			if(isset($_COOKIE['Smart-Security'])){
				setcookie('Smart-Security',$_COOKIE['Smart-Security']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Security',1,time()+(86400*30));
			}
			$query = "INSERT INTO ssmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Security/smartsecurity.php');
		}
		else if (isset($_POST['smartcomm'])) {
			if(isset($_COOKIE['Smart-Communication'])){
				setcookie('Smart-Communication',$_COOKIE['Smart-Communication']+1,time()+(86400*30));
			}else{
				setcookie('Smart-Communication',1,time()+(86400*30));
			}
			$query = "INSERT INTO scmv(rating) VALUES ('5')";
			$result = mysqli_query($conn,$query);
			header('Location: Smart Communication/smartcomm.php');
		}
	}

	// lastVisitedPages();
	
	labcookies();

	if(isset($_POST['click1']))
		header('Location: lastvisited.php');
	if(isset($_POST['click2']))
		header('Location: mostvisited.php');
	if(isset($_POST['click3']))
		header('Location: bestStarRated.php');
	if(isset($_POST['click4']))
		header('Location: bestNumberRated.php');
	if(isset($_POST['click5']))
		header('Location: mostvisitedDB.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Products and Services</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script>
		function gotoLamps(){
			window.location = "about.html";
		}	
	</script>
</head>
<body style="background-color: #008080; text-align: justify;">
	<div class="first" style="margin-top: -2px; position: relative; left: 245px; width: 1500px;">
		<ul>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="smartsolutions.php">Home</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="about.html">About Us</a></li>
			<li style="font-size: 20px; width: 250px; height: 30px;"><a>Products and Services</a>
<!-- 				<ul></ul> -->
			</li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="news.html">News</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="contacts.php">Contacts</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="admin.php">Admin</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>
	<div class="products" style="margin-top: -10px;">
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Products and Services</h1>
	</div>
	<br><br><br><br><br>
	<div style="float: left;width: 400px;height: 350px;">
		<img src="img/smartLamps.jpg" width="150" height="150" style="margin-left: 100px; margin-top: 130px;">
	</div>
	<form method="POST">
	<div style="width: 70%;float: right; color: black;">
		<h3>Smart Street Lamps</h3>
		<p>
Smart street lamps have been developed for over seven years. These technologies have played an important role in urban safety, energy conservation, and efficient O&M. Most of the existing smart street lamps use interconnection technologies such as power line communication (PLC), ZigBee, SigFox, and LoRa. However, these technologies cannot provide massive connectivity for widely distributed street lamps, which hinders large-scale deployment of smart street lamps. First, PLC, ZigBee, SigFox, and LoRa technologies require network construction and maintenance on the customer end. It is inconvenient and inefficient for customers to survey, plan, transport, deploy, test, and optimize their own networks. Second, networks using these short-range communications technologies offer poor coverage and can commonly experience interference. Unstable signals may likely lead to a reduction in both access and connection success rates. For example, ZigBee, SigFox, and LoRa technologies use unlicensed spectrum, which suffers from great co-channel interference. They provide unreliable signals, restricted transmit power, and poor coverage. PLC also has reliability problems. It provides unstable power line carrier signals due to a large number of harmonics and quick signal attenuation. Third, these technologies are outdated or developed on a private basis. For example, PLC is an early launched IoT technology. However, PLC cannot expand the coverage of centralized control nodes due to limited capabilities of power distribution frames, which causes barriers in future evolution. ZigBee, SigFox, and LoRa technologies are based on private standards, which restricts their openness. Although 2G networks are public networks, they will be deprecated in the near future.

Huawei provides two smart lighting solutions. The first iteration is the one-hop individual-control NB-IoT solution, where the operator builds and operates networks for customers. The other is the two-hop individual-control EC-IoT + RF solution, in which customers need to build and operate networks by themselves.
</p>
<button name="smartlights" onclick="gotoLamps()" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<div style="float: left;width: 400px;height: 350px;">
		<img src="img/smartWater.jpg" width="150" height="150" style="margin-top: 150px; margin-left: 100px">
	</div>
	<div  style="width: 70%;float: right; color: black;">
		<h3>Smart Water</h3>
		<p>

The Smart Water Solution offers three major benefits. First, the solution adopts a grid-based water meter system, monitors the pipeline network in real time, and rapidly locates pipeline failures to enable leakage analysis. Thanks to this solution, the rate of water leakage can be reduced. Second, users often complain about disturbances caused by manual meter reading or inaccurate manual estimation. Automatic meter reading effectively solves all these issues, helping to reduce user complaints and improve service quality. Third, this solution enables real-time data backhaul. Data related to water, such as quality, pressure, and temperature, can be managed elaborately and visually to enhance the capabilities of water utilities.

The development of smart water services had for many years been restricted by traditional two-hop network communications technologies such as Long Range (LoRa) and RF networks. Network construction is particularly quite difficult to accomplish using traditional technologies. For example, concentrators can only be deployed after site selection, electricity connection, and network planning. Different locations and scenarios cannot use the same solution. Network construction often requires a long period of time, and concentrators tend to suffer from an inability to withstand extreme weather conditions such as lightning, rain, or snow. As a direct result, concentrators may require frequent maintenance. For example, connection of mains electricity may be affected by man-made faults, and accidental solar power supply faults may occur due to heavy snow. Furthermore, LoRa and RF networks operate on unlicensed spectrum. Networks used by different applications, such as water, natural gas, street lamps, and parking, often experience co-channel interference. And it is difficult to coordinate all walks of life to help eliminate this problem.
</p>
<button name="smartwater" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<div style="float: left;width: 400px;height: 330px;">
		<img src="img/smartGas.png" width="150" height="150" style="margin-top: 150px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right; color: black;">
		<h3>Smart Gas</h3>
		<p>

The Smart Gas solution offers three major benefits. First, the solution enables real-time data backhaul and ensures safety. Data related to gas, such as device pressure and temperature, is transmitted to the management platform for real-time analysis. This facilitates preventive maintenance and eliminates safety hazards. Second, automatic meter reading helps residents avoid disturbances caused by manual meter reading and difficulties in bill payments. This adds further convenience to people's lives and reduces overall user complaints. Third, new profit models are derived from the development of smart gas. For example, residents can ensure the timely payment of property management fees through a purpose-built in-house smart gas mobile app.

The development of smart gas services had for many years been restricted by traditional two-hop network communications technologies such as Long Range (LoRa) and RF networks. Network construction is particularly quite difficult to accomplish using traditional technologies. For example, concentrators can only be deployed after site selection, electricity connection, and network planning. Different locations and scenarios cannot use the same solution. Network construction often requires a long period of time. In addition, concentrators tend to suffer from an inability to withstand extreme weather conditions such as lightning, rain, or snow. As a direct result, concentrators may require frequent maintenance. For example, connection of mains electricity may be affected by man-made faults, and accidental solar power supply faults may occur due to heavy snow. Furthermore, LoRa and RF networks operate on unlicensed spectrum. Networks used by different applications, such as natural gas, water, street lamps, and parking, often experience co-channel interference. And it is difficult to coordinate all walks of life to help eliminate this problem.
</p>
<button name="smartgas" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<div style="float: left;width: 400px;height: 230px;">
		<img src="img/smartMeter.png" width="150" height="150" style="margin-top: 180px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right; color: black;">
		<h3>Smart Meter Reading</h3>
		<p>

Conventionally, meter readers must physically visit and read electricity meters every month. This brings the following challenges:
• Manual meter reading lacks the accuracy and efficiency of IoT solutions, and the high labor costs are high. Metering data cannot be collected and analyzed in real time.
• Traditional meter reading cannot enable prepayment or differentiated pricing. Bills can only be paid at official service centers. This decreases the efficiency of electricity fee collection.
• Electricity theft cannot be prevented, and electrical data cannot be collected in real time to analyze line loss efficiently.To address these problems, Huawei has provided two solutions for the electric power industry: the PLC-IoT AMI Meter Reading Solution and the eLTE-IoT AMI Meter Reading Solution. The PLC-IoT AMI Meter Reading Solution uses wired technologies and is deployed when there are no restrictions on deployment costs. The eLTE-IoT AMI Meter Reading Solution uses wireless technologies and is widely deployed when meters are distributed or urban renewal is ongoing.Smart electric meters are electronic devices that track and record the use of electricity in customers' homes. Electric utility companies have been replacing the outdated analog meters (that are read manually each month) with the new, high-tech digital smart meter versions. These smart meters automatically capture information about electricity consumption and then transmit it back to the electric company.Smart meters can provide quick, accurate measurements of electricity use while eliminating the need for estimated monthly bills or home visits from meter readers. While this seems like the smart thing to do, there are concerns that smart meters are collecting unnecessary information about hourly electricity use. This collection of data could, potentially, be a violation of users' privacy.
</p>
<button name="smartmeter" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<div style="float: left;width: 400px;height: 250px;">
		<img src="img/smartParking.jpg" width="150" height="150" style="margin-top: 280px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right;; color: black;">
		<h3><a name="smartparking">Smart Parking</a></h3>
		<p>The number of vehicles on the road is rapidly outpacing the supply of available parking spots. Parking has become a widespread issue in urban development. This problem can be mitigated by introduction of smart parking. Smart parking aims to help individually match drivers to parking spots, improve parking space utilization, reduce management cots, and alleviate traffic congestion. However, the existing smart parking applications still possess a number of connectivity issues. Street parking spot information cannot be easily and efficiently collected and transmitted to the management platform. A large number of parking lots exist as information silos, and their parking spot information cannot be shared. Existing magnetic vehicle detectors deployed for street parking use short-range wireless technologies. This requires the addition of trunking gateways, which makes street parking hard to construct and maintain and impedes the large-scale promotion of smart parking. Moreover, isolated parking data cannot be connected to a unified urban parking management platform. As a result, the platform cannot obtain parking data, and the roll out of valuable applications such as urban parking guidance and parking space sharing are negatively affected.</p>
		<button name="smartparking" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<br>
	<div style="float: left;width: 400px;height: 250px;">
		<img src="img/dustbin.jpeg" width="150" height="150" style="margin-top: 350px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right;; color: black;">
		<h3>Smart Trash</h3>
		<p>City councils and urban waste collecting companies use Smartup Cities revolutionary waste solutions to monitor city wide waste containers to save up to 50% of costs by reducing operating hours, trucks maintenance, road wear and CO2 emissions.Retailers, restaurants, office buildings, hotels and commercial centers use Smartup Cities waste monitoring solutions to harness the full value of their sorted recyclables, better understand and optimise their waste streams, issue accurate environmental reporting and many more.Waste collection is an unglamorous but essential city service. The pressure is on city administrators to deliver that service as efficiently and effectively as possible, often under tight budget restrictions. Ample opportunity exists worldwide for smart solutions that can increase efficiency and improve the quality of waste collection services. The commercialization of smart waste collection technologies represents fertile ground for existing waste haulers, various stakeholders, and new waste management industry market entrants.The process of waste management currently in existence begins with the waste created by the people in the cities being disposed of in trash bins that are made available near the creation point. Subsequently, the trash is collected by private companies trucks or municipality at definite terms and sent to the temporary collection centers. From the collection centers, the trash is then sent to where it will be recycled.However, the implementation of this process only comes as a partial solution to the waste problems. In fact, it gives rise to some other problems. For instance, at the time of collection, some of the trash bins may be overfilled while some others may be underfilled. The trash bins that are overfilled lead to unhygienic conditions. Truck routes that are unoptimized also lead to excessive fuel usage. In addition, overfilled trash bins cause environmental pollution and the fact that all the trash collected is combined causes complication in sorting at the recycling plant.</p>
		<button name="smarttrash" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<br>
	<div style="float: left;width: 400px;height: 250px;">
		<img src="img/wifi.jpeg" width="150" height="150" style="margin-top: 450px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right;; color: black;">
		<h3>Public Wifi</h3>
		<p>Nowadays, Wi-Fi technologies are widely adopted and play a major role in increasing people’s quality of life. Let’s see in this post how our society can benefit from public Wi-Fi access, as a way to improve its well-being and become more efficient.Public Wi-Fi is a great opportunity for governments to connect entire cities: smart cities deploying free Wi-Fi are largely increasing and as a result, can effectively empower their communities with better services.For instance, Tanaza’s authorized partner Tacira, a Brazilian system integrator and solution provider, delivers smart digital services, such as smart waste management, smart security and smart lighting to public spaces around Brazil, relying on a cloud Wi-Fi infrastructure.Another advantage that public Wi-Fi access brings to communities is represented by public libraries: everyone, even those who can’t afford internet at home, can benefit from a free connection and use it to access public services, look for jobs, or for their personal entertainment, i.e. learning a new language.Equipping public transportation with free Wi-Fi access is another example of how public Wi-Fi positively affects communities: residents and travelers can enjoy a better travel experience and get real-time information about transports, so as to better plan their routes.Furthermore, statistics show that 40% of traffic jams in city centers is as a result of drivers searching for parking lots. In this respect, the city of Barcelona, solved this traffic congestion problem by adopting special parking sensors, which work with an online application and show citizens where there are available parking areas.
 </p>
		<button name="publicwifi" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<br>
	<div style="float: left;width: 400px;height: 250px;">
		<img src="img/st.jpg" width="150" height="150" style="margin-top: 420px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right;; color: black;">
		<h3>Smart Transportation</h3>
		<p>Smart transportation, a key internet of things vertical application, refers to the integrated application of modern technologies and management strategies in transportation systems.These technologies aim to provide innovative services relating to different modes of transport and traffic management and enable users to be better informed and make safer and &#39smarter&#39 use of transport networks.In 2010, the European Union had defined Intelligent Transportation Systems (ITS) as a systems &#34in which information and communication technologies are applied in the field of road transport, including infrastructure, vehicles and users, and in traffic management and mobility management, as well as for interfaces with other modes of transport.&#34Smart transportation includes the use of several technologies, from basic management systems such as car navigation; traffic signal control systems; container management systems; automatic number plate recognition or speed cameras to monitor applications, such as security CCTV systems; and to more advanced applications that integrate live data and feedback from a number of other sources.ITS technologies allows users make better use of the transportation network and also paves the way for the development of smarter infrastructure to meet future demands.The evolution of intelligent transportation systems is providing a growing number of technology solutions for transportation managers as they seek to operate and maintain the systems more efficiently and improve performance. </p>
		<button name="smarttransportation" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<br>
	<div style="float: left;width: 400px;height: 250px;">
		<img src="img/ss.jpg" width="150" height="150" style="margin-top: 420px; margin-left: 90px">
	</div>
	<div style="width: 70%;float: right;; color: black;">
		<h3>Smart Security</h3>
		<p>Home security is much more than door contacts and false alarms.  At Smart Security Solutions, we offer the latest smart home features such as thermostat controls, live & recorded video feeds, light automations, voice control, and so much more. In the past few years, home security systems have become much smarter about keeping an eye on your home while you're asleep or out for the day. As well as protecting you better in emergencies, they come with new features and smart technology that old systems can't offer, giving you way more value from your investment. The Internet of Things has made it easier than ever to set up a smart home in which you can remotely control your door locks, lights, thermostats, vacuums, lawnmowers, and even pet feeders, using your smartphone and an app. It's also made it simple (and relatively affordable) to monitor your home from pretty much anywhere. Smart security systems are highly customizable and available as do-it-yourself kits or as full-blown setups that include professional installation and monitoring.Depending on your needs you can go with a system that you monitor yourself, or pay a subscription fee to have your home surveilled 24/7 by professionals who will contact your local fire and police departments when alarms are triggered. Of course, the more coverage you have, the more you can expect to pay.If you're not ready for a dedicated security system there are plenty of individual devices available that let you monitor your home from anywhere using your phone or tablet, including indoor and outdoor security cameras, video doorbells, and smart locks.</p>
		<button name="smartsecurity" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>
	<div style="float: left;width: 400px;height: 250px;">
		<img src="img/sc.jpg" width="230" height="150" style="margin-top: 400px; margin-left: 50px">
	</div>
	<br>
	<div style="width: 70%;float: right;; color: black; background-color: black;">
		<h3>Smart Communication</h3>
		<p>A well-planned data communications network offers a clear picture of the operating status and overall health of a smart grid in real-time. With the best-fit communication technology in place, a utility operator can monitor critical data and seamlessly automate transmission and distribution processes within their service area. For the past several years, a top focus for utilities and their smart grid operators has been enabling the demand side management aspect of its grid, e.g. the advanced metering infrastructure (AMI). Having said this, the distribution layer of the smart grid is increasingly a main focus for electric utilities, municipalities and cooperatives. Newer mandates and government regulations require increased grid efficiency and new investment is needed to improve the distribution of power to the end user. Distribution automation serves many critical functions within a smart grid, even if its benefits remain misunderstood or unknown to decision-makers. To stay competitive, utilities need to upgrade their existing infrastructure and improve the distribution layer to stay profitable in the years ahead. Distribution automation, unlike conventional means, allows remote monitoring, operations, isolation and implementation of fault recovery response in a fraction of the time previously experienced. Costs ultimately are reduced and revenue integrity is ensured at a greater level than previously thought possible.</p>
		<button name="smartcomm" style="margin-left: 400px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Check out!</strong></button>
	</div>

	<br><br><br>
	<div style="width: 100%; height: 40px; color: black; background-color: green; margin-top: -230px;">
		<!-- <p>Please click on the button below to view the 5 <strong>previously</strong> visited products</p> -->
		<button name="click1" style="margin-left: 50px; width: 150px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Last Visited</strong></button>
		<!-- <p>Please click on the button below to view the 5 <strong>most</strong> visited products(cookies)</p> -->
		<button name="click2" style="position: relative; left: 50px; width: 250px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Most Visited(COOKIES)</strong></button>
		<!-- <p>Please click on the button below to view the 5 <strong>most</strong>visited products(OVERALL)</p> -->
		<button name="click5" style="position: relative; left: 100px; width: 250px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Most Visited(OVERALL)</strong></button>
		<!-- <p>Please click on the button below to view the 5 <strong>best star rated</strong> products</p> -->
		<button name="click3" style="position: relative; left: 140px; width: 200px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Best Star Rated</strong></button>
		<!-- <p>Please click on the button below to view the 5 <strong>best number rated</strong> products</p> -->
		<button name="click4" style="position: relative; left: 200px; width: 230px;height: 30px;color: green;background: black; font-size: 20px; cursor: url(img/handcursor.jpg),pointer;"><strong>Best Number Rated</strong></button>
		
	</div>
</form>	
</body>