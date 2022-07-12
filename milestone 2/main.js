new Vue ({
    el: '#app',
    data: {
        listSong: [],
    },
    mounted() {
        axios.get('./data.php')
        .then(resp =>{
            this.listSong = resp.data.dates;
        })
    }
})