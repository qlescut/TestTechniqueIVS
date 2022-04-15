# Test Technique IVS

N'ayant jamais utilisé Angular, j'ai commencé dans un premier temps par me documenter sur son utilisation et sa manière de l'employer.

Après avoir suivi différents tutoriels, j'ai commencé à travailler sur ce projet. 

J'ai d'abord installé les différents packages nécessaires au développement de cette API. 

Puis j'ai réalisé la BDD et sa connexion au projet grace à PHP(ApiRest.php). Pour partager la base, je l'ai importé dans le fichier source de l'API (testtechniqueivs.sql). Cette-dernière compte plusieurs tables :
- organisations (id, nom, personnes_presentes)
- buildings (id, nom, zipcode, personnes_presentes)
- pieces (id, nom, personnes_presentes)
Ces dernières sont liées entre elles pour permettre de modifier le nombre de personnes présentes.

Dans le fichier PHP, après l'avoir connecté à la BDD,  j'ai recupéré les différents éléments des tables grâce à des requêtes SQL puis j'ai utilisé print pour les afficher.

Enfin, j'ai débuté le développement en Angular, en commençant par la création des différents components (buildings, organisations et pieces). Pour chacun d'entre eux, j'ai mis en place les différents éléments permettant d'afficher le contenu demandé en effectuant des imports dans le fichier app.module.ts puis en déclarant dans app.module.html. Et j'ai essayé de lié Angular au programme PHP, mais je n'ai pas réussi.



## TestTechniqueIVS

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 13.3.2.

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The application will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via a platform of your choice. To use this command, you need to first add a package that implements end-to-end testing capabilities.

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI Overview and Command Reference](https://angular.io/cli) page.
