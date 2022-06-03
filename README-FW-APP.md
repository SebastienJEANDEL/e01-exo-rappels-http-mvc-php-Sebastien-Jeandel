# E01 − Exercice séparation Application/Framework

## Etat des lieux de notre programme en PHP/POO et MVC

La POO nous permet de **regrouper des données et des comportements liés à ces données, au sein d'un modèle** (la classe). On peut appliquer la **POO pour structurer** du code, créer des **classes à usage unique** ou des **classes dédiées à l'héritage**.

**L'architecture MVC nous permet d'organiser notre code source** via un point d'entrée unique de l'application, d'articuler des actions à effectuer, de gérer les données à d'afficher l'interface graphique.

> Notre code actuel n'**exploite pas suffisamment la POO** et **nos classes ne sont pas réutilisables en l'état**. C'est-à-dire que si on souhaite refaire un projet, *on devra dupliquer le précédent et faire le tri* dans les fichiers du projet (l'application) et les fichiers du "moteur" (le framework).

## Objectifs

### Un framework et une application

- **Séparer le code réutilisable** (le _framework_ donc), **du code de l'application** (en vous appuyant sur l'héritage) : en gros il faudra vous poser la question de savoir si telle ou telle classe/méthode _fait partie de l'application_ que l'on code (pages, données) ou si elle _est réutilisable quelque soit l'application_ (framework).
  - **Créer deux dossiers** `application` et `framework` et y déplacer tous les fichiers concernées. Ajuster le code source en conséquence.
    - _Tester_
- :bulb: **Une autre façon de faire le tri**, est de se poser la question _"De quels fichiers aurais-je besoin pour ajouter du contenu à mon application"_ => ça va dans `application` !

### Utiliser les Namespaces

- **Mettre en place les namespaces sur le projet**, via Composer.
  - Un namespace pour chaque sous-dossier `application` et `framework`, afin de rendre le framework réutilisable :wink:.
  - Bien sûr, **utiliser l'autoload de Composer** via la PSR-4 pour auto-charger vos classes :tada:

:bulb: Ressources
- [Fiche Récap Namespaces](https://kourou.oclock.io/ressources/fiche-recap/namespaces/)
- [Fiche Récap Namespaces avec Composer](https://kourou.oclock.io/ressources/fiche-recap/composer/#configurer-lautochargement-avec-composer-et-psr-4)

## Un zeste de Symfony ?

> [C'est par ici que ça se passe !](./README-Composant-Symfony.md)