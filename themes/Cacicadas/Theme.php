<?php

namespace Cacicadas;

use Cacicadas\CountryLocalizations\CommunityLocalization;
use MapasCulturais\App;

class Theme extends \MapasCulturais\Themes\BaseV2\Theme
{

    static function getThemeFolder()
    {
        return __DIR__;
    }

    function _init()
    {
        parent::_init();

        $app = App::i();

        $app->registerCountryLocalization(new CommunityLocalization());

        $app->hook('template(<<*>>.<<*>>.country-address-form):before', function () {
            $this->part('country-address-selector');
        });

        $app->hook('template(<<*>>.<<*>>.country-address-form):forms', function () {
            $this->part('country-address-community');
        });
    }
}
