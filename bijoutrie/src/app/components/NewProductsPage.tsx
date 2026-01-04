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

interface NewProductsPageProps {
  products: Product[];
}

export function NewProductsPage({ products }: NewProductsPageProps) {
  const newProducts = products.filter((p) => p.isNew);

  return (
    <div className="container mx-auto px-4 py-8">
      <div className="mb-8">
        <h1 className="text-gray-900 mb-2">Nouveautés</h1>
        <p className="text-gray-600">
          Découvrez nos dernières créations exclusives
        </p>
        <p className="text-gray-500 mt-2">
          {newProducts.length} {newProducts.length === 1 ? "produit" : "produits"}
        </p>
      </div>

      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        {newProducts.map((product) => (
          <ProductCard key={product.id} {...product} />
        ))}
      </div>
    </div>
  );
}
