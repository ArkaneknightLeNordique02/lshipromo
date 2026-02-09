<?php 
$header = "Promotions exclusives | LSHIPROMO - Meilleures offres";
$activePage = 'accueil';
$metaDescription = "Découvrez les meilleures promotions du moment sur LSHIPROMO. Offres exclusives par magasin, mises à jour quotidiennement.";
require 'portions/header.php'; 
require 'modele/promotion_Data.php';

// Tri des magasins par nombre d'offres (optionnel)
uasort($promotion, function($a, $b) {
    return count($b) - count($a);
});
?>

<!-- Hero Section améliorée -->
<section class="relative bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 text-white py-16 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:20px_20px]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in">🚀 Promotions en direct</h1>
            <p class="text-xl md:text-2xl opacity-90 mb-8">Les meilleures offres sélectionnées et vérifiées pour vous</p>
            
            <!-- Stats en temps réel -->
            <div class="flex flex-wrap justify-center gap-6 md:gap-10 mt-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-yellow-300"><?php echo count($promotion); ?></div>
                    <div class="text-sm opacity-80">Magasins</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-yellow-300">
                        <?php 
                        $totalOffers = 0;
                        foreach($promotion as $produits) {
                            $totalOffers += count($produits);
                        }
                        echo $totalOffers;
                        ?>
                    </div>
                    <div class="text-sm opacity-80">Offres actives</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-yellow-300">24h</div>
                    <div class="text-sm opacity-80">Mises à jour</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vague décorative -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="fill-current text-white dark:text-gray-900 w-full h-12">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35,6.36,119.13-6.43C939.06,29.08,1077.14,52.48,1200,78.67V0Z" opacity=".5"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
        </svg>
    </div>
</section>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Filtres par magasin -->
    <div class="sticky top-4 z-10 mb-8 bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm p-4 rounded-xl shadow-lg">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Filtrer par magasin :</h2>
            <div class="flex flex-wrap gap-2">
                <?php foreach(array_keys($promotion) as $index => $magasin): ?>
                <button 
                    onclick="scrollToSection('<?php echo preg_replace('/[^a-z0-9]/i', '', $magasin); ?>')"
                    class="magasin-filter px-4 py-2 rounded-lg transition-all duration-300 bg-gray-100 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-300 font-medium"
                    data-magasin="<?php echo preg_replace('/[^a-z0-9]/i', '', $magasin); ?>">
                    <?php echo $magasin; ?> (<?php echo count($promotion[$magasin]); ?>)
                </button>
                <?php endforeach; ?>
            </div>
            <div class="text-sm text-gray-500">
                <span class="font-semibold text-blue-600">Astuce :</span> Cliquez sur un magasin pour y accéder directement
            </div>
        </div>
    </div>

    <?php foreach($promotion as $magasins => $produits): 
    $magasinId = preg_replace('/[^a-z0-9]/i', '', $magasins);
    ?>
    
    <!-- Section magasin avec ID pour le scroll -->
    <section id="<?php echo $magasinId; ?>" class="magasin-section mb-16 scroll-mt-24">
        <!-- En-tête améliorée -->
        <div class="mb-10 pb-6 border-b border-gray-200 dark:border-gray-700">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-center">
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg ring-4 ring-blue-100 dark:ring-blue-900/30">
                            <span class="text-white font-bold text-2xl">
                                <?php echo strtoupper(substr($magasins, 0, 1)); ?>
                            </span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-xs font-bold">🔥</span>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <?php echo $magasins; ?>
                            <span class="text-sm font-normal bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full">
                                NOUVEAU
                            </span>
                        </h2>
                        <p class="text-gray-600 dark:text-gray-400 mt-1">Dernière mise à jour : Aujourd'hui</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <span class="bg-gradient-to-r from-green-100 to-emerald-100 dark:from-green-900/30 dark:to-emerald-900/30 text-green-800 dark:text-green-300 text-lg font-bold px-5 py-2 rounded-full shadow">
                        <?php echo count($produits); ?> offres
                    </span>
                    <button onclick="scrollToTop()" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors" title="Remonter">
                        ↑
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Grille améliorée -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
            <?php foreach($produits as $produit => $details): 
                // Calcul du pourcentage de réduction si prix d'origine et promo existent
                $discountPercent = 0;
                if(isset($details['prix_origine']) && isset($details['prix_promo']) && $details['prix_origine'] > 0) {
                    $discountPercent = round((($details['prix_origine'] - $details['prix_promo']) / $details['prix_origine']) * 100);
                }
            ?>
                <div class="group relative transform transition-all duration-500 hover:-translate-y-2 hover:scale-[1.02]">
                    <?php require 'Composants/offre-card.php'; ?>
                    
                    <!-- Badge de réduction -->
                    <?php if($discountPercent > 0): ?>
                    <div class="absolute -top-3 -right-3 w-14 h-14 bg-red-500 text-white rounded-full flex items-center justify-center font-bold text-lg shadow-lg z-20 animate-pulse-slow">
                        -<?php echo $discountPercent; ?>%
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Pagination pour beaucoup d'offres -->
        <?php if(count($produits) > 12): ?>
        <div class="flex justify-center mt-8">
            <nav class="flex gap-2">
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                    Voir plus d'offres de <?php echo $magasins; ?> →
                </button>
            </nav>
        </div>
        <?php endif; ?>
        
    </section>
    
    <?php endforeach; ?>
</main>

<!-- Newsletter Section -->
<section class="bg-gradient-to-r from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 py-16 mt-12">
    <div class="max-w-3xl mx-auto text-center px-4">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">📬 Ne ratez plus aucune promotion !</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-8">Inscrivez-vous pour recevoir les offres exclusives en avant-première</p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input 
                type="email" 
                placeholder="Votre email" 
                class="flex-grow px-6 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>
            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                S'abonner
            </button>
        </form>
    </div>
</section>

<?php require 'portions/footer.php'; ?>

<!-- Styles CSS optimisés -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes pulse-slow {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.animate-fade-in {
    animation: fadeIn 0.8s ease-out;
}

.animate-pulse-slow {
    animation: pulse-slow 2s infinite;
}

.magasin-section {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

.magasin-section.visible {
    opacity: 1;
    transform: translateY(0);
}

.grid > div {
    animation: fadeIn 0.5s ease-out forwards;
}

/* Délais d'animation dynamiques */
.grid > div:nth-child(1) { animation-delay: 0.1s; }
.grid > div:nth-child(2) { animation-delay: 0.2s; }
.grid > div:nth-child(3) { animation-delay: 0.3s; }
.grid > div:nth-child(4) { animation-delay: 0.4s; }
.grid > div:nth-child(5) { animation-delay: 0.5s; }
.grid > div:nth-child(6) { animation-delay: 0.6s; }
.grid > div:nth-child(7) { animation-delay: 0.7s; }
.grid > div:nth-child(8) { animation-delay: 0.8s; }

/* Amélioration du hover */
.group:hover .shadow-lg {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Scrollbar personnalisée */
::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 5px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #2563eb, #7c3aed);
}

/* Style pour le filtre actif */
.magasin-filter.active {
    background: linear-gradient(135deg, #3b82f6, #8b5cf6) !important;
    color: white !important;
    transform: scale(1.05);
}
</style>

<!-- Scripts améliorés -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    });

    document.querySelectorAll('.magasin-section').forEach(section => {
        observer.observe(section);
    });

    // Gestion des filtres
    const filters = document.querySelectorAll('.magasin-filter');
    filters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            filters.forEach(f => f.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
        });
    });

    // Mettre en surbrillance le magasin visible
    const magasinSections = document.querySelectorAll('.magasin-section');
    const headerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const magasinId = entry.target.id;
                const correspondingFilter = document.querySelector(`[data-magasin="${magasinId}"]`);
                if (correspondingFilter) {
                    filters.forEach(f => f.classList.remove('active'));
                    correspondingFilter.classList.add('active');
                }
            }
        });
    }, { threshold: 0.3 });

    magasinSections.forEach(section => {
        headerObserver.observe(section);
    });
});

// Fonction pour scroller vers une section
function scrollToSection(magasinId) {
    const element = document.getElementById(magasinId);
    if (element) {
        window.scrollTo({
            top: element.offsetTop - 100,
            behavior: 'smooth'
        });
        
        // Effet de surbrillance
        element.style.backgroundColor = 'rgba(59, 130, 246, 0.1)';
        setTimeout(() => {
            element.style.backgroundColor = '';
        }, 1000);
    }
}

// Fonction pour remonter en haut
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Détection du scroll pour cacher/afficher le filtre
let lastScroll = 0;
window.addEventListener('scroll', () => {
    const filterBar = document.querySelector('.sticky.top-4');
    if (!filterBar) return;
    
    const currentScroll = window.pageYOffset;
    
    if (currentScroll <= 100) {
        filterBar.style.opacity = '1';
        filterBar.style.transform = 'translateY(0)';
    } else if (currentScroll > lastScroll) {
        // Scrolling down
        filterBar.style.opacity = '0.8';
        filterBar.style.transform = 'translateY(-20px)';
    } else {
        // Scrolling up
        filterBar.style.opacity = '1';
        filterBar.style.transform = 'translateY(0)';
    }
    
    lastScroll = currentScroll;
});
</script>