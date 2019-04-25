export class Info {

    /**
     * constructor
     */
    constructor($self) {

        // Get node
        this.self = $self;

        // Get images
        this.elements = {
            $close: this.self.find('.js-close'),
        };

        // Listen to events
        this.listen();
    }

    /**
     * listen
     */
    listen() {

        // Listen to hover on image on mobile
        this.elements.$close.on('click', () => {

            // Close info layer
            this.close();
        });
    }

    /**
     * open
     */
    open() {

        // Fade in
        this.self.fadeIn(250);
    }

    /**
     * close
     */
    close() {

        // Fade in
        this.self.fadeOut(250);
    }

}