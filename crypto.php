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

<div id="preloader">

</div>

    
    <?php
    $url = 'https://newsapi.org/v2/everything?q=crypto%20india&from=2022-05-04&sortBy=publishedAt&apiKey=e638fa10070a4c40b8b2a775c2498609';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);



    ?>
 


    
    
    <div class="jumbotron">
        <h1>InfoInvest <br><br>Crypto news for today</h1>
        

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


    <script>
var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
  loader.style.display = "none";
})

</script>
    
</body>
</html>