<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BibDeQuiz')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #0B1732; border-bottom: 2px solid #dee2e6;">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('welcome') }}" style="color: #FFF; font-size: 1.5rem;">
            <img src="{{ asset('build/assets/quizz.png') }}" alt="BibDeQuiz Logo" style="height: 40px; margin-right: 10px;"> <!-- Remplacez le chemin si nécessaire -->
                BibDeQuiz
            </a>
            <div class="d-flex align-items-center">
                @auth
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2" style="border: 2px solid #FFF;">Connexion</a>
                    <a href="{{ route('register') }}" class="btn" style="background-color: #FFF; color: #16425b;">Inscription</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
