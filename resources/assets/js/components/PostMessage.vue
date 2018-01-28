<template>
    <form action="#" @submit.prevent="send">
        <div class="form-group">
            <textarea class="form-control" cols="10" rows="2" v-model="message"></textarea>
            <button class="btn btn-default" type="submit">Send</button>
        </div>
    </form>      
</template>

<script>
    export default {
        data() {
            return {
                message: ''
            }
        },
        methods: {
            send() {
                axios.post('/messages', {
                    message: this.message
                }).then((res) => {
                    console.log(res.data)
                    this.messages = res.data
                })
            }
        },
        mounted() {
            //
        }
    }
</script>
