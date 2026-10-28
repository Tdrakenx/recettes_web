<?php
$pageActive      = 'recettes';
$pageTitle       = 'Nos recettes – Les Petits Plats';
$pageDescription = 'Toutes les recettes du site, du plat principal au dessert : ingrédients, ustensiles et préparation pas à pas.';

// Une recette = un bloc. Pour en ajouter une, copie un bloc et change les valeurs.
// Si le fichier image n'existe pas, un bloc coloré avec le titre s'affiche à la place.
$recettes = [
    [
        'slug'        => 'tarte-tatin',
        'titre'       => 'Tarte Tatin',
        'categorie'   => 'Dessert',
        'duree'       => '1 h 15',
        'personnes'   => 6,
        'description' => 'Pommes caramélisées sous une pâte feuilletée dorée, servie renversée et tiède.',
        'image'       => 'assets/images/tarte-tatin.jpg',
    ],
    [
        'slug'        => 'ratatouille',
        'titre'       => 'Ratatouille',
        'categorie'   => 'Plat',
        'duree'       => '1 h 30',
        'personnes'   => 4,
        'description' => 'Aubergines, courgettes, poivrons et tomates mijotés doucement avec du thym.',
        'image'       => 'assets/images/ratatouille.jpg',
    ],
];

include __DIR__ . '/includes/header.php';
?>

    <main class="page-clair">
      <div class="container">
        <h1 class="page-titre">Nos recettes</h1>
        <p class="page-intro">Toutes les recettes du site, du plat principal au dessert.</p>

        <div class="row g-3">
          <?php foreach ($recettes as $r): ?>
            <?php
              $aImage = !empty($r['image']) && file_exists(__DIR__ . '/' . $r['image']);
              $pers   = $r['personnes'] . ' personne' . ($r['personnes'] > 1 ? 's' : '');
            ?>
            <div class="col-md-6 col-lg-4">
              <article class="recette-carte">
                <?php if ($aImage): ?>
                  <img src="<?= htmlspecialchars($r['image']) ?>"
                       alt="<?= htmlspecialchars($r['titre']) ?>"
                       class="recette-image" loading="lazy">
                <?php else: ?>
                  <div class="recette-visuel" aria-hidden="true"><?= htmlspecialchars($r['titre']) ?></div>
                <?php endif; ?>
                <div class="recette-corps">
                  <h2 class="recette-titre"><?= htmlspecialchars($r['titre']) ?></h2>
                  <p class="recette-meta"><?= htmlspecialchars($r['categorie']) ?> · <?= htmlspecialchars($r['duree']) ?> · <?= htmlspecialchars($pers) ?></p>
                  <p class="recette-texte"><?= htmlspecialchars($r['description']) ?></p>
                  <a class="bouton" href="recette.php?slug=<?= urlencode($r['slug']) ?>">Voir la recette</a>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>