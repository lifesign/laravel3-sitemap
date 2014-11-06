<?php

Autoloader::namespaces(array(
    'Roumen\Sitemap' => Bundle::path('sitemap').'src'.DS.'Roumen'.DS.'Sitemap'.DS
));

IoC::register('sitemap', function(){
    $config = Config::get('sitemap::config');
    return new Roumen\Sitemap\Sitemap($config);
});