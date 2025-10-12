import Card from "./Card.js";

export default class Memory {
  constructor() {
    this.canvasSize = 320;
    this.images = ["memory.png", "cards.png", "text.png", "popup.png"];
    this.nbCards = 32;
    this.scoreInitial = 50;
  }

  newParty() {
    this.score = this.scoreInitial;
    this.selected = [];
    this.found = [];
    this.cards = [];
    this.createCards();
    this.render();
  }

  createCards() {
    let ids = [];
    while (this.cards.length < this.nbCards) {
      //On boucle tant qu'il n'y a pas le nombre de cartes attendu dans le tableau (ici 32 cartes)
      let newIdCard = Math.floor(Math.random() * 52); //On choisi une carte parmi les 52 disponibles
      if (!ids.includes(newIdCard)) {
        //Si la carte n'a pas déjà été choisie précédemment
        ids.push(newIdCard); //On ajoute l'id à la liste de vérification
        this.cards.push(new Card(newIdCard), new Card(newIdCard)); //On l'ajoute 2 instances de cartes avec le même id pour faire une paire
      }
    }
    this.cards = this.cards.sort(() => Math.random() - 0.5); // Méthodes pour mélanger les cartes
  }

  isGameOver() {
    // Retourne vrai si toutes les cartes sont trouvée ou si le score est à 0
    return this.cards.length === this.found.length || this.score === 0;
  }

  getPositionCard(index) {
    let x = 18 + 36 * (index % 8);
    let y = 95 + 52 * Math.floor(index / 8);
    return { x: x, y: y };
  }
  selectCard(card) {
    // On ne fait rien si la partie est finie ou si la carte est déjà retournée
    if (this.isGameOver() || card.isFlipped) return;
    card.isFlipped = true; // On retourne la carte
    this.selected.push(card); // Ajoute la carte à celles sélectionnées
    this.score--; // Décrémente le score pour chaque sélection
    this.checkPair(); // Vérifie si une paire a été formée
    this.render(); // Met à jour l'affichage
  }

  checkPair() {
    if (this.selected.length > 2) {
      this.selected[0].isFlipped = false;
      this.selected[1].isFlipped = false;
      this.selected.splice(0, 2);
    }
    if (this.selected.length === 2) {
      if (this.selected[0].id === this.selected[1].id) {
        this.found.push(this.selected[0], this.selected[1]);
        this.selected = [];
        this.score += 5;
      }
    }
  }

  // Méthodes de rendu
  render() {
    APP.context.drawImage(APP.images["memory"], 0, 0);
    this.drawCards(APP.context);
    this.drawScore(APP.context);
    this.drawPopup(APP.context);
  }

  drawCards(ctx) {
    for (let index in this.cards) {
      const card = this.cards[index]; // On crée un raccourcie vers la carte
      const pos = this.getPositionCard(index); // On détermine la position de la carte
      ctx.save(); // On sauvegarde les paramètres context
      ctx.translate(pos.x, pos.y); // On dépace l'origine du context sur la position de la carte
      card.draw(ctx); // On demane à la carte de se dessiner
      ctx.restore(); // On restaure les paramètres du context comme avant la sauvegarde
    }
  }

  drawScore(ctx) {
    let scoreText = this.score.toString();
    let scoreWidth = scoreText.length * 7 + 1;
    let x = 77 - scoreWidth;
    let y = 22;
    const img = APP.images["text"];
    for (let index in scoreText) {
      let char = scoreText[index];
      ctx.drawImage(img, parseInt(char * 8), 5, 8, 12, x + index * 7, y, 8, 12);
    }
  }

  drawPopup(ctx) {
    if (!this.isGameOver()) return; // Si la partie n'est pas terminée, on ne dessine pas la popup
    let x = 89;
    let y = 146;
    const img = APP.images["popup"];
    if (this.score === 0) {
      ctx.drawImage(img, 0, 106, 142, 106, x, y, 142, 106);
    } else {
      ctx.drawImage(img, 0, 0, 142, 106, x, y, 142, 106);
      fetch("../Back/Gain.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      })
        .then((res) => res.text())
        .then((data) => console.log("✅ Réponse du serveur :", data))
        .catch((error) => {
          console.error("❌ Erreur :", error);
          alert("Erreur lors de l'envoi !");
        });
    }
  }

  // Méthodes Evenements
  handleLoaded() {
    this.newParty(); // Quand toutes les images sont chargées, on lance une nouvelle partie
  }

  handleClick(x, y) {
    if (this.clicReplay(x, y)) {
      this.newParty();
      return;
    } // Si clic sur le bouton replay, on lance une nouvelle partie
    let card = this.clicCard(x, y); // On vérifie s'il y a clic sur une carte
    if (card !== false) {
      this.selectCard(card);
      return;
    } // Si oui, on appelle la fonction de selection de carte
  }

  clicReplay(x, y) {
    // Si la partie est terminée et Clic détecté sur le bouton de la popup
    if (
      this.isGameOver() &&
      x >= 124 &&
      x <= 124 + 72 &&
      y >= 235 &&
      y <= 235 + 16
    ) {
      return true;
    }
    // Si la partie est en cours et Clic détecté sur le bouton Replay
    if (
      !this.isGameOver() &&
      x >= 279 &&
      x <= 279 + 26 &&
      y >= 15 &&
      y <= 15 + 26
    ) {
      return true;
    }
    return false;
  }

  clicCard(x, y) {
    for (let index in this.cards) {
      // On passe chaque carte en revue
      const card = this.cards[index]; // On crée un raccourcie vers la carte
      const pos = this.getPositionCard(index); // On détermine la position de la carte
      // Si la zone de clic correspond à celle de la carte, on retourne la carte concernée
      if (
        x >= pos.x &&
        x <= pos.x + card.width &&
        y >= pos.y &&
        y <= pos.y + card.height
      ) {
        return card;
      }
    }
    return false; // Si aucune carte n'est dans la zone de clic, on renvoit false
  }
}
