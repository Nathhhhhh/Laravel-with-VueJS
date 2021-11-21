<template>
    <div>
        <div class="container-fluid d-flex flex-column bg-light min-vw-100 min-vh-100 justify-content-center align-items-center"
            style="--bs-bg-opacity: .5;">
            <div class="w-25 border-bottom mb-4 border-dark">
                <div v-for="comment in comments" :key="comment.body" class="d-flex mb-4 bg-info rounded justify-content-center border-dark">

                   <span>{{comment.body}}</span>
                </div>
            </div>
            <div class="w-25">
                <form action="" @submit.prevent="submitComment">
                    <!-- prevent sert à dire à JS : quand tu submit ne fait rien d'autre que d'executer la fonction -> la page ne va donc pas se recharger  -->
                    <div class="form-floating mb-2">
                        <textarea class="form-control" v-model="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Commenter</button>

                </form>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

        props:['dataComments'],
        data() {
            return {
                comment: '',
                comments:this.dataComments,

            }
        },
        methods: {
            submitComment() {
                axios.post('/comments', {
                    content: this.comment
                }).then((result) => { // result est le résultat de la requête axios

                console.log(result)
                this.comments.push({
                    body: this.comment // Contient ce qu'il y a dans l'input text (le message de l'utilisateur)
                })
                this.comment ='' // on vide le champ de l'utilisateur

                })
                // console.log(this.comment) //this est notre composant VueJS, comment est la variable créé juste au dessus

            },
        },

    }

</script>

<style>

</style>
