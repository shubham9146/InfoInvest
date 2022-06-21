<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Prime Investment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="index.css" rel="stylesheet"/>
</head>
<body>

    
    <?php
    $url = 'https://newsapi.org/v2/everything?q=stocks%20india&from=2022-05-04&sortBy=publishedAt&apiKey=e638fa10070a4c40b8b2a775c2498609';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);



    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">InfoInvest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
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
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="LOGIN/register.php">Register</a>
        </li>

      
  </nav>


    
    
    <div class="jumbotron">
        <h1>InfoInvest <br><br> Market News for today</h1>
        

    </div>
    <div class="container-fluid">
        <?php
        foreach($NewsData->articles as $News)
        {
        ?>

    </div>
    <div class="row NewsGrid">
        <div class="col-md-3">
            <img src="<?php echo $News->urlToImage ?>" alt="News Thumbnail" class="rounded">

    </div>
    <div class="col-md-9">
        <h2>Title :<?php echo $News->title ?></h2>
        <h5>Description -<?php echo $News->description ?></h5>
        <p>Content:<?php echo $News->content ?></p>
        <h6>Author <?php echo $News->author ?></h6>
        <h6>Published <?php echo $News->publishedAt ?></h6>


    </div>
    <?php
        }

    ?>
    </div>
    
</body>
</html>