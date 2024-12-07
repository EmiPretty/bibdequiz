<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur BibDeQuiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .btn-hover {
            transition: all 0.3s ease-in-out;
        }

        .btn-hover-outline {
            border: 2px solid #fff;
            color: #fff;
            background: none;
        }

        .btn-hover-outline:hover {
            background-color: #fff;
            color: #0B1732;
        }

        .btn-hover-filled {
            background-color: #fff;
            color: #16425b;
        }

        .btn-hover-filled:hover {
            background-color: #0B1732;
            border: 1px solid #edf2fb;
            color: #edf2fb;
        }

        .btn-hover-alt {
            background-color: #edf2fb;
            color: #0B1732;
        }

        .btn-hover-alt:hover {
            background-color: #0B1732;
            border: 1px solid #edf2fb;
            color: #edf2fb;
        }
    </style>
</head>
<body style="font-family: 'Raleway', sans-serif; background-color: #f8f9fa; color: #333;">

<nav class="navbar navbar-expand-lg" style="background-color: #0B1732; border-bottom: 2px solid #dee2e6;">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo et Titre -->
        <div class="d-flex align-items-center">
            <img src="{{ asset('build/assets/quizz.png') }}" alt="BibDeQuiz Logo" style="height: 40px; margin-right: 10px;">
            <a class="navbar-brand fw-bold" href="#" style="color: #FFF; font-size: 1.5rem;">BibDeQuiz</a>
        </div>

        <!-- Boutons -->
        <div>
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2" style="border: 2px solid #FFF;">Connexion</a>
            <a href="{{ route('register') }}" class="btn" style="background-color: #FFF; color: #16425b;">Inscription</a>
        </div>
    </div>
</nav>


    <header class="text-center" style="background-color: #0B1732; color: #fff; padding: 10rem 1rem; width: 100%; margin: 0;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 3.5rem; font-weight: 500; line-height: 1.5;">Bienvenue sur BibDe..</h1>
        <img src="{{ asset('build/assets/quizz.png') }}" alt="BibDeQuiz Logo" style="height: 185px; margin: 20px 0;">
        <p style="font-size: 1.1rem; margin-top: 1rem; margin-bottom: 2rem;">La plateforme idéale pour poser vos questions, explorer des réponses inspirantes et enrichir vos connaissances tout en partageant la culture.</p>
        <a href="{{ route('public.quiz') }}" class="btn btn-hover btn-hover-alt btn-lg" style="padding: 1rem 2rem; font-size: 1.25rem;">Voir les questions & réponses</a>
    </div>
</header>


    <section class="py-5" style="background-color: #edf2fb; margin: 0; max-width: 100%;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="bi bi-puzzle" style="font-size: 2.5rem; color: #0B1732;"></i>
                    <h3 class="mt-3 mb-4" style="font-weight: 500; color: #0B1732;">Créez vos Questions</h3>
                    <p style="font-size: 1rem;">Exprimez votre créativité en posant des questions uniques et engageantes. Personnalisez-les pour enrichir vos discussions et partager vos idées.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bar-chart" style="font-size: 2.5rem; color: #0B1732;"></i>
                    <h3 class="mt-3 mb-4" style="font-weight: 500; color: #0B1732;">Stimulez la Culture</h3>
                    <p style="font-size: 1rem;">Ajoutez des réponses qui inspirent et éducuent. Transformez chaque question en une opportunité d'apprentissage et de découverte culturelle.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people" style="font-size: 2.5rem; color: #0B1732;"></i>
                    <h3 class="mt-3 mb-4" style="font-weight: 500; color: #0B1732;">Connectez et Partagez</h3>
                    <p style="font-size: 1rem;">Faites partie d'une communauté passionnée. Échangez des idées, inspirez-vous mutuellement et contribuez à l'enrichissement collectif.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4" style="background-color: #0B1732; color: #fff;">
        <p class="mb-0" style="font-size: 0.9rem;">© 2024 BibDeQuiz - Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
