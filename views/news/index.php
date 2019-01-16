<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Кулi - Новини</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet"  href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/templatemo-style.css"> 
</head>

<body>
   
   <?php require_once (ROOT . '/views/layouts/navhead.php');?>

    <div class="tm-blog-img-container">      
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <h3 class="tm-gold-text">Повітроплавні новини</h3>
                <div class="row tm-margin-t-big">

                    <?php foreach ($listNews as $itemNews):?>     

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="tm-content-box">
                            <img src="/template/img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text"><a href="/news/<?='page-' . $page; ?>/<?= $itemNews['id'] ;?>"><?= $itemNews['name'];?></a>
                            </h4>
                            <p class="tm-margin-b-20">
                                <?= $itemNews['description'];?>
                                <?= $itemNews['id'];?>
                            </p>
                            <a href="/news/<?='page-' .  $page;?>/<?= $itemNews['id'] ;?>" class="tm-btn text-uppercase">Детально</a>    
                        </div>  

                    </div>
                    <?php continue;?>
                                            
                </div>
                        
                <div class="row tm-margin-t-big">

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="tm-content-box">
                            <img src="template/img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text"><a href="/news/$offset/<?= $itemNews['id'] ;?>"><?= $itemNews['name'];?></a>
                            </h4>
                            <p class="tm-margin-b-20"><?= $itemNews['description'];?></p>
                            <a href="/news/$offset/<?= $itemNews['id'] ;?>" class="tm-btn text-uppercase">Детально</a>    
                        </div>  
                    </div>

                    <?php endforeach;?>
                </div>
            </div>
        </div>
    
        <?= $pagination->get(); ?>

        <div class="container-fluid">
            <div class="row tm-margin-t-mid">
                <div class="col-xs-12">
                    <h3 class="tm-gold-text">Анонс найцікавіших повітроплавних подій в Україні і світі</h3>
                    <p>12.11.19 - 17.11.19 Повітроплавна Фієста. м. Альбукерке, штат Нью-Мексико, США.</p>
                    <p>19.11.19 - 22.11.19 Повітроплавна Фієста. м. ,  США.</p>
                    <p>12.11.19 - 17.11.19 Повітроплавна Фієста. м. Альбукерке, штат Онтаріо, США.</p>
                    <p>12.11.19 - 17.11.19 Повітроплавна Фієста. м. Камянець-Подільський, Україна.</p>
                </div>
            </div>
        </div>
    </section>
    
<?php require_once (ROOT . '/views/layouts/footer.php');?>
       
</body>
</html>