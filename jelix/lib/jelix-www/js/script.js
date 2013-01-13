//Fichier script.js contenant la fonction confirmDelete()

function confirmDelete(){

        if(confirm('Do you really want to delete this entry ?')){
            return true;
        }else{
            return false;
        }

    }

$(document).ready(function (){
    
    function confirmDelete(){

        if(confirm('Do you really want to delete this entry ?')){
            return true;
        }else{
            return false;
        }

    }
    
    //Appel d'un petit module bootstrap dynamisant le menu de gauche
    //La classe "active" se met à jour en fonction de la zone
    //survolée par l'utilisateur
    $('body').scrollspy();
    
    // listen for scroll
    var positionElementInPage = $('#sidebar').offset().top;
    $(window).scroll(
        function() {
            if ($(window).scrollTop() >= positionElementInPage) {
                // fixed
                $('#sidebar').addClass("floatable");
            } else {
                // relative
                $('#sidebar').removeClass("floatable");
            }
        }
    );
    
});

