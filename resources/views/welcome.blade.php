<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur BibDeQuiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">BibDeQuiz</a>
            <div>
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Inscription</a>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Bienvenue sur BibDeQuiz</h1>
            <p class="lead">La plateforme idéale pour poser vos questions, explorer des réponses inspirantes et enrichir vos connaissances tout en partageant la culture !</p>
            <a href="{{ route('public.quiz') }}" class="btn btn-lg btn-light mt-3">Voir les questions & réponses</a>
        </div>
    </header>

    <section class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="bi bi-puzzle text-primary fs-1"></i>
                <h3 class="mt-3">Créez vos Questions</h3>
                <p>Exprimez votre créativité en posant des questions uniques et engageantes. Personnalisez-les pour enrichir vos discussions et partager vos idées.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-bar-chart text-primary fs-1"></i>
                <h3 class="mt-3">Stimulez la Culture</h3>
                <p>Ajoutez des réponses qui inspirent et éducuent. Transformez chaque question en une opportunité d'apprentissage et de découverte culturelle.</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-people text-primary fs-1"></i>
                <h3 class="mt-3">Connectez et Partagez</h3>
                <p>Faites partie d'une communauté passionnée. Échangez des idées, inspirez-vous mutuellement et contribuez à l'enrichissement collectif.</p>
            </div>
        </div>
    </div>
</section>

    <footer class="bg-light text-center py-4">
        <p class="mb-0">© 2024 BibDeQuiz - Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
