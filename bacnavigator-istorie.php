<?php include("bacnavigator-header.php");
?>
  <style>
        :root {
            --primary: #1f2937;
            --secondary: #111827;
            --accent: #d97706;
            --text: #374151;
            --light: #f9fafb;
            --border: #e5e7eb;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: var(--text);
            overflow-x: hidden;
            background-color: #f9fafb; /* Equivalent to bg-gray-50 */
        }

        .serif {
            font-family: 'Playfair Display', serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(31, 41, 55, 0.95) 0%, rgba(17, 24, 39, 0.9) 100%);
        }

        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 4rem 0;
        }

        .toc-link {
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            padding: 0.75rem 1rem; /* Equivalent to px-4 py-3 */
            border-radius: 0.5rem; /* Equivalent to rounded-lg */
            font-size: 0.875rem; /* Equivalent to text-sm */
            font-weight: 500; /* Equivalent to font-medium */
            color: #4b5563; /* Equivalent to text-gray-700 */
        }

        .toc-link:hover, .toc-link.active {
            border-left-color: var(--accent);
            background: rgba(217, 119, 6, 0.1);
            color: #1f2937; /* Equivalent to hover:text-gray-900 */
        }

        .citation {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .citation:hover {
            color: #b45309;
            text-decoration: underline;
        }

        .pull-quote {
            border-left: 4px solid var(--accent);
            background: linear-gradient(135deg, rgba(217, 119, 6, 0.05), rgba(217, 119, 6, 0.02));
            font-style: italic;
            font-size: 1.125rem;
            padding: 1.5rem; /* Equivalent to p-6 */
            border-radius: 0.5rem; /* Equivalent to rounded-lg */
        }

        .timeline-dot {
            width: 12px;
            height: 12px;
            background: var(--accent);
            border: 3px solid white;
            border-radius: 50%;
            box-shadow: 0 0 0 3px var(--accent);
        }

        .expandable-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }

        .expandable-content.expanded {
            max-height: 1000px;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .bento-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .bento-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        @media (max-width: 768px) {
            .bento-grid {
                grid-template-columns: 1fr;
            }
            .bento-card img {
                max-width: 100%;
                height: auto;
            }
            .timeline-dot {
                width: 10px;
                height: 10px;
                border-width: 2px;
            }
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    </style>
 
 <!-- Table of Contents -->
    <div class="bg-white shadow-lg z-3 overflow-auto border-end border-gray-200 mb-4">
      <div class="p-4">
        <div class="mb-4">
          <h3 class="serif fs-5 fw-semibold text-gray-900 mb-2">Cuprins</h3>
          <div class="bg-amber-600 rounded" style="height: 4px; width: 48px;"></div>
        </div>

        <nav class="nav flex-column">
          <a href="#overview" class="toc-link nav-link">
            <i class="fas fa-globe-europe me-3 text-amber-600"></i>Prezentare Generală
          </a>
          <a href="#ancient-dacia" class="toc-link nav-link">
            <i class="fas fa-mountain me-3 text-amber-600"></i>Dacia Antică & Cucerirea Romană
          </a>
          <a href="#medieval-formation" class="toc-link nav-link">
            <i class="fas fa-castle me-3 text-amber-600"></i>Formarea Medievală
          </a>
          <a href="#early-modern" class="toc-link nav-link">
            <i class="fas fa-scroll me-3 text-amber-600"></i>Perioada Modernă Timpurie
          </a>
          <a href="#union-independence" class="toc-link nav-link">
            <i class="fas fa-crown me-3 text-amber-600"></i>Unire & Independență
          </a>
          <a href="#world-wars" class="toc-link nav-link">
            <i class="fas fa-crossed-swords me-3 text-amber-600"></i>Era Războaielor Mondiale
          </a>
          <a href="#communist-era" class="toc-link nav-link">
            <i class="fas fa-hammer-sickle me-3 text-amber-600"></i>Era Comunistă
          </a>
          <a href="#modern-romania" class="toc-link nav-link">
            <i class="fas fa-flag me-3 text-amber-600"></i>România Modernă
          </a>
        </nav>
      </div>
    </div>
    <!-- Main Content -->
    <div class="ms-md-auto">
      <!-- Hero Section -->
      <section class="position-relative vh-50 vh-md-62 overflow-hidden">
        <div class="position-absolute inset-0">
          <img src="https://kimi-web-img.moonshot.cn/img/rewildingeurope.com/8840a0e129fb78c02de454415756b5ff467e7840.jpg" alt="Vedere panoramică a Munților Carpați din România" class="w-100 h-100 object-fit-cover" size="wallpaper" aspect="wide" style="photo" query="Carpathian Mountains Romania landscape" referrerpolicy="no-referrer" data-modified="1" data-score="11598.00"/>
          <div class="hero-gradient position-absolute inset-0"></div>
        </div>

        <div class="position-relative z-1 h-100 d-flex align-items-center">
          <div class="container mx-auto px-4 px-md-8">
            <div class="bento-grid">
              <div class="text-white">
                <h1 class="serif fs-2 fs-md-1 fw-bold mb-3 mb-md-4 lh-tight">
                  <span class="fst-italic">România:</span>
                  <br/>
                  O Călătorie Prin Timp
                </h1>
                <p class="fs-5 fs-md-4 text-gray-200 mb-4 mb-md-5 fw-light lh-base">
                  De la rădăcinile dacice antice la integrarea europeană modernă—descoperiți saga epică a unei națiuni forjate prin cuceriri, cultură și revoluție.
                </p>
                <div class="d-flex flex-wrap gap-3 fs-6 text-gray-300">
                  <span class="d-flex align-items-center"><i class="fas fa-clock me-2"></i>Milenii de Istorie</span>
                  <span class="d-flex align-items-center"><i class="fas fa-map me-2"></i>Inima Carpaților</span>
                  <span class="d-flex align-items-center"><i class="fas fa-users me-2"></i>Moștenire Latină</span>
                </div>
              </div>

              <div class="bento-card">
                <div class="p-4">
                  <h3 class="serif fs-5 fw-semibold text-gray-900 mb-3">Perioade Istorice Cheie</h3>
                  <div class="space-y-2">
                    <div class="d-flex align-items-center fs-6">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span class="text-gray-700">Dacia Antică (3000 î.Hr. - 106 d.Hr.)</span>
                    </div>
                    <div class="d-flex align-items-center fs-6">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span class="text-gray-700">Provincia Romană (106-275 d.Hr.)</span>
                    </div>
                    <div class="d-flex align-items-center fs-6">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span class="text-gray-700">Principate Medievale (sec. XIV-XIX)</span>
                    </div>
                    <div class="d-flex align-items-center fs-6">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span class="text-gray-700">România Modernă (1859-Prezent)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Overview Section -->
      <section id="overview" class="py-5 bg-white">
        <div class="container mx-auto px-4 px-md-8">
          <div class="max-w-4xl">
            <h2 class="serif fs-2 fw-bold text-gray-900 mb-4">Tapiseria Istorică Românească</h2>

            <div class="prose prose-lg max-w-none">
              <p class="fs-5 text-gray-700 lh-base mb-4">
                Istoria României reprezintă una dintre cele mai fascinante narațiuni ale Europei—o tapiserie bogată țesută din rădăcini dacice antice, cucerirea și colonizarea romană, formarea principatelor medievale, secole de influență otomană și habsburgică, o vibrantă renaștere națională și, în cele din urmă, apariția unui stat democratic modern integrat în structurile euro-atlantice.
              </p>

              <div class="pull-quote p-4 rounded-lg mb-4">
                <p class="fs-5 text-gray-800 mb-3">
                  &#34;Poporul român este produsul unei alchimii istorice unice—o insulă latină într-o mare slavă, păstrându-și romanitatea prin milenii de migrații, cuceriri și transformări culturale.&#34;
                </p>
                <cite class="fs-6 text-gray-600">— Sinteză Istorică</cite>
              </div>

              <p class="text-gray-700 mb-3">
                Această prezentare cuprinzătoare urmărește călătoria extraordinară a României prin șapte epoci istorice majore, fiecare contribuind cu fire distincte la identitatea complexă a națiunii. De la formidabila civilizație dacică ce a provocat puterea Romei, prin principatele medievale ce au păstrat cultura română în secole de dominație străină, până la luptele dramatice pentru independență și unitate ce au modelat România modernă.
              </p>

              <p class="text-gray-700">
                Povestea cuprinde atât triumf, cât și tragedie: strălucirea prelucrării metalelor dacice antice, realizările arhitecturale ale Daciei romane, rezistența eroică a voievozilor medievali împotriva expansiunii otomane, fermentul intelectual al Renașterii Naționale, expansiunea teritorială și pierderile ulterioare din era Războaielor Mondiale, deceniile opresive ale regimului comunist și, în final, renașterea democratică și integrarea europeană a perioadei post-1989.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Ancient Dacia Section -->
      <section id="ancient-dacia" class="py-5 bg-gray-50">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">Dacia Antică și Cucerirea Romană</h2>

          <div class="row g-4 mb-5">
            <div class="col-lg-6">
              <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Civilizația Dacică</h3>
              <div class="prose prose-lg">
                <p class="text-gray-700 mb-2">
                  <strong>Civilizația dacică</strong> a înflorit pe teritoriul României de astăzi, al Republicii Moldova și al unor părți din țările vecine, având rădăcini în <strong>triburile trace</strong> de origine indo-europeană care au migrat din Asia în jurul anului <strong>3000 î.Hr.</strong>
                  <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>. Până în <strong>2000 î.Hr.</strong>, un subgrup trac distinct, cunoscut grecilor sub numele de <strong>geți</strong> și romanilor sub numele de <strong>daci</strong>, se conturase.
                </p>

                <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200 mb-3">
                  <h4 class="fw-semibold text-gray-900 mb-2">Societatea și Cultura Dacică</h4>
                  <ul class="list-unstyled space-y-1 text-gray-700">
                    <li class="d-flex align-items-start">
                      <i class="fas fa-gem text-amber-600 mt-1 me-3"></i>
                      <span>Bogați în minerale și pricepuți în prelucrarea metalelor</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-ship text-amber-600 mt-1 me-3"></i>
                      <span>Angajați în comerț cu lumea greacă (ceramică, ulei de măsline, vin)</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-crown text-amber-600 mt-1 me-3"></i>
                      <span>Standard de viață ridicat comparativ cu vecinii</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-users text-amber-600 mt-1 me-3"></i>
                      <span>Clasa războinică cunoscută sub numele de <em>comati</em> (&#34;cei cu părul lung&#34;)</span>
                    </li>
                  </ul>
                </div>

                <p class="text-gray-700">
                  Istoricul grec <strong>Herodot</strong> i-a descris pe daci ca fiind &#34;cei mai drepți și mai curajoși dintre oameni&#34; datorită credinței lor în nemurirea sufletului și a neînfricării în fața morții <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>. Primul mare Imperiu Dacic a apărut sub <strong>Regele Burebista (70-44 î.Hr.)</strong>, al cărui teritoriu se întindea între râurile Dunăre, Tisa și Nistru.
                </p>
              </div>
            </div>

            <div class="col-lg-6">
              <img src="https://kimi-web-img.moonshot.cn/img/www.romanianfriend.com/49ca28063f61ec7d5a942982c8ca140fe180ef49.jpeg" alt="Ruinele cetății dacice de la Sarmizegetusa Regia" class="w-100 h-80 object-fit-cover rounded-lg shadow-lg mb-3" size="medium" aspect="wide" style="photo" query="Sarmizegetusa Regia ruins" referrerpolicy="no-referrer" data-modified="1" data-score="11599.00"/>

              <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200">
                <h4 class="fw-semibold text-gray-900 mb-3">Mari Regi Daci</h4>
                <div class="space-y-3">
                  <div class="border-start border-4 border-amber-600 ps-3">
                    <h5 class="fw-semibold text-gray-900">Burebista (70-44 î.Hr.)</h5>
                    <p class="fs-6 text-gray-600">A unit triburile dacice, a creat un imperiu puternic ce amenința Roma</p>
                  </div>
                  <div class="border-start border-4 border-amber-600 ps-3">
                    <h5 class="fw-semibold text-gray-900">Decebal (85-105 d.Hr.)</h5>
                    <p class="fs-6 text-gray-600">A reunit triburile dacice, a atins apogeul civilizației dacice</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Cucerirea Romană a Daciei</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
              <div class="row g-4">
                <div class="col-md-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Campaniile lui Traian</h4>
                  <div class="space-y-3">
                    <div class="d-flex align-items-center">
                      <div class="timeline-dot me-3"></div>
                      <div>
                        <div class="fw-medium text-gray-900">101-102 d.Hr.</div>
                        <div class="fs-6 text-gray-600">Prima campanie: Victoria de la Tapae</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="timeline-dot me-3"></div>
                      <div>
                        <div class="fw-medium text-gray-900">105-106 d.Hr.</div>
                        <div class="fs-6 text-gray-600">A doua campanie: Căderea Sarmizegetusei</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Moștenirea Romană</h4>
                  <ul class="list-unstyled space-y-1 text-gray-700">
                    <li class="d-flex align-items-start">
                      <i class="fas fa-pillar text-amber-600 mt-1 me-3"></i>
                      <span>Columna lui Traian ridicată pentru a celebra victoria</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-city text-amber-600 mt-1 me-3"></i>
                      <span>Noua capitală: Colonia Ulpia Traiana Augusta Dacica Sarmizegetusa</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-language text-amber-600 mt-1 me-3"></i>
                      <span>Adoptarea limbii latine de către populația daco-romană</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-cross text-amber-600 mt-1 me-3"></i>
                      <span>Creștinismul adoptat în secolul al IV-lea</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="pull-quote p-4 rounded-lg">
            <p class="fs-5 text-gray-800 mb-3">
              &#34;Cucerirea romană a Daciei în anul 106 d.Hr. a marcat un moment crucial în istoria europeană, creând o populație vorbitoare de latină care avea să păstreze tradițiile culturale și lingvistice romane mult timp după retragerea imperiului.&#34;
            </p>
            <cite class="fs-6 text-gray-600">— Analiză Istorică</cite>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Medieval Formation Section -->
      <section id="medieval-formation" class="py-5 bg-white">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">Formarea Poporului Român și Perioada Medievală</h2>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Origini și Etnogeneză</h3>

            <div class="prose prose-lg max-w-none mb-4">
              <p class="text-gray-700 mb-3">
                <strong>Originile și etnogeneza poporului român</strong> sunt subiecte de dezbatere istoriografică, cu un consens predominant conform căruia aceștia descind din <strong>populațiile vorbitoare de latină din bazinul Dunării de Jos</strong>, formate la nord de <strong>Linia Jireček</strong>
                <a href="https://ro.wikipedia.org/wiki/Istoria_rom%C3%A2nilor" class="citation" target="_blank">[11]</a>. Această linie delimita în mod tradițional sferele de influență lingvistică și culturală latină și greacă în Balcani.
              </p>

              <p class="text-gray-700 mb-3">
                Limba română a evoluat din latina vulgară vorbită în provinciile romane Dacia, Moesia și altele din regiune. A păstrat unele cuvinte dacice și a încorporat ulterior multe împrumuturi slave <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
              </p>
            </div>

            <div class="bg-gray-50 p-4 rounded-lg mb-4">
              <h4 class="fw-semibold text-gray-900 mb-3">Teorii ale Etnogenezei Românești</h4>
              <div class="row g-3">
                <div class="col-md-4">
                  <div class="bg-white p-3 rounded-lg shadow-sm">
                    <h5 class="fw-semibold text-gray-900 mb-2">Teoria Nord-Dunăreană</h5>
                    <p class="fs-6 text-gray-600">Origini din populația pe deplin romanizată a Daciei lui Traian, cu grupuri romanice sud-dunărene migrând din Dacia</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="bg-white p-3 rounded-lg shadow-sm">
                    <h5 class="fw-semibold text-gray-900 mb-2">Teoria Sud-Dunăreană</h5>
                    <p class="fs-6 text-gray-600">Origini din populația romanizată a Moesiei, cu grupuri migrând spre nord la începutul Evului Mediu</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="bg-white p-3 rounded-lg shadow-sm">
                    <h5 class="fw-semibold text-gray-900 mb-2">Teoria Originii Mixte</h5>
                    <p class="fs-6 text-gray-600">Din populațiile romanice de pe ambele părți ale Dunării, cu diferențe lingvistice explicate de influențe regionale</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Statele Medievale Românești</h3>

            <div class="row g-4">
              <div class="col-lg-4">
                <div class="bento-card">
                  <div class="p-3">
                    <div class="d-flex align-items-center mb-3">
                      <i class="fas fa-castle text-amber-600 fs-4 me-3"></i>
                      <h4 class="serif fs-5 fw-semibold text-gray-900">Țara Românească</h4>
                    </div>
                    <div class="space-y-2 fs-6 text-gray-700">
                      <p><strong>Fondată:</strong> ~1310 de Basarab I</p>
                      <p><strong>Domnitor Notabil:</strong> Vlad Țepeș (1448-1477)</p>
                      <p><strong>Realizare:</strong> A învins pe Regele Ungar Carol Robert în Bătălia de la Posada (1330)</p>
                      <p class="fs-7 text-gray-500">Cunoscută ca &#34;Țara Românească&#34;</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="bento-card">
                  <div class="p-3">
                    <div class="d-flex align-items-center mb-3">
                      <i class="fas fa-shield-alt text-amber-600 fs-4 me-3"></i>
                      <h4 class="serif fs-5 fw-semibold text-gray-900">Moldova</h4>
                    </div>
                    <div class="space-y-2 fs-6 text-gray-700">
                      <p><strong>Fondată:</strong> 1359 de Bogdan I</p>
                      <p><strong>Domnitor Notabil:</strong> <a href="lectie.php?test=istorie-stefan">Ștefan cel Mare (1454-1504)</a></p>
                      <p><strong>Realizare:</strong> A câștigat 34 din 36 de bătălii împotriva invadatorilor</p>
                      <p class="fs-7 text-gray-500">Inițial numită &#34;Țara Românească a Moldovei&#34;</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="bento-card">
                  <div class="p-3">
                    <div class="d-flex align-items-center mb-3">
                      <i class="fas fa-mountain text-amber-600 fs-4 me-3"></i>
                      <h4 class="serif fs-5 fw-semibold text-gray-900">Transilvania</h4>
                    </div>
                    <div class="space-y-2 fs-6 text-gray-700">
                      <p><strong>Cucerită:</strong> Secolele X-XII de către maghiari</p>
                      <p><strong>Statut:</strong> Principat autonom sub stăpânire maghiară</p>
                      <p><strong>Populație:</strong> Majoritate românească cu drepturi politice limitate</p>
                      <p class="fs-7 text-gray-500">Guvernată de voievozi numiți de regele maghiar</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
            <h4 class="serif fs-5 fw-semibold text-gray-900 mb-3">Prima Unire: Mihai Viteazul</h4>
            <div class="d-flex align-items-start">
              <div class="flex-grow-1">
                <p class="text-gray-700 mb-3">
                  O unire semnificativă, deși scurtă, a celor trei principate a avut loc sub <strong>Mihai Viteazul în 1600</strong>, un eveniment care, în ciuda duratei sale scurte, a devenit un simbol puternic al unității românești <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                  <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
                </p>
                <div class="bg-amber-50 p-2 rounded-lg">
                  <p class="fs-6 text-gray-700">
                    <i class="fas fa-quote-left text-amber-600 me-2"></i>
                    Deși a durat mai puțin de un an, unirea lui Mihai a demonstrat posibilitatea unității politice românești și a devenit un simbol durabil pentru generațiile viitoare de naționaliști.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Early Modern Period Section -->
      <section id="early-modern" class="py-5 bg-gray-50">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">Perioada Modernă Timpurie și Renașterea Națională</h2>

          <div class="row g-4 mb-5">
            <div class="col-lg-6">
              <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Influența Otomană și Habsburgică</h3>

              <div class="prose prose-lg">
                <p class="text-gray-700 mb-3">
                  De la sfârșitul Evului Mediu până în epoca modernă timpurie, principatele românești s-au aflat la răscrucea marilor puteri imperiale, în principal <strong>Imperiul Otoman</strong> și <strong>Monarhia Habsburgică</strong>. Până la sfârșitul secolului al XV-lea, Țara Românească și Moldova au intrat treptat sub <strong>suzeranitatea otomană</strong>, deși și-au păstrat un grad de autonomie internă în schimbul plății unui tribut <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                  <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
                </p>

                <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200 mb-3">
                  <h4 class="fw-semibold text-gray-900 mb-3">Dezvoltări Cheie</h4>
                  <div class="space-y-2">
                    <div class="d-flex align-items-start">
                      <div class="bg-amber-600 rounded-circle mt-2 me-3" style="width: 8px; height: 8px;"></div>
                      <div>
                        <div class="fw-medium text-gray-900">1526 - Bătălia de la Mohács</div>
                        <div class="fs-6 text-gray-600">Transilvania devine semi-autonomă sub autoritate otomană</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="bg-amber-600 rounded-circle mt-2 me-3" style="width: 8px; height: 8px;"></div>
                      <div>
                        <div class="fw-medium text-gray-900">1699 - Controlul Habsburgic</div>
                        <div class="fs-6 text-gray-600">Transilvania și Bucovina încorporate în Imperiul Habsburgic</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="bg-amber-600 rounded-circle mt-2 me-3" style="width: 8px; height: 8px;"></div>
                      <div>
                        <div class="fw-medium text-gray-900">1765 - Marele Principat</div>
                        <div class="fs-6 text-gray-600">Transilvania declarată Mare Principat în cadrul domeniului Habsburgic</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Era Fanariotă</h3>

              <img src="https://kimi-web-img.moonshot.cn/img/upload.wikimedia.org/b0e1a0c428c41607b1e616889f15108d53b1d448.jpg" alt="Ilustrație istorică reprezentând un nobil fanariot grec din epoca otomană" class="w-100 h-64 object-fit-cover rounded-lg shadow-lg mb-3" size="medium" aspect="wide" query="Phanariote Greek noble Ottoman period" referrerpolicy="no-referrer" data-modified="1" data-score="11596.00"/>

              <div class="prose prose-lg">
                <p class="text-gray-700 mb-2">
                  <strong>Era fanariotă</strong> reprezintă o perioadă semnificativă în istoria Țării Românești și a Moldovei, cuprinzând o mare parte a <strong>secolului al XVIII-lea</strong>. După Campania de pe Prut din 1711, Imperiul Otoman a impus un nou sistem de guvernare, numind <strong>nobili greci din districtul Fanar din Constantinopol</strong> ca domnitori <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
                </p>

                <div class="bg-danger-subtle border border-danger-subtle p-2 rounded-lg">
                  <h5 class="fw-semibold text-danger-emphasis mb-2">Caracteristicile Domniei Fanariote</h5>
                  <ul class="list-unstyled fs-6 text-danger-emphasis space-y-1">
                    <li>• Presiune fiscală crescută și corupție</li>
                    <li>• Obiectivul principal de a îmbogăți domnitorii și patronii lor</li>
                    <li>• Influență culturală greacă semnificativă în rândul elitei</li>
                    <li>• Nemulțumire larg răspândită în rândul populației românești</li>
                    <li>• Războaie frecvente purtate pe teritoriul românesc</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Renașterea Națională Românească</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
              <p class="text-gray-700 mb-3">
                <strong>Renașterea Națională Românească</strong>, cuprinzând sfârșitul secolului al XVIII-lea și secolul al XIX-lea, a fost caracterizată de o conștiință națională în creștere, o renaștere culturală și o luptă politică pentru drepturi și, în cele din urmă, independență.
              </p>

              <div class="row g-3 mb-3">
                <div class="col-md-4 text-center">
                  <div class="bg-amber-100 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 64px; height: 64px;">
                    <i class="fas fa-graduation-cap text-amber-600 fs-4"></i>
                  </div>
                  <h4 class="fw-semibold text-gray-900 mb-2">Școala Ardeleană</h4>
                  <p class="fs-6 text-gray-600">Intelectuali care reafirmă identitatea, limba și originile romane ale românilor</p>
                </div>

                <div class="col-md-4 text-center">
                  <div class="bg-amber-100 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 64px; height: 64px;">
                    <i class="fas fa-fist-raised text-amber-600 fs-4"></i>
                  </div>
                  <h4 class="fw-semibold text-gray-900 mb-2">Revoluția de la 1821</h4>
                  <p class="fs-6 text-gray-600">Răscoala lui Tudor Vladimirescu punând capăt abuzurilor fanariote</p>
                </div>

                <div class="col-md-4 text-center">
                  <div class="bg-amber-100 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 64px; height: 64px;">
                    <i class="fas fa-flag text-amber-600 fs-4"></i>
                  </div>
                  <h4 class="fw-semibold text-gray-900 mb-2">Revoluțiile de la 1848</h4>
                  <p class="fs-6 text-gray-600">Mișcări de independență națională și unificare în țările române</p>
                </div>
              </div>

              <div class="bg-amber-50 p-3 rounded-lg">
                <h5 class="fw-semibold text-gray-900 mb-2">Figuri și Evenimente Cheie</h5>
                <div class="row g-2 fs-6">
                  <div class="col-md-6">
                    <strong>Episcopul Ioan Inocențiu Micu Klein</strong> - A pledat pentru drepturile românilor în Imperiul Habsburgic
                  </div>
                  <div class="col-md-6">
                    <strong>Răscoala de la 1784</strong> - Răscoala lui Horea, Cloșca și Crișan evidențiind nemulțumirile țărănești
                  </div>
                  <div class="col-md-6">
                    <strong>Războiul Crimeei (1853-1856)</strong> - A adus &#34;Chestiunea Românească&#34; în diplomația europeană
                  </div>
                  <div class="col-md-6">
                    <strong>Tratatul de la Paris (1856)</strong> - Recunoaștere sporită a autonomiei principatelor
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Union and Independence Section -->
      <section id="union-independence" class="py-5 bg-white">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">Unirea, Independența și Regatul României</h2>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Unirea Moldovei și Țării Românești (1859)</h3>

            <div class="row g-4">
              <div class="col-lg-6">
                <div class="prose prose-lg">
                  <p class="text-gray-700 mb-3">
                    <strong>Unirea Moldovei și Țării Românești în 1859</strong>, adesea denumită <strong>&#34;Mica Unire&#34;</strong>, a marcat un moment crucial în crearea statului român modern. <strong>Convenția de la Paris din 1858</strong> a pus bazele, recunoscând autonomia Principatelor Unite <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>
                    <a href="https://centenarulromaniei.ro/scurta-istorie-a-romanilor-din-cele-mai-vechi-timpuri-pana-astazi/" class="citation" target="_blank">[24]</a>.
                  </p>

                  <div class="bg-primary-subtle border border-primary-subtle p-3 rounded-lg mb-3">
                    <h4 class="fw-semibold text-primary-emphasis mb-2">Dubla Alegere</h4>
                    <div class="space-y-1 fs-6 text-primary-emphasis">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span><strong>5 ianuarie 1859:</strong> Alexandru Ioan Cuza ales Domn al Moldovei</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span><strong>24 ianuarie 1859:</strong> Cuza ales Domn al Țării Românești</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-crown me-2"></i>
                        <span>A unit ambele principate sub o singură conducere</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <img src="https://kimi-web-img.moonshot.cn/img/www.romania-actualitati.ro/2df1e903e825d0efbc2e99bdb3a95eb0af42e033.php" alt="Portretul lui Alexandru Ioan Cuza" class="w-100 h-80 object-fit-cover rounded-lg shadow-lg mb-3" size="medium" aspect="wide" style="photo" query="Alexandru Ioan Cuza portrait" referrerpolicy="no-referrer" data-modified="1" data-score="11589.00"/>

                <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200">
                  <h4 class="fw-semibold text-gray-900 mb-3">Reformele lui Cuza (1859-1866)</h4>
                  <ul class="list-unstyled space-y-1 fs-6 text-gray-700">
                    <li class="d-flex align-items-start">
                      <i class="fas fa-church text-amber-600 mt-1 me-3"></i>
                      <span>Secularizarea averilor mănăstirești</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-gavel text-amber-600 mt-1 me-3"></i>
                      <span>Sistem administrativ și judiciar modern</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-book text-amber-600 mt-1 me-3"></i>
                      <span>Reformele educației</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-shield-alt text-amber-600 mt-1 me-3"></i>
                      <span>Modernizarea militară</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Războiul de Independență (1877-1878)</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-4">
              <div class="row g-4">
                <div class="col-md-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Drumul spre Independență</h4>
                  <p class="text-gray-700 mb-2">
                    <strong>Războiul de Independență al României</strong>, purtat alături de Rusia împotriva Imperiului Otoman, a fost un moment definitoriu în călătoria României către suveranitatea deplină. Pe <strong>9 mai 1877</strong>, parlamentul român a declarat independența față de Imperiul Otoman <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>.
                  </p>

                  <div class="space-y-2">
                    <div class="d-flex align-items-start">
                      <div class="timeline-dot me-3 mt-1"></div>
                      <div>
                        <div class="fw-medium text-gray-900">Bătălii Cheie</div>
                        <div class="fs-6 text-gray-600">Grivița, Plevna, Rahova, Vidin, Smârdan</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="timeline-dot me-3 mt-1"></div>
                      <div>
                        <div class="fw-medium text-gray-900">Punct de Cotitură</div>
                        <div class="fs-6 text-gray-600">Asediul Plevnei - victorie crucială româno-rusă</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Tratatul de la Berlin (iulie 1878)</h4>
                  <div class="bg-gray-50 p-2 rounded-lg">
                    <p class="fs-6 text-gray-700 mb-2">
                      Independența României a fost recunoscută oficial de Marile Puteri, dar cu ajustări teritoriale:
                    </p>
                    <div class="space-y-1 fs-6">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-minus-circle text-danger me-2"></i>
                        <span>Cedarea Basarabiei de Sud către Rusia</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-plus-circle text-success me-2"></i>
                        <span>Obținerea Dobrogei de Nord (inclusiv Delta Dunării și Constanța)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Regatul României</h3>

            <div class="row g-4">
              <div class="col-lg-8">
                <div class="prose prose-lg">
                  <p class="text-gray-700 mb-3">
                    După recunoașterea independenței, România a proclamat <strong>Regatul României pe 26 martie 1881</strong>. Prințul <strong>Carol I</strong> din Casa de Hohenzollern-Sigmaringen a fost încoronat ca <strong>primul Rege al României</strong>
                    <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                    <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
                  </p>

                  <div class="bg-amber-50 border border-amber-200 p-3 rounded-lg mb-3">
                    <h4 class="fw-semibold text-amber-900 mb-2">Domnia lui Carol I (1881-1914)</h4>
                    <ul class="list-unstyled space-y-1 fs-6 text-amber-800">
                      <li>• Stabilitate politică relativă și dezvoltare economică</li>
                      <li>• Modernizarea infrastructurii, industriei și armatei</li>
                      <li>• 1883: A aderat în secret la Tripla Alianță cu Germania, Austro-Ungaria, Italia</li>
                      <li>• Problema Transilvaniei a rămas o preocupare centrală pentru naționaliști</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200">
                  <h4 class="fw-semibold text-gray-900 mb-3">Cronologia Monarhiei Românești</h4>
                  <div class="space-y-3">
                    <div class="border-start border-4 border-amber-600 ps-3">
                      <div class="fw-medium text-gray-900">Carol I</div>
                      <div class="fs-6 text-gray-600">1881-1914</div>
                      <div class="fs-7 text-gray-500">Primul Rege, consolidarea statului</div>
                    </div>
                    <div class="border-start border-4 border-amber-600 ps-3">
                      <div class="fw-medium text-gray-900">Ferdinand I</div>
                      <div class="fs-6 text-gray-600">1914-1927</div>
                      <div class="fs-7 text-gray-500">Primul Război Mondial, &#34;România Mare&#34;</div>
                    </div>
                    <div class="border-start border-4 border-amber-600 ps-3">
                      <div class="fw-medium text-gray-900">Mihai I</div>
                      <div class="fs-6 text-gray-600">1927-1930, 1940-1947</div>
                      <div class="fs-7 text-gray-500">Al Doilea Război Mondial, preluarea comunistă</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- World Wars Section -->
      <section id="world-wars" class="py-5 bg-gray-50">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">Războaiele Mondiale și Perioada Interbelică</h2>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">România în Primul Război Mondial</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-4">
              <div class="row g-4">
                <div class="col-lg-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Marea Decizie</h4>
                  <p class="text-gray-700 mb-2">
                    La izbucnirea <strong>Primului Război Mondial în 1914</strong>, România era legată printr-un tratat secret de <strong>Tripla Alianță</strong>, dar sentimentul public era în mare parte pro-Antantă, motivat de dorința de a elibera Transilvania <a href="https://ro.wikipedia.org/wiki/Istoria_rom%C3%A2nilor" class="citation" target="_blank">[22]</a>.
                  </p>

                  <div class="space-y-3">
                    <div class="d-flex align-items-start">
                      <div class="timeline-dot me-3 mt-1"></div>
                      <div>
                        <div class="fw-medium text-gray-900">27 august 1916</div>
                        <div class="fs-6 text-gray-600">România a declarat război Austro-Ungariei după ce a obținut promisiuni din partea Antantei</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="timeline-dot me-3 mt-1"></div>
                      <div>
                        <div class="fw-medium text-gray-900">1916-1917</div>
                        <div class="fs-6 text-gray-600">Ofensivă inițială în Transilvania, apoi ocuparea a două treimi din țară</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="timeline-dot me-3 mt-1"></div>
                      <div>
                        <div class="fw-medium text-gray-900">1917</div>
                        <div class="fs-6 text-gray-600">Victorii defensive la Mărăști, Mărășești și Oituz</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Punctul de Cotitură</h4>
                  <p class="text-gray-700 mb-2">
                    În ciuda eșecurilor inițiale, decizia strategică a României de a reintra în război a poziționat-o în cele din urmă ca învingătoare în reglementările postbelice.
                  </p>

                  <div class="bg-danger-subtle border border-danger-subtle p-2 rounded-lg mb-2">
                    <h5 class="fw-semibold text-danger-emphasis mb-2">Provocări</h5>
                    <ul class="list-unstyled fs-6 text-danger-emphasis space-y-1">
                      <li>• Mai 1918: Tratatul punitiv de la București cu Puterile Centrale</li>
                      <li>• Revoluția Bolșevică a izolat România</li>
                      <li>• Regele Ferdinand a refuzat să ratifice tratatul</li>
                    </ul>
                  </div>

                  <div class="bg-success-subtle border border-success-subtle p-2 rounded-lg">
                    <h5 class="fw-semibold text-success-emphasis mb-2">Succesul Final</h5>
                    <ul class="list-unstyled fs-6 text-success-emphasis space-y-1">
                      <li>• 10 noiembrie 1918: A reintrat în război cu o zi înainte de Armistițiu</li>
                      <li>• A participat la conferințele de pace ca învingătoare</li>
                      <li>• Obiectivele de unificare națională la îndemână</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">România Mare (Perioada Interbelică)</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-4">
              <div class="text-center mb-4">
                <h4 class="serif fs-4 fw-semibold text-gray-900 mb-2">Unificarea Națională (1918)</h4>
                <p class="text-gray-700 mb-3">
                  Urmările Primului Război Mondial au adus împlinirea idealului național românesc de lungă durată: unificarea tuturor teritoriilor cu populație majoritar românească în <strong>&#34;România Mare&#34;</strong>.
                </p>
              </div>

              <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                  <div class="text-center p-2 bg-primary-subtle rounded-lg">
                    <h5 class="fw-semibold text-primary-emphasis mb-2">Basarabia</h5>
                    <div class="fs-6 text-primary-emphasis">
                      <div class="fw-medium">27 martie/9 aprilie 1918</div>
                      <div>Sfatul Țării a declarat unirea cu România</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="text-center p-2 bg-purple-subtle rounded-lg">
                    <h5 class="fw-semibold text-purple-emphasis mb-2">Bucovina</h5>
                    <div class="fs-6 text-purple-emphasis">
                      <div class="fw-medium">28 noiembrie 1918</div>
                      <div>Congresul General a votat pentru unirea necondiționată</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="text-center p-2 bg-success-subtle rounded-lg">
                    <h5 class="fw-semibold text-success-emphasis mb-2">Transilvania</h5>
                    <div class="fs-6 text-success-emphasis">
                      <div class="fw-medium">1 decembrie 1918</div>
                      <div>Marea Adunare Națională de la Alba Iulia</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="text-center p-2 bg-amber-subtle rounded-lg">
                    <h5 class="fw-semibold text-amber-emphasis mb-2">Banat, Crișana, Maramureș</h5>
                    <div class="fs-6 text-amber-emphasis">
                      <div class="fw-medium">1 decembrie 1918</div>
                      <div>Incluse în declarația de la Alba Iulia</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                <h5 class="fw-semibold text-gray-900 mb-2">Recunoaștere Internațională</h5>
                <p class="fs-6 text-gray-700">
                  <strong>Tratatele de la Saint-Germain-en-Laye (1919, cu Austria) și Trianon (1920, cu Ungaria)</strong> au recunoscut oficial aceste uniri, extinzând semnificativ teritoriul și populația României. <strong>Regele Ferdinand I</strong> a fost încoronat Rege al &#34;României Mari&#34; la Alba Iulia în 1922 <a href="https://ro.wikipedia.org/wiki/Istoria_rom%C3%A2nilor" class="citation" target="_blank">[22]</a>
                  <a href="https://centenarulromaniei.ro/scurta-istorie-a-romanilor-din-cele-mai-vechi-timpuri-pana-astazi/" class="citation" target="_blank">[24]</a>.
                </p>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">România în Al Doilea Război Mondial</h3>

            <div class="row g-4">
              <div class="col-lg-6">
                <h4 class="fw-semibold text-gray-900 mb-3">Pierderi Teritoriale și Alianțe Schimbătoare</h4>
                <p class="text-gray-700 mb-2">
                  Implicarea României în <strong>Al Doilea Război Mondial</strong> a fost complexă și marcată de schimbări teritoriale dramatice și o schimbare finală de tabere.
                </p>

                <div class="space-y-3">
                  <div class="bg-danger-subtle border-start border-4 border-danger-subtle p-2">
                    <h5 class="fw-semibold text-danger-emphasis mb-2">1940: Anul Dezmembrării</h5>
                    <div class="space-y-1 fs-6 text-danger-emphasis">
                      <div>• <strong>Iunie:</strong> Ultimatum sovietic - cedarea Basarabiei, Bucovinei de Nord, Ținutului Herța</div>
                      <div>• <strong>August:</strong> Al Doilea Arbitraj de la Viena - cedarea Transilvaniei de Nord Ungariei</div>
                      <div>• <strong>Septembrie:</strong> Tratatul de la Craiova - cedarea Cadrilaterului Bulgariei</div>
                    </div>
                  </div>

                  <div class="bg-warning-subtle border-start border-4 border-warning-subtle p-2">
                    <h5 class="fw-semibold text-warning-emphasis mb-2">Alianța cu Axa</h5>
                    <div class="fs-6 text-warning-emphasis">
                      <div>• <strong>Septembrie 1940:</strong> Regele Carol al II-lea a abdicat în favoarea lui Mihai I</div>
                      <div>• <strong>23 noiembrie 1940:</strong> A aderat oficial la Puterile Axei</div>
                      <div>• <strong>Iunie 1941:</strong> A invadat Uniunea Sovietică pentru a recuceri teritoriile pierdute</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <h4 class="fw-semibold text-gray-900 mb-3">Lovitura de Stat de la 23 August și Trecerea de partea Aliaților</h4>
                <p class="text-gray-700 mb-2">
                  Pe măsură ce forțele sovietice avansau în 1944, o serie dramatică de evenimente a schimbat soarta României în război.
                </p>

                <div class="bg-success-subtle border-start border-4 border-success-subtle p-2 mb-2">
                  <h5 class="fw-semibold text-success-emphasis mb-2">Punctul de Cotitură</h5>
                  <div class="fs-6 text-success-emphasis space-y-1">
                    <div>• <strong>23 august 1944:</strong> Lovitură de stat condusă de Regele Mihai I l-a răsturnat pe Antonescu</div>
                    <div>• România a schimbat taberele, declarând război Germaniei și Ungariei</div>
                    <div>• Trupele române au luptat alături de sovietici în Transilvania, Ungaria, Austria, Cehoslovacia</div>
                  </div>
                </div>

                <div class="bg-primary-subtle border border-primary-subtle p-2 rounded-lg">
                  <h5 class="fw-semibold text-primary-emphasis mb-2">Rezultatul Postbelic</h5>
                  <div class="fs-6 text-primary-emphasis space-y-1">
                    <div>• Anexarea sovietică a Basarabiei, Bucovinei de Nord, Herței confirmată</div>
                    <div>• Transilvania de Nord returnată României</div>
                    <div>• Reparații de război substanțiale către Uniunea Sovietică</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Communist Era Section -->
      <section id="communist-era" class="py-5 bg-white">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">Era Comunistă</h2>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Influența Sovietică și Republica Populară Română</h3>

            <div class="row g-4">
              <div class="col-lg-6">
                <div class="prose prose-lg">
                  <p class="text-gray-700 mb-3">
                    După <strong>Al Doilea Război Mondial</strong>, România a căzut sub influența crescândă a <strong>Uniunii Sovietice</strong>. Trupele sovietice au ocupat țara, iar un guvern dominat de comuniști a fost instalat. <strong>Acordul de la Yalta</strong> a plasat efectiv România în sfera de influență sovietică <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                    <a href="https://ro.wikipedia.org/wiki/Istoria_rom%C3%A2nilor" class="citation" target="_blank">[22]</a>.
                  </p>

                  <div class="bg-danger-subtle border border-danger-subtle p-3 rounded-lg mb-3">
                    <h4 class="fw-semibold text-danger-emphasis mb-2">Sfârșitul Monarhiei</h4>
                    <div class="space-y-1 fs-6 text-danger-emphasis">
                      <div class="d-flex align-items-center">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span><strong>30 decembrie 1947:</strong> Regele Mihai I forțat să abdice</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-flag me-2"></i>
                        <span>Proclamarea Republicii Populare Române</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-plane me-2"></i>
                        <span>Regele Mihai a părăsit țara în exil</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <img src="https://kimi-web-img.moonshot.cn/img/upload.wikimedia.org/0cfdb1d2c86010074c0479215b7039d64ec891aa.jpg" alt="Fabrică industrială din era comunistă românească" class="w-100 h-64 object-fit-cover rounded-lg shadow-lg mb-3" size="medium" aspect="wide" style="photo" query="romanian communist industrial factory" referrerpolicy="no-referrer" data-modified="1" data-score="11598.00"/>

                <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200">
                  <h4 class="fw-semibold text-gray-900 mb-3">Politici Comuniste Timpurii</h4>
                  <ul class="list-unstyled space-y-1 fs-6 text-gray-700">
                    <li class="d-flex align-items-start">
                      <i class="fas fa-industry text-amber-600 mt-1 me-3"></i>
                      <span>Naționalizarea industriei și agriculturii</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-tractor text-amber-600 mt-1 me-3"></i>
                      <span>Colectivizarea terenurilor agricole</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-handcuffs text-amber-600 mt-1 me-3"></i>
                      <span>Represiune politică și procese-spectacol</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-chart-line text-amber-600 mt-1 me-3"></i>
                      <span>Stabilirea economiei de comandă</span>
                    </li>
                    <li class="d-flex align-items-start">
                      <i class="fas fa-eye text-amber-600 mt-1 me-3"></i>
                      <span>Crearea Securității (poliția secretă)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Regimul lui Nicolae Ceaușescu</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-4">
              <div class="row g-4">
                <div class="col-lg-8">
                  <h4 class="fw-semibold text-gray-900 mb-3">Ascensiunea la Putere și Primii Ani</h4>
                  <p class="text-gray-700 mb-2">
                    <strong>Nicolae Ceaușescu</strong> a ajuns la putere după moartea lui Gheorghe Gheorghiu-Dej în 1965, devenind Secretar General al Partidului Comunist Român. A consolidat puterea devenind Președinte al Consiliului de Stat în 1967 și apoi Președinte al Republicii Socialiste România în 1974 <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                    <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
                  </p>

                  <div class="bg-success-subtle border border-success-subtle p-2 rounded-lg mb-2">
                    <h5 class="fw-semibold text-success-emphasis mb-2">Popularitate Inițială</h5>
                    <div class="fs-6 text-success-emphasis space-y-1">
                      <div>• <strong>1968:</strong> A condamnat invazia Cehoslovaciei de către Pactul de la Varșovia</div>
                      <div>• A câștigat laude și ajutor economic din partea Occidentului</div>
                      <div>• 1974: Prima țară din blocul sovietic cu acord comercial cu CEE</div>
                      <div>• O anumită creștere economică în anii 1960-începutul anilor 1970</div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4">
                  <h4 class="fw-semibold text-gray-900 mb-3">Statutul Internațional</h4>
                  <div class="space-y-3">
                    <div class="text-center p-2 bg-primary-subtle rounded-lg">
                      <div class="fs-4 fw-bold text-primary-emphasis">1968</div>
                      <div class="fs-6 text-primary-emphasis">A condamnat invazia sovietică a Cehoslovaciei</div>
                    </div>
                    <div class="text-center p-2 bg-success-subtle rounded-lg">
                      <div class="fs-4 fw-bold text-success-emphasis">1974</div>
                      <div class="fs-6 text-success-emphasis">Primul acord comercial cu CEE în Blocul Estic</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-danger-subtle border border-danger-subtle p-4 rounded-lg mb-4">
              <h4 class="fw-semibold text-danger-emphasis mb-3">Regimul Autoritar și Dezastrul Economic (anii 1980)</h4>
              <p class="text-danger-emphasis mb-3">
                Domnia lui Ceaușescu a devenit treptat din ce în ce mai autoritară, personalizată și megalomanică. Anii 1980 au fost martorii unei represiuni severe, ai unui cult al personalității omniprezent și ai unor politici economice dezastruoase.
              </p>

              <div class="row g-3">
                <div class="col-md-6">
                  <h5 class="fw-semibold text-danger-emphasis mb-2">Austeritate Economică</h5>
                  <ul class="list-unstyled fs-6 text-danger-emphasis space-y-1">
                    <li>• Măsuri dure de austeritate pentru a rambursa datoria externă</li>
                    <li>• Penurii severe de alimente, combustibil, bunuri de consum de bază</li>
                    <li>• Exportul majorității producției țării</li>
                    <li>• Sărăcie și privațiuni pe scară largă</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h5 class="fw-semibold text-danger-emphasis mb-2">Proiecte Megalomanice</h5>
                  <ul class="list-unstyled fs-6 text-danger-emphasis space-y-1">
                    <li>• &#34;Casa Poporului&#34; (Palatul Parlamentului)</li>
                    <li>• Programul de &#34;sistematizare&#34; (demolări de sate)</li>
                    <li>• Proiecte grandioase de construcții în timp ce populația suferea</li>
                    <li>• Control strict al Securității asupra societății</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Revoluția Română (1989)</h3>

            <div class="row g-4">
              <div class="col-lg-6">
                <h4 class="fw-semibold text-gray-900 mb-3">Scânteia și Răspândirea</h4>
                <p class="text-gray-700 mb-2">
                  <strong>Revoluția Română din 1989</strong> a fost o serie de evenimente violente și revolte populare care au dus la răsturnarea regimului comunist al lui Ceaușescu. A început cu proteste la <strong>Timișoara la mijlocul lunii decembrie 1989</strong>, declanșate de încercarea guvernului de a-l evacua pe László Tőkés, un pastor reformat maghiar disident <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                  <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19]</a>.
                </p>

                <div class="space-y-3">
                  <div class="d-flex align-items-start">
                    <div class="timeline-dot me-3 mt-1"></div>
                    <div>
                      <div class="fw-medium text-gray-900">Mijlocul lunii decembrie 1989</div>
                      <div class="fs-6 text-gray-600">Protestele de la Timișoara s-au răspândit în toată țara</div>
                    </div>
                  </div>
                  <div class="d-flex align-items-start">
                    <div class="timeline-dot me-3 mt-1"></div>
                    <div>
                      <div class="fw-medium text-gray-900">21 decembrie</div>
                      <div class="fs-6 text-gray-600">Mitingul de la București a devenit ostil, mulțimea l-a huiduit pe Ceaușescu</div>
                    </div>
                  </div>
                  <div class="d-flex align-items-start">
                    <div class="timeline-dot me-3 mt-1"></div>
                    <div>
                      <div class="fw-medium text-gray-900">22 decembrie</div>
                      <div class="fs-6 text-gray-600">Lupte de stradă intense, Ceaușescu și soția au fugit din București</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <h4 class="fw-semibold text-gray-900 mb-3">Sfârșitul unei Ere</h4>
                <div class="bg-dark text-white p-3 rounded-lg mb-2">
                  <h5 class="fw-semibold mb-2">25 decembrie 1989</h5>
                  <p class="fs-6 mb-2">
                    Ceaușescu și soția sa Elena au fost capturați, supuși unui proces aranjat în grabă de un tribunal militar și <strong>executați prin împușcare</strong>.
                  </p>
                  <div class="fs-7 text-gray-300">
                    Peste 1.000 de oameni au fost uciși în luptele din timpul revoluției
                  </div>
                </div>

                <div class="bg-primary-subtle border border-primary-subtle p-2 rounded-lg">
                  <h5 class="fw-semibold text-primary-emphasis mb-2">Urmări</h5>
                  <div class="fs-6 text-primary-emphasis space-y-1">
                    <div>• Puterea a fost preluată de Frontul Salvării Naționale (FSN)</div>
                    <div>• Ion Iliescu a devenit președinte provizoriu</div>
                    <div>• Sfârșitul a 42 de ani de regim comunist</div>
                    <div>• Începutul tranziției către democrație</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <!-- Modern Romania Section -->
      <section id="modern-romania" class="py-5 bg-gray-50">
        <div class="container mx-auto px-4 px-md-8">
          <h2 class="serif fs-2 fw-bold text-gray-900 mb-5">România Modernă</h2>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">Tranziția Post-Comunistă</h3>

            <div class="row g-4">
              <div class="col-lg-6">
                <div class="prose prose-lg">
                  <p class="text-gray-700 mb-3">
                    Perioada de după <strong>revoluția din 1989</strong> a fost o perioadă de tranziție dificilă pentru România, marcată de instabilitate politică, dificultăți economice și schimbări sociale, pe măsură ce țara a trecut de la o dictatură comunistă la un sistem democratic și o economie de piață.
                  </p>

                  <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200 mb-3">
                    <h4 class="fw-semibold text-gray-900 mb-3">Provocări Timpurii ale Tranziției</h4>
                    <div class="space-y-2">
                      <div class="d-flex align-items-start">
                        <i class="fas fa-vote-yea text-amber-600 mt-1 me-3"></i>
                        <div>
                          <div class="fw-medium text-gray-900">Mai 1990</div>
                          <div class="fs-6 text-gray-600">Primele alegeri libere câștigate de Frontul Salvării Naționale (FSN)</div>
                        </div>
                      </div>
                      <div class="d-flex align-items-start">
                        <i class="fas fa-hammer text-amber-600 mt-1 me-3"></i>
                        <div>
                          <div class="fw-medium text-gray-900">Iunie 1990</div>
                          <div class="fs-6 text-gray-600">Intervenția minerilor în București a suprimat protestele</div>
                        </div>
                      </div>
                      <div class="d-flex align-items-start">
                        <i class="fas fa-scroll text-amber-600 mt-1 me-3"></i>
                        <div>
                          <div class="fw-medium text-gray-900">1991</div>
                          <div class="fs-6 text-gray-600">Adoptarea noii constituții democratice</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <img src="https://kimi-web-img.moonshot.cn/img/cdn-imgix.headout.com/aafb96392aa4d65d322b15a0c411aff37debd69f.jpg" alt="Clădirea Parlamentului României" class="w-100 h-64 object-fit-cover rounded-lg shadow-lg mb-3" size="medium" aspect="wide" style="photo" query="Romanian Parliament building" referrerpolicy="no-referrer" data-modified="1" data-score="11598.00"/>

                <div class="bg-white p-3 rounded-lg shadow-sm border border-gray-200">
                  <h4 class="fw-semibold text-gray-900 mb-3">Evoluția Politică</h4>
                  <div class="space-y-2 fs-6 text-gray-700">
                    <div class="d-flex align-items-center">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span>1992-1996: Ion Iliescu re-ales, sprijin naționalist</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span>1996: Emil Constantinescu (CDR) l-a învins pe Iliescu</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span>Restructurare economică dureroasă și privatizare</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bg-amber-600 rounded-circle me-3" style="width: 12px; height: 12px;"></div>
                      <span>Stabilirea treptată a instituțiilor democratice</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-5">
            <h3 class="serif fs-4 fw-semibold text-gray-900 mb-3">România în Secolul XXI</h3>

            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 mb-4">
              <div class="row g-4">
                <div class="col-lg-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Integrarea Euro-Atlantică</h4>
                  <p class="text-gray-700 mb-3">
                    <strong>Secolul XXI</strong> a văzut România continuându-și integrarea în structurile euro-atlantice, atingând două borne majore care i-au transformat poziția internațională.
                  </p>

                  <div class="space-y-3">
                    <div class="bg-primary-subtle border-start border-4 border-primary-subtle p-2">
                      <h5 class="fw-semibold text-primary-emphasis mb-2">2004: Aderarea la NATO</h5>
                      <p class="fs-6 text-primary-emphasis">
                        România a aderat la NATO, un pas semnificativ în alinierea politicii sale externe post-comuniste și în obținerea garanțiilor de securitate <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                        <a href="https://casadecomert.com/index.php/despre-romania/istoria-romaniei-pe-scurt" class="citation" target="_blank">[21]</a>.
                      </p>
                    </div>

                    <div class="bg-warning-subtle border-start border-4 border-warning-subtle p-2">
                      <h5 class="fw-semibold text-warning-emphasis mb-2">2007: Aderarea la Uniunea Europeană</h5>
                      <p class="fs-6 text-warning-emphasis">
                        România a aderat la Uniunea Europeană la 1 ianuarie 2007, aducând atât oportunități, cât și obligații pentru reforme ulterioare <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18]</a>
                        <a href="https://casadecomert.com/index.php/despre-romania/istoria-romaniei-pe-scurt" class="citation" target="_blank">[21]</a>.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <h4 class="fw-semibold text-gray-900 mb-3">Politica Internă și Provocări</h4>
                  <p class="text-gray-700 mb-2">
                    Politica românească a rămas dinamică, cu alternarea puterii între diverse coaliții politice și provocări continue legate de guvernare și dezvoltare.
                  </p>

                  <div class="space-y-2">
                    <div class="d-flex align-items-start">
                      <div class="bg-amber-600 rounded-circle mt-2 me-3" style="width: 8px; height: 8px;"></div>
                      <div>
                        <div class="fw-medium text-gray-900">2004-2014</div>
                        <div class="fs-6 text-gray-600">Președinția lui Traian Băsescu, marcată de conflicte cu parlamentul</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="bg-amber-600 rounded-circle mt-2 me-3" style="width: 8px; height: 8px;"></div>
                      <div>
                        <div class="fw-medium text-gray-900">2008-2012</div>
                        <div class="fs-6 text-gray-600">Emil Boc (PD-L) a servit ca prim-ministru</div>
                      </div>
                    </div>
                    <div class="d-flex align-items-start">
                      <div class="bg-amber-600 rounded-circle mt-2 me-3" style="width: 8px; height: 8px;"></div>
                      <div>
                        <div class="fw-medium text-gray-900">În curs</div>
                        <div class="fs-6 text-gray-600">Partidul Social Democrat (PSD) rămâne forța dominantă</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-3">
              <div class="col-md-4">
                <div class="bento-card">
                  <div class="p-3">
                    <div class="d-flex align-items-center mb-3">
                      <i class="fas fa-balance-scale text-amber-600 fs-4 me-3"></i>
                      <h4 class="serif fs-5 fw-semibold text-gray-900">Provocări de Guvernare</h4>
                    </div>
                    <ul class="list-unstyled space-y-1 fs-6 text-gray-700">
                      <li>• Corupția și reforma judiciară</li>
                      <li>• Aplicarea statului de drept</li>
                      <li>• Practici de bună guvernare</li>
                      <li>• Responsabilitate politică</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="bento-card">
                  <div class="p-3">
                    <div class="d-flex align-items-center mb-3">
                      <i class="fas fa-chart-line text-amber-600 fs-4 me-3"></i>
                      <h4 class="serif fs-5 fw-semibold text-gray-900">Dezvoltare Economică</h4>
                    </div>
                    <ul class="list-unstyled space-y-1 fs-6 text-gray-700">
                      <li>• Utilizarea fondurilor structurale UE</li>
                      <li>• Dezvoltarea infrastructurii</li>
                      <li>• Reducerea disparităților regionale</li>
                      <li>• Strategii de creștere durabilă</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="bento-card">
                  <div class="p-3">
                    <div class="d-flex align-items-center mb-3">
                      <i class="fas fa-globe text-amber-600 fs-4 me-3"></i>
                      <h4 class="serif fs-5 fw-semibold text-gray-900">Rolul Internațional</h4>
                    </div>
                    <ul class="list-unstyled space-y-1 fs-6 text-gray-700">
                      <li>• Contribuții la menținerea păcii</li>
                      <li>• Eforturi pentru stabilitatea regională</li>
                      <li>• Dezvoltarea unei diaspore semnificative</li>
                      <li>• Beneficiile și provocările integrării UE</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="pull-quote p-4 rounded-lg">
            <p class="fs-5 text-gray-800 mb-3 fst-italic">
              &#34;Călătoria României de la Dacia antică la democrația europeană modernă reprezintă una dintre cele mai remarcabile transformări din istorie—o dovadă a rezilienței unui popor care și-a păstrat identitatea latină prin milenii de provocări, apărând ca o punte între Est și Vest în Europa contemporană.&#34;
            </p>
            <cite class="fs-6 text-gray-600">— Perspectivă Istorică</cite>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="bg-dark text-white py-4">
        <div class="container mx-auto px-4">
          <div class="row g-4">
            <div class="col-md-4">
              <h4 class="serif fs-5 fw-semibold mb-3">Surse &amp; Referințe</h4>
              <div class="space-y-1 fs-6 text-gray-300">
                <div>
                  <a href="https://www.romaniatourism.com/history.html" class="citation" target="_blank">[18] Romania Tourism - Istorie</a>
                </div>
                <div>
                  <a href="https://romaniaxtravel.com/home-new/short-history-of-romania/" class="citation" target="_blank">[19] Romania Travel - Scurtă Istorie</a>
                </div>
                <div>
                  <a href="https://ro.wikipedia.org/wiki/Istoria_rom%C3%A2nilor" class="citation" target="_blank">[22] Wikipedia - Istoria Românilor</a>
                </div>
                <div>
                  <a href="https://centenarulromaniei.ro/scurta-istorie-a-romanilor-din-cele-mai-vechi-timpuri-pana-astazi/" class="citation" target="_blank">[24] Centenarul României - Scurtă Istorie</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <h4 class="serif fs-5 fw-semibold mb-3">Perioade Istorice Cheie</h4>
              <div class="space-y-1 fs-6 text-gray-300">
                <div>• Dacia Antică (3000 î.Hr. - 106 d.Hr.)</div>
                <div>• Dacia Romană (106-275 d.Hr.)</div>
                <div>• Principate Medievale (sec. X-XIX)</div>
                <div>• România Modernă (1859-Prezent)</div>
              </div>
            </div>

            <div class="col-md-4">
              <h4 class="serif fs-5 fw-semibold mb-3">Despre Această Prezentare</h4>
              <p class="fs-6 text-gray-300 mb-2">
                Această prezentare istorică cuprinzătoare urmărește călătoria extraordinară a României prin șapte epoci majore, de la rădăcinile dacice antice la integrarea europeană modernă.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Table of Contents active link tracking
        const tocLinks = document.querySelectorAll('.toc-link');
        const sections = document.querySelectorAll('section[id]');
        
        function updateActiveLink() {
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                if (window.pageYOffset >= sectionTop - 100) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSection}`) {
                    link.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveLink);
        updateActiveLink();
        
        // Smooth scrolling for TOC links
        tocLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    const offsetTop = targetSection.offsetTop - 20;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add scroll-based animations (remains the same as it's pure JS/CSS)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.bento-card, .pull-quote').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
  


  <?php include("bacnavigator-footer.php");
?>