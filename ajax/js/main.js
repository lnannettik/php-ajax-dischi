// CHECH
console.log(`JS OK`);

const app = new Vue ({
    el: '#app',

    data: {
        albums: null,
    },

    created() {
        this.getAlbums();
    },

    methods: {
        getAlbums() {
            axios
                .get('http://localhost/php-intro/php-ajax-dischi/ajax/php/database.php')

                .then(response => {
                    console.log(response.data);
                    this.albums = response.data;
                })

                .catch(err => {
                    console.log(err);
                });
        }
    }
});

