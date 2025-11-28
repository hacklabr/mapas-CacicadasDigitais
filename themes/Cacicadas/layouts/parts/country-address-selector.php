<?php
/**
 * @var MapasCulturais\App $app
 * @var Cacicadas\Theme $this
 */

use MapasCulturais\i;

?>

<div class="field col-12">
    <label class="field__title"><?= i::__('Cidade ou Comunidade') ?></label>
    <select :value="country" @change="country = $event.target.value; changeCountry();">
        <option value="BR"><?= i::__('Cidade') ?></option>
        <option value="COMMUNITY"><?= i::__('Comunidade') ?></option>
    </select>
</div>

