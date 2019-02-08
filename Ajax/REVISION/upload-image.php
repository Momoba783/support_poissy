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

echo '<pre>'; print_r($_FILES); echo '</pre>';

if(!empty($_FILES['image']['name']))
{
    $nom_photo = uniqid() . '-' . $_FILES['image']['name'];
    echo $nom_photo . '<br>';


$photoBdd = "http://localhost/REVISION/image/$nom_photo";
echo $photoBdd . '<br>';

$photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/REVISION/image/$nom_photo";
echo $photoDossier . '<br>';

copy($_FILES['image']['tmp_name'], $photoDossier);

$resultat = $bdd->exec("INSERT INTO upload (image) VALUES ('$photoBdd')");//enregistrement d'une image dans la base de données

}

$test = $bdd->exec("INSERT INTO upload (image) VALUES ('test')");
echo $test . '<br>';

?>

<form method="post" action="" enctype="multipart/form-data" class="col-md-6 offset-md-3 text-center">
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
    <small id="emailHelp" class="form-text text-muted">Uploader une image</small>
  </div>
  <button type="submit" class="col-md-12 btn btn-info">Upload</button>
</form>

</div>
</body>
</html>