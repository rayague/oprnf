'use client';

import { useState } from 'react';
import Link from 'next/link';
import Image from 'next/image';

export default function Hypotheses() {
  const [formData, setFormData] = useState({
    nom: '',
    type: '',
    valeur: '',
    unite: '',
    periode: '',
    description: ''
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    // Logique de soumission à implémenter
    console.log('Données du formulaire:', formData);
  };

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Header */}
      <header className="bg-white shadow-sm sticky top-0 z-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center h-16">
            {/* Logo et titre */}
            <div className="flex items-center space-x-3 sm:space-x-4">
              <Image
                src="/images/logo5.png"
                alt="Logo DGTCP"
                width={176}
                height={64}
                className="w-20 sm:w-24 lg:w-28"
                priority
              />
              <Image
                src="/images/logo3.png"
                alt="Logo OPRNF"
                width={64}
                height={64}
                className="w-6 sm:w-8 lg:w-10"
                priority
              />
              <div className="hidden sm:block">
                <h1 className="text-lg font-semibold text-gray-900">OPRNF</h1>
                <p className="text-xs text-gray-500">Gestion des hypothèses</p>
              </div>
            </div>

            {/* Bouton retour */}
            <Link
              href="/dashboard"
              className="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
            >
              <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
              </svg>
              Retour
            </Link>
          </div>
        </div>
      </header>

      {/* Main Content */}
      <main className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div className="bg-white rounded-lg shadow">
          <div className="p-6">
            <h2 className="text-2xl font-semibold text-gray-900 mb-6">Nouvelle hypothèse</h2>
            
            <form onSubmit={handleSubmit} className="space-y-6 max-w-2xl">
              <div>
                <label htmlFor="nom" className="block text-sm font-medium text-gray-700">
                  Nom de l'hypothèse
                </label>
                <input
                  type="text"
                  id="nom"
                  name="nom"
                  value={formData.nom}
                  onChange={(e) => setFormData({ ...formData, nom: e.target.value })}
                  className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500"
                  placeholder="Entrez le nom de l'hypothèse"
                  required
                />
              </div>

              <div>
                <label htmlFor="type" className="block text-sm font-medium text-gray-700">
                  Type d'hypothèse
                </label>
                <select
                  id="type"
                  name="type"
                  value={formData.type}
                  onChange={(e) => setFormData({ ...formData, type: e.target.value })}
                  className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500"
                  required
                >
                  <option value="">Sélectionnez un type</option>
                  <option value="taux">Taux de croissance</option>
                  <option value="inflation">Taux d'inflation</option>
                  <option value="population">Population</option>
                  <option value="autre">Autre</option>
                </select>
              </div>

              <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label htmlFor="valeur" className="block text-sm font-medium text-gray-700">
                    Valeur
                  </label>
                  <input
                    type="number"
                    id="valeur"
                    name="valeur"
                    value={formData.valeur}
                    onChange={(e) => setFormData({ ...formData, valeur: e.target.value })}
                    className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500"
                    placeholder="Entrez la valeur"
                    required
                  />
                </div>

                <div>
                  <label htmlFor="unite" className="block text-sm font-medium text-gray-700">
                    Unité
                  </label>
                  <select
                    id="unite"
                    name="unite"
                    value={formData.unite}
                    onChange={(e) => setFormData({ ...formData, unite: e.target.value })}
                    className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500"
                    required
                  >
                    <option value="">Sélectionnez une unité</option>
                    <option value="pourcentage">%</option>
                    <option value="nombre">Nombre</option>
                    <option value="monetaire">FCFA</option>
                  </select>
                </div>
              </div>

              <div>
                <label htmlFor="periode" className="block text-sm font-medium text-gray-700">
                  Période
                </label>
                <select
                  id="periode"
                  name="periode"
                  value={formData.periode}
                  onChange={(e) => setFormData({ ...formData, periode: e.target.value })}
                  className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500"
                  required
                >
                  <option value="">Sélectionnez une période</option>
                  <option value="annuel">Annuel</option>
                  <option value="trimestriel">Trimestriel</option>
                  <option value="mensuel">Mensuel</option>
                </select>
              </div>

              <div>
                <label htmlFor="description" className="block text-sm font-medium text-gray-700">
                  Description
                </label>
                <textarea
                  id="description"
                  name="description"
                  value={formData.description}
                  onChange={(e) => setFormData({ ...formData, description: e.target.value })}
                  rows={4}
                  className="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500"
                  placeholder="Décrivez l'hypothèse..."
                />
              </div>

              <div className="flex justify-end space-x-4">
                <Link
                  href="/dashboard"
                  className="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                >
                  Annuler
                </Link>
                <button
                  type="submit"
                  className="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                >
                  Enregistrer
                </button>
              </div>
            </form>

            {/* Liste des hypothèses récentes */}
            <div className="mt-12">
              <h3 className="text-lg font-medium text-gray-900 mb-4">Hypothèses récentes</h3>
              <div className="overflow-x-auto">
                <table className="min-w-full divide-y divide-gray-200">
                  <thead className="bg-gray-50">
                    <tr>
                      <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nom
                      </th>
                      <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Type
                      </th>
                      <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Valeur
                      </th>
                      <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Période
                      </th>
                      <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Description
                      </th>
                    </tr>
                  </thead>
                  <tbody className="bg-white divide-y divide-gray-200">
                    <tr className="hover:bg-gray-50">
                      <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Taux de croissance</td>
                      <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Taux</td>
                      <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900">5.2%</td>
                      <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Annuel</td>
                      <td className="px-6 py-4 text-sm text-gray-500">Taux de croissance économique prévu</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  );
} 