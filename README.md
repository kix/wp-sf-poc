# Wordpress + Symfony proof of concept

This is an example of how to establish connection between Wordpress and a built-in Symfony 2 instance.

## Installation

**Note**: you should have [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) installed. In the instruction, substitute ``composer`` with a corresponding path or ``php composer.phar`` call.

In order to install, do the next things:

```
$ git clone git@github.com:kix/wp-sf-poc.git
$ cd wp-sf-poc/symfony
$ composer install
# Fill in the details. PDO is not used though
$ php -S localhost:8080 -t ./ &
```

Next, go to ``localhost:8080`` and set up Wordpress. Enable the ``Symfony integration`` plugin in the admin. Now you should be able to use the ``say_hello`` shortcode. Add it somewhere applicable, et voila.

The shortcode itself is declared in [sfplugin.php](https://github.com/kix/wp-sf-poc/blob/bf97231fade290eabb13dccd81861cda3eabb722/wp-content/plugins/sfplugin/sfplugin.php). The Symfony environment is bootstrapped in Wordpress's [index.php](https://github.com/kix/wp-sf-poc/blob/bf97231fade290eabb13dccd81861cda3eabb722/index.php#L8)