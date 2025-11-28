<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    entity-field
    entity-map
    mc-select
');
?>

<div class="community-address-form">
    <?php $this->applyTemplateHook('community-address-form','before'); ?>
    <div class="grid-12">
        <?php $this->applyTemplateHook('community-address-form','begin'); ?>

        <div class="field col-6 sm:col-12">
            <label class="field__title">
                <?= i::__('UF') ?>
                <span v-if="isRequired('address_level2')" class="required">*<?= i::__('obrigatório') ?></span>
            </label>
            <select v-model="entity.address_level2" @change="onStateChange">
                <option value=""><?= i::__('Selecione') ?></option>
                <option v-for="state in states" :value="state.value">{{state.label}}</option>
            </select>
        </div>

        <div class="field col-6 sm:col-12">
            <label class="field__title">
                <?= i::__('Município') ?>
                <span v-if="isRequired('address_level4')" class="required">*<?= i::__('obrigatório') ?></span>
            </label>
            <select v-model="entity.address_level4" @change="updateAddress">
                <option value=""><?= i::__('Selecione') ?></option>
                <option v-for="city in cities" :value="city">{{city}}</option>
            </select>
        </div>

        <div class="field col-12">
            <label class="field__title">
                <?= i::__('Comunidade') ?>
                <span v-if="isRequired('address_level5')" class="required">*<?= i::__('obrigatório') ?></span>
            </label>
            <mc-select
                :options="communityOptions"
                v-model:default-value="entity.address_level5"
                @change-option="updateAddress"
                placeholder="<?= i::__("Selecione a comunidade") ?>">
            </mc-select>
        </div>

        <entity-field
            classes="col-12"
            :entity="entity"
            prop="address_level6"
            label="<?= i::__('Setor / Região')?>"
            @change="updateAddress">
        </entity-field>

        <entity-field
            classes="col-12"
            :entity="entity"
            prop="address_line1"
            label="<?= i::__('Ponto de referência')?>"
            @change="updateAddress">
        </entity-field>

        <div class="col-12" v-if="hasPublicLocation">
            <div class="col-6 sm:col-12 field public-location">
                <entity-field  @change="updateAddress()" type="checkbox" classes="public-location__field col-6" :entity="entity" prop="publicLocation" label="<?php i::esc_attr_e('Localização pública')?>">
                    <?php if($this->isEditable()): ?>
                        <template #info>
                            <?php $this->info('cadastro -> configuracoes-entidades -> localizacao-publica') ?>
                        </template>
                    <?php endif; ?>
                </entity-field>

                <small class="field__description">
                    <?php i::_e('Marque o campo acima para tornar o endereço público ou deixe desmarcado para manter o endereço privado.')?>
                </small>
            </div>
        </div>

        <div class="col-12">
            <p class="community-address-form__address">
                <span v-if="showAddress()">{{showAddress()}}</span>
                <span v-else><?= i::_e("Sem Endereço"); ?></span>
            </p>
            <entity-map :entity="entity" editable></entity-map>
        </div>

        <?php $this->applyTemplateHook('community-address-form','end'); ?>
    </div>
    <?php $this->applyTemplateHook('community-address-form','after'); ?>
</div>

