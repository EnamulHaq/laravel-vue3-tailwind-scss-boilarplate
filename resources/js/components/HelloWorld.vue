<template>
    <div class="main-content">
        <p>This is main content wrapper</p>
    </div>
    <h1 class="text-red-900 text-2xl">{{ greeting }}</h1>
</template>
<script>
export default {
    setup: () => ({
        greeting: 'Hello World from Vue 3!'
    })
}
</script>
