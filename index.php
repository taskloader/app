<?php

include 'taskloader/bootstrap.php';
//$task = Task::instance();
$task->addService('view', '\TaskLoader\Core\ViewProvider');
$task->view->set('title', 'My homepage');
Task::view()->load('layout');
Task::service()->set('hook', 'TaskLoader\Core\HookProvider');
Task::hook()->add('myFunc', function(...$params){ echo 'My Hook';});

Task::hook()->fire('myFunc');