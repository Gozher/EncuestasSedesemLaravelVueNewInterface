
<script>
import { Bar } from 'vue-chartjs';

export default {
    extends: Bar,
    mounted() {
        let uri = '/Graficas';
        let Respuesta = new Array('Respuestas :');
        var Fk_respuesta = new Array('0');
        let Id = new Array();

        axios.get(uri).then((response) => {
            let data = response.data;
            console.log(response.data)
            if (data) {
                data.forEach(element => {
                    Respuesta.push(element.respuesta);
                    Fk_respuesta.push(element.fk_respuesta);
                    Id.push(element.id);
                });

                this.renderChart({
                    title: 'hola',
                    labels: Respuesta,
                    datasets: [{

                        label: 'Encuestados',
                        backgroundColor: '#009db1',
                        data: Fk_respuesta
                    }]
                }, { responsive: true, maintainAspectRatio: false })
            } else {
                console.log('No data');
            }
        });
    }
}
</script>