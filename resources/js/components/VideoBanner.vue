<template>
    <div>
        <div id="youtube-player"></div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";

const props= defineProps({
    videoId: {
    type: String,
    required: true
    }
})
const player = ref(null);

const createPlayer = () => {
    player.value = new YT.Player("youtube-player", {
        height: 200,
        width: 290,
        videoId: props.videoId,
        playerVars: { autoplay: 0, controls: 1 }
    });
};

onMounted(() => {
    window.addEventListener("resize", () => {
        updateWidth();
        updateHeight();
    })
    if (!window.YT) {
        const tag = document.createElement("script");
        tag.src = "https://www.youtube.com/iframe_api";
        document.head.appendChild(tag);
    };

    window.onYouTubeIframeAPIReady = createPlayer;

    if (window.YT && window.YT.Player) {
        createPlayer();
    };
});

const width = ref();
const height = ref();

const updateWidth = () => {
    width.value = window.innerWidth;
    console.log(width.value);
    
    return (width.value / 4) - 16;
};
const updateHeight = () => {
    height.value = window.innerHeight;
    console.log(height.value);
    return (height.value / 4) - 16;
};
</script>

<style scoped>
.controls {
margin-top: 10px;
}
button {
margin-right: 10px;
padding: 8px 15px;
font-size: 16px;
cursor: pointer;
}
</style>
