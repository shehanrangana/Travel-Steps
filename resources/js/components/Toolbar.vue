<template>
  <div>
    <!-- Toolbar -->
    <v-toolbar app flat fixed >
      <v-toolbar-title>Travel Steps</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn v-for="item in menu" :key="item.icon" flat @click="$vuetify.goTo(item.target, options)">{{ item.title }}</v-btn>
      </v-toolbar-items>
      <v-menu class="hidden-md-and-up">
        <v-toolbar-side-icon slot="activator"></v-toolbar-side-icon>
        <v-list>
          <v-list-tile v-for="item in menu" :key="item.icon">
            <v-list-tile-content>
              <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-menu>
    </v-toolbar>

  </div>
</template>

<script>
import * as easings from "vuetify/es5/util/easing-patterns";
export default {
  data() {
    return {
      menu: [
        { icon: "a", title: "HOME", target: 0},
        { icon: "b", title: "GALLERY", target: '#gallery'},
        { icon: "c", title: "PACKAGES", target: '#package'},
        { icon: "info", title: "ABOUT", target: '#about'},
        { icon: "warning", title: "CONTACT", target: '#contact'}
      ],

      // Scroll elements
      type: "selector",
      number: 9999,
      selector: "#contact",
      selected: "Button",
      // elements: ["Button", "Radio group"],
      duration: 750,
      offset: 0,
      easing: "easeInQuart",
      easings: Object.keys(easings)
    };
  },
  computed: {
    target() {
      const value = this[this.type];
      if (!isNaN(value)) return Number(value);
      else return value;
    },
    options() {
      return {
        duration: this.duration,
        offset: this.offset,
        easing: this.easing
      };
    },
    element() {
      if (this.selected === "Button") return this.$refs.button;
      else if (this.selected === "Radio group") return this.$refs.radio;
    }
  }
};
</script>