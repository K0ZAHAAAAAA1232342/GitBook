<?php
function renderHeader($currentPage = 'catalogue') {
    $logo = "https://placehold.co/200x50?text=Logo";
    ?>
    <header class="sticky top-0 z-30 bg-white border-b border-gray-200">
      <div class="container mx-auto px-4">
        <!-- Top Bar -->
        <div class="flex items-center justify-between py-4">
          <!-- Mobile Menu Button -->
          <button
            onclick="document.getElementById('sidebar').classList.remove('-translate-x-full')"
            class="lg:hidden p-2 -ml-2 hover:bg-gray-100 rounded-lg transition-colors"
          >
            <!-- Menu Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
          </button>

          <!-- Logo -->
          <a href="index.php" class="flex-shrink-0 hover:opacity-80 transition-opacity">
            <img src="<?php echo $logo; ?>" alt="Stone Jewelry" class="h-12 w-auto" />
          </a>

          <!-- Desktop Navigation -->
          <nav class="hidden lg:flex items-center gap-8">
            <a href="?page=nouveautes" class="transition-colors <?php echo $currentPage === 'nouveautes' ? 'text-gray-900 font-medium' : 'text-gray-700 hover:text-gray-900'; ?>">
              Nouveautés
            </a>
            <a href="?page=catalogue" class="transition-colors <?php echo $currentPage === 'catalogue' ? 'text-gray-900 font-medium' : 'text-gray-700 hover:text-gray-900'; ?>">
              Collections
            </a>
            <a href="?page=sur-mesure" class="transition-colors <?php echo $currentPage === 'sur-mesure' ? 'text-gray-900 font-medium' : 'text-gray-700 hover:text-gray-900'; ?>">
              Sur Mesure
            </a>
            <a href="?page=a-propos" class="transition-colors <?php echo $currentPage === 'a-propos' ? 'text-gray-900 font-medium' : 'text-gray-700 hover:text-gray-900'; ?>">
              À Propos
            </a>
          </nav>

          <!-- Right Actions -->
          <div class="flex items-center gap-4">
            <button class="p-2 hover:bg-gray-100 rounded-full transition-colors hidden sm:block">
              <!-- Search Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </button>
            <button class="p-2 hover:bg-gray-100 rounded-full transition-colors relative">
              <!-- Heart Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
              <span class="absolute -top-1 -right-1 w-5 h-5 bg-black text-white rounded-full flex items-center justify-center text-xs">
                3
              </span>
            </button>
            <button class="p-2 hover:bg-gray-100 rounded-full transition-colors relative">
              <!-- ShoppingBag Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              <span class="absolute -top-1 -right-1 w-5 h-5 bg-black text-white rounded-full flex items-center justify-center text-xs">
                2
              </span>
            </button>
          </div>
        </div>

        <!-- Mobile Search -->
        <div class="sm:hidden pb-4">
          <div class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            <input
              type="text"
              placeholder="Rechercher..."
              class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
            />
          </div>
        </div>
      </div>
    </header>
    <?php
}
?>
