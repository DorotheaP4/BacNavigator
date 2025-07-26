<?php
include("bacnavigator-header2.php");
?>
        <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .formula-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            margin: 1rem 0;
            font-family: 'Courier New', monospace;
        }
        .concept-highlight {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            display: inline-block;
            margin: 0.25rem;
            font-weight: 500;
        }
        .chapter-header {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 2rem;
            border-radius: 12px;
            margin: 2rem 0;
        }
        .link-button {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin: 0.25rem;
            transition: transform 0.2s;
        }
        .link-button:hover {
            transform: translateY(-2px);
            text-decoration: none;
            color: white;
        }
        .toc-item {
            padding: 0.5rem 1rem;
            border-left: 4px solid #4facfe;
            margin: 0.5rem 0;
            background: #f8fafc;
            border-radius: 0 6px 6px 0;
        }
    </style>

    <div class="container mx-auto px-4 py-8">
        <!-- Programa Oficială -->
        <section class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-scroll text-blue-600 mr-2"></i>
                Programa Oficială
            </h2>
            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                <p class="text-gray-700 mb-2">
                    <strong>Temei legal:</strong> Ordinul Ministrului Educației nr. 4800/2010
                </p>
                <p class="text-gray-700 mb-2">
                    <strong>Proba:</strong> E.d) - disciplină opțională
                </p>
                <p class="text-gray-700">
                    <strong>Focus:</strong> Evaluarea comportamentului rațional al agenților economici în economia de piață
                </p>
            </div>
        </section>

        <!-- Cuprins -->
        <section class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-list text-green-600 mr-2"></i>
                Cuprins
            </h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="toc-item">
                    <h3 class="font-semibold text-blue-600">Capitol 1: Consumatorul</h3>
                    <ul class="text-sm text-gray-600 mt-2">
                        <li>• Nevoi și resurse</li>
                        <li>• Comportamentul consumatorului</li>
                        <li>• Cererea și elasticitatea</li>
                    </ul>
                </div>
                <div class="toc-item">
                    <h3 class="font-semibold text-blue-600">Capitol 2: Producătorul</h3>
                    <ul class="text-sm text-gray-600 mt-2">
                        <li>• Proprietatea și libera inițiativă</li>
                        <li>• Factorii de producție</li>
                        <li>• Costuri, profit, eficiență</li>
                    </ul>
                </div>
                <div class="toc-item">
                    <h3 class="font-semibold text-blue-600">Capitol 3: Piața</h3>
                    <ul class="text-sm text-gray-600 mt-2">
                        <li>• Relația cerere-ofertă-preț</li>
                        <li>• Mecanismul concurențial</li>
                        <li>• Forme ale pieței</li>
                    </ul>
                </div>
                <div class="toc-item">
                    <h3 class="font-semibold text-blue-600">Resurse Suplimentare</h3>
                    <ul class="text-sm text-gray-600 mt-2">
                        <li>• Platforme online</li>
                        <li>• Manuale și materiale</li>
                        <li>• Sfaturi pentru examen</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Capitol 1 -->
        <section class="mb-8">
            <div class="chapter-header">
                <h2 class="text-3xl font-bold">
                    <i class="fas fa-user-circle mr-3"></i>
                    Capitol 1: Consumatorul și Comportamentul Său Rațional
                </h2>
            </div>

            <!-- 1.1 Nevoi și resurse -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-heart text-red-500 mr-2"></i>
                    1.1 Nevoi și resurse
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Clasificarea nevoilor umane:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Nevoi biologice</div>
                            <p class="text-sm text-gray-600">Hrană, apă, aer, odihnă, reproducere</p>
                            
                            <div class="concept-highlight">Nevoi sociale</div>
                            <p class="text-sm text-gray-600">Comunicare, securitate, participare socială</p>
                            
                            <div class="concept-highlight">Nevoi psihologice</div>
                            <p class="text-sm text-gray-600">Stimă, respect, cunoaștere, afirmare</p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Clasificarea resurselor:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Resurse umane</div>
                            <div class="concept-highlight">Resurse materiale</div>
                            <div class="concept-highlight">Resurse financiare</div>
                            <div class="concept-highlight">Resurse informaționale</div>
                        </div>
                    </div>
                </div>

                <div class="formula-box">
                    <h5 class="font-bold mb-2"><i class="fas fa-calculator mr-2"></i>Concept Cheie:</h5>
                    <p><strong>Costul de oportunitate</strong> = Beneficiul asociat celei mai bune variante la care s-a renunțat în favoarea alternativei alese</p>
                </div>

                <div class="mt-4">
                    <h5 class="font-semibold mb-2">Linkuri pentru aprofundare:</h5>
                    <a href="https://www.ebacalaureat.ro/c/sinteze-economie-bacalaureat/1808" class="link-button" target="_blank">
                        <i class="fas fa-book mr-1"></i>Sinteze complete - eBacalaureat.ro
                    </a>
                    <a href="https://manuale.edu.ro/manuale/Clasa%20a%20XI-a/Economie/Corint/A375.pdf" class="link-button" target="_blank">
                        <i class="fas fa-file-pdf mr-1"></i>Manual oficial clasa XI
                    </a>
                </div>
            </div>

            <!-- 1.2 Consumatorul și comportamentul său -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-brain text-purple-500 mr-2"></i>
                    1.2 Consumatorul și comportamentul său
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Utilitatea economică:</h4>
                        <p class="text-gray-700 mb-3">Satisfacția sau plăcerea resimțită de o persoană în urma consumării unui bun sau serviciu.</p>
                        
                        <div class="space-y-2">
                            <div class="concept-highlight">Utilitatea totală (Ut)</div>
                            <p class="text-sm text-gray-600">Satisfacția totală din consumul unui număr de bucăți</p>
                            
                            <div class="concept-highlight">Utilitatea marginală (Umg)</div>
                            <p class="text-sm text-gray-600">Satisfacția suplimentară din consumul unei unități suplimentare</p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Consumatorul rațional:</h4>
                        <p class="text-gray-700 mb-3">Urmărește maximizarea satisfacției prin alocarea optimă a venitului disponibil.</p>
                        
                        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-3 rounded">
                            <p class="text-sm font-semibold text-yellow-700">Regula de maximizare a utilității:</p>
                            <p class="text-sm text-yellow-600">Utilitatea marginală pe ultima unitate monetară cheltuită trebuie să fie egală pentru toate bunurile.</p>
                        </div>
                    </div>
                </div>

                <div class="formula-box">
                    <h5 class="font-bold mb-2"><i class="fas fa-formula mr-2"></i>Formule importante:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>Utilitatea totală:</strong> Ut = U₁ + U₂ + ... + Uₙ</p>
                            <p><strong>Utilitatea marginală:</strong> Umg = ΔU/ΔQ</p>
                        </div>
                        <div>
                            <p><strong>Eficiența consumului:</strong> E = U/P</p>
                            <p><strong>Unde:</strong> U = utilitate, P = preț, Q = cantitate</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-semibold mb-2">Linkuri pentru aprofundare:</h5>
                    <a href="https://www.studocu.com/ro/document/academia-de-studii-economice-din-bucuresti/microeconomie-microeconomics/comportament-consumator/11316745" class="link-button" target="_blank">
                        <i class="fas fa-graduation-cap mr-1"></i>Comportament consumator - Studocu
                    </a>
                    <a href="https://startarium.ro/articol/costul-de-oportunitate" class="link-button" target="_blank">
                        <i class="fas fa-chart-line mr-1"></i>Costul de oportunitate
                    </a>
                </div>
            </div>

            <!-- 1.3 Cererea -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-shopping-cart text-green-500 mr-2"></i>
                    1.3 Cererea
                </h3>
                
                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-4">
                    <p class="font-semibold text-green-700">Definiție:</p>
                    <p class="text-green-600">Cererea reprezintă cantitatea dintr-un bun sau serviciu pe care consumatorii pot și sunt dispuși să o cumpere într-o anumită perioadă de timp, la un anumit preț.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Legea cererii:</h4>
                        <p class="text-gray-700 mb-2">Relația inversă dintre preț și cantitatea cerută:</p>
                        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                            <li>Preț crește → Cantitatea cerută scade</li>
                            <li>Preț scade → Cantitatea cerută crește</li>
                        </ul>
                        <div class="concept-highlight mt-2">Cererea solvabilă</div>
                        <p class="text-sm text-gray-600">Cererea pentru care cumpărătorii dispun de mijloace de plată</p>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Elasticitatea cererii:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Elastică (>1)</div>
                            <p class="text-sm text-gray-600">Ex: autoturisme, calculatoare</p>
                            
                            <div class="concept-highlight">Inelastică (<1)</div>
                            <p class="text-sm text-gray-600">Ex: medicamente, hârtie</p>
                            
                            <div class="concept-highlight">Unitară (=1)</div>
                            <p class="text-sm text-gray-600">Variația proporțională</p>
                        </div>
                    </div>
                </div>

                <div class="formula-box">
                    <h5 class="font-bold mb-2"><i class="fas fa-percent mr-2"></i>Coeficientul de elasticitate:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>În funcție de preț:</strong></p>
                            <p>Kec/p = -(ΔQ%/ΔP%)</p>
                            <p>Unde: ΔQ% = variația cantității (%)</p>
                            <p>ΔP% = variația prețului (%)</p>
                        </div>
                        <div>
                            <p><strong>În funcție de venit:</strong></p>
                            <p>Kec/v = (ΔQ%/ΔV%)</p>
                            <p>Unde: ΔV% = variația venitului (%)</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-semibold mb-2">Linkuri pentru aprofundare:</h5>
                    <a href="https://www.ebacalaureat.ro/c/cererea-si-oferta/207" class="link-button" target="_blank">
                        <i class="fas fa-chart-area mr-1"></i>Cererea și oferta - eBacalaureat.ro
                    </a>
                    <a href="https://tavex.ro/legile-cererii-si-ofertei/" class="link-button" target="_blank">
                        <i class="fas fa-balance-scale mr-1"></i>Legile cererii și ofertei
                    </a>
                </div>
            </div>
        </section>

        <!-- Capitol 2 -->
        <section class="mb-8">
            <div class="chapter-header">
                <h2 class="text-3xl font-bold">
                    <i class="fas fa-industry mr-3"></i>
                    Capitol 2: Producătorul/Întreprinzătorul și Comportamentul Său Rațional
                </h2>
            </div>

            <!-- 2.1 Proprietatea și libera inițiativă -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-building text-blue-500 mr-2"></i>
                    2.1 Proprietatea și libera inițiativă
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Întreprinderea - agent economic:</h4>
                        <p class="text-gray-700 mb-3">Unități economice de bază unde se desfășoară activități de producție și distribuție.</p>
                        
                        <h5 class="font-semibold text-purple-600 mb-2">Atribute ale proprietății:</h5>
                        <div class="space-y-1">
                            <div class="concept-highlight">Posesia</div>
                            <div class="concept-highlight">Dispoziția</div>
                            <div class="concept-highlight">Folosința</div>
                            <div class="concept-highlight">Uzufructul</div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Forme de proprietate:</h4>
                        <div class="space-y-2">
                            <div class="bg-blue-50 border-l-4 border-blue-500 p-3 rounded">
                                <p class="font-semibold text-blue-700">Proprietate privată:</p>
                                <ul class="text-sm text-blue-600 list-disc list-inside">
                                    <li>Individuală</li>
                                    <li>Asociativă</li>
                                </ul>
                            </div>
                            <div class="bg-green-50 border-l-4 border-green-500 p-3 rounded">
                                <p class="font-semibold text-green-700">Proprietate publică</p>
                            </div>
                            <div class="bg-purple-50 border-l-4 border-purple-500 p-3 rounded">
                                <p class="font-semibold text-purple-700">Proprietate mixtă</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                    <h5 class="font-semibold text-yellow-700 mb-2">Libera inițiativă în economia de piață:</h5>
                    <ul class="text-yellow-600 list-disc list-inside space-y-1">
                        <li>Dreptul de a dispune de proprietate</li>
                        <li>Libertatea de a administra afacerea</li>
                        <li>Asumarea responsabilităților economice</li>
                    </ul>
                </div>

                <div class="mt-4">
                    <a href="https://ec.utgjiu.ro/wp-content/uploads/2021/04/Microeconomie.pdf" class="link-button" target="_blank">
                        <i class="fas fa-file-pdf mr-1"></i>Microeconomie PDF complet
                    </a>
                </div>
            </div>

            <!-- 2.2 Factorii de producție -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cogs text-orange-500 mr-2"></i>
                    2.2 Factorii de producție și combinarea acestora
                </h3>
                
                <div class="grid md:grid-cols-3 gap-4 mb-6">
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                        <h4 class="font-semibold text-green-700 mb-2">
                            <i class="fas fa-seedling mr-1"></i>Resurse naturale
                        </h4>
                        <p class="text-sm text-green-600">Factori de producție primari</p>
                        <ul class="text-xs text-green-500 list-disc list-inside mt-2">
                            <li>Regenerabile</li>
                            <li>Neregenerabile</li>
                        </ul>
                    </div>
                    
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <h4 class="font-semibold text-blue-700 mb-2">
                            <i class="fas fa-users mr-1"></i>Munca
                        </h4>
                        <p class="text-sm text-blue-600">Factorul cel mai important</p>
                        <p class="text-xs text-blue-500 mt-2">Activitate fizică și intelectuală pentru producerea bunurilor</p>
                    </div>
                    
                    <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                        <h4 class="font-semibold text-purple-700 mb-2">
                            <i class="fas fa-money-bill-wave mr-1"></i>Capitalul
                        </h4>
                        <p class="text-sm text-purple-600">Factor derivat</p>
                        <ul class="text-xs text-purple-500 list-disc list-inside mt-2">
                            <li>Capital fix (Kf)</li>
                            <li>Capital circulant (Kc)</li>
                        </ul>
                    </div>
                </div>

                <div class="formula-box">
                    <h5 class="font-bold mb-2"><i class="fas fa-equals mr-2"></i>Formule pentru capital:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>Capital total:</strong> K = Kf + Kc</p>
                            <p><strong>Amortizarea:</strong> A = Kf/n</p>
                        </div>
                        <div>
                            <p><strong>Rata marginală de substituție:</strong> RmgS</p>
                            <p class="text-sm">Suplimentul dintr-un factor pentru reducerea cu o unitate a altui factor</p>
                        </div>
                    </div>
                </div>

                <div class="bg-orange-50 border-l-4 border-orange-500 p-4 rounded mt-4">
                    <h5 class="font-semibold text-orange-700 mb-2">Uzura capitalului fix:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <div class="concept-highlight bg-orange-500">Uzura fizică</div>
                            <p class="text-sm text-orange-600 mt-1">Deteriorarea prin utilizare</p>
                        </div>
                        <div>
                            <div class="concept-highlight bg-orange-500">Uzura morală</div>
                            <p class="text-sm text-orange-600 mt-1">Depreciere prin progres tehnic</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2.3 Productivitatea -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-chart-line text-green-500 mr-2"></i>
                    2.3 Eficiența economică și productivitatea
                </h3>
                
                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-4">
                    <p class="font-semibold text-green-700">Definiție:</p>
                    <p class="text-green-600">Productivitatea reprezintă eficiența, randamentul sau rodnicia cu care sunt combinați și utilizați factorii de producție.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Productivitatea medie:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Productivitatea muncii (WmL)</div>
                            <p class="text-sm text-gray-600">WmL = Q/L</p>
                            
                            <div class="concept-highlight">Productivitatea capitalului (WmK)</div>
                            <p class="text-sm text-gray-600">WmK = Q/Kt</p>
                            
                            <div class="concept-highlight">Productivitatea pământului (WmP)</div>
                            <p class="text-sm text-gray-600">WmP = Q/P</p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Productivitatea marginală:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Muncii (WLmg)</div>
                            <p class="text-sm text-gray-600">WLmg = ΔQ/ΔL</p>
                            
                            <div class="concept-highlight">Capitalului (WKmg)</div>
                            <p class="text-sm text-gray-600">WKmg = ΔQ/ΔKt</p>
                            
                            <div class="concept-highlight">Pământului (WPmg)</div>
                            <p class="text-sm text-gray-600">WPmg = ΔQ/ΔP</p>
                        </div>
                    </div>
                </div>

                <div class="formula-box">
                    <h5 class="font-bold mb-2"><i class="fas fa-calculator mr-2"></i>Formula generală:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>Productivitate medie:</strong> W = Q/Fi</p>
                            <p><strong>Productivitate marginală:</strong> Wmg = ΔQ/ΔFi</p>
                        </div>
                        <div>
                            <p><strong>Productivitate globală:</strong></p>
                            <p>W = Q/(P+L+Kt)</p>
                            <p class="text-sm">Unde: Q = producția, Fi = factorul i</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="https://www.youtube.com/watch?v=seaW7y91TFY" class="link-button" target="_blank">
                        <i class="fas fa-play mr-1"></i>Producătorul: Venituri, Costuri, Profit
                    </a>
                </div>
            </div>

            <!-- 2.4 Costuri și profit -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-money-check-alt text-red-500 mr-2"></i>
                    2.4 Costuri, profit, eficiența economică
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Structura costurilor:</h4>
                        <div class="space-y-3">
                            <div class="bg-red-50 border-l-4 border-red-500 p-3 rounded">
                                <p class="font-semibold text-red-700">Costuri fixe (CF):</p>
                                <p class="text-sm text-red-600">Nu se modifică cu volumul producției</p>
                                <p class="text-xs text-red-500">Ex: amortizare, chirii, asigurări</p>
                            </div>
                            
                            <div class="bg-blue-50 border-l-4 border-blue-500 p-3 rounded">
                                <p class="font-semibold text-blue-700">Costuri variabile (CV):</p>
                                <p class="text-sm text-blue-600">Se modifică cu volumul producției</p>
                                <p class="text-xs text-blue-500">Ex: materii prime, energie, salarii directe</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Tipurile de profit:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Profit brut (Prb)</div>
                            <p class="text-sm text-gray-600">Prb = CA - CT</p>
                            
                            <div class="concept-highlight">Profit net (Prn)</div>
                            <p class="text-sm text-gray-600">Prn = Prb - Ipr</p>
                            
                            <div class="concept-highlight">Profit normal</div>
                            <p class="text-sm text-gray-600">Suma minimă pentru continuare</p>
                            
                            <div class="concept-highlight">Supraprofit</div>
                            <p class="text-sm text-gray-600">Câștig suplimentar față de normal</p>
                        </div>
                    </div>
                </div>

                <div class="formula-box">
                    <h5 class="font-bold mb-2"><i class="fas fa-chart-pie mr-2"></i>Formule pentru costuri și profit:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>Costuri totale:</strong> CT = CF + CV</p>
                            <p><strong>Cost marginal:</strong> Cmg = ΔCT/ΔQ</p>
                            <p><strong>Cost mediu fix:</strong> CFM = CF/Q</p>
                            <p><strong>Cost mediu variabil:</strong> CVM = CV/Q</p>
                        </div>
                        <div>
                            <p><strong>Profit brut:</strong> Prb = CA - CT</p>
                            <p><strong>Rata profitului:</strong> Rpr/CA = (Pr/CA) × 100</p>
                            <p><strong>Rata rentabilității:</strong> Rpr/CT = (Pr/CT) × 100</p>
                            <p><strong>Rentabilitatea capitalului:</strong> Rpr/Kt = (Pr/Kt) × 100</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-semibold mb-2">Linkuri pentru aprofundare:</h5>
                    <a href="https://www.studocu.com/ro/document/academia-de-studii-economice-din-bucuresti/microeconomie-microeconomics/costurile/82097130" class="link-button" target="_blank">
                        <i class="fas fa-calculator mr-1"></i>Costurile în economie - Studocu
                    </a>
                    <a href="https://www.youtube.com/watch?v=Vmh8aEZ_ZF4" class="link-button" target="_blank">
                        <i class="fas fa-video mr-1"></i>Producătorul: Costuri și Profit
                    </a>
                </div>
            </div>

            <!-- 2.5 Oferta -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-store text-purple-500 mr-2"></i>
                    2.5 Oferta
                </h3>
                
                <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded mb-4">
                    <p class="font-semibold text-purple-700">Definiție:</p>
                    <p class="text-purple-600">Oferta reprezintă cantitatea de bunuri și servicii pe care agenții economici o aduc pe piață într-o anumită perioadă și la un anumit preț.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Legea ofertei:</h4>
                        <p class="text-gray-700 mb-2">Relația directă dintre preț și cantitatea oferită:</p>
                        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                            <li>Preț crește → Cantitatea oferită crește</li>
                            <li>Preț scade → Cantitatea oferită scade</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Factori care influențează oferta:</h4>
                        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                            <li>Modificarea prețurilor factorilor de producție</li>
                            <li>Modificarea prețurilor de vânzare</li>
                            <li>Progresul tehnic</li>
                            <li>Politica guvernamentală</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded mt-4">
                    <p class="font-semibold text-yellow-700 mb-2">Atenție!</p>
                    <p class="text-yellow-600 text-sm">Cantitatea oferită ≠ Cantitatea vândută. Cantitatea vândută depinde de nivelul cererii pe piață.</p>
                </div>
            </div>
        </section>

        <!-- Capitol 3 -->
        <section class="mb-8">
            <div class="chapter-header">
                <h2 class="text-3xl font-bold">
                    <i class="fas fa-handshake mr-3"></i>
                    Capitol 3: Piața - Întâlnirea Agenților Economici
                </h2>
            </div>

            <!-- 3.1 Relația cerere-ofertă-preț -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-balance-scale text-blue-500 mr-2"></i>
                    3.1 Relația cerere-ofertă-preț în economia de piață
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Formarea prețului de echilibru:</h4>
                        <p class="text-gray-700 mb-3">Prețul se formează la intersecția curbelor de cerere și ofertă.</p>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-3 rounded">
                            <p class="font-semibold text-blue-700">La echilibru:</p>
                            <p class="text-blue-600 text-sm">Cantitatea cerută = Cantitatea oferită</p>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Dezechilibrele de piață:</h4>
                        <div class="space-y-2">
                            <div class="bg-red-50 border-l-4 border-red-500 p-3 rounded">
                                <p class="font-semibold text-red-700">Exces de cerere:</p>
                                <p class="text-red-600 text-sm">Cererea > Oferta → Prețul tinde să crească</p>
                            </div>
                            
                            <div class="bg-green-50 border-l-4 border-green-500 p-3 rounded">
                                <p class="font-semibold text-green-700">Exces de ofertă:</p>
                                <p class="text-green-600 text-sm">Oferta > Cererea → Prețul tinde să scadă</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-500 p-4 rounded">
                    <h5 class="font-semibold text-indigo-700 mb-2">Funcțiile prețului în economia de piață:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <ul class="text-indigo-600 text-sm list-disc list-inside space-y-1">
                            <li>Funcția informațională</li>
                            <li>Funcția de stimulare</li>
                        </ul>
                        <ul class="text-indigo-600 text-sm list-disc list-inside space-y-1">
                            <li>Funcția de alocare a resurselor</li>
                            <li>Funcția de distribuție a veniturilor</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="https://www.youtube.com/watch?v=iJYCgv6Ro8o" class="link-button" target="_blank">
                        <i class="fas fa-play mr-1"></i>TeleȘcoala: Economie - Piața
                    </a>
                </div>
            </div>

            <!-- 3.2 Mecanismul concurențial -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-trophy text-yellow-500 mr-2"></i>
                    3.2 Mecanismul concurențial
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Concurența perfectă:</h4>
                        <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                            <li>Număr mare de cumpărători și vânzători</li>
                            <li>Produse omogene</li>
                            <li>Informații complete</li>
                            <li>Intrare și ieșire liberă de pe piață</li>
                            <li>Mobilitate perfectă a factorilor</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-blue-600 mb-3">Concurența imperfectă:</h4>
                        <div class="space-y-2">
                            <div class="concept-highlight">Concurența monopolistică</div>
                            <p class="text-xs text-gray-600">Multe firme, produse diferențiate</p>
                            
                            <div class="concept-highlight">Oligopolul</div>
                            <p class="text-xs text-gray-600">Câteva firme mari domină piața</p>
                            
                            <div class="concept-highlight">Monopolul</div>
                            <p class="text-xs text-gray-600">O singură firmă pe piață</p>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                    <h5 class="font-semibold text-yellow-700 mb-2">Efectele concurenței:</h5>
                    <div class="grid md:grid-cols-2 gap-4">
                        <ul class="text-yellow-600 text-sm list-disc list-inside space-y-1">
                            <li>Stimulează inovația</li>
                            <li>Reduce prețurile</li>
                            <li>Îmbunătățește calitatea</li>
                        </ul>
                        <ul class="text-yellow-600 text-sm list-disc list-inside space-y-1">
                            <li>Crește eficiența economică</li>
                            <li>Protejează consumatorii</li>
                            <li>Favorizează progresul tehnic</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-semibold mb-2">Linkuri pentru aprofundare:</h5>
                    <a href="https://www.ebacalaureat.ro/c/concurenta-forme-si-strategii-anticoncurentiale/206" class="link-button" target="_blank">
                        <i class="fas fa-gavel mr-1"></i>Concurența - eBacalaureat.ro
                    </a>
                    <a href="https://www.studocu.com/ro/document/universitatea-din-bucuresti/economie/piata-si-concurenta/38930564" class="link-button" target="_blank">
                        <i class="fas fa-graduation-cap mr-1"></i>Piața și concurența - Studocu
                    </a>
                </div>
            </div>

            <!-- 3.3 Forme ale pieței -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-sitemap text-green-500 mr-2"></i>
                    3.3 Forme ale pieței
                </h3>
                
                <!-- Piața monetară -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-green-600 mb-3">
                        <i class="fas fa-coins mr-2"></i>A) Piața monetară
                    </h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                            <p class="font-semibold text-green-700 mb-2">Caracteristici:</p>
                            <ul class="text-green-600 text-sm list-disc list-inside space-y-1">
                                <li>Piața capitalurilor pe termen scurt</li>
                                <li>Tranzacții cu scadența sub 1 an</li>
                                <li>Instrumente foarte lichide</li>
                                <li>Risc redus</li>
                            </ul>
                        </div>
                        
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                            <p class="font-semibold text-blue-700 mb-2">Masa monetară include:</p>
                            <ul class="text-blue-600 text-sm list-disc list-inside space-y-1">
                                <li>Numerarul în economie</li>
                                <li>Depozitele la bănci comerciale</li>
                                <li>Certificatele de depozit</li>
                                <li>Bonurile de tezaur</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Piața capitalurilor -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-blue-600 mb-3">
                        <i class="fas fa-chart-line mr-2"></i>B) Piața capitalurilor (financiară)
                    </h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                            <p class="font-semibold text-blue-700 mb-2">Caracteristici:</p>
                            <ul class="text-blue-600 text-sm list-disc list-inside space-y-1">
                                <li>Piața pe termen lung</li>
                                <li>Finanțarea investițiilor</li>
                                <li>Risc mai mare</li>
                                <li>Randamente potențial mai mari</li>
                            </ul>
                        </div>
                        
                        <div class="bg-purple-50 border-l-4 border-purple-500 p-4 rounded">
                            <p class="font-semibold text-purple-700 mb-2">Instrumente financiare:</p>
                            <ul class="text-purple-600 text-sm list-disc list-inside space-y-1">
                                <li>Acțiuni</li>
                                <li>Obligațiuni</li>
                                <li>Fonduri de investiții</li>
                                <li>Derivate financiare</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Piața muncii -->
                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-red-600 mb-3">
                        <i class="fas fa-briefcase mr-2"></i>C) Piața muncii
                    </h4>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                            <p class="font-semibold text-red-700 mb-2">Cererea de muncă:</p>
                            <ul class="text-red-600 text-sm list-disc list-inside space-y-1">
                                <li>Provine de la firme</li>
                                <li>Influențată de productivitatea marginală</li>
                                <li>Relația inversă cu salariul</li>
                            </ul>
                        </div>
                        
                        <div class="bg-orange-50 border-l-4 border-orange-500 p-4 rounded">
                            <p class="font-semibold text-orange-700 mb-2">Oferta de muncă:</p>
                            <ul class="text-orange-600 text-sm list-disc list-inside space-y-1">
                                <li>Provine de la indivizi</li>
                                <li>Influențată de nivelul salariului</li>
                                <li>Mobilitatea forței de muncă</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-semibold mb-2">Linkuri pentru aprofundare:</h5>
                    <a href="https://financialmarket.ro/terms/piata-monetara/" class="link-button" target="_blank">
                        <i class="fas fa-money-bill mr-1"></i>Piața monetară - Financial Market
                    </a>
                    <a href="https://www.youtube.com/watch?v=ReFRNJgrOnk" class="link-button" target="_blank">
                        <i class="fas fa-play mr-1"></i>TeleȘcoala: Piața monetară
                    </a>
                </div>
            </div>
        </section>

        <!-- Resurse Suplimentare -->
        <section class="mb-8">
            <div class="chapter-header">
                <h2 class="text-3xl font-bold">
                    <i class="fas fa-book-open mr-3"></i>
                    Resurse Suplimentare pentru Pregătirea BAC-ului
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Platforme online -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">
                        <i class="fas fa-laptop text-blue-500 mr-2"></i>
                        Platforme online de pregătire
                    </h3>
                    
                    <div class="space-y-3">
                        <a href="https://www.ebacalaureat.ro/cat/lectii-economie/80" class="block bg-blue-50 hover:bg-blue-100 transition-colors p-3 rounded border-l-4 border-blue-500" target="_blank">
                            <p class="font-semibold text-blue-700">eBacalaureat.ro</p>
                            <p class="text-sm text-blue-600">Lecții complete și teste interactive</p>
                        </a>
                        
                        <a href="https://www.teste-bacalaureat.ro/programa-bacalaureat/programa-bac-economie.html" class="block bg-green-50 hover:bg-green-100 transition-colors p-3 rounded border-l-4 border-green-500" target="_blank">
                            <p class="font-semibold text-green-700">Teste-bacalaureat.ro</p>
                            <p class="text-sm text-green-600">Programa oficială și simulări</p>
                        </a>
                        
                        <a href="https://tootor.ro/courses/" class="block bg-purple-50 hover:bg-purple-100 transition-colors p-3 rounded border-l-4 border-purple-500" target="_blank">
                            <p class="font-semibold text-purple-700">Tootor.ro</p>
                            <p class="text-sm text-purple-600">Meditații online personalizate</p>
                        </a>
                    </div>
                </div>

                <!-- Materiale de studiu -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">
                        <i class="fas fa-file-pdf text-red-500 mr-2"></i>
                        Materiale de studiu
                    </h3>
                    
                    <div class="space-y-3">
                        <a href="https://manuale.edu.ro/manuale/Clasa%20a%20XI-a/Economie/Corint/A375.pdf" class="block bg-red-50 hover:bg-red-100 transition-colors p-3 rounded border-l-4 border-red-500" target="_blank">
                            <p class="font-semibold text-red-700">Manual oficial clasa XI</p>
                            <p class="text-sm text-red-600">PDF complet cu toată materia</p>
                        </a>
                        
                        <a href="https://ro.scribd.com/document/550779772/SINTEZE-ECONOMIE-BACALAUREAT" class="block bg-orange-50 hover:bg-orange-100 transition-colors p-3 rounded border-l-4 border-orange-500" target="_blank">
                            <p class="font-semibold text-orange-700">Sinteze Economie Bacalaureat</p>
                            <p class="text-sm text-orange-600">Rezumate complete - Scribd</p>
                        </a>
                        
                        <a href="https://ro.scribd.com/doc/22829052/teste-grila-economie-f-f-f-bune" class="block bg-yellow-50 hover:bg-yellow-100 transition-colors p-3 rounded border-l-4 border-yellow-500" target="_blank">
                            <p class="font-semibold text-yellow-700">Teste grilă economie</p>
                            <p class="text-sm text-yellow-600">Exerciții practice și aplicații</p>
                        </a>
                    </div>
                </div>

                <!-- Video-lecții -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">
                        <i class="fas fa-play-circle text-green-500 mr-2"></i>
                        Video-lecții
                    </h3>
                    
                    <div class="space-y-3">
                        <a href="https://www.youtube.com/watch?v=iJYCgv6Ro8o" class="block bg-red-50 hover:bg-red-100 transition-colors p-3 rounded border-l-4 border-red-500" target="_blank">
                            <p class="font-semibold text-red-700">TeleȘcoala TVR</p>
                            <p class="text-sm text-red-600">Lecții oficiale pentru BAC</p>
                        </a>
                        
                        <a href="https://www.youtube.com/watch?v=lchk67H96gE" class="block bg-blue-50 hover:bg-blue-100 transition-colors p-3 rounded border-l-4 border-blue-500" target="_blank">
                            <p class="font-semibold text-blue-700">Microeconomie explicată</p>
                            <p class="text-sm text-blue-600">Concepte fundamentale</p>
                        </a>
                        
                        <a href="https://www.youtube.com/watch?v=seaW7y91TFY" class="block bg-purple-50 hover:bg-purple-100 transition-colors p-3 rounded border-l-4 border-purple-500" target="_blank">
                            <p class="font-semibold text-purple-700">Producătorul: Costuri și Profit</p>
                            <p class="text-sm text-purple-600">Aplicații practice</p>
                        </a>
                    </div>
                </div>

                <!-- Resurse avansate -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">
                        <i class="fas fa-microscope text-purple-500 mr-2"></i>
                        Pentru aprofundare teoretică
                    </h3>
                    
                    <div class="space-y-3">
                        <a href="https://www.researchgate.net/publication/266223636_ASPECTE_MICROECONOMICE_CLASICE_SI_MODERNE_ALE_COMPORTAMENTULUI_DE_CONSUM_AL_POPULATIEI" class="block bg-indigo-50 hover:bg-indigo-100 transition-colors p-3 rounded border-l-4 border-indigo-500" target="_blank">
                            <p class="font-semibold text-indigo-700">ResearchGate - Comportament consumator</p>
                            <p class="text-sm text-indigo-600">Studii avansate în microeconomie</p>
                        </a>
                        
                        <a href="https://www.mfinante.gov.ro/static/10/Mfp/evaluare/Ghidpt_ACB_RO.pdf" class="block bg-green-50 hover:bg-green-100 transition-colors p-3 rounded border-l-4 border-green-500" target="_blank">
                            <p class="font-semibold text-green-700">Analiza cost-beneficiu</p>
                            <p class="text-sm text-green-600">Ghid național pentru evaluări economice</p>
                        </a>
                        
                        <a href="https://ec.utgjiu.ro/wp-content/uploads/2021/04/Microeconomie.pdf" class="block bg-blue-50 hover:bg-blue-100 transition-colors p-3 rounded border-l-4 border-blue-500" target="_blank">
                            <p class="font-semibold text-blue-700">Curs complet Microeconomie</p>
                            <p class="text-sm text-blue-600">Universitatea din Târgu Jiu</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sfaturi finale -->
        <section class="bg-gradient-to-r from-green-500 to-blue-600 text-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-center mb-6">
                <i class="fas fa-lightbulb mr-3"></i>
                Sfaturi pentru Pregătirea Examenului
            </h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <h3 class="text-xl font-bold mb-3">
                        <i class="fas fa-target text-yellow-300 mr-2"></i>
                        Concentrează-te pe competențele evaluate
                    </h3>
                    <ul class="space-y-2 text-sm">
                        <li>• Utilizarea conceptelor economice în analiză</li>
                        <li>• Caracterizarea agenților economici</li>
                        <li>• Interpretarea comportamentului rațional</li>
                        <li>• Analiza fenomenelor și proceselor economice</li>
                    </ul>
                </div>
                
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <h3 class="text-xl font-bold mb-3">
                        <i class="fas fa-dumbbell text-yellow-300 mr-2"></i>
                        Exercită constant cu
                    </h3>
                    <ul class="space-y-2 text-sm">
                        <li>• Calcule de utilitate și elasticitate</li>
                        <li>• Probleme de cost și profit</li>
                        <li>• Analiza graficelor cerere-ofertă</li>
                        <li>• Interpretarea indicatorilor economici</li>
                    </ul>
                </div>
                
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <h3 class="text-xl font-bold mb-3">
                        <i class="fas fa-calculator text-yellow-300 mr-2"></i>
                        Memorează formulele esențiale
                    </h3>
                    <ul class="space-y-2 text-sm">
                        <li>• Utilitatea marginală și totală</li>
                        <li>• Elasticitatea cererii</li>
                        <li>• Costurile și productivitatea</li>
                        <li>• Indicatorii de profit și rentabilitate</li>
                    </ul>
                </div>
                
                <div class="bg-white bg-opacity-20 rounded-lg p-4">
                    <h3 class="text-xl font-bold mb-3">
                        <i class="fas fa-flag-checkered text-yellow-300 mr-2"></i>
                        Strategii de examen
                    </h3>
                    <ul class="space-y-2 text-sm">
                        <li>• Folosește exemple din economia românească</li>
                        <li>• Ilustrează conceptele cu grafice</li>
                        <li>• Structurează răspunsurile logic</li>
                        <li>• Verifică calculele de două ori</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Footer informativ -->
        <footer class="bg-gray-800 text-white rounded-lg p-6 text-center">
            <p class="text-lg font-semibold mb-2">
                <i class="fas fa-graduation-cap mr-2"></i>
                Succes la Bacalaureat!
            </p>
            <p class="text-gray-300 text-sm">
                Acest ghid acoperă integral programa de BAC la economie conform Ordinului MEC nr. 4800/2010
            </p>

        </footer>
    </div>

 <?php
include("bacnavigator-footer.php");
?>