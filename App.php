<?php

class App
{
    /**
     * Lance l'application
     */
    public function run()
    {
        // Définit l'URL de base
        $this->setBaseUrl();

        // On détermine la destination de la route demandée
        $target = $this->getTargetFromUrl();

        // On va chercher le contenu en fonction de la destination trouvée
        $content = $this->dispatchRoute($target);

        return $content;
    }

    /**
     * Définit l'URL de base (avec ou sans sous-dossier)
     */
    private function setBaseUrl() {
        // On référence le sous-dossier dans lequel "vit" notre projet
        // - Soit "vide", si serveur de dev PHP ou serveur de production (https://oclock.io/ par ex.)
        // - Soit le chemin du sous-dossier du projet, transmis par Apache (via fichier .htaccess)
        // - On utilise une constante PHP, pratique car accessible de partout !
        // @link https://www.php.net/manual/en/function.define.php
        define('BASE_URL', $_SERVER['BASE_URL'] ?? '');
    }

    /**
     * Renvoie un couple Controller/Method selon le paramètre GET 'page'
     */
    private function getTargetFromUrl()
    {
        // Nos routes, URL => target
        $routes = [
            'home' => 'Controller@home',
            'contact' => 'Controller@contact',
            'api' => 'Controller@api',
            'fake' => 'Controller@fake',
        ];

        // Une page est-elle demandée en paramètre GET ?
        if (isset($_GET['page'])) {
            // Soit la route existe...
            if (isset($routes[$_GET['page']])) {
                $routeTarget = $routes[$_GET['page']];
            }
            // Soit non... => 404
            else {
                $routeTarget = 'Controller@error404';
            }
        } else {
            // Si aucune page demandé, la page par défaut est 'home'
            $routeTarget = $routes['home'];
        }

        // On retourne la page à afficher
        return $routeTarget;
    }
    
    /**
     * Exécute la destination demandée
     */
    private function dispatchRoute($routeTarget)
    {
        // On "split" la chaine pour extraire, à l'index :
        // 0 : le contrôleur à instancier
        // 1 : la méthode à appeler
        $targetParts = explode('@', $routeTarget);
        $controllerName = $targetParts[0];
        $methodName = $targetParts[1];

        // On instancie notre contrôleur, car on va devoir utiliser 'call_user_func' différemment
        $controller = new $controllerName;

        // https://www.php.net/manual/fr/function.method-exists.php
        // Indique si une fonction est définie
        if (!method_exists($controller, $methodName)) {
            $controller = new Controller();
            $methodName = 'error404';
        }

        // https://www.php.net/manual/fr/function.call-user-func
        // Appelle une fonction de rappel (callback) fournie par le premier argument
        // Version avec Class/Méthode
        return call_user_func([$controller, $methodName]);
    }
}