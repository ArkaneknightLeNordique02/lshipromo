<div class="product-card group relative w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 overflow-hidden hover:border-blue-300 dark:hover:border-blue-700">
    
    <?php 
    // Calcul de la réduction
    $discount = 0;
    $hasDiscount = false;
    if(isset($details['prix-intial']) && isset($details['prix-promo']) && $details['prix-intial'] > 0 && $details['prix-promo'] < $details['prix-intial']) {
        $discount = round(($details['prix-intial'] - $details['prix-promo']) / $details['prix-intial'] * 100);
        $hasDiscount = true;
    }
    ?>
    
    <!-- Badge de promotion -->
    <?php if($hasDiscount): ?>
    <div class="discount-badge absolute top-4 left-4 z-20 animate-pulse-slow">
        <div class="relative">
            <span class="relative bg-gradient-to-r from-red-500 via-pink-600 to-red-500 text-white text-sm font-bold px-4 py-2 rounded-full shadow-xl flex items-center gap-2 overflow-hidden">
                <span class="relative z-10">-<?php echo $discount; ?>%</span>
                <span class="relative z-10 text-xs bg-white/30 px-2 py-1 rounded-full">
                    <!-- SVG Fire -->
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5.67s.74 2.65.74 4.8c0 2.06-1.35 3.73-3.41 3.73-2.07 0-3.63-1.67-3.63-3.73l.03-.36C5.21 7.51 4 10.62 4 14c0 4.42 3.58 8 8 8s8-3.58 8-8C20 8.61 17.41 3.8 13.5.67zM12 20c-3.31 0-6-2.69-6-6 0-1.53.3-3.04.86-4.43 1.01 1.01 2.41 1.63 3.97 1.63 2.66 0 4.75-2.09 4.75-4.64 0-1.31-.53-2.57-1.48-3.5C16.11 5.5 18 9.11 18 14c0 3.31-2.69 6-6 6z"/>
                    </svg>
                </span>
            </span>
            <?php if($discount > 50): ?>
            <div class="absolute -top-1 -right-1 w-6 h-6 bg-yellow-400 rounded-full flex items-center justify-center animate-bounce">
                <!-- SVG Star -->
                <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                </svg>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- Boutons d'action rapides -->
    <div class="action-buttons absolute top-4 right-4 z-20 flex gap-2">
        <!-- Bouton favoris -->
        <button class="favorite-btn group/fav relative bg-white/90 dark:bg-gray-800/90 hover:bg-red-50 dark:hover:bg-red-900/30 text-gray-800 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 p-2.5 rounded-full shadow-lg transition-all duration-300 backdrop-blur-sm hover:scale-110"
                data-product="<?php echo htmlspecialchars($produit); ?>"
                onclick="toggleFavorite(this)"
                aria-label="Ajouter aux favoris">
            
            <svg class="w-5 h-5 transition-all duration-300 group-hover/fav:scale-125" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
        </button>
        
        <!-- Bouton WhatsApp -->
        <a href="https://wa.me/+243801816424, je suis intéressé par : <?php echo urlencode($produit . ' - ' . $details['prix-promo'] . $details['devise']); ?>"
           target="_blank"
           class="whatsapp-btn group/wa relative bg-gradient-to-br from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white p-2.5 rounded-full shadow-lg transition-all duration-300 hover:scale-110 hover:shadow-green-500/50"
           aria-label="Commander sur WhatsApp">
            
            <svg class="w-5 h-5 transition-transform duration-300 group-hover/wa:scale-110" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.507 14.307l-.009.075c-.266 1.164-.786 3.207-1.002 3.84-.126.36-.412.551-.714.512-.271-.034-.693-.176-1.549-.456-1.337-.435-3.6-1.546-5.49-3.434-2.255-2.269-3.452-4.758-3.892-6.408-.218-.814-.28-1.249.169-1.771.182-.214.446-.345.729-.358.301-.014.75-.016 1.076.094.349.118.742.401 1.056.896.787 1.24 1.189 1.888 1.377 2.187.215.34.302.478.413.683.115.217.049.338-.025.475-.059.108-.134.243-.215.395-.157.295-.333.625-.475.851-.096.154-.195.301-.284.449-.094.157-.198.31-.134.504.088.266.439 1.157 1.08 2.085 1.01 1.461 2.073 2.542 3.316 3.252.84.479 1.49.746 2.078.916.371.107.707.181 1.016.181.378 0 .699-.079.948-.235.303-.19.461-.499.557-.915.034-.148.074-.333.11-.535.116-.648.232-1.455.349-2.331z"/>
            </svg>
        </a>
    </div>
    
    <!-- Section image -->
    <div class="image-section relative overflow-hidden rounded-t-2xl bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800">
        <!-- Badge temps limité -->
        <!-- Image produit -->
        <div class="relative h-56 overflow-hidden">
            <img class="w-full h-full object-contain p-4 group-hover:scale-110 transition-transform duration-700" 
                 src="<?php echo 'IMAGE/' . $details['image']; ?>" 
                 alt="<?php echo htmlspecialchars($produit); ?>"
                 loading="lazy"
                 onerror="this.src='https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=Image+Non+Disponible'; this.onerror=null;">
            
            <!-- Bouton vue rapide -->
            <div class="quick-view-overlay absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                <button class="w-full bg-white/25 hover:bg-white/35 backdrop-blur-md text-white text-sm font-medium py-3 rounded-xl transition-all duration-300 flex items-center justify-center gap-2"
                        onclick="quickView('<?php echo htmlspecialchars($produit); ?>')">
                    <!-- SVG Eye -->
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    Voir rapidement
                </button>
            </div>
        </div>
    </div>
    
    <!-- Section contenu -->
    <div class="content-section p-5">
        <!-- Titre produit -->
        <h3 class="product-title text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
            <?php echo htmlspecialchars($produit); ?>
        </h3>
        
        <!-- Description -->
        <div class="product-description mb-4">
            <p class="description-text text-sm text-gray-600 dark:text-gray-300 line-clamp-2 transition-all duration-300">
                <?php echo htmlspecialchars($details['description'] ?? 'Produit de qualité exceptionnelle et garantie satisfait ou remboursé.'); ?>
            </p>
        </div>
        
        <!-- Prix -->
        <div class="price-section mb-4 p-3 bg-gradient-to-r from-gray-50 to-blue-50 dark:from-gray-800 dark:to-blue-900/20 rounded-xl">
            <div class="flex items-center justify-between mb-2">
                <div class="prices">
                    <span class="current-price text-2xl font-bold text-gray-900 dark:text-white">
                        <?php echo number_format($details['prix-promo']); ?><?php echo $details['devise']; ?>
                    </span>
                    <?php if($hasDiscount): ?>
                    <span class="original-price text-sm text-gray-400 line-through ml-2">
                        <?php echo number_format($details['prix-intial']); ?><?php echo $details['devise']; ?>
                    </span>
                    <?php endif; ?>
                </div>
                
                <?php if($hasDiscount): ?>
                <div class="savings text-right">
                    <div class="discount-text text-sm font-semibold text-green-600 dark:text-green-400">
                        Économisez <?php echo $discount; ?>%
                    </div>
                    <div class="saved-amount text-xs text-gray-600 dark:text-gray-400">
                        <?php echo number_format($details['prix-intial'] - $details['prix-promo']); ?><?php echo $details['devise']; ?> économisés
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Bouton principal -->
     <a href="https://wa.me/243801816424?text=<?php echo urlencode('Bonjour, je suis intéressé par : ' . $produit . "\n\n" . '🔹 Offre: ' . $discount . '% de réduction' . "\n" . '🔹 Prix promotionnel: ' . $details['prix-promo'] . $details['devise'] . "\n" . '🔹 Prix original: ' . $details['prix-intial'] . $details['devise'] . "\n\n" . 'Je souhaite commander ce produit. Merci de me donner plus d\'informations.'); ?>"
   target="_blank"
   rel="noopener noreferrer"
   class="whatsapp-main-btn group relative flex w-full items-center justify-center overflow-hidden rounded-xl bg-gradient-to-r from-[#25D366] to-[#128C7E] p-4 text-white font-bold shadow-lg shadow-[#25D366]/30 transition-all duration-300 hover:scale-[1.02] hover:shadow-[#25D366]/50 hover:from-[#128C7E] hover:to-[#075E54] active:scale-95 focus:outline-none focus:ring-2 focus:ring-[#25D366] focus:ring-offset-2 dark:focus:ring-offset-gray-900"
   aria-label="Commander ce produit sur WhatsApp">
    
    <!-- Effet de brillance amélioré -->
    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/30 to-transparent"></div>
    
    <!-- Conteneur principal du bouton -->
    <div class="flex items-center justify-center gap-3 relative z-10">
        
        <!-- Logo WhatsApp officiel avec animation -->
        <div class="relative">
            <svg class="w-6 h-6 md:w-7 md:h-7 transition-all duration-500 group-hover:scale-110 group-hover:rotate-12 drop-shadow-lg" 
                 xmlns="http://www.w3.org/2000/svg" 
                 viewBox="0 0 24 24" 
                 fill="white">
                <path d="M12.032 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.96 9.96 0 0 1-4.587-1.112l-3.826 1.067 1.067-3.826A9.96 9.96 0 0 1 2 12.032C2 6.509 6.509 2 12.032 2zm0 1.5a8.532 8.532 0 0 0-8.532 8.532c0 1.502.387 2.91 1.063 4.136l.15.267-.803 2.878 2.878-.803.267.15a8.532 8.532 0 0 0 13.019-7.428 8.532 8.532 0 0 0-8.532-8.532z"/>
            </svg>
            
            <!-- Petit point de notification animé -->
            <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-white rounded-full animate-ping opacity-75"></span>
            <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-white rounded-full"></span>
        </div>
        
        <!-- Texte du bouton avec effets -->
        <span class="flex flex-col items-start">
            <span class="text-sm md:text-base font-bold tracking-wide flex items-center gap-1">
                COMMANDER SUR WHATSAPP
                <!-- Flèche animée -->
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" 
                     xmlns="http://www.w3.org/2000/svg" 
                     fill="none" 
                     viewBox="0 0 24 24" 
                     stroke="white" 
                     stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </span>
            
            <!-- Sous-titre avec le prix et réduction -->
            <span class="text-[10px] md:text-xs text-white/80 font-normal">
                ⚡ <?php echo $discount; ?>% OFF • <?php echo number_format($details['prix-promo'], 0); ?><?php echo $details['devise']; ?>
            </span>
        </span>
    </div>
</a>

<style>
@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes rotate360 {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.group:hover .group-hover\:rotate-360 {
    animation: rotate360 0.7s ease-in-out;
}
</style>
        <!-- Informations -->
        <div class="info-section mt-4 pt-3 border-t border-gray-100 dark:border-gray-700 grid grid-cols-2 gap-2 text-xs text-gray-500 dark:text-gray-400">
            <div class="info-item flex items-center">
                <!-- SVG Delivery -->
                <svg class="w-4 h-4 mr-2 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <span>Livraison rapide</span>
            </div>
            <div class="info-item flex items-center">
                <!-- SVG Secure -->
                <svg class="w-4 h-4 mr-2 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                <span>Paiement sécurisé</span>
            </div>
            <div class="info-item flex items-center">
                <!-- SVG Return -->
                <svg class="w-4 h-4 mr-2 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
                <span>Retour gratuit</span>
            </div>
            <div class="info-item flex items-center">
                <!-- SVG Support -->
                <svg class="w-4 h-4 mr-2 text-yellow-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>Support 24/7</span>
            </div>
        </div>
    </div>
    
    <!-- Badge exclusif -->
    <?php if($discount > 60 || ($details['categorie'] ?? '') === 'EXCLUSIF'): ?>
    <div class="exclusive-badge absolute -top-3 -right-3 z-30">
        <div class="bg-gradient-to-r from-yellow-400 to-red-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-xl animate-bounce rotate-12 flex items-center gap-1">
            <!-- SVG Exclusive -->
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
            </svg>
            EXCLUSIF
        </div>
    </div>
    <?php endif; ?>
</div>

<!-- Script simplifié -->
<script>
// Gestion des favoris
function toggleFavorite(button) {
    const product = button.getAttribute('data-product');
    const heartIcon = button.querySelector('svg');
    
    // Animation simple
    heartIcon.style.fill = heartIcon.style.fill === 'red' ? 'none' : 'red';
    
    // Sauvegarde
    let favorites = JSON.parse(localStorage.getItem('favorites') || '[]');
    if (favorites.includes(product)) {
        favorites = favorites.filter(p => p !== product);
    } else {
        favorites.push(product);
    }
    localStorage.setItem('favorites', JSON.stringify(favorites));
}

// Vue rapide
function quickView(productName) {
    alert('Vue rapide : ' + productName);
}
</script>

<!-- Style simplifié -->
<style>
/* Animation badge */
@keyframes pulse-slow {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.animate-pulse-slow {
    animation: pulse-slow 2s infinite;
}

/* Limite de lignes */
.line-clamp-1 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
}

.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

/* Rotation badge */
.rotate-12 {
    transform: rotate(12deg);
}

/* Animation bouton WhatsApp */
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.animate-bounce {
    animation: bounce 1s infinite;
}

/* Transitions douces */
.product-card {
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

/* Amélioration accessibilité */
button:focus, a:focus {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Support thème sombre */
@media (prefers-color-scheme: dark) {
    .product-card {
        background-color: #1f2937;
        border-color: #374151;
    }
}
</style>