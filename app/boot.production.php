<?php
/*
 *生产环境应用启动流程，可按需求在此自定义整个流程
 */

use lin\basement\event\Event;
use lin\exception\Exception;
use lin\route\Route;
use lin\session\Session;

date_default_timezone_set('PRC');
error_reporting(0);

Linker::Config()::replace('lin', include __DIR__ . '/config/lin.production.php', true);
Linker::Config()::replace('servers', include __DIR__ . '/config/lin-servers.production.php', true);

Exception::run();
Session::run();
Event::run();
Route::run();
