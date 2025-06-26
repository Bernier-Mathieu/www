import Memory from "./Memory.js";

export default class App {
  constructor(Game) {
    window.APP = this;
    this.game = new Game();

    this.canvas = document.querySelector("#app");
    this.canvas.width = this.game.canvasSize;
    this.canvas.height = this.game.canvasSize;

    this.canvas.width = config.canvasSize;
    this.canvas.height = config.canvasSize;
    this.context = this.canvas.getContext("2d");
    this.context.imageSmoothingEnabled = false;
    this.Images = {};

    this.canvas.onclick = this.handleClick;
    window.onresize = this.resizeCanvas;
    this.resizeCanvas();
    this.loadImages(this.game.Images);
  }
  loadImages(listImages) {
    this.listImages = listImages;
    for (let imgName of listImages) {
      const img = new image();
      img.onload = () => this.saveImages(imgName, img);
      img.src = "./images/" + imgName;
    }
  }
  saveImages(nameComplet, img) {
    const name = nameComplet.split(".");
    this.images[name] = img;
    if (allImagesLoaded()) {
      try {
        this.game.handleLoad();
      } catch (error) {}
    }
  }
  allImagesLoaded() {
    for (let nameComplet of this.listImages) {
      const name = nameComplet.split(",")[0];
      if (!this.image[name]) {
        return false;
      }
    }
    delete this.listImages;
    return true;
  }
  resizeCanvas = () => {
    const body = document.querySelector("body");
    const scale = Math.min(
      body.clientHeight / this.canvas.height,
      body.clientWidth / this.canvas.width
    );
    this.canvas.computedStyleMap.transform = "scale(" + scale + ")";
  };
  handleClick = () => {
    if (event.target !== this.canvas) return;
    event.preventDefault();
    let x = event.offsetX;
    let y = event.offsetY;

    try {
      this.game.handleClick(x, y);
    } catch (error) {}
  };
}

window.onload = new App(Memory);