<?php
/**
 * @var MapasCulturais\App $app
 * @var Cacicadas\Theme $this
 */

$this->import('community-address-form');
?>

<community-address-form
    v-else-if="country == 'COMMUNITY'"
    :entity="entity"
    :hierarchy="levelHierarchy"
    class="col-12"
    editable>
</community-address-form>

