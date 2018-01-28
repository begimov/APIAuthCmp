<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <post-message />
                    <div class="panel-body">
                        <div class="media" v-for="message in messages" :key="message.id">
                            <div class="media-left"></div>
                            <div class="media-body">
                                <p><strong>{{ message.user.name }}</strong></p>
                                <p>{{ message.body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: []
            }
        },
        mounted() {
            axios.get('/messages').then((res) => {
                console.log(res.data)
                this.messages = res.data
            })
        }
    }
</script>
