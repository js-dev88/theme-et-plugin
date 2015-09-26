<?php

/*
  Plugin Name: cjm_Inscription
  Plugin URI:
  Description: Plugin d'inscriptions
  Version: 1.0
  Author: Groupe 16
  Author URI:
 */

 class Cjm_inscription_form{

    // attributs

      
      private $_insfirstname;
      private $_insname;
      private $_insemail;
      private $_insconfemail;
      private $_instel;
      private $_insadress;
      private $_inscp;
      private $_insville;
      private $_inspassword;
      private $_insconfpassword;

function __construct(){
    add_shortcode('cjm_inscription_form', array($this, 'shortcode'));
    add_action('wp_enqueue_scripts', array($this, 'enqueuestyle'));
    add_action('wp_enqueue_scripts', array($this, 'enqueuescript'));
    add_filter('manage_users_columns',array($this,'theme_add_user_info_column'));
    add_action('manage_users_custom_column',array($this,'theme_show_user_tel_data'),10,3);

}
function enqueuestyle(){
        wp_enqueue_style('instyle', plugins_url('plg_inscription/instyle.css'));

}

function enqueuescript(){
        wp_enqueue_script( 'plg-inscription',plugins_url('plg_inscription/inscription.js'),'1.0');
}

function theme_add_user_info_column( $columns ) {
        $columns['tel'] = __( 'Téléphone');
        $columns['adresse'] = __( 'Adresse');   
        $columns['ville'] = __( 'Ville');   
        $columns['cp'] = __( 'Code postal');       
        return $columns;
} 
function theme_show_user_tel_data( $value, $column_name, $user_id ) {
     return esc_attr__(get_user_meta( $user_id, $column_name, true ));   
}

//form
public function inscription_form(){
    ?>
   <!-- onSubmit="return verif()"-->
   <div id="inscriptionform">
   
    <form id="formlightbox" method="post"  action= "<?php echo esc_url($_SERVER['REQUEST_URI']); ?>"  onSubmit="return verif()" >
     
            


            <div id ="champObl">Tous les champs sont obligatoires</div>

            <div class = formgroup>
                <label for="_insfirstname">Prénom</label>
                <div id="validFirstname" class="inv">Format Prénom Invalide</div>
                <input name ="_insfirstname"  id="_insfirstname" type="text" class="inputForm"
                value="<?php echo(isset($_POST['_insfirstname']) ? $_POST['_insfirstname'] : null);?>"
                placeholder="Prénom" 
                onBlur="notEmpty(this);verifFirstname(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_insname">Nom</label>
                <div id="validName" class="inv">Format Nom Invalide</div>
                <input name ="_insname"  id="_insname" type="text" 
                value="<?php echo(isset($_POST['_insname']) ? $_POST['_insname'] : null);?>"
                placeholder="Nom" 
                onBlur="notEmpty(this);verifName(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_insemail">E-mail</label>
                <div id="validMAil" class="inv">Format Mail Invalide</div>
                <input name ="_insemail" id="_insemail" type="email" class="inputForm"
                value="<?php echo(isset($_POST['_insemail']) ? $_POST['_insemail'] : null);?>"
                placeholder="E-mail" 
                onBlur="notEmpty(this);verifMail(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_insconfemail">Confirmation E-mail</label>
                <div id="formInvMail" class="inv">Confirmation E-mail Invalide</div>
                <input name ="_insconfemail" id="_insconfemail" type="email" class="inputForm"
                value="<?php echo(isset($_POST['_insconfemail']) ? $_POST['_insconfemail'] : null);?>"
                placeholder="Confirmation E-mail" 
                onBlur="notEmpty(this);verifConfMail(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_instel">Téléphone</label>
                <div id="validTel" class="inv">Téléphone Invalide</div>
                <input name ="_instel" id="_instel" type="text" class="inputForm"
                value="<?php echo(isset($_POST['_instel']) ? $_POST['_instel'] : null);?>"
                placeholder="Téléphone" 
                onBlur="notEmpty(this);verifTel(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_insadress">Adresse</label>
                <div id="validAdress" class="inv">Adresse Invalide</div>
                <input name ="_insadress" id="_insadress" type="text" class="inputForm"
                value="<?php echo(isset($_POST['_insadress']) ? $_POST['_insadress'] : null);?>"
                placeholder="Adresse"
                onBlur="notEmpty(this);verifAdress(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_inscp">Code Postal</label>
                <div id="validCp" class="inv">Code Postal Invalide</div>
                <input name ="_inscp" id="_inscp" type="text" class="inputForm"
                value="<?php echo(isset($_POST['_inscp']) ? $_POST['_inscp'] : null);?>"
                placeholder="Code Postal" 
                onBlur="notEmpty(this); verifCp(this);" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_insville">Ville</label>
                <div id="validVille" class="inv">Ville Invalide</div>
                <input name ="_insville" id="_insville" type="text" class="inputForm"
                value="<?php echo(isset($_POST['_insville']) ? $_POST['_insville'] : null);?>"
                placeholder="Ville" 
                onBlur="notEmpty(this);verifVille(this);" onFocus="init(this)" required/>
            </div>
            <div class = formgroup>
                <label for="_inspassword">Mot de passe</label>
                <div id="validPassword" class="inv">Format Mot de passe Invalide</div>
                <input name ="_inspassword" id="_inspassword" type="text" class="inputForm"
                value="<?php echo(isset($_POST['_inspassword']) ? $_POST['_inspassword'] : null);?>"
                placeholder="Mot de passe" 
                onBlur="notEmpty(this)" onFocus="init(this)" required/>
            </div>

            <div class = formgroup>
                <label for="_insconfpassword">Confirmation Mot de passe</label>
                <div id="formInvPassword" class="inv">Confirmation mot de passe Invalide</div>
                <input name ="_insconfpassword" id="_insconfpassword" type="password" class="inputForm"
                value="<?php echo(isset($_POST['_insconfpassword']) ? $_POST['_insconfpassword'] : null);?>"
                placeholder="Confirmation Mot de passe" 
                onBlur="notEmpty(this);verifConfPassword(this)" onFocus="init(this)" required/>
            </div>

            <input name ="submitInscription" type="submit" value="S'inscrire" class="button-success florian-button"/>

          </form>
        </div>
    <?php
}

function validation()
    {
        $s="testmsgerror";
 //verifications php       
        

        if (empty($this->firstname) || empty($this->lastname) || empty($this->email) ||
            empty($this->confemail) || empty($this->tel) || empty($this->adress) ||
            empty($this->cp) || empty($this->ville)|| empty($this->password) ||
            empty($this->confpassword)) {
            echo '<p class="'.$s.'">';
            return new WP_Error('field', 'Un champ est vide');
            echo '</p>';
        }

        if( preg_match('/["()\/\*\$!§:;,.*\\µ%£¤\]{}\[<\|>]|[0-9]/', $this->firstname) == 1){
            echo '<p class="'.$s.'">';
            return new WP_Error('invalidfirstname', 'Format du prénom invalide');
            echo '</p>';
        }

        if( preg_match('/["()\/\*\$!§:;,.*\\µ%£¤\]{}\[<\|>]|[0-9]/', $this->lastname) == 1){
            echo '<p class="'.$s.'">';
            return new WP_Error('invalidlastname', 'Format du nom invalide');
            echo '</p>';
        }

        if( preg_match('/["()\/\*\$!§:;,*\\µ%£¤\]{}\[<\|>]/', $this->cp) == 1){
            echo '<p class="'.$s.'">';
            return new WP_Error('invalidcp', 'Format du code postal invalide');
            echo '</p>';
        }
        if( preg_match('/["()\/\*\$!§:;*µ\\%£¤\]{}\[<\|>]/', $this->adresse) == 1){
            echo '<p class="'.$s.'">';
            return new WP_Error('invalid adresse', 'Format de l\'adresse invalide');
            echo '</p>';
        }
        if( preg_match('/["()\/\*\$!§:;*µ\\%£¤\]{}\[<\|>]|[0-9]/', $this->ville) == 1){
            echo '<p class="'.$s.'">';
            return new WP_Error('invalidville', 'Format de la ville invalide');
            echo '</p>';
        }


              
        if (strlen($this->password) < 5) {
            echo '<p class="'.$s.'">';
            return new WP_Error('password', 'Veuillez trouver un mot de passe plus long');
            echo '</p>';
        }

        if (!is_email($this->email)) {
            echo '<p class="'.$s.'">';
            return new WP_Error('email_invalid', 'Email non valide');
            echo '</p>';
        }

        if (email_exists($this->email)) {
            echo '<p class="'.$s.'">';
            return new WP_Error('email', 'Email déjà utilisé');
            echo '</p>';
        }

        if (intval( $this->tel) == false){
            echo '<p class="'.$s.'">';
             return new WP_Error('tel', 'Format téléphone invalide');
             echo '</p>';
        }

        if(($this->email) != ($this->confemail))
        {
            echo '<p class="'.$s.'">';
            return new WP_Error('confemail', 'Les adresses ne correspondent pas');
            echo '</p>';
        }

        if(($this->password) != ($this->confpassword))
        {
            echo '<p class="'.$s.'">';
            return new WP_Error('confpassword', 'Les mots de passe ne correspondent pas');
            echo '</p>';
        }


    }

function inscription()
{//esc_attr => echappe les caracteres
 //update_user_meta => rajoute un enregistrement dans user meta data

    $userdata = array(
        'user_login' => esc_attr($this->email),
        'user_email' => esc_attr($this->email),
        'user_pass' => $this->password,
        'first_name' => esc_attr($this->firstname),
        'last_name' => esc_attr($this->lastname)
    );

    if (is_wp_error($this->validation())) {
        echo '<div style="margin-bottom: 6px" class="btn btn-block btn-lg btn-danger">';
        echo '<strong>' . $this->validation()->get_error_message() . '</strong>';
        echo '</div>';
    } else {
        $register_user = wp_insert_user($userdata); // renvoie l'id
        if (!is_wp_error($register_user)) {

            $userMetaUpdate = array(
                'tel' => esc_attr($this->tel),
                'adresse' => esc_attr($this->adress),
                'cp' => esc_attr($this->cp),
                'ville' => esc_attr($this->ville)
            );

            foreach($userMetaUpdate as $k => $v)
            {
               $update_user =  update_user_meta($register_user,$k,$v);

               if ($update_user==false)
               {
                    echo '<div style="margin-bottom: 6px" class="btn btn-block btn-lg btn-danger">';
                    echo '<strong>Erreur d\'insertion base de données('.$k.')</strong>';
                    echo '</div>';
               }
               

            }
			
            echo '<div style="margin-bottom: 6px" class="btn btn-block btn-lg btn-danger">';
            echo '<strong>Registration complete. Goto <a href="' . wp_login_url() . '">login page</a></strong>';
            echo '</div>';
        } else {
            echo '<div style="margin-bottom: 6px" class="btn btn-block btn-lg btn-danger">';
            echo '<strong>' . $register_user->get_error_message() . '</strong>';
            echo '</div>';
        }
    }

}

function shortcode(){

        ob_start();

        if($_POST['submitInscription']) {
            
             $_POST['_inspassword']=  esc_attr($_POST['_inspassword']);
             $_POST['_insconfpassword'] = esc_attr($_POST['_insconfpassword']);

            $this->firstname = $_POST['_insfirstname'];
            $this->lastname = $_POST['_insname'];
            $this->email = $_POST['_insemail'];
            $this->confemail = $_POST['_insconfemail'];
            $this->tel = $_POST['_instel'];
            $this->adress = $_POST['_insadress'];
            $this->cp = $_POST['_inscp'];
            $this->ville = $_POST['_insville'];
            $this->password =  $_POST['_inspassword'];
            $this->confpassword = $_POST['_insconfpassword'];
            
            $this->validation();
            $this->inscription();

        }

        $this->inscription_form();
        return ob_get_clean();
    }
}


new Cjm_inscription_form;


