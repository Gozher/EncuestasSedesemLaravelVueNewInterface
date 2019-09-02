<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
    
            <div class="col-md-12">
    
                <h2>Resultado de la muestra</h2>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-info text-white">
                            <tr>
                                <th scope="col">Folio</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Colonia</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Entrevistar</th>
    
    
                            </tr>
                        </thead>
                        <tbody class="table-info">
                            <tr v-for="muestra in MuestraBeneficiarios" :key="muestra.id">
                                <td >{{muestra.FolioRel}}</td>
                                <td>{{muestra.Municipio}}</td>
                                <td>{{muestra.ApellidoPaterno}} {{muestra.ApellidoMaterno}} {{muestra.Nombre}}</td>
                                <td>{{muestra.genero}}</td>
                                <td>{{muestra.colonia}}</td>
                                <td>{{muestra.calle}}, Num int. {{muestra.NumInt}}, Num ext. {{muestra.NumExt}}</td>
                                <td><button  v-if="muestra.status == 0" @click="showModal(muestra)" class="btn btn-info" data-toggle="modalEncuesta" data-target="#modal" v-model="idUser">Entrevistar</button></td>
    
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    
            <nav>
                <ul class="pagination">
                    <li v-if="pagination.current_page > 1" class="page-item"><a class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">Previous</a></li>
    
                    <li v-for="pages in pagesNumber" v-bind:class="{'page-item':true, 'active':(pages === pagination.current_page)}"><a class="page-link" href="#" @click.prevent="changePage(pages)">{{pages}}</a></li>
    
                    <li v-if="pagination.current_page < pagination.last_page" class="page-item"><a class="page-link" href="#" @click.prevent="changePage(pagination.current_page + 1)">Next</a></li>
                </ul>
            </nav>
    
        </div>
    
    
        <!--//////////////////////// Modal editar status de pregunta ////////////////////////////-->
        <div class="modal fade" id="modalEncuesta" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar status de la pregunta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row justify-content-center">
    
                        <div class="col-sm-10">
                            <br>
    
                            <form-wizard shape="tab" title="entrevista" subtitle="" color="#009db1">
    
                                <tab-content icon="ti-pencil">
                                    <h3>¿Ubico al beneficiario?</h3><br>
                                    <input type="hidden" :value="pregunta">
                                    <select class="form-control" v-model="condicion"> 
                                                <option value="1"> Si</option>
                                                <option value="2"> No</option>    
                                        </select>
    
                                </tab-content>
    
                                <tab-content icon="ti-pencil" v-if="condicion=='2'">
                                    <h3>¿Si no lo ubico razón ?</h3><br>
    
                                    <select class="form-control" v-model="respuesta"> 
                                                <option value="3">Vive pero no estaba</option>
                                                <option value="4">Cambio de domicilio</option>    
                                                <option value="5">No ha vivido ahí</option>    
                                                <option value="6">No lo conoce</option>  
                                        </select>
    
                                </tab-content>
    
    
                                <tab-content v-for="pre in Preguntas" :key="pre.id" icon="ti-pencil" v-if="condicion=='1' && pre.id >'2'">
    
                                    <h3> {{pre.pregunta}}</h3><br>
                                    <!--   <input ref="pregu" type="hidden" :value="pre.id">-->
                                    <input ref="pregu" type="hidden" :value="pre.id">
    
                                    <select class="form-control" v-model="respuesta">                                                    
                                        <option v-for="resp in respuestas" :value="resp.id" :key="resp.id" v-if="pre.id == resp.fk_pregunta">                                    
                                            {{resp.respuesta}}                                    
                                        </option>
                                    </select>
                                </tab-content>
                                <br>
    
                                <button slot="prev" hidden="hidden">Back</button>
                                <!--<button class="btn btn-info" slot="next" @click="saveEntrevista()">Siguiente</button>
                                                            <button class="btn btn-info" slot="finish" @click="closeModal()">Terminar</button>-->
    
                                <button v-if="condicion=='2'" class="btn btn-info" slot="next" @click="saveEntrevista2()">Siguiente</button>
                                <button v-if="condicion=='1' && pregunta > '1'" class="btn btn-info" slot="next" @click="saveEntrevista()">Siguiente</button>
                                <button v-if="condicion=='1' && pregunta=='1' " class="btn btn-info" slot="next" @click="saveEntrevista2()">Siguiente</button>
    
                                <button v-if="condicion=='1'" class="btn btn-info" slot="finish" @click="closeModal()">Terminar</button>
                                <button v-if="condicion=='2'" class="btn btn-info" slot="finish" @click="closeModal2()">Terminar no estuvo</button>
    
                            </form-wizard>
    
    
                            <br>
                        </div>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</template>

<script>
import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)
import Swal from 'sweetalert2';
import 'sweetalert2/src/sweetalert2.scss';

export default {

    data() {
        return {
            idUser: "",

            pagination: {
                'total': 0,
                'current_page': 0,
                'per_page': 0,
                'last_page': 0,
                'from': 0,
                'to': 0
            },

            respuesta: "",
            pregunta: 1,
            MuestraBeneficiarios: [],
            Preguntas: [],
            respuestas: [],
            condicion: 0,
            offset: 2,

        }
    },

    computed: {

        isActived: function() {

            return this.pagination.current_page;

        },

        pagesNumber: function() {

            if (!this.pagination.to) {
                return [];

            }

            var from = this.pagination.current_page - this.offset;

            if (from < 1) {
                from = 1;
            }

            var to = from + (this.offset + 2);

            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page
            }

            var pagesArray = [];

            while (from <= to) {
                pagesArray.push(from);
                from++;
            }

            return pagesArray;

        }
    },

    methods: {


        updateStatusUser() {
            let me = this;
            axios.put('/updateStatusMuestra', {
                    'id': this.idUser,
                    'status':1,
                }).then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        getMuestra(page) {
            let me = this;
            let url = '/Muestra?page=' + page;
            axios.get(url).then(function(response) {

                    me.MuestraBeneficiarios = response.data.DatosMuestra.data,
                        me.pagination = response.data.pagination;
                })
                .catch(function(error) {

                    console.log(error);
                });
        },

        getQuestions() {
            let me = this;
            //let url = '/Preguntas';
            let url = '/Encuesta';

            axios.get(url).then(function(response) {
                    me.Preguntas = response.data;
                    //  console.log(response.data);
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });
        },

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

        saveEntrevista() {

            let me = this;
            let url = '/Encuesta'
            axios.post(url, {
                    'fk_beneficiario': this.idUser,
                    'fk_pregunta': this.$refs.pregu[this.pregunta - 3].value,
                    //'fk_pregunta': this.pregunta,
                    'fk_respuesta': this.respuesta,
                }).then(function(response) {

                    console.log(response);

                })
                .catch(function(error) {
                    console.log(error);

                });

            this.pregunta += 1;
        },


        saveEntrevista2() {

            let me = this;
            let url = '/Encuesta'
            axios.post(url, {
                    'fk_beneficiario': this.idUser,
                    //'fk_pregunta': this.$refs.pregu[this.pregunta].value,
                    'fk_pregunta': this.pregunta,
                    'fk_respuesta': this.condicion,
                }).then(function(response) {
                    //me.getPregutas();
                    // me.clearFields();                    
                    console.log(response);

                })
                .catch(function(error) {
                    console.log(error);

                });

            if (this.condicion == '2') {
                this.pregunta += 1;
            }

            if (this.condicion == '1') {
                this.pregunta += 2;
            }
        },


        showModal(data) {
            let me = this;
            let pre_id = data.id;
            axios.get('/Muestra/' + pre_id).then(function(response) {
                    me.idUser = response.data.id;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });
            
            $('#modalEncuesta').modal('show')
        },        

        closeModal() {

            let me = this;
            let url = '/Encuesta'
            axios.post(url, {
                    'fk_beneficiario': this.idUser,
                    'fk_pregunta': this.$refs.pregu[this.pregunta - 3].value,
                    'fk_respuesta': this.respuesta,
                }).then(function(response) {
                    //me.getPregutas();
                    // me.clearFields();                    
                    console.log(response);

                })
                .catch(function(error) {
                    console.log(error);

                });

                this.updateStatusUser();
            $('#modalEncuesta').modal('hide')
            location.reload();

        },
        closeModal2() {

            let me = this;
            let url = '/Encuesta'
            axios.post(url, {
                    'fk_beneficiario': this.idUser,

                    'fk_pregunta': this.pregunta,
                    'fk_respuesta': this.respuesta,
                }).then(function(response) {
                    //me.getPregutas();
                    // me.clearFields();                    
                    console.log(response);

                })
                .catch(function(error) {
                    console.log(error);

                });
                this.updateStatusUser();
            $('#modalEncuesta').modal('hide')
            location.reload();

        },

        changePage(page) {
            this.pagination.current_page = page;
            this.getMuestra(page);

        }
    },

    mounted() {
        this.getMuestra();
        this.getQuestions();
        this.getAnswer();

    }
}
</script>