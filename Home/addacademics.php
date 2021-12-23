<?php
session_start();
 $type = $_GET['type'];
 $_SESSION['type'] = $_GET['type'];

?>
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
    
    <form action="../Api/savenewacademics.php" method="post">
    <?php if($type=="d") : ?>
      <h3 id="profile-name">Edit Department</h3>
      <input type="text" id="id" name="id" placeholder="id" hidden><br>
      <input type="text" id="Deptname" name="Deptname" placeholder="Department name" required><br>
      <input type="submit" value="Save Changes" class="form-text post" style="background-color: slategray;color: white;cursor:pointer;"></input>
      <?php endif; ?>
      <?php if($type=="p") : ?>
        <h3 id="profile-name">Edit Program</h3>
      <input type="text" id="id" name="id" placeholder="id" hidden><br>
      <input type="text" id="deptid" name="deptid" placeholder="Department code" required><br>
      <input type="text" id="pgmn" name="pgmn" placeholder="Program name" required><br>
      <input type="submit" value="Save Changes" class="form-text post" style="background-color: slategray;color: white;cursor:pointer;"></input>
      <?php endif; ?>
      <?php if($type=="c") : ?>
        <h3 id="profile-name">Edit Course</h3>
      <input type="text" id="id" name="id" placeholder="id" hidden><br>
      <input type="text" id="deptid" name="deptid" placeholder="Department code" required><br>
      <input type="text" id="pgmid" name="pgmid" placeholder="Program code" required><br>
      <input type="text" id="crscode" name="crscode" placeholder="Course code" required><br>
      <input type="text" id="crsname" name="crsname" placeholder="Course name" required><br>
      <input type="submit" value="Save Changes" class="form-text post" style="background-color: slategray;color: white;cursor:pointer;"></input>
      <?php endif; ?>
    </form>
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="ajax-script.js"></script>
        <!-- JAVASCRIPT -->
        <script>

          $(document).ready(function () {
              debugger;
              debugger;
            // $.ajax({
            //       type: "GET",
            //       url: "../Api/academicsedit.php?id=<?php echo $id?>&type=<?php echo $type?>",
            //       success: function (data) {
            //         debugger;

            //         var info = $.parseJSON(data);
            //         debugger;
                    
            //         <?php if($type=="d") : ?>
            //             $("#Deptname").val(info[0].name);
            //             $("#id").val(info[0].id);
            //             <?php endif; ?>
            //         <?php if($type=="p") : ?>
            //             $("#pgmn").val(info[0].name);
            //             $("#deptid").val(info[0].dept_id);
            //             $("#id").val(info[0].id);
            //             <?php endif; ?>
            //         <?php if($type=="c") : ?>
            //             $("#crsname").val(info[0].coursename);
            //             $("#crscode").val(info[0].coursecode);
            //             $("#pgmid").val(info[0].programid);
            //             $("#deptid").val(info[0].deptid);
            //             $("#id").val(info[0].id);
            //             <?php endif; ?>
                    
            //       }
            //   });

          });

        </script>
</html>
