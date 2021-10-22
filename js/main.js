const app = new Vue({
    el: '#root',
    data: {
    //   message: 'Hello Vue!'
    db: null,
    genreSelected: ""
    },
    created(){
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then((response) => {
            this.db = response.data;
            console.log(response);
        })
    },
        methods: {
            genreChoice() {
                axios.get('http://localhost/php-ajax-dischi/api/index.php', {
                    params: {
                        "genre": this.genreSelected
                    }
                })
                .then((response) => {
                    // handle success
                    this.db = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            }
        }
    
    })
