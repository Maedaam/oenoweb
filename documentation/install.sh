#!/bin/bash

git clone https://github.com/eugene-de-rastignac/oenoweb.git

cd oenoweb

composer update

php app/console doctrine:database:create

php app/console doctrine:schema:update

echo "Entrez votre pseudo pour l'accès à la base de donnée : ?"
read pseudo

echo "Entrez votre mot de passe (bdd) : ?"
read -s pass

echo "Entrez le nom que vous avez donné à la base de donnée du projet"
read nom_base

mysql --user=$pseudo --password=$pass $nom_base < BDD/base.de.donnee2.SQL