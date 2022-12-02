<script setup>
import Navbar from './Navbar.vue';

defineProps({
    appName: String
})
</script>
<template>
    <header class="shadow-sm">
        <Navbar :app-name="appName" />
    </header>

    <main>
        <div class="container py-4">
            <slot />
        </div>
    </main>
</template>