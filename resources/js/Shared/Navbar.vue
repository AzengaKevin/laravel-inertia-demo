<script setup>
import { Link } from "@inertiajs/inertia-vue3"

defineProps({
    appName: String
})
</script>
<template>
    <nav class="navbar navbar-light navbar-expand-md bg-light">
        <div class="container-fluid">
            <span class="navbar-brand">{{ appName }}</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link href="/" class="nav-link">Home</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/users" class="nav-link">Users</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/settings" class="nav-link">Settings</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>