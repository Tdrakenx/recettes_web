<?php
// includes/header.php
// Variables attendues (définies dans la page qui inclut ce fichier) :
//   $pageActive      : 'accueil' | 'recettes' | 'a-propos'
//   $pageTitle       : titre de l'onglet
//   $pageDescription : meta description (150 caractères max)

$pageActive      = $pageActive      ?? '';
$pageTitle       = $pageTitle       ?? 'Les Petits Plats – Recettes de cuisine françaises';
$pageDescription = $pageDescription ?? 'Des recettes de cuisine française simples et traditionnelles, expliquées pas à pas.';

function lienActif(string $page, string $pageActive): string
{
    return $page === $pageActive ? 'active' : '';
}

function ariaCurrent(string $page, string $pageActive): string
{
    return $page === $pageActive ? 'aria-current="page"' : '';
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg site-nav" aria-label="Navigation principale">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="assets/images/Logo.svg" alt="Les Petits Plats – retour à l'accueil" class="logo">
          </a>
          <button class="navbar-toggler" type="button"
                  data-bs-toggle="collapse" data-bs-target="#menu-principal"
                  aria-controls="menu-principal" aria-expanded="false"
                  aria-label="Ouvrir le menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menu-principal">
            <ul class="navbar-nav nav-droite">
              <li class="nav-item">
                <a class="nav-link <?= lienActif('accueil', $pageActive) ?>" href="index.php" <?= ariaCurrent('accueil', $pageActive) ?>>Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= lienActif('recettes', $pageActive) ?>" href="recettes.php" <?= ariaCurrent('recettes', $pageActive) ?>>Recettes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= lienActif('a-propos', $pageActive) ?>" href="a-propos.php" <?= ariaCurrent('a-propos', $pageActive) ?>>À propos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>