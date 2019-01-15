<!DOCTYPE html>
<html>
<head>
	<title>Smart Transportation</title>
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
<body style="/*background-color: #FFA07A;*/ padding-left: 30px; background-image: url('../img/try8.jpg'); text-align: justify;w">
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
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Smart Transportation</h1>
	</div>

    <div style="border-style: dotted solid double dashed;">
        <label for="email" style="font-size: 20px; margin-left: 10px;">Please Rate this product :</label>     
            <div class='starrr' id='rating-student'></div>
    </div>

    <div class="numberRating" style="font-size: 20px; position: relative; left: 700px;">
            <p style="margin-top: -34px; margin-left: 250px;"><strong>Give a Number Rating: </strong></p>
            <div style="margin-top: -40px; margin-left: 470px;">
                <?php foreach (range(1,5) as $rating): ?>
                    <a href="rate.php?rating=<?php echo $rating; ?>"><?php echo $rating."&nbsp"; ?></a>
                <?php endforeach ?>
            </div>
        </div>

	<div style="font-size: 20px; /*background-color: green;*/ margin-top: -50px; color: black; position: relative; top: 60px;">
		<p>ITS (intelligent transportation system) has been developed since the beginning of 1970s, which makes human, vehicles, roads united and harmonic and establishes a wider range, fully efficient, real-time and accurate information manage system. In the paper, intelligent transportation technologies such as wireless communications, computational technologies, and Sensing technologies have been proposed. Intelligent transportation applications are also introduced. This is a belief abstract for an invited talk at the workshop on power Electronics and Intelligent transportation system.</p>
		<p>FThe estimation of urban arterial travel time distribution (TTD) is critical to help implement Intelligent Transportation Systems (ITS) and provide travelers with timely and reliable route guidance. The state-of-practice procedure for arterial TTD estimation commonly assumes that the path travel time follows a certain distribution without considering link correlations. However, this approach appears inappropriate since travel times on successive links are essentially dependent along signalized arterials. In this study, a copula-based approach is proposed to model arterial TTD by accounting for spatial link correlations. First, TTDs on consecutive links along one arterial in Hangzhou, China are investigated. Link TTDs are estimated through the nonparametric kernel smoothing method. Link correlations are analyzed in both unfavorable and favorable coordination cases. Then, Gaussian copula models are introduced to model the dependent structure between link TTDs. The parameters of Gaussian copula are obtained by Maximum-Likelihood Estimation (MLE). Next, path TTDs covering consecutive links are estimated based on the estimated copula models. The results demonstrate the advantage of the proposed copula-based approach, compared with the convolution without capturing link correlations and the empirical distribution fitting methods in both unfavorable and favorable coordination cases.</p>
		<p>Red-light-running (RLR) is an important reason for the large number of intersection-related fatalities, injuries, and other losses. The accurate RLR prediction can effectively reduce crashes caused by RLR behavior. The RLR prediction is usually composed of two parts: the vehicle’s stop-or-go behavior and the arrival time when the vehicle reaches the stop line. Previous stop-or-go prediction models are usually based on embedded traffic sensors using machine learning algorithms. While based on the continuous trajectories collected by radar sensors, RLR prediction can be conducted more effectively. In this paper, a probabilistic stop-or-go prediction model based on the Bayesian network (BN) is proposed for RLR prediction. We extend the deterministic output into the probabilistic output, which provides decision-makers with greater autonomy. The causality of BN improves the interpretability of the prediction model. The BN model is calibrated and tested by the continuous trajectories data measured by radar sensors installed at a signalized intersection. We not only consider the movement measurements of individual vehicles (e.g., speed and acceleration), but also take into account the car-following behavior. As a comparison, different machine learning models and the model based on the inductive loop detection (ILD) are adopted. The results show that the proposed BN model has a high prediction accuracy and performs better in the feature interpretation. </p>

	    <br><br><br>

		<img src="../img/st1.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="../img/st2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>

<p>This work investigates and discusses how the introduction of electric buses (EB), both battery and plug-in hybrid EB, will and should change the operations planning of a public transit system. It is shown that some changes are required in the design of a transit route network, and in the timetabling and vehicle scheduling processes. Other changes are not required, but are advisable, using this opportunity upon the introduction of EB. The work covers the main characteristics of different types of EB with a short description, including the most popular charging technologies, and it presents the generally accepted transit operations planning process. Likewise, it describes and analytically formulates new challenges that arise when introducing EB. The outcome of the analyses shows that multiple new considerations must take place. It is also shown that the different charging techniques will influence the operations planning process in different ways and to a varying extent. With overnight, quick and continuous charging, the main challenges are in the network route design step, given the possibility of altering the existing network of routes, with efficient and optimal changes of the timetabling and vehicle scheduling components. An illustrative example, based on four bus lines in Norrköping, Sweden, is formulized and introduced using three problem instances of 48, 82, and 116 bus trips. The main results exhibit the minimum number of vehicles required using different scenarios of charging stations.</p>
<img src="../img/st3.jpg" style="margin-left: 350px; width: 750px"><br>

<p>The last decade has witnessed an unprecedented convergence of communication, control, and sensing that can potentially transform transportation infrastructure and delivery.  At the most basic level, efficient operation and maintenance of our nation’s transportation infrastructure requires real time data exchange provided by intelligent transportation system technology.  When implemented, these technologies have the potential to revolutionize the nation’s economic vitality by moving people and goods more quickly, efficiently, safely, and at lower cost to consumers.</p>

<p>When the U.S. Department of Transportation (DOT) put out a Smart Cities Challenge, one might have expected the proposed solutions to cluster around transit issues. They did, but many went much further.In its newly issued report on lessons learned from the challenge, which ended in June 2016, the department details a range of proposals that look to leverage transit not just as a tool for managing commuting and congestions, but also as a means for addressing wider range of issues.&#34We see transportation being used as a tool to improve social outcomes,&#34 said Sophie Shulman, acting assistant secretary for the USDOT Research and Technology Office. &#34There are places where there is a problem that is not really about transportation, but where transportation can be a solution.&#34</p>

<p><strong>INFANT MORTALITY</strong><br>Among the 78 applications the contest received, one striking social solution comes from Columbus, Ohio, the winner of the $40 million prize. That money will supplement a $10 million investment from Paul G. Allen&#34s Vulcan Inc. and $90 million that the city has already raised from other private partners, all in an effort to reduce infant mortality.
Columbus city officials report that two to three babies under the age of 1 die every week in Franklin County, &#34far above the national rate.&#34 The county&#34s infant mortality rate is 2.5 times among African-American babies than among whites.<br>

How is that a transit issue?<br>

One smart city official in Columbus explains that the deaths cluster around Linden, a poor neighborhood where expectant mothers have sparse access to public transportation. Because they can&#39t get to the doctor, they don&#39t get the prenatal care they need, said Jeff Ortega, assistant director in the Department of Public Service and an official with Smart Columbus.

The city plans to implement a range of technology fixes to address the issue, starting with smart traffic controls that will allow busses to keep traffic lights green longer, ensuring buses can stay on route and on schedule.

In many cases, local residents don&#39t have credit cards, which means they cannot use ride share services. That&#39s a problem when their homes and their physicians&#39 offices may be located some distance away from bus lines. The city wants to develop kiosks where locals can turn cash into electronic currency, making ride share accessible.

The plan also calls for streetlight-mounted free Wi-Fi, which could help residents connect with ride share or get information on public transportation routes and schedules.

&#34This wasn&#39t just about using technology to solve a commuting problem, getting from here to there,&#34 Ortega said. &#34It was about using transportation to really solve community problems.&#34</p>

<p><strong>TRANSIT AND MORE</strong><br>
While social issues percolated to the top, many proposed solutions also did aim more directly at transit-related themes. Among the challenges cities face, DOT notes, are:<br>

<strong>Parking inefficiency: </strong> Some 30 percent of urban traffic is caused by cars looking for parking. <br>
<strong>Poor logistics: </strong> Trucks stuck in stop-and-go traffic cost shippers roughly $28 million a year in operating costs and wasted fuel.<br>
<strong>Climate change: </strong>The 78 applicant cities represent over 1 billion metric tons of CO2 emissions per year.
While cities took a broad range of approaches in addressing these and other issues, some common strategies emerged.

Forty-four cities proposed testing automated shared-use vehicles to help travelers connect to their destinations. Eleven cities suggested using sensors and other technologies to improve curb management.

Fifty-three applicants proposed using various forms of Dedicated Short Range Communication (DSRC) to connect vehicles to infrastructure and each other. In fact, the seven finalists proposed implementing DSRC in more than 1,000 advanced traffic signals and 13,000 vehicles.

Atlanta suggests a network of multimodal transportation centers that would serve not just as mobility hubs, but also as a focal point for economic development and community activity. Boston envisions &#34radically programmable&#34 city streets, where dynamic markings could change loading zones to thoroughfares depending on need.

Detroit is looking at forging partnerships between government, industry and academia to promote electric car shares and automated shuttles. In Las Vegas, officials are pondering electric vehicle charging stations to help curb emissions.

All these ideas could eventually have a social impact. &#34If you improve transit and mobility, you improve access to jobs. People can get to their jobs faster and cheaper, so we looked especially at cities where they put their pilots in underserved neighborhoods, rather than in wealthier neighborhoods,&#34 Shulman said.

DOT also looked for a degree of comprehensiveness, for example in leaning toward plans that incorporated not just smartphone apps for improving access to transit, but also public Wi-Fi to enable access to those apps. &#34If everyone is proposing a smartphone app to get you to transit, and you don&#39t have a cellphone with a data plan, that doesn&#39t help you very much,&#34 she said.

Of the 78 projects submitted for consideration in the DoT contest, about 20 are moving forward in some form, Shulman said, noting that even for those who didn&#39t win, the contest could provide a catalyst for progress.

&#34The challenge clearly inspired a lot of these cities to continue work with their plans and to seek other sources of funding,&#34 she said. &#34This has been an effective way to help these cities go out and look for private funds or to go to their city councils for money, because now they have these plans that really lay out a specific vision.&#34</p>

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