<template>
  <v-app>
    <toolbar></toolbar>
    <v-content>
			<!-- Carousel -->
    	<div class="section" id="home">
				<home></home>
			</div>
			
      <v-container fluid>
				<!-- Gallery -->
				<div class="section" id="gallery">
					<gallery></gallery>
				</div>

				<!-- Package -->
				<div class="section" id="package">
					<package></package>
				</div>

				<!-- About us -->
				<div class="section" id="about">
					<about></about>
				</div>

				<!-- Contact us -->
				<div class="section" id="contact">
					<contact></contact>
				</div>

      </v-container>
    </v-content>
    <Footer></Footer>
  </v-app>
</template>

<script>
import Toolbar from "../components/Toolbar";
import Home from "../components/Home";
import Gallery from "../components/Gallery";
import Package from "../components/Package";
import About from "../components/About";
import Contact from "../components/Contact";
import Footer from "../components/Footer";

export default {
  components: { Toolbar, Home, Gallery, Package, About, Contact, Footer },
};
</script>

<style>
.section {
	margin-bottom: 60px;
}
</style>


