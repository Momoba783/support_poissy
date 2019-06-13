<?php
namespace Controller;

class Controller
{
    private $db;
    public function __construct()
    {
        $this->db = new \model\EntityRepository; // permet de récupérer une connexion à la BDD qui se trouve dans le fichier EntityRepository.php
    }
    public function handlerRequest() // permet de savoir ce que l'internaute demande (afficher/modifier/supprimer), action de l'internaute
    {
        $op = isset($_GET['op']) ? $_GET['op'] : NULL; // si op est définie dans l'URL, on le récupère, on le stock dans $op sinon, si rien n'est défini dans l'URL, on stock NULL dans $op
        try
        {
            if($op == 'add' || $op == 'update') $this->save($op); // si on ajoute ou modifie un employé, on appel la méthode save()
            elseif($op == 'select') $this->select(); // si on selectionne un employé, on appel la méthode select()
            elseif($op == 'delete') $this->delete(); // si on supprime un employé, on appel la méthode delete()
            else $this->selectAll(); // permettra d'afficher l'ensemble des employés
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage()); // permet d'envoyer un message et d'arreter le script si il y a une erreur dans le bloc try
        }
    }
    public function selectAll()
    {
        // echo 'Methode selectAll()';
        // $r = $this->db->selectAll();
        // echo '<pre>'; print_r($r); echo '</pre>';
        $this->render('layout.php', 'donnees.php', array(
            'title' => 'Toute les données',
            'donnees' => $this->db->selectAll(),
            'fields' => $this->db->getFields(),
            'id' => 'id' . ucfirst($this->db->table) // affiche idEmploye, cela servira a pointé sur l'indice idEmploye du tableau de données envoyer dans le layout pour les liens voir/modifier/supprimer
        ));
    }
    // $this->render('layout.php', 'donnees.php' , 'paramètres');
    public function render($layout, $template, $parameters = array())
    {
        extract($parameters);  // permet d'avoir des indices du tableau comme variable
        ob_start(); // commence la temporisation, ob_start() démarrer la temporisation de sortie
        // require "view/donnees.php";
        require "view/$template";
        
        //$content =  require "view/$template";
        $content = ob_get_clean(); // tout ce qui se trouve dans le template sera stocké dans $content 
        //$content = "view/donnees.php";

        ob_start(); // temporiser la sortie de l'affichage
        // require "view/layout.php";
        require "view/$layout";
        return ob_end_flush(); // libérer l'affichage et fait tout apparaitre sur la page 
    }

    public function save($op)
    {
        $title = $op;

        if($_POST)
        {
            $r = $this->db->save(); // lorsque l'on valide le formulaire d'ajout, on execute la méthode save() du fichier EntityRepository.php
        }
        $this->render('layout.php', 'donnees-form.php', array(
            "title" => "Donnée : $title",
            "op" => $op,
            "fields" => $this->db->getFields() // c'est ce qui va nous permettre de récupérer le nom des champs pour les définir de façon générique
        ));
    }
}