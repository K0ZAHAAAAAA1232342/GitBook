<?php
function renderProductCard($product) {
    $id = $product['id'];
    $name = $product['name'];
    $price = $product['price'];
    $category = $product['category'];
    $image = $product['image'];
    $rating = $product['rating'];
    $isNew = isset($product['isNew']) ? $product['isNew'] : false;
    
    // Format price
    $formattedPrice = number_format($price, 0, ',', ' ') . ' €';
    ?>
    <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
      <!-- Image Container -->
      <div class="relative aspect-square overflow-hidden bg-gray-100">
        <img
          src="<?php echo $image; ?>"
          alt="<?php echo htmlspecialchars($name); ?>"
          class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
        />
        
        <!-- Badges -->
        <div class="absolute top-3 left-3 flex gap-2">
          <?php if ($isNew): ?>
            <span class="bg-black text-white px-3 py-1 rounded-full text-sm">
              Nouveau
            </span>
          <?php endif; ?>
        </div>

        <!-- Favorite Button -->
        <button
          class="absolute top-3 right-3 w-10 h-10 bg-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:scale-110"
        >
          <!-- Heart Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700 hover:fill-red-500 hover:text-red-500"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
        </button>

        <!-- Quick View Overlay -->
        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
          <button class="bg-white px-6 py-2 rounded-full hover:bg-gray-100 transition-colors">
            Voir Détails
          </button>
        </div>
      </div>

      <!-- Product Info -->
      <div class="p-4">
        <p class="text-gray-500 mb-1 text-sm"><?php echo htmlspecialchars($category); ?></p>
        <h3 class="mb-2 font-medium"><?php echo htmlspecialchars($name); ?></h3>
        
        <!-- Rating -->
        <div class="flex items-center gap-1 mb-3">
          <?php for ($i = 0; $i < 5; $i++): ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 <?php echo $i < $rating ? 'fill-yellow-400 text-yellow-400' : 'text-gray-300'; ?>"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <?php endfor; ?>
        </div>

        <!-- Price -->
        <div class="flex items-center justify-between">
          <span class="text-gray-900 font-semibold"><?php echo $formattedPrice; ?></span>
          <button class="text-gray-900 hover:text-gray-600 transition-colors">
            <!-- ShoppingBag Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
          </button>
        </div>
      </div>
    </div>
    <?php
}
?>
