const topBar = document.querySelector('.topbar');


// Variable para almacenar altura del Topbar
let topbarHeight = topBar.offsetHeight;

// Padding basado en la altura del contenido principal
const mainContent = document.querySelector('.main-content');
mainContent.style.paddingTop = `${topbarHeight + 20}px`;


//Esto es para el boton de play de aqui para abajo es todo para el boton
const containerConcentracion = document.querySelectorAll(
    '.card-concentracion'
);
const containerSpotifyPlaylists = document.querySelectorAll(
    '.card-spotify-playlists'
);

// Función que se va a repetir
const createButton = card => {
    // Crear el botón
    const button = document.createElement('button');
    button.innerHTML = '<i class="fa-solid fa-play"></i>';

    card.appendChild(button);


    button.style.display = 'none';
    button.classList.add('btn-play');


    card.addEventListener('mouseover', () => {
        button.style.display = 'block';
    });

    card.addEventListener('mouseout', () => {
        button.style.display = 'none';
    });
};

containerConcentracion.forEach(card => {
    createButton(card);
});

containerSpotifyPlaylists.forEach(card => {
    createButton(card);
});
