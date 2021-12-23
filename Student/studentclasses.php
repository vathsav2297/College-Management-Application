<html>

<head>

  <title>My Classes</title>

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
      <ul class="side-navigation-menu">
                <li>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i> <a href="../Student/studentclasses.php">Classes</a>
                </li>
                <li>
                    <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href="../Home/manageprofiles.php">Manage Profile</a>
                </li>
                <li>
                    <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href="../Student/uploadvoice.php">Upload Voice</a>
                </li>
                <li>
                    <i class="fa fa-comments" aria-hidden="true"></i> <a href="../Home/chatbox.php">Chatbox</a>
                </li>
                <li>
                    <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href="../Api/logout.php">Logout</a>
                </li>
            </ul>
      

    </nav>
  </aside>

  <div class="main-container">
    <!-- SEARCH BOX -->
    <!-- <input class="search-class" type="text" placeholder="Search new classes"> -->

    <table class="course-table">
      <caption>My Classes</caption>
      <thead>
        <tr>
          <th scope="col">Department Code</th>
          <th scope="col">Program Code</th>
          <th scope="col">Course Code</th>
          <th scope="col">Course Name</th>
          <th scope="col">Manage Classes</th>
        </tr>
      </thead>
      <tbody id="data">
        
      </tbody>
    </table>

    <!-- ON CLICKING MORE DETAILS -->
    <div id="overlay">
      <div class="overlay-box more-detail-content" id="more-details-overlay">
        <h2> CSE 5335 Web Data Management </h2>
        <h3> Section - 4 </h3>
        <p> Taken By : Dr. Elizabeth Diaz </p>
        <p> Timings : Tuesday & Thursday - 5:30 PM to 6: 50 PM </p>
        <p> Location: Online </p>
        <p> Strength: 30 </p>
      </div>
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="ajax-script.js"></script>
  <!-- JAVASCRIPT -->
  <script>
    var overlay = document.getElementById("overlay");

    // OVERLAY ON SCREEN
    function on() {
      document.getElementById("overlay").style.display = "block";
    }

    // REMOVE OVERLAY FROM SCREEN
    overlay.onclick = function off() {
      document.getElementById("overlay").style.display = "none";
    }

    $(document).ready(function () {
              $.ajax({
                  type: "GET",
                  url: "../Api/coursestable.php",
                  dataType: "html",
                  success: function (data) {
                      $("#data").html(data);

                  }
              });
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