<?php
// Include components
require_once 'components/header.php';
require_once 'components/product_card.php';
require_once 'components/filter_sidebar.php';

// Data
$products = [
  [
    'id' => 1,
    'name' => "Pendentif Triangle Diamant",
    'price' => 4500,
    'category' => "Colliers",
    'categoryId' => "necklaces",
    'image' => "assets/Chaine.png",
    'rating' => 5,
    'isNew' => true,
  ],
  [
    'id' => 2,
    'name' => "Chaîne BMF Sur Mesure",
    'price' => 12000,
    'category' => "Colliers",
    'categoryId' => "necklaces",
    'image' => "assets/ChaineBMF.png",
    'rating' => 5,
    'isNew' => true,
  ],
  [
    'id' => 3,
    'name' => "Pendentif Symbole Or",
    'price' => 5200,
    'category' => "Colliers",
    'categoryId' => "necklaces",
    'image' => "assets/ChaineB.png",
    'rating' => 5,
    'isNew' => false,
  ],
  [
    'id' => 4,
    'name' => "Rolex Submariner Date – Acier",
    'price' => 13500,
    'category' => "Montres",
    'categoryId' => "watches",
    'image' => "assets/MontreBleu.png",
    'rating' => 5,
    'isNew' => true,
  ],
  [
    'id' => 5,
    'name' => "Rolex Day-Date President – Or jaune 18k",
    'price' => 52000,
    'category' => "Montres",
    'categoryId' => "watches",
    'image' => "assets/MontreOr.png",
    'rating' => 5,
    'isNew' => true,
  ],
  [
    'id' => 6,
    'name' => "Audemars Piguet Royal Oak – Acier",
    'price' => 48000,
    'category' => "Montres",
    'categoryId' => "watches",
    'image' => "assets/MontreArgent.png",
    'rating' => 5,
    'isNew' => false,
  ],
  [
    'id' => 7,
    'name' => "Chaîne Luxe Noire",
    'price' => 5500,
    'category' => "Colliers",
    'categoryId' => "necklaces",
    'image' => "assets/Chaine667.png",
    'rating' => 5,
    'isNew' => true,
  ],
  [
    'id' => 8,
    'name' => "Patek Philippe Nautilus – Acier",
    'price' => 75000,
    'category' => "Montres",
    'categoryId' => "watches",
    'image' => "assets/MontreRouge.png",
    'rating' => 5,
    'isNew' => true,
  ],
  [
    'id' => 9,
    'name' => "Rolex Day-Date Everose – Or rose",
    'price' => 58000,
    'category' => "Montres",
    'categoryId' => "watches",
    'image' => "assets/MontreMarron.png",
    'rating' => 5,
    'isNew' => false,
  ],
];

// Handle Filters
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
$selectedPriceRangeId = isset($_GET['price_range']) ? $_GET['price_range'] : 'all';

// Map price range ID to min/max
$priceRanges = [
    'all' => [0, 100000],
    '4000-10000' => [4000, 10000],
    '10000-20000' => [10000, 20000],
    '20000-50000' => [20000, 50000],
    '50000+' => [50000, 100000],
];
$priceRange = isset($priceRanges[$selectedPriceRangeId]) ? $priceRanges[$selectedPriceRangeId] : [0, 100000];

// Filter Logic
$filteredProducts = array_filter($products, function($product) use ($selectedCategory, $priceRange) {
    $categoryMatch = $selectedCategory === 'all' || $product['categoryId'] === $selectedCategory;
    $priceMatch = $product['price'] >= $priceRange[0] && $product['price'] <= $priceRange[1];
    return $categoryMatch && $priceMatch;
});

// Get current category name for display
$currentCategoryName = "Toute la Collection";
if ($selectedCategory !== 'all') {
    foreach ($products as $p) {
        if ($p['categoryId'] === $selectedCategory) {
            $currentCategoryName = $p['category'];
            break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bijouterie Luxury - Catalogue Haute Joaillerie</title>
    <meta name="description" content="Découvrez notre collection exclusive de bijoux et montres de luxe. Colliers, montres Rolex, créations sur mesure.">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              gold: '#D4AF37',
              'dark-gold': '#B8941E',
              silver: '#C0C0C0',
              cream: '#FAF8F3'
            }
          }
        }
      }
    </script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/style.css">
    
    <!-- Favicon -->
    <link rel="icon" href="Gemini_Generated_Image_8xfwsl8xfwsl8xfw.png" type="image/png">
</head>
<body class="bg-cream">
    <?php renderHeader(); ?>

    <!-- Hero Section -->
    <section class="hero relative min-h-[70vh] flex items-center justify-center text-center px-4 py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gold rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-silver rounded-full filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
      </div>
      
      <div class="hero-content relative z-10 max-w-4xl mx-auto space-y-8">
        <h1 class="hero-title text-5xl md:text-7xl font-bold bg-gradient-to-r from-gold via-silver to-gold bg-clip-text text-transparent mb-6 animate-fade-in-up">
          Bijouterie Luxury
        </h1>
        <p class="hero-subtitle text-xl md:text-2xl text-gray-300 font-light max-w-2xl mx-auto" style="animation: fadeInUp 0.8s ease-out 0.2s both;">
          L'excellence de la haute joaillerie française
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" style="animation: fadeInUp 0.8s ease-out 0.4s both;">
          <a href="#collection" class="btn-primary px-8 py-4 bg-gradient-to-r from-gold to-dark-gold text-white rounded-full hover:shadow-2xl transition-all duration-300 transform hover:scale-105 flex items-center gap-2">
            <span class="font-semibold tracking-wide">Découvrir la Collection</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <a href="?page=sur-mesure" class="px-8 py-4 border-2 border-gold text-gold rounded-full hover:bg-gold hover:text-white transition-all duration-300 transform hover:scale-105 font-semibold tracking-wide">
            Création Sur Mesure
          </a>
        </div>
      </div>
      
      <div class="scroll-indicator absolute bottom-8">
        <svg class="w-6 h-6 text-gold animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </div>
    </section>

    <!-- Main Collection -->
    <div id="collection" class="container mx-auto px-4 py-16">
      <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar -->
        <aside class="lg:w-80 flex-shrink-0">
          <?php renderFilterSidebar($selectedCategory, $priceRange); ?>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
          <!-- Collection Header -->
          <div class="mb-12 fade-in-up">
            <div class="flex items-center justify-between mb-6">
              <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-2">
                  <?php echo htmlspecialchars($currentCategoryName); ?>
                </h2>
                <p class="text-gray-600 flex items-center gap-2">
                  <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="font-semibold"><?php echo count($filteredProducts); ?></span> 
                  <?php echo count($filteredProducts) === 1 ? "produit d'exception" : "produits d'exception"; ?>
                </p>
              </div>
            </div>
          </div>

          <!-- Product Grid -->
          <?php if (!empty($filteredProducts)): ?>
          <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
            <?php foreach ($filteredProducts as $product): ?>
              <?php renderProductCard($product); ?>
            <?php endforeach; ?>
          </div>
          <?php else: ?>
          <!-- No Results -->
          <div class="text-center py-20 fade-in-up">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="text-2xl font-semibold text-gray-700 mb-4">Aucun produit trouvé</h3>
            <p class="text-gray-500 mb-8">Essayez de modifier vos filtres pour découvrir nos créations</p>
            <a href="index.php" class="btn-primary inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-gold to-dark-gold text-white rounded-full hover:shadow-xl transition-all duration-300">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
              </svg>
              Réinitialiser les filtres
            </a>
          </div>
          <?php endif; ?>
        </main>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 mt-20">
      <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
          <div>
            <h3 class="text-2xl font-bold bg-gradient-to-r from-gold to-silver bg-clip-text text-transparent mb-4">Bijouterie Luxury</h3>
            <p class="text-gray-400">L'art de la haute joaillerie française depuis 1890</p>
          </div>
          <div>
            <h4 class="font-semibold mb-4 text-gold">Navigation</h4>
            <ul class="space-y-2 text-gray-400">
              <li><a href="index.php" class="hover:text-gold transition-colors">Collections</a></li>
              <li><a href="?page=nouveautes" class="hover:text-gold transition-colors">Nouveautés</a></li>
              <li><a href="?page=sur-mesure" class="hover:text-gold transition-colors">Sur Mesure</a></li>
              <li><a href="?page=a-propos" class="hover:text-gold transition-colors">À Propos</a></li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold mb-4 text-gold">Service Client</h4>
            <ul class="space-y-2 text-gray-400">
              <li><a href="#" class="hover:text-gold transition-colors">Contact</a></li>
              <li><a href="#" class="hover:text-gold transition-colors">Livraison</a></li>
              <li><a href="#" class="hover:text-gold transition-colors">Retours</a></li>
              <li><a href="#" class="hover:text-gold transition-colors">FAQ</a></li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold mb-4 text-gold">Newsletter</h4>
            <p class="text-gray-400 mb-4 text-sm">Recevez nos offres exclusives</p>
            <input type="email" placeholder="Votre email" class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 focus:border-gold focus:outline-none text-white">
          </div>
        </div>
        <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
          <p>&copy; 2024 Bijouterie Luxury. Tous droits réservés.</p>
        </div>
      </div>
    </footer>
</body>
</html>
