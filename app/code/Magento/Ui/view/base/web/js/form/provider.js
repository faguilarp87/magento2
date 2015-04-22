/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
define([
    'underscore',
    'Magento_Ui/js/lib/provider',
    './client'
], function (_, Provider, Client) {
    'use strict';

    return Provider.extend({
        initialize: function () {
            this._super()
                .initClient();

            return this;
        },

        initClient: function () {
            this.client = new Client({
                urls: {
                    beforeSave: this.validate_url,
                    save: this.submit_url
                }
            });

            return this;
        },

        save: function (options) {
            var data = this.get('data');

            this.client.save(data, options);

            return this;
        }
    });
});
