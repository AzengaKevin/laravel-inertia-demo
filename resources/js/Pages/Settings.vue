<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Layout from "../Shared/Layout.vue";
defineProps({ appName: String });
</script>
<template>
    <Layout :app-name="appName">
        <h1>Settings</h1>
        <p class="lead">Users beatiful settings</p>
    </Layout>
</template>
