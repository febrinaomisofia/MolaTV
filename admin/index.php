<?php
  include ("../include/koneksi.php");
?>

<?php
include("sidebar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="row">
        <div class="column">
            <div class="card">
                <i class="fa fa-user-circle-o fa-5x" style="margin-top: 15px"></i>
                <h1>Users</h1>
                <a href="users.php"><button>View</button></a>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <i class="fa fa-film fa-5x" style="margin-top: 15px"></i>
                <h1>Movies</h1>
                <a href="movies.php"><button>View</button></a>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <i class="fa fa-soccer-ball-o fa-5x" style="margin-top: 15px"></i>
                <h1>Sports</h1>
                <a href="sports.php"><button>View</button></a>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <i class="fa fa-vine fa-5x" style="margin-top: 15px"></i>
                <h1>Living</h1>
                <a href="livings.php"><button>View</button></a>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <i class="fa fa-child fa-5x" style="margin-top: 15px"></i>
                <h1>Kids</h1>
                <a href="kids.php"><button>View</button></a>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <i class="fa fa-sign-out fa-5x" style="margin-top: 15px"></i>
                <h1>Logout</h1>
                <a href="../logout.php"><button><i class="fa fa-arrow-right"></i></button></a>
            </div>
        </div>
    </div>


</body>
</html>
