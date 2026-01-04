import { Sparkles, Diamond, Clock, Award } from "lucide-react";

export function CustomOrderPage() {
  return (
    <div className="container mx-auto px-4 py-8">
      {/* Hero Section */}
      <div className="text-center max-w-3xl mx-auto mb-16">
        <h1 className="text-gray-900 mb-4">Créations Sur Mesure</h1>
        <p className="text-gray-600 text-lg">
          Concrétisez vos rêves avec une pièce unique, créée spécialement pour vous 
          par nos maîtres joailliers
        </p>
      </div>

      {/* Features Grid */}
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
        <div className="text-center">
          <div className="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
            <Diamond className="w-8 h-8 text-white" />
          </div>
          <h3 className="text-gray-900 mb-2">Matériaux Premium</h3>
          <p className="text-gray-600">
            Or 18k, diamants certifiés et pierres précieuses d'exception
          </p>
        </div>

        <div className="text-center">
          <div className="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
            <Sparkles className="w-8 h-8 text-white" />
          </div>
          <h3 className="text-gray-900 mb-2">Design Unique</h3>
          <p className="text-gray-600">
            Chaque pièce est conçue selon vos désirs et votre personnalité
          </p>
        </div>

        <div className="text-center">
          <div className="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
            <Clock className="w-8 h-8 text-white" />
          </div>
          <h3 className="text-gray-900 mb-2">Délai 4-6 Semaines</h3>
          <p className="text-gray-600">
            Création artisanale dans nos ateliers parisiens
          </p>
        </div>

        <div className="text-center">
          <div className="w-16 h-16 bg-gray-900 rounded-full flex items-center justify-center mx-auto mb-4">
            <Award className="w-8 h-8 text-white" />
          </div>
          <h3 className="text-gray-900 mb-2">Garantie à Vie</h3>
          <p className="text-gray-600">
            Certificat d'authenticité et garantie complète inclus
          </p>
        </div>
      </div>

      {/* Process Section */}
      <div className="bg-gray-50 rounded-lg p-8 mb-12">
        <h2 className="text-gray-900 mb-8 text-center">Notre Processus</h2>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <div className="w-12 h-12 bg-gray-900 text-white rounded-full flex items-center justify-center mb-4">
              1
            </div>
            <h3 className="text-gray-900 mb-2">Consultation</h3>
            <p className="text-gray-600">
              Rencontre avec notre équipe pour définir votre vision et vos préférences
            </p>
          </div>

          <div>
            <div className="w-12 h-12 bg-gray-900 text-white rounded-full flex items-center justify-center mb-4">
              2
            </div>
            <h3 className="text-gray-900 mb-2">Conception</h3>
            <p className="text-gray-600">
              Création de maquettes 3D et sélection des matériaux avec notre joaillier
            </p>
          </div>

          <div>
            <div className="w-12 h-12 bg-gray-900 text-white rounded-full flex items-center justify-center mb-4">
              3
            </div>
            <h3 className="text-gray-900 mb-2">Réalisation</h3>
            <p className="text-gray-600">
              Fabrication artisanale de votre pièce unique dans nos ateliers
            </p>
          </div>
        </div>
      </div>

      {/* Contact Form */}
      <div className="max-w-2xl mx-auto bg-white border border-gray-200 rounded-lg p-8">
        <h2 className="text-gray-900 mb-6">Demander une Consultation</h2>
        <form className="space-y-6">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label className="block text-gray-700 mb-2">Prénom</label>
              <input
                type="text"
                className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
                placeholder="Jean"
              />
            </div>
            <div>
              <label className="block text-gray-700 mb-2">Nom</label>
              <input
                type="text"
                className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
                placeholder="Dupont"
              />
            </div>
          </div>

          <div>
            <label className="block text-gray-700 mb-2">Email</label>
            <input
              type="email"
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
              placeholder="jean.dupont@example.com"
            />
          </div>

          <div>
            <label className="block text-gray-700 mb-2">Téléphone</label>
            <input
              type="tel"
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
              placeholder="+33 6 12 34 56 78"
            />
          </div>

          <div>
            <label className="block text-gray-700 mb-2">Type de bijou souhaité</label>
            <select className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
              <option>Collier</option>
              <option>Montre</option>
              <option>Bague</option>
              <option>Bracelet</option>
              <option>Boucles d'oreilles</option>
              <option>Autre</option>
            </select>
          </div>

          <div>
            <label className="block text-gray-700 mb-2">Décrivez votre projet</label>
            <textarea
              rows={4}
              className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
              placeholder="Décrivez-nous votre vision, vos inspirations et vos préférences..."
            ></textarea>
          </div>

          <div>
            <label className="block text-gray-700 mb-2">Budget estimé</label>
            <select className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900">
              <option>10 000$ - 20 000$</option>
              <option>20 000$ - 50 000$</option>
              <option>50 000$ - 100 000$</option>
              <option>100 000$ +</option>
            </select>
          </div>

          <button
            type="submit"
            className="w-full bg-gray-900 text-white py-3 rounded-lg hover:bg-gray-800 transition-colors"
          >
            Envoyer la demande
          </button>
        </form>
      </div>
    </div>
  );
}
