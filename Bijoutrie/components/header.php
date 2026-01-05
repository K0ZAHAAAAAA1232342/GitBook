<?php
function renderHeader($currentPage = 'catalogue') {
    $logo = "Gemini_Generated_Image_8xfwsl8xfwsl8xfw.png";
    ?>
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-xl border-b border-gold/20 shadow-md">
      <div class="container mx-auto px-4">
        <!-- Top Bar -->
        <div class="flex items-center justify-between py-4">
          <!-- Mobile Menu Button -->
          <button
            onclick="document.getElementById('sidebar').classList.remove('-translate-x-full'); document.getElementById('sidebar-overlay').classList.remove('hidden');"
            class="lg:hidden p-2 -ml-2 hover:bg-gray-100 rounded-lg transition-all duration-300 hover:scale-110"
            aria-label="Open menu"
          >
            <!-- Menu Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
          </button>

          <!-- Logo -->
          <a href="index.php" class="logo-container flex-shrink-0 hover:opacity-80 transition-all duration-300 relative group">
            <img src="<?php echo $logo; ?>" alt="Bijouterie Luxury" class="h-14 w-auto relative z-10 transition-transform duration-300 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-r from-gold/20 to-silver/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </a>

          <!-- Desktop Navigation -->
          <nav class="hidden lg:flex items-center gap-8">
            <a href="index.php" class="nav-link relative py-2 text-sm font-semibold tracking-wider uppercase transition-all duration-300 <?php echo $currentPage === 'catalogue' ? 'text-gold' : 'text-gray-700 hover:text-gold'; ?>">
              Collections
              <?php if($currentPage === 'catalogue'): ?>
              <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-gold to-dark-gold"></span>
              <?php endif; ?>
            </a>
            <a href="?page=nouveautes" class="nav-link relative py-2 text-sm font-semibold tracking-wider uppercase transition-all duration-300 <?php echo $currentPage === 'nouveautes' ? 'text-gold' : 'text-gray-700 hover:text-gold'; ?>">
              Nouveautés
              <span class="absolute top-0 right-0 -mt-1 -mr-1 w-2 h-2 bg-gold rounded-full animate-pulse"></span>
              <?php if($currentPage === 'nouveautes'): ?>
              <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-gold to-dark-gold"></span>
              <?php endif; ?>
            </a>
            <a href="?page=sur-mesure" class="nav-link relative py-2 text-sm font-semibold tracking-wider uppercase transition-all duration-300 <?php echo $currentPage === 'sur-mesure' ? 'text-gold' : 'text-gray-700 hover:text-gold'; ?>">
              Sur Mesure
              <?php if($currentPage === 'sur-mesure'): ?>
              <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-gold to-dark-gold"></span>
              <?php endif; ?>
            </a>
            <a href="?page=a-propos" class="nav-link relative py-2 text-sm font-semibold tracking-wider uppercase transition-all duration-300 <?php echo $currentPage === 'a-propos' ? 'text-gold' : 'text-gray-700 hover:text-gold'; ?>">
              À Propos
              <?php if($currentPage === 'a-propos'): ?>
              <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-gold to-dark-gold"></span>
              <?php endif; ?>
            </a>
          </nav>

          <!-- Right Actions -->
          <div class="flex items-center gap-2">
            <button class="p-2.5 hover:bg-gray-100 rounded-full transition-all duration-300 hidden sm:block group" aria-label="Search">
              <!-- Search Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700 group-hover:text-gold transition-colors"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            </button>
            <button class="p-2.5 hover:bg-gray-100 rounded-full transition-all duration-300 relative group" aria-label="Favoris">
              <!-- Heart Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700 group-hover:text-gold transition-colors group-hover:scale-110 duration-300"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
              <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-br from-gold to-dark-gold text-white rounded-full flex items-center justify-center text-xs font-bold shadow-lg">
                3
              </span>
            </button>
            <button class="p-2.5 hover:bg-gray-100 rounded-full transition-all duration-300 relative group" aria-label="Panier">
              <!-- ShoppingBag Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-700 group-hover:text-gold transition-colors group-hover:scale-110 duration-300"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              <span class="absolute -top-1 -right-1 w-5 h-5 bg-gradient-to-br from-gold to-dark-gold text-white rounded-full flex items-center justify-center text-xs font-bold shadow-lg">
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
              placeholder="Rechercher un bijou..."
              class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent transition-all duration-300"
            />
          </div>
        </div>
      </div>
    </header>
    <?php
}
?>
