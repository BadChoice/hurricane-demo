<template>
   <input placeholder="search" type="text" v-model="search" @input="onChange"/>
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
        methods: {
            onChange() {
                this.load(this.search);
            },
            load(search){
                let currentUrl = window.location.href;
                if (currentUrl.indexOf('?') > -1){
                    currentUrl = currentUrl + "&contents=true";
                } else {
                    currentUrl = currentUrl + "?contents=true";
                }
                if (search != ""){
                   currentUrl = currentUrl + '&search=' + search;
                }
                /*let baseUrl = window.location.hostname + window.location.pathname;
                let params = this.getParams(window.location.href);
                let historyUrl = currentUrl.replace("contents=true", "")
                                           .replace("&search=" + search.substring(0, search.length - 1), "");
                let newParams = {};
                for(let k in params){
                    if(k != 'contents' && k != 'search'){
                        newParams[k] = params[k];
                    }
                }
                console.log(newParams);

                history.pushState("", document.title, historyUrl);*/
                console.log(currentUrl);
                window.axios.get(currentUrl).then(({ data }) => {
                    document.getElementById("resource-index").innerHTML = data;
                    //console.log(data);
                });
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
