<?php

use CustomEntity\EntityDefinition;

use CustomEntity\Parts as parts;

return [
    'plugins' => [
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        'Analytics',
        'Accessibility',
        'AdminLoginAsUser',
        'SettingsCacicadas',
        'CustomEntity' => [
            'entities' => fn() => [
                new EntityDefinition (
                    slug: 'especie',
                    owner: parts\OwnerAgent::add()
                        ->label('Guardião'),

                    icon: 'f7:tree',
                    color: '#b86a6a',
                    texts: [
                        'entidades' => 'espécies',
                        'entidade' => 'espécie',
                    ],

                    parts: [
                        parts\Panel::add(),
                        parts\Search::add(),

                        parts\Avatar::add(),
                        parts\Header::add(),
                        parts\Links::add(),
                        parts\Downloads::add(),
                        
                        parts\Type::add([
                            1 => 'Frutífera',
                            2 => 'Extrativista',
                            3 => 'Medicinal',
                            4 => 'Outras'
                        ]),

                        parts\Name::add()->required(),
                        parts\ShortDescription::add(),

                        parts\GeoLocation::add()
                            ->showLatLongFields(true)
                            ->required(),
                        
                        parts\MetadataField::add('setor')
                            ->label('Setor / Região'),
                        
                        parts\MetadataField::add('nomeCientifico')
                            ->label('Nome Científico'),
                        
                        parts\MetadataField::add('pontoDeReferencia')
                            ->label('Ponto de Referência'),

                        parts\MetadataField::add('situacao')
                            ->label('Situação')
                            ->type('select')
                            ->options([
                                'Preservado',
                                'Em risco',
                                'Em manejo'
                            ]),


                        parts\LongDescription::add(),
                        
                        parts\Taxonomy::add('usos')
                            ->description('Usos Tradicionais')
                            ->terms([
                                'Alimentar',
                                'Cosmético',
                                'Econômico',
                                'Fitoterápico',
                                'Medicinal',
                            ]),

                        parts\ImageGallery::add(),
                        parts\VideoGallery::add(),

                        parts\Administrators::add(),
                        parts\RelatedAgents::add(),

                        parts\Statuses::add(),
                    ],
                ),
            ]
        ],
    ]
]; 