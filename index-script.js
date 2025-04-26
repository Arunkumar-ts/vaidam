// servicesToggele
var servicesToggele=false;
function servicesToggeleOn(){
    servicesToggele=!servicesToggele;
    servicesToggeleFunction();
}
function servicesToggeleOff(){
    servicesToggele=false;
    servicesToggeleFunction();
}
function servicesToggeleFunction(){
    if(servicesToggele){
        document.querySelector(".services").style.display="block";
    }
    else{
        document.querySelector(".services").style.display="none";
    }
}

// viewToggle
var viewToggele=true;
function viewToggle(event){
    if(viewToggele){
        event.target.textContent="View Less -";
    }
    else{
        event.target.textContent="View More +";
    }
    viewToggele=!viewToggele;
}
