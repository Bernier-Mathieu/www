export default class Card{

    constructor(id){
        this.width = 32;            // Largeur de la carte
        this.height = 48;           // Hauteur de la carte
        this.id = id;               // ID de la carte sur le spritesheet (0 -> 51)
        this.isFlipped = false;     // Etat de la carte (retournée ou non)
    }

    get imgX(){ return this.width * (this.id % 13); }               //Position X sur le spritesheet
    get imgY(){ return this.height * Math.floor(this.id / 13); }    //Position Y sur le spritesheet

    draw(ctx) {
        const img = APP.images['cards'];
        if(!img) return;    // Si l'image de carte n'est pas chargée, on empêche le dessin
        if(this.isFlipped){                 // Dessin de la face de carte
            ctx.drawImage(img, this.imgX, this.imgY, this.width, this.height, 0, 0, this.width, this.height);
        }else{                              // Dessin du dos e la carte
            ctx.drawImage(img, 0, 192, this.width, this.height, 0, 0, this.width, this.height);
        }
    }

}