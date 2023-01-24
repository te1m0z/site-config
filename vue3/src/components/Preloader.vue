<template>
    <div class="loader">
        <span class="spinner"></span>
    </div>
</template>

<script>
export default {
    name: 'PreLoader'
}
</script>

<style lang="scss" scoped>
.loader {
    margin-top: 40px;
    @media (max-width: 768px) {
        margin-top: 20px;
    }
}

.spinner {
    display: block;
    margin: 0 auto;
    width: 48px;
    height: 48px;
    position: relative;

    &::before,
    &::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        border: 6px solid #8FC93A;
        border-bottom-color: transparent;
        animation: anim_loader 1s linear infinite;
    }

    &::after {
        opacity: 0;
        animation-delay: 1s;
    }
}

@keyframes anim_loader {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
