<?php

require '../models/Product.php';
$products = $getAllProducts();
require '../public/views/home.view.php';