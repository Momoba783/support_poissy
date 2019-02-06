<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>UPLOAD IMAGES</title>
</head>
<body>

<div class="container">

<h2 class="display-4 text-center">UPLOAD IMAGES</h2>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=revisions','root','');

// echo '<pre>'; print_r($_FILES); echo '</pre>';

if(!empty($_FILES['image']['name']))
{
    $nom_photo = uniqid() . '-' . $_FILES['image']['name'];//uniqid() permet de definir un identifiant unique
    // echo $nom_photo . '<br>';


$photoBdd = "http://localhost/REVISION/image/$nom_photo";//on déclare l'URL de la photo/image qui sera conservé en BDD
// echo $photoBdd . '<br>';

$photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/REVISION/image/$nom_photo";// on déclare le chemin physique de la photo, ou elle sera stockée
// echo $photoDossier . '<br>';

copy($_FILES['image']['tmp_name'], $photoDossier);// permet de copier la photo / image dans le dossier sur le serveur

$result = $bdd->exec("INSERT INTO upload (image) VALUES ('$photoBdd')"); // INSERTION EN BDD DE L'URL DE L'IMAGE. on ne conserve jamais l'image elle même dans la BDD ca serait trop lourd pour le serveur

//EXO : afficher toutes les photos uploader en dessous du formulaire

}
?>

<form method="post" action="" enctype="multipart/form-data" class="col-md-6 offset-md-3 text-center">
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
    <small id="emailHelp" class="form-text text-muted">Uploader une image</small>
  </div>
  <button type="submit" class="col-md-12 btn btn-info">Upload</button>
</form>

<div class="row">
<?php
$result = $bdd->query("SELECT * FROM upload");
// echo '<pre>'; print_r($_result); echo '</pre>';
while($data = $result ->fetch(PDO::FETCH_ASSOC)):
  // echo '<pre>'; print_r($_data); echo '</pre>';

  ?>

<div class="col-md-6 text-center p-2">
<img src="<?= $data['image'] ?>" alt="" class="col-md-6">
</div>

<?php endwhile; ?>


</div>
</div>
</body>
</html>