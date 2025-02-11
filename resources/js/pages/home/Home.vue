<template>
    <div class="content">
        <div class="banner">
            <a-row style="height: 50%;" :gutter="[16,16]">
                <a-col style="width: 70%;"><Slider /></a-col>
                <a-col style="width: 30%;">
                    <a-row>
                        <div style="margin-bottom: 16px;">
                            <VideoBanner videoId="kFZo7yJ2ONg" />
                        </div>
                    </a-row>
                    <a-row>
                        <div>
                            <HomeBanner />
                        </div>
                    </a-row>
                </a-col>
            </a-row>
        </div>
    </div>
</template>

<script setup>
    import { onMounted, ref } from 'vue';
    import Slider from '../../components/Slider.vue';
    import VideoBanner from '../../components/VideoBanner.vue';
    import HomeBanner from '../../components/HomeBanner.vue';

    const width = ref();
    const height = ref();

    const updateWidth = () => {
        width.value = window.innerWidth;
        console.log(width.value);
        
        return width.value;
    };
    const updateHeight = () => {
        height.value = window.innerHeight;
        console.log(height.value);
        return height.value;
    };

    onMounted(() => {
        window.addEventListener("resize", () => {
            updateWidth();
            updateHeight();
        })
    });

</script>
<style scoped lang="scss">
    .content {
        justify-content: center;
        margin: 1em;
        .banner{
            width: 1000px;
            height: 420px;
        }
    }
</style>