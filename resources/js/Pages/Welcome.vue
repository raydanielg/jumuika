<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Home" />
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white"
    >
        <div class="text-center px-6">
            <h1 class="text-4xl md:text-6xl font-bold tracking-wide mb-4">
                Coming Soon
            </h1>
            <p class="text-gray-300 text-sm md:text-base max-w-md mx-auto">
                Tunatengeneza jumuika. Tafadhali rudi tena hivi karibuni.
            </p>
        </div>
    </div>
</template>
