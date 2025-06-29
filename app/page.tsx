import Image from "next/image";
import Link from "next/link";

export default function Home() {
  return (
    <div className="font-sans bg-gradient-to-b from-gray-100 to-gray-200 h-screen flex flex-col">
      {/* Header avec effet de verre */}
      <div className="bg-white/80 backdrop-blur-sm shadow-lg px-3 py-2 w-full flex flex-row justify-between items-center border-b border-gray-200">
        <Image
          src="/images/logo5.png"
          alt="Logo DGTCP"
          width={176}
          height={64}
          className="w-24 lg:w-32 md:w-28 transform hover:scale-105 transition-transform duration-300"
        />
        <Image
          src="/images/logo3.png"
          alt="Logo OPRNF"
          width={64}
          height={64}
          className="w-6 lg:w-12 md:w-8 transform hover:scale-105 transition-transform duration-300"
        />
      </div>

      <div className="flex-1 flex flex-col justify-start items-center gap-6 relative pt-16">
        {/* Effet de fond décoratif */}
        <div className="absolute inset-0 bg-gradient-to-br from-sky-50/30 to-green-50/30 pointer-events-none" />
        
        <div className="text-center w-full px-4 relative">
          <p className="font-black text-xl lg:text-4xl text-gray-800 drop-shadow-sm">
            <span className="bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600">
              DIRECTION GENERALE DU TRESOR ET DE LA COMPTABILITE PUBLIQUE (DGTCP)
            </span>
          </p>
        </div>

        <div className="text-center w-full px-4 relative">
          <div className="bg-white/50 backdrop-blur-sm p-6 rounded-xl shadow-lg transform hover:scale-[1.02] transition-transform duration-300">
            <p className="font-black text-xl lg:text-5xl text-green-700 tracking-wide">
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">B</span>IENVENUE SUR L&apos;
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">O</span>UTILS DE{" "}
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">P</span>REVISION DES{" "}
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">R</span>ECETTES{" "}
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">N</span>ON{" "}
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">F</span>ISCALES ({" "}
              <span className="text-red-500 hover:text-red-600 transition-colors duration-300">OPRNF</span>)
            </p>
          </div>
        </div>

        {/* Bouton avec positionnement conditionnel */}
        <div className="w-full px-2 mt-8 relative lg:absolute lg:bottom-8 lg:right-8 lg:mt-0 lg:w-auto flex justify-center lg:justify-end">
          <Link
            href="/login"
            className="group relative inline-flex items-center justify-center px-12 py-2.5 overflow-hidden font-bold text-white transition-all duration-300 ease-out rounded-lg shadow-lg bg-gradient-to-r from-blue-600 via-blue-500 to-blue-600 hover:from-blue-700 hover:via-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 w-64"
          >
            <span className="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-gradient-to-r from-blue-700 via-blue-600 to-blue-700 group-hover:translate-x-0 ease">
              <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </span>
            <span className="absolute flex items-center justify-center w-full h-full text-white transition-all duration-300 transform group-hover:translate-x-full ease">Continuer</span>
            <span className="relative invisible">Continuer</span>
          </Link>
        </div>
      </div>
    </div>
  );
}
