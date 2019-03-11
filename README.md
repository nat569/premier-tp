
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 

Ce projet est un CV en ligne personalisable. 



#### Supported Systems
* Windows (normalement)

#### Fonctionnalités :
* Authentification sécurisée en cryptage bcrypt donnant accès à des contenus protégés (éditer, supprimer ou créer des entités)
* Créer des rubriques Expériences, Loisirs et Formation
* laisser des messages avec son pseudo ou nom directement sur une base de donnée
* Il dispose d'une API en ligne
* Il est conformé avec PHP_CodeSniffer
* il dispose d'un thème boostrap responsive
* Les information sont stockées sur une base de données (pour celles des entités expérience, formation, Loisir et les message de contact)
* Utilisation de twig

[Lien vers l'api](https://tpsymphony-nat569.c9users.io/symfony/public/index.php/api)

Tests unitaires pour les accesseurs :
![screenshot](https://raw.githubusercontent.com/nat569/premier-tp/master/Test_unitaire.JPG)


Test fonctionnel :
![screenshot](https://raw.githubusercontent.com/nat569/premier-tp/master/Test_acceptance.JPG)

####Pour refaire ce projet vous aurez entre autre besoin d'installer:
* Symfony
* [composer](wget https://getcomposer.org/download/1.6.2/composer.phar)
* Le orm-pack et le maker-bundle -dev de symfony
* api-plateforme/core
* Php cs fixer
* codeception


florent.coquil@gmail.com
