<?php 
$header = "Promotions exclusives | LSHIPROMO - Meilleures offres";
$activePage = 'accueil';
$metaDescription = "Découvrez les meilleures promotions du moment sur LSHIPROMO. Offres exclusives par magasin, mises à jour quotidiennement.";
require 'portions/header.php'; 
require 'modele/promotion_Data.php';

// Tri intelligent
uasort($promotion, function($a, $b) {
    return count($b) - count($a);
});

// Stats instantanées
$totalOffers = array_sum(array_map('count', $promotion));
$topStore = array_key_first($promotion);
?>

<!-- Hero ultra compact premium -->
<section class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white py-8 mb-6 overflow-hidden">
    <!-- Pattern subtil -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 30 L45 15 L60 30 L45 45 Z' fill='white' opacity='0.1'/%3E%3C/svg%3E'); background-size: 30px 30px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Titre compact -->
            <div class="flex items-center gap-3">
                <div class="relative">
                    <div class="w-10 h-10 bg-white/20 backdrop-blur rounded-xl flex items-center justify-center shadow-2xl">
                        <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.13 22.19L11.5 18.36C13.07 17.78 14.54 17 15.9 16.09L13.13 22.19ZM5.64 12.5L1.81 10.87L7.91 8.1C7 9.46 6.22 10.93 5.64 12.5ZM21.61 2.39C21.61 2.39 16.66 .269 11 5.93C8.81 8.12 7.92 10.53 7.7 12.31C7.57 13.33 7.61 14.37 7.84 15.41L2.29 20.96C1.9 21.35 1.9 21.98 2.29 22.37C2.68 22.76 3.31 22.76 3.7 22.37L8.59 17.48C9.63 17.71 10.67 17.75 11.69 17.62C13.47 17.4 15.88 16.51 18.07 14.32C23.73 8.66 21.61 2.39 21.61 2.39Z"/>
                        </svg>
                    </div>
                    <div class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-emerald-400 rounded-full border-2 border-indigo-600 animate-pulse"></div>
                </div>
                <div>
                    <h1 class="text-xl md:text-2xl font-bold flex items-center gap-2">
                        Offres Flash
                        <span class="text-[10px] font-mono bg-white/20 px-1.5 py-0.5 rounded-md">LIVE</span>
                    </h1>
                    <p class="text-[11px] opacity-90 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-5m6 2c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z"/>
                        </svg>
                        Vérifiées aujourd'hui
                    </p>
                </div>
            </div>
            
            <!-- Stats compactes -->
            <div class="flex items-center gap-2">
                <!-- Total magasins -->
                <div class="flex items-center gap-1.5 px-2 py-1.5 bg-white/10 backdrop-blur rounded-lg">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/>
                    </svg>
                    <span class="text-xs font-bold"><?php echo count($promotion); ?></span>
                </div>
                <!-- Total offres -->
                <div class="flex items-center gap-1.5 px-2 py-1.5 bg-white/10 backdrop-blur rounded-lg">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/>
                    </svg>
                    <span class="text-xs font-bold"><?php echo $totalOffers; ?></span>
                </div>
                <!-- Top store -->
                <div class="hidden sm:flex items-center gap-1.5 px-2 py-1.5 bg-yellow-400/20 backdrop-blur rounded-lg">
                    <svg class="w-3.5 h-3.5 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                    </svg>
                    <span class="text-[10px] font-medium"><?php echo $topStore; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="max-w-7xl mx-auto px-3 sm:px-4">
    <!-- Filtres flottants premium -->
    <div class="sticky top-2 z-20 mb-4 bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl rounded-xl shadow-lg border border-gray-200/50 dark:border-gray-700/50 p-2">
        <div class="flex items-center gap-2 overflow-x-auto scrollbar-hide">
            <!-- Filtre tous -->
            <button onclick="resetFilters()" class="flex-shrink-0 px-2.5 py-1.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-[10px] font-semibold rounded-lg flex items-center gap-1 shadow-md">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                Tous
            </button>
            
            <!-- Filtres magasins compacts -->
            <?php foreach(array_keys($promotion) as $index => $magasin): 
                $count = count($promotion[$magasin]);
                $magasinId = preg_replace('/[^a-z0-9]/i', '', $magasin);
            ?>
            <button onclick="scrollToSection('<?php echo $magasinId; ?>')" 
                    data-magasin="<?php echo $magasinId; ?>"
                    class="magasin-filter flex-shrink-0 px-2.5 py-1.5 bg-gray-100 dark:bg-gray-800 hover:bg-indigo-100 dark:hover:bg-indigo-900/50 rounded-lg text-[10px] font-medium text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-300 flex items-center gap-1 transition-all border border-transparent hover:border-indigo-200 dark:hover:border-indigo-800">
                <span class="w-4 h-4 flex items-center justify-center bg-gray-200 dark:bg-gray-700 rounded-full text-[8px] font-bold group-hover:bg-indigo-200">
                    <?php echo strtoupper(substr($magasin, 0, 1)); ?>
                </span>
                <?php echo $magasin; ?>
                <span class="ml-0.5 px-1 py-0.5 bg-white dark:bg-gray-900 rounded text-[7px] font-mono">
                    <?php echo $count; ?>
                </span>
            </button>
            <?php endforeach; ?>
        </div>
        
        <!-- Info temps réel -->
        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 px-2 py-0.5 bg-emerald-100 dark:bg-emerald-900/30 border border-emerald-200 dark:border-emerald-800 rounded-full text-[7px] font-medium text-emerald-700 dark:text-emerald-300 flex items-center gap-1">
            <div class="w-1 h-1 bg-emerald-500 rounded-full animate-pulse"></div>
            <?php echo $totalOffers; ?> offres disponibles
        </div>
    </div>

    <!-- Sections magasins premium -->
    <?php foreach($promotion as $magasins => $produits): 
        $magasinId = preg_replace('/[^a-z0-9]/i', '', $magasins);
        $storeInitial = strtoupper(substr($magasins, 0, 1));
        $gradients = ['from-blue-500 to-cyan-500', 'from-purple-500 to-pink-500', 'from-emerald-500 to-teal-500', 'from-orange-500 to-red-500'];
        $gradient = $gradients[$index % count($gradients)] ?? 'from-indigo-500 to-purple-500';
    ?>
    
    <section id="<?php echo $magasinId; ?>" class="magasin-section mb-6 scroll-mt-16 group/store">
        <!-- En-tête magasin compact premium -->
        <div class="flex items-center justify-between mb-3 pb-2 border-b border-gray-200 dark:border-gray-800">
            <div class="flex items-center gap-2">
                <!-- Avatar magasin avec gradient -->
                <div class="relative">
                    <div class="w-10 h-10 bg-gradient-to-br <?php echo $gradient; ?> rounded-xl flex items-center justify-center shadow-md group-hover/store:scale-110 transition-transform">
                        <span class="text-white font-bold text-sm"><?php echo $storeInitial; ?></span>
                    </div>
                    <!-- Badge en ligne -->
                    <div class="absolute -bottom-1 -right-1 px-1.5 py-0.5 bg-white dark:bg-gray-900 rounded-full border-2 border-white dark:border-gray-900 shadow-sm">
                        <div class="w-1.5 h-1.5 bg-green-500 rounded-full"></div>
                    </div>
                </div>
                
                <div>
                    <div class="flex items-center gap-1.5">
                        <h2 class="text-base font-bold text-gray-900 dark:text-white"><?php echo $magasins; ?></h2>
                        <?php if($magasins === $topStore): ?>
                        <span class="px-1.5 py-0.5 bg-gradient-to-r from-yellow-400 to-amber-500 text-white text-[7px] font-bold rounded-full flex items-center gap-0.5">
                            <svg class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                            TOP
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="flex items-center gap-1.5 mt-0.5">
                        <span class="text-[9px] text-gray-500 dark:text-gray-400 flex items-center gap-0.5">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            MAJ: 2min
                        </span>
                        <span class="w-0.5 h-0.5 bg-gray-300 rounded-full"></span>
                        <span class="text-[9px] font-semibold text-indigo-600 dark:text-indigo-400">
                            <?php echo count($produits); ?> offres
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- Actions compactes -->
            <div class="flex items-center gap-1">
                <button onclick="scrollToTop()" class="p-1.5 bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-lg transition-colors">
                    <svg class="w-3.5 h-3.5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                    </svg>
                </button>
                <button class="p-1.5 bg-gray-100 dark:bg-gray-800 hover:bg-indigo-100 dark:hover:bg-indigo-900/30 rounded-lg transition-colors group/btn">
                    <svg class="w-3.5 h-3.5 text-gray-600 dark:text-gray-400 group-hover/btn:text-indigo-600 dark:group-hover/btn:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Grille compacte premium -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-2.5">
            <?php foreach(array_slice($produits, 0, 5) as $produit => $details): 
                $discountPercent = 0;
                if(isset($details['prix_origine']) && isset($details['prix_promo']) && $details['prix_origine'] > 0) {
                    $discountPercent = round((($details['prix_origine'] - $details['prix_promo']) / $details['prix_origine']) * 100);
                }
            ?>
                <div class="group relative bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-800 hover:border-indigo-300 dark:hover:border-indigo-700 hover:shadow-lg transition-all duration-300 overflow-hidden">
                    <?php require 'Composants/offre-card.php'; ?>
                    
                    <!-- Badge réduction compact -->
                    <?php if($discountPercent > 0): ?>
                    <div class="absolute top-1.5 right-1.5 z-10">
                        <div class="relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-red-500 to-pink-500 rounded-full blur-sm opacity-60"></div>
                            <div class="relative w-9 h-9 bg-gradient-to-br from-red-500 to-pink-500 text-white rounded-full flex flex-col items-center justify-center shadow-lg">
                                <span class="text-[11px] font-extrabold leading-none">-<?php echo $discountPercent; ?>%</span>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Overlay actions au hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-xl flex items-end justify-center p-2">
                        <button class="w-full py-1.5 bg-white/90 dark:bg-gray-900/90 backdrop-blur text-[9px] font-semibold text-gray-900 dark:text-white rounded-lg hover:bg-white dark:hover:bg-gray-900 transition-colors flex items-center justify-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            Voir
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <!-- Bouton voir plus compact -->
            <?php if(count($produits) > 5): ?>
            <button onclick="scrollToSection('<?php echo $magasinId; ?>')" 
                    class="group flex flex-col items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-indigo-300 dark:hover:border-indigo-700 hover:shadow-md transition-all p-3 min-h-[120px]">
                <div class="w-8 h-8 bg-indigo-100 dark:bg-indigo-900/30 rounded-full flex items-center justify-center mb-1 group-hover:scale-110 transition-transform">
                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <span class="text-[10px] font-semibold text-gray-900 dark:text-white">+<?php echo count($produits) - 5; ?></span>
                <span class="text-[8px] text-gray-500 dark:text-gray-400">offres</span>
            </button>
            <?php endif; ?>
        </div>
    </section>
    
    <?php $index = isset($index) ? $index + 1 : 1; ?>
    <?php endforeach; ?>
    
    <!-- Section newsletter compacte -->
    <div class="my-6 p-3 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-950/30 dark:to-purple-950/30 rounded-xl border border-indigo-200 dark:border-indigo-800/30 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center shadow-md">
                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
            </div>
            <div>
                <h3 class="text-xs font-bold text-gray-900 dark:text-white">Alertes prix</h3>
                <p class="text-[8px] text-gray-500 dark:text-gray-400">Soyez informé en avant-première</p>
            </div>
        </div>
        <form class="flex items-center gap-1">
            <div class="relative">
                <input type="email" placeholder="votre@email.com" 
                       class="w-40 px-2 py-1.5 text-[9px] bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 placeholder-gray-400"
                       required>
            </div>
            <button type="submit" 
                    class="px-3 py-1.5 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white text-[9px] font-semibold rounded-lg shadow-md hover:shadow-lg transition-all flex items-center gap-1">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                </svg>
                OK
            </button>
        </form>
    </div>
</main>

<!-- Footer compact -->
<div class="max-w-7xl mx-auto px-3 py-4 mt-2 border-t border-gray-200 dark:border-gray-800">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="flex -space-x-1">
                <div class="w-5 h-5 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full border border-white dark:border-gray-900"></div>
                <div class="w-5 h-5 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full border border-white dark:border-gray-900"></div>
                <div class="w-5 h-5 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full border border-white dark:border-gray-900"></div>
            </div>
            <span class="text-[8px] text-gray-500 dark:text-gray-400">© LSHIPROMO • <?php echo date('Y'); ?></span>
        </div>
        <div class="flex items-center gap-3">
            <span class="text-[7px] text-gray-400 dark:text-gray-600 flex items-center gap-1">
                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <?php echo $totalOffers; ?> offres
            </span>
            <span class="text-[7px] text-gray-400 dark:text-gray-600 flex items-center gap-1">
                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <?php echo count($promotion); ?> magasins
            </span>
        </div>
    </div>
</div>

<?php require 'portions/footer.php'; ?>

<!-- Styles premium -->
<style>
@keyframes slideIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.magasin-section {
    animation: slideIn 0.4s ease-out;
}

.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.magasin-filter.active {
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    color: white;
    border-color: transparent;
}
.magasin-filter.active span:first-child {
    background: white;
    color: #6366f1;
}

.grid > div {
    animation: slideIn 0.3s ease-out forwards;
    opacity: 0;
}
@for $i from 1 through 10 {
    .grid > div:nth-child(#{$i}) { animation-delay: $i * 0.03s; }
}

/* Glow effect */
.group:hover .shadow-lg {
    box-shadow: 0 10px 25px -5px rgba(99, 102, 241, 0.1), 0 8px 10px -6px rgba(99, 102, 241, 0.1);
}

/* Custom scroll */
::-webkit-scrollbar { width: 4px; height: 4px; }
::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 2px; }
::-webkit-scrollbar-thumb { background: linear-gradient(to bottom, #6366f1, #8b5cf6); border-radius: 2px; }
</style>

<script>
// Smooth scroll premium
function scrollToSection(magasinId) {
    const element = document.getElementById(magasinId);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'center' });
        element.classList.add('ring-4', 'ring-indigo-500/20', 'rounded-lg', 'transition-all', 'duration-500');
        setTimeout(() => element.classList.remove('ring-4', 'ring-indigo-500/20'), 1000);
    }
}

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function resetFilters() {
    document.querySelectorAll('.magasin-filter').forEach(f => f.classList.remove('active'));
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Intersection Observer pour les filtres
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const magasinId = entry.target.id;
            document.querySelectorAll('.magasin-filter').forEach(f => {
                f.classList.toggle('active', f.dataset.magasin === magasinId);
            });
        }
    });
}, { threshold: 0.3, rootMargin: '-50px 0px -50px 0px' });

document.querySelectorAll('.magasin-section').forEach(s => observer.observe(s));

// Filtre sticky dynamique
let lastScroll = 0;
window.addEventListener('scroll', () => {
    const filter = document.querySelector('.sticky');
    if (window.scrollY > 100) {
        filter.style.transform = 'translateY(0)';
        filter.style.opacity = '0.95';
    } else {
        filter.style.transform = 'translateY(0)';
        filter.style.opacity = '1';
    }
    lastScroll = window.scrollY;
});
</script>