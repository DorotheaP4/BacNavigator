<?php
include("bacnavigator-header2.php");
?>

 
    <style>
        :root {
            --primary: #0f766e;
            --secondary: #f0fdfa;
            --accent: #14b8a6;
            --text: #134e4a;
            --muted: #6b7280;
            --background: #fafafa;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: var(--text);
            overflow-x: hidden;
        }
        
        .serif {
            font-family: 'Crimson Text', serif;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, rgba(15, 118, 110, 0.05) 0%, rgba(20, 184, 166, 0.02) 100%);
        }
        
        .toc-fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100vh;
            background: white;
            border-right: 1px solid #e5e7eb;
            z-index: 1000;
            overflow-y: auto;
            padding: 2rem 1.5rem;
        }
        
        .main-content {
            -margin-left: 280px;
            min-height: 100vh;
            word-wrap: break-word;
        }
        
        .section-anchor {
            scroll-margin-top: 2rem;
        }
        
        .citation {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px dotted var(--primary);
            transition: all 0.2s ease;
            overflow-wrap: break-word;
        }
        
        .citation:hover {
            background: var(--secondary);
            padding: 2px 4px;
            border-radius: 4px;
        }
        
        .bento-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-template-rows: auto auto;
            gap: 1.5rem;
            height: 60vh;
        }
        
        .bento-main {
            grid-row: 1 / 3;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }
        
        .bento-side {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .toc-link {
            display: block;
            padding: 0.5rem 0;
            color: var(--muted);
            text-decoration: none;
            border-left: 2px solid transparent;
            padding-left: 1rem;
            transition: all 0.2s ease;
            font-size: 0.875rem;
        }
        
        .toc-link:hover, .toc-link.active {
            color: var(--primary);
            border-left-color: var(--primary);
            background: var(--secondary);
            margin-left: -1rem;
            padding-left: 1rem;
        }
        
        .toc-link.sub {
            padding-left: 2rem;
            font-size: 0.8rem;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, var(--secondary) 0%, rgba(240, 253, 250, 0.8) 100%);
            border-left: 4px solid var(--primary);
            padding: 1.5rem;
            margin: 2rem 0;
            border-radius: 0 8px 8px 0;
        }
        
        .code-block {
            background: #1e293b;
            color: #e2e8f0;
            padding: 1.5rem;
            border-radius: 8px;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.875rem;
            overflow-x: auto;
            margin: 1.5rem 0;
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
            
            .bento-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto auto;
                height: auto;
            }
            
            .bento-main {
                grid-row: 1;
            }
        }

        @media (max-width: 768px) {
            .bento-main h1 {
                font-size: 2.5rem;
            }
            .bento-main p {
                font-size: 1rem;
            }
            .bento-main {
                padding: 1.5rem;
            }
            .flex.items-center.justify-between.mb-8 {
                flex-direction: column;
                gap: 1rem;
            }
            .flex.items-center.justify-between.mb-8 > div {
                width: 100%;
            }
            .flex.items-center.justify-between.mb-8 a {
                width: 100%;
                text-align: center;
            }
        }
        
        .floating-action {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary);
            color: white;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(15, 118, 110, 0.3);
            cursor: pointer;
            z-index: 900;
            transition: all 0.2s ease;
        }
        
        .floating-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(15, 118, 110, 0.4);
        }
        
        .vanta-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>

   

    <!-- Main Content -->
    <main class="main-content">
   

      <!-- Overview Section -->
      <section id="overview" class="section-anchor py-16 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Prezentare Generală</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
          </div>

          <div class="prose prose-lg max-w-none">
            <p class="text-xl text-gray-700 leading-relaxed mb-8">
              Pentru pregătirea examenului de Bacalaureat la Informatică în România, programa oficială rămâne cea aprobată prin
              <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">Ordinul ministrului Educației nr. 4800/2010</a>,
              cu conținuturi specifice pentru specializările Matematică-Informatică și Științe ale Naturii.
            </p>

            <div class="grid md:grid-cols-2 gap-8 my-12">
              <div class="highlight-box">
                <h4 class="font-semibold text-teal-800 mb-3">
                  <i class="fas fa-microscope mr-2"></i>Specializarea Științe ale Naturii
                </h4>
                <p class="text-gray-700">
                  Materia acoperă algoritmi de bază, elementele limbajelor Pascal/C++, subprograme, tipuri structurate de date, fișiere text și algoritmi elementari.
                </p>
              </div>

              <div class="highlight-box">
                <h4 class="font-semibold text-teal-800 mb-3">
                  <i class="fas fa-calculator mr-2"></i>Specializarea Matematică-Informatică
                </h4>
                <p class="text-gray-700">
                  Pe lângă conținuturile de bază, include subprograme definite de utilizator, recursivitate, metoda Backtracking, generarea elementelor combinatoriale și grafuri.
                </p>
              </div>
            </div>

            <p class="text-lg text-gray-700 leading-relaxed">
              Resursele online precum <a href="https://www.pbinfo.ro/articole/16/subiecte-bacalaureat" class="citation" target="_blank"><strong>PBInfo</strong></a>,
              <a href="https://www.ebacalaureat.ro/cat/subiecte-bac-informatica-informatica/131" class="citation" target="_blank"><strong>BAC Simplu</strong></a>
              și documente PDF oferă materiale de studiu, teorie, exemple și teste pentru toate aceste capitole.
            </p>
          </div>
        </div>
      </section>

      <!-- Program Section -->
      <section id="programa" class="section-anchor py-16 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Programa Oficială Bacalaureat</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
          </div>

          <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Sursa Oficială și Valabilitate</h3>

            <p class="text-gray-700 mb-6 leading-relaxed">
              Programa pentru examenul de bacalaureat la Informatică în anul este cea aprobată prin
              <a href="https://ro.scribd.com/document/543343150/Programa-Bac-Informatica-Romana" class="citation" target="_blank"><strong>Ordinul ministrului Educației, Cercetării, Tineretului și Sportului nr. 4800/2010</strong></a>,
              privind aprobarea listei disciplinelor și a programelor pentru examenul de bacalaureat din 2011. Această programă rămâne valabilă.
            </p>

            <div class="highlight-box">
              <p class="text-gray-700 mb-4">
                <i class="fas fa-info-circle text-teal-600 mr-2"></i>
                Subiectele pentru examenul de bacalaureat se elaborează pe baza prevederilor acestei programe,
                <strong>fără a viza conținutul unui anumit manual școlar</strong>.
              </p>
              <p class="text-gray-700">
                <i class="fas fa-clock text-teal-600 mr-2"></i>
                Timpul alocat pentru realizarea testului de examen este de <strong>180 de minute</strong>.
              </p>
            </div>
          </div>

          <!-- Specializations -->
          <div class="grid md:grid-cols-2 gap-8">
            <div id="mate-info" class="section-anchor bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6 flex items-center">
                <i class="fas fa-calculator text-teal-600 mr-3"></i>
                Matematică-Informatică
              </h3>

              <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mr-3 mt-1"></i>
                  <span>Subiect comun cu specializarea "Matematică-informatică intensiv informatică"</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mr-3 mt-1"></i>
                  <span>Include capitole avansate: grafuri, backtracking, recursivitate</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mr-3 mt-1"></i>
                  <span>Generarea elementelor combinatoriale</span>
                </li>
              </ul>
            </div>

            <div id="stiinte" class="section-anchor bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6 flex items-center">
                <i class="fas fa-microscope text-teal-600 mr-3"></i>
                Științe ale Naturii
              </h3>

              <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mr-3 mt-1"></i>
                  <span>Subiecte diferențiate în funcție de specializare</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mr-3 mt-1"></i>
                  <span>Focus pe algoritmi de bază și programare fundamentală</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-teal-500 mr-3 mt-1"></i>
                  <span>Tipuri structurate de date și fișiere</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Chapter 1: Algoritmi de Bază -->
      <section id="algoritmi-baza" class="section-anchor py-16 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Capitolul 1: Algoritmi de Bază</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
          </div>

          <div class="space-y-8">
            <!-- Noțiunea de Algoritm -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Noțiunea de Algoritm și Caracteristici</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Unul dintre primele subiecte abordate în programa de bacalaureat la Informatică, în special pentru specializarea matematică-informatică, este
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Noțiunea de algoritm, caracteristici"</a>.
              </p>

              <div class="highlight-box">
                <p class="text-gray-700 font-medium mb-4">Definiție:</p>
                <p class="text-gray-700 mb-4">
                  Un <strong>algoritm</strong> reprezintă o <strong>succesiune finită, ordonată și bine definită de pași sau instrucțiuni</strong> care conduc la rezolvarea unei probleme sau la obținerea unui rezultat dorit.
                </p>

                <p class="text-gray-700 font-medium mb-4">Caracteristicile esențiale ale unui algoritm:</p>
                <div class="grid md:grid-cols-2 gap-4">
                  <div class="flex items-start">
                    <i class="fas fa-circle text-teal-600 mr-3 mt-1 text-xs"></i>
                    <div>
                      <strong>Finitudinea</strong>: algoritmul trebuie să se termine într-un număr finit de pași
                    </div>
                  </div>
                  <div class="flex items-start">
                    <i class="fas fa-circle text-teal-600 mr-3 mt-1 text-xs"></i>
                    <div>
                      <strong>Determinarea</strong>: fiecare pas trebuie să fie precis definit, fără ambiguități
                    </div>
                  </div>
                  <div class="flex items-start">
                    <i class="fas fa-circle text-teal-600 mr-3 mt-1 text-xs"></i>
                    <div>
                      <strong>Generalitatea</strong>: algoritmul trebuie să rezolve o clasă de probleme, nu doar o instanță particulară
                    </div>
                  </div>
                  <div class="flex items-start">
                    <i class="fas fa-circle text-teal-600 mr-3 mt-1 text-xs"></i>
                    <div>
                      <strong>Eficiența</strong>: algoritmul trebuie să consume resurse rezonabile de timp și memorie
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Structuri de Bază -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Structuri de Bază (Liniară, Alternativă, Repetitivă)</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Programa de bacalaureat pentru specializarea matematică-informatică include și studiul
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Structurilor de bază"</a>
                ale algoritmilor, și anume <strong>structura liniară, alternativa și repetitivă</strong>.
              </p>

              <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-arrow-right mr-2"></i>Structura Liniară
                  </h4>
                  <p class="text-gray-700 text-sm">
                    Presupune executarea instrucțiunilor într-o succesiune strictă, una după alta, fără devieri sau repetări.
                  </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm">
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-code-branch mr-2"></i>Structura Alternativă
                  </h4>
                  <p class="text-gray-700 text-sm">
                    Permite luarea de decizii în cadrul algoritmului, executând anumite blocuri de instrucțiuni doar dacă sunt îndeplinite anumite condiții.
                  </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm">
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-redo mr-2"></i>Structura Repetitivă
                  </h4>
                  <p class="text-gray-700 text-sm">
                    Permite executarea repetată a unui bloc de instrucțiuni atâta timp cât o anumită condiție este adevărată.
                  </p>
                </div>
              </div>
            </div>

            <!-- Pseudocod -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Pseudocod</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Descrierea algoritmilor (programe pseudocod)"</a>
                este un alt punct important din programa pentru specializarea matematică-informatică.
              </p>

              <div class="highlight-box">
                <p class="text-gray-700 mb-4">
                  <strong>Pseudocodul</strong> este un limbaj intermediar între limbajul natural și limbajele de programare formale, folosit pentru a descrie algoritmi într-un mod clar, concis și independent de un anumit limbaj de programare.
                </p>

                <p class="text-gray-700">
                  El permite reprezentarea structurilor de control fundamentale (liniară, alternativă, repetitivă) și a operațiilor de bază folosind cuvinte cheie și construcții sintactice asemănătoare cu cele din limbajele de programare reale, dar cu o flexibilitate mai mare.
                </p>
              </div>

              <div class="code-block">
                <pre><code>// Exemplu pseudocod pentru calculul sumei cifrelor unui număr
algoritm SumaCifre
    intreg n, suma, cifra
    
    citeste n
    suma <- 0
    
    cat timp n > 0 executa
        cifra <- n % 10
        suma <- suma + cifra
        n <- n / 10
    sfarsit_cat_timp
    
    scrie suma
sfarsit_algoritm</code></pre>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Chapter 2: Elemente de Bază ale Limbajului -->
      <section id="elemente-limbaj" class="section-anchor py-16 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Capitolul 2: Elementele de Bază ale unui Limbaj de Programare</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
            <p class="text-gray-600 mt-4">(Pascal sau C/C++)</p>
          </div>

          <div class="grid md:grid-cols-2 gap-8">
            <!-- Vocabularul Limbajului -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Vocabularul Limbajului</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Programa de bacalaureat pentru ambele specializări include studiul
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Vocabularului limbajului"</a>,
                <strong>"Constantelor"</strong> și <strong>"Identificatorilor"</strong>.
              </p>

              <div class="space-y-4">
                <div class="flex items-start">
                  <i class="fas fa-key text-teal-600 mr-3 mt-1"></i>
                  <div>
                    <strong>Cuvinte cheie</strong>: au o semnificație specială și prestabilită în limbaj (ex: `if`, `while`, `for` în C/C++)
                  </div>
                </div>

                <div class="flex items-start">
                  <i class="fas fa-hashtag text-teal-600 mr-3 mt-1"></i>
                  <div>
                    <strong>Identificatori</strong>: nume date de programator variabilelor, constantelor, subprogramelor
                  </div>
                </div>

                <div class="flex items-start">
                  <i class="fas fa-plus text-teal-600 mr-3 mt-1"></i>
                  <div>
                    <strong>Operatori</strong>: simboluri care indică operații (ex: `+`, `-`, `*`, `/`)
                  </div>
                </div>
              </div>
            </div>

            <!-- Tipuri de Date -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Tipuri de Date Predefinite</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Noțiunea de tip de data"</a>
                este o componentă cheie a programei de bacalaureat.
              </p>

              <div class="space-y-3">
                <div class="bg-teal-50 p-3 rounded border-l-4 border-teal-600">
                  <code class="text-teal-800 font-mono">int</code>
                  <span class="text-gray-700 ml-2">- numere întregi</span>
                </div>

                <div class="bg-teal-50 p-3 rounded border-l-4 border-teal-600">
                  <code class="text-teal-800 font-mono">float</code> / <code class="text-teal-800 font-mono">double</code>
                  <span class="text-gray-700 ml-2">- numere reale</span>
                </div>

                <div class="bg-teal-50 p-3 rounded border-l-4 border-teal-600">
                  <code class="text-teal-800 font-mono">char</code>
                  <span class="text-gray-700 ml-2">- caractere</span>
                </div>

                <div class="bg-teal-50 p-3 rounded border-l-4 border-teal-600">
                  <code class="text-teal-800 font-mono">bool</code>
                  <span class="text-gray-700 ml-2">- valori logice (adevărat/fals)</span>
                </div>
              </div>
            </div>

            <!-- Variabile și Constante -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Variabile și Constante</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Variabile. Declararea variabilelor"</a>
                și <strong>"Definirea constantelor"</strong> sunt concepte fundamentale.
              </p>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Variabile</h4>
                  <p class="text-gray-700 text-sm mb-3">
                    O <strong>variabilă</strong> este o locație de memorie căreia i se poate atribui o valoare și a cărei valoare poate fi modificată.
                  </p>

                  <div class="code-block">
                    <pre><code>// Declarare variabile
int varsta;
float media;
char initiala;</code></pre>
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Constante</h4>
                  <p class="text-gray-700 text-sm mb-3">
                    <strong>Constantele</strong> sunt date cu valori fixe care nu se modifică pe parcursul execuției programului.
                  </p>

                  <div class="code-block">
                    <pre><code>// Definire constante
const float PI = 3.14159;
const int MAX = 100;</code></pre>
                  </div>
                </div>
              </div>
            </div>

            <!-- Operatori și Expresii -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Operatori și Expresii</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Operatori aritmetici, logici, relaționali"</a>,
                <strong>"Expresii"</strong> și <strong>"Instrucțiunea de atribuire"</strong>.
              </p>

              <div class="overflow-x-auto">
                <table class="w-full text-sm">
                  <thead class="bg-teal-50">
                    <tr>
                      <th class="text-left p-3 border-b">Categorie</th>
                      <th class="text-left p-3 border-b">Operatori</th>
                      <th class="text-left p-3 border-b">Exemplu</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-700">
                    <tr>
                      <td class="p-3 border-b">Aritmetici</td>
                      <td class="p-3 border-b font-mono">+, -, *, /, %</td>
                      <td class="p-3 border-b font-mono">a + b * c</td>
                    </tr>
                    <tr>
                      <td class="p-3 border-b">Relaționali</td>
                      <td class="p-3 border-b font-mono">==, !=, <,>, <=,>=</td>
                      <td class="p-3 border-b font-mono">a &lt; b</td>
                    </tr>
                    <tr>
                      <td class="p-3 border-b">Logici</td>
                      <td class="p-3 border-b font-mono">&&, ||, !</td>
                      <td class="p-3 border-b font-mono">a && b</td>
                    </tr>
                    <tr>
                      <td class="p-3">Atribuire</td>
                      <td class="p-3 font-mono">=, +=, -=, *=</td>
                      <td class="p-3 font-mono">a = b + c</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Citire și Scriere -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Citirea și Scrierea Datelor</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Citirea/scrierea datelor"</a>
                este un punct important din programa de bacalaureat.
              </p>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">C/C++</h4>
                  <div class="code-block">
                    <pre><code>#include &lt;stdio.h&gt;

int main() {
    int varsta;
    printf("Introdu varsta: ");
    scanf("%d", &varsta);
    printf("Ai %d ani\n", varsta);
    return 0;
}</code></pre>
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Pascal</h4>
                  <div class="code-block">
                    <pre><code>program Exemplu;
var varsta: integer;
begin
    write('Introdu varsta: ');
    readln(varsta);
    writeln('Ai ', varsta, ' ani');
end.</code></pre>
                  </div>
                </div>
              </div>
            </div>

            <!-- Structuri de Control -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Structuri de Control</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-informatica.html" class="citation" target="_blank">"Structuri de control (instructiunea compusa, structuri alternative si repetitive)"</a>
                sunt un capitol central în programa de bacalaureat.
              </p>

              <div class="space-y-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Structura Alternativă</h4>
                  <div class="code-block">
                    <pre><code>// C/C++
if (conditie) {
    // instrucțiuni
} else {
    // instrucțiuni
}

// Pascal
if conditie then
    // instrucțiuni
else
    // instrucțiuni</code></pre>
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Structura Repetitivă</h4>
                  <div class="code-block">
                    <pre><code>// C/C++ - while
while (conditie) {
    // instrucțiuni
}

// C/C++ - for
for (int i = 0; i < n; i++) {
    // instrucțiuni
}

// Pascal - while
while conditie do
begin
    // instrucțiuni
end;</code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Chapter 6: Algoritmi Elementari -->
      <section id="algoritmi" class="section-anchor py-16 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Capitolul 6: Algoritmi Elementari</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
          </div>

          <div class="space-y-8">
            <!-- Prelucrare Cifre -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Probleme de Prelucrare a Cifrelor unui Număr</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Problemele de prelucrare a cifrelor unui număr presupun extragerea și manipularea cifrelor individuale care alcătuiesc un număr întreg.
              </p>

              <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="highlight-box">
                  <h4 class="font-semibold text-teal-800 mb-3">Operații Cheie</h4>
                  <ul class="space-y-2 text-gray-700">
                    <li><strong>n % 10</strong> - obține ultima cifră</li>
                    <li><strong>n / 10</strong> - elimină ultima cifră</li>
                    <li><strong>nr_cifre++</strong> - numără cifrele</li>
                    <li><strong>suma += cifra</strong> - calculează suma cifrelor</li>
                  </ul>
                </div>

                <div class="highlight-box">
                  <h4 class="font-semibold text-teal-800 mb-3">Probleme Tipice</h4>
                  <ul class="space-y-2 text-gray-700">
                    <li>• Determinarea numărului de cifre</li>
                    <li>• Calculul sumei cifrelor</li>
                    <li>• Inversarea cifrelor</li>
                    <li>• Verificarea palindromului</li>
                  </ul>
                </div>
              </div>

              <div class="code-block">
                <pre><code>// Pseudocod pentru calculul sumei cifrelor
suma <- 0
cat timp n > 0 executa
    cifra <- n % 10
    suma <- suma + cifra
    n <- n / 10
sfarsit_cat_timp
scrie suma</code></pre>
              </div>
            </div>

            <!-- Divizibilitate si Numere Prime -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Divizibilitate, Numere Prime, Algoritmul lui Euclid</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Divizibilitate</h4>
                  <p class="text-gray-700 mb-4">
                    Un număr întreg `a` este divizibil cu `b` dacă `a % b == 0`.
                  </p>

                  <h4 class="font-semibold text-teal-800 mb-3">Numere Prime</h4>
                  <p class="text-gray-700 mb-4">
                    Un număr natural > 1 este prim dacă are exact doi divizori: 1 și el însuși.
                  </p>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Algoritmul lui Euclid</h4>
                  <p class="text-gray-700 mb-4">
                    Algoritm eficient pentru găsirea Celui Mai Mare Divizor Comun (CMMDC).
                  </p>

                  <div class="code-block">
                    <pre><code>// Algoritmul lui Euclid pentru CMMDC(a, b)
cat timp b != 0 executa
    rest <- a % b
    a <- b
    b <- rest
sfarsit_cat_timp
cmmdc <- a
scrie cmmdc</code></pre>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fibonacci -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Șirul lui Fibonacci</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Șirul lui Fibonacci este un șir de numere în care fiecare termen (începând cu al treilea) este suma celor doi termeni precedenți.
              </p>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <p class="text-gray-700 mb-4">Primii termeni: 0, 1, 1, 2, 3, 5, 8, 13, 21, ...</p>

                  <div class="highlight-box">
                    <p class="text-gray-700">
                      <strong>Formula recursivă</strong>:
                      <br>
                      F(0) = 0
                      <br>
                      F(1) = 1
                      <br>
                      F(n) = F(n-1) + F(n-2), pentru n ≥ 2
                    </p>
                  </div>
                </div>

                <div>
                  <div class="code-block">
                    <pre><code>// Algoritm iterativ Fibonacci
funcție fib(n: întreg): întreg
    daca n <= 1 atunci
        returnează n
    altfel
        a <- 0
        b <- 1
        pentru i de la 2 la n executa
            urmatorul <- a + b
            a <- b
            b <- urmatorul
        sfarsit_pentru
        returnează b
    sfarsit_daca
sfarsit_funcție</code></pre>
                  </div>
                </div>
              </div>
            </div>

            <!-- Min si Max -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Determinarea Minimului și Maximului</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Algoritmul pentru găsirea valorii minime sau maxime dintr-o colecție de numere.
              </p>

              <div class="code-block">
                <pre><code>// Algoritm pentru găsirea minimului
minim <- vector[0]
pentru i de la 1 la n-1 executa
    daca vector[i] < minim atunci
        minim <- vector[i]
    sfarsit_daca
sfarsit_pentru
scrie minim

// Algoritm pentru găsirea maximului
maxim <- vector[0]
pentru i de la 1 la n-1 executa
    daca vector[i] > maxim atunci
        maxim <- vector[i]
    sfarsit_daca
sfarsit_pentru
scrie maxim</code></pre>
              </div>
            </div>

            <!-- Metode de Ordonare -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Metode de Ordonare (Sortare)</h3>

              <p class="text-gray-700 mb-6 leading-relaxed">
                Patru metode comune de ordonare studiate la nivel de bacalaureat:
              </p>

              <div class="overflow-x-auto mb-6">
                <table class="w-full text-sm">
                  <thead class="bg-teal-50">
                    <tr>
                      <th class="text-left p-3 border-b">Metodă</th>
                      <th class="text-left p-3 border-b">Complexitate</th>
                      <th class="text-left p-3 border-b">Descriere</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-700">
                    <tr>
                      <td class="p-3 border-b font-semibold">Bubble Sort</td>
                      <td class="p-3 border-b font-mono">O(n²)</td>
                      <td class="p-3 border-b">Compară și interschimbă elemente adiacente</td>
                    </tr>
                    <tr>
                      <td class="p-3 border-b font-semibold">Sortare prin Inserție</td>
                      <td class="p-3 border-b font-mono">O(n²)</td>
                      <td class="p-3 border-b">Inserează fiecare element în poziția corectă</td>
                    </tr>
                    <tr>
                      <td class="p-3 border-b font-semibold">Sortare prin Selecție</td>
                      <td class="p-3 border-b font-mono">O(n²)</td>
                      <td class="p-3 border-b">Selectează minimul și îl plasează la poziția curentă</td>
                    </tr>
                    <tr>
                      <td class="p-3 font-semibold">Sortare prin Numărare</td>
                      <td class="p-3 font-mono">O(n + k)</td>
                      <td class="p-3">Numără aparițiile fiecărei valori</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="code-block">
                <pre><code>// Exemplu Bubble Sort
procedura bubbleSort(A: tablou de întregi, n: întreg)
    pentru i de la 0 la n-2 executa
        pentru j de la 0 la n-i-2 executa
            daca A[j] > A[j+1] atunci
                // Interschimbă A[j] și A[j+1]
                temp <- A[j]
                A[j] <- A[j+1]
                A[j+1] <- temp
            sfarsit_daca
        sfarsit_pentru
    sfarsit_pentru
sfarsit_procedura</code></pre>
              </div>
            </div>

            <!-- Metode de Căutare -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Metode de Căutare</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Căutare Secvențială</h4>
                  <ul class="space-y-2 text-gray-700 mb-4">
                    <li>• Parcurge elementele unul câte unul</li>
                    <li>• Complexitate: O(n)</li>
                    <li>• Funcționează pe colecții nesortate</li>
                  </ul>

                  <div class="code-block">
                    <pre><code>funcție cautareSecventiala(A, n, cheie)
    pentru i de la 0 la n-1 executa
        daca A[i] == cheie atunci
            returnează i // poziția
        sfarsit_daca
    sfarsit_pentru
    returnează -1 // negăsit
sfarsit_funcție</code></pre>
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Căutare Binară</h4>
                  <ul class="space-y-2 text-gray-700 mb-4">
                    <li>• Divide intervalul de căutare la fiecare pas</li>
                    <li>• Complexitate: O(log n)</li>
                    <li>• Necesită colecție sortată</li>
                  </ul>

                  <div class="code-block">
                    <pre><code>funcție cautareBinara(A, stanga, dreapta, cheie)
    cat timp stanga <= dreapta executa
        mijloc <- (stanga + dreapta) / 2
        daca A[mijloc] == cheie atunci
            returnează mijloc
        altfel daca A[mijloc] < cheie atunci
            stanga <- mijloc + 1
        altfel
            dreapta <- mijloc - 1
        sfarsit_daca
    sfarsit_cat_timp
    returnează -1 // negăsit
sfarsit_funcție</code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Chapter 12: Grafuri -->
      <section id="grafuri" class="section-anchor py-16 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Capitolul 12: Grafuri</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
            <p class="text-gray-600 mt-4">(Doar pentru Profilul Mate-Info)</p>
          </div>

          <div class="space-y-8">
            <!-- Definiție și Tipuri -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Definiție și Tipuri de Grafuri</h3>

              <div class="highlight-box mb-6">
                <p class="text-gray-700">
                  Un <strong>graf</strong> este o pereche ordonată G = (V, E), unde V este o mulțime de vârfuri și E este o mulțime de muchii (neorientate) sau arce (orientate).
                </p>
              </div>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-teal-50 p-6 rounded-lg">
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-project-diagram mr-2"></i>Grafuri Neorientate
                  </h4>
                  <p class="text-gray-700 text-sm mb-3">
                    Muchiile sunt perechi neordonate de vârfuri. O muchie (u, v) este aceeași cu (v, u).
                  </p>
                  <div class="text-xs text-gray-600">
                    <strong>Exemplu:</strong> Rețea de prietenii, conexiuni bidirecționale
                  </div>
                </div>

                <div class="bg-teal-50 p-6 rounded-lg">
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-directions mr-2"></i>Grafuri Orientate
                  </h4>
                  <p class="text-gray-700 text-sm mb-3">
                    Arcele sunt perechi ordonate de vârfuri. Un arc (u, v) este diferit de (v, u).
                  </p>
                  <div class="text-xs text-gray-600">
                    <strong>Exemplu:</strong> Străzi cu sens unic, dependențe între sarcini
                  </div>
                </div>
              </div>
            </div>

            <!-- Reprezentare Grafuri -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Reprezentarea Grafurilor</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Matrice de Adiacență</h4>
                  <ul class="space-y-2 text-gray-700 text-sm mb-4">
                    <li>• Matrice pătratică n × n</li>
                    <li>• A[i][j] = 1 dacă există muchie/arc de la i la j</li>
                    <li>• A[i][j] = 0 în caz contrar</li>
                    <li>• <strong>Avantaj:</strong> Verificare existență muchie în O(1)</li>
                    <li>• <strong>Dezavantaj:</strong> Memorie O(n²), ineficient pentru grafuri rare</li>
                  </ul>

                  <div class="code-block">
                    <pre><code>// Exemplu matrice de adiacență
// Graf neorientat cu 3 vârfuri
int A[3][3] = {
    {0, 1, 1},
    {1, 0, 0},
    {1, 0, 0}
};</code></pre>
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Liste de Adiacență</h4>
                  <ul class="space-y-2 text-gray-700 text-sm mb-4">
                    <li>• Pentru fiecare vârf, se stochează lista vecinilor</li>
                    <li>• Implementare cu vectori dinamici sau liste înlănțuite</li>
                    <li>• <strong>Avantaj:</strong> Memorie O(n + m), eficient pentru grafuri rare</li>
                    <li>• <strong>Dezavantaj:</strong> Verificare existență muchie în O(grade(u))</li>
                  </ul>

                  <div class="code-block">
                    <pre><code>// Exemplu liste de adiacență
// Graf neorientat cu 3 vârfuri
vector&lt;int&gt; L[3];
L[0] = {1, 2}; // vecinii lui 0
L[1] = {0};    // vecinii lui 1
L[2] = {0};    // vecinii lui 2</code></pre>
                  </div>
                </div>
              </div>
            </div>

            <!-- Parcurgeri -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Parcurgeri în Graf</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-sort-amount-down mr-2"></i>Parcurgerea în Adâncime (DFS)
                  </h4>
                  <p class="text-gray-700 text-sm mb-4">
                    Explorează cât mai departe posibil de-a lungul fiecărei ramuri înainte de a face backtracking.
                  </p>

                  <div class="code-block">
                    <pre><code>// DFS recursiv
procedura DFS(v: vârf)
    marchează v ca vizitat
    pentru fiecare u vecin al lui v executa
        daca u nu este vizitat atunci
            DFS(u)
        sfarsit_daca
    sfarsit_pentru
sfarsit_procedura</code></pre>
                  </div>

                  <div class="mt-4 text-xs text-gray-600">
                    <strong>Aplicații:</strong> Detectare componente conexe, sortare topologică, găsire cicluri
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">
                    <i class="fas fa-sort-amount-up mr-2"></i>Parcurgerea în Lățime (BFS)
                  </h4>
                  <p class="text-gray-700 text-sm mb-4">
                    Explorează toți vecinii, apoi vecinii vecinilor etc., folosind o coadă.
                  </p>

                  <div class="code-block">
                    <pre><code>// BFS cu coadă
procedura BFS(s: vârf de start)
    coada <- coada vida
    marchează s ca vizitat
    adaugă s în coada
    cat timp coada nu este vidă executa
        v <- scoate primul element din coada
        pentru fiecare u vecin al lui v executa
            daca u nu este vizitat atunci
                marchează u ca vizitat
                adaugă u în coada
            sfarsit_daca
        sfarsit_pentru
    sfarsit_cat_timp
sfarsit_procedura</code></pre>
                  </div>

                  <div class="mt-4 text-xs text-gray-600">
                    <strong>Aplicații:</strong> Căi minime în grafuri neponderate, testare bipartitudine
                  </div>
                </div>
              </div>
            </div>

            <!-- Arbori -->
            <div class="bg-white rounded-lg shadow-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">Arbori</h3>

              <div class="highlight-box mb-6">
                <p class="text-gray-700">
                  Un <strong>arbore</strong> este un graf neorientat conex și aciclic (fără cicluri). Un arbore cu n vârfuri are exact n-1 muchii.
                </p>
              </div>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Proprietăți</h4>
                  <ul class="space-y-2 text-gray-700 text-sm">
                    <li>• Între oricare două vârfuri există un drum unic</li>
                    <li>• Adăugarea unei muchii creează exact un ciclu</li>
                    <li>• Eliminarea unei muchii produce un graf neconex</li>
                    <li>• Gradul minim al unui vârf este 1, maxim n-1</li>
                  </ul>

                  <h4 class="font-semibold text-teal-800 mb-3 mt-6">Operații de Bază</h4>
                  <ul class="space-y-2 text-gray-700 text-sm">
                    <li>• Parcurgere în adâncime (preordine, inordine, postordine)</li>
                    <li>• Parcurgere în lățime</li>
                    <li>• Căutare, inserare, ștergere noduri</li>
                  </ul>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Reprezentare</h4>

                  <div class="code-block">
                    <pre><code>// Structură pentru nod de arbore
struct Nod {
    int valoare;
    Nod* stanga;
    Nod* dreapta;
};

// Exemplu arbore binar
Nod* radacina = new Nod{
    1,
    new Nod{2, new Nod{4, nullptr, nullptr}, new Nod{5, nullptr, nullptr}},
    new Nod{3, new Nod{6, nullptr, nullptr}, nullptr}
};</code></pre>
                  </div>

                  <div class="code-block mt-4">
                    <pre><code>// Parcurgere inordine recursivă
void inordine(Nod* rad) {
    if (rad != nullptr) {
        inordine(rad->stanga);
        cout << rad->valoare << " ";
        inordine(rad->dreapta);
    }
}</code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Resources Section -->
      <section id="resurse" class="section-anchor py-16 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
          <div class="text-center mb-12">
            <h2 class="serif text-3xl font-bold text-gray-900 mb-4">Resurse pentru Pregătire</h2>
            <div class="w-24 h-1 bg-teal-600 mx-auto"></div>
          </div>

          <div class="space-y-8">
            <!-- Online Resources -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">
                <i class="fas fa-globe mr-3 text-teal-600"></i>Resurse Online
              </h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Platforme Principale</h4>
                  <div class="space-y-3">
                    <a href="https://www.pbinfo.ro/articole/16/subiecte-bacalaureat" class="citation block" target="_blank">
                      <i class="fas fa-external-link-alt mr-2"></i>
                      <strong>PBInfo.ro</strong> - Subiecte Bacalaureat
                    </a>

                    <a href="https://www.ebacalaureat.ro/cat/subiecte-bac-informatica-informatica/131" class="citation block" target="_blank">
                      <i class="fas fa-external-link-alt mr-2"></i>
                      <strong>eBacalaureat.ro</strong> - Subiecte Informatică
                    </a>

                    <a href="https://profesorjitaruionel.com/2021/02/16/teste-de-antrenament-bac-informatica-toate-testele-edu-publicate-in-2022-2021-2020-update/" class="citation block" target="_blank">
                      <i class="fas fa-external-link-alt mr-2"></i>
                      <strong>ProfesorJitaruIonel.com</strong> - Teste EDU
                    </a>
                  </div>
                </div>

                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Cursuri Online</h4>
                  <div class="space-y-3">
                    <a href="https://www.zecelaexamene.ro/CursPregatireExamenBacalaureatInformatica.php" class="citation block" target="_blank">
                      <i class="fas fa-external-link-alt mr-2"></i>
                      <strong>ZecelaExamene.ro</strong> - Cursuri Bac
                    </a>

                    <a href="https://www.udemy.com/course/pregatire-bacalaureat-informatica/" class="citation block" target="_blank">
                      <i class="fas fa-external-link-alt mr-2"></i>
                      <strong>Udemy</strong> - Curs Pregătire
                    </a>

                    <a href="https://nerdvana.ro/pregatire-examene/pregatire-pentru-examenul-de-bacaluareat/pregatire-examen-bacalaureat-la-informatica/" class="citation block" target="_blank">
                      <i class="fas fa-external-link-alt mr-2"></i>
                      <strong>Nerdvana.ro</strong> - Pregătire Online
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- PDF Resources -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">
                <i class="fas fa-file-pdf mr-3 text-teal-600"></i>Documente PDF și Ghiduri
              </h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Programe Oficiale</h4>
                  <div class="space-y-3">
                    <a href="https://ro.scribd.com/document/543343150/Programa-Bac-Informatica-Romana" class="citation block" target="_blank">
                      <i class="fas fa-file-alt mr-2"></i>
                      Programa Bac Informatică Română
                    </a>

                    <a href="https://cdn.edupedu.ro/wp-content/uploads/2021/02/Programa-Informatica%CC%86-Bac-2021.pdf" class="citation block" target="_blank">
                      <i class="fas fa-file-alt mr-2"></i>
                      Programa Informatică Bac 2021
                    </a>
                  </div>
                </div>
 
                <div>
                  <h4 class="font-semibold text-teal-800 mb-3">Sinteze și Ghiduri</h4>
                  <div class="space-y-3">
                    <a href="https://ebooks.infobits.ro/acasa/70-bacalaureat-la-informatica-2025-sinteza-materiei-pentru-examen-subiectul-1.html" class="citation block" target="_blank">
                      <i class="fas fa-book mr-2"></i>
                      Sinteză Materie Subiectul I
                    </a>

                    <a href="https://ebooks.infobits.ro/acasa/74-bacalaureat-la-informatica-2025-sinteza-materiei-pentru-examen-subiectul-3.html" class="citation block" target="_blank">
                      <i class="fas fa-book mr-2"></i>
                      Sinteză Materie Subiectul III
                    </a>

                    <a href="https://www.libris.ro/ebook-ghid-complet-de-pregatire-pentru-ETS978-606-071-717-1--p27794501.html" class="citation block" target="_blank">
                      <i class="fas fa-book mr-2"></i>
                      Ghid Complet Pregătire Bac
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Books and Libraries -->
            <div class="bg-gray-50 rounded-lg p-8">
              <h3 class="serif text-xl font-semibold text-gray-900 mb-6">
                <i class="fas fa-book mr-3 text-teal-600"></i>Cărți și Librării Online
              </h3>

              <div class="grid md:grid-cols-3 gap-4">
                <div class="text-center">
                  <a href="https://www.emag.ro/search/carti+bac+info" class="citation" target="_blank">
                    <i class="fas fa-shopping-cart text-2xl text-teal-600 mb-2"></i>
                    <div class="font-semibold">eMAG</div>
                    <div class="text-sm text-gray-600">Cărți Bac Info</div>
                  </a>
                </div>

                <div class="text-center">
                  <a href="https://carturesti.ro/info/bacalaureat-informatica-limbajul-c-1981679213" class="citation" target="_blank">
                    <i class="fas fa-book text-2xl text-teal-600 mb-2"></i>
                    <div class="font-semibold">Cărturești</div>
                    <div class="text-sm text-gray-600">Bacalaureat Informatică</div>
                  </a>
                </div>

                <div class="text-center">
                  <a href="https://www.librariaromana.ro/carti/culegeri_si_auxiliare_scolare/bacalaureat_2023/ghid_complet_de_pregatire_pentru_bac_2023_informatica-mg_net-p10209300" class="citation" target="_blank">
                    <i class="fas fa-store text-2xl text-teal-600 mb-2"></i>
                    <div class="font-semibold">Libraria Română</div>
                    <div class="text-sm text-gray-600">Ghid Pregătire</div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Final CTA -->
          <div class="mt-12 text-center bg-teal-600 text-white rounded-lg p-8">
            <h3 class="serif text-2xl font-semibold mb-4">Pregătirea ta pentru Bacalaureat începe acum!</h3>
            <p class="text-lg mb-6">Folosește aceste resurse pentru a te pregăti eficient și obține rezultate excelente la examen.</p>
            <div class="flex flex-wrap justify-center gap-4">
              <span class="bg-white text-teal-600 px-4 py-2 rounded-full text-sm font-medium">C/C++ sau Pascal</span>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Floating Action Button -->
    <div class="floating-action" id="scrollToTop">
      <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="lg:hidden fixed top-4 left-4 z-50 bg-teal-600 text-white p-3 rounded-lg shadow-lg" id="mobileMenuToggle">
      <i class="fas fa-bars"></i>
    </button>

    <script>
      

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
                    
                    // Close mobile menu if open
                    if (window.innerWidth < 1024) {
                        document.querySelector('.toc-fixed').classList.remove('open');
                    }
                }
            });
        });

        // Active section highlighting in TOC
        function updateActiveSection() {
            const sections = document.querySelectorAll('.section-anchor');
            const tocLinks = document.querySelectorAll('.toc-link');
            
            let currentSection = '';
            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= 100) {
                    currentSection = section.id;
                }
            });
            
            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + currentSection) {
                    link.classList.add('active');
                }
            });
        }

        // Scroll to top functionality
        document.getElementById('scrollToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Mobile menu toggle
        document.getElementById('mobileMenuToggle').addEventListener('click', function() {
            const toc = document.querySelector('.toc-fixed');
            toc.classList.toggle('open');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            const toc = document.querySelector('.toc-fixed');
            const toggleButton = document.getElementById('mobileMenuToggle');
            
            if (!toc.contains(e.target) && !toggleButton.contains(e.target)) {
                toc.classList.remove('open');
            }
        });

        // Scroll event listener
        window.addEventListener('scroll', updateActiveSection);
        
        // Initial call
        updateActiveSection();
    </script>
<?php
include("bacnavigator-footer.php");
?>