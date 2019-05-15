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
            this.some()
        },
        methods: {
            some:function(){
                this.axios.get('/posts')

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