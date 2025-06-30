'use client';

import Image from "next/image";
import Link from "next/link";
import { useState } from "react";
import { usePathname } from "next/navigation";

export default function Dashboard() {
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const pathname = usePathname();

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
                <p className="text-xs text-gray-500">Tableau de bord utilisateur</p>
              </div>
            </div>

            {/* Menu mobile */}
            <div className="flex items-center sm:hidden">
              <button
                onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
                className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-500"
              >
                <span className="sr-only">Ouvrir le menu</span>
                {!isMobileMenuOpen ? (
                  <svg className="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                ) : (
                  <svg className="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                )}
              </button>
            </div>

            {/* Menu desktop */}
            <div className="hidden sm:flex sm:items-center sm:space-x-4">
              <span className="text-sm text-gray-600">Utilisateur</span>
              <button
                onClick={() => window.location.href = '/'}
                className="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
              >
                <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Déconnexion
              </button>
            </div>
          </div>

          {/* Menu mobile déroulant */}
          {isMobileMenuOpen && (
            <div className="sm:hidden">
              <div className="pt-2 pb-3 space-y-1">
                <div className="flex items-center px-4 py-2 border-b border-gray-200">
                  <span className="text-sm text-gray-600">Utilisateur</span>
                </div>
                <button
                  onClick={() => window.location.href = '/'}
                  className="w-full flex items-center px-4 py-2 text-base font-medium text-gray-600 hover:text-gray-900 hover:bg-gray-50"
                >
                  <svg className="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                  </svg>
                  Déconnexion
                </button>
              </div>
            </div>
          )}
        </div>
      </header>

      {/* Navigation */}
      <nav className="bg-white border-b border-gray-200 sticky top-16 z-40">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex overflow-x-auto hide-scrollbar">
            <div className="flex space-x-8 min-w-max">
              <Link href="/dashboard" className={`py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap ${
                pathname === '/dashboard' && !pathname.includes('?')
                  ? 'border-sky-500 text-sky-600'
                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
              }`}>
                Accueil
              </Link>
              <Link href="/dashboard/menu" className={`py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap ${
                pathname === '/dashboard/menu'
                  ? 'border-sky-500 text-sky-600'
                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
              }`}>
                Menu
              </Link>
              <Link href="/dashboard/historique" className={`py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap ${
                pathname === '/dashboard/historique'
                  ? 'border-sky-500 text-sky-600'
                  : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
              }`}>
                Historique
              </Link>
            </div>
          </div>
        </div>
      </nav>

      {/* Main Content */}
      <main className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div className="bg-white rounded-lg shadow">
          <div className="p-4 sm:p-6">
            <div className="max-w-4xl mx-auto">
              <div className="bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-4 sm:p-6 lg:p-8 border border-green-100">
                <div className="text-center mb-6 sm:mb-8">
                  <h2 className="text-2xl sm:text-3xl font-bold text-gray-900 mb-2 sm:mb-4">Documentation OPRNF</h2>
                  <p className="text-base sm:text-lg text-gray-600">Guide d'utilisation et documentation technique</p>
                </div>
                
                <div className="bg-white/80 backdrop-blur-sm rounded-xl p-4 sm:p-6 mb-6 sm:mb-8">
                  <p className="text-gray-700 leading-relaxed text-justify text-sm sm:text-base">
                    Le présent document a été réalisé grâce à l'appui technique et financier du Projet 
                    Réforme des Finances publiques pour l'atteinte des ODD et le Renforcement de la 
                    Mobilisation des recettes de l'Etat (ReFORME) dans le cadre de la Coopération entre 
                    la République du Bénin, la République Fédérale d'Allemagne et l'Union Européenne.
                  </p>
                </div>

                <div className="bg-gray-50 rounded-xl p-4 sm:p-6 mb-6 sm:mb-8">
                  <h3 className="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4 text-center">Coordonnées du Bureau de la GIZ</h3>
                  <div className="grid grid-cols-1 gap-4 text-center">
                    <div className="space-y-2">
                      <p className="text-gray-700 font-medium text-sm sm:text-base">Bureau de la GIZ à Cotonou</p>
                      <p className="text-gray-600 text-xs sm:text-sm">08 BP 1132 Tri Postal - Cotonou – République du Bénin</p>
                    </div>
                    <div className="space-y-2">
                      <p className="text-gray-700 font-medium text-sm sm:text-base">Contact</p>
                      <p className="text-gray-600 text-xs sm:text-sm">T + 229 21 30 81 28 – F + 229 21 31 13 35</p>
                      <p className="text-gray-600 text-xs sm:text-sm">E gizbenin@giz.de - I www.giz.de</p>
                    </div>
                  </div>
                </div>

                <div className="text-center">
                  <button 
                    onClick={() => {
                      // Simulation du téléchargement du PDF
                      const link = document.createElement('a');
                      link.href = '/GUIDE_OPRNF_Provosoire.pdf';
                      link.download = 'GUIDE_OPRNF_Provosoire.pdf';
                      link.click();
                    }}
                    className="inline-flex items-center px-4 sm:px-6 lg:px-8 py-3 sm:py-4 bg-gradient-to-r from-green-600 to-green-500 text-white rounded-xl hover:from-green-700 hover:to-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-300 font-semibold text-sm sm:text-base lg:text-lg shadow-lg hover:shadow-xl transform hover:scale-[1.02] w-full sm:w-auto"
                  >
                    <svg className="w-5 h-5 sm:w-6 sm:h-6 mr-2 sm:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span className="hidden sm:inline">Télécharger la Documentation PDF</span>
                    <span className="sm:hidden">Télécharger PDF</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <style jsx global>{`
        .hide-scrollbar {
          -ms-overflow-style: none;
          scrollbar-width: none;
        }
        .hide-scrollbar::-webkit-scrollbar {
          display: none;
        }
      `}</style>
    </div>
  );
} 