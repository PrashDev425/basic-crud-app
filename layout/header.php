<?php require_once '../../config.php' ;?>
<!DOCTYPE html>
<html>
    
<head>
    <title>Basic CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <base href="<?php echo BASE_URL ?>">
</head>

<body class="container-fluid">
    <header>
        <nav>
            <ul>
                <li><a href="controller/dashboard/">Dashboard</a></li>
                <li><a href="controller/student/">Student</a></li>
            </ul>
            <ul>
                <li><strong>Basic CRUD</strong></li>
            </ul>
            <li>
                <details class="dropdown">
                    <summary>Theme</summary>
                    <ul dir="rtl">
                        <li><a href="#" data-theme="light">Light</a></li>
                        <li><a href="#" data-theme="dark">Dark</a></li>
                    </ul>
                </details>
            </li>
        </nav>

        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const root = document.documentElement;
            const themeLinks = document.querySelectorAll('[data-theme]');
            const savedTheme = localStorage.getItem('theme');

            /**
             * Apply a theme to the document and save it in localStorage
             * @param {string} theme - The theme name ('light' | 'dark' | etc.)
             */
            const applyTheme = (theme) => {
                root.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
            };

            // Initialize theme: use saved theme or system preference
            if (savedTheme) {
                applyTheme(savedTheme);
            } else {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                applyTheme(prefersDark ? 'dark' : 'light');
            }

            // Add click event listeners to theme buttons/links
            themeLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const selectedTheme = link.dataset.theme; // shorthand for getAttribute('data-theme')
                    if (selectedTheme) {
                        applyTheme(selectedTheme);
                    }
                });
            });
        });
        </script>
    </header>
