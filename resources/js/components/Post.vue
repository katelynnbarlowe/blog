<template>
    <div class="post my-8">
        <div class="bg-yellow p-2 w-2/5 uppercase drop-shadow-sm text-right">
            {{ date }}
        </div>
        <div class="px-8 flex">
            <div class="p-6 pl-44 w-1/5 font-bold text-right text-sm" v-html="post.short_description" />
            <div class="p-6 pl-12 w-2/5" v-html="post.description" />
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    export default {
        props: {
            post: {
                required: true,
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
            date() {
                return moment(this.post.publish_start_date).format('MMM Do, YYYY');
            }
        }
    }
</script>
