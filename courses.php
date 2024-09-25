<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.php">Home</a></li>
							<li>Courses</li>
						</ul>
						<h1 class="white-text">Get Started</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->
		
        <!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row 
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Courses</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				 -->
				
				<!-- tags widget -->
				<div class="widget tags-widget">
					<a class="tag" href="#web">Web</a>
					<a class="tag" href="#prog">Programming Langauges</a>
					<a class="tag" href="#">Css</a>
					<a class="tag" href="#">Responsive</a>
					<a class="tag" href="#bootstrap">bootstrap</a>
					<a class="tag" href="#web">Html</a>
					<a class="tag" href="#">Website</a>
					<a class="tag" href="#">Business</a>
				</div>
				<!-- /tags widget -->
				
				<!-- courses -->
				<hr class="section-hr" id="web">
				<div id="courses-wrapper" >
                 		
					<!-- row -->
					<div class="row" >
                        <div class="section-header text-center" >
							<h2  >Web Development</h2>
						</div>
						   
						<?php 
						require_once "./config.php";
          $sql = "SELECT * FROM courses";
          $result = mysqli_query($link, $sql);

          if (mysqli_num_rows($result) > 0) {
			$n = ceil(mysqli_num_rows($result) / 4.0);
			
			for($i = 0; $i < $n; $i++ ) {
				echo "<div class='row'>";
				$j = 0;
            	while($j != 4 && $row = mysqli_fetch_assoc($result)) {
					
					
              ?>
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="<?php echo $row["url"]  ?>" target="_blank" class="course-img">
									<img src="<?php echo $row["image"]  ?>" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="<?php echo $row["url"]  ?>" target="_blank" style="font-size:18px; text-align: center"><?php echo $row["title"]  ?></a>
								<div class="course-details" style="margin:5px;">
									<span class="course-category"><?php echo $row["category"]  ?></span>
									<span class="course-price course-free"><?php echo $row["price"]  ?></span>
								</div>
							</div>
						</div>
						<!-- /single course -->
				<?php
				$j++;
              }
			  echo "</div>";
			}
		} 
            ?>
			
					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<!--<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>-->

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->
		<?php include 'footer.php'?>
		
</html>
