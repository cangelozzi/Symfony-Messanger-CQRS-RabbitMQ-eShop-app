# Symfony Messanger CQRS RabbitMQ eShop app - WIP

### This app is a simulation (no database involved) to show the functionality for a structure related to Symfony Messanger CQRS RabbitMQ

Database you can setup adding below line to `.env` created file
`DATABASE_URL=mysql://root:root@127.0.0.1:8889/messanger_eshop_app?serverVersion=5.7`

To allow symfony to work with Apache:
`composer require symfony/apache-pack`

To install npm packages
`npm init`
`npm install`

To minimize CSS and JS with Webpack encore,
https://symfony.com/doc/current/frontend/encore/installation.html
create configuration file and run:


`./node_modules/.bin/encore production`
or
`./node_modules/.bin/encore dev --watch`