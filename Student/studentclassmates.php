<html>

<head>

  <title>My Classmates</title>

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

    <table class="course-table">
      <caption>CSE 5335</caption>
      <thead>
        <tr>
          <th scope="col">Mav ID</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Email</th>
          <th scope="col">View Profile</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="MavID">1001976764</td>
          <td data-label="Name"> Sri Vathsava Bathini
            <a href=""> <i class="fa fa-bullhorn" aria-hidden="true"></i> </a>
          </td>
          <td data-label="Class">CSE 5335</td>
          <td data-label="Email">mxg@mavs.uta.edu</td>
          <td data-label="ViewProf"><button type="button" onclick="on()">View Profile</button></td>
        </tr>
        <tr>
          <td data-label="MavID">1001976064</td>
          <td data-label="Name"> Anumandla Sanjay
            <a href=""> <i class="fa fa-bullhorn" aria-hidden="true"></i> </a>
          </td>
          <td data-label="Class">CSE 5301</td>
          <td data-label="Email">sxc@mavs.uta.edu</td>
          <td data-label="ViewProf"><button type="button" onclick="on()">View Profile</button></td>
        </tr>
        <tr>
          <td data-label="MavID">1001956064</td>
          <td data-label="Name"> Ajay Suram
            <a href=""> <i class="fa fa-bullhorn" aria-hidden="true"></i> </a>
          </td>
          <td data-label="Class">CSE 5311</td>
          <td data-label="Email">bxg@mavs.uta.edu</td>
          <td data-label="ViewProf"><button type="button" onclick="on()">View Profile</button></td>
        </tr>
      </tbody>
    </table>

    <table class="course-table">
      <caption>CSE 5301</caption>
      <thead>
        <tr>
          <th scope="col">Mav ID</th>
          <th scope="col">Name</th>
          <th scope="col">Class</th>
          <th scope="col">Email</th>
          <th scope="col">View Profile</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="MavID">1001976764</td>
          <td data-label="Name"> Sri Vathsava Bathini
            <a href=""> <i class="fa fa-bullhorn" aria-hidden="true"></i> </a>
          </td>
          <td data-label="Class">CSE 5335</td>
          <td data-label="Email">mxg@mavs.uta.edu</td>
          <td data-label="ViewProf"><button type="button" onclick="on()">View Profile</button></td>
        </tr>
        <tr>
          <td data-label="MavID">1001996064</td>
          <td data-label="Name"> Sanjay Anumandla
            <a href=""> <i class="fa fa-bullhorn" aria-hidden="true"></i> </a>
          </td>
          <td data-label="Class">CSE 5301</td>
          <td data-label="Email">sxc@mavs.uta.edu</td>
          <td data-label="ViewProf"><button type="button" onclick="on()">View Profile</button></td>
        </tr>
        <tr>
          <td data-label="MavID">1001956064</td>
          <td data-label="Name"> Ajay Kumar
            <a href=""> <i class="fa fa-bullhorn" aria-hidden="true"></i> </a>
          </td>
          <td data-label="Class">CSE 5311</td>
          <td data-label="Email">bxg@mavs.uta.edu</td>
          <td data-label="ViewProf"><button type="button" onclick="on()">View Profile</button></td>
        </tr>
      </tbody>
    </table>

    <!-- ON CLICKING VIEW PROFILE -->
    <div id="overlay">
      <div class="overlay-box more-detail-content" id="more-details-overlay">
        <h2> Sri Vathsava Bathini(1001976764) </h2>
        <h3> Master's in Computer Science </h3>
        <p> mxg@mavs.uta.edu </p>
        <p> Classes Shared : CSE 5335 (004) ; CSE 5301 (001) </p>
        <button type="button" class="message">Send a Message</button>
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

    $.ajax({
                  type: "GET",
                  url: "../Api/profile.php",
                  dataType: "html",
                  success: function (data) {
                    var info = $.parseJSON(data);
                    $("#user-name").html(info[0].firstname +" "+ info[0].lastname);
                    
                  }
              });
  </script>

</body>

</html>