let perfi = document.querySelector(".perfiModi");
let perfiFoti = document.querySelector(".logoInicioSession");

let menuDesplegable = document.querySelector(".center");

perfi.addEventListener("click", ()=>{
    menuDesplegable.classList.toggle("menuVisible");

});


perfiFoti.addEventListener("click", ()=>{
    menuDesplegable.classList.toggle("menuVisible");

})