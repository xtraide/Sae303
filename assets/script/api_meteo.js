document.addEventListener('DOMContentLoaded', () => {
    const apiKey = '84b8fdb1518d9300c156b409f25d1465';
    const ville = 'Vesoul';
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${ville}&appid=${apiKey}&units=metric&lang=fr`;

    const infoTemperature = document.getElementById('temp-info');
    const infoDescription = document.querySelector('.descri-info');
    const infoIcon = document.querySelector('.weather-icon'); // Ajout d'un élément pour l'icône
    const h1 = document.getElementById('h1-card')
    async function récupérerDonnées() {
        try {
            const réponse = await fetch(apiUrl);
            const données = await réponse.json();

            if (réponse.ok) {
                const température = données.main.temp;
                const description = données.weather[0].description;
                const iconCode = données.weather[0].icon;
                const htmlTempérature = `<p>Température à ${ville}: ${température} °C</p>`;
                const htmlDescription = `<p>Description : ${description}</p>`;

                infoTemperature.innerHTML = htmlTempérature;
                infoDescription.innerHTML = htmlDescription;

                const card = document.querySelector('.card');
            
                if (description.includes('pluie')) {
                    card.style.backgroundColor = 'lightblue';
                } else if (description.includes('nuage')) {
                    card.style.backgroundColor = 'gray';
                } else if (description.includes('clair')) {
                    card.style.backgroundColor = 'skyblue';
                } else if (description.includes('couvert')) {

                    card.style.background = 'linear-gradient(0deg, rgba(41,41,41,1) 0%, rgba(187,187,187,1) 100%)';
                    infoDescription.style.color = 'white'
                    infoTemperature.style.color = 'white'
                    h1.style.color = 'white'
                }
            
                const iconUrl = `http://openweathermap.org/img/w/${iconCode}.png`;
                infoIcon.innerHTML = `<img src="${iconUrl}" alt="Weather Icon">`;
            } else {
                console.error(`Erreur de l'API : ${données.message}`);
                infoTemperature.innerHTML = '<p>Erreur de l\'API</p>';
                infoDescription.innerHTML = '<p>Erreur de l\'API</p>';
            }
        } catch (erreur) {
            console.error('Erreur lors de la récupération des données météo', erreur);
            infoTemperature.innerHTML = '<p>Erreur lors de la récupération des données météo</p>';
            infoDescription.innerHTML = '<p>Erreur lors de la récupération des données météo</p>';
        }
    }
    setInterval(récupérerDonnées, 600000);

    récupérerDonnées();
});
