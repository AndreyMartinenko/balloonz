<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Кулi - Вхід</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet"  type="text/css" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/template/css/templatemo-style.css">
</head>

<body>
       
<?php require_once (ROOT . '/views/layouts/navhead.php');?>
    <div class="tm-contact-img-container"></div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?= $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <form action="#" method="post">
                            <h2 class="tm-gold-text tm-form-title">Вхід</h2>
                            <small class="tm-form-description">Для входу введіть дані в форму</small>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="<?= $email; ?>"/><br>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Пароль" value="<?= $password; ?>"/>
                                </div>
                            <input name="submit" type="submit" class="tm-btn" value="Вхід"/>
                    </form>   

                </div>
                  
            </div>
        </div>
    </section>
        
<?php require_once (ROOT . '/views/layouts/footer.php');?>
</body>
</html>