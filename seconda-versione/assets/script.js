new Vue({
    el: "#root",
    data: {
        urlApi: "http://localhost:8888/php-ajax-dischi/seconda-versione/api.php",
        dischi: [],
    },
    created() {
        axios.get(this.urlApi)
            .then(
                axiosResponse => this.dischi = axiosResponse.data
            );       
    },
});