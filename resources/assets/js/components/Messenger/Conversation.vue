<template>
    <div class="conversation">
        <h1>{{ friend ? friend.name : 'Select a Friend'}}</h1>
        <MessagesFeed :friend="friend" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';

    export default {
        props: {
            friend: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
        },
        methods: {
            sendMessage(message) {
                if (!this.friend) {
                    return;
                }

                axios.post('messenger/send', {
                    friend_id: this.friend.id,
                    message: message
                }).then((response) => {
                    this.$emit('new', response.data);
                    console.log(response.data);
                });
            }
        },
        components: {MessagesFeed, MessageComposer}
    }
</script>

<style lang="scss" scoped>
    .conversation{
        flex: 5;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

        h1 {
            font-size: 25px;
            padding: 10px;
            margin: 0;
            border-bottom: 1px dashed lightgray;
        }
    }
</style>
