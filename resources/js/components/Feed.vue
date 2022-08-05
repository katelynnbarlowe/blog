<template>
    <div>
        <h1 class="uppercase font-slab text-center font-light border-b-4 border-orange">reflections</h1>
        <div class="feed">
            <post v-for="post in posts" :key="post.id" :post="post" />
        </div>
    </div>
</template>
<script>
import Post from './Post.vue';

export default {
    props: {
        posts: {
            required: true,
            type: Array,
        },
    },
    components: { Post },
}
</script>
