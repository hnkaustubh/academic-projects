<!DOCTYPE html>
<html>
<head>
	<title>Smart Water</title>
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
<body style="/*background-color: #FFA07A;*/ padding-left: 30px; background-image: url('../img/try6.jpg'); text-align: justify;">
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
		<h1 style="color: black; margin-left: 20px; top: 20px; position: relative;"><strong>Smart Water</strong></h1>
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
		<p>The world is becoming smarter and faster than ever before. Smart technologies are helping improve the quality of human life in all aspects, e.g., the way humans are transported (&#34smart mobility&#34), the way we live (&#34smart homes&#34), the way we communicate with each other (&#34smart communications&#34), the way we manage our health (&#34smart health&#34), and the way we are educated (&#34smart education&#34), among others. The water sector is a domain with the greatest potential and most room for improvement through the application of smart technologies. Recently, the concept of &#34smart water&#34 has elicited particular attention, and is being considered as the only solution for current global water crisis, from climate change and droughts, to overpopulation (e.g., Los Angeles, London, and Cape Town).</p>
		<p>Smart water consists of two key components: smart sensing and smart decision making. Real-time sensing/monitoring of micro- to macro-level water demand and other water variables enhances our system awareness, through which we can make much better operational and management decisions. More system information and better judgment may be possible.</p>
	    <br><br><br>

		<img src="../img/smartwaterin.jpg" style="margin-left: 350px; margin-left: 140px">
		<img src="../img/smartwaterin2.jpg" style="margin-left: 350px; float: left; margin-left: 300px">
		<br><br><br>
	<p>There is no doubt that the core of smart technologies is advanced artificial intelligence (AI), such deep learning algorithms (DLAs). A Go match between the 18-time world champion, Sedol Lee, and a computer Go program developed by Google DeepMind based on DLA, AlphaGo, has clearly shown that machine intelligence can solve highly complicate problems if well trained with massive amounts of data. Many water problems can make the best use of this AI and machine learning. Big-data gathered in real-time are remotely fed to an AI, from which useful information and features can be selected and interpreted for yielding an optimal real-time decision. Enhanced computing technologies (high-performance computing) accelerate the process, whereas ICT provides a high-speed pathway among the aforementioned entities, i.e., smart sensing and AI decision making.</p>

	<img src="../img/smartwaterin3.jpg" style="margin-left: 530px;">
	<p>To allow Smart Water to successfully address and deliver the aforementioned issues, we augmented six new associate editors, with expertise in artificial intelligence, hydroinformatics, and green-blue water infrastructure, to our editorial board. I took over as Editor-in-Chief to accelerate our momentum toward smart water Prof. Phillipe Gourbesville maintained during the last two years. We also revised and updated the scope and themes of the journal to cover various issues in smart water management (SWM). Some of the major new additions are as follows:</p>
	<p><strong>1. Smart city issues with focus on smart water: </strong>Many mega cities around the world are now suffering from a water scarcity. SWM is therefore being considered as the most critical key of a smart city. A large number of government-driven researches and demonstration projects of smart cities have been launched across the globe, and efforts regarding the consideration of an SWM with other sectors (e.g., smart power grids, smart homes, and smart buildings) in a comprehensive manner have been recently reported to achieve and maximize water efficiency. Therefore, we will now accept inter-sectorial studies on the smart city with a focus on smart water.</p>
	<p><strong>2. Cyber-security for smart water system: </strong>Water-related systems (water supply, distribution, and wastewater systems) are no longer safe against cyber-attacks. In November 2011, the first cyber-attack on a U.S. industrial system was conducted against a water utility&#39s water pump, which was remotely shut down by foreign hackers. We have reached a moment in which our &#34water security&#34 should incorporate &#34water security from cyber-attacks.&#34 This domain requires inter-disciplinary efforts from civil-water engineering, computer science, and disaster management, among others.</p>
	<p><strong>3. Artificial intelligence for smart water: </strong>Andrew Ng, Vice President and Chief Scientist of Baidu (one of the largest Internet companies and a premier leader of AI in the world), and an adjunct professor at Stanford University, stated that &#34AI is the new electricity.&#34 Smart water cannot be mentioned without AI, which will provide prompt decision support based on big-data gathered from sensors through ICT.</p>
	<p>Given these new changes, we would like to receive high-quality smart water papers with both practical and academic advances and novelties, which will benefit practitioners, researchers, and decision makers in the water domain, and eventually develop Smart Water into a prestigious journal. We look forward to receiving journal papers that shed light on this particularly spotlighted field.</p>
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