<template>
    <div>
        <a-menu
            v-model:openKeys="state.openKeys"
            v-model:selectedKeys="state.selectedKeys"
            @mouseover="toggleCollapsed"
            @mouseleave="toggleCollapsed1"
            mode="inline"
            @click="handleClick"
            :style="{width: state.collapsed? '50px': '250px'}"
            :inline-collapsed="state.collapsed"
            :items="items"
        ></a-menu>
    </div>
</template>

<script setup>
import { reactive, watch, h, ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import {
    HomeOutlined,
    UserOutlined,
    SettingOutlined,
    ShoppingCartOutlined,
} from '@ant-design/icons-vue';

const router = useRouter();
const state = ref({
    collapsed: true,
    selectedKeys: [],
    openKeys: [],
    preOpenKeys: [],
});
const items = reactive([
    {
        key: '1',
        icon: () => h(HomeOutlined),
        label: 'Trang chủ',
        title: 'Home',
        router: 'admin'
    },
    {
        key: '2',
        icon: () => h(UserOutlined),
        label: 'User',
        title: 'User',
        router: 'admin-user'
    },
    {
        key: '3',
        icon: () => h(ShoppingCartOutlined),
        label: 'Sản phẩm',
        title: 'Sản phẩm',
    },
    {
        key: 'sub1',
        icon: () => h(SettingOutlined),
        label: 'Cài đặt',
        title: 'Cài đặt',
        children: [
        {
            key: '5',
            label: 'Thông tin chung',
            title: 'Thông tin chung',
        },
        {
            key: '6',
            label: 'Cài đặt Người dùng',
            title: 'Cài đặt Người dùng',
        },
        {
            key: '7',
            label: 'Đăng xuất',
            title: 'Đăng xuất',
        },
        ],
    },
]);

watch(() => state.openKeys,(_val, oldVal) => {
    state.value.preOpenKeys = oldVal;
},);

const toggleCollapsed = () => {
    state.value.collapsed = false;
};
const toggleCollapsed1 = () => {
    state.value.collapsed = true;
};
const handleClick = menuInfo => {
    if(state.value.openKeys.length && !menuInfo.keyPath.includes(state.value.openKeys[0])){
        state.value.openKeys = [];
    }
    redirectToRouter(menuInfo.item.router);
}
const redirectToRouter = (name = '') => {
    router.push({
        name: name
    })
}
</script>

<style lang="scss" scoped>
    :deep(.a-menu-inline ) {
        transition: all 0.3s ease;
    }
</style>