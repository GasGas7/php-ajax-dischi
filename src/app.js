const app = new Vue({

    el: '#app',

    data: {
        albums: [],
    },
    methods: {
        
    },
    mounted() {
        axios
            .get('../src/PHP_partials/api/api.php')
            .then(resp => {
                console.log(resp.data);
                this.albums = resp.data;
                console.log(this.albums)
            }).catch(e => {
                console.error(e);
                alert("La chiamata all'API non è andata a buon fine, riprova più tardi")
            })
    }
})