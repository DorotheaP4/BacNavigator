<?php
include("bacnavigator-header2.php");
?>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F9F7F3;
            color: #374151;
            overflow-x: hidden;
        }
        .hero-overlay {
            background: linear-gradient(135deg, rgba(139, 154, 139, 0.15) 0%, rgba(184, 160, 130, 0.1) 100%);
        }
        .toc-fixed {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 280px;
            background: rgba(249, 247, 243, 0.95);
            backdrop-filter: blur(10px);
            border-right: 1px solid rgba(139, 154, 139, 0.2);
            z-index: 50;
            overflow-y: auto;
            padding: 2rem 1.5rem;
        }
        .main-content {
            margin-left: 280px;
            min-height: 100vh;
        }
        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(139, 154, 139, 0.3), transparent);
            margin: 3rem 0;
        }
        .chapter-card {
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        .chapter-card:hover {
            border-left-color: #8B9A8B;
            transform: translateX(4px);
        }
        .resource-link {
            transition: all 0.2s ease;
            border-bottom: 1px dotted #8B9A8B;
        }
        .resource-link:hover {
            background-color: rgba(139, 154, 139, 0.1);
            border-bottom-style: solid;
        }
        .formula-box {
            background: linear-gradient(135deg, rgba(139, 154, 139, 0.05) 0%, rgba(184, 160, 130, 0.05) 100%);
            border-left: 3px solid #8B9A8B;
        }
        @media (max-width: 1024px) {
            .toc-fixed {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            .toc-fixed.open {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
  </head>

    <!-- Mobile TOC Toggle -->
    <button id="toc-toggle" class="lg:hidden fixed top-4 left-4 z-50 bg-sage text-white p-2 rounded-md shadow-md">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Table of Contents -->
    <nav id="toc" class="toc-fixed">
      <div class="mb-8">
        <h2 class="font-serif text-lg font-semibold text-charcoal mb-4">Cuprins</h2>
        <div class="space-y-2 text-sm">
          <a href="#overview" class="block py-1 text-stone hover:text-charcoal transition-colors">Prezentare generală</a>
          <a href="#clasa-9" class="block py-1 text-stone hover:text-charcoal transition-colors">Clasa a IX-a</a>
          <div class="ml-4 space-y-1">
            <a href="#numere-reale" class="block py-1 text-xs text-stone hover:text-charcoal">Numere Reale</a>
            <a href="#progresii" class="block py-1 text-xs text-stone hover:text-charcoal">Progresii</a>
            <a href="#functii" class="block py-1 text-xs text-stone hover:text-charcoal">Funcții</a>
            <a href="#vectori" class="block py-1 text-xs text-stone hover:text-charcoal">Vectori</a>
            <a href="#geometrie-analitica" class="block py-1 text-xs text-stone hover:text-charcoal">Geometrie Analitică</a>
            <a href="#trigonometrie" class="block py-1 text-xs text-stone hover:text-charcoal">Trigonometrie</a>
          </div>
          <a href="#clasa-10" class="block py-1 text-stone hover:text-charcoal transition-colors">Clasa a X-a</a>
          <div class="ml-4 space-y-1">
            <a href="#puteri-radicali" class="block py-1 text-xs text-stone hover:text-charcoal">Puteri &amp; Radicali</a>
            <a href="#numere-complexe" class="block py-1 text-xs text-stone hover:text-charcoal">Numere Complexe</a>
            <a href="#functii-grafice" class="block py-1 text-xs text-stone hover:text-charcoal">Funcții &amp; Grafice</a>
            <a href="#ecuatii-trigonometrice" class="block py-1 text-xs text-stone hover:text-charcoal">Ecuații Trigonometrice</a>
            <a href="#combinatorica" class="block py-1 text-xs text-stone hover:text-charcoal">Combinatorică</a>
            <a href="#polinoame" class="block py-1 text-xs text-stone hover:text-charcoal">Polinoame</a>
          </div>
          <a href="#clasa-11" class="block py-1 text-stone hover:text-charcoal transition-colors">Clasa a XI-a</a>
          <div class="ml-4 space-y-1">
            <a href="#matrice" class="block py-1 text-xs text-stone hover:text-charcoal">Matrice</a>
            <a href="#determinanti" class="block py-1 text-xs text-stone hover:text-charcoal">Determinanți</a>
            <a href="#limite" class="block py-1 text-xs text-stone hover:text-charcoal">Limite</a>
            <a href="#derivate" class="block py-1 text-xs text-stone hover:text-charcoal">Derivate</a>
            <a href="#integrale" class="block py-1 text-xs text-stone hover:text-charcoal">Integrale</a>
          </div>
          <a href="#clasa-12" class="block py-1 text-stone hover:text-charcoal transition-colors">Clasa a XII-a</a>
          <div class="ml-4 space-y-1">
            <a href="#structuri-algebrice" class="block py-1 text-xs text-stone hover:text-charcoal">Structuri Algebrice</a>
            <a href="#polinoame-avansate" class="block py-1 text-xs text-stone hover:text-charcoal">Polinoame Avansate</a>
            <a href="#integrale-nedefinite" class="block py-1 text-xs text-stone hover:text-charcoal">Integrale Nedefinite</a>
            <a href="#ecuatii-diferentiale" class="block py-1 text-xs text-stone hover:text-charcoal">Ecuații Diferențiale</a>
            <a href="#probabilitati" class="block py-1 text-xs text-stone hover:text-charcoal">Probabilități</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Hero Section -->
      <section class="relative min-h-screen flex items-center hero-overlay">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div>
              <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-semibold text-charcoal mb-6 leading-tight">
                <em class="text-sage">Matematică</em>
                <br/>
                pentru Bacalaureat
              </h1>
              <p class="text-lg sm:text-xl text-stone mb-8 leading-relaxed">
                O abordare comprehensivă a curriculumului de matematică pentru examenul de bacalaureat, profil real, organizată pe clase și capitole, cu resurse teoretice esențiale.
              </p>
              <div class="flex flex-wrap gap-4 text-sm text-stone">
                <span class="flex items-center"><i class="fas fa-graduation-cap mr-2"></i>Clasele IX-XII</span>
                <span class="flex items-center"><i class="fas fa-book mr-2"></i>Profil Real</span>
                <span class="flex items-center"><i class="fas fa-chart-line mr-2"></i>Teorie Completa</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Overview Section -->
      <section id="overview" class="py-8 sm:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-4xl mx-auto">
            <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal mb-8">Prezentare generală</h2>
            <div class="prose prose-lg max-w-none">
              <p class="text-lg text-stone leading-relaxed mb-6">
                Acest ghid oferă o sinteză comprehensivă a capitolelor de matematică pentru examenul de bacalaureat, profil real, organizate pe clase (IX-XII). Fiecare subcapitol conține o descriere detaliată a temelor abordate și link-uri către resurse online axate pe teoria matematică relevantă.
              </p>
              <div class="bg-sage/5 p-6 rounded-lg border-l-4 border-sage mb-8">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">Resursă Principală Recomandată</h3>
                <p class="text-stone mb-4">
                  <strong>&#34;Matematica M2. Ghid pentru pregătirea examenului de Bacalaureat&#34;</strong> de Petre Nachila, disponibilă pe LibrariaOnline.ro
                </p>
                <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link inline-flex items-center text-sage hover:text-charcoal transition-colors">
                  <i class="fas fa-external-link-alt mr-2"></i>Vezi resursa [546]
                </a>
              </div>
              <p class="text-stone leading-relaxed">
                Breviarul teoretic al acestui ghid acoperă majoritatea capitolelor necesare pentru pregătirea examenului, furnizând o prezentare sistematică și riguroasă a teoriei matematice.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Class IX -->
      <section id="clasa-9" class="py-8 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-6xl mx-auto">
            <div class="mb-12">
              <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal mb-6">Clasa a IX-a</h2>
              <p class="text-lg text-stone leading-relaxed max-w-3xl">
                Materia de matematică pentru clasa a IX-a, profil real, acoperă fundamentele algebrei, geometriei și trigonometriei, esențiale pentru construirea cunoștințelor matematice ulterioare.
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Numere Reale -->
              <div id="numere-reale" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-calculator text-sage mr-2"></i>Numere Reale. Operații
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Introducere în mulțimea numerelor reale, incluzând numerele raționale și iraționale, și proprietățile lor fundamentale. Acoperă operațiile de bază și regulile de calcul.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Concepte cheie:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Proprietăți ale numerelor reale</li>
                    <li>• Operații cu radicali</li>
                    <li>• Modulul unui număr real</li>
                    <li>• Raționalizarea numitorului</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Progresii -->
              <div id="progresii" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-chart-line text-sage mr-2"></i>Progresii Aritmetice și Geometrice
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Studiul șirurilor numerice: progresiile aritmetice și geometrice. Definiții, termenul general, formule pentru suma primilor n termeni.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Formule esențiale:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Progresii aritmetice: aₙ = a₁ + (n-1)r</li>
                    <li>• Suma: Sₙ = n(a₁ + aₙ)/2</li>
                    <li>• Progresii geometrice: bₙ = b₁ · qⁿ⁻¹</li>
                    <li>• Suma: Sₙ = b₁(qⁿ - 1)/(q - 1)</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Functii -->
              <div id="functii" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-project-diagram text-sage mr-2"></i>Funcții. Proprietăți
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Conceptul fundamental de funcție matematică: domeniu de definiție, codomeniu, imagine, grafic. Proprietăți: monotonie, paritate, periodicitate, bijectivitate.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Proprietăți studiate:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Funcții injective, surjective, bijective</li>
                    <li>• Monotonie: crescătoare/descrescătoare</li>
                    <li>• Paritate: funcții pare/impare</li>
                    <li>• Operații cu funcții: compunere</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Vectori -->
              <div id="vectori" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-arrows-alt text-sage mr-2"></i>Vectori în Plan. Operații cu Vectori
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Elemente de bază ale calculului vectorial în planul euclidian: vector liber, vector legat, mărime, operații fundamentale cu vectori.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Operații vectoriale:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Adunare (regula triunghiului/paralelogramului)</li>
                    <li>• Înmulțire cu scalar</li>
                    <li>• Descompunere după direcții</li>
                    <li>• Vectori coliniari</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Geometrie Analitica -->
              <div id="geometrie-analitica" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-shapes text-sage mr-2"></i>Geometrie Analitică. Dreapta și Cercul
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Metode algebrice pentru studiul geometriei în plan. Coordonate carteziene, ecuații ale dreptei și cercului, poziții relative.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Ecuații importante:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Dreapta: ax + by + c = 0</li>
                    <li>• Cerc: (x-a)² + (y-b)² = r²</li>
                    <li>• Distanța punct-dreaptă</li>
                    <li>• Poziții relative</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                </div>
              </div>

              <!-- Trigonometrie -->
              <div id="trigonometrie" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-circle text-sage mr-2"></i>Trigonometrie. Formula Triunghiului
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Noțiuni fundamentale de trigonometrie: funcții trigonometrice, cercul trigonometric, identități, teorema sinusurilor și a cosinusului.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Formule trigonometrice:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• sin²x + cos²x = 1</li>
                    <li>• Teorema sinusurilor: a/sinA = b/sinB = c/sinC</li>
                    <li>• Teorema cosinusului: a² = b² + c² - 2bc·cosA</li>
                    <li>• Formule pentru sume și diferențe</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Class X -->
      <section id="clasa-10" class="py-8 sm:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-6xl mx-auto">
            <div class="mb-12">
              <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal mb-6">Clasa a X-a</h2>
              <p class="text-lg text-stone leading-relaxed max-w-3xl">
                Materia de matematică pentru clasa a X-a extinde și aprofundează conceptele învățate în clasa a IX-a, introducând în același timp noi domenii precum numerele complexe, combinatorica și polinoamele.
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Puteri si Radicali -->
              <div id="puteri-radicali" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-square-root-alt text-sage mr-2"></i>Puteri. Radicali. Ecuații Iraționale
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Extinderea noțiunilor despre puteri la exponenți raționali și reali. Studiu detaliat al radicalilor, operații și rezolvarea ecuațiilor iraționale.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Proprietăți:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• a^(m/n) = ⁿ√(aᵐ)</li>
                    <li>• ⁿ√(ab) = ⁿ√a · ⁿ√b</li>
                    <li>• ⁿ√(a/b) = ⁿ√a / ⁿ√b</li>
                    <li>• Raționalizare numitori</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                </div>
              </div>

              <!-- Numere Complexe -->
              <div id="numere-complexe" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-infinity text-sage mr-2"></i>Numere Complexe. Forma Algebrică
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Introducere în mulțimea numerelor complexe ℂ ca extensie a numerelor reale. Forma algebrică z = a + bi, operații și proprietăți.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Definiții:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• i² = -1 (unitatea imaginară)</li>
                    <li>• z = a + bi (forma algebrică)</li>
                    <li>• Conjugat: z̄ = a - bi</li>
                    <li>• Modul: |z| = √(a² + b²)</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Functii si Grafice -->
              <div id="functii-grafice" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-chart-area text-sage mr-2"></i>Funcții. Reprezentare Grafică
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Aprofundarea studiului funcțiilor prin reprezentarea grafică. Analiza proprietăților funcțiilor elementare: liniare, pătratice, exponențiale, logaritmice, trigonometrice.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Funcții studiate:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• f(x) = ax + b (funcție afină)</li>
                    <li>• f(x) = ax² + bx + c (pătratică)</li>
                    <li>• f(x) = aˣ (exponențială)</li>
                    <li>• f(x) = logₐx (logaritmică)</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Ecuatii Trigonometrice -->
              <div id="ecuatii-trigonometrice" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-calculator text-sage mr-2"></i>Ecuatii Trigonometrice. Sisteme
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Metode de rezolvare a ecuațiilor trigonometrice și a sistemelor de ecuații trigonometrice. Ecuații elementare și metode de transformare.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Tipuri de ecuații:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• sin x = a, cos x = a</li>
                    <li>• tg x = a, ctg x = a</li>
                    <li>• Ecuații omogene</li>
                    <li>• Ecuații care se factorizează</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Combinatorica -->
              <div id="combinatorica" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-sitemap text-sage mr-2"></i>Permutări. Aranjamente. Combinări
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Elemente de combinatorică: permutări, aranjamente, combinări. Binomul lui Newton pentru dezvoltarea expresiei (a + b)ⁿ.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Formule combinatorice:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Permutări: Pₙ = n!</li>
                    <li>• Aranjamente: Aₙᵏ = n!/(n-k)!</li>
                    <li>• Combinări: Cₙᵏ = n!/[k!(n-k)!]</li>
                    <li>• Binomul lui Newton: (a+b)ⁿ = ΣCₙᵏaⁿ⁻ᵏbᵏ</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Polinoame -->
              <div id="polinoame" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-function text-sage mr-2"></i>Polinoame. Rădăcini
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Studiul polinoamelor cu coeficienți reali sau complecși. Operații, teorema împărțirii cu rest, rădăcini, schema lui Horner, relațiile lui Viète.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Teoreme importante:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Teorema împărțirii cu rest</li>
                    <li>• Teorema lui Bézout</li>
                    <li>• Schema lui Horner</li>
                    <li>• Relațiile lui Viète</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Bacalaureat 9-10 [179]
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Class XI -->
      <section id="clasa-11" class="py-8 sm:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-6xl mx-auto">
            <div class="mb-12">
              <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal mb-6">Clasa a XI-a</h2>
              <p class="text-lg text-stone leading-relaxed max-w-3xl">
                Materia de matematică pentru clasa a XI-a introduce concepte avansate de algebră liniară, precum matrice și determinanți, și fundamentele analizei matematice, cu accent pe limite, continuitate, derivate și integrale definite.
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Matrice -->
              <div id="matrice" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-table text-sage mr-2"></i>Matrice. Operații cu Matrice
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Conceptul de matrice ca tablou dreptunghiular de numere. Tipuri de matrice, operații fundamentale și proprietăți. Matrice inversabile.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Operații cu matrice:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Adunare și scădere</li>
                    <li>• Înmulțire cu scalar</li>
                    <li>• Înmulțire matriceală</li>
                    <li>• Transpusa unei matrice</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                  <a href="https://ru.scribd.com/doc/264706926/Teorie-Algebra-Clasa-a11a" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-file-alt mr-2"></i>Teorie Algebra Clasa a11a [364]
                  </a>
                </div>
              </div>

              <!-- Determinanți -->
              <div id="determinanti" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-determinant text-sage mr-2"></i>Determinanți. Sisteme de Ecuații Liniare
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Calculul determinantului unei matrice pătratice și aplicațiile în rezolvarea sistemelor de ecuații liniare. Metodele lui Cramer și Gauss.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Metode de calcul:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Regula lui Sarrus (ordinul 3)</li>
                    <li>• Dezvoltare după linie/coloană</li>
                    <li>• Metoda lui Cramer</li>
                    <li>• Metoda lui Gauss-Jordan</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Limite -->
              <div id="limite" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-arrow-right text-sage mr-2"></i>Limite de Funcții. Continuitate
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Conceptul fundamental de limită a unei funcții. Definiții riguroase, limite laterale, limite remarcabile și continuitatea funcțiilor.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Limite importante:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• lim (sin x)/x = 1, x→0</li>
                    <li>• lim (1 + 1/x)ˣ = e, x→∞</li>
                    <li>• Criteriul cleșteului</li>
                    <li>• Teorema lui Weierstrass</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Derivate -->
              <div id="derivate" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-chart-line text-sage mr-2"></i>Derivate. Aplicații
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Derivată a unei funcții ca măsură a vitezei de variație. Reguli de derivare, derivate ale funcțiilor elementare și aplicații în studiul funcțiilor.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Aplicații ale derivatelor:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Studiul monotoniei</li>
                    <li>• Puncte de extrem</li>
                    <li>• Convexitate/concavitate</li>
                    <li>• Ecuația tangentei</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Integrale -->
              <div id="integrale" class="chapter-card bg-white p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-integral text-sage mr-2"></i>Integrale Definite. Aplicații
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Integrala definită ca limită a sumelor Riemann. Formula Leibniz-Newton și aplicații în calculul ariilor și volumelor.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Aplicații practice:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Calculul ariilor plane</li>
                    <li>• Volumul corpurilor de rotație</li>
                    <li>• Lungimea unui arc de curbă</li>
                    <li>• Aplicații în fizică</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://www.carminis.ro/uploads/tinymce/files/documente/Manual-matematica-clasa-XII-M2.pdf" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>Manual clasa XII M2 [371]
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Class XII -->
      <section id="clasa-12" class="py-8 sm:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-6xl mx-auto">
            <div class="mb-12">
              <h2 class="font-serif text-3xl sm:text-4xl font-semibold text-charcoal mb-6">Clasa a XII-a</h2>
              <p class="text-lg text-stone leading-relaxed max-w-3xl">
                Materia de matematică pentru clasa a XII-a completează pregătirea pentru bacalaureat cu capitole avansate de algebră, precum legi de compoziție și structuri algebrice, precum și cu extinderi ale analizei matematice.
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Structuri Algebrice -->
              <div id="structuri-algebrice" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-cubes text-sage mr-2"></i>Legi de Compoziție. Structuri Algebrice
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Concepte fundamentale din algebra abstractă: legi de compoziție, proprietăți, structuri algebrice de bază (monoid, grup, inel, corp) și morfisme.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Structuri algebrice:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Monoid: asociativ + element neutru</li>
                    <li>• Grup: monoid + elemente simetrizabile</li>
                    <li>• Inel: grup abelian + monoid</li>
                    <li>• Corp: inel comutativ + elemente inversabile</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Polinoame Avansate -->
              <div id="polinoame-avansate" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-function text-sage mr-2"></i>Polinoame. Interpolare. Ecuații Algebrice
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Teorema fundamentală a algebrei, rădăcini multiple, relațiile lui Viète generalizate, interpolare (polinomul Lagrange) și ecuații algebrice de grad superior.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Teoreme importante:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Teorema fundamentală a algebrei</li>
                    <li>• Polinomul de interpolare Lagrange</li>
                    <li>• Relațiile lui Viète generalizate</li>
                    <li>• Rădăcini multiple ale polinoamelor</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>profesorjitaruionel.com [575]
                  </a>
                </div>
              </div>

              <!-- Integrale Nedefinite -->
              <div id="integrale-nedefinite" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-integral text-sage mr-2"></i>Integrale Nedefinite. Metode de Integrare
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Primitiva unei funcții ca operație inversă derivării. Metode de integrare: descompunere, schimbare de variabilă, integrare prin părți.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Metode de integrare:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Integrare prin descompunere</li>
                    <li>• Schimbare de variabilă</li>
                    <li>• Integrare prin părți</li>
                    <li>• Integrale din funcții raționale</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                  <a href="https://www.carminis.ro/uploads/tinymce/files/documente/Manual-matematica-clasa-XII-M2.pdf" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-external-link-alt mr-2"></i>Manual clasa XII M2 [371]
                  </a>
                </div>
              </div>

              <!-- Ecuații Diferențiale -->
              <div id="ecuatii-diferentiale" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-chart-area text-sage mr-2"></i>Ecuatii Diferențiale. Aplicații
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Ecuații diferențiale de ordinul întâi și al doilea. Metode de rezolvare și aplicații în știință și inginerie.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Tipuri de ecuații:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• y&#39; = f(x) - integrare directă</li>
                    <li>• y&#39; = f(x)g(y) - variabile separabile</li>
                    <li>• y&#39; + P(x)y = Q(x) - liniare</li>
                    <li>• Ecuații de ordinul II cu coeficienți constanți</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                </div>
              </div>

              <!-- Probabilități -->
              <div id="probabilitati" class="chapter-card bg-cream p-6 rounded-lg shadow-sm">
                <h3 class="font-serif text-xl font-semibold text-charcoal mb-4">
                  <i class="fas fa-dice text-sage mr-2"></i>Probabilități. Variabile Aleatoare. Statistică
                </h3>
                <p class="text-stone mb-4 leading-relaxed">
                  Elemente de teoria probabilităților și statistică matematică. Variabile aleatoare, funcții de probabilitate, media, dispersia și aplicații.
                </p>
                <div class="formula-box p-4 mb-4 rounded">
                  <p class="text-sm font-medium text-charcoal mb-2">Concepte statistice:</p>
                  <ul class="text-xs text-stone space-y-1">
                    <li>• Probabilitate clasică și axiomatică</li>
                    <li>• Variabile aleatoare discrete/continue</li>
                    <li>• Media și dispersia</li>
                    <li>• Statistică descriptivă</li>
                  </ul>
                </div>
                <div class="flex flex-col space-y-2 text-sm">
                  <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-charcoal transition-colors">
                    <i class="fas fa-book mr-2"></i>Breviar Teoretic [546]
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="bg-charcoal text-cream py-8 sm:py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="max-w-4xl mx-auto text-center">
            <h3 class="font-serif text-xl sm:text-2xl font-semibold mb-4">Resurse Recomandate</h3>
            <p class="text-stone mb-6">
              Pentru o pregătire completă, utilizarea resurselor recomandate este esențială. Principalul ghid teoretic acoperă majoritatea capitolelor necesare pentru examenul de bacalaureat.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 text-sm">
              <div class="bg-sage/10 p-4 rounded-lg">
                <h4 class="font-semibold mb-2">Resursa Principală</h4>
                <p class="text-stone">Matematica M2 - Petre Nachila</p>
                <a href="https://www.librariaonline.ro/culegeri_si_auxiliare_scolare/bacalaureat_2025/matematica_m2_ghid_pentru_pregatirea_examenului_de_bacalaureat-petre_nachila-nomina-p10144934" target="_blank" class="resource-link text-sage hover:text-cream transition-colors">
                  [546] LibrariaOnline.ro
                </a>
              </div>
              <div class="bg-sage/10 p-4 rounded-lg">
                <h4 class="font-semibold mb-2">Resurse Suplimentare</h4>
                <p class="text-stone">Documente și materiale online</p>
                <a href="https://ro.scribd.com/document/609780506/Teorie-Bacalaureat-9-10" target="_blank" class="resource-link text-sage hover:text-cream transition-colors">
                  [179] Scribd - Teorie 9-10
                </a>
              </div>
              <div class="bg-sage/10 p-4 rounded-lg">
                <h4 class="font-semibold mb-2">Platforme Educaționale</h4>
                <p class="text-stone">Lecții și exerciții rezolvate</p>
                <a href="https://profesorjitaruionel.com/bacalaureat-tehnologic-pedagogic/" target="_blank" class="resource-link text-sage hover:text-cream transition-colors">
                  [575] profesorjitaruionel.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>

    <script>
        // Mobile TOC Toggle
        const toc = document.getElementById('toc');
        const tocToggle = document.getElementById('toc-toggle');
        
        tocToggle.addEventListener('click', () => {
            toc.classList.toggle('open');
        });

        // Close TOC when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 1024 && !toc.contains(e.target) && !tocToggle.contains(e.target)) {
                toc.classList.remove('open');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile TOC after click
                    if (window.innerWidth <= 1024) {
                        toc.classList.remove('open');
                    }
                }
            });
        });

        // Highlight current section in TOC
        const sections = document.querySelectorAll('section[id], div[id]');
        const tocLinks = document.querySelectorAll('#toc a[href^="#"]');

        function highlightCurrentSection() {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            tocLinks.forEach(link => {
                link.classList.remove('font-semibold', 'text-charcoal');
                link.classList.add('text-stone');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.remove('text-stone');
                    link.classList.add('font-semibold', 'text-charcoal');
                }
            });
        }

        window.addEventListener('scroll', highlightCurrentSection);
        highlightCurrentSection(); // Run once on load
    </script>
  
 <?php
include("bacnavigator-footer.php");
?>