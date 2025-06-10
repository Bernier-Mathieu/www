let config = {
  canvasSize: 320,
  nbCards: 32,
  scoreInitial: 50,
  cardSize: { width: 32, height: 48 },
  imageList: ["memory.png", "cards.png", "text.png", "popup.png"],
};

let app = {
  canvas: document.querySelector("#app"),
  score: 0,
  images: {},
};

app.canvas.width = config.canvasSize;
app.canvas.height = config.canvasSize;
app.context = app.canvas.getContext("2d");
app.context.imageSmoothingEnabled = false;
app.canvas.onclick = clicCanvas;
window.onresize = resizeCanvas;
window.onload = loadImages;
resizeCanvas();

function resizeCanvas() {
  const body = document.querySelector("body");
  const scale = Math.min(
    body.clientHeight / app.canvas.height,
    body.clientWidth / app.canvas.width
  );
  app.canvas.style.transform = "scale(" + scale + ")";
}

function allImagesLoaded() {
  let lenght = 0;
  for (let i in app.images) {
    lenght++;
  }
  return config.imageList.length === lenght;
}

function saveImage(nameComplet, img) {
  const name = nameComplet.split(".");
  app.images[name[0]] = img;
  console.log(app.images);
  if (allImagesLoaded()) {
    newParty();
  }
}

function loadImages() {
  for (let imgName of config.imageList) {
    const img = new Image();
    img.onload = () => saveImage(imgName, img);
    img.src = "./images/" + imgName;
  }
}

function clicCanvas(event) {
  if (event.target !== app.canvas) return;
  event.preventDefault();
  let x = event.offsetX;
  let y = event.offsetY;

  if (clicReplay(x, y)) {
    newParty();
    return;
  }
  let indexCard = clicCard(x, y);
  if (indexCard !== false) {
    selectCard(indexCard);
  }
}
function clicReplay(x, y) {
  if (app.score === 0 || app.cards.length === app.idCardsFound.length) {
    if (x >= 124 && x <= 124 + 72 && y >= 235 && x <= 235 + 16) {
      return true;
    }
  } else {
    if (x >= 279 && x <= 279 + 26 && y >= 15 && y <= 15 + 26) {
      return true;
    }
  }
  return false;
}

function clicCard(x, y) {
  const w = config.cardSize.width;
  const h = config.cardSize.height;

  for (index in app.cards) {
    let cardX = 18 + 36 * (index % 8);
    let cardY = 95 + 52 * Math.floor(index / 8);
    if (x >= cardX && x <= cardX + w && y >= cardY && y <= cardY + h) {
      return index;
    }
  }
  return false;
}

function selectCard(indexCard) {
  if (
    app.score <= 0 ||
    app.idCardsSelected.includes(indexCard) ||
    app.idCardsFound.includes(indexCard)
  )
    return;
  app.idCardsSelected.push(indexCard);
  app.score--;
  checkPair();
  render();
}

function checkPair() {
  if (app.idCardsSelected.length > 2) {
    app.idCardsSelected.splice(0, 2);
  }
  if (app.idCardsSelected.length === 2) {
    let idCard1 = app.cards[app.idCardsSelected[0]];
    let idCard2 = app.cards[app.idCardsSelected[1]];
    if (idCard1 === idCard2) {
      app.idCardsFound.push(app.idCardsSelected[0], app.idCardsSelected[1]);
      app.idCardsSelected = [];
      app.score += 5;
    }
  }
}

function newParty() {
  app.score = config.scoreInitial;
  app.cards = [];
  app.idCardsSelected = [];
  app.idCardsFound = [];

  while (app.cards.length < config.nbCards) {
    let newIdCards = Math.floor(Math.random() * 52);
    if (app.cards.indexOf(newIdCards) < 0) {
      app.cards.push(newIdCards, newIdCards);
    }
  }
  app.cards = app.cards.sort(() => Math.random() - 0.5);
  render();
}

function render() {
  app.context.drawImage(
    app.images["memory"],
    0,
    0,
    app.canvas.width,
    app.canvas.height
  );

  drawCards();
  drawScore();
  drawPopup();
}

function drawCards() {
  const w = config.cardSize.width;
  const h = config.cardSize.height;

  for (let index in app.cards) {
    let x = 18 + 36 * (index % 8);
    let y = 95 + 52 * Math.floor(index / 8);
    let id = app.cards[index];
    let imgX = w * (id % 13);
    let imgY = h * Math.floor(id / 13);
    if (
      app.idCardsSelected.includes(index) ||
      app.idCardsFound.includes(index)
    ) {
      app.context.drawImage(app.images["cards"], imgX, imgY, w, h, x, y, w, h);
    } else {
      app.context.drawImage(app.images["cards"], 0, 192, w, h, x, y, w, h);
    }
  }
}
function drawScore() {
  let scoreText = app.score.toString();
  let scoreWidth = scoreText.length * 7 + 1;
  let x = 77 - scoreWidth;
  let y = 22;

  const img = app.images["text"];
  for (let index in scoreText) {
    let char = scoreText[index];
    app.context.drawImage(
      img,
      parseInt(char) * 8,
      5,
      8,
      12,
      x + index * 7,
      y,
      8,
      12
    );
  }
}
function drawPopup() {
  let x = 89;
  let y = 146;
  const img = app.images["popup"];

  if (app.score === 0) {
    app.context.drawImage(img, 0, 106, 142, 106, x, y, 142, 106);
  } else if (app.cards.length === app.idCardsFound.length) {
    app.context.drawImage(img, 0, 0, 142, 106, x, y, 142, 106);
    fetch("../Back/Gain.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "score=" + encodeURIComponent(app.score) + "&user=" + encodeURIComponent(userSession) + "&Game=" + encodeURIComponent(1),
    });
  }
}
