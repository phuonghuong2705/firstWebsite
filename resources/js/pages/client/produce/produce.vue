<template>
    <div>

    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();

onMounted(() => {
    console.log(
        route.path
    );
})
</script>

<style lang="css" scoped>

</style>