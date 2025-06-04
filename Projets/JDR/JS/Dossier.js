const cover = document.querySelector('.cover');
const pages = document.querySelectorAll('.page');
const prevButton = document.getElementById('prev-btn');
const nextButton = document.getElementById('next-btn');

let currentPage = 0;

function updatePages() {
    pages.forEach((page, index) => {
        if (index === 0) {
            // Gestion de la couverture
            if (currentPage === 0) {
                cover.classList.remove('open'); // Couverture fermée
            } else {
                cover.classList.add('open'); // Couverture ouverte
            }
        } else {
            // Gestion des autres pages
            if (index === currentPage) {
                page.classList.remove('hidden');
            } else {
                page.classList.add('hidden');
            }
        }
    });
}

prevButton.addEventListener('click', () => {
    if (currentPage > 0) {
        currentPage--;
        updatePages();
    }
});

nextButton.addEventListener('click', () => {
    if (currentPage < pages.length - 1) {
        currentPage++;
        updatePages();
    }
});

// Initialisation
updatePages();