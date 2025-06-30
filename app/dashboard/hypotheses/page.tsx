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
                src="/images/logo2.png"
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
              href="/dashboard?tab=menu"
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
        {/* Section Formulaire */}
        <div className="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl mb-8 border border-gray-100">
          <div className="bg-gradient-to-r from-green-600 to-green-500 px-6 py-4 rounded-t-2xl">
            <h2 className="text-xl font-bold text-white flex items-center">
              <svg className="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
              </svg>
              Formulaire d'importation et sélection
            </h2>
          </div>
          
          <div className="p-6 sm:p-8">
            <form onSubmit={handleSubmit} className="space-y-6 max-w-2xl mx-auto">
              {/* Champs obligatoires sur la même ligne pour grand écran */}
              <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {/* Champ 1 obligatoire à remplir avant d'afficher les autres */}
                <div className="space-y-2">
                  <label htmlFor="userField1" className="block text-sm font-semibold text-gray-700">
                    ANNEE HISTORIQUE
                  </label>
                  <div className="relative">
                    <input 
                      type="text" 
                      className="w-full px-4 py-3 text-base border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all duration-300 bg-white/70 backdrop-blur-sm shadow-sm hover:shadow-md" 
                      id="userField1"
                      required 
                      placeholder="2023"
                    />
                    <div className="absolute inset-y-0 right-0 flex items-center pr-3">
                      <svg className="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                    </div>
                  </div>
                  <p className="text-sm text-red-500 font-medium flex items-center">
                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    NB: il s'agit de la dernière année des données historiques
                  </p>
                </div>

                {/* Champ 2 obligatoire à remplir avant d'afficher les autres */}
                <div className="space-y-2">
                  <label htmlFor="userField2" className="block text-sm font-semibold text-gray-700">
                    ANNEE DE PROJECTION
                  </label>
                  <div className="relative">
                    <input 
                      type="text" 
                      className="w-full px-4 py-3 text-base border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all duration-300 bg-white/70 backdrop-blur-sm shadow-sm hover:shadow-md" 
                      id="userField2"
                      required 
                      placeholder="2024"
                    />
                    <div className="absolute inset-y-0 right-0 flex items-center pr-3">
                      <svg className="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              {/* Sections supplémentaires qui seront cachées initialement */}
              <div id="additionalFields" className="space-y-6 pt-4 border-t border-gray-100">
                {/* BASE DE DONNEE et bouton Rapatrier sur la même ligne pour grand écran */}
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                  {/* Champ pour importer un fichier 1 */}
                  <div className="space-y-2">
                    <label htmlFor="fileInput1" className="block text-sm font-semibold text-gray-700">
                      BASE DE DONNEE
                    </label>
                    <div className="relative">
                      <input 
                        type="file" 
                        className="w-full px-4 py-3 text-base border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all duration-300 bg-white/70 backdrop-blur-sm shadow-sm hover:shadow-md file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100" 
                        id="fileInput1"
                        accept=".csv, .xlsx, .xls"
                      />
                    </div>
                  </div>

                  {/* Bouton Rapatrier */}
                  <div className="space-y-2">
                    <label className="block text-sm font-semibold text-gray-700">
                    RAPATRIER
                    </label>
                    <button 
                      type="button"
                      className="w-full bg-gradient-to-r from-green-600 to-green-500 text-white px-6 py-3 rounded-xl hover:from-green-700 hover:to-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-300 font-semibold text-base shadow-lg hover:shadow-xl transform hover:scale-[1.02]"
                    >
                      <span className="flex items-center justify-center">
                        <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                        Rapatrier
                      </span>
                    </button>
                  </div>
                </div>

                {/* Champ de sélection 1 */}
                <div className="space-y-2">
                  <label htmlFor="selectOption1" className="block text-sm font-semibold text-gray-700">
                    APPROCHE DE PROJECTION DES RECETTES NON FISCALES
                  </label>
                  <div className="relative">
                    <select 
                      className="w-full px-4 py-3 text-base border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all duration-300 bg-white/70 backdrop-blur-sm shadow-sm hover:shadow-md appearance-none" 
                      id="selectOption1"
                      required
                    >
                      <option value="" disabled selected>--Sélectionner une approche--</option>
                      <option value="lineaire">ECO. NON LINEAIRE</option>
                      <option value="non_lineaire">ECO. LINEAIRE</option>
                    </select>
                    <div className="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                      <svg className="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </div>
                  </div>
                </div>

                {/* Champ de sélection 2 */}
                <div className="space-y-2">
                  <label htmlFor="selectOption2" className="block text-sm font-semibold text-gray-700">
                    SCENARIO
                  </label>
                  <div className="relative">
                    <select 
                      className="w-full px-4 py-3 text-base border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all duration-300 bg-white/70 backdrop-blur-sm shadow-sm hover:shadow-md appearance-none" 
                      id="selectOption2"
                      required
                    >
                      <option value="" disabled selected>--Sélectionner un scénario--</option>
                      <option value="pessimiste">PESSIMISTE</option>
                      <option value="reference">REFERENCE</option>
                      <option value="optimiste">OPTIMISTE</option>
                    </select>
                    <div className="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                      <svg className="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 9l-7 7-7-7" />
                      </svg>
                    </div>
                  </div>
                </div>

                {/* Bouton Suivant */}
                <div className="pt-6">
                  <button 
                    type="submit"
                    className="w-full bg-gradient-to-r from-sky-600 to-sky-500 text-white px-6 py-3 rounded-xl hover:from-sky-700 hover:to-sky-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-300 font-semibold text-base shadow-lg hover:shadow-xl transform hover:scale-[1.02]"
                  >
                    <span className="flex items-center justify-center">
                      <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                      </svg>
                      Suivant
                    </span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        {/* Section Tableau */}
        <div className="bg-white rounded-lg shadow">
          <div className="p-6">
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
      </main>
    </div>
  );
} 