'use client';

import { useState } from 'react';
import Link from 'next/link';
import Image from 'next/image';

// Données des recettes avec des IDs uniques
const RECETTES_DISPONIBLES = [
    { id: 9, nom: 'Revenus de l\'entreprise et du domaine' },
    { id: 10, nom: 'Produits des unités de production de marchandises' },
    { id: 11, nom: 'Revenus des entreprises' },
    { id: 12, nom: 'Droits et taxes à l\'importation' },
    { id: 13, nom: 'Droits et taxes à l\'exportation' },
    { id: 14, nom: 'Redevances informatiques' },
    { id: 15, nom: 'Autres recettes non fiscales' },
    { id: 16, nom: 'Droits de douane' },
    { id: 17, nom: 'Revenus des concessions' },
    { id: 18, nom: 'Revenus des services publics' },
    { id: 19, nom: 'Revenus des participations financières' },
    { id: 20, nom: 'Revenus des ventes de services' },
    { id: 21, nom: 'Revenus des licences et autorisations' },
    { id: 22, nom: 'Revenus des droits de passage' },
    { id: 23, nom: 'Revenus des services administratifs' },
];

const RECETTES_SELECTIONNEES = [
    { id: 1, nom: 'Droits de timbre' },
    { id: 2, nom: 'Amendes et pénalités' },
    { id: 3, nom: 'Redevances diverses' },
    { id: 4, nom: 'Ventes de biens publics' },
    { id: 5, nom: 'Location de biens de l\'État' },
    { id: 6, nom: 'Contributions volontaires' },
    { id: 7, nom: 'Recettes des activités économiques' },
    { id: 8, nom: 'Amortissement et récupérations' },
];

export default function RecettesPage() {
    const [disponibles, setDisponibles] = useState(RECETTES_DISPONIBLES);
    const [selectionnees, setSelectionnees] = useState(RECETTES_SELECTIONNEES);

    const moveToSelected = (recette: typeof RECETTES_DISPONIBLES[0]) => {
        setDisponibles(prev => prev.filter(r => r.id !== recette.id));
        setSelectionnees(prev => [...prev, recette]);
    };

    const moveToAvailable = (recette: typeof RECETTES_SELECTIONNEES[0]) => {
        setSelectionnees(prev => prev.filter(r => r.id !== recette.id));
        setDisponibles(prev => [...prev, recette]);
    };

    return (
        <div className="min-h-screen bg-gray-50">
            {/* En-tête */}
            <header className="bg-white shadow-sm">
                <div className="container mx-auto px-4 py-4">
                    <div className="flex items-center justify-between">
                        <div className="flex items-center space-x-4">
                            <Image
                                src="/images/logo.png"
                                alt="Logo"
                                width={40}
                                height={40}
                                className="h-10 w-auto"
                            />
                            <Image
                                src="/images/logo-text.png"
                                alt="Logo Text"
                                width={200}
                                height={40}
                                className="h-10 w-auto"
                            />
                        </div>
                        <Link
                            href="/dashboard"
                            className="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                        >
                            <svg className="mr-2 h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Retour
                        </Link>
                    </div>
                </div>
            </header>

            {/* Contenu principal */}
            <main className="container mx-auto px-4 py-8">
                <div className="flex flex-col lg:flex-row gap-8">
                    {/* Liste des recettes disponibles */}
                    <div className="flex-1">
                        <div className="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div className="bg-gradient-to-r from-green-600 to-green-500 px-6 py-4">
                                <h2 className="text-xl font-bold text-white">
                                    Recettes non fiscales disponibles
                                </h2>
                            </div>
                            <div className="p-6">
                                <p className="text-gray-600 mb-4">
                                    Sélectionnez les recettes que vous souhaitez utiliser en cliquant dessus.
                                </p>
                                <div className="space-y-2 max-h-[600px] overflow-y-auto pr-2">
                                    {disponibles.map((recette) => (
                                        <div
                                            key={recette.id}
                                            onClick={() => moveToSelected(recette)}
                                            className="p-3 bg-gray-50 hover:bg-green-50 border border-gray-200 rounded-lg cursor-pointer transition-all duration-200 flex items-center justify-between group"
                                        >
                                            <span className="text-gray-700 group-hover:text-green-600">{recette.nom}</span>
                                            <svg className="w-5 h-5 text-gray-400 group-hover:text-green-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* Liste des recettes sélectionnées */}
                    <div className="flex-1">
                        <div className="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div className="bg-gradient-to-r from-green-600 to-green-500 px-6 py-4">
                                <h2 className="text-xl font-bold text-white">
                                    Recettes sélectionnées
                                </h2>
                            </div>
                            <div className="p-6">
                                <p className="text-gray-600 mb-4">
                                    Les recettes que vous avez sélectionnées. Cliquez pour les retirer.
                                </p>
                                <div className="space-y-2 max-h-[600px] overflow-y-auto pr-2">
                                    {selectionnees.map((recette) => (
                                        <div
                                            key={recette.id}
                                            onClick={() => moveToAvailable(recette)}
                                            className="p-3 bg-green-50 hover:bg-red-50 border border-green-200 rounded-lg cursor-pointer transition-all duration-200 flex items-center justify-between group"
                                        >
                                            <span className="text-green-700 group-hover:text-red-600">{recette.nom}</span>
                                            <svg className="w-5 h-5 text-green-400 group-hover:text-red-500 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 19l-7-7 7-7" />
                                            </svg>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    );
} 