<?php

spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});

function renderPage(Page $page) {
    echo $page->render();
}

$htmlRenderer = new HTMLRenderer();
$jsonRenderer = new JSONRenderer();
$xmlRenderer = new XMLRenderer();

echo "SimplePage and HTMLRenderer\n";
$simplePage = new SimplePage($htmlRenderer, "My Page", "My Simple Content");
renderPage($simplePage);

$simplePage->setRenderer($jsonRenderer);
echo "\n\nSimplePage and JSONRenderer\n";
renderPage($simplePage);

$simplePage->setRenderer($xmlRenderer);
echo "\n\nSimplePage and XMLRenderer\n";
renderPage($simplePage);

// ====

$product = new Product(123, 'Super Product', 'Super Product Description', '/images/super-product.jpg');
$productPage = new ProductPage($htmlRenderer, $product);

echo "\n\nProductPage and HTMLRenderer\n";
renderPage($productPage);

$productPage->setRenderer($jsonRenderer);
echo "\n\nProductPage and JSONRenderer\n";
renderPage($productPage);

$productPage->setRenderer($xmlRenderer);
echo "\n\nProductPage and XMLRenderer\n";
renderPage($productPage);