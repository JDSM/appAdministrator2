<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addThought"></form-component>
            <data-component 
                v-for="thought in thoughts" 
                :key="thoughts.id"
                :thought="thought"
            >
            </data-component>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                thoughts:[{
                    "id": 1,
                    "description":'nuevo thought',
                    "created_at":'29/09/2018'
                }]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addThought(thought){
                this.thoughts.push(thought);
            }
        }
    }
</script>
