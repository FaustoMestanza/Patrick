document.addEventListener('DOMContentLoaded', function () {
    const clubs = document.querySelectorAll('.club');
    const articles = document.querySelectorAll('.hidden-article');

    clubs.forEach((club, index) => {
        club.addEventListener('mouseenter', () => {
            // Oculta todos los artículos
            articles.forEach((article) => {
                article.classList.add('hidden-article');
            });

            // Muestra solo el artículo correspondiente
            articles[index].classList.remove('hidden-article');
        });
    });
});