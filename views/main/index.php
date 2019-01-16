<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кулi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/templatemo-style.css">
</head>

<body>

<?php require_once (ROOT . '/views/layouts/navhead.php');?>

<div class="tm-home-img-container">
    <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                <h2 class="tm-gold-text tm-title">Ваша радiсть - наш обов'язок</h2>
                <p class="tm-subtitle">З нами Ви можете здiйснити свою мрiю з будь-якими забаганками!</p>
            </div>
        </div>
        <div class="row">

            <?php foreach ($balloonFlights as $flight): ?>
    
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="tm-content-box">
                    <img src="template/img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">
                        <a href = "/flight/<?= $flight['id'];?>">
                            <?= htmlspecialchars($flight['fly_type'], ENT_QUOTES);?>
                        </a>
                    </h4>
                    <h3><?= $flight['price'];?> &#8372; </h3> 
                    <p class="tm-margin-b-20">
                        <?= htmlspecialchars($flight['short_desc'], ENT_QUOTES);?>
                    </p>
                    <a href="/flight/<?= $flight['id'];?>" class="tm-btn text-uppercase">Детальніше</a>    
                </div>  
            </div>
              <?php endforeach;?>
        </div> 

        <div class="row tm-margin-t-big">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="tm-2-col-left">
                    <h3 class="tm-gold-text tm-title">фото Польотів</h3>
                    <p class="tm-margin-b-30"><b>Індивідуальні Польоти</b></p>
                    <img src="template/img/tm-img-660x330-2.jpg" alt="Image" class="tm-margin-b-40 img-fluid">
                    <hr>
                    <p class="tm-margin-b-30"><b>Фієсти та Чемпіонати</b></p>                           
                    <img src="template/img/tm-img-660x330-3.jpg" alt="Image" class="tm-margin-b-40 img-fluid">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="tm-2-col-right">
                    <div class="tm-2-rows-md-swap">

                        <h3 class="tm-gold-text tm-title tm-margin-b-30">Де літаємо</h3>

                        <?php foreach ($flightsLocations as $location): ?>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><br>
                                <div class="media tm-related-post">
                                  <div class="media-left media-middle">
                                    <a href="#">
                                      <img class="media-object" src="template/img/tm-img-240x120-21.jpg" alt="Generic placeholder image">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15"><?= $location['title']; ?></h4></a>
                                    <p class="tm-small-font tm-media-description"><?= $location['short_desc']; ?></p>
                                  </div>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>    

<?php require_once (ROOT . '/views/layouts/footer.php');?>
       
</body>
</html>