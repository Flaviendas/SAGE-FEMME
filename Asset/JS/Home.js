// Attente de chargement du Document
$(document).ready(function(){


    // ##################### VARIABLES ############################ //
    
    // Sélection des images du carrousel
    let images = $('#slider img');
    
    // Indice de l'image à afficher à l'initialisation
    let indice = 0;
    
    // Tableaux de sélection des touches
    const NEXT = [33, 38, 39, 107];
    const PREVIOUS = [34, 37, 40, 109];
    const ORIGIN = [13, 27, 32];
    
    
    
    // ################ FONCTION D'AFFICHAGE ###################### //
    
    // Fonction qui rend visible l'image à afficher par son index
    function showPicture(index) {
        // Cacher toutes les images
        images.hide();
        // Afficher l'image correspondant à "index"
        //$(images[index % images.length]).show(); // version alternative
        images.eq(index % images.length).show();
    }
    
    
    // Initialiser le carrousel sur une image
    showPicture(indice);
    
    
    // #################### EVENEMENTS ############################ //
    
    // Clique sur les flèches
    $('.previous').click(() => { showPicture( --indice ) });
    
    $('.next').click(() => { showPicture( ++indice ) });
    
    
    
    // Touches du clavier
    $('body').keydown( (event) => {
        // Version IF
    /*	if (event.which === 39 || 
            event.which === 38 || 
            event.which === 33 ||
            event.which === 107) { showPicture( ++indice ) }
        else if (event.which === 37 || 
                 event.which === 40 || 
                 event.which === 34 ||
                 event.which === 109) { showPicture( --indice ) }
            else if (event.which === 27 || 
                     event.which === 13 || 
                     event.which === 32) 
                {showPicture (indice = 0) }
    */
    
        // Version SWITCH
    /*	switch (event.which) {
            case 33:
            case 38:
            case 39:
            case 107:
                showPicture( ++indice );
                break;
            case 34:
            case 37:
            case 40:
            case 109:
                showPicture( --indice );
                break;
            case 13:
            case 27:
            case 32:
                showPicture (indice = 0);
                break;			
        }*/
    
        // Version in ARRAY
        if (NEXT.includes(event.which)) { 
            showPicture( ++indice ); 
        }
            else if (PREVIOUS.includes(event.which)) { 
                showPicture( --indice ); 
            }
                else if (ORIGIN.includes(event.which)) { 
                    showPicture (indice = 0); 
                }
    
    });
    
    
    
    // Roulette de la souris
    $('#slider').on('wheel', () => {
    
        // version IF
    /*	if (event.deltaY < 0) {
            showPicture( --indice );
        } else {
            showPicture( ++indice );
        }*/
    
        // version TERNAIRE
        (event.deltaY < 0) ? showPicture( --indice ) : showPicture( ++indice );
    });
    
    
    });	