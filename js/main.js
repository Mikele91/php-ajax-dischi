const app = new Vue ({
    el:'#root',
    data:{
        selezionaGenere:"",
        dischi:[],
        generi:[],
        autori:[],
    },
    created(){
        axios.get('http://localhost/ESERCIZI/PHP/php-ajax-dischi/api/')
        .then((res) =>{
            // console.log(res.data);
            this.dischi = res.data;
            this.dischi.forEach((elm) => {
                console.log(elm);
                if(!this.generi.includes(elm.genre)){
                    this.generi.push(elm.genre);
                }
                if(!this.autori.includes(elm.author)){
                    this.autori.push(elm.author)
                }
            });
        })
        // in caso di errore di chiamata esegue questo! si può mettere anche altro!
        .catch(function(error){
            console.log(error);
        })
    },
        computed:{
            musicFiltered(){
                    if(this.selezionaGenere!=""){
                        return this.dischi.filter(elm=> elm.genre == this.selezionaGenere)    
                    }
                    return this.dischi        
            }
    }


})