<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Signin, Signup
// $routes->get('register', 'SignupController::index');
// $routes->match(['get', 'post'], 'register/store', 'SignupController::store');
$routes->get('signin', 'SigninController::index');
$routes->post('login', 'SigninController::login');
$routes->get('signout', 'SigninController::logout');
//category
$routes->get('category', 'Category::index');
$routes->get('categoryadd', 'Category::create');
$routes->post('category/store', 'Category::store');
$routes->get('category/editform/(:num)', 'Category::edit/$1');
$routes->post('category/upload/(:num)', 'Category::upload/$1');
$routes->get('category/delete/(:num)', 'Category::delete/$1');

//product
$routes->get('product', 'Product::index');
$routes->get('productadd', 'Product::create');
$routes->post('product/store', 'Product::store');
$routes->get('product/editproduct/(:num)', 'Product::edit/$1');
$routes->post('product/upload/(:num)', 'Product::upload/$1');
$routes->get('product/delete/(:num)', 'Product::delete/$1');

//Customer
$routes->get('customer', 'Customer::index');
$routes->get('customeradd', 'Customer::create');
$routes->post('customer/store', 'Customer::store');
$routes->get('customer/edit/(:num)', 'Customer::edit/$1');
$routes->post('customer/upload/(:num)', 'Customer::upload/$1');
$routes->get('customer/delete/(:num)', 'Customer::delete/$1');

//message
$routes->get('message', 'Message::index');
$routes->get('messageadd', 'Message::create');
$routes->post('message/store', 'Message::store');
$routes->get('message/edit/(:num)', 'Message::edit/$1');
$routes->post('message/upload/(:num)', 'Message::upload/$1');
$routes->get('message/delete/(:num)', 'Message::delete/$1');

//order
$routes->get('order', 'Order::index');
$routes->get('messageadd', 'Order::create');
$routes->post('order/store', 'Order::store');
$routes->get('order/delete/(:num)', 'Order::delete/$1');

//testimonial
$routes->get('testimonial', 'Testimonial::index');
$routes->get('testimonialadd', 'testimonial::create');
$routes->post('testimonial/store', 'Testimonial::store');
$routes->get('testimonial/edit/(:num)', 'Testimonial::edit/$1');
$routes->post('testimonial/upload/(:num)', 'Testimonial::upload/$1');
$routes->get('testimonial/delete/(:num)', 'Testimonial::delete/$1');

//our team
$routes->get('team', 'Team::index');
$routes->get('teamadd', 'Team::create');
$routes->post('team/store', 'Team::store');
$routes->get('team/editteam/(:num)', 'Team::edit/$1');
$routes->post('team/upload/(:num)', 'Team::upload/$1');
$routes->get('team/delete/(:num)', 'Team::delete/$1');

//service
$routes->get('service', 'Service::index');
$routes->get('serviceadd', 'Service::create');
$routes->post('service/store', 'Service::store');
$routes->get('service/editservice/(:num)', 'Service::edit/$1');
$routes->post('service/upload/(:num)', 'Service::upload/$1');
$routes->get('service/delete/(:num)', 'Service::delete/$1');


