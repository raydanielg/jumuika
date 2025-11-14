<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MarketingFooter from '@/Components/MarketingFooter.vue';

const team = [
    { name: 'Mariam Mwageni', role: 'Co-founder & CEO', location: 'Dar es Salaam' },
    { name: 'Juma Lema', role: 'Co-founder & Product Lead', location: 'Arusha' },
    { name: 'Neema Mushi', role: 'Customer Success Lead', location: 'Moshi' },
    { name: 'Kelvin Mwasiti', role: 'Engineering Lead', location: 'Dodoma' },
    { name: 'Asha Mgonja', role: 'Design & Brand', location: 'Dar es Salaam' },
    { name: 'Abel Kimaro', role: 'Sales – Safari Operators', location: 'Arusha' },
    { name: 'Zawadi Mboya', role: 'Partnerships – Lodges', location: 'Karatu' },
    { name: 'Hamisi Nfuka', role: 'Implementation Specialist', location: 'Zanzibar' },
];
</script>

<template>
    <Head title="About Jumuika Pro" />

    <div class="min-h-screen flex flex-col bg-slate-50 text-slate-900">
        <!-- Header strip -->
        <div
            class="w-full bg-slate-900 text-[11px] sm:text-xs text-slate-200 border-b border-slate-800"
        >
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 h-9 flex items-center justify-between"
            >
                <div class="flex items-center gap-4">
                    <Link
                        href="/tour-operators"
                        class="hidden sm:inline text-slate-300 hover:text-white"
                    >
                        For Tour Operators / Agents
                    </Link>
                    <Link
                        href="/accommodation-owners"
                        class="hidden sm:inline text-slate-300 hover:text-white"
                    >
                        For Accommodations
                    </Link>
                </div>
                <div class="hidden sm:flex items-center gap-4 text-slate-300">
                    <span>About</span>
                    <Link href="/early-access" class="hover:text-white">Early Access</Link>
                </div>
            </div>
        </div>

        <!-- Main header -->
        <header
            class="w-full bg-white/95 border-b border-slate-200 text-slate-900 backdrop-blur"
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
                            About us
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3 text-xs sm:text-sm">
                    <Link
                        href="/early-access"
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-[#facc15] hover:bg-[#fde68a] text-[#111827] font-semibold shadow-sm"
                    >
                        Request Early Access
                    </Link>
                </div>
            </div>
        </header>

        <main
            class="flex-1 bg-gradient-to-b from-[#ecfdf3] via-[#f0fdf4] to-[#e5f6ff]"
        >
            <!-- Story section -->
            <section class="max-w-6xl mx-auto px-4 sm:px-6 py-10 sm:py-14">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1
                            class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-4"
                        >
                            Built in Tanzania,
                            <span class="text-[#ca8a04]">for African travel teams.</span>
                        </h1>
                        <p class="text-sm sm:text-base text-slate-700 mb-3 max-w-xl">
                            Jumuika Pro was created by a group of Tanzanian operators, lodge
                            partners and technologists who were tired of running safari
                            sales on spreadsheets, WhatsApp threads and scattered systems.
                        </p>
                        <p class="text-sm sm:text-base text-slate-700 mb-3 max-w-xl">
                            We work closely with tour companies and accommodations across
                            Arusha, Moshi, Zanzibar and beyond to design software that fits
                            how East African travel really works – not the other way around.
                        </p>
                        <p class="text-xs sm:text-sm text-slate-500 max-w-xl">
                            From STO contracts and allotments to itineraries and payments,
                            our goal is simple: help you run a modern, profitable safari
                            business without losing the human relationships that matter.
                        </p>
                    </div>

                    <div
                        class="rounded-3xl overflow-hidden border border-emerald-100 shadow-xl bg-white"
                    >
                        <div
                            class="h-56 sm:h-64 bg-[url('https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&w=1200')] bg-cover bg-center"
                        ></div>
                        <div class="p-4 text-[12px] text-slate-600">
                            <p>
                                Shot on the Northern Circuit. Jumuika Pro is designed with
                                input from safari teams working these routes every day.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- What we believe -->
            <section class="bg-white border-y border-slate-200 py-10 sm:py-14">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-3">
                            What we believe.
                        </h2>
                        <p class="text-sm sm:text-base text-slate-700 mb-4 max-w-xl">
                            The safari and beach holiday industry is one of East Africa&apos;s
                            strongest exports – but it&apos;s often powered by tools that were
                            never built for this unique business.
                        </p>
                        <p class="text-sm sm:text-base text-slate-700 max-w-xl">
                            We believe operators and accommodations deserve modern software
                            that understands contracts, seasonality and relationships – not
                            just generic booking forms.
                        </p>
                    </div>

                    <div class="grid gap-4">
                        <div
                            class="rounded-2xl bg-gradient-to-br from-[#ecfdf3] via-[#bbf7d0] to-[#a7f3d0] p-5 border border-emerald-200 text-sm sm:text-base text-slate-900 shadow-md"
                        >
                            <p class="font-semibold mb-2 text-emerald-900">
                                "Running a successful safari business shouldn&apos;t require ten
                                different systems and late-night spreadsheets."
                            </p>
                            <p class="text-slate-800 text-sm">
                                Jumuika Pro exists to give African travel teams one connected
                                workspace – from quote to rooming to reporting.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experienced pack -->
            <section class="py-10 sm:py-14">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-10 items-center">
                    <div
                        class="rounded-3xl overflow-hidden border border-emerald-100 shadow-xl bg-white"
                    >
                        <div
                            class="h-56 sm:h-64 bg-[url('https://images.pexels.com/photos/6054372/pexels-photo-6054372.jpeg?auto=compress&cs=tinysrgb&w=1200')] bg-cover bg-center"
                        ></div>
                    </div>

                    <div>
                        <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-3">
                            Experienced, safari-first team.
                        </h2>
                        <p class="text-sm sm:text-base text-slate-700 mb-3 max-w-xl">
                            Jumuika Pro was founded in 2024 by a small pack of former
                            safari consultants, lodge managers and software builders based
                            in Tanzania.
                        </p>
                        <p class="text-sm sm:text-base text-slate-700 mb-3 max-w-xl">
                            As a company, we&apos;re young. But as individuals, we&apos;ve spent
                            years working with operators from Arusha to Cape Town and
                            partners across the region.
                        </p>
                        <p class="text-xs sm:text-sm text-slate-500 max-w-xl">
                            That mix of local experience and product discipline shapes every
                            feature we ship.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Team -->
            <section class="bg-white border-t border-slate-200 py-10 sm:py-14">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-2">
                        Meet the Jumuika pack.
                    </h2>
                    <p class="text-sm sm:text-base text-slate-700 mb-6 max-w-xl">
                        A growing team of Tanzanian and East African specialists helping
                        travel businesses modernise their operations – one workflow at a
                        time.
                    </p>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 text-[11px] sm:text-xs">
                        <div
                            v-for="member in team"
                            :key="member.name"
                            class="rounded-2xl overflow-hidden border border-emerald-300/70 bg-[#bbf7d0]/50 shadow-sm"
                        >
                            <div
                                class="h-24 sm:h-28 bg-gradient-to-tr from-slate-900 via-slate-700 to-emerald-700 opacity-80"
                            ></div>
                            <div class="p-3 space-y-1 bg-gradient-to-t from-[#bbf7d0]/80 via-white to-white">
                                <p class="font-semibold text-slate-900 text-xs">
                                    {{ member.name }}
                                </p>
                                <p class="text-[11px] text-slate-600">
                                    {{ member.role }}
                                </p>
                                <p class="text-[10px] text-slate-500">
                                    {{ member.location }}, Tanzania
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <MarketingFooter />
    </div>
</template>

