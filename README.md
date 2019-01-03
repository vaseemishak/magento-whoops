# magento2 whoops error handler

This is magento 2 module that adds Whoops error handling.

    composer require --dev vaseemishak/magento2-whoops

    ./bin/magento module:enable Mnm_Whoops
    ./bin/magento setup:upgrade

You can set default editor to open file with error from Whoops error page.
    Magento admin page -> Stores -> Configuration -> Advanced -> Developer -> Debug -> Default editor for whoops