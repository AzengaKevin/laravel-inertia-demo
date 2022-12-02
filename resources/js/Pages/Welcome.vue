<script setup>
    defineProps({
        appName: String
    })
</script>
<template>
    <header class="shadow-sm">
        <nav class="navbar navbar-light navbar-expand-sm bg-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">{{ appName }}</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container py-4">
            <h1>Learning Laravel Inertia</h1>
            <p class="lead">The modern monolith</p>
        </div>
    </main>
</template>