<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//category
$routes->get('category', 'Category::index');
$routes->get('categoryadd', 'Category::create');
$routes->post('category/store', 'Category::store');
$routes->get('category/edit/(:num)', 'Category::edit/$1');
$routes->post('category/upload/(:num)', 'Category::upload/$1');
$routes->get('category/delete/(:num)', 'Category::delete/$1');

//product
$routes->get('product', 'Product::index');
$routes->get('productadd', 'Product::create');
$routes->post('product/store', 'Product::store');
$routes->get('product/edit/(:num)', 'Product::edit/$1');
$routes->post('product/upload/(:num)', 'Product::upload/$1');
$routes->get('product/delete/(:num)', 'Product::delete/$1');

//customer
$routes->get('customer', 'Customer::index');
$routes->get('customeradd', 'Customer::create');
$routes->post('customer/store', 'Customer::store');
$routes->get('customer/edit/(:num)', 'Customer::edit/$1');
$routes->post('customer/upload/(:num)', 'Customer::upload/$1');
$routes->get('customer/delete/(:num)', 'Customer::delete/$1');
