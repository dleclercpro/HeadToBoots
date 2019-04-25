import {Info} from '../../modules/info/info';

export class Banner {

    /**
     * constructor
     */
    constructor($self) {

        // Get node
        this.self = $self;

        // Get elements
        this.elements = {
            $open: this.self.find('.js-open'),
        };

        // Get info box
        this.info = new Info($('.mod-info'));

        // Listen to events
        this.listen();
    }

    /**
     * listen
     */
    listen() {

        // Listen to hover on image on mobile
        this.elements.$open.on('click', () => {

            // Open info layer
            this.info.open();
        });
    }

}