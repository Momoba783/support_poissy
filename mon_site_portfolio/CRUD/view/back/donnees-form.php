<?php
//echo "<pre>"; print_r($photo); echo "</pre>";
// on passe en revue les champs récupérés via le Controller, et on créé un champ par tour de boucle, en fonction de la table 'employe'
?>

<form method="post" action="" enctype="multipart/form-data">
    <?php foreach($fields as $key => $value): ?>
        <div class="form-group text-center">
            <div class="col-md-2 alert alert-info">
                <label for="<?= $value['Field'] ?>"><?= $value['Field'] ?></label>
            </div>
            <?php 
                if($value['Field'] !== "avatar") : 
            ?>
            <input type="text" class="form-control" id="<?= $value['Field'] ?>" name="<?= $value['Field'] ?>" placeholder="Entrer <?= $value['Field']; ?>" value="<?= ($op == 'update') ? $values[$value['Field']] : '' ?>">
            <?php
                endif;
            ?>
        </div>
    <?php endforeach; ?>
   
    <br>
    <br>
    <input type="submit" class="col-md-12 btn btn-dark">
</form>