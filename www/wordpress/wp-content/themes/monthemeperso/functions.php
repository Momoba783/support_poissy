   
   <?php 
   
   add_action('widgets_init', 'monthemeperso_init_sidebar');

   function monthemeperso_init_sidebar(){
       register_sidebar(array(
           'name' => __('haut-gauche', 'monthemeperso'),
           'id' => 'haut-gauche',
           'description' => __('Region en haut a gauche', 'monthemeperso')
       ));
 
    register_sidebar(array(
        'name' => __('haut-droite', 'monthemeperso'),
        'id' => 'haut-droite',
        'description' => __('Region en haut a droite', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('entete', 'monthemeperso'),
        'id' => 'entete',
        'description' => __('Entete de ma page', 'monthemeperso')
    ));

    register_sidebar(array(
        'name' => __('bas-gauche', 'monthemeperso'),
        'id' => 'bas-gauche',
        'description' => __('Region en bas a gauche', 'monthemeperso')
    ));

 register_sidebar(array(
     'name' => __('bas-droite', 'monthemeperso'),
     'id' => 'bas-droite',
     'description' => __('Region en bas a droite', 'monthemeperso')
 ));

}

add_action('widgets_init', 'monthemeperso_init_menu');

function monthemeperso_init_menu(){
    register_nav_menu('primary',__('primary Menu', 'monthemeperso'));
}
