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
                    <h2>ABOUT THE EVENT</h2>

            
            <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
             

    </aside>

    <div class="headless">

    </div>
	
    <main>
  <section>  
    
             <article>
            
            <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
      
        </article>

         <section id="eventtable">

        <h3>Race Breakdown</h3>
      <table>
    <!--Row 1-->
        <tr>
            <th id="racestart">Time of Event</th>
          <th id="racename">Race</th>
          <th id="racerun">Run</th>
		  <th id="racebike">Bike</th>
		  <th id="raceswim">Swim</th>
          <th id="cost">Cost</th>
        </tr>
    <!--Row 2-->
        
        <tr>
            <?php foreach ($race as $races): ?>
            <td headers="racestart"><?php echo ($races['start']); ?></td>
          <td headers="racename"><?php echo htmlspecialchars($races['race']); ?></td>
          <td headers="racerun"><?php echo ($races['run']); ?></td>
          <td headers="racebike"><?php echo ($races['bike']); ?></td>
            <td headers="raceswim"><?php echo ($races['swim']); ?></td>
          <td headers="cost"><?php echo ($races['cost']); ?></td>
        </tr>
         <?php endforeach; ?>
      </table>
             </section>
      
       
      
    <?php foreach ($race as $races): ?>
      <h3><?php echo htmlspecialchars($races['race']); ?></h3>
      <section>
          
            <article>
                
                <p id="stories"><?php echo ($races['description']); ?>
                    <br>
                    </p>
                <img class="pictured" src="<?php echo BASE_URL . $races['images']; ?>">
            </article>
          <h3><a href="<?php echo BASE_URL; ?>register" class="register">Register Now</a></h3>
      </section>
        <?php endforeach; ?>
             </section>
    </main>
  
   <?php include '../includes/footer.inc.html.php'; ?>
</body>
</html>