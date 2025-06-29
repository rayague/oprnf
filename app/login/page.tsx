'use client';

import Image from "next/image";
import Link from "next/link";
import { useState } from "react";

// Définition des utilisateurs autorisés
const AUTHORIZED_USERS = {
  user: {
    type: 'user',
    password: 'user123'
  },
  admin: {
    type: 'admin',
    password: 'admin123'
  }
} as const;

export default function Login() {
  const [password, setPassword] = useState('');
  const [showError, setShowError] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');
  const [isLoading, setIsLoading] = useState(false);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsLoading(true);

    // Simuler un délai de chargement
    await new Promise(resolve => setTimeout(resolve, 1000));

    if (password === AUTHORIZED_USERS.user.password) {
      // Rediriger vers le tableau de bord utilisateur
      window.location.href = '/dashboard';
    } else if (password === AUTHORIZED_USERS.admin.password) {
      // Rediriger vers le tableau de bord administrateur
      window.location.href = '/admin';
    } else {
      setErrorMessage('Mot de passe incorrect. Veuillez réessayer.');
      setShowError(true);
    }

    setIsLoading(false);
  };

  return (
    <div className="min-h-screen bg-gradient-to-b from-gray-100 to-gray-200 flex flex-col">
      {/* Header */}
      <div className="bg-white/80 backdrop-blur-sm shadow-lg px-3 py-2 w-full flex flex-row justify-between items-center border-b border-gray-200">
        <Image
          src="/images/logo5.png"
          alt="Logo DGTCP"
          width={176}
          height={64}
          className="w-24 lg:w-32 md:w-28"
        />
        <Image
          src="/images/logo3.png"
          alt="Logo OPRNF"
          width={64}
          height={64}
          className="w-6 lg:w-12 md:w-8"
        />
      </div>

      {/* Main Content */}
      <div className="flex-1 flex items-center justify-center p-4">
        <div className="w-full max-w-sm">
          <div className="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 sm:p-8 space-y-6 border border-gray-100">
            <div className="text-center space-y-2">
              <h2 className="text-2xl sm:text-3xl font-bold text-gray-800">Connexion</h2>
              <p className="text-gray-600 text-sm sm:text-base">Entrez votre mot de passe pour accéder à l'application</p>
            </div>

            <form onSubmit={handleSubmit} className="space-y-5">
              <div className="space-y-1.5">
                <label htmlFor="password" className="block text-sm font-semibold text-gray-700">
                  Mot de passe
                </label>
                <div className="relative">
                  <input
                    type="password"
                    id="password"
                    value={password}
                    onChange={(e) => setPassword(e.target.value)}
                    className="w-full px-3 py-2 text-base border-1 border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all duration-200 bg-white/50 backdrop-blur-sm"
                    placeholder="••••••••"
                    required
                    autoFocus
                  />
                </div>
              </div>

              <div className="flex gap-3 pt-3 sm:gap-4">
                <Link
                  href="/"
                  className="flex-1 flex items-center justify-center gap-1.5 px-4 py-2 sm:px-5 sm:py-2.5 text-sm sm:text-base text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-200 font-medium"
                >
                  <svg className="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg>
                  <span className="hidden sm:inline">Retour</span>
                </Link>
                <button
                  type="submit"
                  disabled={isLoading}
                  className="flex-1 bg-gradient-to-r from-sky-600 to-sky-500 text-white px-4 py-2 sm:px-5 sm:py-2.5 rounded-lg hover:from-sky-700 hover:to-sky-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200 font-medium text-sm sm:text-base shadow-sm hover:shadow disabled:opacity-50 disabled:cursor-not-allowed"
                >
                  {isLoading ? (
                    <div className="flex items-center justify-center">
                      <svg className="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
                        <path className="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                      </svg>
                      Chargement...
                    </div>
                  ) : (
                    'Valider'
                  )}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      {/* Error Popup */}
      {showError && (
        <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
          <div className="bg-white rounded-lg p-6 max-w-sm w-full mx-4 shadow-xl transform transition-all">
            <div className="flex items-center justify-center mb-4">
              <svg className="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 className="text-lg font-semibold text-gray-900 text-center mb-2">Erreur de connexion</h3>
            <p className="text-gray-600 text-center mb-6">{errorMessage}</p>
            <button
              onClick={() => setShowError(false)}
              className="w-full bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 font-medium"
            >
              Fermer
            </button>
          </div>
        </div>
      )}
    </div>
  );
} 