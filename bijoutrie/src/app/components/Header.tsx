import { Search, ShoppingBag, Heart, Menu } from "lucide-react";

const logo = "https://placehold.co/200x50?text=Logo";

interface HeaderProps {
  onMenuClick: () => void;
  currentPage: string;
  onNavigate: (page: string) => void;
}

export function Header({ onMenuClick, currentPage, onNavigate }: HeaderProps) {
  return (
    <header className="sticky top-0 z-30 bg-white border-b border-gray-200">
      <div className="container mx-auto px-4">
        {/* Top Bar */}
        <div className="flex items-center justify-between py-4">
          {/* Mobile Menu Button */}
          <button
            onClick={onMenuClick}
            className="lg:hidden p-2 -ml-2 hover:bg-gray-100 rounded-lg transition-colors"
          >
            <Menu className="w-6 h-6" />
          </button>

          {/* Logo */}
          <button
            onClick={() => onNavigate("catalogue")}
            className="flex-shrink-0 hover:opacity-80 transition-opacity"
          >
            <img src={logo} alt="Stone Jewelry" className="h-12 w-auto" />
          </button>

          {/* Desktop Navigation */}
          <nav className="hidden lg:flex items-center gap-8">
            <button
              onClick={() => onNavigate("nouveautes")}
              className={`transition-colors ${
                currentPage === "nouveautes"
                  ? "text-gray-900 font-medium"
                  : "text-gray-700 hover:text-gray-900"
              }`}
            >
              Nouveautés
            </button>
            <button
              onClick={() => onNavigate("catalogue")}
              className={`transition-colors ${
                currentPage === "catalogue"
                  ? "text-gray-900 font-medium"
                  : "text-gray-700 hover:text-gray-900"
              }`}
            >
              Collections
            </button>
            <button
              onClick={() => onNavigate("sur-mesure")}
              className={`transition-colors ${
                currentPage === "sur-mesure"
                  ? "text-gray-900 font-medium"
                  : "text-gray-700 hover:text-gray-900"
              }`}
            >
              Sur Mesure
            </button>
            <button
              onClick={() => onNavigate("a-propos")}
              className={`transition-colors ${
                currentPage === "a-propos"
                  ? "text-gray-900 font-medium"
                  : "text-gray-700 hover:text-gray-900"
              }`}
            >
              À Propos
            </button>
          </nav>

          {/* Right Actions */}
          <div className="flex items-center gap-4">
            <button className="p-2 hover:bg-gray-100 rounded-full transition-colors hidden sm:block">
              <Search className="w-5 h-5 text-gray-700" />
            </button>
            <button className="p-2 hover:bg-gray-100 rounded-full transition-colors relative">
              <Heart className="w-5 h-5 text-gray-700" />
              <span className="absolute -top-1 -right-1 w-5 h-5 bg-black text-white rounded-full flex items-center justify-center">
                3
              </span>
            </button>
            <button className="p-2 hover:bg-gray-100 rounded-full transition-colors relative">
              <ShoppingBag className="w-5 h-5 text-gray-700" />
              <span className="absolute -top-1 -right-1 w-5 h-5 bg-black text-white rounded-full flex items-center justify-center">
                2
              </span>
            </button>
          </div>
        </div>

        {/* Mobile Search */}
        <div className="sm:hidden pb-4">
          <div className="relative">
            <Search className="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" />
            <input
              type="text"
              placeholder="Rechercher..."
              className="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
            />
          </div>
        </div>
      </div>
    </header>
  );
}