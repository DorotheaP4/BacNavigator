<?php
include("bacnavigator-header2.php");
?>
     <style>
        :root {
            --primary: #1e3a5f;
            --secondary: #2d5a87;
            --accent: #4a90b8;
            --neutral: #f8fafc;
            --base-100: #ffffff;
            --base-content: #1f2937;
            --muted: #6b7280;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: var(--base-content);
        }
        
        .serif {
            font-family: 'Crimson Text', serif;
        }
        
        .toc {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: var(--base-100);
            border-right: 1px solid #e5e7eb;
            overflow-y: auto;
            z-index: 1000;
            padding: 2rem 1.5rem;
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
        }
        
        .main-content {
            min-height: 100vh;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero-overlay {
            background: rgba(30, 58, 95, 0.85);
            position: absolute;
            inset: 0;
        }
        
        .bento-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            align-items: center;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 600;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            font-style: italic;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .section-card {
            background: var(--base-100);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
            border-left: 4px solid var(--accent);
        }
        
        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--accent);
            padding-bottom: 0.5rem;
        }
        
        .subsection-title {
            font-size: 1.5rem;
            font-weight: 500;
            color: var(--secondary);
            margin: 1.5rem 0 1rem 0;
        }
        
        .highlight-box {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-left: 4px solid var(--accent);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
        }
        
        .citation {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            margin: 0 0.25rem;
            transition: all 0.2s ease;
        }
        
        .citation:hover {
            background: var(--secondary);
            transform: translateY(-1px);
        }
        
        .diagram-container {
            background: #f8fafc;
            border-radius: 8px;
            padding: 2rem;
            margin: 2rem 0;
            text-align: center;
            border: 1px solid #e2e8f0;
        }
        
        .toc-link {
            display: block;
            padding: 0.5rem 0;
            color: var(--muted);
            text-decoration: none;
            border-left: 2px solid transparent;
            padding-left: 1rem;
            transition: all 0.2s ease;
        }
        
        .toc-link:hover, .toc-link.active {
            color: var(--primary);
            border-left-color: var(--accent);
            background: rgba(74, 144, 184, 0.1);
        }
        
        .toc-section {
            font-weight: 600;
            color: var(--primary);
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
        }
        
        .content-block {
            background: var(--base-100);
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1rem 0;
            border-left: 3px solid var(--accent);
        }
        
        .example-box {
            background: #fef7cd;
            border: 1px solid #fbbf24;
            border-radius: 8px;
            padding: 1rem;
            margin: 1rem 0;
        }
        
        @media (max-width: 1024px) {
            .toc {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            .toc.open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .bento-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .section-card {
                padding: 1rem;
            }
            .hero-title {
                font-size: 2rem;
            }
            .hero-subtitle {
                font-size: 1rem;
            }
            .bento-grid img {
                height: auto;
                max-width: 100%;
            }
            .diagram-container {
                padding: 1rem;
            }
            .diagram-container img {
                max-width: 100%;
                height: auto;
            }
            .grid.md\:grid-cols-2 {
                grid-template-columns: 1fr;
            }
            .grid.md\:grid-cols-3 {
                grid-template-columns: 1fr;
            }
            .grid.md\:grid-cols-4 {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Hero Section -->
      <section id="hero" class="hero-section relative">
        <div class="hero-overlay"></div>
        <div class="container mx-auto px-8 py-16 relative z-10">
          <div class="bento-grid">
            <div>
              <h1 class="hero-title serif">Lecții de Logică pentru Bacalaureat</h1>
              <p class="hero-subtitle">O abordare comprehensivă a logicii formale și argumentării pentru examenul de bacalaureat din România</p>
              <div class="flex flex-wrap gap-4 mt-8">
                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                  <i class="fas fa-brain mr-2"></i>
                  <span>7 Capitole Esențiale</span>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                  <i class="fas fa-graduation-cap mr-2"></i>
                  <span>Pregătire pentru BAC</span>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2">
                  <i class="fas fa-chart-line mr-2"></i>
                  <span>Structurat după programa oficială</span>
                </div>
              </div>
            </div>
            <div class="relative">
              <img src="https://kimi-web-img.moonshot.cn/img/f4.bcbits.com/7b0b161995eb116fb5db5eea543ad19834537225.jpg" alt="Ilustrație abstractă a logicii formale cu simboluri matematice" class="rounded-lg shadow-2xl opacity-90" size="medium" aspect="square" query="logică abstractă" referrerpolicy="no-referrer" data-modified="1" data-score="11495.00"/>
            </div>
          </div>
        </div>
      </section>

      <div class="container mx-auto px-8 py-12">
        <!-- Introducere -->
        <section class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">Introducere</h2>
            <p class="text-lg mb-6">
              Această lucrare reprezintă o sinteză comprehensivă a logicii formale, structurată conform programei de bacalaureat din România. Materialul acoperă toate aspectele esențiale ale logicii, de la elementele de bază ale termenilor și propozițiilor până la structurile complexe ale silogismelor și argumentării.
            </p>
            <div class="highlight-box">
              <h3 class="font-semibold text-lg mb-3">
                <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                Obiectivele învățării
              </h3>
              <ul class="space-y-2">
                <li>• Înțelegerea structurilor fundamentale ale gândirii logice</li>
                <li>• Dezvoltarea abilităților de analiză și sinteză logică</li>
                <li>• Aplicarea corectă a regulilor de inferență și argumentare</li>
                <li>• Recunoașterea și evitarea erorilor logice</li>
              </ul>
            </div>
          </div>
        </section>

        <!-- Capitolul 1: Termeni -->
        <section id="termeni-definitie" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">1. Termeni (Terms)</h2>

            <div id="termeni-definitie" class="mt-8">
              <h3 class="subsection-title">1.1 Definiția și structura termenilor</h3>
              <p class="mb-4">
                În logica formală, un <strong>termen</strong> este definit ca un cuvânt sau un grup de cuvinte care exprimă o noțiune și se referă la unul sau mai multe obiecte, fie ele reale sau ideale. <a href="http://generalmagheru.ro/files/resurse_educationale/2017/socio_umane/LOGICA_suport%20de%20curs.pdf" class="citation" target="_blank">[226]</a>
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-3">Componentele fundamentale ale termenilor:</h4>
                <div class="grid md:grid-cols-3 gap-6">
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-blue-800 mb-2">Componenta lingvistică</h5>
                    <p class="text-sm">Expresia verbală a termenului, cuvântul sau grupul de cuvinte folosite pentru desemnare</p>
                  </div>
                  <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-green-800 mb-2">Componenta cognitivă</h5>
                    <p class="text-sm">Totalitatea însușirilor, proprietăților și relațiilor pe care le posedă obiectele din extensiune</p>
                  </div>
                  <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-purple-800 mb-2">Componenta ontologică</h5>
                    <p class="text-sm">Totalitatea obiectelor reale sau ideale cărora le corespunde termenul respectiv</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="termeni-clasificare" class="mt-8">
              <h3 class="subsection-title">1.2 Clasificarea termenilor</h3>

              <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-3 text-blue-800">Din punct de vedere al intenției:</h4>
                  <ul class="space-y-2 text-sm">
                    <li><strong>Termeni absoluți și relativi:</strong> Absoluți exprimă proprietăți independente (ex: &#34;om&#34;), relativi își capătă înțelesul prin raportare la alți termeni (ex: &#34;tată&#34;)</li>
                    <li><strong>Termeni abstracți și concreți:</strong> Abstracți desemnează însușiri considerate independent (ex: &#34;bunătate&#34;), concreți desemnează obiecte (ex: &#34;masă&#34;)</li>
                    <li><strong>Termeni pozitivi și negativi:</strong> Pozitivi indică prezența unei însușiri (ex: &#34;vertebrat&#34;), negativi exprimă absența (ex: &#34;imoral&#34;)</li>
                  </ul>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3 text-green-800">Din punct de vedere al extensiei:</h4>
                  <ul class="space-y-2 text-sm">
                    <li><strong>Termeni vizi și nevizi:</strong> Vizi au clasa vidă (ex: &#34;regele Elveției&#34;), nevizi au cel puțin un element (ex: &#34;carte&#34;)</li>
                    <li><strong>Termeni singulari și generali:</strong> Singulari au un singur element în clasă (ex: &#34;Mihai Eminescu&#34;), generali au cel puțin două elemente (ex: &#34;elev&#34;)</li>
                    <li><strong>Termeni vagi și preciși:</strong> Vagi au limite incerte (ex: &#34;tânăr&#34;), preciși au limite clare (ex: &#34;dreptunghi&#34;)</li>
                  </ul>
                </div>
              </div>
            </div>

            <div id="termeni-raporturi" class="mt-8">
              <h3 class="subsection-title">1.3 Raporturile dintre termeni</h3>

              <div class="diagram-container">
                <h4 class="font-semibold mb-4">Diagrame Euler pentru raporturile dintre termeni</h4>
                <img src="https://kimi-web-img.moonshot.cn/img/i.pinimg.com/e54dae544702df8eed760208b11eef43ba7c68d5.jpg" alt="Diagrame Euler care ilustrează relațiile logice dintre termeni" class="mx-auto rounded-lg" size="medium" aspect="wide" style="linedrawing" query="diagrame euler relații termeni logică" referrerpolicy="no-referrer" data-modified="1" data-score="11592.00"/>
              </div>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-3">Raporturi de concordanță</h4>
                  <ul class="space-y-2">
                    <li><strong>Identitate:</strong> Sferele coincid perfect (ex: &#34;Mihai Eminescu&#34; și &#34;autorul poemului «Luceafărul»&#34;)</li>
                    <li><strong>Subordonare:</strong> Sfera unui termen este inclusă în totalitate în sfera celuilalt (ex: &#34;manual de logică&#34; și &#34;manual&#34;)</li>
                    <li><strong>Încrucișare:</strong> Sferele au o parte comună, dar nu coincid (ex: &#34;elev&#34; și &#34;sportiv&#34;)</li>
                  </ul>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Raporturi de opoziție</h4>
                  <ul class="space-y-2">
                    <li><strong>Contrarietate:</strong> Sferele nu au elemente comune, dar pot exista obiecte în afara ambelor (ex: &#34;cerc&#34; și &#34;triunghi&#34;)</li>
                    <li><strong>Contradicție:</strong> Orice obiect fie face parte din sfera lui A, fie din sfera lui B (ex: &#34;număr par&#34; și &#34;număr impar&#34;)</li>
                  </ul>
                </div>
              </div>
            </div>

            <div id="termeni-sfera" class="mt-8">
              <h3 class="subsection-title">1.4 Sfera și conținutul termenilor</h3>

              <div class="highlight-box">
                <h4 class="font-semibold mb-3">Legea inversă a extensiei și intenției</h4>
                <p class="mb-3">
                  Cu cât conținutul unui termen este mai bogat (adică cu cât are mai multe însușiri), cu atât sfera lui este mai restrânsă (adică cu atât desemnează mai puține obiecte), și invers. <a href="https://ro.scribd.com/doc/231381278/logica-BAC-teorie" class="citation" target="_blank">[120]</a>
                </p>
                <div class="example-box">
                  <p class="text-sm">
                    <strong>Exemplu:</strong> Termenul &#34;om&#34; are o intenție mai bogată decât termenul &#34;animal&#34; (include toate însușirile &#34;animalului&#34; plus &#34;raționalitatea&#34;), dar extensia termenului &#34;om&#34; este mai mică decât extensia termenului &#34;animal&#34;.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Capitolul 2: Propoziții Categorice -->
        <section id="propozitii-definitie" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">2. Propoziții Categorice</h2>

            <div id="propozitii-definitie" class="mt-8">
              <h3 class="subsection-title">2.1 Definiția și structura propozițiilor categorice</h3>

              <p class="mb-4">
                O propoziție categorică este o formă logică în care un termen, numit <strong>predicat logic (P)</strong>, se enunță despre un alt termen, numit <strong>subiect logic (S)</strong>. <a href="https://ro.scribd.com/document/666762413/Logica-Propozitii-categorice" class="citation" target="_blank">[151]</a>
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Componentele structurale:</h4>
                <div class="grid md:grid-cols-2 gap-6">
                  <div>
                    <h5 class="font-semibold text-blue-800 mb-2">1. Subiectul logic (S)</h5>
                    <p class="text-sm mb-4">Termenul despre care se enunță ceva. Reprezintă clasa de obiecte care este tema propoziției.</p>

                    <h5 class="font-semibold text-green-800 mb-2">2. Predicatul logic (P)</h5>
                    <p class="text-sm mb-4">Termenul prin care se enunță ceva despre subiect. Reprezintă clasa de obiecte atribuită sau negată subiectului.</p>
                  </div>
                  <div>
                    <h5 class="font-semibold text-purple-800 mb-2">3. Cuantorul</h5>
                    <p class="text-sm mb-4">Arată cantitatea propoziției: universal (&#34;toți&#34;, &#34;niciun&#34;), particular (&#34;unii&#34;, &#34;unele&#34;), singular (nume proprii).</p>

                    <h5 class="font-semibold text-orange-800 mb-2">4. Copula logică</h5>
                    <p class="text-sm mb-4">Arată calitatea propoziției: afirmativă (&#34;este&#34;, &#34;sunt&#34;) sau negativă (&#34;nu este&#34;, &#34;nu sunt&#34;).</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="propozitii-tipuri" class="mt-8">
              <h3 class="subsection-title">2.2 Tipurile de propoziții categorice</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-3">Propoziția Universal Afirmativă (Tip A)</h4>
                  <div class="bg-green-50 p-4 rounded-lg">
                    <p class="font-mono text-sm mb-2">Forma standard: &#34;Toți S sunt P&#34;</p>
                    <p class="font-mono text-sm mb-2">Simbol logic: SaP</p>
                    <p class="text-sm">Exemplu: &#34;Toți oamenii sunt muritori.&#34;</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Propoziția Universal Negativă (Tip E)</h4>
                  <div class="bg-red-50 p-4 rounded-lg">
                    <p class="font-mono text-sm mb-2">Forma standard: &#34;Niciun S nu este P&#34;</p>
                    <p class="font-mono text-sm mb-2">Simbol logic: SeP</p>
                    <p class="text-sm">Exemplu: &#34;Niciun om nu este perfect.&#34;</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Propoziția Particular Afirmativă (Tip I)</h4>
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <p class="font-mono text-sm mb-2">Forma standard: &#34;Unii S sunt P&#34;</p>
                    <p class="font-mono text-sm mb-2">Simbol logic: SiP</p>
                    <p class="text-sm">Exemplu: &#34;Unii oameni sunt înțelepți.&#34;</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Propoziția Particular Negativă (Tip O)</h4>
                  <div class="bg-yellow-50 p-4 rounded-lg">
                    <p class="font-mono text-sm mb-2">Forma standard: &#34;Unii S nu sunt P&#34;</p>
                    <p class="font-mono text-sm mb-2">Simbol logic: SoP</p>
                    <p class="text-sm">Exemplu: &#34;Unii oameni nu sunt fericiți.&#34;</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="propozitii-rapoarte" class="mt-8">
              <h3 class="subsection-title">2.3 Raporturile dintre propozițiile categorice</h3>

              <div class="diagram-container">
                <h4 class="font-semibold mb-4">Pătratul logic al opozițiilor (Pătratul lui Boethius)</h4>
                <img src="https://kimi-web-img.moonshot.cn/img/s13emagst.akamaized.net/f4690aadad6e53f192bab585c3cee0c55156fe1c.jpg" alt="Pătratul logic al opozițiilor care arată relațiile dintre propozițiile categorice A, E, I, O" class="mx-auto rounded-lg" size="medium" aspect="square" query="pătrat logic al opozițiilor" referrerpolicy="no-referrer" data-modified="1" data-score="11589.00"/>
              </div>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-3">Raport de Contradicție (A-O, E-I)</h4>
                  <p class="text-sm mb-2">Două propoziții contradictorii nu pot fi niciodată ambele adevărate și nici ambele false în același timp.</p>
                  <div class="example-box">
                    <p class="text-sm">Dacă A &#34;Toți oamenii sunt muritori&#34; este adevărată, atunci O &#34;Unii oameni nu sunt muritori&#34; este falsă.</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Raport de Contrarietate (A-E)</h4>
                  <p class="text-sm mb-2">Două propoziții contrarii nu pot fi ambele adevărate în același timp, dar pot fi ambele false.</p>
                  <div class="example-box">
                    <p class="text-sm">Dacă A &#34;Toate cărțile sunt interesante&#34; este adevărată, atunci E &#34;Nicio carte nu este interesantă&#34; este falsă.</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Raport de Subcontrarietate (I-O)</h4>
                  <p class="text-sm mb-2">Două propoziții subcontrarii nu pot fi ambele false în același timp, dar pot fi ambele adevărate.</p>
                  <div class="example-box">
                    <p class="text-sm">Dacă I &#34;Unele cărți sunt plictisitoare&#34; este falsă, atunci O &#34;Unele cărți nu sunt plictisitoare&#34; este adevărată.</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3">Raport de Subalternare (A-I, E-O)</h4>
                  <p class="text-sm mb-2">Adevărul propoziției universale implică adevărul propoziției particulare, dar nu și invers.</p>
                  <div class="example-box">
                    <p class="text-sm">Dacă A &#34;Toți câinii sunt mamifere&#34; este adevărată, atunci I &#34;Unii câini sunt mamifere&#34; este adevărată.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Capitolul 3: Inferențe Imediate -->
        <section id="inferente-conversiune" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">3. Inferențe Imediate cu Propoziții Categorice</h2>

            <div id="inferente-conversiune" class="mt-8">
              <h3 class="subsection-title">3.1 Conversiunea (Conversion)</h3>

              <p class="mb-4">
                Conversiunea este o operație logică prin care se schimbă între ele pozițiile subiectului și predicatului logic dintr-o propoziție categorică, păstrând calitatea propoziției.
              </p>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-3 text-green-800">Conversiune Simplă (Validă)</h4>
                  <div class="mb-4">
                    <h5 class="font-semibold text-sm mb-2">Propoziții de tip E (SeP → PeS)</h5>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                      <p>Exemplu: &#34;Niciun om nu este perfect&#34; (SeP)</p>
                      <p class="font-mono mt-1">→ &#34;Niciun lucru perfect nu este om&#34; (PeS)</p>
                    </div>
                  </div>
                  <div>
                    <h5 class="font-semibold text-sm mb-2">Propoziții de tip I (SiP → PiS)</h5>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                      <p>Exemplu: &#34;Unii oameni sunt sportivi&#34; (SiP)</p>
                      <p class="font-mono mt-1">→ &#34;Unii sportivi sunt oameni&#34; (PiS)</p>
                    </div>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-3 text-blue-800">Conversiune Prin Accident</h4>
                  <div class="mb-4">
                    <h5 class="font-semibold text-sm mb-2">Propoziții de tip A (SaP → PiS)</h5>
                    <div class="bg-gray-100 p-3 rounded text-sm">
                      <p>Exemplu: &#34;Toți câinii sunt animale&#34; (SaP)</p>
                      <p class="font-mono mt-1">→ &#34;Unele animale sunt câini&#34; (PiS)</p>
                    </div>
                  </div>
                  <div class="bg-red-50 p-3 rounded">
                    <h5 class="font-semibold text-sm mb-2 text-red-800">Atenție!</h5>
                    <p class="text-sm">Propozițiile de tip O nu admit conversiune validă.</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="inferente-obversiune" class="mt-8">
              <h3 class="subsection-title">3.2 Obversiunea (Obversion)</h3>

              <p class="mb-4">
                Obversiunea este o operație logică care obține o propoziție echivalentă din punct de vedere al valorii de adevăr cu propoziția inițială, prin schimbarea calității și înlocuirea predicatului cu complementul său. <a href="https://brewminate.com/logic-categorical-propositions-and-syllogisms/" class="citation" target="_blank">[191]</a>
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Pașii obversiunii:</h4>
                <ol class="list-decimal list-inside space-y-2 ml-4">
                  <li class="text-sm">Se schimbă calitatea propoziției (afirmativă devine negativă și invers)</li>
                  <li class="text-sm">Se înlocuiește predicatul logic cu complementul său (non-P)</li>
                </ol>

                <div class="mt-6 grid md:grid-cols-2 gap-4">
                  <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-semibold mb-2">A (SaP) → E (Se non-P)</h5>
                    <p class="text-sm">&#34;Toți oamenii sunt muritori&#34; → &#34;Niciun om nu este nemuritor&#34;</p>
                  </div>
                  <div class="bg-red-50 p-4 rounded-lg">
                    <h5 class="font-semibold mb-2">E (SeP) → A (Sa non-P)</h5>
                    <p class="text-sm">&#34;Niciun om nu este perfect&#34; → &#34;Toți oamenii sunt imperfecți&#34;</p>
                  </div>
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-semibold mb-2">I (SiP) → O (So non-P)</h5>
                    <p class="text-sm">&#34;Unii oameni sunt sportivi&#34; → &#34;Unii oameni nu sunt nesportivi&#34;</p>
                  </div>
                  <div class="bg-yellow-50 p-4 rounded-lg">
                    <h5 class="font-semibold mb-2">O (SoP) → I (Si non-P)</h5>
                    <p class="text-sm">&#34;Unii oameni nu sunt fericiți&#34; → &#34;Unii oameni sunt nefericiți&#34;</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="inferente-contrapozitie" class="mt-8">
              <h3 class="subsection-title">3.3 Contrapoziția (Contraposition)</h3>

              <p class="mb-4">
                Contrapoziția este o operație logică care implică obversiunea propoziției inițiale, urmată de conversiunea propoziției obținute. Ea schimbă subiectul cu complementul predicatului și predicatul cu complementul subiectului.
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Contrapoziția este validă pentru:</h4>

                <div class="grid md:grid-cols-2 gap-6">
                  <div>
                    <h5 class="font-semibold mb-3 text-green-800">Propoziții de tip A (SaP → non-Pa non-S)</h5>
                    <div class="bg-gray-100 p-4 rounded">
                      <p class="text-sm mb-2">Exemplu:</p>
                      <p class="text-sm">&#34;Toți oamenii sunt muritori&#34; (SaP)</p>
                      <p class="text-sm font-mono">↓ Obversiune</p>
                      <p class="text-sm">&#34;Niciun om nu este nemuritor&#34; (Se non-P)</p>
                      <p class="text-sm font-mono">↓ Conversiune</p>
                      <p class="text-sm">&#34;Niciun nemuritor nu este om&#34; (non-PeS)</p>
                      <p class="text-sm font-mono">↓ Obversiune</p>
                      <p class="text-sm font-semibold">&#34;Toți nemuritorii sunt non-oameni&#34; (non-Pa non-S)</p>
                    </div>
                  </div>

                  <div>
                    <h5 class="font-semibold mb-3 text-blue-800">Propoziții de tip O (SoP → non-Po non-S)</h5>
                    <div class="bg-gray-100 p-4 rounded">
                      <p class="text-sm mb-2">Exemplu:</p>
                      <p class="text-sm">&#34;Unii oameni nu sunt sportivi&#34; (SoP)</p>
                      <p class="text-sm font-mono">↓ Obversiune</p>
                      <p class="text-sm">&#34;Unii oameni sunt nesportivi&#34; (Si non-P)</p>
                      <p class="text-sm font-mono">↓ Conversiune</p>
                      <p class="text-sm">&#34;Unii nesportivi sunt oameni&#34; (non-PiS)</p>
                      <p class="text-sm font-mono">↓ Obversiune</p>
                      <p class="text-sm font-semibold">&#34;Unii nesportivi nu sunt non-oameni&#34; (non-Po non-S)</p>
                    </div>
                  </div>
                </div>

                <div class="mt-6 bg-red-50 p-4 rounded-lg">
                  <h5 class="font-semibold mb-2 text-red-800">Important!</h5>
                  <p class="text-sm">Contrapoziția nu este validă pentru propozițiile de tip E și I în forma lor simplă.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Capitolul 4: Silogismul -->
        <section id="silogism-definitie" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">4. Silogismul (Syllogism)</h2>

            <div id="silogism-definitie" class="mt-8">
              <h3 class="subsection-title">4.1 Definiția și structura silogismului</h3>

              <p class="mb-4">
                Silogismul este un raționament deductiv compus din trei propoziții categorice: două premise și o concluzie. Aceste trei propoziții conțin în total trei termeni, fiecare apărând de două ori.
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Structura silogismului:</h4>

                <div class="example-box mb-6">
                  <h5 class="font-semibold mb-2">Exemplu clasic:</h5>
                  <ol class="list-decimal list-inside space-y-1 ml-4">
                    <li>Toți oamenii sunt muritori. <span class="text-blue-600">(Premisă majoră)</span></li>
                    <li>Socrate este om. <span class="text-green-600">(Premisă minoră)</span></li>
                    <li>Prin urmare, Socrate este muritor. <span class="text-purple-600">(Concluzie)</span></li>
                  </ol>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-blue-800 mb-2">Termenul major (P)</h5>
                    <p class="text-sm">Predicatul logic al concluziei. Apare și în premisa majoră.</p>
                    <p class="text-xs mt-2 text-blue-600">Ex: &#34;muritori&#34;</p>
                  </div>

                  <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-green-800 mb-2">Termenul minor (S)</h5>
                    <p class="text-sm">Subiectul logic al concluziei. Apare și în premisa minoră.</p>
                    <p class="text-xs mt-2 text-green-600">Ex: &#34;Socrate&#34;</p>
                  </div>

                  <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-purple-800 mb-2">Termenul mediu (M)</h5>
                    <p class="text-sm">Termenul care apare în ambele premise, dar nu în concluzie.</p>
                    <p class="text-xs mt-2 text-purple-600">Ex: &#34;om&#34;</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="silogism-reguli" class="mt-8">
              <h3 class="subsection-title">4.2 Regulile de validitate ale silogismului</h3>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Principalele reguli de validitate:</h4>

                <div class="grid md:grid-cols-2 gap-6">
                  <div class="space-y-4">
                    <div class="bg-red-50 p-4 rounded-lg border-l-4 border-red-400">
                      <h5 class="font-semibold text-red-800 mb-2">1. Regula termenului mediu</h5>
                      <p class="text-sm">Termenul mediu trebuie să fie distribuit cel puțin o dată în premise.</p>
                      <p class="text-xs mt-2 text-red-600">Eroare: Termenul mediu nedistribuit</p>
                    </div>

                    <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-orange-400">
                      <h5 class="font-semibold text-orange-800 mb-2">2. Regula termenilor major și minor</h5>
                      <p class="text-sm">Dacă un termen este distribuit în concluzie, trebuie să fi fost distribuit și în premisă.</p>
                      <p class="text-xs mt-2 text-orange-600">Eroare: Termen major/mic distribuit ilegal</p>
                    </div>

                    <div class="bg-yellow-50 p-4 rounded-lg border-l-4 border-yellow-400">
                      <h5 class="font-semibold text-yellow-800 mb-2">3. Regula calității</h5>
                      <p class="text-sm">Dacă o premisă este negativă, concluzia trebuie să fie negativă. Din două premise negative nu rezultă nicio concluzie.</p>
                    </div>
                  </div>

                  <div class="space-y-4">
                    <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-400">
                      <h5 class="font-semibold text-blue-800 mb-2">4. Regula cantității</h5>
                      <p class="text-sm">Dacă o premisă este particulară, concluzia trebuie să fie particulară. Din două premise particulare nu rezultă nicio concluzie.</p>
                    </div>

                    <div class="bg-purple-50 p-4 rounded-lg border-l-4 border-purple-400">
                      <h5 class="font-semibold text-purple-800 mb-2">5. Regula celor două premise afirmative</h5>
                      <p class="text-sm">Dacă ambele premise sunt afirmative, concluzia nu poate fi universală, decât în condiții specifice.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="silogism-figuri" class="mt-8">
              <h3 class="subsection-title">4.3 Figurile și modurile silogistice</h3>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Cele patru figuri silogistice:</h4>

                <div class="overflow-x-auto mb-6">
                  <table class="w-full text-sm border-collapse border border-gray-300">
                    <thead>
                      <tr class="bg-gray-100">
                        <th class="border border-gray-300 p-2">Figura</th>
                        <th class="border border-gray-300 p-2">Poziția termenului mediu</th>
                        <th class="border border-gray-300 p-2">Structura generală</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border border-gray-300 p-2 font-semibold">I</td>
                        <td class="border border-gray-300 p-2">M - P (Premisa majoră)
                          <br/>S - M (Premisa minoră)
                        </td>
                        <td class="border border-gray-300 p-2 font-mono">MP, SM ∴ SP</td>
                      </tr>
                      <tr class="bg-gray-50">
                        <td class="border border-gray-300 p-2 font-semibold">II</td>
                        <td class="border border-gray-300 p-2">P - M (Premisa majoră)
                          <br/>S - M (Premisa minoră)
                        </td>
                        <td class="border border-gray-300 p-2 font-mono">PM, SM ∴ SP</td>
                      </tr>
                      <tr>
                        <td class="border border-gray-300 p-2 font-semibold">III</td>
                        <td class="border border-gray-300 p-2">M - P (Premisa majoră)
                          <br/>M - S (Premisa minoră)
                        </td>
                        <td class="border border-gray-300 p-2 font-mono">MP, MS ∴ SP</td>
                      </tr>
                      <tr class="bg-gray-50">
                        <td class="border border-gray-300 p-2 font-semibold">IV</td>
                        <td class="border border-gray-300 p-2">P - M (Premisa majoră)
                          <br/>M - S (Premisa minoră)
                        </td>
                        <td class="border border-gray-300 p-2 font-mono">PM, MS ∴ SP</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <h4 class="font-semibold mb-4">Modurile silogistice valide:</h4>

                <div class="grid md:grid-cols-2 gap-6">
                  <div class="content-block">
                    <h5 class="font-semibold mb-3">Figura I</h5>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                      <div class="bg-green-100 p-2 rounded">AAA (Barbara)</div>
                      <div class="bg-green-100 p-2 rounded">EAE (Celarent)</div>
                      <div class="bg-green-100 p-2 rounded">AII (Darii)</div>
                      <div class="bg-green-100 p-2 rounded">EIO (Ferio)</div>
                    </div>
                  </div>

                  <div class="content-block">
                    <h5 class="font-semibold mb-3">Figura II</h5>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                      <div class="bg-blue-100 p-2 rounded">EAE (Cesare)</div>
                      <div class="bg-blue-100 p-2 rounded">AEE (Camestres)</div>
                      <div class="bg-blue-100 p-2 rounded">EIO (Festino)</div>
                      <div class="bg-blue-100 p-2 rounded">AOO (Baroco)</div>
                    </div>
                  </div>

                  <div class="content-block">
                    <h5 class="font-semibold mb-3">Figura III</h5>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                      <div class="bg-purple-100 p-2 rounded">IAI (Datisi)</div>
                      <div class="bg-purple-100 p-2 rounded">AII (Darapti)</div>
                      <div class="bg-purple-100 p-2 rounded">EIO (Ferison)</div>
                      <div class="bg-purple-100 p-2 rounded">OAO (Bocardo)</div>
                    </div>
                  </div>

                  <div class="content-block">
                    <h5 class="font-semibold mb-3">Figura IV</h5>
                    <div class="grid grid-cols-2 gap-2 text-sm">
                      <div class="bg-yellow-100 p-2 rounded">AEE (Camenes)</div>
                      <div class="bg-yellow-100 p-2 rounded">IAI (Dimaris)</div>
                      <div class="bg-yellow-100 p-2 rounded">EIO (Fresison)</div>
                      <div class="bg-gray-100 p-2 rounded text-gray-400">-</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="silogism-verificare" class="mt-8">
              <h3 class="subsection-title">4.4 Metode de verificare a validității silogismelor</h3>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Metoda diagramelor Venn:</h4>

                <div class="diagram-container">
                  <img src="https://kimi-web-img.moonshot.cn/img/hacmangabriel.wordpress.com/f0a74b7d1e9f15e38b4a881bbbed7f981ff698fb.png" alt="Diagramă Venn pentru validarea silogismelor" class="mx-auto rounded-lg" size="medium" aspect="square" query="diagramă venn silogisme" referrerpolicy="no-referrer" data-modified="1" data-score="11592.00"/>
                </div>

                <ol class="list-decimal list-inside space-y-2 ml-4 mb-6">
                  <li class="text-sm">Desenați trei cercuri care se intersectează, reprezentând cei trei termeni: S, P și M</li>
                  <li class="text-sm">Reprezentați grafic informațiile din prima premisă, hașurând zonele goale sau marcând existența elementelor</li>
                  <li class="text-sm">Reprezentați grafic informațiile din a doua premisă</li>
                  <li class="text-sm">Examinați diagrama rezultată - dacă arată concluzia, silogismul este valid</li>
                </ol>

                <div class="highlight-box">
                  <h5 class="font-semibold mb-3">Alte metode de verificare:</h5>
                  <ul class="space-y-2">
                    <li class="text-sm">• <strong>Verificarea regulilor silogismului:</strong> Se verifică dacă silogismul respectă toate cele cinci reguli generale</li>
                    <li class="text-sm">• <strong>Metoda reducerii la absurd:</strong> Se presupune că premisele sunt adevărate, dar concluzia este falsă</li>
                    <li class="text-sm">• <strong>Utilizarea tabelelor de adevăr:</strong> Metodă mai complexă, mai puțin folosită pentru silogisme simple</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Capitolul 5: Argumentarea -->
        <section id="argumentare-definitie" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">5. Argumentarea (Argumentation)</h2>

            <div id="argumentare-definitie" class="mt-8">
              <h3 class="subsection-title">5.1 Definiția și structura argumentării</h3>

              <p class="mb-4">
                Argumentarea este un proces logic fundamental prin care se demonstrează sau se justifică adevărul unei opinii, cu scopul de a convinge pe ceilalți să o accepte. <a href="https://dokumen.pub/logica-i-argumentare-compendiu-i-exerciii-pentru-bacalaureat-i-olimpiada.html" class="citation" target="_blank">[149]</a>
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Structura unui argument:</h4>

                <div class="example-box mb-6">
                  <h5 class="font-semibold mb-2">Exemplu:</h5>
                  <p class="text-sm mb-2">&#34;Cei care întârzie sunt nepunctuali. Tu ești o persoană care întârzie. Prin urmare, tu ești nepunctual.&#34;</p>
                  <div class="grid md:grid-cols-2 gap-4 mt-4">
                    <div class="bg-blue-50 p-3 rounded">
                      <h6 class="font-semibold text-blue-800 text-sm">Premise</h6>
                      <p class="text-xs">&#34;Cei care întârzie sunt nepunctuali.&#34;
                        <br/>&#34;Tu ești o persoană care întârzie.&#34;
                      </p>
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                      <h6 class="font-semibold text-green-800 text-sm">Concluzie</h6>
                      <p class="text-xs">&#34;Tu ești nepunctual.&#34;</p>
                    </div>
                  </div>
                </div>

                <h4 class="font-semibold mb-4">Tipuri de structuri argumentative:</h4>

                <div class="grid md:grid-cols-3 gap-4">
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-blue-800 mb-2">Simplă</h5>
                    <p class="text-sm">O singură premisă și o concluzie</p>
                    <p class="text-xs mt-2 italic">&#34;Geamul s-a spart deoarece copilul vecinei a aruncat cu piatra în el.&#34;</p>
                  </div>

                  <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-green-800 mb-2">Cu premise multiple</h5>
                    <p class="text-sm">Două sau mai multe premise care susțin o singură concluzie</p>
                    <p class="text-xs mt-2 italic">&#34;Întrucât olimpicii intră la facultate fără concurs, iar tu ești olimpic, rezultă că vei intra fără concurs.&#34;</p>
                  </div>

                  <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-purple-800 mb-2">Complexă</h5>
                    <p class="text-sm">Argumente în care unele premise sunt la rândul lor concluzii intermediare</p>
                    <p class="text-xs mt-2 italic">Structuri ierarhice cu concluzii intermediare care susțin concluzia finală</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="argumentare-tipuri" class="mt-8">
              <h3 class="subsection-title">5.2 Tipuri de argumente</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-4 text-blue-800">Argumente Deductive</h4>
                  <p class="text-sm mb-4">
                    Premisele pretind să ofere un sprijin cert și concludent pentru concluzie. Dacă premisele sunt adevărate, atunci concluzia este în mod necesar adevărată.
                  </p>

                  <div class="example-box">
                    <h5 class="font-semibold mb-2 text-sm">Exemplu:</h5>
                    <ol class="list-decimal list-inside text-sm space-y-1 ml-4">
                      <li>Toți oamenii sunt muritori.</li>
                      <li>Socrate este om.</li>
                      <li>Prin urmare, Socrate este muritor.</li>
                    </ol>
                    <p class="text-xs mt-3 italic">Concluzia rezultă în mod necesar din premise.</p>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-4 text-green-800">Argumente Inductive</h4>
                  <p class="text-sm mb-4">
                    Premisele pretind să ofere un sprijin probabilist pentru concluzie. Dacă premisele sunt adevărate, atunci concluzia este probabil adevărată.
                  </p>

                  <div class="example-box">
                    <h5 class="font-semibold mb-2 text-sm">Exemplu (generalizare inductivă):</h5>
                    <ol class="list-decimal list-inside text-sm space-y-1 ml-4">
                      <li>Caiobanul 1 a fost alb.</li>
                      <li>Caiobanul 2 a fost alb.</li>
                      <li>Caiobanul 3 a fost alb.</li>
                      <li>Prin urmare, toți caiobanii sunt albi.</li>
                    </ol>
                    <p class="text-xs mt-3 italic">Concluzia este probabilă, dar nu certă.</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="argumentare-validitatea" class="mt-8">
              <h3 class="subsection-title">5.3 Validitatea și soliditatea argumentelor</h3>

              <div class="grid md:grid-cols-2 gap-6">
                <div class="content-block">
                  <h4 class="font-semibold mb-4 text-blue-800">Pentru argumentele deductive:</h4>

                  <div class="space-y-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                      <h5 class="font-semibold text-blue-800 mb-2">Validitatea</h5>
                      <p class="text-sm">Un argument este valid dacă este imposibil ca premisele să fie adevărate și concluzia falsă. Se referă la structura logică.</p>
                      <div class="mt-2 p-2 bg-white rounded text-xs">
                        <strong>Exemplu valid:</strong> &#34;Toți oamenii au aripi. Socrate este om. Prin urmare, Socrate are aripi.&#34; (Structura e validă, chiar dacă premisele sunt false)
                      </div>
                    </div>

                    <div class="bg-green-50 p-4 rounded-lg">
                      <h5 class="font-semibold text-green-800 mb-2">Soliditatea</h5>
                      <p class="text-sm">Un argument este solid dacă este valid și toate premisele sale sunt adevărate.</p>
                      <div class="mt-2 p-2 bg-white rounded text-xs">
                        <strong>Exemplu solid:</strong> &#34;Toți oamenii sunt muritori. Socrate este om. Prin urmare, Socrate este muritor.&#34;
                      </div>
                    </div>
                  </div>
                </div>

                <div class="content-block">
                  <h4 class="font-semibold mb-4 text-green-800">Pentru argumentele inductive:</h4>

                  <div class="space-y-4">
                    <div class="bg-yellow-50 p-4 rounded-lg">
                      <h5 class="font-semibold text-yellow-800 mb-2">Tăria (Puterea)</h5>
                      <p class="text-sm">Un argument inductiv este tare dacă, având premise adevărate, concluzia este probabil adevărată.</p>
                      <div class="mt-2 p-2 bg-white rounded text-xs">
                        <strong>Exemplu tare:</strong> &#34;Am observat 1000 de lebede și toate erau albe. Prin urmare, toate lebedele sunt albe.&#34;
                      </div>
                    </div>

                    <div class="bg-orange-50 p-4 rounded-lg">
                      <h5 class="font-semibold text-orange-800 mb-2">Concluzivitatea</h5>
                      <p class="text-sm">Un argument inductiv este concluziv dacă este tare și toate premisele sale sunt adevărate.</p>
                      <div class="mt-2 p-2 bg-white rounded text-xs">
                        <strong>Exemplu:</strong> Un argument inductiv tare cu premise verificate și adevărate
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Capitolul 6: Definirea și Clasificarea -->
        <section id="definire-structura" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">6. Definirea și Clasificarea</h2>

            <div id="definire-structura" class="mt-8">
              <h3 class="subsection-title">6.1 Definiția: structură și reguli pentru corectitudine</h3>

              <p class="mb-4">
                Definirea este o operație logică de bază prin care se precizează înțelesul unui termen sau al unei noțiuni, identificând caracteristicile esențiale care îl deosebesc de alte termene sau noțiuni. <a href="https://ro.scribd.com/document/673282446/Logica-bac-Tot-ce-trebuie-sa-stii-sinteze" class="citation" target="_blank">[35]</a>
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Structura unei definiții:</h4>

                <div class="grid md:grid-cols-3 gap-4 mb-6">
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-blue-800 mb-2">Definitul (A)</h5>
                    <p class="text-sm">Obiectul sau noțiunea care urmează să fie definit</p>
                  </div>

                  <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-green-800 mb-2">Definitorul (B)</h5>
                    <p class="text-sm">Expresia care explică înțelesul definitului</p>
                  </div>

                  <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-purple-800 mb-2">Relația de definire</h5>
                    <p class="text-sm">Legătura logică dintre A și B (A = df B)</p>
                  </div>
                </div>

                <h4 class="font-semibold mb-4">Reguli pentru corectitudinea definirii:</h4>

                <div class="space-y-6">
                  <div class="border-l-4 border-red-400 pl-4">
                    <h5 class="font-semibold text-red-800 mb-2">A. Regula adecvării definitorului</h5>
                    <p class="text-sm mb-3">Definitorul trebuie să aibă exact același înțeles și aceeași sferă ca și definitul.</p>

                    <div class="grid md:grid-cols-3 gap-4">
                      <div class="bg-red-50 p-3 rounded">
                        <h6 class="font-semibold text-red-700 text-sm mb-1">Definiție prea largă</h6>
                        <p class="text-xs">&#34;Văzul = df facultatea de a distinge corpurile&#34;</p>
                      </div>
                      <div class="bg-red-50 p-3 rounded">
                        <h6 class="font-semibold text-red-700 text-sm mb-1">Definiție prea îngustă</h6>
                        <p class="text-xs">&#34;Matematica = df știința numerelor&#34;</p>
                      </div>
                      <div class="bg-red-50 p-3 rounded">
                        <h6 class="font-semibold text-red-700 text-sm mb-1">Definiție prea largă și îngustă</h6>
                        <p class="text-xs">&#34;Profesorul = df persoana care lucrează la școala generală&#34;</p>
                      </div>
                    </div>
                  </div>

                  <div class="border-l-4 border-orange-400 pl-4">
                    <h5 class="font-semibold text-orange-800 mb-2">B. Regula non-circularității</h5>
                    <p class="text-sm mb-3">Termenul definit nu trebuie să apară în definitor.</p>
                    <div class="bg-orange-50 p-3 rounded">
                      <p class="text-xs">&#34;Agricultura = df activitatea agricultorului&#34;</p>
                    </div>
                  </div>

                  <div class="border-l-4 border-yellow-400 pl-4">
                    <h5 class="font-semibold text-yellow-800 mb-2">C. Regula afirmativității</h5>
                    <p class="text-sm mb-3">Definitorul trebuie să indice ceea ce este definitul, nu ceea ce nu este.</p>
                    <div class="bg-yellow-50 p-3 rounded">
                      <p class="text-xs">&#34;Omul = df ființa care nu este nici înger, nici diavol&#34;</p>
                    </div>
                  </div>

                  <div class="border-l-4 border-blue-400 pl-4">
                    <h5 class="font-semibold text-blue-800 mb-2">D. Regula clarității și preciziei</h5>
                    <p class="text-sm">Definitorul trebuie să fie formulat în termeni cât mai clari și preciși, evitând ambiguitățile.</p>
                  </div>

                  <div class="border-l-4 border-green-400 pl-4">
                    <h5 class="font-semibold text-green-800 mb-2">E. Regula consistenței</h5>
                    <p class="text-sm">Definiția trebuie să fie consistentă cu alte definiții și propoziții acceptate ca adevărate.</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="clasificare-structura" class="mt-8">
              <h3 class="subsection-title">6.2 Clasificarea: structură și reguli pentru corectitudine</h3>

              <p class="mb-4">
                Clasificarea este o operație logică prin care noțiunile sau obiectele sunt ordonate și grupate în clase, pe baza unor criterii comune. <a href="https://ro.scribd.com/document/673282446/Logica-bac-Tot-ce-trebuie-sa-stii-sinteze" class="citation" target="_blank">[35]</a>
              </p>

              <div class="content-block">
                <h4 class="font-semibold mb-4">Structura unei clasificări:</h4>

                <div class="grid md:grid-cols-3 gap-4 mb-6">
                  <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-blue-800 mb-2">Elementele clasificării</h5>
                    <p class="text-sm">Obiectele sau noțiunile care urmează să fie grupate</p>
                    <p class="text-xs mt-2 italic">Ex: &#34;persoanele care practică sport&#34;</p>
                  </div>

                  <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-green-800 mb-2">Clasele</h5>
                    <p class="text-sm">Grupurile în care sunt incluse elementele</p>
                    <p class="text-xs mt-2 italic">Ex: &#34;juniori 1, juniori 2, seniori&#34;</p>
                  </div>

                  <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-semibold text-purple-800 mb-2">Criteriul clasificării</h5>
                    <p class="text-sm">Principiul pe baza căruia se face gruparea</p>
                    <p class="text-xs mt-2 italic">Ex: &#34;vârsta&#34;, &#34;nivelul performanței&#34;</p>
                  </div>
                </div>

                <h4 class="font-semibold mb-4">Reguli pentru corectitudinea clasificării:</h4>

                <div class="space-y-4">
                  <div class="border-l-4 border-blue-400 pl-4">
                    <h5 class="font-semibold text-blue-800 mb-2">A. Prezența tuturor elementelor structurale</h5>
                    <p class="text-sm">O clasificare corectă trebuie să conțină explicit elementele clasificate, clasele și criteriul.</p>
                  </div>

                  <div class="border-l-4 border-green-400 pl-4">
                    <h5 class="font-semibold text-green-800 mb-2">B. Completitudinea</h5>
                    <p class="text-sm">Toate elementele trebuie să fie incluse într-una dintre clase. Nu trebuie să rămână elemente neclasificate.</p>
                  </div>

                  <div class="border-l-4 border-purple-400 pl-4">
                    <h5 class="font-semibold text-purple-800 mb-2">C. Mutualitatea exclusivă</h5>
                    <p class="text-sm">Pe aceeași treaptă, între clase trebuie să existe doar raporturi de opoziție. Un element nu poate face parte din mai multe clase simultan.</p>
                  </div>

                  <div class="border-l-4 border-orange-400 pl-4">
                    <h5 class="font-semibold text-orange-800 mb-2">D. Criteriu unic</h5>
                    <p class="text-sm mb-3">La fiecare treaptă, gruparea se face după un singur criteriu.</p>
                    <div class="bg-orange-50 p-3 rounded">
                      <p class="text-xs">
                        <strong>Incorect:</strong> &#34;bărbați, femei, copii&#34; (folosește două criterii: sexul și vârsta)
                      </p>
                    </div>
                  </div>

                  <div class="border-l-4 border-red-400 pl-4">
                    <h5 class="font-semibold text-red-800 mb-2">E. Omogenitatea</h5>
                    <p class="text-sm mb-3">Asemănările dintre obiectele unei clase trebuie să fie mai importante decât deosebirile.</p>
                    <div class="bg-red-50 p-3 rounded">
                      <p class="text-xs">
                        <strong>Incorect:</strong> A include &#34;delfinii&#34; în clasa &#34;peștilor&#34; - sunt mamifere, nu pești
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Capitolul 7: Erori de Argumentare -->
        <section id="erori-inferente" class="mb-16">
          <div class="section-card">
            <h2 class="section-title serif">7. Erori de Argumentare</h2>

            <div id="erori-inferente" class="mt-8">
              <h3 class="subsection-title">7.1 Erori în inferențe imediate</h3>

              <div class="content-block">
                <p class="mb-4">
                  Erorile în inferențe imediate apar atunci când se încearcă obținerea unei concluzii care nu decurge în mod logic din premisa inițială, conform regulilor de transformare.
                </p>

                <div class="grid md:grid-cols-2 gap-6">
                  <div class="bg-red-50 p-4 rounded-lg border-l-4 border-red-400">
                    <h4 class="font-semibold text-red-800 mb-3">Conversiune incorectă a propoziției A</h4>
                    <p class="text-sm mb-2">Din &#34;Toți S sunt P&#34; (SaP) se deduce direct &#34;Toți P sunt S&#34; (PaS)</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p><strong>Exemplu incorect:</strong> &#34;Toți câinii sunt animale&#34; → &#34;Toate animalele sunt câini&#34;</p>
                      <p class="mt-2 text-green-700"><strong>Corect:</strong> &#34;Toți câinii sunt animale&#34; → &#34;Unele animale sunt câini&#34; (PiS)</p>
                    </div>
                  </div>

                  <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-orange-400">
                    <h4 class="font-semibold text-orange-800 mb-3">Conversiune incorectă a propoziției O</h4>
                    <p class="text-sm mb-2">Încercarea de a obține o conversă pentru &#34;Unii S nu sunt P&#34;</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p><strong>Exemplu incorect:</strong> &#34;Unii oameni nu sunt doctori&#34; → &#34;Unii doctori nu sunt oameni&#34;</p>
                      <p class="mt-2 text-red-700"><strong>Eroare:</strong> Propozițiile O nu admit conversiune validă</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="erori-silogisme" class="mt-8">
              <h3 class="subsection-title">7.2 Erori în silogisme</h3>

              <div class="content-block">
                <p class="mb-4">
                  Erorile în silogisme apar prin încălcarea regulilor de validitate. Acestea includ:
                </p>

                <div class="grid md:grid-cols-2 gap-4">
                  <div class="bg-red-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-red-800 mb-2">Eroarea celor patru termeni</h4>
                    <p class="text-sm mb-2">Un termen este folosit cu înțelesuri diferite în cele două premise</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Doar omul este rațional. Niciun animal nu este om. Prin urmare, niciun animal nu este rațional.&#34;</p>
                      <p class="mt-2 text-red-700">&#34;Omul&#34; poate avea înțelesuri diferite în premise</p>
                    </div>
                  </div>

                  <div class="bg-orange-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-2">Termen mediu nedistribuit</h4>
                    <p class="text-sm mb-2">Termenul mediu nu este distribuit în niciuna dintre premise</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Toți câinii sunt animale. Toți pisicii sunt animale. Prin urmare, toți pisicii sunt câini.&#34;</p>
                      <p class="mt-2 text-red-700">&#34;Animale&#34; nu este distribuit în nici o premisă</p>
                    </div>
                  </div>

                  <div class="bg-yellow-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Termen major distribuit ilegal</h4>
                    <p class="text-sm mb-2">Termenul major este distribuit în concluzie, dar nu a fost distribuit în premisa majoră</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Toți oamenii sunt muritori. Niciun zeu nu este om. Prin urmare, niciun zeu nu este muritor.&#34;</p>
                      <p class="mt-2 text-red-700">&#34;Muritori&#34; este distribuit în concluzie (E), dar nu în premisa majoră (A)</p>
                    </div>
                  </div>

                  <div class="bg-purple-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Două premise negative</h4>
                    <p class="text-sm mb-2">Din două premise negative nu se poate trage nicio concluzie validă</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Niciun A nu este B. Niciun C nu este B. Prin urmare, niciun C nu este A.&#34;</p>
                      <p class="mt-2 text-red-700">Ambele premise sunt negative - nu se poate trage concluzie</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="erori-paralogisme" class="mt-8">
              <h3 class="subsection-title">7.3 Paralogisme și sofisme comune</h3>

              <div class="content-block">
                <p class="mb-4">
                  Paralogismele sunt raționamente incorecte din punct de vedere logic, iar sofismele sunt paralogisme făcute intenționat pentru a induce în eroare.
                </p>

                <div class="grid md:grid-cols-2 gap-4">
                  <div class="bg-red-50 p-4 rounded-lg border-l-4 border-red-400">
                    <h4 class="font-semibold text-red-800 mb-2">Argumentul ad hominem</h4>
                    <p class="text-sm mb-2">Se atacă persoana care susține argumentul, în loc de argumentul însuși</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Nu ar trebui să-l ascultăm pe X despre politica economică, pentru că el a divorțat de două ori.&#34;</p>
                    </div>
                  </div>

                  <div class="bg-orange-50 p-4 rounded-lg border-l-4 border-orange-400">
                    <h4 class="font-semibold text-orange-800 mb-2">Argumentul ad populum</h4>
                    <p class="text-sm mb-2">Se susține că o concluzie este adevărată pentru că mulți oameni o cred</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Toată lumea folosește acest produs, deci trebuie să fie bun.&#34;</p>
                    </div>
                  </div>

                  <div class="bg-yellow-50 p-4 rounded-lg border-l-4 border-yellow-400">
                    <h4 class="font-semibold text-yellow-800 mb-2">Argumentul circular</h4>
                    <p class="text-sm mb-2">Premisa presupune deja adevărul concluziei</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Biblia este adevărată pentru că este cuvântul lui Dumnezeu, și știm că este cuvântul lui Dumnezeu pentru că Biblia spune asta.&#34;</p>
                    </div>
                  </div>

                  <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-400">
                    <h4 class="font-semibold text-blue-800 mb-2">Falsa cauzalitate</h4>
                    <p class="text-sm mb-2">Se presupune că dacă A a avut loc înaintea lui B, atunci A este cauza lui B</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Am purtat o eșarfă norocoasă și am luat examenul. Deci eșarfa a fost cauza succesului meu.&#34;</p>
                    </div>
                  </div>

                  <div class="bg-green-50 p-4 rounded-lg border-l-4 border-green-400">
                    <h4 class="font-semibold text-green-800 mb-2">Generalizarea pripită</h4>
                    <p class="text-sm mb-2">Se trage o concluzie generală pe baza unui număr prea mic de cazuri</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Am întâlnit doi studenți din acea țară și amândoi erau nepoliticoși. Deci toți studenții din acea țară sunt nepoliticoși.&#34;</p>
                    </div>
                  </div>

                  <div class="bg-purple-50 p-4 rounded-lg border-l-4 border-purple-400">
                    <h4 class="font-semibold text-purple-800 mb-2">Dilema falsă</h4>
                    <p class="text-sm mb-2">Se prezintă o situație ca având doar două alternative, când de fapt există mai multe</p>
                    <div class="bg-white p-3 rounded text-xs">
                      <p>&#34;Fie ești cu noi, fie ești împotriva noastră.&#34;</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      
      </div>
    </main>

    <script>
        // Table of Contents functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tocLinks = document.querySelectorAll('.toc-link');
            const sections = document.querySelectorAll('section[id], div[id]');
            
            // Smooth scrolling for TOC links
            tocLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            
            // Active section highlighting
            function updateActiveSection() {
                const scrollPosition = window.scrollY + 100;
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        tocLinks.forEach(link => link.classList.remove('active'));
                        const activeLink = document.querySelector(`.toc-link[href="#${section.id}"]`);
                        if (activeLink) {
                            activeLink.classList.add('active');
                        }
                    }
                });
            }
            
            window.addEventListener('scroll', updateActiveSection);
            updateActiveSection(); // Initial call
            
            // Mobile TOC toggle (for responsive design)
            const tocToggle = document.createElement('button');
            tocToggle.innerHTML = '<i class="fas fa-bars"></i>';
            tocToggle.className = 'fixed top-4 left-4 z-[1001] bg-white p-2 rounded shadow-lg md:hidden';
            document.body.appendChild(tocToggle);
            
            const toc = document.querySelector('.toc');
            tocToggle.addEventListener('click', () => {
                toc.classList.toggle('open');
            });
            
            // Close TOC when clicking on a link (mobile)
            tocLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 1024) {
                        toc.classList.remove('open');
                    }
                });
            });
        });
    </script>
  

 <?php
include("bacnavigator-footer.php");
?>