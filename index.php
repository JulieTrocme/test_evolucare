<?php include ('recupDonnee.php'); ?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Test evolucare Julie TROCME</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logo-evolucare.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <button class="btn btn-outline-dark refresh" >Mettre à jour les données</button>

            </div>
        </div>
    </div>
</nav>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="refresh_data">
                <h1 class="mt-5 text-center">Voici les cas confirmé du COVID 19 du <br> <?php echo $date; ?></h1>
                <h2 class="mt-5">Nombre de cas confirmé dans le monde : <?php echo $dataCasMonde['confirmed']['value']; ?> Personnes</h2>
                <h2 class="mt-5">Nombre de cas confirmé en France : <?php echo $dataCasFrance['confirmed']['value']; ?> Personnes</h2>

                <!-- Image -->
                <h2 class="mt-5">Résumé des cas recensés :</h2>
                <img class="mt-5" src="data:image/jpg;base64, <?php echo base64_encode($dataImage);?> im" >
            </div>
        </div>
    </div>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.refresh', function () {
            $.ajax({
                url: 'donneeRefresh.php',
                methode: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#refresh_data').html(response);
                }
            })
        })
    })
</script>

</body>
</html>


