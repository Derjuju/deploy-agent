<?php
/**
 * Configuration file generated by ZF Apigility Admin
 *
 * The previous config file has been stored in application.config.old
 */
return array(
    'modules' => array(
        'BsbFlysystem',
        'DoctrineModule',
        'Continuous\\DeployAgent',
        'DoctrineORMModule'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            __DIR__ . '/../config/autoload/{,*.}{global,local,test}.php',
        ),
        'config_cache_key' => 'application.config.cache',
        'config_cache_enabled' => false,
        'module_map_cache_key' => 'application.module.cache',
        'module_map_cache_enabled' => false,
        'cache_dir' => 'data/cache/',
    ),
);
