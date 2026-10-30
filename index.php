<?php
$pageActive      = 'accueil';
$pageTitle       = 'Les Petits Plats – Recettes de cuisine françaises';
$pageDescription = 'Des recettes françaises simples, testées et expliquées étape par étape : ingrédients, ustensiles, préparation et avis.';

include __DIR__ . '/includes/header.php';
?>

    <main>
      <!-- Hero -->
      <section class="hero" aria-labelledby="hero-titre">
        <div class="container">
          <div class="row align-items-center g-5">
            <div class="col-lg-6">
              <h1 id="hero-titre" class="hero-titre">La cuisine de tous les jours, sans prise de tête</h1>
              <p class="hero-texte">
                Des recettes testées et expliquées étape par étape : ingrédients, ustensiles,
                préparation et avis de ceux qui les ont cuisinées.
              </p>
              <a class="btn btn-hero" href="recette1.php">Découvrir les recettes</a>
            </div>
            <div class="col-lg-6">
              <img src="assets/images/accueil.jpg"
                   alt="Plat mijoté servi sur une table en bois"
                   class="hero-image img-fluid"
                   width="640" height="400">
            </div>
          </div>
        </div>
      </section>

      <!-- Notre approche -->
      <section class="approche" aria-labelledby="approche-titre">
        <div class="container">
          <h2 id="approche-titre" class="approche-titre">Notre approche</h2>
          <div class="row g-4 text-center">
            <div class="col-md-4">
              <h3 class="approche-sous-titre">Des recettes authentiques</h3>
              <p>Chaque recette est un classique éprouvé, avec des quantités précises.</p>
            </div>
            <div class="col-md-4">
              <h3 class="approche-sous-titre">Du matériel clair</h3>
              <p>Les ustensiles nécessaires sont listés avant de commencer à cuisiner.</p>
            </div>
            <div class="col-md-4">
              <h3 class="approche-sous-titre">Des avis sincères</h3>
              <p>Chaque page affiche une note et un commentaire pour vous guider.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>