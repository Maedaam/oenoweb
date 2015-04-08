#!/bin/bash

echo debug ACTIF

cd app
sudo chmod -R 775  cache

php console cache:clear


cd ..

app/console router:debug
 