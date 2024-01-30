 // Fonction pour marquer la page active dans la barre de navigation
function markActivePage() {
    var currentPage = window.location.pathname.split("/").pop(); // Obtient le nom de la page à partir de l'URL
    var navLinks = $(".navbar-nav .nav-item a");

    navLinks.each(function () {
        var linkPage = $(this).attr("href");

        if (linkPage === currentPage) {
            $(this).parent().addClass("active");
        }
    });
}

function loadAndSearch() {
    function performSearch(input) {
        $.ajax({
            url: 'rechercher.php',
            type: 'GET',
            data: { query: input },
            dataType: 'html', // Le résultat est du HTML
            success: function(data) {
                // Mettez à jour le contenu de l'élément où vous souhaitez afficher les résultats
                $('#searchResults').html(data);
            },
            error: function(error) {
                console.error('Erreur lors de la recherche:', error);
            }
        });
    }

    // Gestionnaire d'événement pour le clic sur le bouton de recherche
    $("#searchButton").on("click", function (e) {
        e.preventDefault();
        var inputValue = $("#searchInput").val();
        performSearch(inputValue);
    });

    // Gestionnaire d'événement pour la touche "Entrée" dans le champ de recherche
    $("#searchInput").on("keypress", function (e) {
        if (e.which === 13) {
            e.preventDefault();
            var inputValue = $(this).val();
            performSearch(inputValue);
        }
    });
}
