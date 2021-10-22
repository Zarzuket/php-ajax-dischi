const app = new Vue({
    el: '#root',
    data: {
    //   message: 'Hello Vue!'
    db: null,
    },
    created(){
        axios.get("http://localhost/php-ajax-dischi/api/index.php")
        .then((response) => {
            this.db = response.data;
            console.log(response);
        })
    }
  })
