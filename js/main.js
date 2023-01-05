const DVD = document.querySelector("#DVD");
const Book = document.querySelector("#Book");
const Furniture = document.querySelector("#Furniture");
const Selector = document.querySelector("#productType");
const SwitchNot = document.querySelector("#switchnotification");
const DVDinput = document.querySelector("#size");
const Bookinput = document.querySelector("#weight");
const FurnitureHeightinput = document.querySelector("#height");
const FurnitureWidthinput = document.querySelector("#width");
const FurnitureLengthinput = document.querySelector("#length");
Selector.addEventListener('click', Initialize);

function checkInputValues(){

    if(Selector.selectedIndex === 0){
        DVDinput.required = true;
        Bookinput.required = true;
        FurnitureHeightinput.required = true;
        FurnitureWidthinput.required = true;
        FurnitureLengthinput.required = true;    
    }else if(Selector.selectedIndex === 1){
        DVDinput.required = true;
        Bookinput.required = false;
        FurnitureHeightinput.required = false;
        FurnitureWidthinput.required = false;
        FurnitureLengthinput.required = false; 
    }else if(Selector.selectedIndex === 2){
        DVDinput.required = false;
        Bookinput.required = true;
        FurnitureHeightinput.required = false;
        FurnitureWidthinput.required = false;
        FurnitureLengthinput.required = false; 
    }else if(Selector.selectedIndex === 3){
        DVDinput.required = false;
        Bookinput.required = false;
        FurnitureHeightinput.required = true;
        FurnitureWidthinput.required = true;
        FurnitureLengthinput.required = true; 
    }
}

function ShowOptions(){
    DVD.style.display = "none";
    Book.style.display = "none";
    Furniture.style.display = "none";
    SwitchNot.style.display = "none";

    if(Selector.selectedIndex  === 1)
    {
        DVD.style.display = "block";
    }else if(Selector.selectedIndex  === 2)
    {
        Book.style.display = "block";

    }else if (Selector.selectedIndex  === 3)
    {
        Furniture.style.display = "block";

    }else if (Selector.selectedIndex === 0){
        SwitchNot.style.display = "block";
    }
}

function Initialize(){
    ShowOptions();
    checkInputValues(); 
}

Initialize();
