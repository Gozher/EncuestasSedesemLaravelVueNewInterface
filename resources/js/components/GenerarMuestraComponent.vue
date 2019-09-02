<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <br><br>
                <div class="form-group">
                    <center><label><h2>Ingresa la cantidad de registros para la muestra</h2></label></center>
                    <input v-model="cantidad" type="number" class="form-control" min="1" pattern="^[0-9]+" placeholder="ingresa el numero">
                </div>
                    <center><button @click="GenMuestra()" v-if = "button == '0'" class="btn btn-success">Generar</button></center>
            </div>
            <div class="container-buttons">
                
            </div>
        </div>
    </div>
</template>

<script>
import Swal from 'sweetalert2';
import 'sweetalert2/src/sweetalert2.scss';

    export default {
        data(){
            return{
                cantidad:"",
                button:0,                
            }
        },
        methods:{
            GenMuestra(){  
                             
                let url = '/genmuestra'
                axios.post(url,{ 
                    'cantidad':this.cantidad,
                    
                }).then(function (response) {
                    //console.log(response);                    
                     Swal.fire('Se creo correctamente!', 'De click para continuar!', 'success');
                     
                })
                .catch(function (error) {
                    //console.log(error);
                     Swal.fire('complete los campos!', 'De click para continuar!', 'error');
                });                   
            }
        },
        mounted() {            
        }
    }
</script>