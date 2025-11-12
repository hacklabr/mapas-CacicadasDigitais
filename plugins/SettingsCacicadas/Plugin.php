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

        $app->hook("template(agent.<<edit|single>>.header-content):after",function() use ($app){
            /** @var Theme $this */
            $this->addTaxonoyTermsToJs("funcao");
        });

        $app->hook("template(agent.single.<<single1|single2>>-entity-info-taxonomie-area):after", function () use($app) {
            /** @var \MapasCulturais\Themes\BaseV2\Theme $this */
            $this->part('registration-fields/functions',['isEditable' => false ]);
        });


        //Hooks para definir a função para campo arroba 

         $app->hook("registrationFieldTypes.saveToEntity", function($entity_field, $value) use ($app){
            if($entity_field == '@terms:funcao') {
                $this->terms['funcao'] = $value;
            }
        });

        $app->hook("registrationFieldTypes.fetchFromEntity", function($entity_field, &$value){
            if($entity_field == '@terms:funcao') {
                $value = $this->terms['funcao'];
            }
        });

        $app->hook("registrationFieldTypes--agent-<<owner|collective>>-field-config-fields_labels", function(&$fields_labels){
            $fields_labels['@terms:funcao'] = " " . i::__('Função');
        });

        $app->hook("template(embedtools.formbuilder.registrationFieldTypes--agent-<<owner|collective>>-field-config):after", function($agent_fields){
            $this->part('registration-fields/agent-fields-config', ['agent_fields' => $agent_fields]);
        });

        $app->hook("template(embedtools.registrationform.registrationFieldTypes--agent-<<owner|collective>>-field):after", function(){
            $this->part('registration-fields/agent-fields-form');
        });


    }

    public function register()
    {
       $this->registerTaxonomies();
    }

    public function registerTaxonomies()
    {
        $app = App::i();

        $functions = [
            i::__("Agente Ambiental"),
            i::__("Agente Comunitário(a)"),
            i::__("Agente Cultural"),
            i::__("Agente de Saúde"),
            i::__("Agente Pastoral"),
            i::__("Agricultor(a)"),
            i::__("Agroextrativista"),
            i::__("Analista de Dados"),
            i::__("Apicultor(a)"),
            i::__("Apresentador(a)"),
            i::__("Apoiador(a)"),
            i::__("Apoiador(a) Técnico(a)"),
            i::__("Artesão(ã)"),
            i::__("Articulador(a)"),
            i::__("Articulador(a) de Rede"),
            i::__("Artista"),
            i::__("Ator / Atriz"),
            i::__("Benzedeira"),
            i::__("Barqueiro(a)"),
            i::__("Brigadista"),
            i::__("Caçador(a)"),
            i::__("Cantor(a)"),
            i::__("Carpinteiro(a)"),
            i::__("Catequista"),
            i::__("Ceramista"),
            i::__("Circense"),
            i::__("Comerciante"),
            i::__("Compositor(a)"),
            i::__("Comunicador(a) Popular"),
            i::__("Condutor(a) de Turistas"),
            i::__("Construtor(a) de Embarcações"),
            i::__("Coordenador(a)"),
            i::__("Cozinheira Comunitária"),
            i::__("Cozinheiro(a)"),
            i::__("Cuidador(a)"),
            i::__("Cuidador(a) de Idosos"),
            i::__("Curandeiro(a)"),
            i::__("Dançarino(a)"),
            i::__("Defesa de Direitos"),
            i::__("Desenvolvedor(a)"),
            i::__("Designer"),
            i::__("DJ"),
            i::__("Educador(a)"),
            i::__("Educador(a) Infantil"),
            i::__("Editor(a) de Vídeo"),
            i::__("Enfermeiro(a)"),
            i::__("Erveiro(a)"),
            i::__("Escritor(a)"),
            i::__("Esportista"),
            i::__("Estudante"),
            i::__("Facilitador(a)"),
            i::__("Facilitador(a) Territorial"),
            i::__("Feirante"),
            i::__("Fotógrafo(a)"),
            i::__("Fotógrafo(a) Comunitário(a)"),
            i::__("Gestor(a) Ambiental"),
            i::__("Gestor(a) de Projeto"),
            i::__("Guia Comunitário(a)"),
            i::__("Guia de Trilha"),
            i::__("Guia Espiritual"),
            i::__("Ilustrador(a)"),
            i::__("Instrutor(a) de Esporte"),
            i::__("Jornalista"),
            i::__("Juventude Comunitária"),
            i::__("Liderança Comunitária"),
            i::__("Liderança Religiosa"),
            i::__("Marceneiro(a)"),
            i::__("Mediador(a)"),
            i::__("Missionário(a)"),
            i::__("Mobilizador(a)"),
            i::__("Motorista"),
            i::__("Mestre de Obras"),
            i::__("Mulher de Rede"),
            i::__("Músico(a)"),
            i::__("Operador(a) de Rádio"),
            i::__("Outros"),
            i::__("Pajé"),
            i::__("Palhaço(a)"),
            i::__("Parteira"),
            i::__("Parteira Espiritual"),
            i::__("Parteira Tradicional"),
            i::__("Pedreiro(a)"),
            i::__("Pesquisador(a)"),
            i::__("Pescador(a)"),
            i::__("Poeta / Slamer"),
            i::__("Presidente de Associação"),
            i::__("Produtor(a) Audiovisual"),
            i::__("Produtor(a) Cultural"),
            i::__("Produtor(a) Rural"),
            i::__("Programador(a)"),
            i::__("Radialista"),
            i::__("Raizeiro(a)"),
            i::__("Representante de Associação"),
            i::__("Rezador(a)"),
            i::__("Roteirista"),
            i::__("Secretário(a)"),
            i::__("Seringueiro(a)"),
            i::__("Tecelão(ã)"),
            i::__("Técnico(a) Ambiental"),
            i::__("Técnico(a) de Enfermagem"),
            i::__("Técnico(a) de Informática"),
            i::__("Tesoureiro(a)"),
            i::__("Trabalhador(a) Doméstico(a)"),
            i::__("Treinador(a)"),
            i::__("Trançador(a)"),
            i::__("Voluntário(a)"),
            i::__("Visitante"),
            i::__("Xamã"),
        ];

        $def = new \MapasCulturais\Definitions\Taxonomy(55, 'funcao','Função',  $functions,
            
            i::__("Você deve informar ao menos uma Função")
        );

        $app->registerTaxonomy(Agent::class, $def);
        
    }
}