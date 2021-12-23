<html>

  <head>

    <title>All Announcements</title>

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

    <div class = "main-container">
      <!-- AANOUNCEMENTS -->
      <h2 class = "announcement-period"> This Week </h2>
      <div class="announcement dbms">
        <h2>CSE 5301</h2>
        <p>Complete Assignment</p>
      </div>

    <div class="announcement daa">
      <h2>CSE 5335</h2>
      <p>Assignment deadline changed.</p>
    </div>

    <hr>

    <h2 class = "announcement-period"> Previous </h2>
    <div class="announcement wdm">
      <h2>CSE 5311</h2>
      <p>Review Class tomorrow</p>
    </div>

  <div class="announcement damt">
    <h2>CSE 5301</h2>
    <p>Classes cancelled</p>
  </div>

  </div>

  </body>

</html>
