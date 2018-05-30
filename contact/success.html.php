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
        
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars ($myName, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars ($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
                  Question: <?php echo htmlspecialchars ($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        
    </body>
</html>