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

        <h2>Reserved</h2>
        <br>
        <blockquote>In this world, everything can be happy. Use absolutely no pressure. Just like an angel's wing. It is a lot of fun. The only thing worse than yellow snow is green snow. Now we'll take the almighty fan brush.</blockquote>

    </aside>

    <div class="headless">

    </div>

    <main>
		
		<img class="lefty" src="../images/misc/headphones.jpg" alt="Let's hear from you!">
        
    <div class="righty">
        <h2>Questions? Comments? We'd love to hear from you!</h2>
      <form class="contact" method="post" action=" " id="inquiryForm">
          <fieldset class="contact">
        <input class="contact" type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label class="contact" for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <br>
        <label class="contact" for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
          <br>
        <label class="contact" for="myQuestion">Question:</label>
          <textarea class="contact" form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
          </fieldset>
      </form>
        </div>
    </main>
   <?php
        include '../includes/footer.inc.html.php';
      ?>
</body>
</html>