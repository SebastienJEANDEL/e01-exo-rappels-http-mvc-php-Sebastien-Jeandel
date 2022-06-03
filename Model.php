<?php

/**
 * Le modèle représente nos données, qu'elles soient en base de données ou non
 */
class Model
{
    /**
     * Données du modèle
     */
    private $data = [
        'home' => [
            'title' => 'Bienvenue !',
        ],
        'contact' => [
            'title' => 'Nous contacter',
            'users' => [
                [
                    'name' => 'Philippe',
                    'email' => 'philippe@oclock.io',
                ],
                [
                    'name' => 'Alexis',
                    'email' => 'alexis@oclock.io',
                ],
                [
                    'name' => 'Thibaut',
                    'email' => 'thibaut@oclock.io',
                ],
                [
                    'name' => 'Claire',
                    'email' => 'claire@oclock.io',
                ],
                [
                    'name' => 'Jean-Christophe',
                    'email' => 'jc@oclock.io',
                ],
            ]
        ]
    ];

    /**
     * Retourne les données associées à la page transmise en argument
     */
    public function getData($page)
    {
        // On retourne la valeur qui correspond à la clé demandée
        return $this->data[$page];
    }
}
