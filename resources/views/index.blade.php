<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!--Poppins Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!--CSS File-->
    <link rel="stylesheet" href={{ asset('style.css') }}>
    <title>Personal Portfolio</title>
</head>

<body>
   
   <!--Background Lines-->
   <div class="dots">
       <div class="dot dot__1"></div>
       <div class="dot dot__2"></div>
       <div class="dot dot__3"></div>
       <div class="dot dot__center"></div>
       <div class="dot dot__4"></div>
       <div class="dot dot__5"></div>
       <div class="dot dot__6"></div>
   </div>
   
    <!--Navigation Portion-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">ANDRIAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#section__portfolio_id">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section__about_id">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section__footer_id">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--Main-page Portion-->
    <div class="container">
        <section class="section__hero text-center">
            <img class="profil-pic" src={{ asset('images/profil.jpg') }}>
            <h1>
                Hi👋,I'm Andrian, a UI/UX Designer from
                Batam. I do UI & UX Design, websites as
                well as branding & front end development.
            </h1>
        </section>
    </div>

    <!---Portfolio Portfion-->
    <div class="container">
        <section class="section__portfolio" id="section__portfolio_id">
            <div class="row row1">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src={{ asset('images/1.jpg')}} alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="filler filler-1 align-items-center">
                        <h3>App Design</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src={{ asset('images/2.jpg')}} alt="" class="img-fluid">
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src={{ asset('images/3.jpg')}} alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="filler filler-2 align-items-center">
                        <h3>Web Design</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src={{ asset('images/4.jpg')}} alt="" class="img-fluid">
                </div>
            </div>
        </section>
    </div>
    
    <!--About Section-->
    <div class="container">
        <section class="section__about" id="section__about_id">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h2>About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis suscipit ipsa dolorem numquam harum placeat ex ea. Quisquam, fugiat, recusandae. Veniam et rerum ad repellat iure, doloribus officia a ipsam laudantium vitae cum, assumenda expedita ducimus amet ea! Vitae, tenetur.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi molestias ad nobis quasi aliquid. Nobis, fugiat, architecto! Mollitia, asperiores, iusto!
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h2>Contact Info</h2>
                    <p class="fw-bold">naird.id@gmail.com</p>
                    <p>081212344321</p>
                </div>
            </div>
        </section>
    </div>
    
    <!--Footer Section-->
    <div class="container-fluid p-0">
        <footer class="section__footer text-center" id="section__footer_id">
            <a href="https://www.instagram.com/andrian07__/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/andrian07__/"><i class="fab fa-behance"></i></a>
            <a href="https://www.instagram.com/andrian07__/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.instagram.com/andrian07__/"><i class="fab fa-youtube"></i></a>
            
            <h6>&copy; All rights reserved.</h6>
            <div class="pointer__arrow">
                <a href="#"><i class="fas fa-arrow-up"></i></a>
            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body></html>
