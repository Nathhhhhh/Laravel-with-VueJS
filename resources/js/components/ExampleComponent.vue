<template>
    <div>
        <p>

            <input type="text" v-model="name" style="border:2px black solid; background-color:cyan">
            <input type="checkbox" v-model="checkbox">

        </p>
        <p>

            Bonjour {{ name }} !

        </p>


    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                'name': 'nathan',
                'checkbox':'true'
            }


        }
    }

</script>
