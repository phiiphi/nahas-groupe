const button = document.querySelector("#menu-button");
const menu = document.querySelector("#menu");
const menu_close = document.querySelector("#menu-close");
const hood = document.querySelector("#hood");




button.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    if (button.classList.contains('fa-bars')) {
        button.classList.remove('fa-bars');
        button.classList.add('fa-xmark');
    }
    else 
    {
        button.classList.add('fa-bars');
        button.classList.remove('fa-xmark');
    }
});

document.getElementById("credit_card").addEventListener("click", displayCreditCardInfo);
document.getElementById("payment").addEventListener("click", displayPaymentCardInfo);
document.getElementById("card_benefits").addEventListener("click", displayCardBenefitsInfo);
document.getElementById("wallet").addEventListener("click", displayWalletsInfo);
document.getElementById("investment").addEventListener("click", displayInvestmentsCardInfo);
document.getElementById("plumbing").addEventListener("click", displayplumbingCardInfo);

const investment_block = document.getElementById('investment_block');
const credit_block = document.getElementById('credit_block');
const payment_block = document.getElementById('payment_block');
const card_block = document.getElementById('card_block');
const wallet_block = document.getElementById('wallet_block');
const plumbing_block = document.getElementById('plumbing_block');

const investment = document.getElementById('investment');
const credit_card = document.getElementById('credit_card');
const payment = document.getElementById('payment');
const card_benefits = document.getElementById('card_benefits');
const wallet = document.getElementById('wallet');
const plumbing = document.getElementById('plumbing');


function displayCreditCardInfo(){
    investment_block.style.display = 'none'
    card_block.style.display = 'none'
    wallet_block.style.display = 'none'
    payment_block.style.display = 'none'
    credit_block.style.display = 'flex'

    investment.style.color = 'black'
    investment.style.textDecoration = 'none'

    card_benefits.style.color = 'black'
    card_benefits.style.textDecoration = 'none'

    payment.style.color = 'black'
    payment.style.textDecoration = 'none'

    wallet.style.color = 'black'
    wallet.style.textDecoration = 'none'

    plumbing.style.color = 'black'
    plumbing.style.textDecoration = 'none'

    credit_card.style.color = '#ffbb68'
    credit_card.style.textDecoration = 'underline'
    credit_card.style.textUnderlineOffset = '8px'
    
}


function displayplumbingCardInfo(){
    investment_block.style.display = 'none'
    card_block.style.display = 'none'
    wallet_block.style.display = 'none'
    payment_block.style.display = 'none'
    credit_block.style.display = 'none'
    plumbing_block.style.display = 'flex'

    

    investment.style.color = 'black'
    investment.style.textDecoration = 'none'

    card_benefits.style.color = 'black'
    card_benefits.style.textDecoration = 'none'

    payment.style.color = 'black'
    payment.style.textDecoration = 'none'

    wallet.style.color = 'black'
    wallet.style.textDecoration = 'none'

    credit_card.style.color = 'black'
    credit_card.style.textDecoration = 'none'

    plumbing.style.color = '#ffbb68'
    plumbing.style.textDecoration = 'underline'
    plumbing.style.textUnderlineOffset = '8px'
    
}


function displayInvestmentsCardInfo(){
    investment_block.style.display = 'flex'
    credit_block.style.display = 'none'
    card_block.style.display = 'none'
    wallet_block.style.display = 'none'
    payment_block.style.display = 'none'
    plumbing_block.style.display = 'none'

    credit_card.style.color = 'black'
    credit_card.style.textDecoration = 'none'

    card_benefits.style.color = 'black'
    card_benefits.style.textDecoration = 'none'

    payment.style.color = 'black'
    payment.style.textDecoration = 'none'

    wallet.style.color = 'black'
    wallet.style.textDecoration = 'none'

    investment.style.color = '#ffbb68'
    investment.style.textDecoration = 'underline'
    investment.style.textUnderlineOffset = '8px'

    plumbing.style.color = 'black'
    plumbing.style.textDecoration = 'none'

    
}

function displayPaymentCardInfo(){
    investment_block.style.display = 'none'
    credit_block.style.display = 'none'
    card_block.style.display = 'none'
    wallet_block.style.display = 'none'
    payment_block.style.display = 'flex'
    plumbing_block.style.display = 'none'


    payment.style.color = '#ffbb68'
    payment.style.textDecoration = 'underline'
    payment.style.textUnderlineOffset = '8px'

    credit_card.style.color = 'black'
    credit_card.style.textDecoration = 'none'

    card_benefits.style.color = 'black'
    card_benefits.style.textDecoration = 'none'

    wallet.style.color = 'black'
    wallet.style.textDecoration = 'none'

    investment.style.color = 'black'
    investment.style.textDecoration = 'none'

    plumbing.style.color = 'black'
    plumbing.style.textDecoration = 'none'
    // investment.style.textUnderlineOffset = '8px'

    
}

function displayCardBenefitsInfo(){
    investment_block.style.display = 'none'
    credit_block.style.display = 'none'
    card_block.style.display = 'flex'
    wallet_block.style.display = 'none'
    payment_block.style.display = 'none'
    plumbing_block.style.display = 'none'


    card_benefits.style.color = '#ffbb68'
    card_benefits.style.textDecoration = 'underline'
    card_benefits.style.textUnderlineOffset = '8px'

    credit_card.style.color = 'black'
    credit_card.style.textDecoration = 'none'

    payment.style.color = 'black'
    payment.style.textDecoration = 'none'

    wallet.style.color = 'black'
    wallet.style.textDecoration = 'none'

    investment.style.color = 'black'
    investment.style.textDecoration = 'none'
    // investment.style.textUnderlineOffset = '8px'

    plumbing.style.color = 'black'
    plumbing.style.textDecoration = 'none'

    
}

function displayWalletsInfo(){
    investment_block.style.display = 'none'
    credit_block.style.display = 'none'
    card_block.style.display = 'none'
    wallet_block.style.display = 'flex'
    payment_block.style.display = 'none'
    plumbing_block.style.display = 'none'


    wallet.style.color = '#ffbb68'
    wallet.style.textDecoration = 'underline'
    wallet.style.textUnderlineOffset = '8px'

    credit_card.style.color = 'black'
    credit_card.style.textDecoration = 'none'

    payment.style.color = 'black'
    payment.style.textDecoration = 'none'

    card_benefits.style.color = 'black'
    card_benefits.style.textDecoration = 'none'

    investment.style.color = 'black'
    investment.style.textDecoration = 'none'
    // investment.style.textUnderlineOffset = '8px'

    plumbing.style.color = 'black'
    plumbing.style.textDecoration = 'none'
    
}







document.getElementById("mobile_credit_card").addEventListener("click", displayCreditCardInfoM);
document.getElementById("mobile_payment").addEventListener("click", displayPaymentCardInfoM);
document.getElementById("mobile_card_benefits").addEventListener("click", displayCardBenefitsInfoM);
document.getElementById("mobile_wallet").addEventListener("click", displayWalletsInfoM);
document.getElementById("mobile_investment").addEventListener("click", displayInvestmentsCardInfoM);
document.getElementById("mobile_plumbing").addEventListener("click", displayPlumbingCardInfoM);

const mobile_investment_block = document.getElementById('mobile_investment_block');
const mobile_credit_block = document.getElementById('mobile_credit_block');
const mobile_payment_block = document.getElementById('mobile_payment_block');
const mobile_card_block = document.getElementById('mobile_card_block');
const mobile_wallet_block = document.getElementById('mobile_wallet_block');
const mobile_plumbing_block = document.getElementById('mobile_plumbing_block');

const mobile_investment = document.getElementById('mobile_investment');
const mobile_credit_card = document.getElementById('mobile_credit_card');
const mobile_payment = document.getElementById('mobile_payment');
const mobile_card_benefits = document.getElementById('mobile_card_benefits');
const mobile_wallet = document.getElementById('mobile_wallet');
const mobile_plumbing = document.getElementById('mobile_plumbing');





function displayPlumbingCardInfoM(){
    mobile_investment_block.style.display       = 'none'
    mobile_card_block.style.display             = 'none'
    mobile_wallet_block.style.display           = 'none'
    mobile_payment_block.style.display          = 'none'
    mobile_credit_block.style.display           = 'none'
    mobile_plumbing_block.style.display         = 'block'

    mobile_investment.style.color               = 'black'
    mobile_investment.style.textDecoration      = 'none'

    mobile_card_benefits.style.color            = 'black'
    mobile_card_benefits.style.textDecoration   = 'none'

    mobile_payment.style.color                  = 'black'
    mobile_payment.style.textDecoration         = 'none'

    mobile_wallet.style.color                   = 'black'
    mobile_wallet.style.textDecoration          = 'none'

    mobile_credit_card.style.color              = 'black'
    mobile_credit_card.style.textDecoration     = 'none'

    mobile_plumbing.style.color                 = '#ffbb68'
    mobile_plumbing.style.textDecoration        = 'underline'
    mobile_plumbing.style.textUnderlineOffset   = '8px'
    
}

function displayCreditCardInfoM(){
    mobile_investment_block.style.display = 'none'
    mobile_card_block.style.display = 'none'
    mobile_wallet_block.style.display = 'none'
    mobile_payment_block.style.display = 'none'
    mobile_credit_block.style.display = 'block'

    mobile_investment.style.color = 'black'
    mobile_investment.style.textDecoration = 'none'

    mobile_card_benefits.style.color = 'black'
    mobile_card_benefits.style.textDecoration = 'none'

    mobile_payment.style.color = 'black'
    mobile_payment.style.textDecoration = 'none'

    mobile_wallet.style.color = 'black'
    mobile_wallet.style.textDecoration = 'none'

    mobile_plumbing.style.color = 'black'
    mobile_plumbing.style.textDecoration = 'none'

    mobile_credit_card.style.color = '#ffbb68'
    mobile_credit_card.style.textDecoration = 'underline'
    mobile_credit_card.style.textUnderlineOffset = '8px'
    
}

function displayInvestmentsCardInfoM(){
    mobile_investment_block.style.display = 'block'
    mobile_credit_block.style.display = 'none'
    mobile_card_block.style.display = 'none'
    mobile_wallet_block.style.display = 'none'
    mobile_payment_block.style.display = 'none'
    
    mobile_credit_card.style.color = 'black'
    mobile_credit_card.style.textDecoration = 'none'

    mobile_card_benefits.style.color = 'black'
    mobile_card_benefits.style.textDecoration = 'none'

    mobile_payment.style.color = 'black'
    mobile_payment.style.textDecoration = 'none'

    mobile_wallet.style.color = 'black'
    mobile_wallet.style.textDecoration = 'none'

    mobile_plumbing.style.color = 'black'
    mobile_plumbing.style.textDecoration = 'none'

    mobile_investment.style.color = '#ffbb68'
    mobile_investment.style.textDecoration = 'underline'
    mobile_investment.style.textUnderlineOffset = '8px'

    
}

function displayPaymentCardInfoM(){
    mobile_investment_block.style.display = 'none'
    mobile_credit_block.style.display = 'none'
    mobile_card_block.style.display = 'none'
    mobile_wallet_block.style.display = 'none'
    mobile_payment_block.style.display = 'block'

    mobile_payment.style.color = '#ffbb68'
    mobile_payment.style.textDecoration = 'underline'
    mobile_payment.style.textUnderlineOffset = '8px'

    mobile_credit_card.style.color = 'black'
    mobile_credit_card.style.textDecoration = 'none'

    mobile_card_benefits.style.color = 'black'
    mobile_card_benefits.style.textDecoration = 'none'

    mobile_plumbing.style.color = 'black'
    mobile_plumbing.style.textDecoration = 'none'

    mobile_wallet.style.color = 'black'
    mobile_wallet.style.textDecoration = 'none'

    mobile_investment.style.color = 'black'
    mobile_investment.style.textDecoration = 'none'
    // mobile_investment.style.textUnderlineOffset = '8px'

    
}

function displayCardBenefitsInfoM(){
    mobile_investment_block.style.display = 'none'
    mobile_credit_block.style.display = 'none'
    mobile_card_block.style.display = 'block'
    mobile_wallet_block.style.display = 'none'
    mobile_payment_block.style.display = 'none'

    mobile_card_benefits.style.color = '#ffbb68'
    mobile_card_benefits.style.textDecoration = 'underline'
    mobile_card_benefits.style.textUnderlineOffset = '8px'

    mobile_credit_card.style.color = 'black'
    mobile_credit_card.style.textDecoration = 'none'

    mobile_payment.style.color = 'black'
    mobile_payment.style.textDecoration = 'none'

    mobile_plumbing.style.color = 'black'
    mobile_plumbing.style.textDecoration = 'none'

    mobile_wallet.style.color = 'black'
    mobile_wallet.style.textDecoration = 'none'

    mobile_investment.style.color = 'black'
    mobile_investment.style.textDecoration = 'none'
    // mobile_investment.style.textUnderlineOffset = '8px'

    
}

function displayWalletsInfoM(){
    mobile_investment_block.style.display = 'none'
    mobile_credit_block.style.display = 'none'
    mobile_card_block.style.display = 'none'
    mobile_wallet_block.style.display = 'block'
    mobile_payment_block.style.display = 'none'

    mobile_wallet.style.color = '#ffbb68'
    mobile_wallet.style.textDecoration = 'underline'
    mobile_wallet.style.textUnderlineOffset = '8px'

    mobile_credit_card.style.color = 'black'
    mobile_credit_card.style.textDecoration = 'none'

    mobile_payment.style.color = 'black'
    mobile_payment.style.textDecoration = 'none'

    mobile_card_benefits.style.color = 'black'
    mobile_card_benefits.style.textDecoration = 'none'

    mobile_plumbing.style.color = 'black'
    mobile_plumbing.style.textDecoration = 'none'

    mobile_investment.style.color = 'black'
    mobile_investment.style.textDecoration = 'none'
    // mobile_investment.style.textUnderlineOffset = '8px'

    
}



