<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    active: Boolean
})
</script>
<template>
    <Link class="nav-link" :class="{ 'active': active }">
        <slot />
    </Link>
</template>