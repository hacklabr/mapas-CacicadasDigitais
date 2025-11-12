<?php

use MapasCulturais\Utils;
/**
 * See https://github.com/Respect/Validation to know how to write validations
 */

 $items = array(
    \MapasCulturais\i::__('Espaços comunitários') => array(
        'range' => array(300,399),
        'items' => array(  300 => array( 'name' => \MapasCulturais\i::__('Instituição Pública de Ensino Regular Federal')),
              1 => array( 'name' => \MapasCulturais\i::__('Cineclube')),
              2 => array( 'name' => \MapasCulturais\i::__ ('Biblioteca')),
              3 => array( 'name' => \MapasCulturais\i::__('Casa de Farinha')),
              4 => array( 'name' => \MapasCulturais\i::__('Casa de Cultura')),
              5 => array( 'name' => \MapasCulturais\i::__('Casa de Reuniões')),
              6 => array( 'name' => \MapasCulturais\i::__('Casa de Família')),
              7 => array( 'name' => \MapasCulturais\i::__('Casa de Saúde Comunitária')),
              8 => array( 'name' => \MapasCulturais\i::__('Posto de Saúde')),
              9 => array( 'name' => \MapasCulturais\i::__('Escola')),
              10 => array( 'name' => \MapasCulturais\i::__('Creche')),
              11 => array( 'name' => \MapasCulturais\i::__('Centro Comunitário')),
              12 => array( 'name' => \MapasCulturais\i::__('Centro de Formação')),
              13 => array( 'name' => \MapasCulturais\i::__('Centro de Referência')),
              14 => array( 'name' => \MapasCulturais\i::__('sede da Associação')),
              15 => array( 'name' => \MapasCulturais\i::__('Igreja')),
              16 => array( 'name' => \MapasCulturais\i::__('Capela')),
              17 => array( 'name' => \MapasCulturais\i::__('Terreiro')),
              18 => array( 'name' => \MapasCulturais\i::__('Espaço Sagrado')),
              19 => array( 'name' => \MapasCulturais\i::__('Mercado')),
              20 => array( 'name' => \MapasCulturais\i::__('Feira')),
              21 => array( 'name' => \MapasCulturais\i::__('Bar')),
              22 => array( 'name' => \MapasCulturais\i::__('Restaurante')),
              23 => array( 'name' => \MapasCulturais\i::__('Café')),
              24 => array( 'name' => \MapasCulturais\i::__('Cantina')),
              25 => array( 'name' => \MapasCulturais\i::__('Campo de Futebol')),
              26 => array( 'name' => \MapasCulturais\i::__('Quadra')),
              27 => array( 'name' => \MapasCulturais\i::__('Ginásio')),
              28 => array( 'name' => \MapasCulturais\i::__('Praça')),
              29 => array( 'name' => \MapasCulturais\i::__('Coreto')),
              30 => array( 'name' => \MapasCulturais\i::__ ('Ponto de Encontro')),
              31 => array( 'name' => \MapasCulturais\i::__('Igarapé')),
              32 => array( 'name' => \MapasCulturais\i::__('Rio')),
              33 => array( 'name' => \MapasCulturais\i::__('Saída de Barcos')),
              34 => array( 'name' => \MapasCulturais\i::__('Porto')),
              35 => array( 'name' => \MapasCulturais\i::__('Trapiche')),
              36 => array( 'name' => \MapasCulturais\i::__('Beira de Rio')),
              37 => array( 'name' => \MapasCulturais\i::__('Praia')),
              38 => array( 'name' => \MapasCulturais\i::__('Floresta')),
              39 => array( 'name' => \MapasCulturais\i::__('Sítio')),
              40 => array( 'name' => \MapasCulturais\i::__('Roçado')),
              41 => array( 'name' => \MapasCulturais\i::__('Área de Manejo')),
              42 => array( 'name' => \MapasCulturais\i::__('Ponto de Coleta')),
              43 => array( 'name' => \MapasCulturais\i::__('Casa de Sementes')),
              44 => array( 'name' => \MapasCulturais\i::__('Viveiro')),
              45 => array( 'name' => \MapasCulturais\i::__('Casa de Artesanato')),
              46 => array( 'name' => \MapasCulturais\i::__('Oficina Comunitária')),
              47 => array( 'name' => \MapasCulturais\i::__('Estúdio de Gravação')),
              48 => array( 'name' => \MapasCulturais\i::__('Ponto de Internet')),
              49 => array( 'name' => \MapasCulturais\i::__('Rádio Comunitária')),
              50 => array( 'name' => \MapasCulturais\i::__('Casa de Memória')),
              51 => array( 'name' => \MapasCulturais\i::__('Museu Comunitário')),
              52 => array( 'name' => \MapasCulturais\i::__('Escritório de Projeto')),
              53 => array( 'name' => \MapasCulturais\i::__('Casa de Apoio')),
              54 => array( 'name' => \MapasCulturais\i::__('asa de Passagem')),
              55 => array( 'name' => \MapasCulturais\i::__('Aldeia')),
              56 => array( 'name' => \MapasCulturais\i::__('Comunidade')),
              57 => array( 'name' => \MapasCulturais\i::__('Base de Apoio')),
              58 => array( 'name' => \MapasCulturais\i::__('Ponto de Venda')),
              59 => array( 'name' => \MapasCulturais\i::__('Armazém')),
              60 => array( 'name' => \MapasCulturais\i::__('Loja')),
              61 => array( 'name' => \MapasCulturais\i::__('Laboratório Natural')),
              62 => array( 'name' => \MapasCulturais\i::__('Horta Comunitária')),
              63 => array( 'name' => \MapasCulturais\i::__('Quintal Produtivo')),
              64 => array( 'name' => \MapasCulturais\i::__('Tanque de Peixes')),
              65 => array( 'name' => \MapasCulturais\i::__('Casarão')),
              66 => array( 'name' => \MapasCulturais\i::__('Galpão')),
              67 => array( 'name' => \MapasCulturais\i::__('Barracão')),
              68 => array( 'name' => \MapasCulturais\i::__('Cabanagem (ou Casa de Palha, se for termo local)')),
              69 => array( 'name' => \MapasCulturais\i::__('Mirante')),
              70 => array( 'name' => \MapasCulturais\i::__('Ponto de Observação')),
              71 => array( 'name' => \MapasCulturais\i::__('Ponto Turístico')),
              72 => array( 'name' => \MapasCulturais\i::__('Trilha')),
              73 => array( 'name' => \MapasCulturais\i::__('Embarcação')),
              74 => array( 'name' => \MapasCulturais\i::__('Centro de Visitantes')),

          )
    ),
  
);

function ordenaSubcategorias(&$array) {
    ksort($array);
    
    foreach ($array as &$item) {
        if (isset($item['items'])) {
            uasort($item['items'], function($a, $b) {
                return strcmp($a['name'], $b['name']);
            });
        }
    }
}

ordenaSubcategorias($items);

return array(
    'metadata' => array(
        'emailPublico' => array(
            'label' => \MapasCulturais\i::__('Email Público'),
            'validations' => array(
                'v::email()' => \MapasCulturais\i::__('O email público não é um email válido.')
            ),
            'available_for_opportunities' => true
        ),

        'emailPrivado' => array(
            'label' => \MapasCulturais\i::__('Email Privado'),
            'validations' => array(
                'v::email()' => \MapasCulturais\i::__('O email privado não é um email válido.')
            ),
        	'private' => true,
            'available_for_opportunities' => true
        ),
        'cnpj' => array(
            'private' => true,
            'label' => \MapasCulturais\i::__('CNPJ'),
            'validations' => array(
               'v::cnpj()' => \MapasCulturais\i::__('O número de documento informado é inválido.')
            ),
            'available_for_opportunities' => true
        ),
        'razaoSocial' => array(
            'label' => \MapasCulturais\i::__('Razão Social'),
            'type' => 'text',
            'available_for_opportunities' => true
        ),
        'telefonePublico' => array(
            'label' => \MapasCulturais\i::__('Telefone Público'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('Por favor, informe o telefone público no formato (xx) xxxx-xxxx.')
            ),
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),

        'telefone1' => array(
            'label' => \MapasCulturais\i::__('Telefone 1'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('Por favor, informe o telefone 1 no formato (xx) xxxx xxxx.')
            ),
        	'private' => true,
            'available_for_opportunities' => true,
            'field_type' => 'brPhone'
        ),


        'telefone2' => array(
            'label' => \MapasCulturais\i::__('Telefone 2'),
            'type' => 'string',
            'validations' => array(
                'v::brPhone()' => \MapasCulturais\i::__('Por favor, informe o telefone 2 no formato ')
            ),
        	'private' => true,
            'available_for_opportunities' => true,
            'field_type' => 'brPhone',

        ),

        /*
        'virtual_fisico' => array(
            'label' => \MapasCulturais\i::__('Virtual ou físico'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Físico'),
                'virtual' => \MapasCulturais\i::__('Virtual')
            )
        ),
        */
        'acessibilidade' => array(
            'label' => \MapasCulturais\i::__('Acessibilidade'),
            'type' => 'select',
            'options' => array(
                '' => \MapasCulturais\i::__('Não Informado'),
                'Sim' => \MapasCulturais\i::__('Sim'),
                'Não' => \MapasCulturais\i::__('Não')
            )
        ),
        'acessibilidade_fisica' => array(
            'label' => \MapasCulturais\i::__('Acessibilidade física'),
            'type' => 'multiselect',
            'allowOther' => true,
            'allowOtherText' => \MapasCulturais\i::__('Outros'),
            'options' => array(
                \MapasCulturais\i::__('Banheiros adaptados'),
                \MapasCulturais\i::__('Rampa de acesso'),
                \MapasCulturais\i::__('Elevador'),
                \MapasCulturais\i::__('Sinalização tátil'),

                // vindos do sistema de museus.cultura.gov.br
                \MapasCulturais\i::__('Bebedouro adaptado'),
                \MapasCulturais\i::__('Cadeira de rodas para uso do visitante'),
                \MapasCulturais\i::__('Circuito de visitação adaptado'),
                \MapasCulturais\i::__('Corrimão nas escadas e rampas'),
                \MapasCulturais\i::__('Elevador adaptado'),
                \MapasCulturais\i::__('Rampa de acesso'),
                \MapasCulturais\i::__('Sanitário adaptado'),
                \MapasCulturais\i::__('Telefone público adaptado'),
                \MapasCulturais\i::__('Vaga de estacionamento exclusiva para deficientes'),
                \MapasCulturais\i::__('Vaga de estacionamento exclusiva para idosos'),
                '@NA' => \MapasCulturais\i::__('Não possui')
            )
        ),
        'capacidade' => array(
            'label' => \MapasCulturais\i::__('Capacidade'),
            'validations' => array(
                "v::intVal()->positive()" => \MapasCulturais\i::__("A capacidade deve ser um número positivo.")
            ),
            'available_for_opportunities' => true
        ),

        'endereco' => array(
            'label' => \MapasCulturais\i::__('Endereço'),
            'type' => 'text'
        ),


        'En_CEP' => [
            'label' => \MapasCulturais\i::__('CEP'),
        ],
        'En_Nome_Logradouro' => [
            'label' => \MapasCulturais\i::__('Logradouro'),
        ],
        'En_Num' => [
            'label' => \MapasCulturais\i::__('Número'),
        ],
        'En_Complemento' => [
            'label' => \MapasCulturais\i::__('Complemento'),
        ],
        'En_Bairro' => [
            'label' => \MapasCulturais\i::__('Bairro'),
        ],
        'En_Municipio' => [
            'label' => \MapasCulturais\i::__('Município'),
        ],
        'En_Estado' => [
            'label' => \MapasCulturais\i::__('Estado'),
            'type' => 'select',
            'options' => array(
                'AC'=>'Acre',
                'AL'=>'Alagoas',
                'AP'=>'Amapá',
                'AM'=>'Amazonas',
                'BA'=>'Bahia',
                'CE'=>'Ceará',
                'DF'=>'Distrito Federal',
                'ES'=>'Espírito Santo',
                'GO'=>'Goiás',
                'MA'=>'Maranhão',
                'MT'=>'Mato Grosso',
                'MS'=>'Mato Grosso do Sul',
                'MG'=>'Minas Gerais',
                'PA'=>'Pará',
                'PB'=>'Paraíba',
                'PR'=>'Paraná',
                'PE'=>'Pernambuco',
                'PI'=>'Piauí',
                'RJ'=>'Rio de Janeiro',
                'RN'=>'Rio Grande do Norte',
                'RS'=>'Rio Grande do Sul',
                'RO'=>'Rondônia',
                'RR'=>'Roraima',
                'SC'=>'Santa Catarina',
                'SP'=>'São Paulo',
                'SE'=>'Sergipe',
                'TO'=>'Tocantins',
            )
        ],

        'horario' => array(
            'label' => \MapasCulturais\i::__('Horário de funcionamento'),
            'type' => 'textarea',
            'available_for_opportunities' => true
        ),

        'criterios' => array(
            'label' => \MapasCulturais\i::__('Critérios de uso do espaço'),
            'type' => 'text'
        ),

        'site' => array(
            'label' => \MapasCulturais\i::__('Site'),
            'validations' => array(
                "v::url()" => \MapasCulturais\i::__("A url informada é inválida.")
            ),
            'available_for_opportunities' => true
        ),
        'facebook' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Facebook'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('facebook.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('facebook.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL válida ou o nome ou id do usuário.")
            ),
            'placeholder' => \MapasCulturais\i::__('nomedousuario ou iddousuario'),
            'available_for_opportunities' => true
        ),
        'twitter' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Twitter'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('x.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('x.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
            'available_for_opportunities' => true
        ),
        'instagram' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Instagram'),
            'available_for_opportunities' => true,
            'serialize' =>function($value){
                $result = Utils::parseSocialMediaUser('instagram.com', $value);
                if($result && $result[0] == '@'){
                    $result = substr($result,1);
                }
                return $result;
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('instagram.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
        ),
        'linkedin' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Linkedin'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('linkedin.com', $value, 'linkedin');
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('linkedin.com'), v::regex('/^@?([\-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
            'available_for_opportunities' => true
        ),
        'vimeo' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Vimeo'),
            'validations' => array(
                "v::oneOf(v::urlDomain('vimeo.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('vimeo.com', $value);
            },
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
            'available_for_opportunities' => true
        ),
        'spotify' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Spotify'),
            'validations' => array(
                "v::oneOf(v::urlDomain('open.spotify.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' => function($value) {
                return Utils::parseSocialMediaUser('open.spotify.com', $value);
            },
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
            'available_for_opportunities' => true
        ),
        'youtube' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('YouTube'),
            'validations' => array(
                "v::oneOf(v::urlDomain('youtube.com'), v::regex('/^(@|channel\/)?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('youtube.com', $value);
            },
            'placeholder' => \MapasCulturais\i::__('iddocanal'),
            'available_for_opportunities' => true
        ),
        'pinterest' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Pinterest'),
            'validations' => array(
                "v::oneOf(v::urlDomain('pinterest.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('pinterest.com', $value);
            },
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
            'available_for_opportunities' => true
        ),
        'tiktok' => array(
            'type' => "socialMedia",
            'label' => \MapasCulturais\i::__('Tiktok'),
            'serialize' =>function($value){
                return Utils::parseSocialMediaUser('tiktok.com', $value);
            },
            'validations' => array(
                "v::oneOf(v::urlDomain('tiktok.com'), v::regex('/^@?([-\w\d\.]+)$/i'))" => \MapasCulturais\i::__("O valor deve ser uma URL ou usuário válido.")
            ),
            'placeholder' => \MapasCulturais\i::__('nomedousuario'),
            'available_for_opportunities' => true
        ),

    ),

/**
 * Equipamentos Culturais
 */
    'items' => $items,
    /* EXEMPLOS DE METADADOS:

    'cnpj' => array(
        'label' => 'CNPJ',
        'type' => 'text',
        'validations' => array(
            'unique' => 'Este CNPJ já está cadastrado em nosso sistema.',
            'v::cnpj()' => 'O CNPJ é inválido.'
        )
    ),
    'cpf' => array(
        'label' => 'CPF',
        'type' => 'text',
        'validations' => array(
            'required' => 'Por favor, informe o CPF.',
            'v::cpf()' => 'O CPF é inválido.'
        )
    ),
    'radio' => array(
        'label' => 'Um exemplo de input radio',
        'type' => 'radio',
        'options' => array(
            'valor1' => 'Label do valor 1',
            'valor2' => 'Label do valor 2',
        ),
        'default_value' => 'valor1'
    ),
    'checkboxes' => array(
        'label' => 'Um exemplo de grupo de checkboxes',
        'type' => 'checkboxes',
        'options' => array(
            'valor1' => 'Label do Primeiro checkbox',
            'valor2' => 'Label do Primeiro checkbox'
        ),
        'default_value' => array(),
        'validations' => array(
            'v::arrayType()->notEmpty()' => 'Você deve marcar ao menos uma opção.'
        )
    ),
    'checkbox' => array(
        'label' => 'Um exemplo de campo booleano com checkbox.',
        'type' => 'checkbox',
        'input_value' => 1,
        'default_value' => 0
    ),
    'email' => array(
        'label' => 'Email público para contato',
        'type' => 'text',
        'validations'=> array(
            'v::email()' => 'O email informado é inválido.'
        )
    ),
    'site' => array(
        'label' => 'Site',
        'type' => 'text',
        'validations'=> array(
            'v::url()' => 'A URL informada é inválida.'
        )
    ),
    'estado' => array(
        'label' => 'Estado de Residência',
        'type' => 'select',
        'options' => array(
            ''   => '',
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AM' => 'Amazonas',
            'AP' => 'Amapá',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MG' => 'Minas Gerais',
            'MS' => 'Mato Grosso do Sul',
            'MT' => 'Mato Grosso',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'PR' => 'Paraná',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'RS' => 'Rio Grande do Sul',
            'SC' => 'Santa Catarina',
            'SE' => 'Sergipe',
            'SP' => 'São Paulo',
            'TO' => 'Tocantins',
            ''   => '',
            'OUT'   => 'Resido Fora do Brasil'
        ),

        'validations' => array(
            "v::stringType()->in('AC','AL','AM','AP','BA','CE','DF','ES','GO','MA','MG','MS','MT','PA','PB','PE','PI','PR','RJ','RN','RO','RR','RS','SC','SE','SP','TO','OUT')" => 'O estado informado não existe.'
        )
    )
     */
);
