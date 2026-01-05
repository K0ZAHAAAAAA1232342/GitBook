<?php
function renderFilterSidebar($selectedCategory, $priceRange) {
    $categories = [
        ['id' => 'all', 'label' => 'Tous les produits'],
        ['id' => 'rings', 'label' => 'Bagues'],
        ['id' => 'necklaces', 'label' => 'Colliers'],
        ['id' => 'earrings', 'label' => "Boucles d'oreilles"],
        ['id' => 'bracelets', 'label' => 'Bracelets'],
        ['id' => 'watches', 'label' => 'Montres'],
    ];

    $priceRanges = [
        ['id' => 'all', 'label' => 'Tous les prix', 'min' => 0, 'max' => 100000],
        ['id' => '4000-10000', 'label' => '4 000 € - 10 000 €', 'min' => 4000, 'max' => 10000],
        ['id' => '10000-20000', 'label' => '10 000 € - 20 000 €', 'min' => 10000, 'max' => 20000],
        ['id' => '20000-50000', 'label' => '20 000 € - 50 000 €', 'min' => 20000, 'max' => 50000],
        ['id' => '50000+', 'label' => '50 000 € +', 'min' => 50000, 'max' => 100000],
    ];
    
    // Determine selected price range ID for radio button
    $selectedPriceId = 'all';
    foreach ($priceRanges as $range) {
        if ($priceRange[0] == $range['min'] && $priceRange[1] == $range['max']) {
            $selectedPriceId = $range['id'];
            break;
        }
    }
    ?>
    
    <!-- Mobile Overlay -->
    <div
      id="sidebar-overlay"
      class="fixed inset-0 bg-black/50 z-40 lg:hidden hidden"
      onclick="document.getElementById('sidebar').classList.add('-translate-x-full'); document.getElementById('sidebar-overlay').classList.add('hidden');"
    ></div>

    <!-- Sidebar -->
    <div
      id="sidebar"
      class="fixed lg:sticky top-0 left-0 h-screen lg:h-auto w-80 bg-white z-50 lg:z-0 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out overflow-y-auto"
    >
      <!-- Mobile Header -->
      <div class="lg:hidden flex items-center justify-between p-4 border-b">
        <h2>Filtres</h2>
        <button onclick="document.getElementById('sidebar').classList.add('-translate-x-full'); document.getElementById('sidebar-overlay').classList.add('hidden');" class="p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M18 6 6 18"/><path d="m6 6 18 18"/></svg>
        </button>
      </div>

      <form action="index.php" method="GET" class="p-6">
        <!-- Mobile Navigation -->
        <div class="lg:hidden mb-6 pb-6 border-b border-gray-200">
          <h3 class="text-gray-900 mb-4">Navigation</h3>
          <div class="space-y-2">
            <a href="?page=nouveautes" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
              Nouveautés
            </a>
            <a href="?page=catalogue" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
              Collections
            </a>
            <a href="?page=sur-mesure" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
              Sur Mesure
            </a>
            <a href="?page=a-propos" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
              À Propos
            </a>
          </div>
        </div>

        <!-- Categories -->
        <div class="mb-8">
          <div class="w-full flex items-center justify-between mb-4">
            <h3>Catégories</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="m6 9 6 6 6-6"/></svg>
          </div>

          <div class="space-y-2">
            <?php foreach ($categories as $cat): ?>
              <label class="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-2 rounded transition-colors">
                <input
                  type="radio"
                  name="category"
                  value="<?php echo $cat['id']; ?>"
                  <?php echo $selectedCategory === $cat['id'] ? 'checked' : ''; ?>
                  onchange="this.form.submit()"
                  class="w-4 h-4 accent-black"
                />
                <span class="text-gray-700"><?php echo $cat['label']; ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Price Range -->
        <div>
          <div class="w-full flex items-center justify-between mb-4">
            <h3>Prix</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="m6 9 6 6 6-6"/></svg>
          </div>

          <div class="space-y-2">
            <?php foreach ($priceRanges as $range): ?>
              <label class="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-2 rounded transition-colors">
                <input
                  type="radio"
                  name="price_range"
                  value="<?php echo $range['id']; ?>"
                  <?php echo $selectedPriceId === $range['id'] ? 'checked' : ''; ?>
                  onchange="this.form.submit()"
                  class="w-4 h-4 accent-black"
                />
                <span class="text-gray-700"><?php echo $range['label']; ?></span>
              </label>
            <?php endforeach; ?>
          </div>
        </div>
      </form>
    </div>
    <?php
}
?>
