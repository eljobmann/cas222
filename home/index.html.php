<!DOCTYPE html>

<html lang="en">

<head>
    <title>Homepage Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/hamburger.css">
    <link rel="stylesheet" href="styles/slideshow.css">
    <link rel="stylesheet" href="styles/styles.css">

</head>

<body>

    <?php include 'includes/header.inc.html.php'; ?>
    <!-- Content -->
    <aside>
        <img src="images/logoAOne.jpg">

        <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
    </aside>
    <div class="headless">
        <div class="slider_option">
            <input type="checkbox" id="checkbox" checked>
        </div>
    </div>
    <main>
        <br>
         <div id="slider">
                <a href="#" class="control_next">&#x261B;</a>
                <a href="#" class="control_prev">&#x261A;</a>
                <ul>
                    <li><img src="../images/slideshow/fremontBridge2.png" class="show" alt="Portland, Oregon"></li>
                    <li><img src="../images/slideshow/runnerAfro.jpg" alt="bridgePDX"></li>
                    <li><img src="../images/slideshow/runnerCollage.jpg" alt="diversity"></li>
                    <li><img src="../images/slideshow/waterPassing.jpg" alt="Cyclist"></li>
                    <li><img src="../images/slideshow/genericSwimmer.jpg" alt="swimmer1"></li>
                    <li><img src="../images/slideshow/cityRun2.jpg" alt="City Running 1"></li>
                    <li><img src="../images/slideshow/cityBike3.jpg" alt="Hydration"></li>
                </ul>
            </div>

            <h3>ABOUT THE EVENT</h3>
        <article>
            <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
            
            <section id="eventtable">
                <table>
         <tr>
             <th id="raceday">Day of Event</th>
          <th id="racename">Race</th>
             <th id="startime">Start Time</th>
    </tr>
    <tr>
          <td headers="raceday">Saturday</td>
          <td headers="racename">Long Course Triathlon</td>
		  <td headers="starttime">7:00 AM</td>
    </tr>
       <tr>
          <td headers="raceday">Saturday</td>
          <td headers="racename">Half Marathon</td>
		  <td headers="starttime">7:15 AM </td>
    </tr>
    <tr>
          <td headers="raceday">Saturday</td>
          <td headers="racename">10K</td>
		  <td headers="starttime">7:15 AM </td>
    </tr>
     <tr>
          <td headers="raceday">Saturday</td>
          <td headers="racename">Olympic Triathlon</td>
		  <td headers="starttime">7:30 AM</td>
    </tr>
     
     <tr>
          <td headers="raceday">Sunday</td>
          <td headers="racename">Sprint Triathlon</td>
		  <td headers="starttime">8:00 AM </td>
    </tr>
     <tr>
          <td headers="raceday">Sunday</td>
          <td headers="racename">Try-a-Tri</td>
		  <td headers="starttime">8:20 AM </td>
    </tr>
     <tr>
          <td headers="raceday">Sunday</td>
          <td headers="racename">Splash 'N' Dash</td>
		  <td headers="starttime">12:00 PM </td>
          </tr>
            </table>
                </section>
        </article>
    
<section>

<h3>Find Out More!</h3>
            
            <article id="social">
                <center>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </center>
            </article>
            <article id="social">
            <ul>
                <li><a href="#">Register</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            </article>
            <article id="social">
                <center>
                    <a class="twitter-timeline" data-width="300" data-height="250" data-dnt="true" data-theme="light" data-link-color="#FF0000" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </center>
            </article>
    </section>
    </main>
    <!-- Footer -->

    <?php include 'includes/footer.inc.html.php'; ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/slideshow.js"></script>
    <script type="text/javascript" src="scripts/hamburger.js"></script>
</body>

</html>
