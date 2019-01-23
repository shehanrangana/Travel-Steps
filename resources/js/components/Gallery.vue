<template>
  <div>
    <div>
      <!-- Upper text -->
      <h3
        :class="{'subheading': $vuetify.breakpoint.xs}"
        class="display-2 text-uppercase font-weight-regular text-md-center"
      >Gallery</h3>
    </div>

    <!-- Images -->
    <v-container fluid>
      <v-layout row wrap>
        <v-flex xs12 sm6 md3 order-md3 order-sm1 class="img-gallery">
          <div class="v-responsive v-image">
            <div class="v-responsive__sizer" style="padding-bottom: 75%;"></div>
            <div
              class="v-image__image v-image__image--cover"
              style="background-position: center center;"
            >
              <vue-flux
                :options="fluxOptions"
                :images="fluxImages"
                :transitions="fluxTransitions"
                ref="slider"
              >
                <flux-pagination slot="pagination"></flux-pagination>
              </vue-flux>
            </div>
          </div>
        </v-flex>
        <v-flex xs12 sm6 md3 order-md3 order-sm1 class="img-gallery">
          <div class="v-responsive v-image">
            <div class="v-responsive__sizer" style="padding-bottom: 75%;"></div>
            <div
              class="v-image__image v-image__image--cover"
              style="background-position: center center;"
            >
              <vue-flux
                :options="fluxOptions"
                :images="fluxImages"
                :transitions="fluxTransitions"
                ref="slider"
              >
                <flux-pagination slot="pagination"></flux-pagination>
              </vue-flux>
            </div>
          </div>
        </v-flex>
        <v-flex xs12 sm6 md3 order-md3 order-sm1 class="img-gallery">
          <div class="v-responsive v-image">
            <div class="v-responsive__sizer" style="padding-bottom: 75%;"></div>
            <div
              class="v-image__image v-image__image--cover"
              style="background-position: center center;"
            >
              <vue-flux
                :options="fluxOptions"
                :images="fluxImages"
                :transitions="fluxTransitions"
                ref="slider"
              >
                <flux-pagination slot="pagination"></flux-pagination>
              </vue-flux>
            </div>
          </div>
        </v-flex>
        <v-flex xs12 sm6 md3 order-md3 order-sm1 class="img-gallery">
          <div class="v-responsive v-image">
            <div class="v-responsive__sizer" style="padding-bottom: 75%;"></div>
            <div
              class="v-image__image v-image__image--cover"
              style="background-position: center center;"
            >
              <vue-flux
                :options="fluxOptions"
                :images="fluxImages"
                :transitions="fluxTransitions"
                ref="slider"
              >
                <flux-pagination slot="pagination"></flux-pagination>
              </vue-flux>
            </div>
          </div>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
import { VueFlux, FluxPagination, Transitions } from "vue-flux";

export default {
  components: {
		VueFlux,
    FluxPagination
  },

  data: () => ({
    fluxOptions: {
      autoplay: false
    },
    fluxImages: [
      "http://127.0.0.1:8000/img/1.jpg",
      "http://127.0.0.1:8000/img/1.jpg",
      "http://127.0.0.1:8000/img/1.jpg",
    ],
    fluxTransitions: {
      transitionCube: Transitions.transitionCube
		},
  })
};
</script>


<style>
.img-gallery {
  padding: 5px;
}
</style>
