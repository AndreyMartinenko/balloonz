<!DOCTYPE html>
<html>

<?php require_once(ROOT . '/views/layouts/head.php');?>
<body>

<?php require_once(ROOT . '/views/layouts/navhead.php');?>

<div class="tm-home-img-container">
    <img src="template/img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                <h2 class="tm-gold-text tm-title"> <?= $flight['fly_type'];?> </h2>
                <p class="tm-subtitle"> З нами Ви можете здiйснити свою мрiю з будь-якими забаганками!Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis.
                </p>
            </div>
        </div>

        <div class="row tm-margin-t-big">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="tm-2-col-left">
                    <img src="/template/img/tm-img-660x330-1.jpg" alt="Image" class="tm-margin-b-40 img-fluid">
                    <p class="tm-margin-b-30"><strong>У вартість польоту, що складає <?= $flight['price'];?>&#8372; включено наступні послуги:</strong></p>
                    <ul>
                        <li>Donec tempor loboeugiat massa facilisis sed. Ut dignissim viverra</li>
                        <li>pretium.  justo maximus turpis finibus scelerisque nec eros. Cras nec</li>
                        <li>lectus tempor nibh vestibulum eleifend et ac elit.</li>
                        <li>lectus tempor nibh vestibulum eleifend et ac elit.</li>
                    </ul>
                    <p class="m-b-2"><strong>Важливо:</strong> lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis. Mauris id vulputate lectus, id fermentum sapien.
                    </p>
                    <input type="button" name="order" value="Замовити" onclick="window.location.href='http://balloon.com/contacts/order'" class="tm-btn text-uppercase"/>
                 </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h3 class="tm-gold-text tm-title tm-margin-b-30">На подарунок</h3>
                    <div class="media tm-related-post">
                      <div class="media-left media-middle">
                        <a href="#"><img class="media-object" src="/template/img/tm-img-240x120-21.jpg" alt="Generic placeholder image"></a>
                      </div>
                      <div class="media-body">
                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Подарункова картка в упаковці</h4></a>
                        <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.1111</p>
                      </div>
                    </div>
                    <div class="media tm-related-post">
                      <div class="media-left media-middle">
                        <a href="#"><img class="media-object" src="/template/img/tm-img-240x120-20.jpg" alt="Generic placeholder image"></a>
                      </div>
                      <div class="media-body">
                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Древній манускрипт в тубусі</h4></a>
                        <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra222.</p>
                      </div>
                    </div>
                    <div class="media tm-related-post">
                      <div class="media-left media-middle">
                        <a href="#">
                          <img class="media-object" src="/template/img/tm-img-240x120-22.jpg" alt="Generic placeholder image">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Подарунковий сертифікат(А4)</h4></a>
                        <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra333.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
       
<?php require_once (ROOT . '/views/layouts/footer.php');?>
       
</body>
</html>