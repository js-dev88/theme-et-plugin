<?php

/*
  Plugin Name: cjm_Contact
  Plugin URI:
  Description: Plugin de contact
  Version: 1.0
  Author: Groupe 16
  Author URI:
 */

class Cjm_contact_form{


function __construct(){
    add_shortcode('cjm_contact_form', array($this, 'shortcode'));
  /*  add_action('wp_enqueue_scripts', array($this, 'enqueuestyle'));
    add_action('wp_enqueue_scripts', array($this, 'enqueuescript'));*/
}

public function contact_form(){
    ?>

    
    <div id="contactform">
     <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
     		 <h1>Nous contacter</h1>
			 
		<p>
            <label for="contname" class="nom">Nom</label>
            <br /><input  id="contname" name="contname" type="text">
            <span id="msg_nom"></span>
        </p>
		<p>
            <label for="email">Email</label>
            <br /><input id="email" name="email" type="email" onBlur="notEmpty(this);verifConfMail(this)" onFocus="init(this)">
            <span id="msg_email"></span>
        </p>
        <p>
            <label for="sujet" class="sujet">Sujet</label>
            <br /><input onBlur="notEmpty(this)" onFocus="init(this)" id="sujet" name="sujet" type="text">
            <span id="msg_sujet"></span>
        </p>
        <p>
            <br /><textarea onBlur="notEmpty(this)" onFocus="init(this)" id="message" name="message" rows="10" cols="80" placeholder="Entrez votre message ici."></textarea>
           <span id="msg_message"></span>
        </p>
        <p>
            <input type="submit" value="Envoyer" class="button-success florian-button "/>
        </p>



     </form>
    </div>
    <?php

}
function shortcode(){

        ob_start();



        $this->contact_form();


        return ob_get_clean();

    }
}	

new Cjm_contact_form;