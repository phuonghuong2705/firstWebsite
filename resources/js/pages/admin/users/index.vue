<template>
    <div class="test">
        <a-button type="primary" @click="showModal">Open Modal</a-button>
        <a-modal v-model:open="open" title="Basic Modal" @ok="handleOk">
        <p>Some contents...</p>
        <p>Some contents...</p>
        <p>Some contents...</p>
        </a-modal>
    </div>
</template>
<script setup>
    import { ref } from 'vue';

    const open = ref(false);

    const showModal = () => {
        open.value = true;
    };

    const handleOk = e => {
        console.log(e);
        open.value = false;
    };
</script>

<style scoped lang="scss">
    .test{
        height: 10000px;
        background-color: blue($color: #000000);
    }
</style>
