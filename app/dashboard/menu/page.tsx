'use client';

import Image from "next/image";
import Link from "next/link";
import { useState } from "react";

export default function MenuPage() {
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

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
                <p className="text-xs text-gray-500">Menu principal</p>
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
              <Link href="/dashboard" className="py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                Accueil
              </Link>
              <Link href="/dashboard/menu" className="py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap border-sky-500 text-sky-600">
                Menu
              </Link>
              <Link href="/dashboard/historique" className="py-4 px-1 border-b-2 font-medium text-sm whitespace-nowrap border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                Historique
              </Link>
            </div>
          </div>
        </div>
      </nav>

      {/* Main Content */}
      <main className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div className="bg-white rounded-lg shadow">
          <div className="p-6">
            <h2 className="text-2xl font-semibold text-gray-900 mb-6">Menu</h2>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
              <Link href="/dashboard/recettes" className="block">
                <div className="bg-white border border-gray-200 rounded-lg p-6 hover:border-sky-500 hover:shadow-lg transition-all cursor-pointer">
                  <div className="flex items-center justify-between">
                    <div>
                      <h3 className="text-xl font-medium text-gray-900">Recettes</h3>
                      <p className="text-sm text-gray-500 mt-2">Gérer les recettes et les prévisions de revenus</p>
                    </div>
                    <div className="p-3 bg-sky-100 rounded-full">
                      <svg className="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </Link>

              <Link href="/dashboard/hypotheses" className="block">
                <div className="bg-white border border-gray-200 rounded-lg p-6 hover:border-green-500 hover:shadow-lg transition-all cursor-pointer">
                  <div className="flex items-center justify-between">
                    <div>
                      <h3 className="text-xl font-medium text-gray-900">Hypothèses</h3>
                      <p className="text-sm text-gray-500 mt-2">Gérer les hypothèses et les paramètres de prévision</p>
                    </div>
                    <div className="p-3 bg-green-100 rounded-full">
                      <svg className="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                      </svg>
                    </div>
                  </div>
                </div>
              </Link>
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