<!DOCTYPE html>
<html>
<head>
	
	<title>Feedback</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<?php
    $conn=mysqli_connect("localhost","root","","feedback");
?>
<?php
	if(isset($_POST['feed'])){
		$feed = $_POST['feed'];
		$add_feed="INSERT INTO `feeds`(`feed`) VALUES ('$feed')";
			mysqli_query($conn,$add_feed);
	}
?>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
	<script src="typed.min.js"></script>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	
	<!-- <div id="typed-strings">
		<p>Welcome to <strong>ENCENDER - 1</strong></p>
		<p>Let us know if you enjoyed our event.</p>
		<p>Give us your valuable feedback.</p>
		<p>You are anonymous</p>

	</div> -->
	
	<div class = "container-fluid pp">
		<div class="text">
			<span>E</span>
			<span>N</span>
			<span>C</span>
			<span>E</span>
			<span>N</span>
			<span>D</span>
			<span>E</span>
			<span>R</span>
			<span>-</span>
			<span>1</span>
		</div>
	</div>

	<!-- <div class="container">
		<div class = "row">
			<div class="col-4"></div>
			<div class="col-4">
				<img class="img-responsive" src="IETE_Logo.jpeg"  />
			</div>
			<div class="col-4"></div>
		</div>
	</div> -->
	<div class = "line-space"></div>

	<div class="container text-center typed">
		<span id='typed'></span>
	</div>

	<div class = "line-space"></div>

	<form action="index.php" method="POST">
		<div class="container" align = "center">
			<textarea  id="feed" name="feed" required="" rows="4" placeholder="Enter Feedback here"></textarea>
			<div class = "line-space"></div>
			<input type="submit" class="btn btn-info" value="Submit">
		</div>
	</form>

	<script>
		$('document').ready(function(){
			var typed = new Typed('#typed',{
                    strings:["Welcome to ENCENDER - 1","Let us know if you enjoyed our event","Give us your valuable feedback","You are anonymous"],
                    backSpeed: 60,
					typeSpeed: 60,
					loop: true
                  });
		});
	</script>


</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>