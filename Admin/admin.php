<?php session_start(); ?>
<html>

<head>

  <title>Admin Dashboard</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

  <!-- POPULATION TRACKING -->
  <div class = "main-container">
    <!-- <button class = "report-button">Generate Report</button> -->
    <div class = "this-week">
      <h2 class = "dashboard-title"> Users Tracking </h2>

      <div class="flip-grid">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <p class="flip-card-text">Total Active Users <p>
            </div>
            <div class="flip-card-back">
              <p class="flip-card-text" id="ttl"><p>
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <p class="flip-card-text">Students <p>
            </div>
            <div class="flip-card-back">
              <p class="flip-card-text" id="stds"><p>
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <p class="flip-card-text">Professors<p>
            </div>
            <div class="flip-card-back">
              <p class="flip-card-text" id="pfs"><p>
            </div>
          </div>
        </div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <p class="flip-card-text">Advisors<p>
            </div>
            <div class="flip-card-back">
              <p class="flip-card-text" id="advs"><p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Bar chart-->
    <div class='barcontainer'>
      <div class='barcontainerheader'>
          Population
      </div>
      <div class='bar' id="bar-all">
        All Users
        <div class='barlabel' id="barlabel-all">
          
        </div>
      </div>
      <div class='bar' id="bar-stds">
        Students
        <div class='barlabel' id="barlabel-stds">
          
        </div>    
      </div>
      <div class='bar' id="bar-pfs">
        Professors
        <div class='barlabel' id="barlabel-pfs">
          
        </div>
      </div>
      <div class='bar' id="bar-advs">
        Advisors
        <div class='barlabel' id="barlabel-advs">
          
        </div>
      </div>
    </div>
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

              $.ajax({
                  type: "GET",
                  url: "../Api/overview.php",
                  dataType: "html",
                  success: function (data) {
                    var info = $.parseJSON(data);
                      $("#ttl").html(info.total);
                      $("#stds").html(info.stds);
                      $("#pfs").html(info.pfs);
                      $("#advs").html(info.advs);
                      $("#barlabel-all").html(Math.floor((info.total/info.total)*100) + "%");
                      $("#barlabel-stds").html(Math.floor((info.stds/info.total)*100) + "%");
                      $("#barlabel-pfs").html(Math.floor((info.pfs/info.total)*100) + "%");
                      $("#barlabel-advs").html(Math.floor((info.advs/info.total)*100) + "%");
                      $("#bar-all").css('height',(Math.floor((info.total/info.total)*1000/13) + "%"));
                      $("#bar-stds").css('height',(Math.floor((info.stds/info.total)*1000/13) + "%"));
                      $("#bar-pfs").css('height',(Math.floor((info.pfs/info.total)*1000/13) + "%"));
                      $("#bar-advs").css('height',(Math.floor((info.advs/info.total)*1000/13) + "%"));

                  }
              });
          });
        </script>    

 </body>

</html>
