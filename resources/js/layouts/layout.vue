<template>
    <div class="layout">
        <div class="container">
            <Header />
            <div class="content">
                <div class="sidebar">
                    <Sidebar />
                </div>
                <div class="main-content">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import Header from '../commons/Header.vue';
    import Sidebar from '../commons/Sidebar.vue';
</script>

<style scoped lang="scss">
    .layout{
        display: flex;
        height: 100vh;
        .container {
        flex: 1;
        width: calc(100% - 48px);
        height: calc(100% - 70px);
        .content {
            height: 100%;
            display: flex;
            .sidebar{
                display: flex;
                height: 100%;
            }
            .main-content {
                flex: 1;
                background-color: #f5f5f5;
                overflow: auto;
            }
        }
    }
    }
</style>