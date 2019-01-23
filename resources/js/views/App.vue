<template>
    <v-app>
        <toolbar></toolbar>
        <v-content>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-content>
        <Footer></Footer>
    </v-app>
</template>

<script>
import Toolbar from '../components/Toolbar';
import Footer from '../components/Footer';

export default {
    components: {Footer, Toolbar}
}
</script>

