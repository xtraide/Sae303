(function() {
    const carousel = document.querySelector('.carousel');
    const prev = document.querySelector('#prev');
    const next = document.querySelector('#next');
    
    let faceCount = 3;
    let stepCount = 30;
    let count = -30;


    nextStep(count);

    prev.addEventListener('click', () => {
        let stepForward = count += stepCount;
        nextStep(stepForward);
    });

    next.addEventListener('click', () => {
        let stepReward = count -= stepCount;
        nextStep(stepReward);
    });

    function nextStep(x) {
        if (x < -60) {
            x = 0;
            count = 0;

        } else if (x >= 0 && x !== 0) {
            x = -60;
            count = -60;

        }

        carousel.style.transform = `rotateY(${x}deg)`;
    }
}());


var coll = document.querySelectorAll(".btn.btn-link");
coll.forEach((btn) => {
  btn.addEventListener("click", function () {
    var arrowIcon = this.querySelector('.fas');
    arrowIcon.classList.toggle('rotate');
  });
});

function toggleResponsive() {
    var navbar = document.getElementById("myNavbar");
    if (navbar.className === "navbar") {
      navbar.className += " responsive";
    } else {
      navbar.className = "navbar";
    }
  }

  let index = 0;
const items1 = document.querySelectorAll('.carousel-item1');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

window.onload = function() {
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