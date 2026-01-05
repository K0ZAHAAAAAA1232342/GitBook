<?php
function renderProductCard($product) {
    $id = $product['id'];
    $name = $product['name'];
    $price = $product['price'];
    $category = $product['category'];
    $image = $product['image'];
    $rating = $product['rating'];
    $isNew = isset($product['isNew']) ? $product['isNew'] : false;
    
    $formattedPrice = number_format($price, 0, ',', ' ') . ' €';
    ?>
    <div class="product-card group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
      <!-- Golden Border Effect -->
      <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"
           style="background: linear-gradient(135deg, #D4AF37, #C0C0C0, #D4AF37); padding: 2px;">
        <div class="w-full h-full bg-white rounded-2xl"></div>
      </div>
      
      <!-- Image Container -->
      <div class="product-image-container relative aspect-square overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
        <img
          src="<?php echo htmlspecialchars($image); ?>"
          alt="<?php echo htmlspecialchars($name); ?>"
          class="product-image w-full h-full object-cover transition-transform duration-700 ease-out"
          loading="lazy"
        />
        
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        
        <!-- Badges -->
        <?php if ($isNew): ?>
        <div class="absolute top-4 left-4 z-10">
          <span class="badge inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-gold to-dark-gold text-white text-xs font-bold tracking-widest uppercase rounded-full shadow-xl">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            Nouveau
          </span>
        </div>
        <?php endif; ?>

        <!-- Favorite Button -->
        <button
          onclick="toggleFavorite(this, <?php echo $id; ?>)"
          class="favorite-btn absolute top-4 right-4 z-10 w-11 h-11 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-110 hover:bg-white shadow-lg"
          aria-label="Add to favorites"
        >
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-gray-700 hover:text-red-500 transition-colors">
            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
        </button>

        <!-- Quick View Overlay -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
          <button class="btn-primary px-8 py-3 bg-white text-gray-900 rounded-full hover:bg-gray-100 transition-all duration-300 transform scale-95 group-hover:scale-100 flex items-center gap-2 shadow-2xl">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            <span class="font-semibold tracking-wide">Voir Détails</span>
          </button>
        </div>
      </div>

      <!-- Product Info -->
      <div class="relative p-6 bg-white">
        <div class="space-y-3">
          <!-- Category -->
          <p class="text-sm text-gray-500 uppercase tracking-wider font-medium"><?php echo htmlspecialchars($category); ?></p>
          
          <!-- Name -->
          <h3 class="text-lg font-semibold text-gray-900 line-clamp-2 min-h-[3.5rem] group-hover:text-gold transition-colors duration-300">
            <?php echo htmlspecialchars($name); ?>
          </h3>
          
          <!-- Rating -->
          <div class="flex items-center gap-1">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="<?php echo $i < $rating ? 'fill-gold text-gold' : 'fill-gray-200 text-gray-200'; ?> transition-all duration-300">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
            <?php endfor; ?>
            <span class="ml-2 text-xs text-gray-500">(<?php echo $rating; ?>.0)</span>
          </div>

          <!-- Price & Cart -->
          <div class="flex items-center justify-between pt-4 border-t border-gray-100">
            <div>
              <p class="product-price text-2xl font-bold bg-gradient-to-r from-gold to-dark-gold bg-clip-text text-transparent">
                <?php echo $formattedPrice; ?>
              </p>
              <p class="text-xs text-gray-400 mt-1">TVA incluse</p>
            </div>
            <button class="w-12 h-12 bg-gradient-to-br from-gold to-dark-gold text-white rounded-full flex items-center justify-center hover:scale-110 transition-transform duration-300 shadow-lg hover:shadow-xl group/cart" aria-label="Add to cart">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover/cart:scale-110 transition-transform">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Shimmer Effect on Hover -->
      <div class="absolute inset-0 pointer-events-none overflow-hidden rounded-2xl">
        <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
      </div>
    </div>

    <script>
    function toggleFavorite(btn, id) {
      btn.querySelector('svg').classList.toggle('fill-red-500');
      btn.querySelector('svg').classList.toggle('text-red-500');
    }
    </script>
    <?php
}
?>
