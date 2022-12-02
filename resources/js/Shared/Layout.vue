<script setup>
import Navbar from './Navbar.vue';

</script>
<template>
    <header class="shadow-sm">
        <Navbar />
    </header>

    <main>
        <div class="container py-4">
            <slot />
        </div>
    </main>
</template>