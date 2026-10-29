<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Les Petits Plats - Tarte Tatin</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- En-tête / Navigation -->
    <header>
      <div class="logo">Les Petits Plats</div>
      <nav>
        <a href="#">Accueil</a>
        <a href="#" class="active">Recettes</a>
        <a href="#">À propos</a>
      </nav>
    </header>

    <main class="container">
      <!-- Section Titre et Infos -->
      <section class="recipe-header">
        <h1>Tarte Tatin</h1>
        <p class="description">
          Née dans l'Hôtel Tatin à Lamotte-Beuvron, cette tarte renversée aux
          pommes caramélisées est un grand classique français.
        </p>
        <div class="meta-info">
          <span><strong>Préparation :</strong> 30 min</span>
          <span><strong>Cuisson :</strong> 45 min</span>
          <span><strong>Pour 6 personnes</strong></span>
        </div>
      </section>

      <!-- Section Image / Carousel fictif -->
      <section class="carousel-placeholder">
        <button class="arrow left"></button>
        <div class="carousel-content">
          <p>Tarte Tatin – photo 1</p>
          <button class="btn-action">La tarte demoulee</button>
        </div>
        <button class="arrow right"></button>
        <div class="dots">
          <span class="dot active"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </section>

      <!-- Section Ingredients & Ustensiles (Cote a cote) -->
      <div class="grid-2-columns">
        <section class="card">
          <h2>Ingredients</h2>
          <ul>
            <li>1 kg de pommes (reinettes ou boskoop)</li>
            <li>1 pate feuilletee pur beurre</li>
            <li>120 g de beurre demi-sel</li>
            <li>150 g de sucre en poudre</li>
            <li>1 pincee de cannelle (facultatif)</li>
          </ul>
        </section>

        <section class="card">
          <h2>Ustensiles</h2>
          <ul>
            <li>Moule a tarte Tatin ou poele allant au four (24 cm)</li>
            <li>Couteau d'office et econome</li>
            <li>Spatule en bois</li>
            <li>Rouleau a patisserie</li>
            <li>Plat de service</li>
          </ul>
        </section>
      </div>

      <!-- Section Preparation -->
      <section class="card preparation">
        <h2>Préparation</h2>
        <ol>
          <li>
            Préchauffez le four à 180 °C. Épluchez les pommes, coupez-les en
            quartiers et retirez le cœur.
          </li>
          <li>
            Dans le moule, faites fondre le beurre avec le sucre à feu moyen
            jusqu'à obtenir un caramel ambré.
          </li>
          <li>
            Disposez les quartiers de pommes serrés, côté arrondi vers le fond.
            Laissez cuire 10 minutes sur le feu.
          </li>
          <li>
            Étalez la pâte, découpez un disque un peu plus large que le moule et
            posez-le sur les pommes en rentrant les bords.
          </li>
          <li>
            Enfournez 35 à 40 minutes, jusqu'à ce que la pâte soit bien dorée.
          </li>
          <li>
            Laissez tiédir 10 minutes, puis retournez la tarte sur le plat de
            service. Servez tiède.
          </li>
        </ol>
      </section>

      <!-- Section Note & Commentaire -->
      <div class="grid-2-columns">
        <section class="card">
          <h2>Note</h2>
          <div class="rating">
            <span class="stars">★★★★★</span>
            <span class="score">4.5 / 5</span>
          </div>
        </section>

        <section class="card">
          <h2>Commentaire</h2>
          <blockquote class="comment">
            <p>
              "Le caramel est la clé : surveillez-le bien. Résultat très
              gourmand, parfait avec une cuillère de crème fraîche."
            </p>
            <cite>— Camille, testé en famille</cite>
          </blockquote>
        </section>
      </div>

      <!-- Retour à la liste -->
      <div class="footer-link">
        <a href="#"> &larr ; Retour à la liste des recettes</a>
      </div>
    </main>
  </body>
</html>