<html>

<head>

  <title>My Submissions</title>

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
    <!-- UPCOMING SUBMISSIONS -->
    <table class="course-table">
      <caption>Upcoming Submissions</caption>
      <thead>
        <tr>
          <th scope="col" width="22%">Date</th>
          <th scope="col">Course</th>
          <th scope="col">Topic</th>
          <th scope="col">Submit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Date">October 14, 2021</td>
          <td data-label="Course">CSE 5335</td>
          <td data-label="Topic">Phase 2</td>
          <td data-label="Submit" width="40%">
            <form><input type="file" id="sub-doc" name="filename"></form>
        </tr>
      </tbody>
    </table>

    <hr>

    <!-- COMPLETED SUBMISSIONS -->
    <table class="course-table">
      <caption>Completed Submissions</caption>
      <thead>
        <tr>
          <th scope="col" width="22%">Date</th>
          <th scope="col">Course</th>
          <th scope="col">Topic</th>
          <th scope="col">Submission</th>
          <th scope="col">Points</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="Date">October 7, 2021</td>
          <td data-label="Course">CSE 5335</td>
          <td data-label="Topic">Phase 1</td>
          <td data-label="View"><button type="button">Download</button></td>
          <td data-label="Points">100</td>
        </tr>
      </tbody>
    </table>

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