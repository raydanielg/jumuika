<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MarketingFooter from '@/Components/MarketingFooter.vue';
</script>

<template>
    <Head title="Thank you" />

    <div class="min-h-screen flex flex-col bg-white text-slate-900">
        <!-- Simple top bar reused style -->
        <header
            class="w-full bg-white border-b border-slate-200 text-slate-900"
        >
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between"
            >
                <div class="flex items-center gap-2">
                    <img
                        src="/storage/appicon.png"
                        alt="Jumuika Pro logo"
                        class="h-9 w-9 rounded-md object-contain bg-slate-900 border border-slate-300"
                    />
                    <div class="leading-tight">
                        <div class="font-semibold tracking-tight text-sm sm:text-base">
                            Jumuika Pro
                        </div>
                        <div
                            class="text-[10px] uppercase tracking-[0.16em] text-emerald-600"
                        >
                            For Accommodations
                        </div>
                    </div>
                </div>

                <div class="hidden sm:flex items-center gap-4 text-xs sm:text-sm">
                    <Link href="/tour-operators" class="text-slate-600 hover:text-slate-900">
                        For Tour Operators
                    </Link>
                    <Link
                        href="/accommodation-owners"
                        class="text-slate-600 hover:text-slate-900"
                    >
                        For Accommodations
                    </Link>
                </div>
            </div>
        </header>

        <main class="flex-1 bg-slate-50">
            <section
                class="max-w-4xl mx-auto px-4 sm:px-6 py-12 sm:py-16 bg-white"
            >
                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-8">
                    <div>
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-2">
                            Thank you for your request!
                        </h1>
                        <p class="text-sm sm:text-base text-slate-700 max-w-2xl">
                            We appreciate you sharing your details and requesting early access to
                            Jumuika Pro for accommodations.
                        </p>
                    </div>

                    <div class="mt-4 sm:mt-0">
                        <Link
                            href="/accommodation-owners"
                            class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-600 text-white text-xs sm:text-sm font-semibold shadow hover:bg-emerald-700"
                        >
                            Back to main page
                            <span class="ml-1">→</span>
                        </Link>
                    </div>
                </div>

                <div class="space-y-4 text-sm sm:text-base text-slate-700">
                    <p>Here&apos;s what happens next:</p>

                    <ul class="space-y-2 text-sm sm:text-base">
                        <li>
                            🔍 We&apos;ll review each request and assess every new accommodation
                            submitted.
                        </li>
                        <li>
                            💬 Our team may reach out to you with a few quick questions about
                            your property and workflows.
                        </li>
                        <li>
                            ⏳ It may take a few weeks before you receive a final invite, depending
                            on demand.
                        </li>
                        <li>
                            📬 We&apos;ll keep you updated throughout the process so you know what&apos;s
                            happening.
                        </li>
                        <li>
                            ✅ Early access accounts will be released on a rolling, first-come,
                            first-served basis.
                        </li>
                    </ul>

                    <p class="pt-2">
                        Thanks again – we&apos;re excited to welcome you onboard soon!
                    </p>

                    <p class="text-sm text-slate-700">
                        If you have any questions, email us at
                        <a
                            href="mailto:hello@jumuikapro.com"
                            class="text-emerald-700 font-medium hover:underline"
                        >
                            hello@jumuikapro.com
                        </a>
                        .
                    </p>
                </div>
            </section>
        </main>

        <MarketingFooter />
    </div>
</template>

