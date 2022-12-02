<script setup>
import { Link } from "@inertiajs/inertia-vue3"
import CustomLink from "./CustomLink.vue";

defineProps({
    appName: String
})
</script>
<template>
    <nav class="navbar navbar-light navbar-expand-md bg-light">
        <div class="container">
            <span class="navbar-brand">{{ appName }}</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <CustomLink href="/" :active="$page.component === 'Welcome'">Home</CustomLink>
                    </li>
                    <li class="nav-item">
                        <CustomLink href="/users" :active="$page.component === 'Users/Index'">Users</CustomLink>
                    </li>
                    <li class="nav-item">
                        <CustomLink href="/settings" :active="$page.component === 'Settings'">Settings</CustomLink>
                    </li>
                </ul>
                <div class="navbar-nav ms-auto">
                    <Link href="/logout" method="post" class="btn btn-danger" as="button">Log Out</Link>
                </div>
            </div>
        </div>
    </nav>
</template>