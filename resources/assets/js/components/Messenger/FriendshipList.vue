<template>
    <div class="friendship-list">
        <ul>
            <li v-for="friend in sortedFriendships" :key="friend.id" @click="selectFriend(friend)" :class="{ 'selected': friend == selected}">
                <div class="avatar">
                    <img :src="friend.avatar" :alt="friend.name">
                </div>
                <div class="friend">
                    <p class="name">{{ friend.name }}</p>
                    <p class="newest-message">{{ friend.newest_message }}</p>
                </div>
                <span class="unread" v-if="friend.unread">
                    {{ friend.unread }}
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: {
            friends: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                selected: this.friends.length ? this.friends[0] : null
            };
        },
        methods: {
            selectFriend(friend) {
                this.selected = friend;
                this.$emit('selected', friend);
            }
        },
        computed: {
            sortedFriendships() {
                return _.sortBy(this.friends, [(friend) => {
                    return friend.updated_at;
                }]).reverse();
            }
        }
    }
</script>

<style lang="scss" scoped>
    .friendship-list{
        flex: 2;
        max-height: 600px;
        overflow: scroll;
        border-left: 1px solid #a6a6a6;

        ul {
            list-style-line: none;
            padding-left: 0;

            li {
                display: flex;
                padding: 2px;
                border-bottom: 1px solid #a6a6a6;
                height: 80px;
                position: relative;
                cursor: pointer;

                &.selected {
                    background: #cbdff1;
                }

                span.unread {
                    background: #75c567;
                    color: #ffffff;
                    position: absolute;
                    left: 5px;
                    top: 5px;
                    display: flex;
                    font-weight: 700;
                    min-width: 20px;
                    justify-content: center;
                    align-items: center;
                    line-height: 20px;
                    font-size: 12px;
                    padding: 0 4px;
                    border-radius: 3px;
                }

                .avatar {
                    flex: 1;
                    display: flex;
                    align-items: center;

                    img {
                        width: 35px;
                        border-radius: 50%;
                        margin: 0 auto;
                    }
                }

                .friend {
                    flex: 2;
                    display: flex;
                    font-size: 12px;
                    overflow: hidden;
                    flex-direction: column;
                    justify-content: center;

                    p {
                        margin: 0;

                        &.name {
                            font-weight: bold;
                        }
                    }
                }
            }
        }
    }
</style>
