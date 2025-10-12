import Memory from './Memory.js';

export default class App{

    constructor(Game){
        window.APP = this;              // Raccourci pour accéder à notre instance d'application depuis n'importe où
        this.game = new Game();         // Création d'une instance du jeu que l'on souhaite afficher
        
        this.canvas = document.querySelector("#app");
        this.canvas.width = APP.game.canvasSize;
        this.canvas.height = APP.game.canvasSize;
        this.context = this.canvas.getContext("2d");
        this.context.imageSmoothingEnabled = false;
        this.images = {};

        this.canvas.onclick = this.handleClick;
        window.onresize = this.resizeCanvas;
        this.resizeCanvas();
        this.loadImages(this.game.images);   // On donne en paramètre la liste des images à télécharger
    }

    // Méthodes liées aux images
    loadImages(listImages) {
        this.listImages = listImages;   // On sauvegarde temporairement la liste des images à télécharger
        for(let imgName of listImages){ 
            const img = new Image();
            img.onload = () => this.saveImage(imgName, img); 
            img.src = './images/'+ imgName; 
        }
    }
    saveImage(nameComplet, img) { 
        const name = nameComplet.split(".");  
        this.images[name[0]] = img; 
        if(this.allImagesLoaded()){ 
            try{ this.game.handleLoaded(); }
            catch(error){}
        }  
    }
    allImagesLoaded() {                                                   
        for(let nameComplet of this.listImages){            // On passe en revue chaque images que l'on doit télécharger 
            const name = nameComplet.split(".")[0];         // On prend la partie du nom qui se situe avant l'extension
            if(!this.images[name]){ return false; }         // Si l'une des images n'est pas encore stockée, on renvoie false.
        }
        delete this.listImages;                             // Si toutes les images ont été trouvées, on supprime la liste des images à télécharger
        return true;                                        // Et on renvoie true
    }     

    // Methodes liées aux événements
    resizeCanvas = () => {
        const body = document.querySelector('body');
        const scale = Math.min((body.clientHeight / this.canvas.height), (body.clientWidth / this.canvas.width));
        this.canvas.style.transform = 'scale('+scale+')';
    }

    handleClick = (event) => {
        if(event.target !== this.canvas) return;
        event.preventDefault(); 
        let x = event.offsetX;
        let y = event.offsetY;          
        // On essaie d'appeler la fonction clicEvent de notre jeu en lui fournissant les coordonnées x et y
        try{ this.game.handleClick(x, y); } 
        catch(error){ /* Action à réaliser si notre jeu ne possède pas de fonction clicEvent */ }
    }

}

window.onload = new App(Memory);