const app = new Vue({

    el: '#app',

    data: {
        url: "/../dist/PHP_partials/api.php",
        albums: [],
    },
    methods: {
        
    },
    mounted() {
        axios
            .get(this.url)
            .then(resp => {
                console.log(resp.database);
                this.albums = resp.database;
                console.log(this.albums)
            }).catch(e => {
                console.error(e);
                alert("La chiamata all'API non è andata a buon fine, riprova più tardi")
            })
    }
})