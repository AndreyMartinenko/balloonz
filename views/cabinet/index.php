<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Кулi - кабінет</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/templatemo-style.css">
</head>

    <body>
       
        <?php require_once (ROOT . '/views/layouts/navhead.php');?>
        <section>
            <div class="container">
                <div class="row">
                    <h1>Кабiнет користувача</h1>
                    <h3>Привiт, <?php echo $user['name'];?>!</h3>
                    <ul>
                        <li><a href="/cabinet/edit">Редактувать дані</a></li>
                        <li><a href="/cabinet/history">Придбані польоти</a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <?php require_once (ROOT . '/views/layouts/footer.php');?>
    </body>

</html>