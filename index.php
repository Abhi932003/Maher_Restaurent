<?php session_start(); ?>
<?php include "header.php"; ?>

<!-- Image slider container -->
<div class="slider">
  <!-- Slides -->
  <div class="slides">
    <div id="slide-1" class="slideimg"><img src="abhishek.gif" alt="Image 1"></div>
    <div id="slide-2" class="slideimg"><img src="Maha-Thali.jpg" alt="Image 2"></div>
    <div id="slide-3" class="slideimg"><img src="images\puran poli.jpg" alt="Image 3"></div>
    <div id="slide-4" class="slideimg"><img src="images\rodge.jpg" alt="Image 4"></div>
 
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="changeSlide(-1)" style="color:orangered;">❮</a>
  <a class="next" onclick="changeSlide(1)" style="color:orangered;">❯</a>
</div>

<!-- Add some styles for the slider -->
<style>
	.slideimg{
		width:100%;
		height: 700px;
	}
.slider {
  position: relative;
  width: 100%;
  background-color: black;
}

.slides div {
  display: none;
  width: 100%;
  height: 585px;
}

.slides img {
  width: 100%;
  height: 100%;
}

/* Position the next and previous buttons */
/* Position the next and previous buttons */
.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 60px; /* Increased size */
  height: 60px; /* Increased size */
  background-color: grey; /* Removed background */
  color: tomato; /* Changed color for visibility */
  font-size: 60px; /* Increased symbol size */
  text-align: center;
  line-height: 60px; /* Adjusted for increased size */
  cursor: pointer;
  border-radius: 10px;
  border: none; /* Removed border */
}

.prev {
  left: 10px;
}

.next {
  right: 10px;
}

/* Hover effect for buttons */
.prev:hover, .next:hover {
  color: #ddd; /* Lighter color on hover */
}



.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}						
.row{
    justify-content:center;
}
.inner-column>h1{
	text-align:center;
}
.inner-column>div>h1{
text-align:center;
}	
.inner-column>div,.inner-column>h3,.inner-column>a{
text-align:center;
}
.inner-column>div{
	font-weight:2rem;
}						
</style>
<script>
// Set the initial slide index
var slideIndex = 0;
showSlides(); // Call the function to initiate the slideshow

// Function to show the slides
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slideimg");
  // Hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  // Increase the index to the next slide
  slideIndex++;
  // If the index exceeds the number of slides, reset it to 1
  if (slideIndex > slides.length) {slideIndex = 1}
  // Display the current slide
  slides[slideIndex-1].style.display = "block";
  // Set a timeout to run the function again after 2 seconds
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

u
<!-- Add JavaScript to make the slider work -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function changeSlide(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides")[0].children;
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>

	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
						<!-- <h1>Welcome To <span>Maher Kathiyawadi Restaurant</span></h1>
						
						<h3>Waigav-hinganghat Highway, Wardha Road, , Pin - 442001</h3>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Contact Us</a> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/images.jpg"  width="200%" height="200%" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Maher Restaurent</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					
				<div class="inner-column">
						<h1>Welcome To</h1>
						<div><h1>Maher Kathiyawadi Restaurant</h1></div>
						<h3>Waigav-hinganghat Highway, Wardha Road, , Pin - 442001</h3>
						<div><strong>Owned By:</strong><span>ABHISHEK WATMODE</span></div>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Contact Us</a>
					</div>
				</div>
			</div>
					
				</div>
			</div>
			
			>
				
				


						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">


							<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='kathiyawadi'");
								while($r = mysqli_fetch_array($s))
								{	
								?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>




											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
								
								
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								
								<?php include "connect.php";
								$s = mysqli_query($con,"select * from menu where category='rajsthani'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['uid']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&uid=<?php echo $_SESSION['uid']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>


											</h5>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
							

			
	<!-- End Menu -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Delicious food Pictures for Maher Restaurent Listed Here </p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					
					<?php
							include "connect.php";
							$s = mysqli_query($con,"select * from gallery order by id desc limit 6");
							while($r = mysqli_fetch_array($s))
							{
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
						
							<a class="lightbox" href="<?php echo "admin/".$r['image']; ?>">
								<img class="img-fluid"  src="<?php echo "admin/".$r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;"
								>

								
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>"if you build a greater experience, customer tell each other about that, word of mouth is very powerful"</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<?php include "connect.php";
							$s = mysqli_query($con,"select * from review  limit 4");	
							 while($r = mysqli_fetch_array($s))
							 {
							 ?>
							<div class="carousel-item text-center ">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
									<?php echo $r['name']; ?>
								</strong></h5>
								<h6 class="text-dark m-0">Review : <?php echo $r['review']; ?></h6>
								<p class="m-0 pt-3">
									<?php echo $r['description']; ?>
								</p>
							</div>
						<?php } ?>
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Nilkanth</strong></h5>
								<h6 class="text-dark m-0">Review : Good</h6>
								<p class="m-0 pt-3">
									Good Food, Good Health

								</p>
							</div>
							
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
<?php include "footer.php"; ?>