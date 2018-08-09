<template>
   <input placeholder="search" type="text" v-model="search" @input="load"/>
</template>

<script>
    export default {
        mounted() {
            this.load('');
        },
        data() {
            return {
                search: '',
            };
        },
        computed: {
            searchUrl : function () {
                let currentUrl = window.location.href;
                if (currentUrl.indexOf('?') > -1){
                    currentUrl = currentUrl + "&contents=true";
                } else {
                    currentUrl = currentUrl + "?contents=true";
                }
                if (this.search != ""){
                    currentUrl = currentUrl + '&search=' + this.search;
                }
                return currentUrl;
            }
        },
        methods: {
            load(){
                console.log(this.searchUrl);
                this.updateHistoryPage(this.searchUrl);
                window.axios.get(this.searchUrl).then(({ data }) => {
                    this.$parent.contents = data;
                });
            },
            updateHistoryPage(currentUrl){
               let baseUrl = window.location.pathname + '?';
               let params = this.getParams(window.location.href);
               //console.log(params);
               Object.keys(params).filter(function(key){
                   return key != 'search' && key !='contents' && key != "";
               }).forEach(function(key){
                   baseUrl = baseUrl += key + '=' + params[key] + '&';
               });
               baseUrl += "&search=" + this.search;
               // console.log("History url: " + baseUrl);
               history.pushState("", document.title, baseUrl);
            },
            getParams(url) {
                let params = {};
                let parser = document.createElement('a');
                parser.href = url;
                let query = parser.search.substring(1);
                let vars = query.split('&');
                for (let i = 0; i < vars.length; i++) {
                    let pair = vars[i].split('=');
                    params[pair[0]] = decodeURIComponent(pair[1]);
                }
                return params;
            }
        }
    }
</script>
