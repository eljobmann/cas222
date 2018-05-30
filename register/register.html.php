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
    <link rel="stylesheet" href="../styles/slideshow.css">
    <link rel="stylesheet" href="../styles/styles.css">
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js"></script>
    <script type="text/javascript" src="../scripts/script.js"></script>
    <script type="text/javascript" src="../scripts/hamburger.js"></script>
</head>
    
<body>
     <?php
      include '../includes/header.inc.html.php'; 
      ?>
    
    <aside>
        <img class="sidebar-img" src="../images/logoAOne.jpg" alt="Ace in The Hole">

        <h2>Reserved</h2>
        <br>
        <blockquote>In this world, everything can be happy. Use absolutely no pressure. Just like an angel's wing. It is a lot of fun. The only thing worse than yellow snow is green snow. Now we'll take the almighty fan brush.</blockquote>

    </aside>

    <div class="headless">

    </div>

    <main>
        <article>

            <section id="listed">
                <h2>Racer Registration and Volunteer Sign-up</h2>

                <ul>
                    <li><strong>Must be 16 or older to participate in the events</strong></li>
                    <li>You can spend all day playing with mountains. </li>
                    <li>Let's put some happy trees and bushes back in here.</li>
                    <li>Let's do it again then, what the heck.</li>
                    <li>Isn't it great to do something you can't fail at?</li>
                </ul>

            </section>
        </article>

        <section class="register">

            <div id="instruct">Required fields are marked with an asterisk (*).</div>

            <div id="signup">
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
        <label for="mypronouns">Preferred Pronouns</label>
          <input type="text" name="mypronouns" id="mypronouns">
			</fieldset>
          
          <fieldset>
              <legend>Choose Your Event(s)</legend>
		<div id="dayone">
              <label for="satrace">*Saturday:</label>
        <select size="1" name="satrace" id="satrace" required>
          <option>Choose Event</option>
          <option value="longCourse">Long Course - $240</option>
          <option value="olympic">Olympic - $110</option>
          <option value="tenk">10K - $50</option>
            <option value="halfmarathon">Half Marathon - $75</option>
              </select>
          </div>
		  <div id="daytwo">
          <label for="sunrace">*Sunday:</label>
        <select size="1" name="sunrace" id="sunrace" required>
          <option>Choose Your Event</option>
          <option value="sprint">Sprint - $90</option>
          <option value="tryatri">Try-a-Tri - $65</option>
          <option value="splashanddash">Splash and Dash - $25</option>
        </select>
		<div>
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
            </div></section>
    </main>
    <?php
            include '../includes/footer.inc.html.php';
      ?>
  </div>
</body>
</html>