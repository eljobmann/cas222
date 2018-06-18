<?php

//include '../includes/db.inc.php';
include '../includes/db_local.inc.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''

if ((isset($_POST['mysubmit'])) && (empty($_POST['honeypot'])))
  {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $fname = $_POST['myfname'];
    $lname = $_POST['mylname'];
    $email = $_POST['myemail'];
    $phone = $_POST['myphone'];
    $pronouns = $_POST['mypronouns'];
    $satrace = $_POST['mysatrace'];
    $sunrace = $_POST['mysunrace'];
    $shirtsize = $_POST['myshirtsize'];
    $erfirst = $_POST['erfname'];
    $erlast = $_POST['erlname'];
    $erphone = $_POST['phoner'];

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO `registration` SET
          fname = :fname,
          lname = :lname,
          email = :email,
          phone = :phone,
          pronouns = :pronouns,
          satrace = :satrace,
          sunrace = :sunrace,
          shirtsize = :shirtsize,
        erfirst = :erfirst,
        erlast = :erlast,
        erphone = :erphone';
      $s = $pdo->prepare($sql);
      $s->bindValue(':fname', $fname);
        $s->bindValue(':lname', $lname);
        $s->bindValue(':email', $email);
        $s->bindValue(':phone', $phone);
        $s->bindValue(':pronouns', $pronouns);
        $s->bindValue(':satrace', $satrace);
        $s->bindValue(':sunrace', $sunrace);
        $s->bindValue(':shirtsize', $shirtsize);
        $s->bindValue(':erfirst', $erfirst);
        $s->bindValue(':erlast', $erlast);
        $s->bindValue(':erphone', $erphone);
      $s->execute();
    }
    catch (PDOException $e) {
     $error = 'Error fetching content: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    
     // load the thank you page after the INSERT runs
    include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
      
   

} else {


include 'register.html.php'; //Modify this to include the initial file for this folder
}
?>
