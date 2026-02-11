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
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-fade-in flex items-center justify-center gap-3">
                <!-- SVG Rocket -->
                <svg class="w-12 h-12 md:w-16 md:h-16 text-yellow-300" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.13 22.19L11.5 18.36C13.07 17.78 14.54 17 15.9 16.09L13.13 22.19ZM5.64 12.5L1.81 10.87L7.91 8.1C7 9.46 6.22 10.93 5.64 12.5ZM21.61 2.39C21.61 2.39 16.66 .269 11 5.93C8.81 8.12 7.92 10.53 7.7 12.31C7.57 13.33 7.61 14.37 7.84 15.41L2.29 20.96C1.9 21.35 1.9 21.98 2.29 22.37C2.68 22.76 3.31 22.76 3.7 22.37L8.59 17.48C9.63 17.71 10.67 17.75 11.69 17.62C13.47 17.4 15.88 16.51 18.07 14.32C23.73 8.66 21.61 2.39 21.61 2.39Z"/>
                </svg>
                Promotions en direct
            </h1>
            <p class="text-xl md:text-2xl opacity-90 mb-8 flex items-center justify-center gap-2">
                <!-- SVG Verified -->
                <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                Les meilleures offres sélectionnées et vérifiées pour vous
            </p>
            
            <!-- Stats en temps réel -->
            <div class="flex flex-wrap justify-center gap-6 md:gap-10 mt-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-yellow-300 flex items-center justify-center gap-2">
                        <!-- SVG Store -->
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                        </svg>
                        <?php echo count($promotion); ?>
                    </div>
                    <div class="text-sm opacity-80">Magasins</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-yellow-300 flex items-center justify-center gap-2">
                        <!-- SVG Tag -->
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/>
                        </svg>
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
                    <div class="text-3xl font-bold text-yellow-300 flex items-center justify-center gap-2">
                        <!-- SVG Clock -->
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org2000/svg">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                        </svg>
                        24h
                    </div>
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
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center gap-2">
                <!-- SVG Filter -->
                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/>
                </svg>
                Filtrer par magasin :
            </h2>
            <div class="flex flex-wrap gap-2">
                <?php foreach(array_keys($promotion) as $index => $magasin): ?>
                <button 
                    onclick="scrollToSection('<?php echo preg_replace('/[^a-z0-9]/i', '', $magasin); ?>')"
                    class="magasin-filter px-4 py-2 rounded-lg transition-all duration-300 bg-gray-100 dark:bg-gray-800 hover:bg-blue-100 dark:hover:bg-blue-900 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-300 font-medium flex items-center gap-1"
                    data-magasin="<?php echo preg_replace('/[^a-z0-9]/i', '', $magasin); ?>">
                    <!-- SVG Store Outline -->
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <?php echo $magasin; ?> (<?php echo count($promotion[$magasin]); ?>)
                </button>
                <?php endforeach; ?>
            </div>
            <div class="text-sm text-gray-500 flex items-center gap-1">
                <!-- SVG Lightbulb -->
                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7z"/>
                </svg>
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
                            <!-- SVG Hot/Fire -->
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5.67s.74 2.65.74 4.8c0 2.06-1.35 3.73-3.41 3.73-2.07 0-3.63-1.67-3.63-3.73l.03-.36C5.21 7.51 4 10.62 4 14c0 4.42 3.58 8 8 8s8-3.58 8-8C20 8.61 17.41 3.8 13.5.67zM12 20c-3.31 0-6-2.69-6-6 0-1.53.3-3.04.86-4.43 1.01 1.01 2.41 1.63 3.97 1.63 2.66 0 4.75-2.09 4.75-4.64 0-1.31-.53-2.57-1.48-3.5C16.11 5.5 18 9.11 18 14c0 3.31-2.69 6-6 6z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white flex items-center gap-2">
                            <?php echo $magasins; ?>
                            <span class="text-sm font-normal bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full flex items-center gap-1">
                                <!-- SVG New/Sparkles -->
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 8l-4 4h3c0 3.31-2.69 6-6 6-1.01 0-1.97-.25-2.8-.7l-1.46 1.46C8.97 19.54 10.43 20 12 20c4.42 0 8-3.58 8-8h3l-4-4zM6 12c0-3.31 2.69-6 6-6 1.01 0 1.97.25 2.8.7l1.46-1.46C15.03 4.46 13.57 4 12 4c-4.42 0-8 3.58-8 8H1l4 4 4-4H6z"/>
                                </svg>
                                NOUVEAU
                            </span>
                        </h2>
                        <p class="text-gray-600 dark:text-gray-400 mt-1 flex items-center gap-1">
                            <!-- SVG Update/Refresh -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/>
                            </svg>
                            Dernière mise à jour : Aujourd'hui
                        </p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4">
                    <span class="bg-gradient-to-r from-green-100 to-emerald-100 dark:from-green-900/30 dark:to-emerald-900/30 text-green-800 dark:text-green-300 text-lg font-bold px-5 py-2 rounded-full shadow flex items-center gap-2">
                        <!-- SVG Offer/Tag -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/>
                        </svg>
                        <?php echo count($produits); ?> offres
                    </span>
                    <button onclick="scrollToTop()" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors flex items-center justify-center" title="Remonter">
                        <!-- SVG Arrow Up -->
                        <svg class="w-5 h-5 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                        </svg>
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
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors flex items-center gap-2">
                    Voir plus d'offres de <?php echo $magasins; ?>
                    <!-- SVG Arrow Right -->
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
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
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4 flex items-center justify-center gap-3">
            <!-- SVG Mail/Envelope -->
            <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
            Ne ratez plus aucune promotion !
        </h2>
        <p class="text-gray-600 dark:text-gray-400 mb-8">Inscrivez-vous pour recevoir les offres exclusives en avant-première</p>
        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <div class="flex-grow relative">
                <!-- SVG Mail inside input -->
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                <input 
                    type="email" 
                    placeholder="Votre email" 
                    class="w-full pl-10 pr-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                <!-- SVG Send/Paper Plane -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                </svg>
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

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.animate-fade-in {
    animation: fadeIn 0.8s ease-out;
}

.animate-pulse-slow {
    animation: pulse-slow 2s infinite;
}

.animate-bounce {
    animation: bounce 1s infinite;
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

/* Animation pour les icônes */
svg {
    transition: all 0.3s ease;
}

.magasin-filter:hover svg {
    transform: scale(1.1);
}

button:hover svg {
    transform: translateY(-2px);
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

    // Animation pour les icônes de la newsletter
    const newsletterIcon = document.querySelector('.text-blue-600');
    if (newsletterIcon) {
        setInterval(() => {
            newsletterIcon.classList.toggle('animate-bounce');
        }, 3000);
    }
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