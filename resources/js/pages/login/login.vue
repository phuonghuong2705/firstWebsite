<template>
    <div class="form-style">
        <a-form
            :model="formData"
            name="normal_login"
            class="login-form"
            @finish="onFinish"
            @finishFailed="onFinishFailed"
        >
            <a-form-item>
                <a-typography-title class="login-form-title">
                    Login
                </a-typography-title>
            </a-form-item>

            <a-form-item
                label="Username"
                name="username"
                :rules="[{ required: true, message: 'Please input your username!' }]"
            >
                <a-input v-model:value="formData.username">
                    <template #prefix>
                        <UserOutlined class="site-form-item-icon" />
                    </template>
                </a-input>
            </a-form-item>
    
            <a-form-item
                label="Password"
                name="password"
                :rules="[{ required: true, message: 'Please input your password!' }]"
            >
                <a-input-password v-model:value="formData.password">
                <template #prefix>
                    <LockOutlined class="site-form-item-icon" />
                </template>
                </a-input-password>
            </a-form-item>
    
            <a-form-item>
                <a-form-item name="remember" no-style>
                    <a-checkbox v-model:checked="formData.remember">Remember me</a-checkbox>
                </a-form-item>
                <a class="login-form-forgot" href="">Forgot password</a>
            </a-form-item>
        
            <a-form-item>
                <a-button :disabled="disabled" type="primary" html-type="submit" class="login-form-button">
                    Log in
                </a-button>
                <div class="form-text">Or Sign Up With</div>
                <a-space align="center" style="width: 100%; gap: 10px; justify-content: center;">
                    <a-button shape="circle"><GoogleOutlined /></a-button>
                    <a-button shape="circle"><FacebookOutlined /></a-button>
                    <a-button shape="circle">A</a-button>
                </a-space>
                <div class="form-text">
                    Or
                    <a href="">register now!</a>
                </div>
            </a-form-item>
        </a-form>
    </div>
</template>
<script setup>
    import { reactive, computed } from 'vue';
    import { UserOutlined, LockOutlined, GoogleOutlined, FacebookOutlined } from '@ant-design/icons-vue';

    const formData = reactive({
        username: '',
        password: '',
        remember: true,
    });

    //action
    const onFinish = values => {
        console.log('Success:', values);
    };
    const onFinishFailed = errorInfo => {
        console.log('Failed:', errorInfo);
    };
    const disabled = computed(() => {
        return !(formData.username && formData.password);
    });

</script>
<style scoped lang="scss">
    .form-style{
        display: flex;
        width: 100vw;
        height: 100vh;
        align-items: center;
        justify-content: center;
        justify-items: center;
        .login-form {
            max-width: 300px;
            .login-form-title{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .login-form-forgot {
                float: right;
            }
            .login-form-button {
                width: 100%;
            }
            .form-text{
                display: flex;
                padding: 20px 0px 10px 0px;
                width: 100%;
                gap: 5px;
                justify-content: center;
            }
        }
    }

    
</style>