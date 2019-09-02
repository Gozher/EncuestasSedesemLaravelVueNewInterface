<template>
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br>
            <h2><p class="text-center">CREAR DE PREGUNTA</p></h2>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" >Crea un pregunta  &nbsp; </span>
                    </div>
                    <input type="text" class="form-control" v-model="pregunta">  
                    <button @click="saveQuestions()" class="btn btn-success">Añadir</button>
                </div>            
        </div>
        <div class="col-sm-2"></div>

    </div>

    <div>
    <table class="table table-striped">
    <thead class="bg-info text-white">
        <tr>            
            <th scope="col" >No. pregunta</th>            
            <th scope="col">Pregunta</th>
            <th scope="col">Status</th>
            <th scope="col">Agregar</th>
            <th scope="col">Editar</th>
            <!--<th scope="col">Borrar</th>-->
        </tr>
        </thead>
        <tbody class="table-info">
            <tr v-for="pre in arrayPreguntas" :key="pre.id">
                <td scope="row">{{pre.id}}</td>
                <td>{{pre.pregunta}}</td>
                <td>{{pre.status}}</td>                

                <td >
                    <button   @click="showModalStatusQuestion(pre)" class="btn btn-success" data-toggle="ModalStatusQuestion" data-target="#modal">Agregar</button>
                </td>

                <td>                
                    <button @click="showModalQuestion(pre)" class="btn btn-warning" data-toggle="modalUpdateQuestion" data-target="#modal">Editar</button>
                </td>

                <!--<td><button  v-if="pre.id>2" class="btn btn-danger"  @click="deleteQuestions(pre)">Borrar</button></td> -->
                                                
            </tr>

        </tbody>
    </table>
    
    </div>




<!--//////////////////////// Modal editar pregunta ////////////////////////////-->
    <div class="modal fade" id="modalUpdateQuestion" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar pregunta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearFields()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                        <br>
                            
                            <label>Pregunta</label>
                                <input v-model="pregunta" type="text" class="form-control">                                                                                
                        <br><br>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>                                                               
                <div class="modal-footer">
                    <button @click="clearFields()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button @click="updateQuestion()"type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>              
        </div>
    </div>


<!--//////////////////////// Modal editar status de pregunta ////////////////////////////-->
    <div class="modal fade" id="ModalStatusQuestion" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar status de la pregunta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearFields()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                        <br>
                            <div class="form-group">
                                <label for="sel1">Selecciona el status</label>
                                <select class="form-control" name="estado" v-model="status">
                                    <option value="1">Agregar</option>
                                    <option value="0">Quitar</option>                      
                                </select>
                            </div>                                                                          
                        <br>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>                                                               
                <div class="modal-footer">
                    <button @click="clearFields()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button @click="updateStatusQuestion()"type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>              
        </div>
    </div>
     
</div>



</template>

<script>

import Swal from 'sweetalert2';
import 'sweetalert2/src/sweetalert2.scss';

    export default {
        data() {
            return {
                id:"",
                pregunta:"",                
                status:0,
                arrayPreguntas:[],
                
            }
        },
        methods: {
            getPregutas(){
                let me =this;
                let url = '/Preguntas'
                axios.get(url).then(function (response) {                    
                    me.arrayPreguntas = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            saveQuestions(){
                let me =this;
                let url = '/Preguntas'
                axios.post(url,{ 
                    'pregunta':this.pregunta,
                    'status':this.status,                    
                }).then(function (response) {
                    me.getPregutas();
                    me.clearFields();                    
                    Swal.fire('Se creo correctamente!', 'De click para continuar!', 'success')
                    
                })
                .catch(function (error) {
                    //console.log(error);
                     Swal.fire('Error!', 'Rellene los campos correspondientes!', 'error')
                });                   
            },
            clearFields(){
                this.pregunta = "";                
            },

            showModalQuestion(data){

                let me =this;
                let pre_id = data.id;                                
                axios.get('/Preguntas/'+pre_id).then(function (response) {                    
                    me.id= response.data.id;                                                            
                    me.pregunta= response.data.pregunta; 
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

                $('#modalUpdateQuestion').modal('show')

            },
            showModalStatusQuestion(data){

                let me =this;
                let pre_id = data.id;                                
                axios.get('/Preguntas/'+pre_id).then(function (response) {                    
                    me.id= response.data.id;                                                                                
                    me.status= response.data.status; 
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });

                $('#ModalStatusQuestion').modal('show')

            },

            deleteQuestions(data){
                let me =this;
                let pre_id = data.id;

                            Swal.fire({
                title: 'Usted esta seguro?',
                text: "No, podra revertir los cambios!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Continuar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {

                
                
                    axios.delete('/Preguntas/'+pre_id
                    ).then(function (response) {
                        me.getPregutas();
                    })
                    .catch(function (error) {
                        console.log(error);
                    }); 
                          }
            })
                
            },

            updateQuestion(){
                let me = this;                                              
                axios.put('/update',{                                        
                    'id':this.id,
                    'pregunta':this.pregunta,
                }).then(function (response) {
                    $('#modalUpdateQuestion').modal('hide')
                   me.getPregutas();
                   me.clearFields();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },

            updateStatusQuestion(){
                let me = this;                                              
                axios.put('/updateStatus',{                                        
                    'id':this.id,
                    'status':this.status,
                }).then(function (response) {
                    $('#ModalStatusQuestion').modal('hide')
                   me.getPregutas();
                   me.clearFields();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            
        },
        mounted() {
            //console.log('Component mounted.')            
            this.getPregutas();
        }
    }
</script>