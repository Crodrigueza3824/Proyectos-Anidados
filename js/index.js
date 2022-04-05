const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");


navToggle.addEventListener('click', () =>{
    navMenu.classList.toggle("nav-menu_visible");

    if(navMenu.classList.contains("nav-menu_visible")){
        navToggle.setAttribute("aria-label", "Cerrar menú");
    }else {
        navToggle.setAttribute("aria-label", "Abrir menú");
    }
});



const circleToggle1 = document.querySelector(".dot");
const circleToggle2 = document.querySelector(".dot1");
const circleToggle3 = document.querySelector(".dot2")
const circleToggle4 = document.querySelector(".dot3");
const buttonNext = document.querySelector(".next1");
const division1 = document.querySelector(".div1");
const division2 = document.querySelector(".div2");
const division3 = document.querySelector(".div3");
const division4 = document.querySelector(".div4");
const buttonNext2 = document.querySelector(".next2");
const buttonPrevious = document.querySelector(".previous1");
const buttonPrevious1 = document.querySelector(".previous2");
const buttonDivision = document.querySelector(".button2");
const buttonDivision1 = document.querySelector(".button3");
const submitButton = document.querySelector(".submit1");


circleToggle1.addEventListener("click", ()=>{
    if(circleToggle1.classList.contains("fa-regular")){
        circleToggle1.classList.remove("fa-regular");
        circleToggle1.classList.add("fa-solid");
        division2.classList.remove("visible");
        division2.classList.add("notVisible");
        division1.classList.remove("notVisible");
        division1.classList.add("visible");
        if(buttonNext.classList.contains("buttonNotVisible")){
            buttonNext.classList.remove("buttonNotVisible");
            buttonNext.classList.add("buttonVisible");
            buttonDivision.classList.remove("buttonVisibile");
            buttonDivision.classList.add("buttonNotVisible");
            buttonDivision1.classList.remove("buttonVisible");
            buttonDivision1.classList.add("buttonNotVisible");            
        }
        if(submitButton.classList.contains("buttonVisible")){
            submitButton.classList.remove("buttonVisible");
            submitButton.classList.add("buttonNotVisible");
        }

        if(division3.classList.contains("visible")){
            division3.classList.remove("visible");
            division3.classList.add("notVisible");

        }
        if(division2.classList.contains("visible")){
            division2.classList.remove("visible");
            division2.classList.add("notVisible");

        }
        if(division4.classList.contains("visible")){
            division4.classList.remove("visible");
            division4.classList.add("notVisible");

        }         
        if(circleToggle2.classList.contains("fa-solid")){
            circleToggle2.classList.remove("fa-solid");
            circleToggle2.classList.add("fa-regular");
        }else if(circleToggle3.classList.contains("fa-solid")){
            circleToggle3.classList.remove("fa-solid");
            circleToggle3.classList.add("fa-regular");
        }else if(circleToggle4.classList.contains("fa-solid")){
            circleToggle4.classList.remove("fa-solid");
            circleToggle4.classList.add("fa-regular");
        }
    }
});

circleToggle2.addEventListener("click", ()=>{
    if(circleToggle2.classList.contains("fa-regular")){
        circleToggle2.classList.remove("fa-regular");
        circleToggle2.classList.add("fa-solid");
        division1.classList.remove("visible");
        division1.classList.add("notVisible");
        division2.classList.remove("notVisible");
        division2.classList.add("visible");
        if(buttonNext.classList.contains("buttonVisible")){
            buttonNext.classList.remove("buttonVisible");
            buttonNext.classList.add("buttonNotVisible");
            buttonDivision1.classList.remove("buttonVisible");
            buttonDivision1.classList.add("buttonNotVisible");            
            buttonDivision.classList.remove("buttonNotVisible");
            buttonDivision.classList.add("buttonVisible");
        }
        if(buttonDivision1.classList.contains("buttonVisible")){
            buttonDivision1.classList.remove("buttonVisible");
            buttonDivision1.classList.add("buttonNotVisible");              
        }
        
        if(division1.classList.contains("visible")){
            division1.classList.remove("visible");
            division1.classList.add("notVisible");

        }
        if(division3.classList.contains("visible")){
            division3.classList.remove("visible");
            division3.classList.add("notVisible");

        }
        if(division4.classList.contains("visible")){
            division4.classList.remove("visible");
            division4.classList.add("notVisible");

        }         
        if(circleToggle3.classList.contains("fa-solid")){
            circleToggle3.classList.remove("fa-solid");
            circleToggle3.classList.add("fa-regular");
        }else if(circleToggle1.classList.contains("fa-solid")){
            circleToggle1.classList.remove("fa-solid");
            circleToggle1.classList.add("fa-regular");
        }else if(circleToggle4.classList.contains("fa-solid")){
            circleToggle4.classList.remove("fa-solid");
            circleToggle4.classList.add("fa-regular");
        }
    }
});

circleToggle3.addEventListener("click", ()=>{
    if(circleToggle3.classList.contains("fa-regular")){
        circleToggle3.classList.remove("fa-regular");
        circleToggle3.classList.add("fa-solid");
        if(division3.classList.contains("notVisible")){
            division3.classList.remove("notVisible");
            division3.classList.add("visible");

        }     

        if(buttonNext.classList.contains("buttonVisible")){
            buttonNext.classList.remove("buttonVisible");
            buttonNext.classList.add("buttonNotVisible");
            buttonDivision.classList.remove("buttonNotVisible");
            buttonDivision.classList.add("buttonVisible");
        }

        if(buttonDivision1.classList.contains("buttonVisible")){
            buttonDivision1.classList.remove("buttonVisible");
            buttonDivision1.classList.add("buttonNotVisible");            
        }
        
        if(buttonDivision.classList.contains("buttonNotVisible")){
            buttonDivision.classList.remove("buttonNotVisible");
            buttonDivision.classList.add("buttonVisible");
        }
        
        if(division1.classList.contains("visible")){
            division1.classList.remove("visible");
            division1.classList.add("notVisible");

        }
        if(division2.classList.contains("visible")){
            division2.classList.remove("visible");
            division2.classList.add("notVisible");

        }
        if(division4.classList.contains("visible")){
            division4.classList.remove("visible");
            division4.classList.add("notVisible");

        }                    
        if(circleToggle2.classList.contains("fa-solid")){
            circleToggle2.classList.remove("fa-solid");
            circleToggle2.classList.add("fa-regular");
        }else if(circleToggle1.classList.contains("fa-solid")){
            circleToggle1.classList.remove("fa-solid");
            circleToggle1.classList.add("fa-regular");
        }else if(circleToggle4.classList.contains("fa-solid")){
            circleToggle4.classList.remove("fa-solid");
            circleToggle4.classList.add("fa-regular");
        }
    }
});

circleToggle4.addEventListener("click", ()=>{
    if(division4.classList.contains("notVisible")){
        division4.classList.remove("notVisible");
        division4.classList.add("visible");

    }     

    if(buttonNext.classList.contains("buttonVisible")){
        buttonNext.classList.remove("buttonVisible");
        buttonNext.classList.add("buttonNotVisible");
        buttonDivision1.classList.remove("buttonNotVisible");
        buttonDivision1.classList.add("buttonVisible");        
    } 
    if(buttonDivision.classList.contains("buttonVisible")){
        buttonDivision.classList.remove("buttonVisible");
        buttonDivision.classList.add("buttonNotVisible");
        buttonDivision1.classList.remove("buttonNotVisible");
        buttonDivision1.classList.add("buttonVisible");
    }    
    if(division1.classList.contains("visible")){
        division1.classList.remove("visible");
        division1.classList.add("notVisible");

    }
    if(division3.classList.contains("visible")){
        division3.classList.remove("visible");
        division3.classList.add("notVisible");

    }
    if(division2.classList.contains("visible")){
        division2.classList.remove("visible");
        division2.classList.add("notVisible");

    }    
    if(circleToggle4.classList.contains("fa-regular")){
        circleToggle4.classList.remove("fa-regular");
        circleToggle4.classList.add("fa-solid");
        if(circleToggle2.classList.contains("fa-solid")){
            circleToggle2.classList.remove("fa-solid");
            circleToggle2.classList.add("fa-regular");
        }else if(circleToggle3.classList.contains("fa-solid")){
            circleToggle3.classList.remove("fa-solid");
            circleToggle3.classList.add("fa-regular");
        }else if(circleToggle1.classList.contains("fa-solid")){
            circleToggle1.classList.remove("fa-solid");
            circleToggle1.classList.add("fa-regular");
        }
    }
});

buttonNext.addEventListener("click", ()=>{
    circleToggle1.classList.remove("fa-solid");
    circleToggle1.classList.add("fa-regular");
    circleToggle2.classList.remove("fa-regular");
    circleToggle2.classList.add("fa-solid");
    division1.classList.remove("visible");
    division1.classList.add("notVisible");
    division2.classList.remove("notVisible");
    division2.classList.add("visible");
    buttonNext.classList.remove("buttonVisible");
    buttonNext.classList.add("buttonNotVisible");
    buttonDivision.classList.remove("buttonNotVisible");
    buttonDivision.classList.add("buttonVisible");

});


buttonNext2.addEventListener("click", ()=>{
    if(circleToggle3.classList.contains("fa-solid")){
        circleToggle3.classList.remove("fa-solid");
        circleToggle3.classList.add("fa-regular");
        circleToggle4.classList.remove("fa-regular");
        circleToggle4.classList.add("fa-solid");
        division3.classList.remove("visible");
        division3.classList.add("notVisible");
        division4.classList.remove("notVisible");
        division4.classList.add("visible");
        buttonDivision.classList.remove("buttonVisible");
        buttonDivision.classList.add("buttonNotVisible");
        buttonDivision1.classList.remove("buttonNotVisible");
        buttonDivision1.classList.add("buttonVisible");

    }   

    if(circleToggle2.classList.contains("fa-solid")){
        circleToggle2.classList.remove("fa-solid");
        circleToggle2.classList.add("fa-regular");
        circleToggle3.classList.remove("fa-regular");
        circleToggle3.classList.add("fa-solid");
        division2.classList.remove("visible");
        division2.classList.add("notVisible");
        division3.classList.remove("notVisible");
        division3.classList.add("visible");


    }
 
});

buttonPrevious.addEventListener("click", ()=>{
    if(circleToggle2.classList.contains("fa-solid")){
        circleToggle2.classList.remove("fa-solid");
        circleToggle2.classList.add("fa-regular");
        circleToggle1.classList.remove("fa-regular");
        circleToggle1.classList.add("fa-solid");
        division2.classList.remove("visible");
        division2.classList.add("notVisible");
        division3.classList.remove("notVisible");
        division3.classList.add("visible");
        buttonDivision.classList.remove("buttonVisible");
        buttonDivision.classList.add("buttonNotVisible");
        buttonNext.classList.remove("buttonNotVisible");
        buttonNext.classList.add("buttonVisible");

    }
    if(circleToggle3.classList.contains("fa-solid")){
        circleToggle3.classList.remove("fa-solid");
        circleToggle3.classList.add("fa-regular");
        circleToggle2.classList.remove("fa-regular");
        circleToggle2.classList.add("fa-solid");
        division3.classList.remove("visible");
        division3.classList.add("notVisible");
        division2.classList.remove("notVisible");
        division2.classList.add("visible");


    }
        
});


buttonPrevious1.addEventListener("click", ()=>{
    if(circleToggle4.classList.contains("fa-solid")){
        circleToggle4.classList.remove("fa-solid");
        circleToggle4.classList.add("fa-regular");
        circleToggle3.classList.remove("fa-regular");
        circleToggle3.classList.add("fa-solid");
        division4.classList.remove("visible");
        division4.classList.add("notVisible");
        division3.classList.remove("notVisible");
        division3.classList.add("visible");
        buttonDivision1.classList.remove("buttonVisible");
        buttonDivision1.classList.add("buttonNotVisible");
        buttonDivision.classList.remove("buttonNotVisible");
        buttonDivision.classList.add("buttonVisible");

    } 
});

