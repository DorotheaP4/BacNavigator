<!DOCTYPE html><html lang="ro"><head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>BacNavigator - Lectii</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['Crimson Text', 'serif'],
                        'sans': ['Inter', 'sans-serif']
                    },
                    colors: {
                        'sage': '#8B9A8B',
                        'clay': '#B8A082',
                        'stone': '#6B7280',
                        'cream': '#F9F7F3',
                        'charcoal': '#374151'
                    }
                }
            }
        }
    </script>
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
            
            /* Culoarea actuală a materiei (setată dinamic) */
            --current-subject: var(--biologie);
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
        
        .btn-subject {
            background-color: var(--current-subject);
            color: white;
        }
        
        .btn-subject:hover {
            opacity: 0.9;
        }
        
        .subject-header {
            background-color: var(--current-subject);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        
        .subject-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        .subject-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 800px;
        }
        
        .breadcrumbs {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .breadcrumbs a {
            color: var(--text);
            text-decoration: none;
            font-size: 0.9rem;
        }
        
        .breadcrumbs .separator {
            color: #95a5a6;
        }
        
        .breadcrumbs .current {
            color: var(--current-subject);
            font-weight: 500;
        }
        
        .lessons-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2rem;
        }
        
        .sidebar {
            background-color: var(--bg-white);
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 1.5rem;
            position: sticky;
            top: 90px;
            height: fit-content;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
        }
        
        .category-title {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--current-subject);
            font-weight: 600;
            color: var(--current-subject);
        }
        
        .chapters-list {
            list-style: none;
        }
        
        .chapter {
            margin-bottom: 1rem;
        }
        
        .chapter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            padding: 0.5rem 0;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .chapter-header h3 {
            font-size: 1rem;
            font-weight: 600;
        }
        
        .chapter-toggle {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }
        
        .chapter.active .chapter-toggle {
            transform: rotate(180deg);
        }
        
        .chapter-lessons {
            list-style: none;
            padding-left: 1rem;
            margin-top: 0.5rem;
            display: none;
        }
        
        .chapter.active .chapter-lessons {
            display: block;
        }
        
        .chapter-lesson {
            padding: 0.5rem;
            margin-bottom: 0.3rem;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            color: var(--text);
        }
        
        .chapter-lesson:hover {
            background-color: #f5f7fa;
        }
        
        .chapter-lesson.active {
            background-color: rgba(39, 174, 96, 0.1);
            color: var(--current-subject);
            font-weight: 500;
        }
        
        .main-content {
            background-color: var(--bg-white);
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 2rem;
        }
        
        .lesson-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .lesson-title h2 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }
        
        .lesson-meta {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: #7f8c8d;
        }
        
        .lesson-meta span {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        
        .lesson-content {
            margin-bottom: 3rem;
        }
        
        .lesson-content h3 {
            font-size: 1.5rem;
            margin: 1.5rem 0 1rem;
        }
        
        .lesson-content p {
            margin-bottom: 1rem;
            line-height: 1.7;
        }
        
        .lesson-content img {
            max-width: 100%;
            border-radius: 8px;
            margin: 1.5rem 0;
        }
        
        .lesson-content ul, .lesson-content ol {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
        }
        
        .lesson-content li {
            margin-bottom: 0.5rem;
        }
        
        .info-box {
            background-color: rgba(52, 152, 219, 0.1);
            border-left: 4px solid var(--primary);
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 0 4px 4px 0;
        }
        
        .warning-box {
            background-color: rgba(243, 156, 18, 0.1);
            border-left: 4px solid #f39c12;
            padding: 1rem;
            margin: 1.5rem 0;
            border-radius: 0 4px 4px 0;
        }
        
        .quiz-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 2rem 0;
        }
        
        .quiz-container h3 {
            margin-top: 0;
        }
        
        .question {
            margin-bottom: 1.5rem;
        }
        
        .options {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-top: 0.5rem;
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
        
        .lesson-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 2rem;
            border-top: 1px solid #ecf0f1;
        }
        
        .lesson-navigation {
            display: flex;
            gap: 1rem;
        }
        
        .lesson-navigation a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }
        
        .resources-list {
            margin-top: 1rem;
        }
        
        .resource-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .resource-item:hover {
            background-color: #f5f7fa;
        }
        
        .resource-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ecf0f1;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        
        .resource-pdf {
            background-color: rgba(231, 76, 60, 0.1);
            color: #e74c3c;
        }
        
        .resource-video {
            background-color: rgba(52, 152, 219, 0.1);
            color: #3498db;
        }
        
        .resource-quiz {
            background-color: rgba(46, 204, 113, 0.1);
            color: #2ecc71;
        }
        
        /* Test la final de lectie */
        .test-section {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
            border: 1px solid #e0e0e0;
        }
        
        .test-section h3 {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        
        .test-section .btn-primary {
            margin-top: 1rem;
        }
        
        /* Responsivitatea */
        @media (max-width: 992px) {
            .lessons-layout {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                position: static;
                margin-bottom: 2rem;
                max-height: none;
            }
            
            .lesson-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .subject-header h1 {
                font-size: 2rem;
            }
            
            .lesson-footer {
                flex-direction: column;
                gap: 1rem;
            }
            
            .lesson-navigation {
                width: 100%;
                justify-content: space-between;
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

</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    
                    <a href="https://aiteste.ro/bacnavigator.html"><span>BacNavigator</span></a>
                </div>
                <div class="nav-links">
                    <a href="bacnavigator.html">Acasă</a>
                    <a href="bacnavigator.html#materii">Materii</a>
                    <a href="bacnavigator.html#cumfunctioneaza">Cum funcționează</a>
                </div>
            </nav>
        </div>
    </header>
