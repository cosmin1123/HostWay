<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-16 08:22:10 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp2\www\kohana\system\classes\Kohana\Cookie.php:67
2013-03-16 08:22:10 --- DEBUG: #0 C:\wamp2\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp2\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp2\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp2\www\kohana\system\classes\Kohana\Cookie.php:67
2013-03-16 08:41:32 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp2\www\kohana\system\classes\Kohana\View.php:137
2013-03-16 08:41:32 --- DEBUG: #0 C:\wamp2\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\wamp2\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\wamp2\www\kohana\application\classes\Controller\Home.php(5): Kohana_View::factory('template')
#3 C:\wamp2\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp2\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp2\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp2\www\kohana\system\classes\Kohana\View.php:137
2013-03-16 09:38:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function simpleCurl() ~ APPPATH\classes\Controller\Home.php [ 10 ] in :
2013-03-16 09:38:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 09:39:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function simpleCurl() ~ APPPATH\classes\Controller\Home.php [ 10 ] in :
2013-03-16 09:39:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 09:59:05 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\Model\Home.php [ 15 ] in C:\wamp2\www\kohana\application\classes\Model\Home.php:15
2013-03-16 09:59:05 --- DEBUG: #0 C:\wamp2\www\kohana\application\classes\Model\Home.php(15): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp2\www\ko...', 15, Array)
#1 C:\wamp2\www\kohana\application\classes\Controller\Home.php(13): Model_Home->construiesteObiect(Object(stdClass))
#2 C:\wamp2\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_getResources()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp2\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp2\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp2\www\kohana\application\classes\Model\Home.php:15
2013-03-16 10:19:18 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\Home.php [ 16 ] in C:\wamp2\www\kohana\application\classes\Model\Home.php:16
2013-03-16 10:19:18 --- DEBUG: #0 C:\wamp2\www\kohana\application\classes\Model\Home.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp2\www\ko...', 16, Array)
#1 C:\wamp2\www\kohana\application\classes\Controller\Home.php(13): Model_Home->construiesteObiect(NULL)
#2 C:\wamp2\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_getResources()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp2\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp2\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp2\www\kohana\application\classes\Model\Home.php:16
2013-03-16 10:20:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\Home.php [ 16 ] in C:\wamp2\www\kohana\application\classes\Model\Home.php:16
2013-03-16 10:20:20 --- DEBUG: #0 C:\wamp2\www\kohana\application\classes\Model\Home.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp2\www\ko...', 16, Array)
#1 C:\wamp2\www\kohana\application\classes\Controller\Home.php(13): Model_Home->construiesteObiect(Object(stdClass))
#2 C:\wamp2\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_getResources()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp2\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp2\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp2\www\kohana\application\classes\Model\Home.php:16
2013-03-16 10:20:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\Home.php [ 16 ] in C:\wamp2\www\kohana\application\classes\Model\Home.php:16
2013-03-16 10:20:23 --- DEBUG: #0 C:\wamp2\www\kohana\application\classes\Model\Home.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp2\www\ko...', 16, Array)
#1 C:\wamp2\www\kohana\application\classes\Controller\Home.php(13): Model_Home->construiesteObiect(Object(stdClass))
#2 C:\wamp2\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_getResources()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp2\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp2\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp2\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp2\www\kohana\application\classes\Model\Home.php:16
2013-03-16 11:01:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Home.php [ 28 ] in :
2013-03-16 11:01:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-16 11:20:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\consola.php [ 2 ] in :
2013-03-16 11:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :