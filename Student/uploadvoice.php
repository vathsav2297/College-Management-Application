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
    <h3>Upload Voice</h3>
    <form action="../Api/savevoice.php" method="post">
      <input type="file" id="audio" name="audio" accept="audio/*"><br>
      <input type="submit" value="Save Changes" class="form-text post" style="background-color: slategray;color: white;cursor:pointer;"></input>

    </form>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="ajax-script.js"></script>
        <!-- JAVASCRIPT -->
        <script>

          $(document).ready(function () {
              
          });

        </script>
</html>
