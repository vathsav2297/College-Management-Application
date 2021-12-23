<html>

<head>

    <title>Professor Dashboard</title>

    <!-- EXTERNAL CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@300&display=swap"
        rel="stylesheet">


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
        <div class="this-week"></div>
        <h2> This Week </h2>
        <div class="flip-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Monday </p>
                    </div>
                    <div class="flip-card-back">
                        <h4>Department Meeting: 11AM - 2PM</h4>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Tuesday </p>
                    </div>
                    <div class="flip-card-back">
                        <h4>WDM - 005 Lecture : 5.30 PM - 6.50 PM </h4>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Wednesday</p>
                    </div>
                    <div class="flip-card-back">
                        <h4>Meeting 11 AM</h4>
                        <h4>WDM - 005 Lecture : 5.30 PM - 6.50 PM</h4>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Thursday </p>
                    </div>
                    <div class="flip-card-back">
                        <h4>WDM - 005 Lecture : 5.30 PM - 6.50 PM </h4>
                        <h4>WDM Phase 2 Deadline: 11.59 PM</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Friday </p>
                    </div>
                    <div class="flip-card-back">
                        <h4>WDM Presentation: All day </h4>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Saturday </p>
                    </div>
                    <div class="flip-card-back">
                        <h4>WDM Presentation: All day</h4>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p class="flip-card-text">Sunday</p>
                    </div>
                    <div class="flip-card-back">
                        <h4>Nothing today</h4>
                    </div>
                </div>
            </div>
            <div class="flip-card">
            </div>
        </div>
        <!-- Today -->
        <div class="upcoming-events">
            <hr class="upcoming-hr">
            <h2>Upcoming Events</h2>
            <table class="course-table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Event</th>
                        <th scope="col">Time</th>
                        <th scope="col">Location</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td data-label="date">Oct 18, 2021</td>
                        <td data-label="event">Conference</td>
                        <td data-label="time">10AM-4PM</td>
                        <td data-label="location">ERB</td>
                    </tr>

                    <tr>
                        <td data-label="date">Nov 3, 2021</td>
                        <td data-label="event">Doggy Day</td>
                        <td data-label="time">12 PM</td>
                        <td data-label="location">Library Atrium</td>
                    </tr>
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
          });
        </script>    

</body>

</html>