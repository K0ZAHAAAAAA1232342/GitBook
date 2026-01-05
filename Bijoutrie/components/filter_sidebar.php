<?php
function renderFilterSidebar($selectedCategory, $priceRange) {
    ?>
    <div class="filter-sidebar bg-white rounded-2xl shadow-lg p-6 sticky top-24">
      <h2 class="filter-title text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
        <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
        </svg>
        Filtres
      </h2>
      
      <!-- Category Filter -->
      <div class="mb-8">
        <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Catégories</h3>
        <div class="space-y-2">
          <a href="index.php?category=all" class="filter-option block px-4 py-3 rounded-lg transition-all duration-300 <?php echo $selectedCategory === 'all' ? 'bg-gradient-to-r from-gold/10 to-dark-gold/10 border-l-4 border-gold font-semibold' : 'hover:bg-gray-50'; ?>">
            <div class="flex items-center justify-between">
              <span class="<?php echo $selectedCategory === 'all' ? 'text-gold' : 'text-gray-700'; ?>">Tous les produits</span>
              <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </div>
          </a>
          
          <a href="index.php?category=necklaces" class="filter-option block px-4 py-3 rounded-lg transition-all duration-300 <?php echo $selectedCategory === 'necklaces' ? 'bg-gradient-to-r from-gold/10 to-dark-gold/10 border-l-4 border-gold font-semibold' : 'hover:bg-gray-50'; ?>">
            <div class="flex items-center justify-between">
              <span class="<?php echo $selectedCategory === 'necklaces' ? 'text-gold' : 'text-gray-700'; ?>">Colliers</span>
              <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </div>
          </a>
          
          <a href="index.php?category=watches" class="filter-option block px-4 py-3 rounded-lg transition-all duration-300 <?php echo $selectedCategory === 'watches' ? 'bg-gradient-to-r from-gold/10 to-dark-gold/10 border-l-4 border-gold font-semibold' : 'hover:bg-gray-50'; ?>">
            <div class="flex items-center justify-between">
              <span class="<?php echo $selectedCategory === 'watches' ? 'text-gold' : 'text-gray-700'; ?>">Montres</span>
              <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </div>
          </a>
        </div>
      </div>
      
      <!-- Price Range Filter -->
      <div class="mb-8">
        <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Gamme de Prix</h3>
        <div class="space-y-2">
          <?php
          $priceRanges = [
              'all' => 'Tous les prix',
              '4000-10000' => '4 000 € - 10 000 €',
              '10000-20000' => '10 000 € - 20 000 €',
              '20000-50000' => '20 000 € - 50 000 €',
              '50000+' => '50 000 € et plus'
          ];
          
          $currentPriceRangeId = 'all';
          if ($priceRange[0] == 4000 && $priceRange[1] == 10000) $currentPriceRangeId = '4000-10000';
          elseif ($priceRange[0] == 10000 && $priceRange[1] == 20000) $currentPriceRangeId = '10000-20000';
          elseif ($priceRange[0] == 20000 && $priceRange[1] == 50000) $currentPriceRangeId = '20000-50000';
          elseif ($priceRange[0] == 50000) $currentPriceRangeId = '50000+';
          
          foreach ($priceRanges as $rangeId => $label):
          ?>
            <a href="index.php?category=<?php echo $selectedCategory; ?>&price_range=<?php echo $rangeId; ?>" class="filter-option block px-4 py-3 rounded-lg transition-all duration-300 <?php echo $currentPriceRangeId === $rangeId ? 'bg-gradient-to-r from-gold/10 to-dark-gold/10 border-l-4 border-gold font-semibold' : 'hover:bg-gray-50'; ?>">
              <div class="flex items-center justify-between">
                <span class="<?php echo $currentPriceRangeId === $rangeId ? 'text-gold' : 'text-gray-700'; ?> text-sm"><?php echo $label; ?></span>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      
      <!-- Reset Filters -->
      <div class="pt-6 border-t border-gray-200">
        <a href="index.php" class="block w-full px-6 py-3 text-center bg-gradient-to-r from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-300 transform hover:scale-105">
          Réinitialiser les filtres
        </a>
      </div>
    </div>
    <?php
}
?>
