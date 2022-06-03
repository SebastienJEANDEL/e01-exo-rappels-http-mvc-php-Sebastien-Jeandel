<?php

class View
{
    /**
     * Retourne le HTML du template avec les données transmises en argument
     * 
     * @param string $page Page de template à inclure
     * @param mixed[] $data Les variables de template
     * 
     * @return string Le contenu HTML généré
     */
    public function renderHtml(string $page, array $data)
    {
        // Enclenche la temporisation de sortie
        // La sortie PHP/HTML est mise en mémoire tampon (buffer)
        ob_start();

        // On inclut le layout complet, qui sera interprété en PHP
        include 'templates/layout.tpl.php';

        // https://www.php.net/manual/fr/function.ob-get-clean
        // Récupère le contenu du tampon de sortie puis l'efface
        $html = ob_get_clean();

        // On retourne le HTML généré
        return $html;
    }

    /**
     * Retourne le JSON des données transmises en argument
     */
    public function renderJson($data)
    {
        // https://www.php.net/manual/fr/function.header
        // Ajoute/modifie un en-tête de réponse HTTP
        header('Content-Type: application/json');
    
        // https://www.php.net/manual/fr/function.json-encode
        // Retourne la représentation JSON d'une valeur
        // On retourne le JSON encodé
        return json_encode($data);
    }
}