# Link: http://localhost/my_group, http://localhost:8080/my_group or http://localhost:8080/my_group/groups/index
![1](https://user-images.githubusercontent.com/48238163/56148547-bb348e80-5fd4-11e9-8589-e5bcf42096ba.PNG)
![2](https://user-images.githubusercontent.com/48238163/56148589-d43d3f80-5fd4-11e9-8fe8-d8c2c1fc0dde.PNG)
![3](https://user-images.githubusercontent.com/48238163/56148617-e28b5b80-5fd4-11e9-9a24-6a4e7fc08435.PNG)
# Add
![add](https://user-images.githubusercontent.com/48238163/56148653-ef0fb400-5fd4-11e9-8bf8-4255112fca18.PNG)
# Edit
![Edit](https://user-images.githubusercontent.com/48238163/56148681-fc2ca300-5fd4-11e9-9b68-280b9a666101.PNG)
# View
![view](https://user-images.githubusercontent.com/48238163/56148694-0484de00-5fd5-11e9-835f-e73bbe6f6cee.PNG)

# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
