projet
======

A Symfony project created on April 19, 2018, 6:45 pm.

Instructions a faire pour faire fonctionner le projet (avec php et symfony déjà installé) :
sudo apt-get install composer
sudo apt-get install php-zip
composer update
si il y a une erreur, modifier le champs "mailer_user" avec le votre du fichier app/config/parameters.yml et recommencer la commande precendente
creer une base de données appelé "symfony" et lancer la commande : php bin/console doctrine:schema:update --force
php bin/console doctrine:database:import database.sql
php bin/console doctrine:mapping:import --force AppBundle annotation
php bin/console:generate:entities AppBundle
(Si vous avez une erreur comme quoi fos_user existe déjà, essayer de supprimer tous les fichiers de src/AppBundle/Entity/. Pour tout autre problème n'hésitez pas a me contacter : etienne.jouanne@gmail.com)