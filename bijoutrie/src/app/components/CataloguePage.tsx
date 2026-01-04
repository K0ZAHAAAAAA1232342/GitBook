import { useState } from "react";
import { FilterSidebar } from "./FilterSidebar";
import { ProductCard } from "./ProductCard";

interface Product {
  id: number;
  name: string;
  price: number;
  category: string;
  categoryId: string;
  image: string;
  rating: number;
  isNew: boolean;
}

interface CataloguePageProps {
  products: Product[];
  isSidebarOpen: boolean;
  onCloseSidebar: () => void;
}

export function CataloguePage({ products, isSidebarOpen, onCloseSidebar }: CataloguePageProps) {
  const [selectedCategory, setSelectedCategory] = useState("all");
  const [priceRange, setPriceRange] = useState<[number, number]>([0, 100000]);

  // Filter products
  const filteredProducts = products.filter((product) => {
    const categoryMatch = selectedCategory === "all" || product.categoryId === selectedCategory;
    const priceMatch = product.price >= priceRange[0] && product.price <= priceRange[1];
    return categoryMatch && priceMatch;
  });

  return (
    <div className="container mx-auto px-4 py-8">
      <div className="flex gap-8">
        {/* Sidebar */}
        <aside className="lg:w-80 flex-shrink-0">
          <FilterSidebar
            selectedCategory={selectedCategory}
            onCategoryChange={setSelectedCategory}
            priceRange={priceRange}
            onPriceRangeChange={setPriceRange}
            isOpen={isSidebarOpen}
            onClose={onCloseSidebar}
          />
        </aside>

        {/* Main Content */}
        <main className="flex-1">
          {/* Header */}
          <div className="mb-8">
            <h2 className="text-gray-900 mb-2">
              {selectedCategory === "all"
                ? "Toute la Collection"
                : products.find((p) => p.categoryId === selectedCategory)?.category || "Collection"}
            </h2>
            <p className="text-gray-600">
              {filteredProducts.length} {filteredProducts.length === 1 ? "produit" : "produits"}
            </p>
          </div>

          {/* Product Grid */}
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {filteredProducts.map((product) => (
              <ProductCard key={product.id} {...product} />
            ))}
          </div>

          {/* No Results */}
          {filteredProducts.length === 0 && (
            <div className="text-center py-16">
              <p className="text-gray-500 mb-4">Aucun produit ne correspond à vos critères</p>
              <button
                onClick={() => {
                  setSelectedCategory("all");
                  setPriceRange([0, 100000]);
                }}
                className="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-800 transition-colors"
              >
                Réinitialiser les filtres
              </button>
            </div>
          )}
        </main>
      </div>
    </div>
  );
}
