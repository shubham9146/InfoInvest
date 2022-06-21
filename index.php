<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500&display=swap" rel="stylesheet">

  <title>Document</title>
</head>

<body>
  
 
 
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">InfoInvest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="forum/index.php">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wealth.php">Wealth Management</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            News
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="news.php">Market</a>
            <a class="dropdown-item" href="crypto.php">Crypto</a>
            <div class="dropdown-divider"></div>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us.html">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forum/index.php">Register</a>
        </li>

      
  </nav>



  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="news.jpg" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="wealth5.jpg" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="732c936e920f5df47dea6acc74c3d7e2.jpg" alt="New York" width="1100" height="500">
      </div>

      
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>



  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">FINANCIAL LITERACY</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="1.gif" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">INDIA'S GROWING FINANCIAL LITERACY</h2>
          <p class="py-3">Financial literacy is the ability to effectively manage a variety of financial skills, such as personal finance management, budgeting, and investing. <br><br>
            India’s financial literacy rate among its young and adult population has been growing due to various factors including the recent advancement in technology and media coverage. The government of India and various regulators are constantly working towards growth by implementing financial literacy courses, workshops and schemes.</p>
        </div>

      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Some of our Courses</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="course1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Stock Market Technical Analysis</h4>
              <p class="card-text">Technical analysis is a trading discipline employed to evaluate investments and identify trading opportunities in price trends and patterns seen on charts.

              </p>
              <a href="course1.html" class="btn btn-primary">Access</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="course5.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Market Value Investing Course</h4>
              <p class="card-text">Market Value Investing Course, you will learn how to make investment decisions by yourself and how you can possibly make the 15-25% annual return from market.</p>
              <a href="course2.html" class="btn btn-primary">Access</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
            <img class="card-img-top" src="course4.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Stock Market for Intermediate</h4>
              <p class="card-text">Learn to trade and analyze the stock, forex, and futures markets. Trading for Beginners teaches you the fundamentals!</p>
              <a href="course1_page3.html" class="btn btn-primary">Access</a>
            </div>
          </div>

        </div>
        

      </div>
    </div>


  </section>
  <footer>
    <p class="p-3 bg-white text-white text-center">@infoinvest_miniproject</p>
  </footer>

  <?php include 'forum/_footer.php'; ?>

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>






</body>

</html>