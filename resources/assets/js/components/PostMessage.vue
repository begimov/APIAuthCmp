<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input type="text">        
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
