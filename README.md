my_project
==========

A Symfony project created on June 20, 2015, 5:18 pm. (Only testing use).

While reading the SF2 site, started reading the book and did the testing on "my_project".

Henry Robben Learning Symfony 2 Framework together with Laravel.

I'am a huge fan of MVC OOP development PHP, now using the frameworks and learning to use them.
 
 Prefered Frameworks Symfony 2 and Laravel 5....
 
 I like to work with Sublime but my most favorite editor is PHPStorm.
 
 
 Added:
 - blog and twig options.....
 
 routes:  
 
 /         homepage
 
 /contact  contact page
 
 /blog     blog total page
 
 /blog/show/{id}      single article.
          
 Added: 
 - random testing.
 
 routes:  /random/10    gives a random number on page...
 
 To see how routing is gowing look into app/config/routing.yml
 
some used commands terminal:
- php app/console server:run                         // running the webserver on port 8000  http://localhost:8000
- php app/console cache:clear --env=prod --no-debug  // clear cache in production running via app.php (production)   app_dev.php (development).
- php app/console generate:bundle --namespace=Acme/DemoBundle --format=yml   // to install DemoBundle into Symfony 2.
 
Structure of Symfony 2:
=======================
app/
- This directory contains the application configuration.

src/
- All the project PHP code is stored under this directory.

vendor/
- Any vendor libraries are placed here by convention.

web/
- This is the web root directory and contains any publicly accessible files.
 
Bundle Directory Structure
==========================
The directory structure of a bundle is simple and flexible. By default, the bundle system follows a set of conventions that help to keep code consistent between all Symfony bundles. Take a look at AcmeDemoBundle, as it contains some of the most common elements of a bundle:
 
:Controller/
- Contains the controllers of the bundle (e.g. RandomController.php).

:DependencyInjection/
- Holds certain Dependency Injection Extension classes, which may import service configuration, register compiler passes or more (this directory is not necessary).

:Resources/config/
- Houses configuration, including routing configuration (e.g. routing.yml).

:Resources/views/
- Holds templates organized by controller name (e.g. Hello/index.html.twig).

:Resources/public/
- Contains web assets (images, stylesheets, etc) and is copied or symbolically linked into the project web/ directory via the assets:install console command.

:Tests/
- Holds all tests for the bundle.


Request bundles:
================
php app/console debug:container log   // to see list of available bundles.

php app/console debug:router    // to see list of available to use routers.

Twig syntax checking:
=====================
You can check by filename:

 $ php app/console twig:lint app/Resources/views/article/recent_list.html.twig

or by directory:

 $ php app/console twig:lint app/Resources/views
 
 
Database with Doctrine:
=======================
Create a dbase out of params:

 $ php app/console doctrine:database:create
 

# MySQL Version 5.5.3 introduced "utf8mb4", which is recommended
collation-server     = utf8mb4_general_ci # Replaces utf8_general_ci

character-set-server = utf8mb4            # Replaces utf8

# Propel provides the following hooks:
To install Propel, read [Working With Symfony2] (http://propelorm.org/Propel/cookbook/symfony2/working-with-symfony2.html#installation) on the Propel documentation

preInsert()

 Code executed before insertion of a new object.

postInsert()

 Code executed after insertion of a new object.

preUpdate()

 Code executed before update of an existing object.

postUpdate()

 Code executed after update of an existing object.

preSave()

 Code executed before saving an object (new or existing).

postSave()

 Code executed after saving an object (new or existing).

preDelete()

 Code executed before deleting an object.

postDelete()

 Code executed after deleting an object.
 
#PHPUnit testing

Unit testing and Functional testing.
 
#Validation constraints
 
 Look in the book [validations] (http://symfony.com/doc/current/book/validation.html)
 
#Start testing dbase, login for a blog (todo)
 
Trying to implement the knowledge into a blog sit. (only testing proposal to implement in future production site)

 Dbase build setup:

 - User => fields auto id increment (username, password, first_name, last_name, role, register_date, last_login_date, avatar)

 - Articles => fields auto id increment (user_id, title, article, created_at, publised_at, publised_until)
 
#Testing use of bootstrap with symfony 2

Testing implement a build with use of bootstrap to make blog responsive.

looking into [http://bootstrap.braincrafted.com/] (http://bootstrap.braincrafted.com/)