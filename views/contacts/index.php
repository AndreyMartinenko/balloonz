<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Кулi - контакти</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/templatemo-style.css">
</head>

    <body>
       
        <?php require_once (ROOT . '/views/layouts/navhead.php');?>

        <div class="tm-contact-img-container"></div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                    <?php if ($result): ?>
                    <h3>Повідомлення вдало відравлено!<h3>
                    <p>Ми відповімо Вам на вказанный Е-mail, якомога швидше.</p>
                    <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> &#9785; -> <?= $error; ?> &#10006;</li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Зворотній зв'язок</h3>
                            <small class="tm-form-description">Заповніть форму і відправте</small>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" id="email" name="userEmail" class="form-control" placeholder="Ваш E-mail" value="<?= $userEmail; ?>"/>
                                </div>

                                <div class="form-group">
                                    <textarea id="" name="userText" class="form-control" rows="5" placeholder="Текст Повідомлення" value="<?= $userText; ?>" required></textarea>
                                </div>
                                <input type="submit" name="submit" class="tm-btn" value="Відправити"/>
                            </form>   
                        </section>

                    <?php endif; ?>

                        <section class="tm-margin-t-mid tm-map-section">
                            <h3 class="tm-gold-text tm-form-title">Наш офіс на мапі</h3>
                            <div id="google-map"></div>
                            <p class="tm-form-description">Пояснення до форми замовлення або варіанти проїзду в офіс</p>
                            <p class="m-b-0">Пояснення доroin sapien lacus, euismod eget nisl in, 
                                elementum posuere massa.</p>
                        </section>                        

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-contact-right">
                        <div class="row">

                            <div >
                                <h3 class="tm-gold-text tm-form-title">Програма лояльності</h3>
                                <section>
                                    <div class="tm-content-box tm-content-box-contact">
                                        <img src="template/img/tm-img-310x180-4.jpg" alt="Image" class="tm-margin-loyal img-fluid" >
                                        <!-- <a href="#" class="tm-btn text-uppercase">Detail</a>     -->
                                    </div> 
                                    <p class="tm-margin tm-p-small">
                                        Aenean cursus tellus mauris, quis consequat mauris dapibus id. 
                                        Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. 
                                        Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. 
                                        Donec scelerisque porttitor pharetraAenean cursus tellus mauris, quis consequat mauris dapibus id. 
                                        Donec scelerisque porttitor pharetra
                                        </p>
                                </section>
<!-- зробити сss для 
програма лольнотності та
інфо для аілоиів та влвсників куль -->
                            </div>
                        </div>
                        <hr class="tm-margin-t-mid">
                        <div class="row tm-contact-row-related-posts">
                            <div class="col-xs-12">
                                
                                <div class="tm-contact-related-posts-container">
                                    <h3 class="tm-gold-text tm-title tm-margin-b-30">Для власників куль та пілотів</h3>

                                    <div class="media tm-related-post">
                                      <div class="media-left media-middle">
                                      </div>
                                      <div class="media-body">
                                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Оформлення документів</h4></a>
                                        <p class="tm-small-font tm-media-description">Державна реєстрація аеростата і державна реєстрація прав власності на аеростат, внесення змін до свідоцтва про державну реєстрацію або свідоцтво про державну реєстрацію права власності.</p>
                                        <p class="tm-small-font tm-media-description">Сертифікація (отримання сертифікату льотної придатності) на аеростат, який має сертифікат типу в Україні: НВІ "Аэропроужних систем" м. Феодосія, Cameron Balloons, Balony Kubicek.</p>
                                        <p class="tm-small-font tm-media-description">Консультації з приводу серіфікаціі (отримання сертифіката льотної придатності) аеростатів, які не мають сертифіката типу в Україні, тобто одиничних екземплярів повітряних суден.</p>
                                        <p class="tm-small-font tm-media-description">Консультації/семінари з питань порядку використання повітряного простору, і в цілому до діючого повітряного законодавства України в галузі авіації загального призначення, стосовно вільних аеростатів.</p>
                                      </div>
                                    </div>
                                    <div class="media tm-related-post">
                                      <div class="media-left media-middle">
                                      </div>
                                      <div class="media-body">
                                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Технічне обслуговування аеростатів та компонентів</h4></a>
                                        <p class="tm-small-font tm-media-description">Регламентне технічне обслуговування пальників Bonanno, пальників Stratus, Shadow, Stealth, МК-2, -3, -4.</p>
                                        <p class="tm-small-font tm-media-description">Поставка запчастин до аеростатів Cameron Balloons, Balony Kubicek, UltraMagic.</p>
                                      </div>
                                    </div>
                                    <div class="media tm-related-post">
                                      <div class="media-left media-middle">
                                      </div>
                                      <div class="media-body">
                                        <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Поставка аеростатів Second-Hand  б/в з Эвропи та Эвразії</h4>
                                        </a>
                                        <p class="tm-small-font tm-media-description">Ми підберемо і доставимо аеростат або окремі конструктивні елементи, та допоможемо в отриманні необхідних документів на б/в аеростати з країн Європи.</p>
                                      </div>
                                    </div>
                                </div>                                

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        
        <?php require_once (ROOT . '/views/layouts/footer.php');?>

        <script>     
            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(13.758468,100.567481),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            /*$*/(function() {

                loadGoogleMap();
            });

        </script>             

</body>
</html>