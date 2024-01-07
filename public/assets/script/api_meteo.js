document.addEventListener('DOMContentLoaded', () => {
    const ville = 'Vesoul'
    const apiUrl = `../app/api/api.php?ville=${ville}`;
    const infoTemperature = document.getElementById('temp-info');
    const infoConditions = document.getElementById('conditions-info');
    const infoVent = document.getElementById('wind-info');
    const infoNuages = document.getElementById('clouds-info');
    const infoIcone = document.querySelector('.weather-icon');
    const h1 = document.getElementById('h1-card');

    async function récupérerDonnées() {
        try {
            const réponse = await fetch(apiUrl);
            const données = await réponse.json();

            if (réponse.ok) {
                const température = données.main.temp;
                const conditions = données.weather[0].description;
                const vitesseVent = données.wind.speed;
                const nuages = données.clouds.all;
                const codeIcone = données.weather[0].icon;

                const htmlTempérature = `<p>Température à ${ville} : ${température} °C</p>`;
                const htmlConditions = `<p>Conditions : ${conditions}</p>`;
                const htmlVent = `<p>Vitesse du vent : ${vitesseVent} m/s</p>`;
                const htmlNuages = `<p>Nuages : ${nuages}%</p>`;

                infoTemperature.innerHTML = htmlTempérature;
                infoConditions.innerHTML = htmlConditions;
                infoVent.innerHTML = htmlVent;
                infoNuages.innerHTML = htmlNuages;

                const card = document.querySelector('.card');

                if (conditions.includes('pluie')) {

                    card.style.backgroundColor = 'lightblue';
                    card.style.color = 'white';

                } else if (conditions.includes('nuageux') || conditions.includes('nuage')) {

                    const nuages = données.clouds.all;
                    const pourcentageNuages = nuages + '%';
                    const styleGradient = `linear-gradient(0deg, rgba(79,79,79,1) ${pourcentageNuages}, rgba(187,187,187,1) 100%)`;

                    card.style.background = styleGradient;
                    card.style.color = "rgb(241, 241, 241)";


                } else if (conditions.includes('clair') || conditions.includes('dégagé')) {

                    card.style.backgroundColor = 'skyblue';
                    card.style.color = 'white';

                } else if (conditions.includes('brume') || conditions.includes('brouillard')) {

                    card.style.backgroundColor = 'lightgray';
                    card.style.color = 'white';

                } else if (conditions.includes('neige')) {

                    card.style.backgroundColor = 'white';
                    card.style.color = '#fff';
                } else if (conditions.includes('orage') || conditions.includes('tonnerre')) {

                    card.style.backgroundColor = 'darkgray';
                    card.style.color = 'white';
                } else if (conditions.includes('couvert')) {

                    card.style.background = 'linear-gradient(0deg, rgba(41,41,41,1) 0%, rgba(187,187,187,1) 100%)';
                    card.style.color = 'white';

                } else {
                    card.style.backgroundColor = 'red';
                }

                const urlIcone = `http://openweathermap.org/img/w/${codeIcone}.png`;
                infoIcone.innerHTML = `<img src="${urlIcone}" alt="Icône météo">`;
            } else {
                console.error(`Erreur de l'API : ${données.message}`);
                infoTemperature.innerHTML = '<p>Erreur de l\'API</p>';
                infoConditions.innerHTML = '<p>Erreur de l\'API</p>';
                infoVent.innerHTML = '<p>Erreur de l\'API</p>';
                infoNuages.innerHTML = '<p>Erreur de l\'API</p>';
            }
        } catch (erreur) {
            console.error('Erreur lors de la récupération des données météo', erreur);
            infoTemperature.innerHTML = '<p>Erreur lors de la récupération des données météo</p>';
            infoConditions.innerHTML = '<p>Erreur lors de la récupération des données météo</p>';
            infoVent.innerHTML = '<p>Erreur lors de la récupération des données météo</p>';
            infoNuages.innerHTML = '<p>Erreur lors de la récupération des données météo</p>';
        }
    }

    setInterval(récupérerDonnées, 600000);

    récupérerDonnées();
});