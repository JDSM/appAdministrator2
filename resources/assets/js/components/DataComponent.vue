<template>
    <div class="card">
        <div class="card-header">publicado en {{thought.created_at}}</div>

        <div class="card-body">
            <p>{{thought.description}}</p>
        </div>
        <div class="card-footer">
            <button class="btn btn-default">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['thought'],
        data(){
            return {
                /*
                thought:{
                    id:'',
                    description:'',
                    created_at:'' 
                }*/ //se comenta ya se esta pasando la data por el formulario
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>