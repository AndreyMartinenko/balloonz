<?php include_once(ROOT."/components/Router.php"); ?>

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
                            <li class="nav-item">
                                <a href="/user/login/" class="nav-link">Вхід</a>
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