<?php

namespace SettingsCacicadas;


use MapasCulturais\App;
use MapasCulturais\i;
use MapasCulturais\Entities\Agent;

class Plugin extends \MapasCulturais\Plugin
{
    function __construct($config = [])
    {
        $config += [
        
        ];

        parent::__construct($config);
    }

    public function _init()
    {

        $app = App::i();

        $self = $this;

        //Insere template partes das funções na edite e na single do agent
        $app->hook("template(agent.edit.<<edit1|edit2>>-entity-info-taxonomie-area):after", function () use($app) {
            /** @var \MapasCulturais\Themes\BaseV2\Theme $this */
            $this->part('registration-fields/functions',['isEditable' => true ]);
        });
        
    }

    public function register()
    {
    }

}