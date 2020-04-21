//  ************************* BOITE MODALE JS**********************

let modal = null
//    Variable  qui permet de savoir quelle boîte modale est actuellement ouverte,
//    et qui va  servir a savoir laquelle fermer !

//    Création d'une fonction qui prend en compte l'évènement (e)
const OPENMODAL = function (e) {
    e.preventDefault()

    const TARGET = document.querySelector(e.target.getAttribute('href'))
    TARGET.style.display = null
    TARGET.removeAttribute('aria-hidden')
    TARGET.setAttribute('aria-modal', 'true')
    modal = TARGET
    modal.addEventListener('click', CLOSEMODAL)
    modal.querySelector('.js-modal-close').addEventListener('click', CLOSEMODAL)
    modal.querySelector('.js-modal-stop').addEventListener('click', STOPPROPAGATION)
}
//    ligne 15 : recherche de l'élément qui ferme la boîte (bouton) et au clic,
//    ferme la boîte

const CLOSEMODAL = function (e) {
    if (modal === null) return
    e.preventDefault()
    modal.style.display = "none"
    modal.setAttribute('aria-hidden', 'true')
    modal.removeAttribute('aria-modal')
    modal.removeEventListener('click', CLOSEMODAL)
    modal.querySelector('.js-modal-close').removeEventListener('click', CLOSEMODAL)
    modal.querySelector('.js-modal-stop').removeEventListener('click', STOPPROPAGATION)
    modal = null
}

const STOPPROPAGATION = function (e) {
    e.stopPropagation()
}
//    cette fonction permet de stopper l'évènnement du 
//   "clic n'importe ou qui ferme la boîte"


document.querySelectorAll('.js-modal').forEach(a => {
    a.addEventListener('click', OPENMODAL)
})

window.addEventListener('keydown', function (e) {
    if (e.key === "Escape" || e.key === "Esc" || e.key === "esc") {
        CLOSEMODAL(e)
    }
})
//     (ligne 26) selectionne tous les liens avc la class js-modal,
//    (ligne 27) pour chaque lien, ajoute un eventListener, 
//    (ligne 27) et au Clic, appelle la fonction openModal.
//    (ligne 9)Puis on désigne l'élément cible du lien : l'attribut 
//    href en créant la constante TARGET
//    (ligne 10) Puis on affiche la boîte modale et on met un display : null pour 
//    annuler le display none du html, et le css prendra le relais grâce 
//    au display :flex.
//    ligne 14 : au clic, ferme la boîte
//    ligne 16-18-19-20-21-22-23 : il faut dc maintenant créer une fonction qui ferme la boîte
//    et qui globalement fait l'inverse de la fonction OPENMODAL
//    ligne 17 : si on essaie de fermer une modal qui n'éxiste pas, alors ne fais rien !
//    ligne 44 : Fonction permettant de fermer la boîte en utilisant une touche du clavier,
//    ici la touche "Escape" ou "Esc" suivant les claviers, ou "esc" pour Mac ! 


// ***********************MENU************************

// $(document).click(function() {
// 	$("#merch").mouseover(function(e) {
// 		$(".subMenu3").show();
// 	});
// 	$(".subMenu").on("click",function(e) {
// 		$(".subMenu3").hide();
// 	});
// });

// ***********************MENU************************
$(document).ready(function () {
    $("#merch").click(function () {
        $(".subMenu3").toggle();
    });
    $("#tools").click(function () {
        $(".subMenu4").toggle();
    });
});

// **********************SLIDER JS 1*********************

let slide = ["public/images/slide_1.jpg", "public/images/slide_2.jpg", "public/images/slide_3.jpg", "public/images/slide_4.png"];

let i = 0;
setInterval(function () {
    document.getElementById("slide2").src = slide[i];
    i++;
    if (i == 4) i = 0;
}, 3000);

function changeSlide(sens) {
    i = i + sens;
    if (i < 0)
        i = slide.length - 1;

    if (i > slide.length - 1)
        i = 0;

    document.getElementById("slide2").src = slide[i];
}


// let caption = ["Le merchandising : combiner esthétisme et commercialité !", "Une identité visuelle forte !","Susciter de l'émotion pour atirer le client...", "La vitrine : véritable carte de visite du magasin !"];
// let x =0;

// setIntervalCaption(function(){
//     document.getElementById("p2") = caption[x];
//     x++;
//     if (x == 4) x = 0;
// }, 5000);

// function changeCaption(sens) {     
//     x = x + sens;
//     if (x < 0)         
//     x = caption.length - 1; 

//     if (x > caption.length - 1)        
//     x = 0; 

// document.getElementById("p2") = caption[x];
// }

// *************ANIMATION CONTENT2***************

$(document).ready(function () {
    $(".more").click(function () {
        $(".ref").slideToggle("slow");
    });
});

