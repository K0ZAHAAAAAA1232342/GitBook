import { useState } from "react";
import { Header } from "./components/Header";
import { CataloguePage } from "./components/CataloguePage";
import { NewProductsPage } from "./components/NewProductsPage";
import { CustomOrderPage } from "./components/CustomOrderPage";
import { AboutPage } from "./components/AboutPage";

import pendant1 from "../assets/Chaine.png";
import pendant2 from "../assets/ChaineBMF.png";
import pendant3 from "../assets/ChaineB.png";
import watch1 from "../assets/Chaine667.png";
import watch2 from "../assets/MontreOr.png";
import watch3 from "../assets/MontreArgent.png";
import chain1 from "../assets/MontreBleu.png";
import watch4 from "../assets/MontreRouge.png";
import watch5 from "../assets/MontreMarron.png";

const products = [
  {
    id: 1,
    name: "Pendentif Triangle Diamant",
    price: 4500,
    category: "Colliers",
    categoryId: "necklaces",
    image: pendant1,
    rating: 5,
    isNew: true,
  },
  {
    id: 2,
    name: "Chaîne BMF Sur Mesure",
    price: 12000,
    category: "Colliers",
    categoryId: "necklaces",
    image: pendant2,
    rating: 5,
    isNew: true,
  },
  {
    id: 3,
    name: "Pendentif Symbole Or",
    price: 5200,
    category: "Colliers",
    categoryId: "necklaces",
    image: pendant3,
    rating: 5,
    isNew: false,
  },

  // ⌚ MONTRES
  {
    id: 4,
    name: "Rolex Submariner Date – Acier",
    price: 13500,
    category: "Montres",
    categoryId: "watches",
    image: chain1,
    rating: 5,
    isNew: true,
  },
  {
    id: 5,
    name: "Rolex Day-Date “President” – Or jaune 18k",
    price: 52000,
    category: "Montres",
    categoryId: "watches",
    image: watch2,
    rating: 5,
    isNew: true,
  },
  {
    id: 6,
    name: "Audemars Piguet Royal Oak – Acier",
    price: 48000,
    category: "Montres",
    categoryId: "watches",
    image: watch3,
    rating: 5,
    isNew: false,
  },
  {
    id: 7,
    name: "Chaîne Luxe Noire",
    price: 5500,
    category: "Colliers",
    categoryId: "necklaces",
    image: watch1,
    rating: 5,
    isNew: true,
  },
  {
    id: 8,
    name: "Patek Philippe Nautilus – Acier",
    price: 75000,
    category: "Montres",
    categoryId: "watches",
    image: watch4,
    rating: 5,
    isNew: true,
  },
  {
    id: 9,
    name: "Rolex Day-Date Everose – Or rose",
    price: 58000,
    category: "Montres",
    categoryId: "watches",
    image: watch5,
    rating: 5,
    isNew: false,
  },
];

function App() {
  const [currentPage, setCurrentPage] = useState("catalogue");
  const [isSidebarOpen, setIsSidebarOpen] = useState(false);

  const renderPage = () => {
    switch (currentPage) {
      case "nouveautes":
        return <NewProductsPage products={products} />;
      case "catalogue":
        return (
          <CataloguePage
            products={products}
            isSidebarOpen={isSidebarOpen}
            onCloseSidebar={() => setIsSidebarOpen(false)}
          />
        );
      case "sur-mesure":
        return <CustomOrderPage />;
      case "a-propos":
        return <AboutPage />;
      default:
        return (
          <CataloguePage
            products={products}
            isSidebarOpen={isSidebarOpen}
            onCloseSidebar={() => setIsSidebarOpen(false)}
          />
        );
    }
  };

  return (
    <div className="min-h-screen bg-gray-50">
      <Header
        onMenuClick={() => setIsSidebarOpen(true)}
        currentPage={currentPage}
        onNavigate={setCurrentPage}
      />
      {renderPage()}
    </div>
  );
}

export default App;