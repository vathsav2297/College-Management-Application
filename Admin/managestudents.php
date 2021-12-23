<html>

<head>

  <title>Manage Students</title>

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
      <hr class = "side-nav-hr">
      <ul class = "side-navigation-menu">
        <li>
          <i class="fa fa-home" aria-hidden="true"></i> <a href = "../Admin/admin.php">Dashboard</a>
        </li>
        <li>
          <i class="fa fa-graduation-cap" aria-hidden="true"></i> <a href = "../Admin/managestudents.php">Students</a>
        </li>
        <li>
          <i class="fa fa-users" aria-hidden="true"></i> <a href = "../Admin/manageprofessor.php">Professors</a>
        </li>
        <li>
          <i class="fa fa-users" aria-hidden="true"></i> <a href = "../Admin/manageadvisor.php">Advisors</a>
        </li>
        <li>
          <i class="fa fa-laptop" aria-hidden="true"></i> <a href = "../Admin/manageacademics.php">Manage Academics</a>
        </li>
        <li>
          <i class="fa fa-comments" aria-hidden="true"></i> <a href = "../Home/chatbox.php" id = "mavchat">Chatbox</a>
        </li>
        <li>
          <i class="fas fa-sign-out-alt" aria-hidden=""></i> <a href = "../Api/logout.php">Logout</a>
        </li>
      </ul>

    </nav>
  </aside>

  <div class = "main-container">
    <table class = "course-table">
      <caption>All Students</caption>
      <thead>
        <tr>
          <th scope="col">Mav ID</th>
          <th scope="col">Department ID</th>
          <th scope="col">Program ID</th>
          <th scope="col">Name</th>
          <th scope="col">Recording</th>
          <th scope="col">Email</th>
          <th scope="col">Manage</th>
        </tr>
      </thead>
      <tbody id="data">
      
      </tbody>
    </table>
    <button class="add-row"> + Add </button>


          <!-- ON CLICKING VIEW PROFILE -->
          <div id="overlay">
            <div class="overlay-box more-detail-content prof-student-overlay" id="more-details-overlay">
              <h2> Junzhou huang - 1001876764 </h2>
              <h3> Master's in Computer Science </h3>
              <p> jhx@uta.mavs.edu </p>
              <p> Update Grade </p>
              <input class = "update-grade-input" type="text" placeholder="Grade">
              <button class = "update post" style="width: 25%;">Update</button>
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
                  url: "../Api/studentstable.php",
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

              $(document.body).on('click', '#edit' ,function(){
                var id=$(this).attr("data-id");
                debugger;
                debugger;
                window.location.href = "../Home/editprofile.php?id="+id;
              });

              $(document.body).on('click', '#delete' ,function(){
                var id=$(this).attr("data-id");
                debugger;
                debugger;
                  $.ajax({
                    type: "GET",
                    url: "../Api/deleteuser.php?id="+id,
                    success: function (data) {
                      debugger;
                      debugger;
                      location.reload();
                    }
                  });
              });

              $(document.body).on('click', '.add-row' ,function(){
                window.location.href = "../Home/addprofile.php?usertype=student";
              });
          });
        </script>

      </body>
    </html>
