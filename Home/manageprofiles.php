<html>

<head>
  <title> Manage my profile </title>

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

  <div class = "main-container res-main-con">
    <h3>Manage Profile</h3>
    <form action="../Api/saveprofile.php" method="post">
      <input type="text" id="fname" name="fname" placeholder="Firstname" required><br>
      <input type="text" id="lname" name="lname" placeholder="Lastname" required><br>
      <input class="register-input" id="mavid" name = "mavid" type="text" placeholder="MavId" ><br>
      <input class="register-input" id="email" name = "email" type="email" placeholder="Email" required><br>
      <!-- <p class = "form-text"> Change your recording </p> <span>
      <input type="file" id="mynameaudio" name="filename">
      <input type="submit" id = "manage-profile-submit" style="background-color: slategray;color: white;"><br><br>
      </span> -->
      <p class = "form-text" id="acct-type"></p>
      <input type="submit" value="Save Changes" class="form-text post" style="background-color: slategray;color: white;cursor:pointer;"></input>

    </form>
  </div>

</body>
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
                    debugger;
                    debugger;
                    var info = $.parseJSON(data);
                    $("#acct-type").html("Account Type: "+info[0].user_type);
                    $("#fname").val(info[0].firstname);
                    $("#lname").val(info[0].lastname);
                    $("#mavid").val(info[0].mavid);
                    $("#email").val(info[0].email);
                    
                  }
              });

          });

        </script>
</html>
