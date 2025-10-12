const coverFront = document.querySelector('.cover-front');
const coverBack = document.querySelector('.cover-back');
const allPages = document.querySelectorAll('.page');
const prevButton = document.getElementById('prev-btn');
const nextButton = document.getElementById('next-btn');

let currentPage = 0;
const totalPages = allPages.length;

function updatePages() {
    allPages.forEach((page, index) => {
        page.classList.remove('hidden', 'left', 'open');
        
        if (index === 0) {
            // Couverture de début
            if (currentPage === 0) {
                coverFront.style.zIndex = '10';
                coverFront.classList.remove('open');
            } else {
                coverFront.classList.add('open');
                coverFront.style.zIndex = '1';
            }
        } else if (index === totalPages - 1) {
            // Couverture de fin
            if (currentPage === totalPages - 1) {
                coverBack.style.zIndex = '10';
                coverBack.classList.remove('hidden');
            } else {
                coverBack.classList.add('hidden');
                coverBack.style.zIndex = '0';
            }
        } else {
            // Pages de contenu (index 1 à totalPages-2)
            if (index < currentPage) {
                // Pages déjà lues : à gauche avec z-index bas
                page.classList.add('left');
                page.style.zIndex = '2';
            } else if (index === currentPage) {
                // Page actuelle : visible au centre avec z-index moyen
                page.classList.remove('hidden', 'left');
                page.style.zIndex = '5';
            } else {
                // Pages futures : cachées derrière
                page.classList.add('hidden');
                page.style.zIndex = '3';
            }
        }
    });
    
    console.log('Current page:', currentPage); // Pour debug
}

prevButton.addEventListener('click', () => {
    if (currentPage > 0) {
        currentPage--;
        updatePages();
    }
});

nextButton.addEventListener('click', () => {
    if (currentPage < totalPages - 1) {
        currentPage++;
        updatePages();
    }
});

// Initialisation
updatePages();