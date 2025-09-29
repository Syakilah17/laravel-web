<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (using CDN) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <style>
            body {
                padding-top: 56px; /* Space for fixed navbar */
                background-color: #f8f9fa; /* Background color */
            }

            .jumbotron {
                background-color: #007bff;
                color: white;
                padding: 80px 20px;
                margin-bottom: 0;
            }

            .jumbotron h1 {
                font-size: 3rem;
                font-weight: bold;
            }

            .jumbotron p {
                font-size: 1.2rem;
            }

            .feature-boxes {
                display: flex;
                justify-content: space-around;
                gap: 20px;
                margin-top: 40px;
                flex-wrap: wrap;
            }

            .feature-box {
                background-color: white;
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
                flex-basis: 22%;
                margin-bottom: 30px;
                transition: transform 0.3s ease-in-out;
            }

            .feature-box:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            }

            .feature-box i {
                font-size: 40px;
                color: #007bff;
            }

            .feature-box h3 {
                margin-top: 20px;
                font-size: 1.5rem;
            }

            footer {
                background-color: #343a40;
                color: white;
                padding: 30px 20px;
                text-align: center;
            }

            .navbar-nav .nav-link {
                transition: color 0.3s ease;
            }

            .navbar-nav .nav-link:hover {
                color: #007bff;
            }

            .hero-section {
                background: #e9ecef;
                padding: 40px 20px;
                margin-bottom: 20px;
                text-align: center;
                border-bottom: 1px solid #dee2e6;
            }

            @media (max-width: 768px) {
                .feature-boxes {
                    flex-direction: column;
                    align-items: center;
                }
                .feature-box {
                    flex-basis: 80%;
                }
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1 class="display-6 mb-2">{{$username}}</h1>
                <p class="lead mb-0">{{$last_login}}</p>
            </div>
        </section>

        <!-- Jumbotron -->
        <header class="jumbotron text-center">
            <h1>A warm welcome!</h1>
            <p>Bootstrap utility classes are used to create this jumbotron since the old component has been removed from the framework. Why create custom CSS when you can use utilities?</p>
            <a class="btn btn-light btn-lg" href="#services">Call to action</a>
        </header>

        <!-- Feature Boxes -->
        <section class="feature-boxes">
            <div class="feature-box">
                <i class="bi bi-layout-text-window-reverse"></i>
                <h3>Fresh new layout</h3>
                <p>With Bootstrap 5, we’ve created a fresh new layout for this template!</p>
            </div>
            <div class="feature-box">
                <i class="bi bi-download"></i>
                <h3>Free to download</h3>
                <p>As always, Start Bootstrap has a powerful collection of free templates.</p>
            </div>
            <div class="feature-box">
                <i class="bi bi-box"></i>
                <h3>Jumbotron hero header</h3>
                <p>The heroic part of this template is the jumbotron hero header!</p>
            </div>
            <div class="feature-box">
                <i class="bi bi-code-slash"></i>
                <h3>Simple clean code</h3>
                <p>We keep our dependencies up to date and squash bugs as they come!</p>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>&copy; Your Website <span id="year"></span></p>
            </div>
        </footer>

        <!-- Bootstrap JS (using CDN)-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>
    </body>
</html>
