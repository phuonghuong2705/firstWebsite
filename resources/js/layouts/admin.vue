<template>
    <div class="layout">
        <div class="container">
            <Header />
            <div class="content">
                <Sidebar />
                <div class="main-content">
                    <router-view></router-view>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script setup>
    import Header from '../components/Header.vue';
    import Sidebar from '../components/Sidebar.vue';
</script>

<style scoped lang="scss">
    .layout{
        display: flex;
        height: 100vh;
        .container {
        flex: 1;
        width: calc(100% - 48px);
        .content {
            display: flex;
            height: calc(100% - 70px);
            width: 100%;
            
            .main-content {
                flex: 1;
                background-color: #f5f5f5;
                overflow: auto;
            }
        }
    }
    }
</style>