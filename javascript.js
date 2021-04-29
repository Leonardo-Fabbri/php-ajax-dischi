var app = new Vue ({
    el:"#app",
    data: {
        cds: [],
    },
    mounted() {
        const self = this;

        axios
            .get("http://localhost/php-ajax-dischi/server.php")
            .then(function(result) {
                console.log(result)
                const cds =result.data; 

                self.cds = cds;
                console.log(cds);
            })
    }
   
        
    

});

Vue.config.devtools = true;