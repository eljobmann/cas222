<!DOCTYPE html>

<html>

<head>
    <title>Homepage Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
</head>

<body>
    <div class="wrapper">
		<?php include 'includes/header.inc.html.php'; ?>
		<?php include 'includes/navigation.inc.html.php'; ?>
        
    </header>
    
<!-- Content -->
    <main>
        <!-- Slideshow -->
        <section class="slideshow">
                <div id="photos">
                    <img src="images/slideshow/fremontBridge2.png" class="show" alt="Portland, Oregon">
                    <img src="images/slideshow/runnerAfro.jpg" alt="bridgePDX">
                    <img src="images/slideshow/runnerCollage.jpg" alt="diversity">
                    <img src="images/slideshow/waterPassing.jpg" alt="Cyclist">
                    <img src="images/slideshow/genericSwimmer.jpg" alt="swimmer1">
                    <img src="images/slideshow/cityRun2.jpg" alt="City Running 1">
                    <img src="images/slideshow/cityBike3.jpg" alt="Hydration">
                </div>
                <a href="#" id="slideshow-left" class="slideshow-arrow"></a>
                <a href="#" id="slideshow-right" class="slideshow-arrow"></a>
        </section>

        <!--WELCOME MESSAGE -->
        <article>
            <p>Let your heart take you to wherever you want to be. We don't have anything but happy trees here. Here's something that's fun. I thought today we would make a happy little stream that's just running through the woods here. If you didn't have baby clouds, you wouldn't have big clouds.</p>

            <p>If there's two big trees invariably sooner or later there's gonna be a little tree. Just go back and put one little more happy tree in there. Only think about one thing at a time. Don't get greedy. From all of us here, I want to wish you happy painting and God bless, my friends. The only prerequisite is that it makes you happy. If it makes you happy then it's good.</p>
        </article>

        <!-- Grid -->
        <section>
			<div class="social">
				<center>
				   <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</center>
            </div>

                <div class="w3-third w3-margin-bottom">
					<h3>Find Out More!</h3>
						<ul>
							<li><a href="#">Register</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Contact Us</a></li>
                        </ul>
                </div>

            <div class="social">
				<center>
					<a class="twitter-timeline" data-width="300" data-height="500" data-dnt="true" data-theme="light" data-link-color="#FF0000" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
				</center>
            </div>
        </section>
    </main>

    <!-- Footer -->

		<?php include 'includes/footer.inc.html.php'; ?>
	</div>
</body>

</html>
