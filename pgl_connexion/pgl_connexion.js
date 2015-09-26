jQuery(function($){
  $(document).ready(function(){

    $("label[for='user']").text("Adresse mail").css('font-weight','700');
    $("label[for='pass']").css('font-weight','700');
    $('#login').css('background-color','red');
    $('#wp-submit').removeClass('button-primary').addClass('florian-button button-success');
    $('#loginform').addClass('connexionform');
    $("input[name='connexion']").click(function(){
        var isDisplay = $('#loginform').css('display');
        if (isDisplay=='block') {
            $('#loginform').hide();
        }
        else {
          $("input[name='connexion']").hover(function(){
              $('#loginform').parent().parent().css('display','block');
            });
          //affiche le formulaire de connexion
          $('#loginform').show();
          // var parentTag = $('#loginform').parent().parent().get(0).tagName;
          $('#loginform').parent().parent().css('display','block');
          /*faire référence au ul parent qui passse en display none
          si le bouton connexion n'est pas survolé*/
          // $('#loginform').prepend(document.createTextNode(parentTag));
        }


      });
      $("input[name='connexion']").hover(function(){
          $('#loginform').parent().parent().css('display','none');
        });
















  });







  });

  function deconnexion_button () {
    //$("input[name='pgl_deconnexion']").click(function () {
        document.location.href="http://localhost/florian_wp/wp-login.php?action=logout&amp;_wpnonce=995cc37efe";




    //})
    //;



  }
