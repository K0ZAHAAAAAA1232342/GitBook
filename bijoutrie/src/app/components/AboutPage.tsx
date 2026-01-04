import { MapPin, Phone, Mail, Clock } from "lucide-react";

const logo = "https://placehold.co/200x50?text=Logo";

export function AboutPage() {
  return (
    <div className="container mx-auto px-4 py-8">
      {/* Hero Section */}
      <div className="text-center max-w-3xl mx-auto mb-16">
        <img src={logo} alt="Stone Jewelry" className="h-32 w-auto mx-auto mb-8" />
        <h1 className="text-gray-900 mb-4">Stone Jewelry</h1>
        <p className="text-gray-600 text-lg">
          Maison de haute joaillerie fondée en 2024, dédiée à l'excellence 
          et à la création de pièces d'exception
        </p>
      </div>

      {/* Story Section */}
      <div className="max-w-4xl mx-auto mb-16">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
          <div>
            <h2 className="text-gray-900 mb-4">Notre Histoire</h2>
            <p className="text-gray-600 mb-4">
              Stone Jewelry est née d'une passion pour l'art joaillier et le désir 
              de créer des pièces uniques qui transcendent le temps. Fondée par des 
              artisans passionnés, notre maison s'est rapidement imposée comme une 
              référence dans l'univers de la haute joaillerie.
            </p>
            <p className="text-gray-600">
              Chaque création Stone Jewelry est le fruit d'un savoir-faire artisanal 
              transmis de génération en génération, allié aux techniques les plus 
              innovantes de la joaillerie contemporaine.
            </p>
          </div>

          <div>
            <h2 className="text-gray-900 mb-4">Notre Philosophie</h2>
            <p className="text-gray-600 mb-4">
              Nous croyons que chaque bijou raconte une histoire. C'est pourquoi 
              nous accordons une attention particulière à la sélection des matériaux 
              les plus nobles : or 18 carats, diamants certifiés et pierres précieuses 
              d'une pureté exceptionnelle.
            </p>
            <p className="text-gray-600">
              Notre engagement envers l'excellence se reflète dans chaque détail, 
              de la conception initiale à la livraison de votre pièce unique.
            </p>
          </div>
        </div>

        {/* Values */}
        <div className="bg-gray-50 rounded-lg p-8 mb-12">
          <h2 className="text-gray-900 mb-8 text-center">Nos Valeurs</h2>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div className="text-center">
              <h3 className="text-gray-900 mb-2">Excellence</h3>
              <p className="text-gray-600">
                Un engagement sans compromis envers la qualité et le raffinement
              </p>
            </div>
            <div className="text-center">
              <h3 className="text-gray-900 mb-2">Authenticité</h3>
              <p className="text-gray-600">
                Des créations uniques qui reflètent votre personnalité
              </p>
            </div>
            <div className="text-center">
              <h3 className="text-gray-900 mb-2">Innovation</h3>
              <p className="text-gray-600">
                L'alliance parfaite entre tradition et modernité
              </p>
            </div>
          </div>
        </div>
      </div>

      {/* Contact Section */}
      <div className="max-w-4xl mx-auto">
        <h2 className="text-gray-900 mb-8 text-center">Nous Contacter</h2>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {/* Contact Info */}
          <div className="bg-white border border-gray-200 rounded-lg p-8">
            <h3 className="text-gray-900 mb-6">Informations</h3>
            <div className="space-y-4">
              <div className="flex items-start gap-4">
                <MapPin className="w-5 h-5 text-gray-700 mt-1 flex-shrink-0" />
                <div>
                  <p className="text-gray-900 mb-1">Boutique Paris</p>
                  <p className="text-gray-600">
                    Place Vendôme<br />
                    75001 Paris, France
                  </p>
                </div>
              </div>

              <div className="flex items-start gap-4">
                <Phone className="w-5 h-5 text-gray-700 mt-1 flex-shrink-0" />
                <div>
                  <p className="text-gray-900 mb-1">Téléphone</p>
                  <p className="text-gray-600">+33 1 42 60 00 00</p>
                </div>
              </div>

              <div className="flex items-start gap-4">
                <Mail className="w-5 h-5 text-gray-700 mt-1 flex-shrink-0" />
                <div>
                  <p className="text-gray-900 mb-1">Email</p>
                  <p className="text-gray-600">contact@stonejewelry.com</p>
                </div>
              </div>

              <div className="flex items-start gap-4">
                <Clock className="w-5 h-5 text-gray-700 mt-1 flex-shrink-0" />
                <div>
                  <p className="text-gray-900 mb-1">Horaires</p>
                  <p className="text-gray-600">
                    Lundi - Samedi : 10h - 19h<br />
                    Dimanche : Fermé
                  </p>
                </div>
              </div>
            </div>
          </div>

          {/* Quick Contact Form */}
          <div className="bg-white border border-gray-200 rounded-lg p-8">
            <h3 className="text-gray-900 mb-6">Message Rapide</h3>
            <form className="space-y-4">
              <div>
                <label className="block text-gray-700 mb-2">Nom complet</label>
                <input
                  type="text"
                  className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
                  placeholder="Jean Dupont"
                />
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
                <label className="block text-gray-700 mb-2">Message</label>
                <textarea
                  rows={4}
                  className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-900"
                  placeholder="Votre message..."
                ></textarea>
              </div>

              <button
                type="submit"
                className="w-full bg-gray-900 text-white py-3 rounded-lg hover:bg-gray-800 transition-colors"
              >
                Envoyer
              </button>
            </form>
          </div>
        </div>
      </div>

      {/* Footer Note */}
      <div className="text-center mt-16 pt-8 border-t border-gray-200">
        <p className="text-gray-500">
          Stone Jewelry - Maison de Haute Joaillerie depuis 2024
        </p>
      </div>
    </div>
  );
}
