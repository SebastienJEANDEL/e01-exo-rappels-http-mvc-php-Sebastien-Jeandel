# E01 − Rappels HTTP/PHP/POO/MVC

## Objectifs

- Revoir des notions nécessaires au développeur back, pour bien démarrer avec Symfony.
- Analyser un code existant.
- Le modifier selon nos besoins.
- Revoir des bonnes pratiques HTTP.

## Exécuter le projet

Après avoir cloné le repo en local, rendez-vous soit :

- Dans le dossier, via le terminal et exécutez `php -S localhost:8000`,
- Ou directement depuis Apache, à l'endroit de votre dossier http://localhost/xxx/symfony/symfo-e01-exo-rappels-http-mvc-php

Les URLs existantes sont :

- Afficher la page d'accueil : `/` (ou `/index.php`)
- Afficher la page contact : `/?page=contact` ou `/index.php?page=contact`
- Afficher la page API : `/?page=api` ou `/index.php?page=api`
- Afficher une 404 : `/?page=` ou `/?page=azerty`

## Exercice : analyse

> :hand: Prenez quelques minutes pour analyser de code source de votre côté. Ensuite, répondez aux questions dans le document [Support Analyse](README-Support-Analyse.md).

:bulb: Ressources
- [Le protocole HTTP](https://kourou.oclock.io/ressources/fiche-recap/le-protocole-http-hypertext-transfer-protocol/)
- [Le design pattern MVC](https://kourou.oclock.io/ressources/fiche-recap/architecture-mvc-model-view-controller/)

## Exercice : déclaration de types et DocBlocks

- Faire en sorte que les types soient déclarés, au niveau des paramètres et du retour des fonctions, pour le parcours complet d'une requête, depuis `index.php`.
- Idem pour les DocBlocks associés.
- Vous avez un exemple dans `View::renderHtml()`.

:bulb: Les DocBlocks en PHP : 
- [What is a DocBlock ?](https://docs.phpdoc.org/3.0/guide/getting-started/what-is-a-docblock.html)
- [Tag reference](https://docs.phpdoc.org/3.0/guide/references/phpdoc/tags/index.html)
- [More on DocBlocks](https://docs.phpdoc.org/3.0/guide/guides/docblocks.html)

## Aller plus loin

> [La suite de l'exercice est par là](./README-FW-APP.md).