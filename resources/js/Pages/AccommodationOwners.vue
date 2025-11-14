<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MarketingFooter from '@/Components/MarketingFooter.vue';
import { ref, onMounted, watch } from 'vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

const isDark = ref(true);

function applyTheme(value) {
    const root = document.documentElement;
    if (value) {
        root.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        root.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
}

onMounted(() => {
    const stored = localStorage.getItem('theme');
    if (stored === 'dark' || stored === 'light') {
        isDark.value = stored === 'dark';
    } else if (window.matchMedia) {
        isDark.value = window.matchMedia('(prefers-color-scheme: dark)').matches;
    }
    applyTheme(isDark.value);
});

watch(isDark, (val) => applyTheme(val));
</script>

<template>
    <Head title="For Accommodations" />
    <div
        class="min-h-screen flex flex-col bg-slate-50 text-slate-900 dark:bg-[#020617] dark:text-slate-50"
    >
        <!-- Top strip -->
        <div
            class="w-full bg-slate-100/70 border-b border-slate-200 text-[11px] sm:text-xs dark:bg-[#111827] dark:border-[#1f2937]"
        >
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 h-9 flex items-center justify-between text-slate-300"
            >
                <div class="flex items-center gap-4">
                    <Link
                        href="/tour-operators"
                        class="hidden sm:inline text-slate-400 hover:text-slate-100"
                    >
                        <span class="uppercase text-[10px] tracking-wide">For</span>
                        <span class="font-semibold"> Tour Operators / Agents</span>
                    </Link>
                    <span
                        class="uppercase text-[10px] tracking-wide text-slate-500 dark:text-slate-200"
                    >
                        For
                        <span class="font-semibold"> Accommodations</span>
                    </span>
                </div>
                <div class="hidden sm:flex items-center gap-4 text-slate-300">
                    <Link href="/about" class="hover:text-slate-50">About</Link>
                    <Link href="/contact" class="hover:text-slate-50">Contact</Link>
                </div>
            </div>
        </div>

        <!-- Main header -->
        <header
            class="w-full bg-white/95 border-b border-slate-200 text-slate-900 dark:bg-[#020617]/95 dark:border-[#1f2937] dark:text-slate-100 backdrop-blur"
        >
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between"
            >
                <div class="flex items-center gap-2">
                    <img
                        src="/logo.png"
                        alt="Jumuika Pro logo"
                        class="h-9 w-9 rounded-md object-contain bg-slate-900 border border-slate-300 dark:bg-[#020617] dark:border-[#374151]"
                    />
                    <div class="leading-tight">
                        <div class="font-semibold tracking-tight text-sm sm:text-base">
                            Jumuika Pro
                        </div>
                        <div
                            class="text-[10px] uppercase tracking-[0.16em] text-[#ca8a04] dark:text-[#facc15]"
                        >
                            For Accommodations
                        </div>
                    </div>
                </div>

                <nav class="hidden md:flex items-center gap-6 text-xs sm:text-sm">
                    <a href="#features" class="hover:text-slate-900 dark:hover:text-white">
                        Features
                    </a>
                    <a href="#rooms" class="hover:text-slate-900 dark:hover:text-white">
                        Room management
                    </a>
                    <a href="#insights" class="hover:text-slate-900 dark:hover:text-white">
                        Insights
                    </a>
                </nav>

                <div class="flex items-center gap-3 text-xs sm:text-sm">
                    <button
                        type="button"
                        class="inline-flex items-center px-3 py-1.5 rounded-full border border-slate-400/60 text-[11px] text-slate-800 bg-white hover:bg-slate-100 dark:border-slate-600 dark:text-slate-100 dark:bg-[#020617] dark:hover:bg-slate-800/70"
                        @click="isDark = !isDark"
                    >
                        <span class="mr-1">Theme</span>
                        <span v-if="isDark">☀️</span>
                        <span v-else>🌙</span>
                    </button>
                    <Link
                        v-if="canLogin"
                        :href="route('login')"
                        class="hidden sm:inline-flex items-center px-4 py-1.5 rounded-full border border-slate-400 text-slate-900 hover:bg-slate-100 dark:border-slate-600 dark:text-slate-100 dark:hover:bg-slate-800/70"
                    >
                        Sign In
                    </Link>
                    <Link
                        :href="route('early-access.create', { source: 'accommodations-header' })"
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#facc15] hover:bg-[#fde68a] text-[#111827] font-semibold shadow-sm"
                    >
                        Request Early Access
                    </Link>
                </div>
            </div>
        </header>

        <!-- Hero -->
        <main class="flex-1 bg-gradient-to-b from-[#ecfdf3] via-[#f0fdf4] to-[#e5f6ff] dark:from-[#020617] dark:via-[#020617] dark:to-[#111827]">
            <section class="max-w-6xl mx-auto px-4 sm:px-6 py-10 sm:py-14">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <!-- Left: text -->
                    <div>
                        <span
                            class="inline-flex mb-3 px-3 py-1 rounded-full bg-slate-900 text-slate-50 text-[11px] uppercase tracking-wide dark:bg-slate-50 dark:text-slate-900"
                        >
                            Coming Soon
                        </span>
                        <h1
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight mb-4 dark:text-slate-50"
                        >
                            Jumuika Pro for
                            <span class="block text-[#ca8a04] dark:text-[#facc15]"
                                >Accommodations.</span
                            >
                        </h1>
                        <p class="text-sm sm:text-base text-slate-700 max-w-xl mb-3 dark:text-slate-300">
                            Effortlessly manage your listings, contracts, and availability
                            across your Jumuika Pro partners. Get powerful data insights
                            and keep your rooms filled with the right guests.
                        </p>
                        <p class="text-sm sm:text-base text-slate-700 max-w-xl mb-6 dark:text-slate-300">
                            Connect directly with verified tour operators in Tanzania and
                            beyond, all in one secure B2B platform.
                        </p>

                        <div class="flex flex-wrap gap-3 mb-6">
                            <Link
                                :href="route('early-access.create', { source: 'accommodations-hero' })"
                                class="inline-flex items-center px-5 py-2.5 rounded-full bg-[#facc15] hover:bg-[#fde68a] text-[#111827] text-sm font-semibold shadow-lg shadow-[#f59e0b]/40"
                            >
                                Request Early Access
                            </Link>
                            <a
                                href="#features"
                                class="inline-flex items-center px-5 py-2.5 rounded-full bg-slate-900 hover:bg-slate-800 text-slate-50 text-sm font-semibold border border-slate-700"
                            >
                                View Features
                            </a>
                        </div>

                        <p class="text-[11px] text-slate-500 dark:text-slate-400">
                            Built for lodge owners, camp managers, and city hotels who want
                            more direct, reliable B2B partnerships.
                        </p>
                    </div>

                    <!-- Right: visual grid -->
                    <div class="flex justify-center lg:justify-end" id="rooms">
                        <div
                            class="relative w-full max-w-xl rounded-3xl bg-[#bbf7d0]/60 p-3 sm:p-4 shadow-2xl shadow-emerald-900/40 dark:bg-[#022c22]"
                        >
                            <div
                                class="rounded-2xl bg-white border border-slate-200 overflow-hidden dark:bg-[#020617] dark:border-[#1f2937]"
                            >
                                <div
                                    class="px-4 py-3 flex items-center justify-between border-b border-slate-200 bg-slate-50 dark:bg-[#020617] dark:border-[#1f2937]"
                                >
                                    <div>
                                        <p class="text-xs font-semibold text-slate-900 dark:text-slate-100">
                                            Nyota Luxury Camp
                                        </p>
                                        <p class="text-[11px] text-slate-500 dark:text-slate-400">
                                            Rooms overview
                                        </p>
                                    </div>
                                    <span
                                        class="inline-flex items-center px-2 py-1 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-700 dark:bg-emerald-900/60 dark:text-emerald-300"
                                    >
                                        Live on Jumuika Pro
                                    </span>
                                </div>
                                <div class="p-3 grid grid-cols-2 gap-3 text-[11px]">
                                    <div
                                        v-for="room in 5"
                                        :key="room"
                                        class="rounded-xl border border-slate-200 overflow-hidden bg-white dark:bg-[#020617] dark:border-[#1f2937]"
                                    >
                                        <div
                                            class="h-20 bg-[url('https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=800')] bg-cover bg-center"
                                        ></div>
                                        <div class="p-2 space-y-1">
                                            <p class="font-semibold text-[11px] text-slate-900 dark:text-slate-100">
                                                Luxury Tent Room
                                            </p>
                                            <p class="text-[10px] text-slate-500 dark:text-slate-400">
                                                DBL/TWIN • Full board
                                            </p>
                                            <p class="text-[10px] text-emerald-600 dark:text-emerald-300">
                                                From $260 per night
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col items-center justify-center rounded-xl border-2 border-dashed border-emerald-300 text-emerald-700 text-[11px] bg-emerald-50 dark:border-emerald-700 dark:text-emerald-300 dark:bg-emerald-900/20"
                                    >
                                        <span class="text-lg mb-1">+</span>
                                        <span>Create a new room</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Simple feature strip -->
            <section id="features" class="bg-white border-t border-slate-200 py-8 dark:bg-[#020617] dark:border-[#111827]">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="grid md:grid-cols-3 gap-6 text-xs sm:text-sm">
                        <div>
                            <p class="font-semibold mb-1 text-[#ca8a04] dark:text-[#facc15]">
                                Control your inventory
                            </p>
                            <p class="text-slate-700 dark:text-slate-300">
                                Manage room types, allocations, and blackout dates in one
                                place, synced with your B2B partners.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1 text-[#ca8a04] dark:text-[#facc15]">
                                Stay in the loop
                            </p>
                            <p class="text-slate-700 dark:text-slate-300">
                                Get a clear view of upcoming bookings, holds, and
                                performance across channels.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1 text-[#ca8a04] dark:text-[#facc15]">
                                Grow reliable partnerships
                            </p>
                            <p class="text-slate-700 dark:text-slate-300">
                                Work with verified tour operators who respect your
                                contracts, payment terms, and brand.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <MarketingFooter />
    </div>
</template>
