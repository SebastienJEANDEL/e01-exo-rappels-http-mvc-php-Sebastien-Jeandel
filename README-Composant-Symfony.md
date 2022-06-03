# Un zest de Symfony

> A bittersweet symphony ? https://www.youtube.com/watch?v=1lyu1KKwC74

## Un composant Symfony

**On pense objet !**

Dès lors, dans un monde idéalement composé d'objets, nous tenterons d'utiliser des objets pour représenter tout ce que nous manipulons dans notre code. C'est en tout cas l'approche de Symfony et de ses composants autonomes - donc hors du framework Symfony ! - composants qui sont utilisés par un grand nombre d'autres projets, dont des frameworks comme Laravel.

Dans le même esprit, ajoutons à notre projet un composant incontournable de l'univers HTTP, j'ai nommé `HttpFoundation` et de ses classes proposées.

1. Dans notre code, utilisons la classe `Request` pour interagir avec notre requête.
2. Et de la classe `Response` pour retourner la réponse.

C'est parti, on suit la doc : https://symfony.com/doc/current/components/http_foundation.html

## Bonus réécriture sans _routeur_

S'il nous reste un peu de temps et si pas déjà fait, jetons un oeil au fichier `.htaccess`.

- On voit que l'on peut réécrire des URLs directement ici.
  - Les tester dans le navigateur.
- Puis décommentons la ligne qui permet d'accéder à un contact.
  - Coder la route en question.