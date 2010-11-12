<?php

date_default_timezone_set('UTC');
setlocale(LC_ALL, 'en_US.utf-8');
ini_set('unserialize_callback_func', 'spl_autoload_call');

Elastic::set_option('base_domain', $_SERVER['HTTP_HOST']);
Elastic::set_option('base_path', '/');

Container::instance()->set_implementation('Session_StorageInterface', 'Session_Storage_Cookie');
Container::instance()->set_implementation('Session_IdentifierInterface', 'Session_Identifier_Cookie');

Container::instance()->set_scope('StorageInterface', 'singleton');
Container::instance('page_cache')->set_scope('StorageInterface', 'singleton');
Container::instance()->set_implementation('StorageInterface', 'Storage_Array');

Container::instance()->set_implementation('Config_ReaderInterface', 'Config_Reader_PHP');
Container::instance()->set_implementation('Config_WriterInterface', 'Config_Writer_PHP');

Elastic::module('doctrine', MOD_ROOT.'/doctrine');
Elastic::module('twig',     MOD_ROOT.'/twig');

Route::set('front/page')
  ->uri('(<controller>(/<action>(/<id>)))')
  ->options(array('class' => 'Controller_Front_Page_<controller>', 'method' => 'action_<action>', 'directory' => 'front/page'))
  ->segments(array('id' => '\d+'))
  ->defaults(array('controller' => 'home', 'action' => 'index'));

Route::set('front/pagelet')
  ->uri('pagelet(/<controller>(/<action>(/<id>)))')
  ->options(array('class' => 'Controller_Front_Pagelet_<controller>', 'method' => 'action_<action>', 'directory' => 'front/pagelet'))
  ->segments(array('id' => '\d+'))
  ->defaults(array('controller' => 'home', 'action' => 'index'));

Route::set('back/page')
  ->uri('admin(/<controller>(/<action>(/<id>)))')
  ->options(array('class' => 'Controller_Back_Page_<controller>', 'method' => 'action_<action>', 'directory' => 'back/page'))
  ->segments(array('id' => '\d+'))
  ->defaults(array('controller' => 'home', 'action' => 'index'));

Route::set('back/pagelet')
  ->uri('admin/pagelet(/<controller>(/<action>(/<id>)))')
  ->options(array('class' => 'Controller_Back_Pagelet_<controller>', 'method' => 'action_<action>', 'directory' => 'back/pagelet'))
  ->segments(array('id' => '\d+'))
  ->defaults(array('controller' => 'home', 'action' => 'index'));

Request::factory('http')->execute('http')->send_headers()->send_content()->finish();

?>
