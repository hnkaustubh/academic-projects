<!DOCTYPE html>
<html>
<head>
	<title>Public Wifi</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width">	
	<meta name="viewport" content="width=device-width"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- rating star css -->
    <link rel="stylesheet" href="js/ratingstar.css"> 
</head>
<body style="background-color: #FFA07A; padding-left: 30px; text-align: justify;" >
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
    <br>	
	<div class="smartlamps" style="background-image: url('../img/wheat.jpg'); height: 180px;">
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;">Public Wifi</h1>
	</div>

    <div style="border-style: dotted solid double dashed;">
        <label for="email" style="font-size: 20px; margin-left: 10px;">Please Rate this product :</label>     
            <div class='starrr' id='rating-student'></div>
    </div>

    <div class="numberRating" style="font-size: 20px; position: relative; left: 700px;">
            <p style="margin-top: -34px; margin-left: 250px;"><strong>Give a Number Rating: </strong></p>
            <div style="margin-top: -40px; margin-left: 470px;">
                <?php foreach (range(1,5) as $rating): ?>
                    <a style="color: black;" href="rate.php?rating=<?php echo $rating; ?>"><?php echo $rating."&nbsp"; ?></a>
                <?php endforeach ?>
            </div>
    </div>
    <img src="../img/ad.jpeg" style="margin-top: 20px;" width="400" height="130">
    <img src="../img/ad1.jpeg" style="margin-top: 20px; margin-left: 50px;" width="400" height="130">
    <div style="border-style: dotted; border-color: green; margin-top: -130px; height: 140px; width: 500px; margin-left: 900px;">
        <h3 style="color: black; margin-left: 320px; text-shadow: 1px 1px;">Price: $2000</h3><br>
        <form method="POST" style="margin-left: 30px;">
            <img src="../img/cart.png" width="45" style="margin-top: -10px;">
            <input type="submit" name="cart" value="Add to Cart" style="background: black;color: green; width: 150px;height: 30px; font-size: 20px; cursor: url(img/handcursor.jpg),pointer; font-weight: bold;">
        </form>
        <form method="POST" style="margin-left: 235px; margin-top: -35px;" action="buy.php">
            <input type="submit" name="buy" value="Buy Now" style="background: black;color: green; width: 150px;height: 30px; font-size: 20px; cursor: url(img/handcursor.jpg),pointer; font-weight: bold; margin-left: 30px;">
            <img src="../img/buy.png" width="50" style="margin-top: -10px;">
        </form>
        <?php
            if(isset($_POST['cart'])){
                $conn = mysqli_connect("54.193.22.204","tester","password","project_281");
                $query = "INSERT INTO shopping_cart (name, price, image) VALUES ('PUBLIC WIFI', 2000, '')";
                $result = mysqli_query($conn,$query);
            }
        ?>
    </div>
    <br>
	<div style="font-size: 20px; /*background-color: green;*/ margin-top: -50px; color: black; position: relative; top: 60px;">
		<p>Public WiFi is a form of convenience that&#39s taken for granted these days. Most people expect to get themselves a free WiFi access at several important spots ranging from the airport to that of a restaurant.But is public WiFi completely safe for use? There&#39s no doubt that it does come with a fair amount of positives but at the same time, it also exhibits a fair amount of negatives that can actually cause a significant amount of problems to the customers in general.In this article, I will discuss the different pros and cons of a free public WiFi access in thorough details. Then you can weigh them up accordingly and come to a specific conclusion.</p>
		<p>First thing, dependent on what type of venue you run it&#39s a bit like a utility. People expect it like they expect it to be warm or have clean bathrooms. If you don&#39t have it you&#39re at an immediate disadvantage.That said there are many advantages. First is people are more likely to visit you if you have it and there are many studies backing this up. Second is you want people to be socially posting in and about your venue, they&#39ll typically want WiFi to do that.The first era of public WiFi solutions catered for the utility WiFi play, put a sticker in the window to say we have it, tick that box. The next generation of WiFi solutions like https://www.purple.ai bring an actual value to the venue. Great, branded user experience through the captive portal, analytics that show you the same things you&#39d expect from your website analytics and then the ability to market to your users to drive them back more often.In short, you need it but if you&#39re smart you can really make it work for you.</p>
		<p>Having a free and public wireless zone has long been touted as an essential means to creating truly smart cities. In addition to allowing people to research the closest good restaurant, connect with friends and gain easy access to data, a public Internet connection there are many other benefits to having a free public Wi-Fi zone.Disaster relief, for example, is simplified by the fact that messages can be sent to everyone in an affected area. A public Wi-Fi zone does not need much power, so a small generator or solar panel will keep it running. Education and digital literacy are guaranteed to grow through access to public wireless zones, as is the ability to promote cities and regions to tourists.Public Wi-Fi also provides benefits for the administrators of smart urban spaces. Acquiring data for economic development planning becomes easier, and it has even been used to increase the use of public transportation in some US cities.Alan Knott CraigFormer Mxit CEO and founder of non-profit organisation Project Isizwe Alan Knott-Craig launched TshWiFi in 2013, connecting more than 1.8 million people to the Internet through 90 million logged sessions over 803 Free Internet Zones (FIZs) in Tshwane since its launch. TshWiFi was built by Project Isizwe, whose sole mandate is to provide free municipal WiFi in South Africa. The city of Tshwane was Project Isizwe&#39s first WiFi project and remains its biggest, with full funding from the city&#39s municipality.</p>

	    <br><br><br>

		<img src="../img/publicwifiin1.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="../img/publicwifiin2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>

<p><strong>Public administration sector</strong><br>
Public Wi-Fi is a great opportunity for governments to connect entire cities: smart cities deploying free Wi-Fi are largely increasing and as a result, can effectively empower their communities with better services.For instance, Tanaza&#39s authorized partner Tacira, a Brazilian system integrator and solution provider, delivers smart digital services, such as smart waste management, smart security and smart lighting to public spaces around Brazil, relying on a cloud Wi-Fi infrastructure.Another advantage that public Wi-Fi access brings to communities is represented by public libraries: everyone, even those who can’t afford internet at home, can benefit from a free connection and use it to access public services, look for jobs, or for their personal entertainment, i.e. learning a new language.Equipping public transportation with free Wi-Fi access is another example of how public Wi-Fi positively affects communities: residents and travelers can enjoy a better travel experience and get real-time information about transports, so as to better plan their routes.Furthermore, statistics show that 40% of traffic jams in city centers is as a result of drivers searching for parking lots. In this respect, the city of Barcelona, solved this traffic congestion problem by adopting special parking sensors, which work with an online application and show citizens where there are available parking areas.Public Wi-Fi access can have a huge impact on tourism, too. When traveling, indeed, people want to stay in contact with their family and friends, share their holiday pictures on their social networks and check travel information. As a consequence, tourists are more incentivized to travel to a location if they can use the internet for free. Providing a city with free Wi-Fi hotspots would be advantageous both for tourists, who would enjoy internet connection without roaming charges, and for the local economy, which would largely benefit from increased levels of tourism.</p>
<p><strong>Education sector</strong><br>By providing free Wi-Fi to students and to the academic staff, educational institutions can leverage wireless education to improve their digital studies&#39 curriculum. Examples of effective implementation of free Wi-Fi in schools are New Taipei City, Taiwan, which in 2015 introduced tablets and computers in 300 schools, and the LSD Lisbon School of Design, Portugal, which, thanks to the Tanaza Wi-Fi, has been providing students and staff with a seamless and reliable Wi-Fi network since 2015. In this way, student and teachers can effectively use wifi-enabled devices for educational purposes and, at the same time, the institution can develop innovative teaching techniques based on collaborative and interactive learning.Furthermore, thanks to free wireless services, smart education techniques can be at the fingertips of anyone and anywhere, which increases digital inclusion: people coming from unprivileged areas can take online courses for free, taking advantage of the plethora of online educational services available (ebooks, MOOCs, etc.).Thanks to Wi-Fi, information and communication technology has overcome geographical and social distance, homogenizing our society.</p>
<img src="publicwifiin3.png" style="margin-left: 350px; width: 750px"><br>
<p><strong>Healthcare sector</strong><br>Wi-Fi technology applied to healthcare services largely improves hospitals and clinics&#39 performances. For instance, thanks to wireless apps doctors can have instant access to their patients&#39 clinical information and easily communicate with them. In addition, public Wi-Fi facilitates rural health care: indeed, patients living in rural areas can use their Wi-Fi network to reach doctors remotely. At the same time, Wi-Fi allows real-time location monitoring, meaning that it makes it possible to track the position of the medical staff within a healthcare building and to better plan the use of resources: both patients and equipment can be directed to the right place at the right time.</p>
<p><strong>Commercial sector</strong><br>According to a report from Cisco, commercial public Wi-Fi hotspots are expected to grow from 8.8 million in 2016 to 15.3 Million by 2021. This optimistic forecast is related to the positive revenues that businesses such as retail stores, restaurants, bars, cafes, salons, hotels and shopping malls, among many, have gained from offering free Wi-Fi connection to their clients. Customers, in turn, can leverage freely accessible Wi-Fi connection while shopping. Furthermore, free Wi-Fi connections available in public venues can be a solution for people who can&#39t afford home broadband connections – whose tariffs are pretty high in some countries.As for hospitality, according to a study from Systemagic, free and high-speed Wi-Fi, together with good connectivity in terms of bandwidth, are powerful tools for hotels to increase customer satisfaction. The report shows that, in 2016, 65% of guests of Roomzzz, an English aparthotel chain, accessed free Wi-Fi within 7 minutes of check-in, and a quarter of guests revealed that they would not opt for a hotel that didn’t offer free Wi-Fi services. Investing in better Wi-Fi services in the hospitality industry is, therefore, essential to attracting tourists and improving the guest experience. At the same time, investment in Wi-Fi services could benefit the local economy due to growth in its tourism sector.</p>
<p><strong>Disaster Relief</strong><br>The grant we received from the Economic Development Administration is based around disaster relief. As we have been touring towns, we have been asking them how they coordinated after Irene. What we hear are impressive stories of collaboration, on-the-spot organization, and general helpfulness from everyone involved. That being said, many communities also discussed the difficulties in getting correct messages out to everyone. Communication methods ranged from daily meetings to printed newsletters, updated municipal websites, and local radio stations.A prime example of how the town got together after Irene is Royalton, where townspeople gathered on the green the day after the storm, because they were not sure what else to do. Eventually, a volunteer system was implemented at the school, and a website called &#34Operation Revive Royalton&#34 was set up so that people could get organized. However, in the first few days there were many questions flying around, and rumors spread about what roads were closed and where the electricity was shut off.In cases like this, the benefit of a public Wi-Fi zone is that in a disaster situation, it does not take much power to make sure it is still running. A small generator or solar panel will do the trick. In addition, using the software to control the zone, the zone&#39s administrator can add information to a page viewed initially by anyone using the Wi-Fi zone, which could easily be used as a means to spread information about where to volunteer or get help, what roads are closed, and what supplies are needed. If Royalton&#39s green had had free Wi-Fi on that day after Irene, people might have been able to begin coordinating their efforts even more quickly than they did. Wi-Fi zones can become a key part of communication in a post-disaster situation.</p>
<p><strong>Tourism and Town Promotion</strong><br>Woodstock was one of the first towns in Vermont to create its own wireless zone throughout its downtown area. Townsend Belisle was a key proponent of its implementation, and one of his driving motivations was to have Woodstock become a destination town, instead of a pretty place to drive through. As he himself stated in his presentation, people recognize that a town is &#34cool&#34 and &#34hip&#34 when their iPhone dings an announcement of a free wireless signal as they drive through. That free zone gives them a motivation to stop and explore the town more, and also allows the town to be recognized as a forward-thinking place, where new ideas and technology are welcomed.In addition, the zone can be set up so that a landing page is seen by everyone who begins to use the free zone. This page can have a calendar of town events, a listing of local eateries, and a page on things to do in the town. This happened in Ludlow. In a village of just 800 people, in busy weeks their free Wi-Fi zone is used by more than 1500 individuals. Most of these users are from out of town, meaning that they have stopped in at one of Ludlow&#39s restaurants or stores and decided to log on to the zone. They might just want to check their email, but each of those visitors will see what else the town can offer them as well.In addition to helping to bridge the digital divide and becoming a communication tool during a disaster, a Wi-FI zone can send a signal that a town is informed forward-thinking, and ready to welcome positive change. I look forward to helping towns implement these zones over the next year and a half!</p>
	

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