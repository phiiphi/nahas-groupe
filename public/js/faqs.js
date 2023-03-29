const faq1 = document.getElementById("faq1_");
document.getElementById("faqbtn1_").addEventListener("click", displayFaq1Info__);
const togglePlusIcon1 = document.getElementById('plusIcon1');


const faq2 = document.getElementById('faq2_');
document.getElementById("faqbtn2_").addEventListener("click", displayFaq2Info);
const togglePlusIcon2 = document.getElementById('plusIcon2');

const faq3 = document.getElementById('faq3_');
document.getElementById("faqbtn3_").addEventListener("click", displayFaq3Info);
const togglePlusIcon3 = document.getElementById('plusIcon3');

const faq4 = document.getElementById('faq4_');
document.getElementById("faqbtn4_").addEventListener("click", displayFaq4Info);
const togglePlusIcon4 = document.getElementById('plusIcon4');

const faq5 = document.getElementById('faq5_');
document.getElementById("faqbtn5_").addEventListener("click", displayFaq5Info);
const togglePlusIcon5 = document.getElementById('plusIcon5');


const faq6 = document.getElementById('faq6_');
document.getElementById("faqbtn6_").addEventListener("click", displayFaq6Info);
const togglePlusIcon6 = document.getElementById('plusIcon6');



function displayFaq1Info__(){
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
