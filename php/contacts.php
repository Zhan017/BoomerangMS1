    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ielts | IELTS EXAM SITE </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" type="image/x-icon" href="pictures/favicon.ico">
</head>

<body>
  <div class="header">
    <div class="inner_header">
      <div class="logo_container">
        <img src="pictures/logo.png" style="height: 80px;">
        <h1><span>Diamond</span></h1>
      </div>
      <ul class="navigation">
        <a href="index.html">
          <li>HOME</li>
        </a>
        <a href="examparts.html">
          <li>EXAM PARTS</li>
        </a>
        <a href="vocabularyidioms.html">
          <li>Vocabulary and Idioms</li>
        </a>
        <a href="aboutus.html">
          <li>ABOUT US</li>
        </a>
        <a href="contacts.html">
          <li>CONTACTS</li>
        </a>
      </ul>
    </div>
  </div>
  <div style="justify-content: center;">
    <img src="pictures/11.jpg" style="width: 800px;margin-left:200px;margin-top: 50px;">
  </div>
  <div class="container">
    <form method="POST"  >

      <label for="name">First Name</label>
      <input type="text" class="form-control"  id="name" name="name" placeholder="Your name..">

      <label for="lastname">Last Name</label>
      <input type="text" class="form-control"  id="lastname" name="lastname" placeholder="Your last name..">

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message.." style="height:100px"></textarea>
      <input type="submit" class="form-control"  value="Send Message" name="submit">

    </form>
  </div>
  <?php
  include ('db.php');
  $mysqli = new mysqli("localhost", "Asemok", "Asemai0308", "assemay");
  if (isset($_POST['submit'])) {
  $lastname = $_POST['lastname'];
  $name = $_POST['name'];
  $message = $_POST['message'];

        {
            $result2 = mysqli_query ($db, "INSERT INTO data (name, lastname, message) VALUES ('$name','$lastname','$message')");
            if ($result2=='TRUE')
            {
              echo "<p style='padding:20px; margin-top:100px; background-color:lightgreen;'>
    Thank you ! We will consider your question.</p>";
              }
              else {
              echo "Ошибка! Ваше сообщение не было отправлено! Пожалуйста, отправьте еще раз.";
              }

          }
    }
    ?>
  <div class="footer">
    <div class="inner_footer">
      <div class="logo_container2">
      </div>
      <div class="footer_third">
        <h1>Need help?</h1>
        <a href="#">Terms &amp; Conditions</a>
        <a href="#">Privacy Policy</a>


      </div>
      <div class="footer_third">
        <h1>More</h1>
        <a href="#">Brouchures</a>
        <a href="#">Impact Reports</a>
      </div>



      <div class="footer_third">
        <h1>Follow Us</h1>
        <li><a href="#"><i class="fa fa-facebook"></i>
        <li><a href="#"><i class="fa fa-instagram"></i>
        <li><a href="#"><i class="fa fa-twitter"></i>
        <li><a href="youtube.com"><i class="fa fa-youtube-play"></i>
        <li><a href="#"><i class="fa fa-vk"></i>
        <li><a href="#"><i class="fa fa-twitte"></i>
            <span>
              <i class="fa fa-map-marker"></i>
              Astana IT University<br>
              <i class="fa fa-map-marker"></i>
              Nur-Sultan, 2021<br>
              Mangilik El 52, C1<br>
              SE-2007 Software Engineering<br>
              Karatokacheva Assemay<br>
            </span>
      </div>
    </div>
  </div>
</body>
</html>
