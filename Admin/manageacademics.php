<html>

<head>

  <title>Manage Academics</title>

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
    <div class = "col">
      <table class = "course-table">
        <caption>Departments</caption>
        <thead>
          <tr>
            <th scope="col">Department ID</th>
            <th scope="col">Department Name</th>
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody id="dept">
        </tbody>
      </table>
      <button class="add-row" id="add-dept"> + Add </button>
    </div>

    <div class ="col right-table">
      <table class = "course-table">
        <caption>Program</caption>
        <thead>
          <tr>
            <th scope="col">Department ID</th>
            <th scope="col">Program ID</th>
            <th scope="col">Program Name</th>
            <th scope="col">Manage</th>
          </tr>
        </thead>
        <tbody id="program">
        </tbody>
      </table>
      <button class="add-row" id="add-pg"> + Add</button>
    </div>


    <table class="course-table">
      <caption>Courses</caption>
      <thead>
        <tr>
          <th scope="col">Department ID</th>
          <th scope="col">Program ID</th>
          <th scope="col">Course Code</th>
          <th scope="col">Course Name</th>
          <!-- <th scope="col">Section</th> -->
          <th scope="col">Manage</th>
        </tr>
      </thead>
      <tbody id="courses">
      </tbody>
    </table>
    <button class="add-row" id="add-cs"> + Add </button>

    <!-- ON CLICKING MANAGE THIS SECTION -->
    <div id="overlay">
      <div class="overlay-box more-detail-content prof-student-overlay" id="more-details-overlay prof-overlay">
        <h2> CSE 5335 </h2>
        <h3> Section - 004 </h3>
        <p> Location: Online </p>
        <p> Timing: Tuesday & Thursday - 7:00 PM-9:50 PM</p>
        <input class = "post-deadline" type="text" placeholder = "CSE 5335">
        <input class = "post-deadline" type="text" placeholder = "Section 004">
        <input class = "post-deadline" type="text" placeholder = "Online">
        <input class = "post-deadline" type="text" placeholder = "Tuesday , Thursday">
        <input class = "post-deadline class-time" type="text" placeholder = "From 7: 0 PM">
        <input class = "post-deadline class-time" type="text" placeholder = "To 9: 50 PM">
        <input class = "post-deadline" type="text" placeholder = "Make an Announcement"><br>
        <button class = "post">Update Changes</button>
        <hr>
        <h3> Request Change </h3>
        <input class = "post-deadline" type="text" placeholder = "Enter your request">
        <button class = "post">Submit Request</button>
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
                  url: "../Api/depttable.php",
                  dataType: "html",
                  success: function (data) {
                      $("#dept").html(data);

                  }
              });
    });

    $(document).ready(function () {
              $.ajax({
                  type: "GET",
                  url: "../Api/programtable.php",
                  dataType: "html",
                  success: function (data) {
                      $("#program").html(data);

                  }
              });
    });

    $(document).ready(function () {
              $.ajax({
                  type: "GET",
                  url: "../Api/coursestable.php",
                  dataType: "html",
                  success: function (data) {
                      $("#courses").html(data);

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

              $(document.body).on('click', '.edit' ,function(){
                var id=$(this).attr("data-id");
                var type=$(this).attr("data-type");
                debugger;
                debugger;
                window.location.href = "../Home/editacademics.php?id="+id+"&type="+type;
              });

              $(document.body).on('click', '.delete' ,function(){
                var id=$(this).attr("data-id");
                var type=$(this).attr("data-type");
                debugger;
                debugger;
                  $.ajax({
                    type: "GET",
                    url: "../Api/deleteacademics.php?id="+id+"&type="+type,
                    success: function (data) {
                      debugger;
                      debugger;
                      location.reload();
                    }
                  });
              });

              $(document.body).on('click', '#add-dept' ,function(){
                window.location.href = "../Home/addacademics.php?type=d";
              });

              $(document.body).on('click', '#add-pg' ,function(){
                window.location.href = "../Home/addacademics.php?type=p";
              });

              $(document.body).on('click', '#add-cs' ,function(){
                window.location.href = "../Home/addacademics.php?type=c";
              });
    });
  </script>

 </body>

</html>
