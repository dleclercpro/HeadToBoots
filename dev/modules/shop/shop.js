import {Product} from '../../modules/product/product';

export class Shop {

    /**
     * constructor
     */
    constructor($self) {

        // Get node
        this.self = $self;

        // Initialize products
        this.products = [];

        // Build shop
        this.buildProducts();
    }

    /**
     * buildProducts
     */
    buildProducts() {

        // Find products
        const $products = this.self.find('.mod-product');

        // Loop on products
        $products.each((i, el) => {

            // Build module out of it and store it
            this.products.push(new Product($(el)));
        });
    }

}