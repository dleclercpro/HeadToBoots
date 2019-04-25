export class Product {

    /**
     * constructor
     */
    constructor($self) {

        // Get node
        this.self = $self;

        // Get images
        this.elements = {
            $imgFront: this.self.find('.js-img-front'),
        };

        // Listen to events
        this.listen();
    }

    /**
     * listen
     */
    listen() {

        // Listen to hover on image on mobile
        this.elements.$imgFront.on('click', () => {

            // Simulate hover
            this.elements.$imgFront.toggleClass('is-hover');
        });
    }

}