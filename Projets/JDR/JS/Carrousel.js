// Class that manage the carousel
class Carousel {
    // Constructor, initialise the carousel
    constructor() {
        // Get image elements
        this.img = [];
        this.img[0] = document.getElementById("carousel-image-0");
        this.img[1] = document.getElementById("carousel-image-1");
        this.img[2] = document.getElementById("carousel-image-2");
        this.img[3] = document.getElementById("carousel-image-3");
        this.img[4] = document.getElementById("carousel-image-4");
        this.img[5] = document.getElementById("carousel-image-5");

        // Set animation key frames forward and backward
        this.animForward  = ['mv0to5', 'mv1to0', 'mv2to1', 'mv3to2', 'mv4to3', 'mv5to4'];
        this.animBackward = ['mv0to1', 'mv1to2', 'mv2to3', 'mv3to4', 'mv4to5', 'mv5to0'];

        // Reset carousel 
        this.reset();
        this.startAutoPlay();
    }

    // Set a new image (src) to image at given position (pos)
    setImage(pos, src) {
        this.img[(pos+this.currentImage+4)%6].src = src;
    }

    // Hide an image at given position (pos)
    hideImage(pos) {
        this.img[(pos+this.currentImage+4)%6].style.visibility = 'hidden';
    }

    // Show an image at given position (pos)
    showImage(pos) {
        this.img[(pos+this.currentImage+4)%6].style.visibility = 'visible';
    }

    // Reset carousel, set image 2 in the middle
    reset() {
        // Remove animations
        this.img.forEach((image) => {
            this.animForward.forEach((animation) => {
                image.classList.remove(animation);            
            })
            this.animBackward.forEach((animation) => {
                image.classList.remove(animation);            
            })
        })
        this.currentImage = 2;
    }

    // Animate one image forward
    next(nextImage) {
        // Set new image if requested
        if (nextImage !== undefined) this.setImage(5, nextImage);

        //  Animate    
        this.img.forEach((image, i) => {    
            // Remove animation
            this.animForward.forEach((animation) => { image.classList.remove(animation); });
            this.animBackward.forEach((animation) => { image.classList.remove(animation); });

            // Animate to next image
            image.classList.add(this.animForward[(-this.currentImage + i + 8) % 6]);
        })

        // Increase index to next image
        this.currentImage = (this.currentImage + 1) % 6;
        this.resetAutoPlay();
    }

    // Animate one image backward
    previous(previousImage) {
        // Set new image if requested
        if (previousImage !== undefined) this.setImage(5, previousImage);

        //  Animate
        this.img.forEach((image, i) => {    
            // Remove animations
            this.animForward.forEach((animation) => { image.classList.remove(animation); });
            this.animBackward.forEach((animation) => { image.classList.remove(animation); });
            
            // Animate to previous image
            image.classList.add(this.animBackward[(-this.currentImage + i + 8) % 6]);
        })

        // Decrease index to previous image
        this.currentImage = (this.currentImage + 5) % 6;
        this.resetAutoPlay();
    }

    // Start auto play
    startAutoPlay() {
        this.autoPlayTimeout = setTimeout(() => {
            this.autoPlayInterval = setInterval(() => {
                this.next();
            }, 1000); // Change image every 3 seconds during autoplay
        }, 10000); // Start autoplay after 10 seconds of inactivity
    }

    // Reset auto play timer
    resetAutoPlay() {
        clearTimeout(this.autoPlayTimeout);
        clearInterval(this.autoPlayInterval);
        this.startAutoPlay();
    }
}

let carousel = new Carousel();

document.querySelector('.left-arrow').addEventListener('click', () => carousel.previous());
document.querySelector('.right-arrow').addEventListener('click', () => carousel.next());
