<template>
    <div class="messenger-app">
        <Conversation :friend="selectedFriend" :messages="messages" @new="saveSendingMessage"/>
        <FriendshipList :friends="friends" @selected="startConversationWith"/>

    </div>
</template>

<script>
    import Conversation from './Conversation';
    import FriendshipList from './FriendshipList';

    export default {
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selectedFriend: null,
                messages: [],
                friends: []
            };
        },
        mounted() {
            Echo.private(`messages.${this.user.id}`)
                .listen('NewPrivateMessage', (event) => {
                    console.log(event.message);
                    this.handleIncoming(event.message);
                });

            axios.get('/messenger/friendships')
                .then((response) => {
                    this.friends = response.data;
                });
        },
        methods: {
            startConversationWith(friend) {
                this.updatedUnreadCount(friend, true);
                axios.get(`/messenger/getMessages/${friend.id}`)
                    .then((response)=> {
                        this.messages = response.data;
                        this.selectedFriend = friend;
                    });
            },
            saveSendingMessage(message) {
                // push new message to messages array
                this.messages.push(message);
                this.updatedLatestMessage(message.to_user_id, message);
            },
            handleIncoming(message) {
                if (this.selectedFriend && message.from_user_id == this.selectedFriend.id) {
                    this.messages.push(message);
                    this.updatedLatestMessage(message.from_user_id, message);
                    return;
                }

                this.updatedUnreadCount(message.from_user, false);
                this.updatedLatestMessage(message.from_user_id, message);
            },
            updatedUnreadCount(friend, reset) {
                this.friends = this.friends.map((single) => {
                    if (single.id != friend.id) {
                        return single;
                    }

                    if (reset) {
                        single.unread = 0;
                    } else {
                        single.unread += 1;
                    }

                    return single;
                });
            },
            updatedLatestMessage(friend_id, message) {
                this.friends = this.friends.map((single) => {
                    if (single.id != friend_id) {
                        return single;
                    }

                    single.latest_message = message.message;
                    single.updated_at = message.updated_at;

                    return single;
                });
            }
        },
        components: {Conversation, FriendshipList}
    }
</script>

<style lang="scss" scoped>
    .messenger-app{
        display: flex;
    }
</style>
