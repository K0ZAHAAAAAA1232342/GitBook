import { ChevronDown, X } from "lucide-react";
import { useState } from "react";

interface FilterSidebarProps {
  selectedCategory: string;
  onCategoryChange: (category: string) => void;
  priceRange: [number, number];
  onPriceRangeChange: (range: [number, number]) => void;
  isOpen: boolean;
  onClose: () => void;
}

const categories = [
  { id: "all", label: "Tous les produits" },
  { id: "rings", label: "Bagues" },
  { id: "necklaces", label: "Colliers" },
  { id: "earrings", label: "Boucles d'oreilles" },
  { id: "bracelets", label: "Bracelets" },
  { id: "watches", label: "Montres" },
];

const priceRanges = [
  { id: "all", label: "Tous les prix", min: 0, max: 100000 },
  { id: "4000-10000", label: "4 000 € - 10 000 €", min: 4000, max: 10000 },
  { id: "10000-20000", label: "10 000 € - 20 000 €", min: 10000, max: 20000 },
  { id: "20000-50000", label: "20 000 € - 50 000 €", min: 20000, max: 50000 },
  { id: "50000+", label: "50 000 € +", min: 50000, max: 100000 },
];

export function FilterSidebar({
  selectedCategory,
  onCategoryChange,
  priceRange,
  onPriceRangeChange,
  isOpen,
  onClose,
}: FilterSidebarProps) {
  const [isCategoryOpen, setIsCategoryOpen] = useState(true);
  const [isPriceOpen, setIsPriceOpen] = useState(true);

  return (
    <>
      {/* Mobile Overlay */}
      {isOpen && (
        <div
          className="fixed inset-0 bg-black/50 z-40 lg:hidden"
          onClick={onClose}
        />
      )}

      {/* Sidebar */}
      <div
        className={`
          fixed lg:sticky top-0 left-0 h-screen lg:h-auto
          w-80 bg-white z-50 lg:z-0
          transform transition-transform duration-300 ease-in-out
          ${isOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'}
          overflow-y-auto
        `}
      >
        {/* Mobile Header */}
        <div className="lg:hidden flex items-center justify-between p-4 border-b">
          <h2>Filtres</h2>
          <button onClick={onClose} className="p-2">
            <X className="w-5 h-5" />
          </button>
        </div>

        <div className="p-6">
          {/* Mobile Navigation */}
          <div className="lg:hidden mb-6 pb-6 border-b border-gray-200">
            <h3 className="text-gray-900 mb-4">Navigation</h3>
            <div className="space-y-2">
              <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                Nouveautés
              </button>
              <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                Collections
              </button>
              <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                Sur Mesure
              </button>
              <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                À Propos
              </button>
            </div>
          </div>

          {/* Categories */}
          <div className="mb-8">
            <button
              onClick={() => setIsCategoryOpen(!isCategoryOpen)}
              className="w-full flex items-center justify-between mb-4"
            >
              <h3>Catégories</h3>
              <ChevronDown
                className={`w-5 h-5 transition-transform ${isCategoryOpen ? 'rotate-180' : ''}`}
              />
            </button>

            {isCategoryOpen && (
              <div className="space-y-2">
                {categories.map((category) => (
                  <label
                    key={category.id}
                    className="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-2 rounded transition-colors"
                  >
                    <input
                      type="radio"
                      name="category"
                      value={category.id}
                      checked={selectedCategory === category.id}
                      onChange={() => onCategoryChange(category.id)}
                      className="w-4 h-4 accent-black"
                    />
                    <span className="text-gray-700">{category.label}</span>
                  </label>
                ))}
              </div>
            )}
          </div>

          {/* Price Range */}
          <div>
            <button
              onClick={() => setIsPriceOpen(!isPriceOpen)}
              className="w-full flex items-center justify-between mb-4"
            >
              <h3>Prix</h3>
              <ChevronDown
                className={`w-5 h-5 transition-transform ${isPriceOpen ? 'rotate-180' : ''}`}
              />
            </button>

            {isPriceOpen && (
              <div className="space-y-2">
                {priceRanges.map((range) => (
                  <label
                    key={range.id}
                    className="flex items-center gap-3 cursor-pointer hover:bg-gray-50 p-2 rounded transition-colors"
                  >
                    <input
                      type="radio"
                      name="price"
                      value={range.id}
                      checked={priceRange[0] === range.min && priceRange[1] === range.max}
                      onChange={() => onPriceRangeChange([range.min, range.max])}
                      className="w-4 h-4 accent-black"
                    />
                    <span className="text-gray-700">{range.label}</span>
                  </label>
                ))}
              </div>
            )}
          </div>
        </div>
      </div>
    </>
  );
}