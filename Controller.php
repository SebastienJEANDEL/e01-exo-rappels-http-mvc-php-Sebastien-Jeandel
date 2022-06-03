<?php

class Controller
{
    /**
     * Gère l'affichage de la home
     */
    public function home()
    {
        // On va chercher les données de la home
        $data = $this->getData('home');
    
        // On appelle la fonction d'affichage du template, avec les données reçues
        return $this->renderHtml('home', $data);
    }

    /**
     * Gère l'affichage de la page contact
     */
    public function contact()
    {
        $data = $this->getData('contact');

        return $this->renderHtml('contact', $data);
    }

    /**
     * Gère l'affichage de la page API
     */
    public function api()
    {
        // On va chercher les users dans les données de la page contact
        $data = $this->getData('contact');

        // On appelle la fonction d'affichage en JSON, avec les données reçues
        return $this->renderJson($data['users']);
    }

    /**
     * Gère l'affichage de la page 404
     */
    function error404()
    {
        http_response_code(404);
    
        // Ne dépend pas du layout, on verra pourquoi juste après :D
        return '<html>
<head>
    <title>Page non trouvée</title>
</head>
    <body>
        <h1>Page non trouvée</h1>
    </body>
</html>';
    }
    
    private function renderHtml($page, $data)
    {
        $view = new View();

        return $view->renderHtml($page, $data);
    }

    private function renderJson($data)
    {
        $view = new View();

        return $view->renderJson($data);
    }

    private function getData($page)
    {
        $model = new Model();

        return $model->getData($page);
    }
}