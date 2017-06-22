<?php
$routes = [
    'metadata',
    'getUserProducts',
    'getSingleProduct',
    'deleteSingleProduct',
    'enableSingleProduct',
    'disableSingleProduct',
    'createProductVariantCategory',
    'getProductSingleVariantCategory',
    'updateProductVariantCategory',
    'deleteProductVariantCategory',
    'getProductVariantCategories',
    'createProductVariant',
    'getSingleProductVariant',
    'updateProductVariant',
    'deleteProductVariant',
    'getVariantsInVariantCategory',
    'getProductOfferCodes',
    'getSingleProductOfferCode',
    'createProductOfferCode',
    'updateProductOfferCode',
    'deleteProductOfferCode',
    'getProductCustomFields',
    'createProductCustomField',
    'updateProductCustomField',
    'deleteProductCustomField',
    'getUser',
    'getUserSubscriptions',
    'subscribeToResource',
    'unsubscribeFromResource',
    'getUserSucessfulSales',
    'getUserSingleSale',
    'getProductActiveSubscribers',
    'getProductSingleSubscriber'

];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

