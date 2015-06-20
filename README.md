my_project
==========

A Symfony project created on June 20, 2015, 5:18 pm.

While reading the SF2 site start reading the book and did the testing on this branch.

Henry Robben Learning Symfony 2 Framework together with Laravel.

I'am a huge fan of MVC OOP development PHP, now i am using the frameworks which i (and a lot others I saw on the internet) am learning to embrase.
 
 Prefered Frameworks Symfony 2 and Laravel 5....
 
 I like to work with Sublime but my most favorite editor is PHPStorm.
 
 
 Added:
 - blog and twig options.....
 
 routes:  /         homepage
          /contact  contact page
          /blog     blog total page
          /blog/show/{id}      single article.
          
 Added: 
 - random testing.
 
 routes:  /random/10    gives a random number on page...
 
 
 To see how routing is gowing look into app/config/routing.yml
 
 some used commands terminal:
 php app/console server:run                         // running the webserver on port 8000  http://localhost:8000
 php app/console cache:clear --env=prod --no-debug  // clear cache in production running via app.php (production)   app_dev.php (development).
 php app/console generate:bundle --namespace=Acme/DemoBundle --format=yml   // to install DemoBundle into Symfony 2.
 
 Structure of Symfony 2:
 app/
 This directory contains the application configuration.
 src/
 All the project PHP code is stored under this directory.
 vendor/
 Any vendor libraries are placed here by convention.
 web/
 This is the web root directory and contains any publicly accessible files.