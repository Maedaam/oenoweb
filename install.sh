#!/bin/bash

git clone https://github.com/eugene-de-rastignac/oenoweb.git

cd oenoweb

composer update

php app/console doctrine:database:create

php app/console doctrine:schema:update


