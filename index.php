<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css"><!-- FontAwesome 5.9.0 -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- NAVBAR START -->
    <?php require 'resources/modules/navbar.php'; ?>
    <!-- NAVBAR END -->

    <div class="container">

        <!-- IMPORTBAR START -->
        <?php require 'resources/modules/importbar.php'; ?>
        <!-- IMPORTBAR END -->
        <div class="my-3">
            <hr>
        </div>
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <div class="card border-primary mb-4 shadow">
                    <div class="card-header">Starnieuws</div>
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-text">
                            <ul>
                                <li>Headline 1</li>
                                <li>Headline 2</li>
                                <li>Headline 3</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-6 col-md-12">
                <div class="card border-primary mb-4 shadow">
                    <div class="card-header">Starnieuws</div>
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-text">
                            <ul>
                                <li>Headline 1</li>
                                <li>Headline 2</li>
                                <li>Headline 3</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>            
            <div class="col-lg-6 col-md-12">
                <div class="card border-primary mb-4 shadow">
                    <div class="card-header">Starnieuws</div>
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-text">
                            <ul>
                                <li>Headline 1</li>
                                <li>Headline 2</li>
                                <li>Headline 3</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>            
            
        </div>

    </div>
    <div class="container">
        <pre>
            <?php require 'app/read_rss.php'; ?>
        </pre>
    </div>
</body>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>