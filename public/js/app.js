const btnMenu = document.querySelector('.logo-menu');
const menu = document.querySelector('.liste-nav');

btnMenu.addEventListener('click', function(){
    menu.classList.toggle('active');
})


const allLinks = document.querySelectorAll('.item-nav');

allLinks.forEach(function(item){

    item.addEventListener('click', function(){
        menu.classList.toggle('active');
    })

})
/*
document.body.onload=function(){
    nbr=3;
    p=0;
    image=['im1.jpg','im2.jpg','graphiste-2.jpg']
    container=document.getElementById('container');
    container.style.width=(500*nbr)+'px';
    for(i=1;i<=nbr;i++){
        div=document.createElement('div');
        div.className='photo';
        div.style.backgroundImage="url('image/"+image[i]+"')";
        container.appendChild(div);




    }
    while(p>-nbr+1){
        p--;

       container.style.transform="translate("+p*500+"px)";
        container.style.transition=" 1s";


    }

}
*/
// Variables globales
let compteur = 0; // Compteur qui permet de connaître l'image sur laquelle on se trouve
let timer, elements, slides, slideWidth, speed, transition;

window.onload = () => {
    // On récupère le diaporama
    const diapo = document.querySelector(".diapo");
    // On récupère le data-speed
    speed = diapo.dataset.speed;
    transition = diapo.dataset.transition;

    elements = document.querySelector(".elements");

    // On clone la 1ère image
    let firstImage = elements.firstElementChild.cloneNode(true);

    // On injecte le clone à la fin du diapo
    elements.appendChild(firstImage);

    slides = Array.from(elements.children);

    // On récupère la largeur d'une slide
    slideWidth = diapo.getBoundingClientRect().width;

    // On récupère les flèches
    let next = document.querySelector("#nav-droite");
    let prev = document.querySelector("#nav-gauche");

    // On gère le clic
    next.addEventListener("click", slideNext);
    prev.addEventListener("click", slidePrev);

    // On automatise le défilement
    timer = setInterval(slideNext, speed);

    // On gère l'arrêt et la reprise
    diapo.addEventListener("mouseover", stopTimer);
    diapo.addEventListener("mouseout", startTimer);
}

/**
 * Cette fonction fait défiler le diaporama vers la droite
 */
function slideNext(){
    // On incrémente le compteur
    compteur++;
    elements.style.transition = transition+"ms linear";

    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;

    // On attend la fin de la transition et on "rembobine" de façon cachée
    setTimeout(function(){
        if(compteur >= slides.length - 1){
            compteur = 0;
            elements.style.transition = "unset";
            elements.style.transform = "translateX(0)";
        }
    }, transition);
}

/**
 * Cette fonction fait défiler le diaporama vers la gauche
 */
function slidePrev(){
    // On décrémente le compteur
    compteur--;
    elements.style.transition = transition+"ms linear";

    if(compteur < 0){
        compteur = slides.length - 1;
        let decal = -slideWidth * compteur;
        elements.style.transition = "unset";
        elements.style.transform = `translateX(${decal}px)`;
        setTimeout(slidePrev, 1);
    }

    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;

}

function stopTimer(){
    clearInterval(timer);
}

function startTimer(){
    timer = setInterval(slideNext, speed);
}
