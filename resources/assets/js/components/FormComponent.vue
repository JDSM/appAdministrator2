<template>
    <div class="card">
        <div class="card-header">Panel Administrativo</div>

        <div class="card-body">
            <form action="" v-on:submit.prevent="newThought()">
                <div class="form-group">
                    <label for="thought">Estoy pensando en:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        name="thought"
                        v-model="description">
                </div>
                <button type="submit" class="btn btn-primary" >Enviar</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                description: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            newThought(){
                const params = {
                    description:this.description
                };
                this.description = '';
                axios.post('/thoughts',params)
                    .then(response => {
                        const thought=response.data;
                        this.$emit('new',thought);
                    })
                    .catch (response => {
                    // List errors on response...
                    });
                /*let thought= {
                    id:2,
                    description:this.description,
                    created_at:'29/09/2018'
                };*/
            }
        }
    }
</script>