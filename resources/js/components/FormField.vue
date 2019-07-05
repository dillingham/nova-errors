<template>
    <div v-if="errors.any()" class="p-6">
        <div v-for="key in Object.keys(errors.all())" :key="key">
            <div v-for="(error, index) in errors.get(key)" :key="index">
                <span class="error-text mt-2 text-danger">{{ error }}</span>
            </div>
        </div>
    </div>
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

    watch: {
        errors: function(errors) {
            console.log(errors.all());
            window.scrollTo(0,0);
        }
    }
}
</script>
