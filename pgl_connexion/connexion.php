<?php

/*
  Plugin Name: cjm_Connexion
  Plugin URI:
  Description: Plugin de connexion
  Version: 1.0
  Author: Groupe 16
  Author URI:
 */

class Cjm_connexion_form{


function __construct(){
    add_shortcode('cjm_connexion_form', array($this, 'shortcode'));
  /*  add_action('wp_enqueue_scripts', array($this, 'enqueuestyle'));
    add_action('wp_enqueue_scripts', array($this, 'enqueuescript'));*/
}

public function connexion_form(){

    $args = array(
       'redirect' => home_url(),
       'id_username' => 'user',
       'id_password' => 'pass',
      );

   wp_login_form($args);




}
function shortcode(){

        ob_start();


        if (is_user_logged_in()) {
          echo"<div class='connexionform'>";
          $currentuser = wp_get_current_user();
          if($currentuser->user_login=="admin")
          {
            echo "<p>Vous êtes connecté Mr.Admin</p>";
          }
          else {
            echo "<p>Vous êtes connecté ".$currentuser->last_name." ".$currentuser->first_name." </p>";
          }

          echo "<input type='button' name ='pgl_deconnexion' value='Se déconnecter' class='florian-button button-success' onclick='deconnexion_button()'></input>";
          echo "<script type='text/javascript'>
          var button = document.getElementById('connexion_button');
          button.value='Déconnexion';
          button.onclick='deconnexion_button()';
          </script>";

          echo "</div>";

          // wp_logout();

        }
        else {
          $this->connexion_form();
        }



        return ob_get_clean();

    }
}

new Cjm_connexion_form;
