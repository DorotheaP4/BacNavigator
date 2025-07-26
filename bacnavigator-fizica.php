<?php
include("bacnavigator-header.php");
?>


    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            height: 300px;
            max-height: 400px;
        }
        @media (min-width: 768px) {
            .chart-container {
                height: 400px;
            }
        }
        .card {
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-8px);
        }
        .btn-custom-cyan { background-color: #0d6efd; border-color: #0d6efd; color: white; }
        .btn-custom-cyan:hover { background-color: #0a58ca; border-color: #0a58ca; }
        .btn-custom-orange { background-color: #fd7e14; border-color: #fd7e14; color: white; }
        .btn-custom-orange:hover { background-color: #e06600; border-color: #e06600; }
        .btn-custom-green { background-color: #198754; border-color: #198754; color: white; }
        .btn-custom-green:hover { background-color: #157347; border-color: #157347; }
        .btn-custom-purple { background-color: #6f42c1; border-color: #6f42c1; color: white; }
        .btn-custom-purple:hover { background-color: #5d35a3; border-color: #5d35a3; }
        .btn-custom-red { background-color: #dc3545; border-color: #dc3545; color: white; }
        .btn-custom-red:hover { background-color: #c82333; border-color: #c82333; }
        .btn-custom-yellow { background-color: #ffc107; border-color: #ffc107; color: white; }
        .btn-custom-yellow:hover { background-color: #e0a800; border-color: #e0a800; }
    </style>

    <div class="container my-5">
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-dark">Prezentare Generală Fizică Liceu</h1>
            <p class="lead text-muted mt-3 mx-auto" style="max-width: 800px;">Un ghid interactiv al conceptelor fundamentale din fizică. Explorează subiectele de bază și vizualizează forțele care modelează universul nostru.</p>
        </header>

        <main>
            <section id="interactive-chart" class="mb-5">
                <h2 class="text-center mb-4">Cele Patru Forțe Fundamentale</h2>
                <p class="text-center text-muted mb-4 mx-auto" style="max-width: 900px;">
                    Fizica identifică patru forțe fundamentale care guvernează modul în care obiectele și particulele interacționează. Puterile lor variază enorm. Acest grafic utilizează o scară logaritmică pentru a vizualiza puterea lor relativă, de la forța incredibil de puternică ce ține nucleele atomice împreună, până la slaba atracție a gravitației. Treceți cu mouse-ul peste bare pentru a vedea puterea lor relativă comparativ cu Forța Nucleară Tare.
                </p>
                <div class="bg-white p-4 rounded-3 shadow-sm">
                    <div class="chart-container">
                        <canvas id="forcesChart"></canvas>
                    </div>
                </div>
            </section>

            <section id="core-topics">
                <h2 class="text-center mb-4">Domenii Cheie ale Fizicii</h2>
                 <div class="row g-4">
                    
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm rounded-3 p-4 d-flex flex-column">
                            <h3 class="card-title h4 fw-bold mb-3 text-primary">Mecanica Clasică</h3>
                            <p class="card-text text-muted mb-3 flex-grow-1">Studiul mișcării și al forțelor care o provoacă. Aceasta este fizica obiectelor de zi cu zi, de la aruncarea unei mingi la orbitele planetelor.</p>
                            <ul class="list-unstyled text-dark mb-4 small">
                                <li>&#x2022; Cinematică: Descrierea mișcării.</li>
                                <li>&#x2022; Legile lui Newton: Forțe și inerție.</li>
                                <li>&#x2022; Lucru, Energie și Putere.</li>
                                <li>&#x2022; Impuls și Coliziuni.</li>
                                <li>&#x2022; Gravitație.</li>
                            </ul>
                            <a href="https://www.khanacademy.org/science/physics" target="_blank" class="btn btn-custom-cyan mt-auto">Află Mai Multe</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm rounded-3 p-4 d-flex flex-column">
                            <h3 class="card-title h4 fw-bold mb-3 text-warning">Termodinamică</h3>
                            <p class="card-text text-muted mb-3 flex-grow-1">Ramura fizicii care se ocupă cu căldura, lucrul mecanic și temperatura, și relația lor cu energia, radiația și proprietățile fizice ale materiei.</p>
                            <ul class="list-unstyled text-dark mb-4 small">
                                <li>&#x2022; Temperatură și Căldură.</li>
                                <li>&#x2022; Legile Termodinamicii.</li>
                                <li>&#x2022; Entropie și Dezordine.</li>
                                <li>&#x2022; Motoare Termice.</li>
                            </ul>
                            <a href="https://www.khanacademy.org/science/physics/thermodynamics" target="_blank" class="btn btn-custom-orange mt-auto">Află Mai Multe</a>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm rounded-3 p-4 d-flex flex-column">
                            <h3 class="card-title h4 fw-bold mb-3 text-success">Unde și Optică</h3>
                            <p class="card-text text-muted mb-3 flex-grow-1">Studiul oscilațiilor și undelor, inclusiv sunetul și lumina. Explorează modul în care undele se propagă, interacționează și cum le percepem.</p>
                            <ul class="list-unstyled text-dark mb-4 small">
                                <li>&#x2022; Mișcarea Armonică Simplă.</li>
                                <li>&#x2022; Unde Transversale și Longitudinale.</li>
                                <li>&#x2022; Sunetul și Efectul Doppler.</li>
                                <li>&#x2022; Reflecția și Refracția.</li>
                                <li>&#x2022; Lentile, Oglinzi și Interferență.</li>
                            </ul>
                            <a href="https://www.khanacademy.org/science/physics/waves-and-optics" target="_blank" class="btn btn-custom-green mt-auto">Află Mai Multe</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm rounded-3 p-4 d-flex flex-column">
                            <h3 class="card-title h4 fw-bold mb-3 text-info">Electricitate și Magnetism</h3>
                            <p class="card-text text-muted mb-3 flex-grow-1">Explorează relația dintre câmpurile electrice și magnetice, care sunt două fațete ale unei singure forțe fundamentale: electromagnetismul.</p>
                            <ul class="list-unstyled text-dark mb-4 small">
                                <li>&#x2022; Sarcină Electrică și Câmpuri.</li>
                                <li>&#x2022; Tensiune, Curent și Rezistență.</li>
                                <li>&#x2022; Circuite de Curent Continuu și Alternativ.</li>
                                <li>&#x2022; Câmpuri și Forțe Magnetice.</li>
                                <li>&#x2022; Inducția Electromagnetică.</li>
                            </ul>
                            <a href="https://www.khanacademy.org/science/physics/electricity-and-magnetism" target="_blank" class="btn btn-custom-purple mt-auto">Află Mai Multe</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm rounded-3 p-4 d-flex flex-column">
                            <h3 class="card-title h4 fw-bold mb-3 text-danger">Fizica Modernă</h3>
                            <p class="card-text text-muted mb-3 flex-grow-1">Pătrunde în lumile contraintuitive ale foarte micului (mecanica cuantică) și ale foarte rapidului (relativitatea), care au revoluționat înțelegerea noastră despre univers.</p>
                            <ul class="list-unstyled text-dark mb-4 small">
                                <li>&#x2022; Relativitatea Specială.</li>
                                <li>&#x2022; Dualitatea Undă-Particulă.</li>
                                <li>&#x2022; Structura și Modelele Atomice.</li>
                                <li>&#x2022; Introducere în Mecanica Cuantică.</li>
                                <li>&#x2022; Fizica Nucleară.</li>
                            </ul>
                            <a href="https://www.khanacademy.org/science/physics/quantum-physics" target="_blank" class="btn btn-custom-red mt-auto">Află Mai Multe</a>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm rounded-3 p-4 d-flex flex-column">
                            <h3 class="card-title h4 fw-bold mb-3 text-secondary">Abilități și Instrumente Cheie</h3>
                            <p class="card-text text-muted mb-3 flex-grow-1">Fizica nu este doar despre concepte; este un mod de gândire. Dezvoltarea acestor abilități este crucială pentru succes și aplicarea cunoștințelor de fizică.</p>
                            <ul class="list-unstyled text-dark mb-4 small">
                                <li>&#x2022; Modelare Matematică.</li>
                                <li>&#x2022; Strategii de Rezolvare a Problemelor.</li>
                                <li>&#x2022; Analiza Unităților.</li>
                                <li>&#x2022; Notație Științifică.</li>
                                <li>&#x2022; Proiectarea Experimentală.</li>
                            </ul>
                             <a href="https://www.khanacademy.org/math/algebra-basics/basic-alg-foundations" target="_blank" class="btn btn-custom-yellow mt-auto">Revizuiește Abilitățile Matematice</a>
                        </div>
                    </div>
                 </div>
            </section>

        </main>

        <footer class="text-center mt-5 py-4 border-top">
            <p class="text-muted">Creat ca o resursă de învățare interactivă. Explorare plăcută!</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const ctx = document.getElementById('forcesChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Nucleară Tare', 'Electromagnetică', 'Nucleară Slabă', 'Gravitațională'],
                datasets: [{
                    label: 'Putere Relativă',
                    data: [1, 0.007297, 0.000001, 1e-38],
                    backgroundColor: [
                        'rgba(220, 38, 38, 0.7)', /* Red */
                        'rgba(79, 70, 229, 0.7)', /* Indigo */
                        'rgba(217, 119, 6, 0.7)', /* Orange */
                        'rgba(107, 114, 128, 0.7)' /* Gray */
                    ],
                    borderColor: [
                        'rgba(220, 38, 38, 1)',
                        'rgba(79, 70, 229, 1)',
                        'rgba(217, 119, 6, 1)',
                        'rgba(107, 114, 128, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                let value = context.raw;
                                if (value < 0.0000001) {
                                    label += value.toExponential(2);
                                } else {
                                    label += value.toString();
                                }
                                return label;
                            }
                        }
                    },
                     title: {
                        display: true,
                        text: 'Putere Relativă (Scară Logaritmică)',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    x: {
                        type: 'logarithmic',
                        title: {
                            display: true,
                            text: 'Putere Relativă față de Forța Tare'
                        },
                         min: 1e-40,
                         max: 10
                    },
                    y: {
                        ticks: {
                             font: {
                                size: 14,
                            },
                        }
                    }
                }
            }
        });
    </script>
<?php
include("bacnavigator-footer.php");
?>