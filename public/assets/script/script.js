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

function acit() {
    var section = document.getElementById('Activités');
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth'
        });
        localStorage.removeItem('redirected1');
    } else {
        if (!localStorage.getItem('redirected1')) {
            localStorage.setItem('redirected1', 'true');
            window.location.href = "?page=main.index";
        }
    }
}

function ulm() {
    var section = document.getElementById('ULM');
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth'
        });
        localStorage.removeItem('redirected');
    } else {
        if (!localStorage.getItem('redirected')) {
            localStorage.setItem('redirected', 'true');
            window.location.href = "?page=main.index";
        }
    }
}



window.onload = function () {
    if (localStorage.getItem('redirected')) {
        ulm();
    } else if (localStorage.getItem('redirected1')) {
        acit()
    } else {
        console.log('no redirection');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    let index = 0;
    const items1 = document.querySelectorAll('.carousel-item1');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');

    items1[0].classList.add('active');

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
});

var coll = document.querySelectorAll(".btn.btn-link");
coll.forEach((btn) => {
    btn.addEventListener("click", function () {
        var arrowIcon = this.querySelector('.fas');
        arrowIcon.classList.toggle('rotate');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var images = ['i1', 'i2', 'i3', 'i4', 'i5'];
    var texts = {
        'i1': 'L’entretien des ULM est compris dans le service par défaut de location, lors de la location de ces derniers',
        'i2': 'Notre équipe s’occupe de tout, et monte votre ULM en amont du vol, afin de bénéficeier d’une expérience avancé',
        'i3': 'Un service de location d’emplacements sont disponible dans le cas d’une utilisation de votre propre ULM !',
        'i4': 'Nous avons la possibilité de vous accueillir à proximité de l’aéroclub pour y passez une merveilleuse nuit :',
        'i5': 'Un service de restauration est proposés tous les week-ends, à un moindre coût et de qualité.'
    };

    images.forEach(function (imageId) {
        var li = document.getElementById(imageId);

        li.addEventListener('click', function (e) {
            var popup = li.querySelector('div');
            if (popup) {
                li.removeChild(popup);
            } else {
                var popupHTML = `
                <div style="
                    position: absolute;
                    left: ${li.offsetLeft}px;
                    top: ${li.offsetTop + 10}px;
                    background-color: #fff;
                    width: 50%;
                    border-radius: 10px;
                    padding: 10px;
                    color:black;
                    text-align: center;
                    z-index:1000;">
                    ${texts[imageId] || 'Erreur'}
                </div>
            `;
                li.insertAdjacentHTML('beforeend', popupHTML);
            }
        });
    });
});