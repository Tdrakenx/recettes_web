<?php
$pageActive      = 'a-propos';
$pageTitle       = 'À propos – Les Petits Plats';
$pageDescription = 'Les Petits Plats est un projet de formation au développement web : des recettes françaises présentées de façon claire.';

$photoEquipe = 'assets/images/equipe.jpg';
$aPhoto      = file_exists(__DIR__ . '/' . $photoEquipe);

// Remplace les noms par les vrais prénoms de l'équipe.
$equipe = [
    ['nom' => 'Membre 1', 'role' => 'Structure HTML et navigation'],
    ['nom' => 'Membre 2', 'role' => 'Feuille de style et responsive'],
    ['nom' => 'Membre 3', 'role' => 'Contenus, recettes et photos'],
];

include __DIR__ . '/includes/header.php';
?>

    <main>
      <section class="page-clair" aria-labelledby="apropos-titre">
        <div class="container">
          <div class="row g-4 align-items-start">
            <div class="col-lg-7">
              <h1 id="apropos-titre" class="page-titre">À propos</h1>
              <p class="page-intro">
                Les Petits Plats est un projet réalisé dans le cadre d'une formation
                au développement web.
              </p>

              <h2 class="bloc-titre">Notre objectif</h2>
              <p class="bloc-texte">
                Proposer quelques recettes françaises réelles, présentées de façon claire :
                ingrédients, ustensiles, préparation, photos, note et commentaire.
              </p>

              <h2 class="bloc-titre">Comment le site est construit</h2>
              <p class="bloc-texte">
                Le site est écrit en HTML sémantique et en CSS personnalisé. Bootstrap est
                utilisé uniquement pour la grille, la barre de navigation et le carousel.
              </p>
            </div>
            <div class="col-lg-5">
              <?php if ($aPhoto): ?>
                <img src="<?= htmlspecialchars($photoEquipe) ?>" alt="Photo de l'équipe" class="equipe-image">
              <?php else: ?>
                <div class="equipe-visuel" aria-hidden="true">Notre équipe</div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="page-blanc" aria-labelledby="equipe-titre">
        <div class="container">
          <h2 id="equipe-titre" class="page-titre">L'équipe</h2>
          <div class="row g-3">
            <?php foreach ($equipe as $membre): ?>
              <div class="col-md-4">
                <article class="membre">
                  <h3 class="membre-nom"><?= htmlspecialchars($membre['nom']) ?></h3>
                  <p class="membre-role"><?= htmlspecialchars($membre['role']) ?></p>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>