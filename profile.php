<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MolaTV</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap"
      rel="stylesheet"/>
    <link href="custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>
    <style type="text/css">
      .form-container{
          border-radius: 10px;
          background-color: rgba(0, 0, 0, 0.3);
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
      <h3 class="mb-4">Profile</h3>
      <form method="post" >
        <div class="form-group">
          <label>Nama pengguna</label>
          <input class="form-control" type="text" name="nama" value="">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="">
        </div>
        <div class="form-group">
          <label>Paket</label>
          <input class="form-control" type="text" value="" disabled>
        </div>
        <button class="btn btn-danger" type="submit" name="btn-ubah">Simpan</button>
        <a class="btn" type="submit" href="#">Batal</a>
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
