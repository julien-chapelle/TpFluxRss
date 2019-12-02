<?php
if (isset($_POST['choice'])) {
    if (!isset($_COOKIE)) {
        setcookie('selectTheme', $_POST['selectTheme'], time() + (86400));
        setcookie('selectNbFlux', $_POST['selectNbFlux'], time() + (86400));
        header('refresh: 0');
    } elseif (isset($_COOKIE)) {
        setcookie('selectTheme', '', time() - (3600));
        setcookie('selectNbFlux', '', time() - (3600));
        setcookie('selectTheme', $_POST['selectTheme'], time() + (86400));
        setcookie('selectNbFlux', $_POST['selectNbFlux'], time() + (86400));
        header('refresh: 0');
    };
};
if (isset($_COOKIE['selectNbFlux'])) {
    $nbFlux = intval($_COOKIE['selectNbFlux']);
} else {
    $nbFlux = 3;
};
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Projet Php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style1.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />


</head>

<body id="colorBody">
    <div class="container-fluid">
        <div id="colorHeader">
            <h1 class="display-4">SUPER CSS READER</h1>
            <p class="lead">By Julien, Romain, Sofiane, Noémie</p>
        </div>
        <!--NavBar début -->
        <nav class="navbar navStyle navbar-expand-lg sticky-top" name="nav" id="colorNav">
            <a class="navbar-brand" href="../index.php"><img src="/assets/rss.webp" alt="rss" style="width: 70px;" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="far fa-caret-square-down"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="software.php">Sécurité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="security.php">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subject.php">Jeux</a>
                    </li>
                </ul>
                <form action="security.php" method="POST">
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item my-auto m-2">
                            <select class="form-control" id="fluxChoice" name="selectTheme">
                                <option selected>Choisir un thème...</option>
                                <option value="1" id="blackButton" class="black">Thème black</option>
                                <option value="2" id="blueButton" class="blue">Thème blue</option>
                                <option value="3" id="redButton" class="red">Thème red</option>
                            </select>
                        </li>
                        <li class="nav-item my-auto m-2">
                            <select class="form-control" id="fluxChoice" name="selectNbFlux">
                                <option selected>Affichage des flux...</option>
                                <option value="3">Afficher 3 flux RSS</option>
                                <option value="5">Afficher 5 flux RSS</option>
                                <option value="8">Afficher 8 flux RSS</option>
                            </select>
                        </li>
                        <li class="nav-item">
                            <button type="submit" name="choice" class="btn btn-sm ml-3">Valider</button>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
        <!--NavBar fin-->
        <!-- Body début-->
        <div class="container-fluid m-0">
            <div class="row d-flex text-left justify-content-around mt-4">
                <?php
                $url = "https://www.01net.com/rss/actualites/securite/";
                $rss = simplexml_load_file($url);
                $itemIndex = 1;
                foreach ($rss->channel->item as $item) {
                    $datetime = date_create($item->pubDate);
                    $date = date_format($datetime, 'd M Y, H\hi');
                    $descriptions = $item->description;
                    $description = explode('<br/>', $descriptions);
                    echo ('<div class="card mb-3"">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="' . $item->enclosure['url'] . '" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                        <div class="card-body">
                                        <h5 class="card-title">' . $item->title . '</h5>
                                        <p class="card-text">' . $description[0] . '</p>
                                        <p class="card-text"><small class="text-muted">' . $date . '</small></p>
                                        <a type="button" href="' . $item->link . '" target="_blank">Allez sur le site</a>
                                        </div>
                                        </div>
                                    </div>
                            </div>');
                    $itemIndex++;
                    if ($itemIndex > $nbFlux) {
                        break;
                    };
                };
                ?>
            </div>
        </div>

        <!-- Scrollup début -->
        <div id="scrollUp">
            <a href="#top" class="scrollUpColor"><i class="far fa-caret-square-up"></i></a>
        </div>
        <!-- Scrollup fin -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="../assets/script.js"></script>
    <script src="../assets/to-top.js"></script>
</body>

</html>