<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Retrieves or sets the Symfony Dependency Injection container
 *
 * @param ContainerInterface|string $id
 *
 * @return mixed
 */
function symfony($id)
{
    static $container;

    if ($id instanceof ContainerInterface) {
        $container = $id;
        return;
    }

    return $container->get($id);
}

$loader = require_once __DIR__.'/symfony/app/bootstrap.php.cache';

// Load application kernel
require_once __DIR__.'/symfony/app/AppKernel.php';

$sfKernel = new AppKernel('dev', true);
$sfKernel->loadClassCache();
$sfKernel->boot();

// Add Symfony container as a global variable to be used in Wordpress
$sfContainer = $sfKernel->getContainer();

if (true === $sfContainer->getParameter('kernel.debug', false)) {
    Debug::enable();
}

$sfContainer->enterScope('request');

symfony($sfContainer);

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
