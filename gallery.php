<?php include("session.php");?>
<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <?php include("head.php");?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="icon" href="images/cheers .ico" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Expletus+Sans:ital,wght@1,500&family=Fredoka+One&family=Marhey&family=Merienda:wght@700&family=Satisfy&family=Teko:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css"
      integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
      integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/gallery.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php include('nav.php'); ?>
    <div
      id="carouselExampleSlidesOnly"
      class="carousel slide w-90"
      data-interval="100"
      data-bs-ride="carousel"
    >
      <div class="galleryText">
        <h1 style="z-index: 1">Gallery</h1>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="images/gallery-main.jpeg"
            height="100%"
            class="d-block w-100"
          />
          <!-- https://images.pexels.com/photos/10580245/pexels-photo-10580245.jpeg -->
        </div>
        <div class="carousel-item">
          <img
            src="https://images.pexels.com/photos/625644/pexels-photo-625644.jpeg"
            height="100%"
            class="d-block w-100"
          />
        </div>
        <div class="carousel-item">
          <img
            src="https://images.pexels.com/photos/12377770/pexels-photo-12377770.jpeg"
            height="100%"
            class="d-block w-100"
          />
        </div>
      </div>
    </div>
    <!--service-->
    <section class="container-fluid" style="padding: 3%">
      <div class="row">
        <!--side nav card-->
        <div class="col col-lg-3 col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">All Categories</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="#">Parties</a></li>
              <li class="list-group-item"><a href="#">Proffessional</a></li>
            </ul>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Additional Filter</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href="#"> >200 Participants</a>
              </li>
              <li class="list-group-item">
                <a href="#"> <200 participants</a>
              </li>
            </ul>
          </div>
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Subscribe</h5>
            </div>
            <div class="card-body">
              <p class="card-text">Be the first to recive coupons.</p>
              <form>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    placeholder="Name"
                    aria-describedby="emailHelp"
                    style="border: none"
                  />
                  <hr />
                </div>
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email address"
                    id="exampleInputPassword1"
                    style="border: none"
                  />
                  <hr />
                </div>
                <button type="submit" class="btn btn-outline-dark">
                  Subscribe Now
                </button>
              </form>
            </div>
          </div>
        </div>

        <!--gallary grid-->
        <div class="col col-lg-9 col-md-12">
          <section class="gallery">
            <div class="image">
              <img loading="lazy" src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
            <div class="image">
              <img src="images/gallery-birthday.jpeg" alt="" />
              <span>Bithday Event</span>
            </div>
          </section>
        </div>
      </div>
    </section>
    <!--footer-->
    <?php include("footer.php");?>
  </body>
</html>
