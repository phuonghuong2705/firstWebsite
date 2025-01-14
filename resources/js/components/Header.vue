<template>
    <div class="header">
        <a-flex  justify="space-around" style="height: 70px;" align="center" horizontal>
            <a-flex gap="20" align="center">
                logo
                <a-input-search
                    v-model:value="value"
                    placeholder="Tìm kiếm"
                    style="width: 200px"
                    @search="onSearch"
                />
            </a-flex>
            <a-flex gap="20" align="center">
                <a-button>Đăng ký</a-button>
                <a-button>Đăng nhập</a-button>
            </a-flex>
        </a-flex>
    </div>
</template>

<script setup>
</script>

<style scoped lang="scss">
    .header{
        width: 100vw;
        height: 70px;
        background-color: red;
    }
</style>