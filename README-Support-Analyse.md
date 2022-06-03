# Besoins #1

## Intercepter une requête

> :hand: Via le protocole HTTP, la _matière première_ est **la requête** (ou toute information contenue dedans). Nous devons nous appuyer dessus pour **identifier l'action à effectuer, depuis le (ou un) point d'entrée de l'application**.

- Quel(s) fichier(s)/classe(s)/méthodes(s) s'occupe(nt) de ce traitement ?


## Appeler la page correspondante

> :hand: Une fois la requête interceptée, on la transmet à une fonction qui va **se charger d'exécuter la fonctionnalité attendue**.

- Quel(s) fichier(s)/classe(s)/méthodes(s) s'occupe(nt) de ce traitement ?


## Renvoyer une réponse

> :hand: L'objectif final de toute requête HTTP est le retour d'une réponse. **Générons, avec des données le cas échéant, le contenu de la réponse** puis affichons cette réponse. Selon son format, la réponse contient un _Content-Type_ adapté (HTML, JSON, etc.).

- Quel(s) fichier(s)/classe(s)/méthodes(s) s'occupe(nt) de ce traitement ?

# Besoins #2

## Gestion des erreurs

> :hand: La gestion des erreurs ou cas limites doit toujours être prise en charge à chaque nouveau code ajouté. **Par exemple une page non trouvée génére une réponse avec un statut 404**. Le _status code_ adéquat doit être fourni à la réponse (quand c'est autre chose que "200 OK").

- Quel(s) fichier(s)/classe(s)/méthodes(s) s'occupe(nt) de ce traitement ?

## Accès aux données

> :hand: En général les données sont stockées indépendemment du code qui les manipule. Nous aurons **des fonctions d'accès aux données** qui nous permettent de les manipuler pour pouvoir les afficher par exemple.

- Quel(s) fichier(s)/classe(s)/méthodes(s) s'occupe(nt) de ce traitement ?

