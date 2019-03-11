
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 

Ce projet est un CV en ligne personnalisable. 



#### Supported Systems
* Windows (normalement)

#### Fonctionnalités :
* Authentification sécurisée en cryptage bcrypt donnant accès à des contenus protégés (éditer, supprimer ou créer des entités)
* Créer des rubriques Expériences, Loisirs et Formation
* laisser des messages avec son pseudo ou nom directement sur une base de donnée
* [Il dispose d'une API en ligne](https://tpsymphony-nat569.c9users.io/symfony/public/index.php/api)
* Il est conformé avec PHP_CodeSniffer
* il dispose d'un thème boostrap responsive
* Les information sont stockées sur une base de données (pour celles des entités expérience, formation, Loisir et les message de contact)
* Utilisation de twig


Tests unitaires pour les accesseurs :

![screenshot](https://raw.githubusercontent.com/nat569/premier-tp/master/Test_unitaire.JPG)


Test d acceptance :

![screenshot](https://raw.githubusercontent.com/nat569/premier-tp/master/Test_acceptance.JPG)

#### Pour refaire ce projet vous aurez entre autre besoin d'installer:
* Symfony
* [composer](https://getcomposer.org/download/1.6.2/composer.phar)
* Le orm-pack et le maker-bundle -dev de symfony
* api-plateforme/core
* Php cs fixer
* codeception

Pour un rendu global de la css :

![screenshot]
