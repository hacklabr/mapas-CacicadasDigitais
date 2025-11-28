app.component('community-address-form', {
    template: $TEMPLATES['community-address-form'],
    emits: [],

    props: {
        entity: {
            type: Entity,
            required: true
        },
        hierarchy: {
            type: Object,
            default: () => null
        },
    },

    data() {
        return {
            cities: [],
            communityOptions: [
                { label: 'Carão', value: 'Carão' },
                { label: 'Arumã', value: 'Arumã' },
                { label: 'Vista Alegre', value: 'Vista Alegre' },
                { label: 'Pedra Branca', value: 'Pedra Branca' },
                { label: 'Arapiranga', value: 'Arapiranga' },
                { label: 'Capixauã', value: 'Capixauã' },
                { label: 'Outros', value: 'Outros' },
            ],
        }
    },

    computed: {
        hasPublicLocation() {
            return !!this.entity.$PROPERTIES.publicLocation;
        },
        statesAndCities() {
            return this.hierarchy || [];
        },
        states() {
            let result = [];

            if (this.statesAndCities.length > 0) {
                const statesArray = this.statesAndCities[1];

                Object.keys(statesArray).forEach((uf) => {
                    const stateData = statesArray[uf];
                    result.push({
                        value: uf,
                        label: stateData[0]
                    });
                });
            }

            return result.sort((a, b) => a.label.localeCompare(b.label));
        }
    },

    watch: {
        hierarchy: {
            handler() {
                this.populateCities();
            },
            immediate: true
        },
        'entity.address_level2'(newVal, oldVal) {
            if (newVal !== oldVal) {
                this.entity.address_level4 = null;
                this.populateCities();
                this.updateAddress();
            }
        },
        'entity.address_level4'() {
            this.updateAddress();
        },
        'entity.address_level5'() {
            this.updateAddress();
        },
        'entity.address_level6'() {
            this.updateAddress();
        },
        'entity.address_line1'() {
            this.updateAddress();
        }
    },

    methods: {
        onStateChange() {
            this.populateCities();
            this.updateAddress();
        },
        populateCities() {
            if (this.statesAndCities.length > 0) {
                const uf = this.entity.address_level2;

                const statesArray = this.statesAndCities[1];
                if (!uf || !statesArray[uf]) {
                    this.cities = [];
                    return;
                }

                this.cities = statesArray[uf][1]
                    .map(c => c[0])
                    .sort((a, b) => a.localeCompare(b));
                return;
            }

            this.cities = [];
        },
        isRequired(field){
            return $DESCRIPTIONS[this.entity.__objectType][field]?.required;
        },
        updateAddress() {
            this.entity.address_level0 = 'COMMUNITY';

            const parts = [];

            if (this.entity.address_level5) {
                parts.push(this.entity.address_level5);
            }

            if (this.entity.address_level6) {
                parts.push(this.entity.address_level6);
            }

            if (this.entity.address_level4 && this.entity.address_level2) {
                parts.push(`${this.entity.address_level4}/${this.entity.address_level2}`);
            } else if (this.entity.address_level4) {
                parts.push(this.entity.address_level4);
            } else if (this.entity.address_level2) {
                parts.push(this.entity.address_level2);
            }

            if (this.entity.address_line1) {
                parts.push(this.entity.address_line1);
            }

            const address = parts.filter(Boolean).join(' - ');
            this.entity.address = address;
            this.entity.endereco = address;
        },
        showAddress() {
            return this.entity.address || this.entity.endereco;
        }
    },

    mounted() {
        this.entity.address_level0 = 'COMMUNITY';
        this.populateCities();
        this.updateAddress();
    }
});

