<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap"
      rel="stylesheet"/>
    <link href="custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <!-- HEADER -->

  <div class="container-fluid">
    <!-- SUGGEST SECTION  -->

    <div class="container-fluid mt-3">
      <h3 style="color: white;">Yang mungkin Anda sukai</h3>
      <div class="row d-flex justify-content-center">
        <div class=" col-3 mr-4 mb-5 gmbr-utama">
          <a type="button" data-toggle="modal" data-target="#">
            <img src="#"  alt="">
          </a>
        </div>
        <div class="modal fade" id="#" role="dialog">
          <div class="modal-dialog modal-dialog-centered" style="background: #221f1f;">
            <div class="modal-content" style="background: #221f1f;">
              <button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: white;">&times;</span>
              </button>
              <div class="modal-body text-left">
                  <div class="card mb-3" style="background: #221f1f; color: white;">
                    <img class="card-img-top" src="#" alt="Card image cap">
                    <div class="card-body">
                      <ul class="modal__btns row">
                        <li>
                          <a class="modal__btn modal__btn--play ml-3">
                            <button ion-button icon-only onclick="location.href='#';" value="Movie Trailer">
                              <ion-icon name="play"></ion-icon>
                            </button>
                          </a>
                          <a href="#" class="modal__btn" style="color: white;">
                            <ion-icon name="add"></ion-icon>
                            <span class="tool-tip">
                              Add to Favorite
                            </span>
                          </a>
                          <a class="modal__btn">
                            <ion-icon name="thumbs-up-outline"></ion-icon>
                            <span class="tool-tip">
                              I like this
                            </span>
                          </a>
                        </li>
                      </ul>
                      <ul class="modal__ratings row">
                        <p class="modal__pg ml-3"></p>
                        <p class="modal__season ml-3"></p>
                      </ul>
                      <ul class="modal__categories row">
                        <p class="modal__category ml-3"></p>
                      </ul>
                      <p class="card-text"></p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script src=",yscript.js"></script>
  <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>

</body>
</html>
