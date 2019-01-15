<!DOCTYPE html>
<html lang="en">
<head>
	<title>Smart Meter</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- rating star css -->
    <link rel="stylesheet" href="js/ratingstar.css"> 
</head>
<body style="/*background-color: #FFA07A;*/ padding-left: 30px; background-image: url('../img/try5.jpg'); text-align: justify;">
	<div class="first" style="margin-top: -5px; margin-left: 220px; width: 1500px;">
		<ul>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="../smartsolutions.php">Home</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../about.html">About Us</a></li>
            <li style="font-size: 20px; width: 250px; height: 30px;"><a href="../products.php">Products and Services</a>
<!--                <ul></ul> -->
            </li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../news.html">News</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../contacts.php">Contacts</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../admin.php">Admin</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>
	<div class="smartlamps" style="background-image: url('../img/wheat.jpg'); height: 180px;">
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Smart Meter</h1>
	</div>

    <div style="border-style: dotted solid double dashed;">
        <label for="email" style="font-size: 20px; margin-left: 10px;">Please Rate this product :</label>     
            <div class='starrr' id='rating-student'></div>
    </div>

    <div class="numberRating" style="font-size: 20px; position: relative; left: 700px;">
            <p style="margin-top: -34px; margin-left: 250px;"><strong>Give a Number Rating: </strong></p>
            <div style="margin-top: -40px; margin-left: 470px; color: black;">
                <?php foreach (range(1,5) as $rating): ?>
                    <a href="rate.php?rating=<?php echo $rating; ?>"><?php echo $rating."&nbsp"; ?></a>
                <?php endforeach ?>
            </div>
    </div>

	<div style="font-size: 20px; /*background-color: green;*/ margin-top: -50px; color: black; position: relative; top: 60px;">
		<p>As one of the first states to roll out smart meters en masse -- and the only one to build a central, statewide data repository to share that data with customers and competitive energy companies -- you'd think that Texas would be way ahead in the energy-data sharing game. But it isn't.</p>
		<p>That's largely because of a clunky platform built on last decade's technology, and cumbersome rules that have dissuaded a vast majority of the 7.3 million households and businesses with a smart meter from taking part. Last week, Texas utilities, big energy customers and representatives of would-be third-party users of that data reached a settlement agreement that will unclog these bottlenecks between smart meter data and its uses -- if it’s approved by the Public Utility Commission of Texas in April.</p>
		<p>The settlement would make big changes to Smart Meter Texas (SMT), the platform set up in 2007 by state grid operator ERCOT to collect data from meters owned by distribution utilities CenterPoint, Oncor, AEP and Texas-New Mexico Power and share it with the competitive service providers (CSPs) that vie for customers in the state’s deregulated energy market. 

Customers, as the legal owners of their own data, are also entitled to access, which was built into SMT in principle. As with most of the utilities that promised smart meter data to customers, SMT was slow to deliver. CSP access was only made available in November 2014, roughly seven years after the platform launched. </p>
		<p>Since then, the limitations of the existing system have resulted in low uptake of its services, according to the South-central Partnership for Energy Efficiency as a Resource, or SPEER. In an October 2016 report, the nonprofit research group wrote that there were only 1,735 active data-sharing agreements in SMT as of that summer, “in a universe of over 7 million meters.”

While there are 73,000 residential and business customers registered on the SMT website to access their data, many of those are associated with a state-mandated program for low-income participants, or for on-site solar installations, SPEER noted. </p>
		<p><strong>Mission: </strong>Data, an industry trade group and stakeholder in the Public Utility Commission of Texas proceedings, has been tracking the deficiencies in how Texas -- and to be fair, most other states -- handle data-sharing. It's also tracking how the new settlement will change that. </p>

	    <br><br><br>

		<img src="../img/smartmeterin1.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="../img/smartmeterin2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>
	<p>The main advantages of using smart meters are:

<p><strong>1. Control over consumption and cost : </strong>Smart metering will provide customers and businesses real-time information on usage. It will show the exact usage of each appliance and will also help budget the energy bill.</p>
<p><strong>2. Accurate billing : </strong>Smart meters will ensure transparency for consumers to control their energy consumption: The era of estimated reads will be done away with, reducing the burden on meter operators collecting meter readings manually.</p>
<p><strong>3. Innovative pricing models : </strong>Over time, smart meters will help define energy consumption patterns that will enable the industry to develop multiple tariff offers (as in the mobile phone market).</p>
<p><strong>4. </strong>This will give consumers the choice of selecting a provider best suited to their individual needs.</p>
<p><strong>5. </strong>With accurate information, suppliers can work with generators and infrastructure providers to create a stable balance between energy demands and supply ensuring a sustainable environment in the longer term.</p>
<p><strong>6. Environmental benefits : </strong>With advanced control and communications, peak load diminution and the amount of energy supplied will be possible. This will, in turn, reduce unnecessary energy consumption and reduce CO2 emissions. Smart metering will also aid in effectively integrating renewable energy sources such as solar panels and windmills.</p>

	<img src="../img/smartmeter3.jpg" style="margin-left: 530px;">
	<p>The Utilities industry is grappling with operational issues, namely inefficient processes, manual procedures and outdated technology. There is a growing need to reduce operational costs, increase customer retention, optimize load management, enhance meter data management and meet regulatory demands.</p>

<p>Utilities players have had to face increased competition due to the de-regulation of retail utilities markets world-wide and are struggling to maintain their customer base. In addition, customers are more informed and demanding and expect rapid issue- resolution, improved customer service and accurate billing. It is important that excellent business processes are fused with customer-first Customer Relationship Management (CRM) strategies such as proactive communications and user-friendly technologies. By partnering with an experience Business Process Outsourcing (BPO) provider like WNS, utilities can realize productivity-related benefits and reduce their overall cost-to-serve per customer and thereby improve their price competitiveness.</p>

<p>For the utilities sector to remain viable and strong, future-proof business processes are an absolute requirement and this is especially so with respect to the Meter-to-Cash (M2C) process. The Everest Group estimates the potential of M2C BPO to be nearly USD 50 Billion to USD 70 Billion globally, but current penetration remains in the low single digits. The best way to optimize the M2C process is by partnering with an experienced outsourcing player. The M2C process has requirements specific to the utilities industry such as meter data management, smart metering, field services, customer billing, multiple legacy systems and inconsistent meter reads. BPO companies can provide technology platforms that allow for M2C processes to be delivered by utilities companies without any upfront capital expenditure. BPO firms can help standardize processes that result in enhanced performance.</p>

<p>Another essential task for utilities is to streamline their processes in order to support the rapidly increasing smart meter implementation. An experienced BPO service provider can offer pre-implementation services by conducting a feasibility analysis and building an execution roadmap. Implementation services include work order management, device and meter data management, and meter provisioning support. BPO service providers can also offer smart metering analytics support allowing utilities to gain from the data explosion created by the smart meter network.</p>
</div>

<br><br><br>
<div class="row">
<div class="col-md-12">
   <div style="border-style: dotted; margin-top: 20px; padding-left: 20px; width: 70%; margin-left: 200px;">
    <div class="form-group">
        <div class="form-group has-success has-feedback">
            <h1>Please submit a Feedback</h1>
            <label for="name">Name :</label>
            <input type="text" class="form-control" id="name" style="width: 600px;">          
        </div>
        <div class="form-group has-success has-feedback">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" style="width: 600px;">            
        </div>   
        <h5 style="margin-left:0px">Message: </h5><textarea style="margin-left:0px" rows="10" cols="100"></textarea>  <br><br>
        <input type="button" id="submit" class="btn btn-success" value="Submit" style="margin-left: 300px; width: 100px; background-color: black; color: green; font-weight: bold; ">
        <div class="msg"></div>
    </div>  
</div>
</div>

<hr>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- star js -->
<script src="js/ratingstar.js"></script>
<!-- ajax -->
<script>
// rating
var rate;
$('#rating-student').starrr({
  change: function(e, value){ 
    rate = value;          
    if (value) {
      $('.your-choice-was').show();      
    } else {
      $('.your-choice-was').hide();
    }
  }
});
// ajax submit
$("#submit").click(function(){  
    var name = $('#name').val();
    var email = $('#email').val();  
    $.ajax({        
        url: "rating.php",
        type: 'post',
        data: {v1 : name, v2 : email, v3 : rate},
        success: function (status) {
            if(status == 1){
                $('.msg').html('<b>Student Inserted !</b>');
            }else{
                $('.msg').html('<b>Server side error !</b>');               
            }
        }
    });

});
</script>

</body>
</html>