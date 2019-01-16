<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>новини</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">                                     
    <link rel="stylesheet" href="/template/css/templatemo-style.css">                                   

</head>

<body>
    <?php require_once (ROOT . '/views/layouts/navhead.php');?>

    <div class="tm-home-img-container">
    	<p>image to change</p>
        <img src="/template/img/tm-blog-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                    <h2 class="tm-gold-text tm-title"><?= $itemNews['name'];?></h2>
                    <p class="tm-subtitle">Опубліковано: <?= $itemNews['exact_time'];?></p>
                </div>
            </div>

            <div class="row tm-margin-t-big">
                <div class="col-xs-12">
                    <h3 class="tm-gold-text tm-title"><a href="/news/<?='page-' .  $offset;?>/<?= $itemNews['id'];?>"><?= $itemNews['name'];?></h3>                
                    <p><?= $itemNews['text'];?></p>
                    <a href="/news/<?='page-' .  $page ;?>/" class="tm-btn text-uppercase">Back...</a>
                </div>
        </div>
    </section>
        
<footer class="tm-footer"></footer>

<script src="template/js/jquery-1.11.3.min.js"></script>             
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> 
<script src="template/js/bootstrap.min.js"></script>  
</body>
</html>