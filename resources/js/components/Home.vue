<template>
  <!-- background image -->
  <div class="bg-image">
    <v-img gradient="217deg, rgba(0,0,0,.5), rgba(0,0,0,.3) 70%" max-height="600" src="http://127.0.0.1:8000/img/1.jpg" ></v-img>
    
    <!-- overlay text -->
    <div class="centered">
      <h2 :class="{'subheading': $vuetify.breakpoint.xs}" class="display-3 font-weight-bold-sm">Welcome to Travel Steps</h2>
      <br>
      <div :class="{'subheading': $vuetify.breakpoint.xs}" class="text-xs-center">
        <v-btn round color="warning" dark>Start Discovering</v-btn>
      </div>
    </div>
  </div>
</template>

<style>
.bg-image {
  position: relative;
  text-align: center;
  color: rgb(255, 255, 255);
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
