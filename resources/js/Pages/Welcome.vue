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
    <div class="min-h-screen flex flex-col bg-[#14100d] text-slate-900">
        <!-- Top navigation -->
        <header class="w-full border-b border-[#2b231b] bg-[#1d1813] text-[#f5e6c8]">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 flex items-center justify-between h-14 sm:h-16"
            >
                <div class="flex items-center gap-2">
                    <div
                        class="h-8 w-8 rounded-full bg-gradient-to-br from-[#fbbf24] via-[#f59e0b] to-[#92400e] flex items-center justify-center text-[#1f130a] font-bold text-lg shadow"
                    >
                        J
                    </div>
                    <span class="font-semibold tracking-tight text-sm sm:text-base">
                        Jumuika Pro
                    </span>
                </div>

                <nav class="hidden md:flex items-center gap-6 text-xs sm:text-sm">
                    <span class="cursor-pointer hover:text-[#fde68a]">For Tour Operators</span>
                    <span class="cursor-pointer hover:text-[#fde68a]">For Accommodations</span>
                    <span class="cursor-pointer hover:text-[#fde68a]">Pricing &amp; Features</span>
                </nav>

                <div class="flex items-center gap-3 text-xs sm:text-sm">
                    <Link
                        v-if="canLogin"
                        :href="route('login')"
                        class="hidden sm:inline-flex items-center px-4 py-1.5 rounded-full border border-[#facc15]/40 text-[#fef3c7] hover:bg-[#facc15]/10"
                    >
                        Sign In
                    </Link>
                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#facc15] hover:bg-[#fbbf24] text-[#1f130a] font-semibold shadow-sm"
                    >
                        Sign Up Free
                    </Link>
                </div>
            </div>
        </header>

        <!-- Hero -->
        <main class="flex-1 bg-gradient-to-b from-[#14100d] to-[#1c150f]">
            <section
                class="max-w-6xl mx-auto px-4 sm:px-6 py-10 sm:py-14 grid md:grid-cols-2 gap-10 items-center"
            >
                <!-- Left content -->
                <div>
                    <p class="text-xs font-medium tracking-wide text-[#facc15] uppercase mb-3">
                        Built for Tanzanian Tourism
                    </p>
                    <h1
                        class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#fef3c7] leading-tight mb-4"
                    >
                        Simple B2B Software
                        <span class="block text-[#facc15]">for Safari &amp; Stays.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-[#e5dcc4] max-w-xl mb-6">
                        User-friendly tools for tour operators and accommodation owners.
                        Connect, confirm, and get paid with less hassle and more
                        transparency.
                    </p>

                    <div class="flex flex-wrap gap-3 mb-6">
                        <Link
                            v-if="canRegister"
                            :href="route('register')"
                            class="inline-flex items-center px-5 py-2.5 rounded-full bg-[#facc15] hover:bg-[#fde68a] text-[#1f130a] text-sm font-semibold shadow-md shadow-[#f59e0b]/40"
                        >
                            Sign Up Free
                        </Link>
                        <a
                            href="#coming-soon"
                            class="inline-flex items-center px-5 py-2.5 rounded-full bg-[#1f2933] hover:bg-[#111827] text-[#fef3c7] text-sm font-semibold border border-[#374151]"
                        >
                            View What&apos;s Coming
                        </a>
                    </div>

                    <p class="text-xs text-[#e5dcc4]/80 max-w-sm">
                        Jumuika Pro is in active development. We&apos;re preparing a
                        powerful, ethical B2B platform for the Tanzanian tourism
                        industry.
                    </p>
                </div>

                <!-- Right visual mock -->
                <div class="flex justify-center">
                    <div
                        class="relative w-full max-w-md rounded-3xl bg-[#1e1913] border border-[#3a2c21] shadow-2xl overflow-hidden"
                    >
                        <div
                            class="px-4 py-3 flex items-center justify-between border-b border-[#3a2c21] bg-[#241a12]"
                        >
                            <span class="text-xs font-semibold text-[#fef3c7]">
                                Jumuika Pro Preview
                            </span>
                            <span
                                class="inline-flex items-center gap-1 text-[11px] text-[#facc15]"
                            >
                                ● ● ●
                            </span>
                        </div>
                        <div class="p-4 space-y-3">
                            <div
                                class="h-32 rounded-2xl bg-gradient-to-br from-[#facc15] via-[#fbbf24] to-[#a16207]"
                            ></div>
                            <div class="grid grid-cols-2 gap-3">
                                <div
                                    class="h-20 rounded-xl bg-gradient-to-br from-[#7c2d12] via-[#92400e] to-[#78350f]"
                                ></div>
                                <div
                                    class="h-20 rounded-xl bg-gradient-to-br from-[#4b5563] via-[#6b7280] to-[#374151]"
                                ></div>
                            </div>
                            <div class="space-y-1 text-[11px] text-[#e5dcc4]">
                                <p class="font-semibold">Safari &amp; Lodge Workflows</p>
                                <p>
                                    Designed to make STO rates, availability, and payments
                                    easier for real businesses across Tanzania.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Coming soon strip -->
            <section
                id="coming-soon"
                class="border-t border-[#2b231b] bg-[#1a140f] py-6 mt-4"
            >
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div
                        class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3"
                    >
                        <div>
                            <p class="text-xs font-semibold text-[#facc15] tracking-wide">
                                Coming Soon
                            </p>
                            <p class="text-sm text-[#fef3c7]">
                                Tunatengeneza Jumuika Pro. Tafadhali rudi tena hivi
                                karibuni.
                            </p>
                        </div>
                        <p class="text-[11px] text-[#e5dcc4]/80 max-w-md">
                            Early partners and pilots in the Tanzanian tourism ecosystem
                            will get priority onboarding once the platform launches.
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>
