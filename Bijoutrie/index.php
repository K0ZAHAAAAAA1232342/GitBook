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
  // ? MONTRES
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
    'name' => "Rolex Day-Date “President” – Or jaune 18k",
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
    <title>Bijouterie - Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-50">
    <?php renderHeader(); ?>

    <div class="container mx-auto px-4 py-8">
      <div class="flex gap-8">
        <!-- Sidebar -->
        <aside class="lg:w-80 flex-shrink-0">
          <?php renderFilterSidebar($selectedCategory, $priceRange); ?>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
          <!-- Header -->
          <div class="mb-8">
            <h2 class="text-gray-900 mb-2 text-2xl font-semibold">
              <?php echo htmlspecialchars($currentCategoryName); ?>
            </h2>
            <p class="text-gray-600">
              <?php echo count($filteredProducts); ?> <?php echo count($filteredProducts) === 1 ? "produit" : "produits"; ?>
            </p>
          </div>

          <!-- Product Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($filteredProducts as $product): ?>
              <?php renderProductCard($product); ?>
            <?php endforeach; ?>
          </div>

          <!-- No Results -->
          <?php if (empty($filteredProducts)): ?>
            <div class="text-center py-16">
              <p class="text-gray-500 mb-4">Aucun produit ne correspond à vos critères</p>
              <a
                href="index.php"
                class="inline-block bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition-colors"
              >
                Réinitialiser les filtres
              </a>
            </div>
          <?php endif; ?>
        </main>
      </div>
    </div>
</body>
</html>
