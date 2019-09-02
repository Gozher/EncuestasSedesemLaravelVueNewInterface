<template>
    <div class="container" style=" width: 800px; height: 300px;">
        <!--<div class="row justify-content-center">
            <div class="col-md-8">-->
    
                <h2>corrousel-component</h2>
                <vue-flux :options="fluxOptions" :images="fluxImages" 
                :transitions="fluxTransitions" ref="slider" >
                    <flux-pagination slot="pagination"></flux-pagination>
                </vue-flux>
                    
    
          <!--  </div>
        </div>-->
    </div>
</template>

<script>

import { VueFlux, FluxPagination, Transitions } from 'vue-flux';
 
export default {
   components: {
      VueFlux,
      FluxPagination
   },
 
   data: () => ({
      fluxOptions: {
        
         autoplay: true
      },
      fluxImages: [          
          'http://www.unionedomex.mx/sites/default/files/styles/galeria/public/field/image/edomex.jpg?itok=e-Eg1wbv',
            'http://www.unionedomex.mx/sites/default/files/styles/galeria/public/field/image/edomex.jpg?itok=e-Eg1wbv',
            'http://www.unionedomex.mx/sites/default/files/styles/galeria/public/field/image/edomex.jpg?itok=e-Eg1wbv' ],
      fluxTransitions: {
         //transitionBook: Transitions.transitionBook
         transitionCube: Transitions.transitionCube
         //transitionFall: Transitions.transitionFall
      }
   })
}

</script>