<template>
    <div class="content">
        <div class="banner-home">
            <a-row :gutter="[16,16]">
                <a-col style="width: 68%;"><Slider /></a-col>
                <a-col style="width: 32%; max-height: 400px;">
                    <a-row>
                        <div style="width: 100%; margin-bottom: 12px;">
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
    import Slider from '../../../components/client/Slider.vue';
    import VideoBanner from '../../../components/client/VideoBanner.vue';
    import HomeBanner from '../../../components/client/HomeBanner.vue';

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
        .banner-home{
            max-width: 1100px;
            max-height: 400px;
        }
    }
</style>