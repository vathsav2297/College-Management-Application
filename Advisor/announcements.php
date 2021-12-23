<html>

<head>

  <title>Advisor</title>

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
      <div class = "profile-header">
      <h2 id="user-name" style="word-break: break-word;"> Admin </h2>
      </div>

      <hr>

      <ul class = "side-navigation-menu">
        <li>
          <i class="fa fa-home" aria-hidden="true"></i> <a href = "../Advisor/dashboard.php">Dashboard</a>
        </li>
        <li>
          <i class="fa fa-graduation-cap" aria-hidden="true"></i> <a href = "../Advisor/courses.php">Courses</a>
        </li>
        <li>
           <i class="fa fa-users" aria-hidden="true"></i> <a href = "../Advisor/professors.php">Professors</a>
        </li>
        <li>
           <i class="fa fa-users" aria-hidden="true"></i> <a href = "../Advisor/student.php">Students</a>
        </li>
        <li>
          <i class="fa fa-comments" aria-hidden="true"></i> <a href = "../Home/chatbox.php">Chatbox</a>
        </li>
        <li>
          <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href = "../Home/manageprofiles.php">Manage Profile</a>
        </li>
        <li>
          <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href = "">Logout</a>
        </li>
      </ul>
    </nav>
  </aside>

  <div class = "main-container">
    <form method = "post" action = "">
      <div class = "col make-announcement">
        <p> Select Class </p>
        <select id = "class-announcement" name = "cannouncements">
          <option value="class-1">Only Professors</option>
          <option value="class-2">Only Students</option>
          <option value="class-3">Include both</option>
        </select>
      </div>
      <div >
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
        <input class="post-announcement" type="submit" value="Post">
      </div>
    </form>
  </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="ajax-script.js"></script>
        <!-- JAVASCRIPT -->
        <script>
          $(document).ready(function () {
            $.ajax({
                  type: "GET",
                  url: "../Api/profile.php",
                  dataType: "html",
                  success: function (data) {
                    var info = $.parseJSON(data);
                    $("#user-name").html(info[0].firstname +" "+ info[0].lastname);
                    
                  }
              });
          });
        </script>    
</body>

</html>
