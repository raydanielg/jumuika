<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const page = usePage();
const news = page.props.news;

const props = defineProps({
    audience: {
        type: String,
        default: 'both',
    },
});

const shouldShow = computed(() => {
    if (!news) return false;
    if (news.audience === 'both') return true;
    return news.audience === props.audience;
});
</script>

<template>
    <div v-if="shouldShow" class="mt-2 flex justify-center px-4">
        <div
            class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-1.5 text-[11px] sm:text-xs text-slate-800 shadow-sm border border-slate-200"
        >
            <span
                class="inline-flex items-center rounded-full bg-blue-600 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-white"
            >
                New
            </span>

            <div class="truncate max-w-xs sm:max-w-md">
                <component
                    :is="news?.url ? Link : 'span'"
                    :href="news?.url || undefined"
                    class="inline-flex items-center gap-1 text-[11px] sm:text-xs text-slate-800 hover:text-blue-700"
                >
                    <span class="truncate">{{ news?.title }}</span>
                    <span v-if="news?.url" aria-hidden="true">→</span>
                </component>
            </div>
        </div>
    </div>
</template>

