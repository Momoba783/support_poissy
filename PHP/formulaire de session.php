<?php

session_start();

if($_POST)
{
    $_SESSION['pseudo'] = $_POST['pseudo'];
}

if(isset($_SESSION['pseudo']))
{
    echo "votre pseudo est : " . $_SESSION['pseudo'];
} else{
    echo '<form method ="post" action="">
    <label>Pseudo</label>
    <input type="text" name="pseudo"><br>
   <input type="submit" value="envoyer">
   </form>';
}