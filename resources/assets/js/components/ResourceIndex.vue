<template>
   <div>
      <h1>This is the index!</h1>
      <resource-search></resource-search>
      <div id="resource-index" v-html="contents">
      </div>
   </div>
</template>

<script>
    export default {
        mounted() {
        },
        data(){
            return {
                contents : ''
            }
        },
        methods : {
             reload: function() {
                 console.log("reload");
            }
        }
    }
</script>
