<?php

function registrar_menus() {
  register_nav_menus(
    array(
      'menu-esq' => __( 'Menu Esquerda' ),
      'menu-dir' => __('Menu Direita')
    )
  );
}
add_action( 'init', 'registrar_menus' );

?>