<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Shared/Navbar.vue";
defineProps({
    appName: String,
});
</script>
<template>
    <header class="shadow-sm">
        <Navbar :app-name="appName" />
    </header>
    <main>
        <div class="container py-4">
            <h1>Users</h1>
            <p class="lead">Table of users</p>
        </div>
    </main>
</template>
