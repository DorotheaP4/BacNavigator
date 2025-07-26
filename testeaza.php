<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BacNavigator - Teste de pe material</title>
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2ecc71;
            --accent: #e74c3c;
            --text: #2c3e50;
            --bg-light: #f5f7fa;
            --bg-white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            
            /* Culori pentru materii */
            --biologie: #27ae60;
            --fizica: #3498db;
            --romana: #e74c3c;
            --istorie: #f39c12;
            --matematica: #9b59b6;
            --chimie: #16a085;
            --informatica: #2980b9;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', 'Roboto', 'Arial', sans-serif;
        }
        
        body {
            background-color: var(--bg-light);
            color: var(--text);
            line-height: 1.6;
        }
        
        header {
            background-color: var(--bg-white);
            box-shadow: var(--shadow);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .logo img {
            width: 40px;
            height: auto;
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .auth-buttons {
            display: flex;
            gap: 1rem;
        }
        
        button {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        .btn-secondary {
            background-color: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
        }
        
        .btn-secondary:hover {
            background-color: rgba(52, 152, 219, 0.1);
        }
        
        /* Hero section */
        
        .hero {
            padding: 4rem 0;
            text-align: center;
            background: linear-gradient(135deg, #3498db 0%, #2ecc71 100%);
            color: white;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        
        .btn-large {
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
        }
        
        /* Secțiune materii */
        
        .section-title {
            text-align: center;
            margin: 3rem 0;
        }
        
        .section-title h2 {
            font-size: 2rem;
            color: var(--text);
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            height: 3px;
            background-color: var(--primary);
        }
        
        .subjects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .subject-card {
            background-color: var(--bg-white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .subject-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            height: 8px;
        }
        
        .card-biologie .card-header {
            background-color: var(--biologie);
        }
        
        .card-fizica .card-header {
            background-color: var(--fizica);
        }
        
        .card-romana .card-header {
            background-color: var(--romana);
        }
        
        .card-istorie .card-header {
            background-color: var(--istorie);
        }
        
        .card-matematica .card-header {
            background-color: var(--matematica);
        }
        
        .card-chimie .card-header {
            background-color: var(--chimie);
        }
        
        .card-informatica .card-header {
            background-color: var(--informatica);
        }
        
        .card-content {
            padding: 1.5rem;
        }
        
        .card-content h3 {
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }
        
        .card-content p {
            color: #7f8c8d;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .card-footer {
            display: flex;
            gap: 0.5rem;
        }
        
        .card-footer button {
            flex: 1;
            font-size: 0.9rem;
        }
        
        /* Secțiunea cum funcționează */
        
        .how-it-works {
            background-color: var(--bg-white);
            padding: 4rem 0;
        }
        
        .steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 1rem;
        }
        
        .step-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(52, 152, 219, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            color: var(--primary);
        }
        
        .step h3 {
            margin-bottom: 0.5rem;
        }
        
        /* Footer */
        
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section {
            flex: 1;
            min-width: 200px;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: white;
        }
        
        .copyright {
            text-align: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #bdc3c7;
        }
        
        /* Subject View */
        .subject-view {
            display: none;
            padding: 2rem 0;
        }
        
        .subject-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }
        
        .subject-header h2 {
            font-size: 1.8rem;
        }
        
        .subject-tabs {
            display: flex;
            margin-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .tab {
            padding: 0.8rem 1.5rem;
            cursor: pointer;
            font-weight: 500;
            border-bottom: 3px solid transparent;
        }
        
        .tab.active {
            border-bottom-color: var(--primary);
            color: var(--primary);
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .lessons-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        .lesson-card {
            background-color: var(--bg-white);
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 1.5rem;
        }
        
        .lesson-card h3 {
            margin-bottom: 0.5rem;
        }
        
        .lesson-card p {
            color: #7f8c8d;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .simulation-container {
            background-color: var(--bg-white);
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 2rem;
        }
        
        .simulation-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .test-container {
            margin-bottom: 2rem;
        }
        
        .question {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .question h4 {
            margin-bottom: 1rem;
        }
        
        .options {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .option {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .option:hover {
            background-color: #edf2f7;
        }
        
        .submit-test {
            margin-top: 1rem;
            text-align: right;
        }
        
        /* Responsiveness */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 0.8rem;
            }
            
            .card-footer {
                flex-direction: column;
            }
            
            .steps {
                flex-direction: column;
            }
        }
        
        /* Mobile Nav */
        .mobile-nav-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text);
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .mobile-nav-toggle {
                display: block;
            }
            
            .nav-links.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background-color: var(--bg-white);
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                padding: 1rem 2rem;
                z-index: 100;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.compat.css" integrity="sha256-ru6hde/8yosp0lQGTaEV6kIpnngqTkn4P2qCQmZ46UM=" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha256-YvdLHPgkqJ8DVUxjjnGVlMMJtNimJ6dYkowFFvp4kKs=" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">


</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="bacnavigator.html"><span>BacNavigator</span></a>
                </div>
                <div class="nav-links">
                    <a href="bacnavigator.html">Acasă</a>
                    <a href="bacnavigator.html#materii">Materii</a>
                    <a href="bacnavigator.html#cum-functioneaza">Cum funcționează</a>
                    <a href="testeaza.php">Testeaza-ma</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Pagina principală -->

        <section id="materii" class="subjects">
            <div class="container p-5 m-5">

<div class="ecran mb-4 p-3 shadow-lg p-3 rounded bg-white" id="start">
<h1>Testeaza-ma!</h1>
<p langen="I help you learn what's essential faster!" langma="Segítek gyorsabban megtanulni a lényeget!" langur="Я допомагаю вам швидше вивчити найважливіше!">Te ajut sa inveti mai repede ce e esential!</p>

<br>
<h3 langen="1. To begin, you need the educational material you want to learn" langma="1. A kezdéshez szükséged van a megtanulandó tananyagra" langur="1. Для початку вам потрібен навчальний матеріал, який ви хочете вивчити">1. Pentru a incepe ai nevoie de materialul didactic pe care vrei sa-l inveti</h3>

<h3 langen="2. Take a picture of a page" langma="2. Készíts egy képet egy oldalról" langur="2. Зробіть фотографію сторінки">2. Faci o poza la o pagina</h3>

<h3 langen="3. I will create tests for you on the spot and help you understand through exercise." langma="3. Azonnal teszteket készítek neked, és segítek megérteni gyakorlás útján." langur="3. Я створю для вас тести на місці та допоможу зрозуміти через вправи.">3. Voi crea pe loc teste pentru tine si te ajut sa intelegi prin exercitiu.</h3>

<br><br>
<a class="btn btn-primary w-50 mx-auto d-block" href="#" onclick="doaction('poza');return false;" langen="Start now" langma="Kezdés most" langur="Почати зараз">Incepe acum</a>

</div>


<div class="ecran mb-4 p-3 shadow-lg p-3 rounded bg-white" id="tema">
<h1>Corecteaza-mi tema!</h1>
<p langen="I help you do your homework correctly!" langma="Segítek helyesen megoldani a házi feladatot!" langur="Я допомагаю вам правильно виконувати домашнє завдання!">Te ajut sa iti face tema corect!</p>

<br>
<h3 langen="1. To begin, you need the homework" langma="1. A kezdéshez szükséged van a házi feladatra" langur="1. Для початку вам потрібно домашнє завдання">1. Pentru a incepe ai nevoie de tema</h3>

<h3 langen="2. Take a picture of a page" langma="2. Készíts egy képet egy oldalról" langur="2. Зробіть фотографію сторінки">2. Faci o poza la tema</h3>

<h3 langen="3. I will give you a grade and what you need to correct." langma="3. Adok neked egy jegyet és amit ki kell javítanod." langur="3. Я поставлю вам оцінку і скажу, що потрібно виправити.">3. Iti voi da o nota si ce trebuie sa corectezi.</h3>

<br><br>
<a class="btn btn-primary w-50 mx-auto d-block" href="#" onclick="doaction('temapoza');return false;" langen="Start now" langma="Kezdés most" langur="Почати зараз">Incepe acum</a>
</div>


<div class="ecran mb-4 p-3 shadow-lg p-3 rounded bg-white" id="learn" style="display:none">
<h1>Invata-ma!</h1>
<p langen="I help you learn what's essential faster!" langma="Segítek gyorsabban megtanulni a lényeget!" langur="Я допомагаю вам швидше вивчити найважливіше!">Te ajut sa inveti ce nu te invata la scoala!</p>

<br>
<h3 langen="1. To begin, you need to now what you want to learn" langma="1. A kezdéshez szükséged van a megtanulandó tananyagra" langur="1. Для початку вам потрібен навчальний матеріал, який ви хочете вивчити">1. Pentru a incepe ai nevoie sa alegi materia</h3>

<br><br>
<a class="btn btn-primary w-50 mx-auto d-block" href="#" onclick="doaction('learn');return false;" langen="Start now" langma="Kezdés most" langur="Почати зараз">Incepe acum</a>
</div>


<div class="ecran mb-2 p-3 shadow-lg p-3 rounded bg-white" id="poza" style="display:none;">
    <div class="mb-3">
    <label for="formFile" class="form-label">
    <h3 langen="2. Take a picture here" langma="2. Készíts itt egy képet" langur="2. Зробіть фотографію тут">2. Fa o poza aici</h3> 
    <a href="#" onclick="doaction('exemplu1');return false;" langen="example 1 (chemistry)" langma="1. példa (kémia)" langur="приклад 1 (хімія)">exemplu 1 (chimie)</a>
    <a href="#" onclick="doaction('exemplu2');return false;" langen="example 2 (lucefarul)" langma="2. példa (luceafarul)" langur="приклад 2 (luceafarul)">exemplu 2 (lucefarul)</a>
    <a href="#" onclick="doaction('exemplu3');return false;" langen="example 3 (biology)" langma="3. példa (biológia)" langur="приклад 3 (біологія)">exemplu 3 (biologie)</a>
    <a href="#" onclick="doaction('exemplu4');return false;" langen="example 4 (physics)" langma="4. példa (fizika)" langur="приклад 4 (фізика)">exemplu 4 (fizica)</a>
    <a href="#" onclick="doaction('exemplu5');return false;" langen="example 5 (history)" langma="5. példa (történelem)" langur="приклад 5 (історія)">exemplu 5 (istorie)</a>
</label>
    <input class="form-control color-primary" type="file" id="formFile" onchange="doaction('getpoza');return false;">
    </div>
    <div class=row>
    <a id="poza_quizz" class="btn btn-primary  w-50 mx-auto d-block" style="display:none;" href="#" onclick="doaction('quizz');return false;" langen="Ready, help me" langma="Kész, segíts nekem" langur="Готово, допоможіть мені">Gata, ajuta-ma</a>
    </div>
    <div class=row>
        <div id="file" class="col-6"><img style="display:none;" id="filepreview" class="img img-responsive" src="#"></div>
        <div id="txt" style="display:none;" class="col-6"></div>
    </div>
</div>

<div class="ecran mb-2 p-3 shadow-lg p-3 rounded bg-white" id="quizz" style="display:none;">
   <div class=row><div class="col-1"><i class="bi bi-person-bounding-box"></i></div>
    <div class=col-11><h5><div id="quizzmesaj" langen="2. I'm thinking...." langma="2. Gondolkodom...." langur="2. Я думаю....">2. Ma gandesc....</div></h5>
   </div></div>

   <a id="quizz_solve" class="btn btn-primary  w-50 mx-auto d-block" style="display:none;" href="#" onclick="doaction('why');return false;" langen="Explain to me" langma="Magyarázd el nekem" langur="Поясніть мені">Explica-mi</a>
   <div id="quizzload" class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
</div>
   <div id="divintrebare" style="display:none;">
        <div class="row p-2">
            <h3 id="question" class="col-12"></h3>
        </div>
        <div class="row p-2 border">
            <span id="okA" class="okansw col-1 bi bi-check-circle-fill"></span>    
            <a id="answera" href="#" onclick="doaction('raspunsa');return false;" class="btn text-start ps-3 col-11"></a>
        </div>
        <div class="row p-2 border">
            <span id="okB" class="okansw col-1 bi bi-check-circle-fill"></span>    
            <a id="answerb" href="#" onclick="doaction('raspunsb');return false;" class="btn text-start ps-3 col-11"></a>
        </div>
        <div class="row p-2 border">
            <span id="okC" class="okansw col-1 bi bi-check-circle-fill"></span>    
            <a id="answerc" href="#" onclick="doaction('raspunsc');return false;" class="btn text-start ps-3 col-11"></a>
        </div>
        <div class="row p-2 border">
            <span id="okD" class="okansw col-1 bi bi-check-circle-fill"></span>    
            <a id="answerd" href="#" onclick="doaction('raspunsd');return false;" class="btn text-start ps-3 col-11"></a>
        </div>
    <div id="correct" style="display:none;" class="w-50 ps-3 col-12"></div>
   </div><!-- divintrebare -->

   <a id="quizz_retry" class="btn btn-primary  w-50 mx-auto d-block" style="display:none;" href="#" onclick="doaction('quizz');return false;" langen="Try again" langma="Próbáld újra" langur="Спробуйте ще раз">Reincearca</a>

</div>


<div class="ecran mb-2 p-3 shadow-lg p-3 rounded bg-white" id="temapoza" style="display:none;">
    <div class="mb-3">

    <div id="temaload" class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
    </div>
    <label for="formFile" class="form-label">
    <h3 langen="2. Take a picture here" langma="2. Készíts itt egy képet" langur="2. Зробіть фотографію тут">2. Fa o poza aici</h3> 
    </label>
    <input class="form-control color-primary" type="file" id="file_tema" onchange="doaction('gettemapoza');return false;">
    </div>
    <div class=row>
    <a id="poza_tema" class="btn btn-primary  w-50 mx-auto d-block" style="display:none" href="#" onclick="doaction('notatema');return false;" langen="Ready, help me" langma="Kész, segíts nekem" langur="Готово, допоможіть мені">Gata, ajuta-ma</a>
    </div>
    <div class=row>
        <div class="col-6"><img style="display:none;" id="temapreview" class="img img-responsive" src="#"></div>

    </div>
</div>


<div class="ecran mb-2 p-3 shadow-lg p-3 rounded bg-white" id="temanota" style="display:none;">
    <div class="mb-3">
        <h1>Raspuns AI Profesor</h1>
        <div id="raspunstema"></div>
    </div>
</div>


<div class="ecran mb-2 p-3 shadow-lg p-3 rounded bg-white" id="learn" style="display:none;">
    <div class="mb-3">

    <div id="learnload" class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
    </div>

        <h1>Alege materia:</h1>
        <div id="learntopics"></div>

        <div id="learnchapter"></div>

    </div>
</div>

            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>BacNavigator</h3>
                    <p>Platformă educațională bazată pe inteligență artificială pentru pregătirea examenului de bacalaureat.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Link-uri rapide</h3>
                    <ul>
                        <li><a href="bacnavigator.html#acasa">Acasă</a></li>
                        <li><a href="bacnavigator.html#materii">Materii</a></li>
                        <li><a href="bacnavigator.html#cum-functioneaza">Cum funcționează</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Materii</h3>
                    <ul>
                        <li><a href="bacnavigator.html#materii">Biologie</a></li>
                        <li><a href="bacnavigator.html#materii">Fizică</a></li>
                        <li><a href="bacnavigator.html#materii">Română</a></li>
                        <li><a href="bacnavigator.html#materii">Istorie</a></li>
                        <li><a href="bacnavigator.html#materii">Matematică</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">

                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 BacNavigator. Toate drepturile rezervate.</p>
            </div>
        </div>
    </footer>


    <script>

var nickname={};
var currentlang='ro';
var language={};
language['ro']=JSON.parse('{'
  +'"pname":"Nume",'
  +'"pdesc":"Descriere",'
  +'"Please check all elements":"Completati toate campurile",'
  +'"id":"ID",'
  +'"ppara":"JSON parametri",'
  +'"cancel":"X",'
  +'"sure?":"Esti sigur(a)?",'
  +'"proj":"Adresa proiect",'
  +'"url":"Adresa"'
  +'}');
language['en']=JSON.parse(`
{
  "pname":"Name",
  "pdesc":"Description",
  "Please check all elements":"Please check form for all errors",
  "id":"ID",
  "ppara":"JSON parameters",
  "cancel":"X",
  "sure?":"Are you sure?",
  "proj":"URL project",
  "url":"URL",
  "Esti sigur(a)?":"Are you sure?",
  "Sterge pagina":"Delete page",
  "Nu am gasit nimic in document. Va rugam sa faceti o poza clara":"I couldn't find anything in the document. Please take a clear picture",
  "Ma gandesc...":"I'm thinking...",
  "Reincearca":"Try again",
  "Bravo, corect!!!!":"Bravo, correct!!!!",
  "Alta intrebare":"Another question",
  "Nope... vrei explicatii?":"Nope... do you want explanations?",
  "M-am blocat... reincearca":"I'm stuck... try again",
  "Nu stiu ce sa zic...":"I don't know what to say..."
  }`
);
language['ma']=JSON.parse(`
{
  "pname":"Név",
  "pdesc":"Leírás",
  "Please check all elements":"Kérjük, ellenőrizze az összes elemet",
  "id":"Azonosító",
  "ppara":"JSON paraméterek",
  "cancel":"X",
  "sure?":"Biztos benne?",
  "proj":"URL projekt",
  "url":"URL",
  "Esti sigur(a)?":"Biztos benne?",
  "Sterge pagina":"Oldal törlése",
  "Nu am gasit nimic in document. Va rugam sa faceti o poza clara":"Nem találtam semmit a dokumentumban. Kérjük, készítsen tiszta képet",
  "Ma gandesc...":"Gondolkodom...",
  "Reincearca":"Próbálja újra",
  "Bravo, corect!!!!":"Bravó, helyes!!!!",
  "Alta intrebare":"Másik kérdés",
  "Nope... vrei explicatii?":"Nem... magyarázatot szeretne?",
  "M-am blocat... reincearca":"Elakadtam... próbálja újra",
  "Nu stiu ce sa zic...":"Nem tudom, mit mondjak..."
  }`
);
language['ur']=JSON.parse(`
{
  "pname":"Ім'я",
  "pdesc":"Опис",
  "Please check all elements":"Будь ласка, перевірте всі елементи",
  "id":"Ідентифікатор",
  "ppara":"JSON параметри",
  "cancel":"X",
  "sure?":"Ви впевнені?",
  "proj":"URL проекту",
  "url":"URL",
  "Esti sigur(a)?":"Ви впевнені?",
  "Sterge pagina":"Видалити сторінку",
  "Nu am gasit nimic in document. Va rugam sa faceti o poza clara":"Я нічого не знайшов y документі. Будь ласка, зробіть чітке фото",
  "Ma gandesc...":"Я думаю...",
  "Reincearca":"Спробуйте ще раз",
  "Bravo, corect!!!!":"Браво, правильно!!!!",
  "Alta intrebare":"Інше питання",
  "Nope... vrei explicatii?":"Ні... хочете пояснень?",
  "M-am blocat... reincearca":"Я застряг... спробуйте ще раз",
  "Nu stiu ce sa zic...":"Не знаю, що сказати..."
}`);
function getLT(str)
{
  if(language[currentlang][str]) return language[currentlang][str];
  return str;
}

function calculateMyProof(el,salveaza)
{
  return '';
}
function IsJsonString(str) {
    try {
        return JSON.parse(str);
    } catch (e) {
    }
    return false;
}
var loadafter;
function processUxFormSubmit(fid,d)
{
  return proccessGetPosResponse(d);
}



function proccessGetPosResponse(d)
{
  $("#loading").hide();
  if(proccessGetPosResponse.tint) {clearInterval(proccessGetPosResponse.tint);proccessGetPosResponse.tint=false;}
  if(proccessGetPosResponse.tout) {clearTimeout(proccessGetPosResponse.tint);proccessGetPosResponse.tout=false;}
  var json=IsJsonString(d);
  if(!json)
  {
    console.log("json invalid");
    return;
  }

    if(json.message)
      if(json.message!="")
      {
        if(json.messlang && json.messlang!="")
          json.message+=getLT(json.messlang);
        $("#mesaj_text").html(json.message);$("#mesaj").show();
      }
      else
      {
        $("#mesaj_text").html('');$("#mesaj").hide();
      }

    switch(json.cod)
    {
      case 0://erorr
        $("#mesaj_text").html('');$("#mesaj").hide();
        alert(json.message);
      break;
      case 1://ok
      break;
      case 2:
        switch(json.module)
        {
        
         default:
            history.pushState({}, json.module, json.module.replace('?ax=','?ix='));
            $.get(json.module,proccessGetPosResponse);
          break;
        }
      break;
    }
    //process json
    switch(json.tip)
    {
      case 'info':
      break;
    }
    if(json.mod)
    {
      for(let i in json.mod)
      {
        if(i=="#mycontainer" && json.mod[i]=="")
        {
          $.get("?ax=ai_home",proccessGetPosResponse);
        }
        else
        $(i).slice(0,1).html(json.mod[i]);
      }
    }

    $("#mycontainer div[dstype]").each(function()
    {
      var toadd='';
      if($(this).attr("newid"))
      {
        toadd='<div id="'+$(this).attr("newid")+'">'+toadd+'</div>';
      }
      $(this).html(toadd);
    });
    if($("#mycontainer div[dstype]").length)
      reloadFormValidators("#mycontainer");

    if(loadafter)
    {
      for(let i in loadafter)
      {
        $(i).html(loadafter[i]);
      }
      loadafter=undefined;
    }

    reloadLinks();


}

function reloadLinks()
{

  $("a.mylink").unbind("click").click(function(){
    if($(this).hasClass("confirm"))
    {
      if(!confirm(getLT("Esit sigur(a)?")))
        return false;
    }
    if($(this).attr("href"))
    {
      $("#mesaj").hide();
      $("#loading").show();
      var iq=$(this).attr("href").indexOf("?");
      if(iq>-1)
      {
        var where=$(this).attr("href").substr(0,iq);
        var paras=$(this).attr("href").substr(iq+1);
        if(paras.substr(0,3)=='ix=' || paras.substr(0,3)=='ax=')
        {
          //I have one
          paras=paras.substr(2);
          var ixlink="?ix"+paras;
          history.pushState({}, '' , ixlink);
          $.get("?ax"+paras,proccessGetPosResponse);
        }
        else
        {
          //go for next
          var warr=where.split('/');
          where=warr[warr.length-1];
          var ixlink="?ix="+where+"&"+paras;
          history.pushState({}, '' , ixlink);
          $.get("?ax="+where+"&"+paras,proccessGetPosResponse);
        }
      }
      else
      {
        history.pushState({}, '', "?ix="+$(this).attr("href"));
        $.get("?ax="+$(this).attr("href"),proccessGetPosResponse);
      }
      return false;
    }
  });
 
  $("a.myform").unbind("click").click(function()
  {
    $("#mesaj").hide();
    openUxForm($(this).attr("fid"),$(this).attr("title"),"",$(this).attr("fbutton"),{});
  });


}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#filepreview')
        .attr('src', e.target.result)
        .show();
        var posvirg=e.target.result.indexOf(",");
        const request = fetch('vision.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'text/json',
          },
          body: JSON.stringify({
            requests: [
              {
                image: {
                  content: e.target.result.substr(posvirg+1),
                },
                features: [
                  {
                    type: 'DOCUMENT_TEXT_DETECTION',
                  },
                ],
                imageContext: {
                  languageHints: ['ro'],
                },
              },
            ],
          }),
        }).then((data)=>data.json()).then((response)=>{
          if(!response.responses || !response.responses[0].textAnnotations)
          {
            $("#txt").text(getLT("Nu am gasit nimic in document. Va rugam sa faceti o poza clara")).show();
            return;
          }
          $("#txt").text(response.responses[0].textAnnotations[0].description).hide();
          $("#poza_quizz").show();
          $("#quizzload").hide();
        });
    };
    reader.readAsDataURL(input.files[0]);
  }
}
var intrebari='';
var lastquizz;
function doaction(act)
{
  switch(act)
  {
    case 'start':
      $("div.ecran").hide();
      $("#start").show();
      $("#tema").show();
      $("#learn").hide();
      break;
    case 'poza':
      $("div.ecran").hide();
      $("#poza").show();
      break;
    case 'temapoza':
      $("div.ecran").hide();
      $("#temaload").hide();
      $("#temapoza").show();
      break;
    case 'learn':
      $("div.ecran").hide();
      $("#learnload").hide();
      $("#learn").show();
      break;
    case 'gettemapoza':
      $("#poza_tema").show();

      var input=document.getElementById("file_tema");
      if (input.files && input.files[0]) {
      var reader = new FileReader();
        reader.onload = function (e) {
          $('#temapreview')
            .attr('src', e.target.result)
            .show();
        };
        reader.readAsDataURL(input.files[0]);
      }
      break;
    case 'getpoza':
      $("#quizzload").show();
      readURL($("#formFile")[0]);
      break;
    case 'exemplu5':
      $("#txt").text("Ștefan cel Mare este considerat o personalitate marcantă a istoriei României, înzestrată cu mari calități de om de stat, diplomat și conducător militar. Aceste calități i-au permis să treacă cu bine peste momentele de criză majoră, generate fie de intervențiile militare ale statelor vecine fie de încercări, din interior sau sprijinite din exteriorul țării, de îndepărtare a sa de la domnie. În timpul domniei sale Moldova atinge apogeul dezvoltării sale statale, cunoscând o perioadă îndelungată de stabilitate internă, prosperitate economică și liniște socială. Pe plan intern și-a bazat regimul pe o nouă clasă conducătoare formată din oameni proveniți preponderent din mica boierime, ridicați la demnități pe baza meritelor militare, loialității față de domn sau a înrudirii apropiate cu acesta. De asemenea a sprijinit foarte mult dezvoltarea răzeșimii prin împroprietăriri colective ale obștilor de răzeși, în special în urma războaielor și bătăliilor purtate, fapt care i-a asigurat loialitatea acestei clase, liniștea socială în țară și forța umană pentru a avea o armată de masă - oastea cea mare.Pe plan extern a reușit să ducă o politică realistă având două mari linii directoare: impunerea sau susținerea unor conducători favorabili în țările vecine mici – Țara Românească și Hanatul Crimeii – și o politică de alianțe care să nu permită nici uneia din marile țări vecine – Imperiul Otoman, Regatul Poloniei și Regatul Ungariei să obțină o poziție hegemonică față de Moldova. A încercat, fără succes, realizarea unui sistem de alianțe internaționale împotriva turcilor, trimițând soli la Papa de la Roma, Veneția, Ungaria, Polonia, Cehia și Persia. ");
      $("#poza_quizz").show();
      doaction('quizz');
      break;
    case 'exemplu1':
      $("#txt").text("Obiectivele acestui domeniu implică în special: studierea materiei la nivel atomic, proprietățile atomilor, modul de formare a legăturilor chimice, formarea compușilor chimici, modul în care anumite substanțe interacționează la nivel molecular și conferă materiei anumite proprietăți generale, precum și modul în care nivelul de interacțiune dintre aceste substanțe poate conduce la crearea altor substanțe prin intermediul unor reacții chimice[9]. În majoritatea studiilor chimiei energia și entropia sunt deosebit de importante. Disciplinele cuprinse în chimie sunt grupate tradițional după tipul de materie studiată sau tipul de studiu. Acestea includ chimia anorganică (studiul materiei anorganice), chimia organică (studiul materiei organice), biochimia (studiul substanțelor găsite în organismele biologice, vii), chimie fizică (studiile legate de energie despre sistemele chimice la scară macromoleculară, moleculară și sub-moleculară), electrochimie, chimia analitică (analiza mostrelor de material pentru a dobândi o înțelegere a compoziției chimice și structurii acestuia) etc. Multe alte discipline specializate au apărut în anii recenți, de exemplu neurochimia - studiul chimic al sistemului nervos. ");
      $("#poza_quizz").show();
      doaction('quizz');
      break;
    case 'exemplu3':
      $("#txt").text("Biologia este știința naturală care se ocupă cu studiul vieții și al tuturor organismelor vii. Ca știință a vieții, biologia studiază organismele din punct de vedere structural, al proceselor chimice, al interacțiilor moleculare, al mecanismelor fiziologice, al dezvoltării și al evoluției.[1] În ciuda complexității acestei științe, există doar câteva concepte simple care stau la baza acesteia, și anume teoria celulară, evoluția, genetica și homeostazia.[2] Astfel, în teoria fundamentală a biologiei spune că celula este unitatea de bază a vieții, gena este unitatea de bază a eredității, iar evoluția este motivul pentru apariția sau extincția speciilor. Organismele vii sunt sisteme termodinamice a căror supraviețuire se bazează pe transformarea continuă a energiei și pe descreșterea entropiei locale, cu scopul menținerii homeostaziei (stării de echilibru intern a unui organism). Termenul a fost creat și introdus în știință in 1802 de către Jean-Baptiste de Lamarck și G. Treviranus[5] și provine din cuvintele grecești βίος / bios, « viață » și λόγος / logos, « cuvânt, discurs, știință ». Cele mai vechi cunoștințe scrise din domeniul biologiei datează de la Aristotel și Teofrast. Dintre personalitățile biologiei mondiale putem aminti pe G.L.L. de Buffon, G. Cuvier, J.H. Fabre, Ernst Haeckel, Jean-Baptiste de Lamarck, Carl Linné, Charles Darwin, G.J. Mendel, Th. Schwann, H. de Vries, Alfred Russel Wallace, A. Weismann. În prezent, este una dintre materiile standard de învățământ în școli și universități de pretutindeni, iar peste un milion de articole sunt publicate anual într-un număr mare de jurnale din domeniul biologiei și medicinei.");
      $("#poza_quizz").show();
      doaction('quizz');
      break;
    case 'exemplu4':
      $("#txt").text("Fizica este poate cea mai importantă știință a naturii deoarece cu ajutorul ei pot fi explicate în principiu orice alte fenomene întâlnite în alte științe ale naturii cum ar fi chimia sau biologia. Limitările sunt legate de incapacitatea noastră de a obține suficient de multe date experimentale, în cazul biologiei, ori de incapacitatea (până acum) sistemelor de calcul de a analiza dinamica moleculelor foarte complexe, în cazul chimiei. Descoperirile în fizică ajung de cele mai multe ori să fie folosite în sectorul tehnologic, și uneori influențează matematica sau filozofia. De exemplu, înțelegerea mai profundă a electromagnetismului a avut drept rezultat răspândirea aparatelor pe bază de curent electric - televizoare, computere, electrocasnice etc.; descoperirile din termodinamică au dus la dezvoltarea transportului motorizat; iar descoperirile din mecanică au dus la dezvoltarea calculului infinitezimal, chimiei cuantice și folosirii unor instrumente precum microscopul electronic în microbiologie. Astăzi, fizica este un subiect vast și foarte dezvoltat. Cercetarea este divizată în patru subdomenii: fizica materiei condensate; fizica atomică, moleculară și optică; fizica energiei înalte; fizica astronomică și astrofizică. Majoritatea fizicienilor se specializează în cercetare teoretică sau experimentală, prima ocupându-se de dezvoltarea noilor teorii, și a doua cu testarea experimentală a teoriilor și descoperirea unor noi fenomene. În ciuda descoperirilor importante din ultimele patru secole, există probleme deschise în fizică care așteaptă a fi rezolvate. De exemplu, cuantificarea gravitației este poate cea mai arzătoare dintre probleme și cu siguranță și cea mai dificilă. Odată cu elucidarea acestei probleme, fizicienii vor avea o imagine mult mai clară despre interacțiile din natură și cu siguranță multe dintre fenomenele și obiectele pe care le întâlnim în astrofizică, de exemplu găurile negre, își vor găsi explicația într-un mod natural. ");
      $("#poza_quizz").show();
      doaction('quizz');
      break;
    case 'exemplu2':
      $("#txt").text(`
A fost odata ca-n povesti,
A fost ca niciodata,
Din rude mari imparatesti,
O prea frumoasa fata.

Si era una la părinti
Si mindra-n toate cele,
Cum e Fecioara intre sfinti
Si luna intre stele.


Cobori în jos, luceafar blind,
Alunecind pe-o raza,
Patrunde-n casa si în gând
Si viata-mi lumineaza!
`
);
      $("#poza_quizz").show();
      doaction('quizz');
      break;
    case 'notatema':
      $("#temaload").show();

      var input=document.getElementById("file_tema");
      var formData = new FormData();
      formData.append("ax", "notatema");
      formData.append("lang",currentlang);
      formData.append("tema", input.files[0]);
      
      var response = fetch("index.php", {
        method: "POST",
        body: formData,
      }).then((response)=>response.json()).then((d)=>{
        console.log(d);
        $("#temaload").hide();
        $("div.ecran").hide();
        $("#temanota").show();
        $("#raspunstema").html(markdown(d.nota));
      });//
      break;
    case 'quizz':
    case 'start':
      $("div.ecran").hide();
      $("#quizz").show();
      $("#quizzmesaj").text(getLT("Ma gandesc...")).show();
      $("#quizz_solve").hide();

      $("#divintrebare").hide();
      $("#quizz_retry").hide();
      $("#quizzload").show();
      //ask ai
      var formData = new FormData();
      formData.append("ax", "quizz");
      formData.append("txt", $("#txt").text());
      formData.append("lang",currentlang);
      formData.append("intrebari",intrebari);

      var response = fetch("index.php", {
        method: "POST",
        body: formData,
      }).then((response)=>response.json()).then((d)=>{
        $("#quizzload").hide();
        if(d.err && d.err!="")
        {
          //console.log(d);
          $("#quizzmesaj").text(d.err);
          $("#quizz_retry").text(getLT("Reincearca")).show();
        }
        else
        {
          //console.log(d);
          $("#quizzmesaj").hide();
          $("#question").text(d.intrebare);
          intrebari+=' '+d.intrebare;
          $("#answera").text('A: '+d.raspunsA);
          $("#answerb").text('B: '+d.raspunsB);
          $("#answerc").text('C: '+d.raspunsC);
          $("#answerd").text('D: '+d.raspunsD);
          $("#correct").text(d.correct);
          $(".okansw").hide();
          $("#divintrebare").show();
          lastquizz=d;
        }
      });//
      break;
    case 'raspunsa':
      $("#ok"+$("#correct").text()).show();
      if($("#correct").text()=="A")
      {
        $("#quizzmesaj").text(getLT("Bravo, corect!!!!")).show();
      }
      else
      {
        $("#quizzmesaj").text("Nu e corect... vrei explicatii?").show();
      }
      $("#quizz_retry").text("Alta intrebare").show();
      $("#quizz_solve").show();
      break;
    case 'raspunsb':
      $("#ok"+$("#correct").text()).show();
      if($("#correct").text()=="B")
      {
        $("#quizzmesaj").text(getLT("Bravo, corect!!!!")).show();
      }
      else
      {
        $("#quizzmesaj").text("Nope... vrei explicatii?").show();
      }
      $("#quizz_retry").text("Alta intrebare").show();
      $("#quizz_solve").show();
      break;
    case 'raspunsc':
      $("#ok"+$("#correct").text()).show();
      if($("#correct").text()=="C")
      {
        $("#quizzmesaj").text(getLT("Bravo, corect!!!!")).show();
      }
      else
      {
        $("#quizzmesaj").text(getLT("Nope... vrei explicatii?")).show();
      }
      $("#quizz_retry").text(getLT("Alta intrebare")).show();
      $("#quizz_solve").show();
      break;
    case 'raspunsd':
      $("#ok"+$("#correct").text()).show();
      if($("#correct").text()=="D")
      {
        $("#quizzmesaj").text(getLT("Bravo, corect!!!!")).show();
      }
      else
      {
        $("#quizzmesaj").text(getLT("Nope... vrei explicatii?")).show();
      }
      $("#quizz_retry").text(getLT("Alta intrebare")).show();
      $("#quizz_solve").show();
      break;
    case 'why':
      //ask ai
      $("#quizzload").show();
      var formData = new FormData();
      formData.append("ax", "quizz_solve");
      formData.append("txt", $("#txt").text());
      formData.append("lang",currentlang);
      formData.append("intrebare",lastquizz.intrebare);
      formData.append("raspunsA",lastquizz.raspunsA);
      formData.append("raspunsB",lastquizz.raspunsB);
      formData.append("raspunsC",lastquizz.raspunsC);
      formData.append("raspunsD",lastquizz.raspunsD);
      formData.append("correct",lastquizz.correct);
      var response = fetch("index.php", {
        method: "POST",
        body: formData,
      }).then((response)=>response.json()).then((d)=>{
        $("#quizzload").hide();
        console.log(d);
        if(!d || d.err && d.err!="")
        {
          //console.log(d);
          if(!d)
           $("#quizzmesaj").text(getLT('M-am blocat... reincearca'));
          else
            $("#quizzmesaj").text(d.err);
        }
        else
        {
          if(!d.explicatii) d.explicatii=getLT("Nu stiu ce sa zic...");
          $("#quizzmesaj").text(d.explicatii).show();
          $("#quizz_solve").hide();
        }
      });//

      break;
    case 'langro':
      currentlang='ro';
      $("[langro]").each(function(){
        if($(this).attr("langro")!="")
          $(this).text($(this).attr("langro"));
      })
      break;
    case 'langen':
      currentlang='en';
      $("[langen]").each(function(){
        if($(this).attr("langen")!="")
        {
          if(!$(this).attr("langro"))
          {
            $(this).attr("langro",$(this).text());
          }
          $(this).text($(this).attr("langen"));
        }
      })
      break;
    case 'langma':
      currentlang='ma';
      $("[langen]").each(function(){
        if($(this).attr("langma")!="")
        {
          if(!$(this).attr("langro"))
          {
            $(this).attr("langro",$(this).text());
          }
          $(this).text($(this).attr("langma"));
        }
      })
      break;
    case 'langur':
      currentlang='ur';
      $("[langur]").each(function(){
        if($(this).attr("langur")!="")
        {
          if(!$(this).attr("langro"))
          {
            $(this).attr("langro",$(this).text());
          }
          $(this).text($(this).attr("langur"));
        }
      })
      break;
    default:
      console.log('nu am '+act);
      break;
  }
}


/**
 * drawdown.js
 * (c) Adam Leggett
 */

function markdown(src) {

var rx_lt = /</g;
var rx_gt = />/g;
var rx_space = /\t|\r|\uf8ff/g;
var rx_escape = /\\([\\\|`*_{}\[\]()#+\-~])/g;
var rx_hr = /^([*\-=_] *){3,}$/gm;
var rx_blockquote = /\n *&gt; *([^]*?)(?=(\n|$){2})/g;
var rx_list = /\n( *)(?:[*\-+]|((\d+)|([a-z])|[A-Z])[.)]) +([^]*?)(?=(\n|$){2})/g;
var rx_listjoin = /<\/(ol|ul)>\n\n<\1>/g;
var rx_highlight = /(^|[^A-Za-z\d\\])(([*_])|(~)|(\^)|(--)|(\+\+)|`)(\2?)([^<]*?)\2\8(?!\2)(?=\W|_|$)/g;
var rx_code = /\n((```|~~~).*\n?([^]*?)\n?\2|((    .*?\n)+))/g;
var rx_link = /((!?)\[(.*?)\]\((.*?)( ".*")?\)|\\([\\`*_{}\[\]()#+\-.!~]))/g;
var rx_table = /\n(( *\|.*?\| *\n)+)/g;
var rx_thead = /^.*\n( *\|( *\:?-+\:?-+\:? *\|)* *\n|)/;
var rx_row = /.*\n/g;
var rx_cell = /\||(.*?[^\\])\|/g;
var rx_heading = /(?=^|>|\n)([>\s]*?)(#{1,6}) (.*?)( #*)? *(?=\n|$)/g;
var rx_para = /(?=^|>|\n)\s*\n+([^<]+?)\n+\s*(?=\n|<|$)/g;
var rx_stash = /-\d+\uf8ff/g;

function replace(rex, fn) {
    src = src.replace(rex, fn);
}

function element(tag, content) {
    return '<' + tag + '>' + content + '</' + tag + '>';
}

function blockquote(src) {
    return src.replace(rx_blockquote, function(all, content) {
        return element('blockquote', blockquote(highlight(content.replace(/^ *&gt; */gm, ''))));
    });
}

function list(src) {
    return src.replace(rx_list, function(all, ind, ol, num, low, content) {
        var entry = element('li', highlight(content.split(
            RegExp('\n ?' + ind + '(?:(?:\\d+|[a-zA-Z])[.)]|[*\\-+]) +', 'g')).map(list).join('</li><li>')));

        return '\n' + (ol
            ? '<ol start="' + (num
                ? ol + '">'
                : parseInt(ol,36) - 9 + '" style="list-style-type:' + (low ? 'low' : 'upp') + 'er-alpha">') + entry + '</ol>'
            : element('ul', entry));
    });
}

function highlight(src) {
    return src.replace(rx_highlight, function(all, _, p1, emp, sub, sup, small, big, p2, content) {
        return _ + element(
              emp ? (p2 ? 'strong' : 'em')
            : sub ? (p2 ? 's' : 'sub')
            : sup ? 'sup'
            : small ? 'small'
            : big ? 'big'
            : 'code',
            highlight(content));
    });
}

function unesc(str) {
    return str.replace(rx_escape, '$1');
}

var stash = [];
var si = 0;

src = '\n' + src + '\n';

replace(rx_lt, '&lt;');
replace(rx_gt, '&gt;');
replace(rx_space, '  ');

// blockquote
src = blockquote(src);

// horizontal rule
replace(rx_hr, '<hr/>');

// list
src = list(src);
replace(rx_listjoin, '');

// code
replace(rx_code, function(all, p1, p2, p3, p4) {
    stash[--si] = element('pre', element('code', p3||p4.replace(/^    /gm, '')));
    return si + '\uf8ff';
});

// link or image
replace(rx_link, function(all, p1, p2, p3, p4, p5, p6) {
    stash[--si] = p4
        ? p2
            ? '<img src="' + p4 + '" alt="' + p3 + '"/>'
            : '<a href="' + p4 + '">' + unesc(highlight(p3)) + '</a>'
        : p6;
    return si + '\uf8ff';
});

// table
replace(rx_table, function(all, table) {
    var sep = table.match(rx_thead)[1];
    return '\n' + element('table',
        table.replace(rx_row, function(row, ri) {
            return row == sep ? '' : element('tr', row.replace(rx_cell, function(all, cell, ci) {
                return ci ? element(sep && !ri ? 'th' : 'td', unesc(highlight(cell || ''))) : ''
            }))
        })
    )
});

// heading
replace(rx_heading, function(all, _, p1, p2) { return _ + element('h' + p1.length, unesc(highlight(p2))) });

// paragraph
replace(rx_para, function(all, content) { return element('p', unesc(highlight(content))) });

// stash
replace(rx_stash, function(all) { return stash[parseInt(all)] });

return src.trim();
};


var progressval=0;
$(document).ready(function(){
  $.ajaxSetup({
    dataType: "text"
  });
  reloadLinks();
  $("nav #mylogout").hide();

  //init nicknames
  $("#loading").hide();
  $("#mesaj").click(function(){$(this).hide();});
  var deviceid='886e1926656a421ad7057044ba056632-1549333246-16829af322061f';
      //$.get("?ax=ai_home",proccessGetPosResponse);
    
  window.onpopstate = history.onpushstate = function(e)
  {
    $.get(window.location.search.replace("ix=","ax="),proccessGetPosResponse);
  };


  setInterval(() => {
    $('#quizzload>div').width(''+progressval+'%');
    $('#temaload>div').width(''+progressval+'%');
    progressval+=1;
    if(progressval>100) progressval=0;
  }, (100));

});
</script>

</body>