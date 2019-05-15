<template>
    <ul>
        <li v-for="event in events">{{ event.title }}</li>
    </ul>
</template>

<script>
    export default {
        name: "Listener",
        data: function () {
            return {
                events: []
            }
        },
        mounted(){
            Echo.private('private-channel')
                .listen('PostCreated', (e) => {
                    console.log(e);
                    this.events.push(e.post);
                });
            this.getPosts()
        },
        methods: {
            getPosts:function(){
                this.axios.get('/api/posts')
                    .then(response => {
                        this.events = response.data
                    })
                    .catch(error => {
                        error.response.data
                    })
            }
        }
    }
</script>

<style scoped>

</style>