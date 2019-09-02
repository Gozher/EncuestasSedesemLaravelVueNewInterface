<template>
    <div class="container">
        <br>
        <h2>
            <p class="text-center">ASIGNAR RESPUESTAS!</p>
        </h2>
        <div class="row justify-content-center">
    
    
            <div class="col-md-5">
    
    
                <div class="form-group">
                    <label for="sel1">Selecciona la pregunta</label>
                    <select class="form-control" v-model="fk_pregunta">
                        <option v-for="preg in preguntas" :value="preg.id":key="preg.id">{{preg.pregunta}}</option>            
                    </select>
                </div>
    
            </div>
    
            <div class="col-md-5">
    
                <div class="form-group mb-3">
                    <label for="preg">Agrega una respuesta</label>
                    <input type="text" id="preg" class="form-control" v-model="respuesta">
    
                </div>
            </div>
    
            <div class="col-md-3">
                <button @click="saveAnswer()" class="btn btn-info    btn-lg btn-block">Añadir</button>
                <br><br>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-md-10">
    
                <table class="table table-striped">
                    <thead class="bg-info text-white">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Respuesta</th>
                            <th scope="col">status</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar </th>
                        </tr>
                    </thead>
                    <tbody class="table-info">
                        <tr v-for="resp in respuestas" :key="resp.id">
                            <th>{{resp.id}}</th>
                            <td>{{resp.respuesta}}</td>
                            <td>{{resp.status}}</td>
                            <td>
                                <button @click="showModalAnswer(resp)" class="btn btn-warning" data-toggle="modalUpdateAnswer" data-target="#modal">Editar</button>
                            </td>
                            <td><button class="btn btn-danger" @click="deleteAnswer(resp)">Borrar</button></td>
                        </tr>
                    </tbody>
                </table>
    
            </div>
        </div>
    
        <!--//////////////////////// Modal editar respuesta ////////////////////////////-->
        <div class="modal fade" id="modalUpdateAnswer" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar respuesta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="clearFields()">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col">
                            <br>
    
                            <label>respuesta</label>
                            <input v-model="respuesta" type="text" class="form-control">
                            <br><br>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="modal-footer">
                        <button @click="clearFields()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button @click="updateAnswer()" type="submit" class="btn btn-primary">Save changes</button>
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

            id: "",
            fk_pregunta: "",
            respuesta: "",
            status: 0,
            respuestas: [],
            preguntas: [],

        }
    },

    methods: {

        getAnswer() {
            let me = this;
            let url = '/Respuestas'
            axios.get(url).then(function(response) {
                    me.respuestas = response.data;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });
        },

        getQuestions() {
            let me = this;
            let url = '/Preguntas'
            axios.get(url).then(function(response) {
                    me.preguntas = response.data;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });
        },

        saveAnswer() {
            let me = this;
            let url = '/Respuestas'
            axios.post(url, {
                    'fk_pregunta': this.fk_pregunta,
                    'respuesta': this.respuesta,
                    'status': this.status,
                }).then(function(response) {
                    me.getAnswer();
                    me.clearFields();
                    Swal.fire('Se creo correctamente!', 'De click para continuar!', 'success')

                })
                .catch(function(error) {
                    // console.log(error);
                    Swal.fire('Error!', 'Rellene los campos correspondientes!', 'error')
                });

        },

        deleteAnswer(data) {
            let me = this;
            let pre_id = data.id;


            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {

                    axios.delete('/Respuestas/' + pre_id).then(function(response) {
                            me.getAnswer();
                        })
                        .catch(function(error) {
                            console.log(error);
                        });

                }
            })
        },

        clearFields() {
            this.respuesta = "";
        },

        showModalAnswer(data) {

            let me = this;
            let pre_id = data.id;
            axios.get('/Respuestas/' + pre_id).then(function(response) {
                    me.id = response.data.id;
                    me.respuesta = response.data.respuesta;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });

            $('#modalUpdateAnswer').modal('show')

        },

        updateAnswer() {
            let me = this;
            axios.put('/updateAnswer', {
                    'id': this.id,
                    'respuesta': this.respuesta,
                }).then(function(response) {
                    $('#modalUpdateAnswer').modal('hide')
                    me.getAnswer();
                    me.clearFields();
                })
                .catch(function(error) {
                    console.log(error);
                });
        },


    },

    mounted() {
        //console.log('Component mounted.')
        this.getAnswer();
        this.getQuestions();
    }
}
</script>