<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addThought"></form-component>
            <data-component 
                v-for="(thought,index) in thoughts" 
                :key="thought.id"
                :thought="thought"
                @update="updateThought(index, ...arguments)"
                @delete="deleteThought(index)"
            >
            </data-component>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                /*thoughts:[{
                    "id": 1,
                    "description":'nuevo thought',
                    "created_at":'29/09/2018'
                }]*///se sustituye por datos de la base de datos
                thoughts:[]
            }
        },
        mounted() {
            axios.get('/thoughts').then(response=>{
                this.thoughts=response.data;
            })
            .catch(response=>{

            });
        },
        methods: {
            addThought(thought){
                this.thoughts.push(thought);
            },
            deleteThought(index){
                this.thoughts.splice(index,1); //splice elimina los datos de un arreglo en una posicion indicada y la cantidad indicada
            },
            updateThought(index,thought){
                this.thoughts[index]=thought; 
            }
        }
    }
</script>
