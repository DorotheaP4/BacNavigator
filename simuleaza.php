<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BacNavigator - Simulator</title>
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

    <div id="test_body">

<?php
$path=$_GET['test'];
$path=substr(str_replace("\\",'',str_replace('/','',$path)),0,30);
include("teste/".$path.".html");

?>
</div>


<script>

function getTextWithInputValues(selector) {
  const element = document.querySelector(selector);
  if (!element) {
    console.error(`Element with selector "${selector}" not found.`);
    return null;
  }

  const clonedElement = element.cloneNode(true);

  const styleElements = clonedElement.querySelectorAll('style');
  styleElements.forEach(style => {
    style.remove();
  });


  const inputElements = clonedElement.querySelectorAll('input');
  const textareaElements = clonedElement.querySelectorAll('textarea');

  inputElements.forEach(input => {

    if (input.type === 'radio' || input.type === 'checkbox') {
      if (input.checked) {
        input.textContent = 'RASPUNS: ' + input.value + "\n";
      } else {
        input.textContent = ''; // Clear text for unchecked boxes

      }
    } else {
      input.textContent = 'RASPUNS: ' + input.value + "\n";
    }

  });

  textareaElements.forEach(textarea => {
    textarea.textContent = 'RASPUNS: '+textarea.value+"\n";
  });

  return clonedElement.textContent;
}

function evaleazaTest()
{
    let text=getTextWithInputValues("#test_body");

    var formData = new FormData();
    formData.append("ax", "simuleaza");
    formData.append("lang",'ro');
    formData.append("simuleaza", "Calculeaza scorul obtinu la urmatorul TEST de mai jos completat de un user in site, urmareste raspunsurile lui si evaluiaza-le obiectiv in functie de punctajul indicat in TEXT, raspunde si cu explicatii complete despre metoda de evaluare:\n\nTEST: \n----\n"+text);
    
    $("#quizzload").show();
    var response = fetch("index.php", {
      method: "POST",
      body: formData,
    }).then((response)=>response.json()).then((d)=>{
      //console.log(d);
      $("#raspunsAI").html(markdown(d.punctaj));
      $("#quizzload").hide();
    });
    
}
</script>

<button class="btn btn-primary" onclick="evaleazaTest();return false;">Am terminat, cat am obtinut?</button>
<br><br>
<div id="quizzload" class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="display: none;">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%;"></div>
</div>
<br><br>
<div id="raspunsAI"></div>

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
  
  setInterval(() => {
    $('#quizzload>div').width(''+progressval+'%');

    progressval+=1;
    if(progressval>100) progressval=0;
  }, (100));

});
</script>

</body>