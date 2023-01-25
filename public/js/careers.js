const product_engieneer = document.getElementById('product_engieneer');
document.getElementById("careerBtn1").addEventListener("click", displaySoftwareEngInfo);
const togglePlusIcon1 = document.getElementById('plusIcon1');


const civil_engieneer = document.getElementById('civil_engieneer');
document.getElementById("careerBtn2").addEventListener("click", displayCivilEngInfo);
const togglePlusIcon2 = document.getElementById('plusIcon2');

function displaySoftwareEngInfo(){
    // faq1.style.display = 'flex'    
    product_engieneer.classList.toggle("hidden");

    if (togglePlusIcon1.classList.contains('fa-plus')) {
        togglePlusIcon1.classList.remove('fa-plus');
        togglePlusIcon1.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon1.classList.add('fa-plus');
        togglePlusIcon1.classList.remove('fa-minus');
    }

}

function displayCivilEngInfo(){
    // faq1.style.display = 'flex'    
    civil_engieneer.classList.toggle("hidden");

    if (togglePlusIcon2.classList.contains('fa-plus')) {
        togglePlusIcon2.classList.remove('fa-plus');
        togglePlusIcon2.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon2.classList.add('fa-plus');
        togglePlusIcon2.classList.remove('fa-minus');
    }

}