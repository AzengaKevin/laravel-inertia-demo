<script setup>
import Layout from "../Shared/Layout.vue";
defineProps({
    appName: String,
});
</script>
<template>
    <Layout :app-name="appName">
        <h1>Welcome</h1>
        <p class="lead">The modern monolith</p>
    </Layout>
</template>
