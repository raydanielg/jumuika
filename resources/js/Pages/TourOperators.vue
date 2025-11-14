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
const showMobileNav = ref(false);

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
    <Head title="For Tour Operators" />
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
                    <span
                        class="uppercase text-[10px] tracking-wide text-slate-500 dark:text-slate-400"
                    >
                        For
                        <span
                            class="font-semibold text-slate-900 dark:text-slate-100"
                        >
                            Tour Operators / Agents
                        </span>
                    </span>
                    <Link
                        href="/accommodation-owners"
                        class="hidden sm:inline text-slate-400 hover:text-slate-100"
                    >
                        For Accommodations
                    </Link>
                </div>
                <div class="flex items-center gap-3 text-slate-500 dark:text-slate-300 text-[11px] sm:text-xs">
                    <Link href="/about" class="hover:text-slate-900 dark:hover:text-slate-50">
                        About
                    </Link>
                    <span class="hidden xs:inline-block text-slate-400">•</span>
                    <Link href="/contact" class="hover:text-slate-900 dark:hover:text-slate-50">
                        Contact
                    </Link>
                </div>
            </div>
        </div>

        <!-- Main header -->
        <header
            class="w-full bg-white/95 border-b border-slate-200 text-slate-900 dark:bg-[#020617]/95 dark:border-[#1f2937] dark:text-slate-100 backdrop-blur"
        >
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between text-slate-100"
            >
                <div class="flex items-center gap-2">
                    <img
                        src="/storage/appicon.png"
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
                            For Tour Operators
                        </div>
                    </div>
                </div>

                <nav class="hidden md:flex items-center gap-6 text-xs sm:text-sm">
                    <a href="#features" class="hover:text-slate-900 dark:hover:text-white">
                        Features
                    </a>
                    <a href="#workflow" class="hover:text-slate-900 dark:hover:text-white">
                        How it works
                    </a>
                    <a href="#results" class="hover:text-slate-900 dark:hover:text-white">
                        Results
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
                        v-if="canRegister"
                        :href="route('register')"
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#facc15] hover:bg-[#fde68a] text-[#111827] font-semibold shadow-sm"
                    >
                        Sign Up Free
                    </Link>
                    <button
                        type="button"
                        class="inline-flex items-center md:hidden px-3 py-1.5 rounded-full border border-slate-300 text-[11px] text-slate-800 bg-white hover:bg-slate-100"
                        @click="showMobileNav = !showMobileNav"
                    >
                        <span class="mr-1">Menu</span>
                        <span v-if="showMobileNav">✕</span>
                        <span v-else>☰</span>
                    </button>
                </div>
            </div>
        </header>

        <div v-if="showMobileNav" class="md:hidden border-b border-slate-200 bg-white">
            <nav class="max-w-6xl mx-auto px-4 sm:px-6 py-3 flex flex-col gap-2 text-xs">
                <a href="#features" class="text-slate-700 hover:text-slate-900">
                    Features
                </a>
                <a href="#workflow" class="text-slate-700 hover:text-slate-900">
                    How it works
                </a>
                <a href="#results" class="text-slate-700 hover:text-slate-900">
                    Results
                </a>
            </nav>
        </div>

        <!-- Hero -->
        <main class="flex-1 bg-slate-50">
            <section
                class="bg-[url('/storage/light-green-vector-background-with-dots-lines_6869-1443.jpg')] bg-cover bg-center"
            >
                <div class="bg-white/90">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10 sm:py-14">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <!-- Left: text -->
                    <div>
                        <p
                            class="text-[11px] sm:text-xs font-medium tracking-[0.2em] uppercase text-[#facc15] mb-3"
                        >
                            Built for Tanzanian safari sales teams
                        </p>
                        <h1
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 leading-tight mb-4"
                        >
                            Leading Sales Software
                            <span class="block text-[#ca8a04]">for the Safari Industry.</span>
                        </h1>
                        <p class="text-sm sm:text-base text-slate-700 max-w-xl mb-6">
                            Create beautiful itineraries, quote faster, and close more
                            bookings. Jumuika Pro gives tour operators a simple, powerful
                            workspace tailored to East African safaris.
                        </p>

                        <div class="flex flex-wrap gap-3 mb-6">
                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="inline-flex items-center px-5 py-2.5 rounded-full bg-[#facc15] hover:bg-[#fde68a] text-[#111827] text-sm font-semibold shadow-lg shadow-[#f59e0b]/40"
                            >
                                Sign Up Free
                            </Link>
                            <a
                                href="#features"
                                class="inline-flex items-center px-5 py-2.5 rounded-full bg-slate-900 hover:bg-slate-800 text-slate-50 text-sm font-semibold border border-slate-600"
                            >
                                View Features
                            </a>
                        </div>

                        <div class="flex items-center gap-3 text-[11px] text-slate-500">
                            <div class="flex items-center gap-1">
                                <span class="inline-flex text-[#facc15]">★★★★★</span>
                                <span>Trusted by safari operators in Tanzania</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: video preview -->
                    <div class="flex flex-col gap-4">
                        <div
                            class="relative rounded-3xl bg-gradient-to-br from-[#facc15] via-[#fbbf24] to-[#a16207] p-1 shadow-2xl shadow-black/40"
                        >
                            <div
                                class="rounded-[22px] bg-[#020617] border border-[#374151] overflow-hidden"
                            >
                                <div
                                    class="px-4 py-3 flex items-center justify-between border-b border-[#1f2937] bg-[#020617]"
                                >
                                    <span class="text-xs font-semibold text-slate-100">
                                        Tanzanian Safari Demo
                                    </span>
                                    <span
                                        class="text-[10px] px-2 py-0.5 rounded-full bg-slate-100/10 text-[#facc15] border border-[#facc15]/40"
                                    >
                                        Video
                                    </span>
                                </div>

                                <div class="p-0">
                                    <div class="relative w-full pb-[56.25%] bg-black">
                                        <iframe
                                            class="absolute inset-0 w-full h-full"
                                            src="https://www.youtube.com/embed/blaRjrB-llQ?rel=0"
                                            title="Tanzania Tours Video"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="rounded-2xl border border-[#1f2937] bg-[#020617]/90 p-4 flex gap-3 items-start text-[11px] text-slate-200"
                        >
                            <div
                                class="h-10 w-10 rounded-full bg-[url('https://images.pexels.com/photos/2080099/pexels-photo-2080099.jpeg?auto=compress&cs=tinysrgb&w=400')] bg-cover bg-center"
                            ></div>
                            <div>
                                <p class="mb-1 text-xs">
                                    "With Jumuika Pro we send quotes faster and close more
                                    trips without adding extra staff."
                                </p>
                                <p class="text-slate-400">
                                    — Sample Partner, Arusha-based safari operator
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </section>

            <!-- Created for safari industry section -->
            <section
                id="created-for"
                class="border-t border-emerald-100 py-10 sm:py-14 bg-[url('/storage/line-wave-background-minimalist-style_483537-3578.jpg')] bg-cover bg-center"
            >
                <div class="bg-white/85">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8">
                        <div
                            class="grid md:grid-cols-2 gap-8 items-center rounded-3xl bg-white/95 border border-emerald-100 shadow-xl overflow-hidden"
                        >
                        <div class="relative h-full">
                            <div
                                class="h-full min-h-[220px] sm:min-h-[260px] bg-[url('https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&w=1200')] bg-cover bg-center"
                            ></div>
                            <div
                                class="absolute inset-x-6 bottom-0 h-4 rounded-t-3xl bg-[#4ade80]/20"
                            ></div>
                        </div>

                        <div class="p-5 sm:p-7">
                            <h2
                                class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-2 leading-snug"
                            >
                                Created for the
                                <span class="text-[#ca8a04]">safari industry.</span>
                            </h2>
                            <p class="text-sm sm:text-base text-slate-700 mb-4">
                                No need to be an IT guru — Jumuika Pro is built to make
                                day-to-day safari sales easier. It&apos;s tailored to the
                                workflows of East African tour operators so your team can
                                focus on guests, not spreadsheets.
                            </p>
                            <a
                                href="#features"
                                class="inline-flex items-center text-xs sm:text-sm font-semibold text-emerald-700 hover:text-[#ca8a04]"
                            >
                                Learn more about the features
                                <span class="ml-1">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <div
                        class="mt-6 grid gap-4 text-[11px] sm:text-sm text-slate-700 md:grid-cols-3"
                    >
                        <div class="flex items-start gap-2">
                            <span
                                class="mt-1 inline-flex h-4 w-4 items-center justify-center rounded-full bg-[#22c55e]/15 text-[#22c55e] text-xs"
                            >
                                ✓
                            </span>
                            <p>
                                Optimize your
                                <span class="font-semibold">sales process</span> from
                                enquiry to confirmation.
                            </p>
                        </div>
                        <div class="flex items-start gap-2">
                            <span
                                class="mt-1 inline-flex h-4 w-4 items-center justify-center rounded-full bg-[#22c55e]/15 text-[#22c55e] text-xs"
                            >
                                ✓
                            </span>
                            <p>
                                Inspire and
                                <span class="font-semibold">blow away clients</span> with
                                modern, branded itineraries.
                            </p>
                        </div>
                        <div class="flex items-start gap-2">
                            <span
                                class="mt-1 inline-flex h-4 w-4 items-center justify-center rounded-full bg-[#22c55e]/15 text-[#22c55e] text-xs"
                            >
                                ✓
                            </span>
                            <p>
                                Create trust and
                                <span class="font-semibold">follow up faster</span> using
                                a single source of truth.
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <!-- Simple feature strip -->
            <section id="features" class="bg-[#020617] border-t border-[#111827] py-8">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="grid md:grid-cols-3 gap-6 text-xs sm:text-sm text-slate-200">
                        <div>
                            <p class="font-semibold mb-1 text-[#facc15]">
                                Quote faster
                            </p>
                            <p>
                                Build itineraries in minutes with reusable products and
                                templates tailored to safaris.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1 text-[#facc15]">
                                Sell with confidence
                            </p>
                            <p>
                                Always up-to-date STO rates and rooming to avoid
                                underquoting and mistakes.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold mb-1 text-[#facc15]">
                                Grow your business
                            </p>
                            <p>
                                A modern, branded experience that inspires guests and
                                builds long-term trust.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <MarketingFooter />
    </div>
</template>
