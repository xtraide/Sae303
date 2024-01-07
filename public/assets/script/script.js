let index = 0;
const items1 = document.querySelectorAll('.carousel-item1');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

window.onload = function () {
    items1[0].classList.add('active');
}

nextButton.addEventListener('click', () => {
    items1[index].classList.remove('active');
    index = (index + 1) % items1.length;
    items1[index].classList.add('active');
});

prevButton.addEventListener('click', () => {
    items1[index].classList.remove('active');
    index = (index - 1 + items1.length) % items1.length;
    items1[index].classList.add('active');
});




// Fonction pour définir un cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fonction pour obtenir un cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Fonction pour afficher le popup de cookies
function showCookiePopup() {
    var cookiePopup = document.createElement('div');
    cookiePopup.textContent = 'Ce site utilise des cookies pour améliorer votre expérience. En continuant à utiliser ce site, vous acceptez leur utilisation.';
    cookiePopup.style.position = 'fixed';
    cookiePopup.style.bottom = '0';
    cookiePopup.style.left = '0';
    cookiePopup.style.backgroundColor = '#fff';
    cookiePopup.style.padding = '10px';
    cookiePopup.style.zIndex = '1000';
    cookiePopup.style.borderRadius = '10px';
    document.body.appendChild(cookiePopup);

    var acceptButton = document.createElement('button');
    acceptButton.textContent = 'Accepter';
    acceptButton.onclick = function () {
        setCookie('cookiesAccepted', 'true', 30);
        document.body.removeChild(cookiePopup);
    };
    cookiePopup.appendChild(acceptButton);
}


document.addEventListener('DOMContentLoaded', function () {
    if (!getCookie('cookiesAccepted')) {
        showCookiePopup();
    }
});

function changeDisplay(selectedBtn) {
    // Réinitialise le style des boutons et divs
    console.log("coucou");
    document.getElementById('btn1').style.fontSize = '1.2rem';
    document.getElementById('btn2').style.fontSize = '1.2rem';
    document.getElementById('btn3').style.fontSize = '1.2rem';

    document.getElementById('ctn1').style.display = 'none';
    document.getElementById('ctn2').style.display = 'none';
    document.getElementById('ctn3').style.display = 'none';

    // Applique le style sélectionné
    document.getElementById(`btn${selectedBtn}`).style.fontSize = '3rem';
    document.getElementById(`ctn${selectedBtn}`).style.display = 'block';
}