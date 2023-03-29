const product_engieneer = document.getElementById('product_engieneer');
document.getElementById("careerBtn1").addEventListener("click", displaySoftwareEngInfo);
const togglePlusIcon11 = document.getElementById('car_plusIcon1');


const civil_engieneer = document.getElementById('civil_engieneer');
document.getElementById("careerBtn2").addEventListener("click", displayCivilEngInfo);
const togglePlusIcon22 = document.getElementById('car_plusIcon2');

function displaySoftwareEngInfo(){
    // faq1.style.display = 'flex'    
    product_engieneer.classList.toggle("hidden");

    if (togglePlusIcon11.classList.contains('fa-plus')) {
        togglePlusIcon11.classList.remove('fa-plus');
        togglePlusIcon11.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon11.classList.add('fa-plus');
        togglePlusIcon11.classList.remove('fa-minus');
    }

}

function displayCivilEngInfo(){
    // faq1.style.display = 'flex'    
    civil_engieneer.classList.toggle("hidden");

    if (togglePlusIcon22.classList.contains('fa-plus')) {
        togglePlusIcon22.classList.remove('fa-plus');
        togglePlusIcon22.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon22.classList.add('fa-plus');
        togglePlusIcon22.classList.remove('fa-minus');
    }

}