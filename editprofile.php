<?php
include("sidebarprofile.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MOLA</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>
    <style type="text/css">
    body{
        background: -o-radial-gradient(81.41% 9.17%, 110.62% 196.67%, rgba(150, 205, 255, 0.19) 0%, rgba(28, 32, 38, 0.2) 100%),
        #101112;
        background: radial-gradient(110.62% 196.67% at 81.41% 9.17%, rgba(150, 205, 255, 0.19) 0%, rgba(28, 32, 38, 0.2) 100%),
        #101112;
        font-family: 'Fira Sans', sans-serif;

    }
      .form-container{
          border-radius: 10px;
          background-color: -o-radial-gradient(81.41% 9.17%, 110.62% 196.67%, rgba(150, 205, 255, 0.19) 0%, rgba(28, 32, 38, 0.2) 100%),
          #101112;
          padding: 25px 25px 5px 25px;
      }

      .form-group input, input[type="text"]:disabled {
          margin-bottom: 10px;
          border-radius: 10px;
          background-color: rgba(0, 0, 0, 0.3);
          border: 1px solid grey;
          color: #f5f5f1;
      }

      .form-group input:focus, input:active {
          background-color: rgba(0, 0, 0, 0.3);
          border: none;
          outline: none;
          color: #f5f5f1;
      }
    </style>
  </head>
  <body>
    <!-- Form header  -->
    <div class="container w-50 mt-4" style="color: #f5f1f1">
      <h3 class="mb-4">Edit Profile</h3>
      <form method="post" >
        <div class="form-group">
          <label>Username</label>
          <input class="form-control" type="text" value="" >
        </div>
        <div class="form-group">
          <label>Date Of Birth</label>
          <input type="date" name="date" id="date" class="form-control" required title="date of birth">
        </div>
        <div class="form-group">
          <label>Gender</label>
          <select class="form-control"  name="gender" id="gender" style="background-color:rgba(0, 0, 0, 0.3); color: white;">
          <option value="male">Male</option>
          <option value="female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input class="form-control" type="text" value="">
        </div>
        <a class="btn btn-primary" href="profile.php">Save</a>
        <a class="btn btnt btn-block" style="border: 1px solid grey; color: white;" type="submit" href="profile.php">Batal</a>
      </form>
    </div>
  </div>
  </div>

  <script src="js/main.js"></script>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script src=",yscript.js"></script>
  <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>

</body>
</html>
