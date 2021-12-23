<html>

<head>
  <title>Manage Announcements</title>

  <!-- EXTERNAL CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@300&display=swap" rel="stylesheet">


  <!-- FONT AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>

<body>

  <!-- SIDE NAVIGATION -->
  <aside>
    <nav>
      <div class="profile-header">
      <h2 id="user-name" style="word-break: break-word;"> Admin </h2>
      </div>

      <hr>

      <ul class = "side-navigation-menu">
          <li>
            <i class="fa fa-graduation-cap" aria-hidden="true"></i> <a href = "../Professor/professorclasses.php">Classes</a>
          </li>
          <li>
            <i class="fa fa-users" aria-hidden="true"></i> <a href = "../Professor/professorstudent.php">Students</a>
          </li>
          <li>
            <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href = "../Home/manageprofiles.php">Manage Profile</a>
          </li>
          <li>
            <i class="fa fa-comments" aria-hidden="true"></i> <a href = "../Home/chatbox.php">Chatbox</a>
          </li>
          <li>
            <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href = "../Api/logout.php">Logout</a>
          </li>
        </ul>
    </nav>
  </aside>

  <div class="main-container">
    <form method="post" action="">
      <div class="col make-announcement">
        <p> Select Class </p>
        <select id="class-announcement" name="cannouncements">
          <option value="class-1">CSE 5335 - 004</option>
          <option value="class-2">CSE 5335 - 005</option>
          <option value="class-3">CSE 5330</option>
        </select>
      </div>
      <div class="announcement-box">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
        <input class="post-announcement" type="submit" value="Post">
      </div>
    </form>
  </div>
</body>

</html>