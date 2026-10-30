<?php
include __DIR__ . '/includes/header.php';
?>

    <main class="container">
      <!-- Section Titre et Infos -->
      <section class="apropos2">
        <h1 class="apropos-titre">Tarte Tatin</h1>
        <p class="liste-recettes-devel">
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
        <section class="liste-recettes">
          <h2 class="liste-recettes-dev">Ingredients</h2>
          <ul class="liste-recettes-devel">
            <li>1 kg de pommes (reinettes ou boskoop)</li>
            <li>1 pate feuilletee pur beurre</li>
            <li>120 g de beurre demi-sel</li>
            <li>150 g de sucre en poudre</li>
            <li>1 pincee de cannelle (facultatif)</li>
          </ul>
        </section>

        <section class="liste-recettes">
          <h2 class="liste-recettes-dev">Ustensiles</h2>
          <ul class="liste-recettes-devel">
            <li>Moule a tarte Tatin ou poele allant au four (24 cm)</li>
            <li>Couteau d'office et econome</li>
            <li>Spatule en bois</li>
            <li>Rouleau a patisserie</li>
            <li>Plat de service</li>
          </ul>
        </section>
      </div>

      <!-- Section Preparation -->
      <section class="liste-recettes">
        <h2 class="liste-recettes-dev">Préparation</h2>
        <ol class="liste-recettes-devel">
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
        <section class="liste-recettes">
          <h2 class="liste-recettes-dev">Note</h2>
          <div class="rating">
            <span class="stars">★★★★★</span>
            <span class="score">4.5 / 5</span>
          </div>
        </section>

        <section class="liste-recettes">
          <h2 class="liste-recettes-dev">Commentaire</h2>
          <blockquote class="comment">
            <p class="liste-recettes-devel">
              "Le caramel est la clé : surveillez-le bien. Résultat très
              gourmand, parfait avec une cuillère de crème fraîche."
            </p>
            <cite>— Camille, testé en famille</cite>
          </blockquote>
        </section>
      </div>

      <!-- Retour à la liste -->
      <div class="footer-link">
        <a href="#" class="footer-liens">Retour à la liste des recettes</a>
      </div>
    </main>
<?php include __DIR__ . '/includes/footer.php'; ?>