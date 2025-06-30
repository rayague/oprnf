import type { Metadata } from "next";
import { Geist, Geist_Mono } from "next/font/google";
import "./globals.css";

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: "OPRNF - Outil de Prévision des Recettes Non Fiscales",
  description: "Application de gestion et de prévision des recettes non fiscales du Bénin. Projet ReFORME - Réforme des Finances publiques pour l'atteinte des ODD et le Renforcement de la Mobilisation des recettes de l'Etat.",
  keywords: "OPRNF, recettes non fiscales, prévision, Bénin, finances publiques, ReFORME, GIZ",
  authors: [{ name: "Projet ReFORME" }],
  creator: "Projet ReFORME",
  publisher: "République du Bénin",
  formatDetection: {
    email: false,
    address: false,
    telephone: false,
  },
  metadataBase: new URL('http://localhost:3000'),
  icons: {
    icon: [
      { url: '/images/logo2.png', sizes: '32x32', type: 'image/png' },
      { url: '/images/logo2.png', sizes: '16x16', type: 'image/png' },
    ],
    apple: [
      { url: '/images/logo2.png', sizes: '180x180', type: 'image/png' },
    ],
    shortcut: '/images/logo2.png',
  },
  openGraph: {
    title: "OPRNF - Outil de Prévision des Recettes Non Fiscales",
    description: "Application de gestion et de prévision des recettes non fiscales du Bénin",
    type: "website",
    locale: "fr_FR",
    images: [
      {
        url: '/images/logo2.png',
        width: 1200,
        height: 630,
        alt: 'Logo OPRNF',
      },
    ],
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body
        className={`${geistSans.variable} ${geistMono.variable} antialiased`}
      >
        {children}
      </body>
    </html>
  );
}
