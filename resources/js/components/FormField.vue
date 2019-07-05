<template>
    <div v-if="errors.any()">
        <h1>Has Errors</h1>
    </div>
</template>

<script>
import { Errors, FormField } from 'laravel-nova'

export default {
    mixins: [FormField],

    data: () => ({
        errors: {}
    }),

    created() {
        this.errors  = new Errors()
    },

    watch: {
        errors: function(errors) {
            window.scrollTo(0,0);
        }
    }
}
</script>
