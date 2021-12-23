<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/homepage.css">
<link rel="stylesheet" href="../css/wdm.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Navbar (sit on top) -->
<div class="top">
    <div class="bar white wide padding card" style="font-family: cursive;padding: 0 !important;">
      <a href="../Home/homepage.php" class="bar-item button" style="font-size: 24px;">SayItRight</a>
      <!-- Float links to the right. Hide them on small screens -->
      <nav class="right hide-small" style="font-size: 19px;padding: 4px;">
        <a href="../Home/homepage.php#home" class="bar-item button">Home</a>
        <a href="../Home/homepage.php#about" class="bar-item button">About</a>
        <a href="../Home/homepage.php#services" class="bar-item button">Services</a>
        <a href="../Home/homepage.php#contact" class="bar-item button">Contact</a>
        <a href="../Home/signin.php" class="bar-item button">Login/Register</a>
      </nav>
    </div>
</div>
<div class="container padding-32" style="text-align: center;margin-top: 3rem;background-color: antiquewhite;"id="home">
    <h3 class="border-bottom padding-16" style="border-color: black;">This is SayItRight</h3>
    <h3 class="padding-10">Academic Management portal designed for UTA students.</h3>
</div>
 <!-- About Section -->
 <div class="container padding-32" id="about">
    <h3 class="border-bottom border-light-grey padding-16" style="margin:2% 0 0 0;">About SayItRight</h3>
    <p>Say It Right is an academic management portal developed with the aim 
      to help students and professors to connect with each other, manage their schedules, 
      work and classes making Grad School a little easier.
    </p>
    <div class="row-padding grayscale" style="margin:3rem 0rem 0;text-align: center;">
        <div class="col l3 m6 margin-bottom">
          <img class="about-img" src="../Images/prof.jpg" width="100" height="150">
          <h3>Prof. Elizabeth Diaz</h3>
          <p class="opacity">Guide</p>
          <p><button class="button light-grey block">Contact</button></p>
        </div>
        <div class="col l3 m6 margin-bottom">
          <img class="about-img" src="../Images/Vathsav.jpeg" width="100" height="150">
          <h3>Sri Vathsava Bathini</h3>
          <p class="opacity">Developer</p>
          <p><button class="button light-grey block">Contact</button></p>
        </div>
        <div class="col l3 m6 margin-bottom">
          <img class="about-img" src="../Images/Sanjay.jpeg" width="100" height="150">
          <h3>Sanjay Anumandla</h3>
          <p class="opacity">Developer</p>
          <p><button class="button light-grey block">Contact</button></p>
        </div>
        <div class="col l3 m6 margin-bottom">
          <img class="about-img" src="../Images/Ajay.jpeg" width="100" height="150">
          <h3>Ajay Kumar</h3>
          <p class="opacity">Developer</p>
          <p><button class="button light-grey block">Contact</button></p>
        </div>
      </div>
  </div>
    <!--Service Section-->
  <div class="container padding-32" id="services">
    <div class="wrapper">
        <h2>Services</h2>
      <div class="line"></div>
      <div class="single-service">
            <div class="social"><i class="fa fa-codepen"></i>
        </div>
      <span></span>
        <h4>Say your name right</h4>
      <p>The key feature which helps everyone to record our names as audio to help us to pronounce our respectives names in the way it is supposed to.</p>
    </div>
      <div class="single-service">
            <div class="social">
      <i class="fa fa-cogs"></i></div>
      <span></span>
        <h4>Keep track of your work</h4>
      <p>Track your assignments, deadlines, exam schedule and all your previous submissions throught the semster.</p>
      </div>
      <div class="single-service">
            <div class="social">
      <i class="fa fa-cogs"></i></div>
      <span></span>
             <h4>Manage your Classes</h4>
      <p>View all the classes you will take for the semester and get more details and insights regarding the same.</p>
      </div>
    </div>
  </div>
  <!-- Contact Section -->
  <div class="container padding-32" id="contact">
    <h3 class="border-bottom border-light-grey padding-16">Contact</h3>
    <p>We always look forward to answer your queries or use your 
      feedback to improve this website. Feel free to drop us a message and we will try our best to respond as early as possible.</p>
    <form action="../Api/feedback.php" target="_blank" method="post">
      <input class="input border" type="text" placeholder="Name" required name="Name">
      <input class="input section border" type="text" placeholder="Email" required name="Email">
      <input class="input section border" type="text" placeholder="Subject" required name="Subject">
      <input class="input section border" type="text" placeholder="Comment" required name="Comment">
      <button class="button grey section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
</body>
</html>