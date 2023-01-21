const faq1 = document.getElementById('faq1');
document.getElementById("faqbtn1").addEventListener("click", displayFaq1Info);
const togglePlusIcon1 = document.getElementById('plusIcon1');


const faq2 = document.getElementById('faq2');
document.getElementById("faqbtn2").addEventListener("click", displayFaq2Info);
const togglePlusIcon2 = document.getElementById('plusIcon2');

const faq3 = document.getElementById('faq3');
document.getElementById("faqbtn3").addEventListener("click", displayFaq3Info);
const togglePlusIcon3 = document.getElementById('plusIcon3');

const faq4 = document.getElementById('faq4');
document.getElementById("faqbtn4").addEventListener("click", displayFaq4Info);
const togglePlusIcon4 = document.getElementById('plusIcon4');

const faq5 = document.getElementById('faq5');
document.getElementById("faqbtn5").addEventListener("click", displayFaq5Info);
const togglePlusIcon5 = document.getElementById('plusIcon4');


const faq6 = document.getElementById('faq6');
document.getElementById("faqbtn6").addEventListener("click", displayFaq6Info);
const togglePlusIcon6 = document.getElementById('plusIcon6');



function displayFaq1Info(){
    // faq1.style.display = 'flex'    
    faq1.classList.toggle("hidden");

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

function displayFaq2Info(){
    // faq1.style.display = 'flex'    
    faq2.classList.toggle("hidden");

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

function displayFaq3Info(){
    // faq1.style.display = 'flex'    
    faq3.classList.toggle("hidden");

    if (togglePlusIcon3.classList.contains('fa-plus')) {
        togglePlusIcon3.classList.remove('fa-plus');
        togglePlusIcon3.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon3.classList.add('fa-plus');
        togglePlusIcon3.classList.remove('fa-minus');
    }

}


function displayFaq4Info(){
    // faq1.style.display = 'flex'    
    faq4.classList.toggle("hidden");

    if (togglePlusIcon4.classList.contains('fa-plus')) {
        togglePlusIcon4.classList.remove('fa-plus');
        togglePlusIcon4.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon4.classList.add('fa-plus');
        togglePlusIcon4.classList.remove('fa-minus');
    }

}

function displayFaq5Info(){
    // faq1.style.display = 'flex'    
    faq5.classList.toggle("hidden");

    if (togglePlusIcon5.classList.contains('fa-plus')) {
        togglePlusIcon5.classList.remove('fa-plus');
        togglePlusIcon5.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon5.classList.add('fa-plus');
        togglePlusIcon5.classList.remove('fa-minus');
    }

}

function displayFaq6Info(){
    // faq1.style.display = 'flex'    
    faq6.classList.toggle("hidden");

    if (togglePlusIcon6.classList.contains('fa-plus')) {
        togglePlusIcon6.classList.remove('fa-plus');
        togglePlusIcon6.classList.add('fa-minus');
    }
    else 
    {
        togglePlusIcon6.classList.add('fa-plus');
        togglePlusIcon6.classList.remove('fa-minus');
    }

}
