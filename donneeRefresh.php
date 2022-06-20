<?php include ('recupDonnee.php');



$content = '<h1 class="mt-5 text-center">Voici les cas confirmé du COVID 19 du <br> '.$date.' </h1><h2 class="mt-5">Nombre de cas confirmé dans le monde : '
                .$dataCasMonde['confirmed']['value'].' Personnes</h2><h2 class="mt-5">Nombre de cas confirmé en France : '
                .$dataCasFrance['confirmed']['value'].' Personnes</h2><h2 class="mt-5">Résumé des cas recensés :</h2>
                <img class="mt-5" src="data:image/jpg;base64, '.base64_encode($dataImage).'" >';

echo json_encode($content);
