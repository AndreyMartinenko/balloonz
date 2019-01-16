<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Замовлення польоту</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/templatemo-style.css">
</head>

<body>
<?php include_once(ROOT . "/components/Router.php"); ?>

<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="/" class="navbar-brand tm-site-name">Летiмо в небо</a>
            <nav class="navbar tm-main-nav">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">&#9776;</button>
                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav" id="menu">
                        <li class="nav-item"><a href="about" class="nav-link">Про нас</a></li>
                        <li class="nav-item"><a href="news" class="nav-link">Новини</a></li>
                        <li class="nav-item"><a href="contacts" class="nav-link">Контакти</a></li>
                        <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>                   
                        <!-- <li class="nav-item"> -->
                            <?php if (User::isGuest()): ?>                                        
                                <li class="nav-item"><a href="/user/login/" class="nav-link">Вхід</a>
                                    <ul id="sub">
                                        <li><a class="nav-item" href="/user/registry">Реєстрація</a></li>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item"><a href="/cabinet/" class="nav-link">Акаунт</a>
                                    <ul id="sub">
                                        <li class="nav-item"><a class="nav-link" href="/user/logout/">Вихід</a></li>
                                    </ul>                                                                         
                                </li>
                            <?php endif; ?>
                    </ul>                        
                </div>
            </nav>  
        </div>                                  
    </div>            
</div>

        <div class="tm-contact-img-container"></div>
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <?php if ($result): ?>
                        <h3>Повідомлення вдало відравлено!<h3>
                        <p>В найближчий час менеджер, Вам зателефонує.</p>
                        <?php else: ?>
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> &#9785; -> <?= $error; ?> &#10006;</li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                            <section>
                                <h2 class="tm-gold-text tm-form-title">Скоро полетимо на кулі)</h2>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <small class="tm-form-description">Ваше Ім'я</small>
                                        <input type="text" id="name" name="userName" class="form-control" placeholder="Борис Іванович" value="<?= $userName; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <small class="tm-form-description">Контактний телефон</small>
                                        <input type="tel" id="tel" name="userTel" class="form-control" placeholder="050-888-88-88" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" value="<?= $userTel; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <small class="tm-form-description">E-mail</small>
                                        <input type="email" id="email" name="userEmail" class="form-control" placeholder="Boris@gmail.com" value="<?= $userEmail; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <small class="tm-form-description">Виберіть район, або впишіть бажаний</small>
                                        <input type="text" list="location" class="form-control" name="location" placeholder="Макарівський"/>
                                        <datalist id="location">
                                          <option>Макарівський</option>
                                          <option>Васильківський</option>
                                          <option>Переяслав-Хмельницький</option>
                                          <option>м. Біла Церква</option>
                                          <option>м. Київ</option>
                                        </datalist>
                                    </div>
                                    <div class="form-group">
                                        <small class="tm-form-description">Коментарі до замовлення</small>
                                        <textarea id="userText" name="userText" class="form-control" rows="3" placeholder="Текст Повідомлення" value="<?= $userText; ?>" required></textarea>
                                    </div>
                                     <div class="form-group">
                                        <small class="tm-form-description">Менеджер зателефонує Вам, для обговорення деталей замовлення після відправки форми.</small>
                                    </div>
                                    <input type="submit" name="submit" class="tm-btn" value="Підтверджую!"/>
                                </form>   
                            </section>
                        <?php endif; ?>

                    </div>

                </div>

            </div>
        </section>
<?php// require_once (ROOT . '/views/layouts/footer.php');?>
</body>
<script type="text/javascript" src="template/js/jquery-1.11.3.min.js"></script>             
<script type="text/javascript" src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> 
<script type="text/javascript" src="template/js/bootstrap.min.js"></script>  
</html>