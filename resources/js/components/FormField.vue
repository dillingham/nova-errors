<template>
    <modal v-if="modalOpen" tabindex="-1" role="dialog" @modal-close="modalOpen = false">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden" style="width: 460px;">
            <div class="p-8">
                <h2 class="mb-6 text-90 font-normal text-xl">{{ __('Validation Errors') }}</h2>
                <div v-for="key in Object.keys(errors.all())" :key="key">
                    <div v-for="(error, index) in errors.get(key)" :key="index">
                        <p class="error-text pb-1 text-danger">{{ error }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-30 px-6 py-3 flex">
                <div class="ml-auto">
                    <button type="button" @click.prevent="modalOpen = false" class="btn text-80 font-normal h-9 px-3 mr-3 btn-link">
                        {{ __('Close') }}
                    </button>
                </div>
            </div>
        </div>
    </modal>
</template>

<script>
import { Errors, FormField } from 'laravel-nova'

export default {
    mixins: [FormField],

    props: {
        errors: {
            default: () => new Errors(),
        },
    },

    data: function()  {
        return {
            modalOpen: false
        }
    },

    watch: {
        errors: function(errors) {
            window.scrollTo(0,0);
            this.modalOpen = true;
        }
    }
}
</script>
