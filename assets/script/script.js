(function(){

    const carousel = document.querySelector('.carousel');
    const prev = document.querySelector('#prev');
    const next = document.querySelector('#next');
        
    let faceCount = 3;

    let stepCount = 30;

    let count = 0;

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
            count = -60
        }

        carousel.style.transform = `rotateY(${x}deg)`;
    }


    
}());
