import Card from "./Card.js";

export default class Memory {
  constructor() {
    this.canvasSize = 320;
    this.images = ["memory.png", "card.png", "text.png", "popup.png"];
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
      let newIdCards = Math.floor(Math.random() * 52);
      if (!ids.includes(newIdCards)) {
        ids.push(newIdCards);
        this.cards.push(new Card(newIdCards), new this.cards(newIdCards));
      }
    }
    this.cards = this.cards.sort(() => Math.random() - 0.5);
  }
  isGameOver() {
    return this.cards.length === this.found.length || this.score === 0;
  }
  getPositionCard() {}
  selectCard() {}
  checkPair() {}
  render() {}
  drawCards() {}
  drawScore() {}
  drawPopup() {}
  handleLoaded() {
    this.newParty();
  }
  handleClick() {}
  clicReplay() {}
  clicCard() {}
}
