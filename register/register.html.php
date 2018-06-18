<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/hamburger.css">
    <link rel="stylesheet" href="../styles/styles.css">
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js"></script>
    <script type="text/javascript" src="../scripts/hamburger.js"></script>
</head>
    
<body>
     <?php
      include '../includes/header.inc.html.php'; 
      ?>
    
    <aside>
        <img class="sidebar-img" src="../images/logoAOne.jpg" alt="Ace in The Hole">

        <h2>Racer Registration and Volunteer Sign-up</h2>
        <br>
         <section>
<a class="weatherwidget-io" href="https://forecast7.com/en/45d59n122d69/97217/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Roboto Slab" data-theme="gray" data-basecolor="rgba(0, 0, 0, .7)" data-accent="rgba(255, 0, 0, 0.7)" data-textcolor="#fff" data-highcolor="#ffffff" data-lowcolor="#fff" data-suncolor="#fff" data-cloudfill="rgb(255, 255, 255)" data-raincolor="#fff" >PORTLAND WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</section>
        <div class="footer"><h4>Copyright &copy;
            <?php echo date('Y'); ?> Elliott Jobmann<br></h4>
        </div>
    </aside>

    <div class="headless">

    </div>

    <main>
<h3>Some things to know before filling out this form:</h3>
<article id="listed">
 
                <ul>
                    <li><strong>Must be 16 or older to participate in the events</strong></li>
                    <li>Cost Includes:</li>
                    <ul>
                    <li>Food and Beer </li>
                    <li>Access to the weekend’s live entertainment and Fitness Expo</li>
                    <li>Commemorative Finisher medal</li>
                    <li>Accurate Chip Timing for competitive races</li>
                    <li>Ace in the Hole MultiSport Weekend Tech Shirt*</li>
                        <li>Post-event party and entertainment</li>
                    </ul>
                    <li>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </li>
                    <br>
                    <br>
                     <li>Tech shirts guaranteed to pre-registered participants only.</li>
                </ul>
   
            </article>
        <article class="register">
            <div id="signup">
                <div id="instruct">Required fields are marked with an asterisk (*).</div>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
          
          <fieldset>
              <legend>Racer/Volunteer Information</legend>
            <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required>
              <br>
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required>
              <br>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
              <br>
        <label for="myphone">*Phone:</label>
          <input type="tel" name="myphone" id="myphone" required>
              <br>
        <label for="mypronouns">Pronouns:</label>
          <input type="text" name="mypronouns" id="mypronouns">
			</fieldset>
          
          <fieldset>
              <legend>Choose Your Event(s)</legend>
		<div id="dayone">
              <label for="mysatrace">*Saturday:</label>
        <select size="1" name="mysatrace" id="mysatrace" required>
          <option>Choose Your Event</option>
          <option value="longCourse">Long Course - $240</option>
          <option value="olympic">Olympic - $110</option>
          <option value="tenk">10K - $50</option>
            <option value="halfmarathon">Half Marathon - $75</option>
              </select>
          </div>
		  <div id="daytwo">
          <label for="mysunrace">*Sunday:</label>
        <select size="1" name="mysunrace" id="mysunrace" required>
          <option>Choose Your Event</option>
          <option value="sprint">Sprint - $90</option>
          <option value="tryatri">Try-a-Tri - $65</option>
          <option value="splashanddash">Splash and Dash - $25</option>
        </select>
              </div>
              <div class="tshirt">
              <label for="myshirtsize">*Event T-Shirt</label>
                  <select size="1" name="myshirtsize" id="myshirtsize" required>
                    <option>Choose Your T-Shirt Size</option>
                      <option value="xsmall">XS</option>
                      <option value="small">S</option>
                      <option value="medium">M</option>
                      <option value="large">L</option>
                      <option value="xlarge">XL</option>
                      <option value="xxlarge">XXL</option>
                  </select>
              </div>
          </fieldset>
		  
		  <fieldset>
			<legend>Emergency Contact</legend>
			<label for="erfname">*First Name:</label>
          <input type="text" name="erfname" id="erfname" required>
              <br>
        <label for="erlname">*Last Name:</label>
          <input type="text" name="erlname" id="erlname" required>
              <br>
        <label for="phoner">*Phone:</label>
          <input type="tel" name="phoner" id="phoner" required>
		  </fieldset>
          <input name="mysubmit" type="submit" value="Register">
      </form>
            </div>
        </article>
            
        
    </main>
    <?php
            include '../includes/footer.inc.html.php';
      ?>
</body>
</html>