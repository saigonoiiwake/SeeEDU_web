<template>
    <div class="message-feed" ref="feed">
        <ul v-if="friend">
            <li v-for="message in messages" :class="`message ${message.to_user_id == friend.id ? 'sent' : 'received'}`" :key="message.id">
                <div class="text">
                    {{ message.message }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>

    export default {
        props: {
            friend: {
                type: Object
            },
            messages: {
                type: Array,
                required: true
            }
        },
        methods: {
            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },
        watch: {
            friend(friend) {
                this.scrollToBottom();
            },
            messages(messages) {
                this.scrollToBottom();
            }
        }
    }
</script>

<style lang="scss" scoped>
    .message-feed {
        background: #f0f0f0;
        height: 600px;
        max-height: 470px;
        overflow: scroll;

        ul {
            list-style-type: none;
            padding: 5px;

            li {
                &.message {
                    margin: 10px 0;
                    width: 100%;

                    .text {
                        max-width: 300px;
                        border-radius: 5px;
                        padding: 12px;
                        display: inline-block;
                    }

                    &.received {
                        text-align: left;

                        .text {
                            background: #9bbae8;
                        }

                    }

                    &.sent {
                        text-align: right;

                        .text {
                            background: #c7c7c7;
                        }
                    }
                }
            }
        }
    }
</style>
