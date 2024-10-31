<?php


$router->get('/', 'index.php');
$router->get('/dashboard', 'dashboard.php')->only('auth');

$router->get('/dashboard/admin', 'dashboards/admin.php')->only('auth');
$router->get('/dashboard/student', 'dashboards/student.php')->only('auth');
$router->get('/dashboard/pdc', 'dashboards/pdc.php')->only('auth');
$router->get('/dashboard/company', 'dashboards/company.php')->only('auth');
$router->get('/dashboard/lecturer', 'dashboards/lecturer.php')->only('auth');

$router->get('/register', 'users/create.php')->only('guest');
$router->post('/register', 'users/store.php')->only('guest');

$router->get('/login', 'sessions/create.php')->only('guest');
$router->post('/sessions', 'sessions/store.php')->only('guest');
$router->delete('/sessions', 'sessions/destroy.php')->only('auth');


$router->get('/jobs', 'jobs/index.php')->only('student');


$router->get('/pdc-users', 'pdc-users/index.php')->only('admin');

$router->get('/account', 'account.php')->only('auth');
$router->post('/cv/store', 'cv/store.php')->only('student');
$router->get('/cv/show', 'cv/show.php')->only('student');

$router->get('/add-lecture', 'add-lecture.php');

$router->get('/add-pdc', 'add-pdc.php');

$router->get('/temptemp', 'temptemp.php');

$router->get('/addition-form', 'addition-form.php');