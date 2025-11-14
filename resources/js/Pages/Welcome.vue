<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

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

const where = ref('');
const checkIn = ref('');
const checkOut = ref('');
const guests = ref(1);
const roomType = ref('');
const hasSearched = ref(false);

const featuredResults = ref([
    {
        id: 1,
        name: 'Serengeti Sunset Lodge',
        location: 'Central Serengeti',
        tier: '$$$',
        image:
            'https://images.pexels.com/photos/460680/pexels-photo-460680.jpeg?auto=compress&cs=tinysrgb&w=1200',
    },
    {
        id: 2,
        name: 'Zanzibar Breeze Villas',
        location: 'Paje, Zanzibar',
        tier: '$$',
        image:
            'https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=1200',
    },
    {
        id: 3,
        name: 'Arusha Mountain View Hotel',
        location: 'Arusha, Tanzania',
        tier: '$$',
        image:
            'https://images.pexels.com/photos/338504/pexels-photo-338504.jpeg?auto=compress&cs=tinysrgb&w=1200',
    },
]);

function handleSearch(e) {
    e.preventDefault();
    hasSearched.value = true;
}

function goToSignup() {
    window.location.href = '/register';
}
</script>

<template>
    <Head title="Jumuika Pro" />
    <div class="min-h-screen bg-white text-slate-900 flex flex-col">
        <header class="w-full border-b border-slate-100/80 bg-white/80 backdrop-blur z-20">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <div
                        class="h-9 w-9 rounded-xl bg-gradient-to-br from-blue-900 via-blue-700 to-orange-500 flex items-center justify-center text-white font-bold text-lg shadow-sm"
                    >
                        J
                    </div>
                    <span class="font-semibold tracking-tight text-slate-900">Jumuika Pro</span>
                </div>

                <nav class="hidden md:flex items-center gap-6 text-sm text-slate-700">
                    <a href="#problem" class="hover:text-slate-900">Problem</a>
                    <a href="#why" class="hover:text-slate-900">Why Jumuika</a>
                    <a href="#cta" class="hover:text-slate-900">Get Started</a>
                </nav>

                <div class="flex items-center gap-3">
                    <Link
                        v-if="canLogin"
                        :href="route('login')"
                        class="text-sm text-slate-700 hover:text-slate-900"
                    >
                        Log in
                    </Link>
                    <button
                        v-if="canRegister"
                        type="button"
                        class="hidden sm:inline-flex items-center px-4 py-2 rounded-full text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 shadow-sm transition-colors"
                        @click="goToSignup"
                    >
                        Sign Up Free
                    </button>
                </div>
            </div>
        </header>

        <main class="flex-1">
            <!-- Hero + search -->
            <section class="relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-blue-950 via-blue-900 to-slate-900"
                ></div>
                <div
                    class="absolute inset-0 mix-blend-soft-light opacity-60 bg-[url('https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&w=1600')] bg-cover bg-center"
                ></div>
                <div class="relative max-w-6xl mx-auto px-4 sm:px-6 pt-16 pb-20">
                    <div class="grid lg:grid-cols-2 gap-10 items-center">
                        <div class="text-white">
                            <h1
                                class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight mb-4"
                            >
                                Unite Your Tourism Business.
                                <span class="text-orange-300">Simplify Bookings.</span>
                                Maximize Profit.
                            </h1>
                            <p
                                class="text-sm sm:text-base text-slate-100/80 max-w-xl mb-6 leading-relaxed"
                            >
                                The smartest way for tour operators and accommodation owners
                                in Tanzania to connect, manage bookings, and get paid—
                                all in one secure B2B platform.
                            </p>

                            <div class="flex flex-wrap items-center gap-3 text-xs sm:text-sm">
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 border border-white/20"
                                >
                                    <span
                                        class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-400"
                                    ></span>
                                    Built for Tanzania, ready for Africa
                                </span>
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/5 border border-white/15"
                                >
                                    Secure payments & automated commission splits
                                </span>
                            </div>
                        </div>

                        <div>
                            <form
                                class="bg-white/95 backdrop-blur shadow-xl rounded-2xl p-4 sm:p-5 space-y-4 border border-slate-100"
                                @submit="handleSearch"
                            >
                                <h2 class="text-slate-900 font-semibold text-base sm:text-lg mb-1">
                                    Search smart. Book faster.
                                </h2>
                                <p class="text-xs sm:text-sm text-slate-500 mb-2">
                                    Get a taste of how Jumuika Pro connects tour operators with
                                    verified accommodations.
                                </p>

                                <div
                                    class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-sm"
                                >
                                    <div class="space-y-1">
                                        <label class="block text-slate-600">Where</label>
                                        <input
                                            v-model="where"
                                            type="text"
                                            placeholder="Serengeti, Zanzibar, Arusha"
                                            class="w-full rounded-xl border border-slate-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500/70 focus:border-blue-500 text-slate-900 placeholder:text-slate-400"
                                        />
                                    </div>

                                    <div class="space-y-1">
                                        <label class="block text-slate-600">Check in</label>
                                        <input
                                            v-model="checkIn"
                                            type="date"
                                            class="w-full rounded-xl border border-slate-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500/70 focus:border-blue-500 text-slate-900"
                                        />
                                    </div>

                                    <div class="space-y-1">
                                        <label class="block text-slate-600">Check out</label>
                                        <input
                                            v-model="checkOut"
                                            type="date"
                                            class="w-full rounded-xl border border-slate-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500/70 focus:border-blue-500 text-slate-900"
                                        />
                                    </div>

                                    <div class="space-y-1">
                                        <label class="block text-slate-600">Guests</label>
                                        <input
                                            v-model.number="guests"
                                            type="number"
                                            min="1"
                                            class="w-full rounded-xl border border-slate-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500/70 focus:border-blue-500 text-slate-900"
                                        />
                                    </div>

                                    <div class="space-y-1 sm:col-span-2">
                                        <label class="block text-slate-600">Room type</label>
                                        <select
                                            v-model="roomType"
                                            class="w-full rounded-xl border border-slate-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500/70 focus:border-blue-500 text-slate-900 bg-white"
                                        >
                                            <option value="">Select room type</option>
                                            <option>Standard Room</option>
                                            <option>Luxury Tent</option>
                                            <option>Villa</option>
                                            <option>Suite</option>
                                            <option>Family Room</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>

                                <button
                                    type="submit"
                                    class="mt-1 inline-flex items-center justify-center w-full rounded-2xl bg-orange-500 hover:bg-orange-600 text-white font-semibold text-sm py-2.5 sm:py-3 shadow-md shadow-orange-500/30 transition-colors"
                                >
                                    <span class="mr-2">Search</span>
                                    <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/15">
                                        🔍
                                    </span>
                                </button>

                                <p class="text-[11px] sm:text-xs text-slate-400 mt-1.5">
                                    This is a preview of how Jumuika Pro works. To see full
                                    listings and manage bookings, you&apos;ll need to create an
                                    account.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Teaser results -->
            <section
                v-if="hasSearched"
                class="bg-slate-50 border-t border-slate-100/80 py-10 sm:py-12"
            >
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="flex items-end justify-between mb-4 sm:mb-6">
                        <div>
                            <h2 class="text-lg sm:text-xl font-semibold text-slate-900">
                                Featured stays matching your search
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-500 mt-1">
                                A glimpse of what&apos;s inside Jumuika Pro. Sign up to unlock
                                full listings, live STO rates, and in-app payments.
                            </p>
                        </div>
                        <button
                            type="button"
                            class="hidden sm:inline-flex items-center text-xs font-medium text-blue-700 hover:text-blue-900"
                            @click="goToSignup"
                        >
                            Sign up to unlock all
                        </button>
                    </div>

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5"
                    >
                        <article
                            v-for="stay in featuredResults"
                            :key="stay.id"
                            class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col"
                        >
                            <div class="relative h-40 sm:h-44 overflow-hidden">
                                <img
                                    :src="stay.image"
                                    :alt="stay.name"
                                    class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                                />
                                <div
                                    class="absolute top-2 left-2 px-2.5 py-1 rounded-full bg-black/60 text-[11px] text-white"
                                >
                                    {{ stay.location }}
                                </div>
                            </div>
                            <div class="flex-1 flex flex-col p-3 sm:p-4">
                                <div class="flex items-start justify-between gap-2">
                                    <h3 class="font-semibold text-sm sm:text-base text-slate-900">
                                        {{ stay.name }}
                                    </h3>
                                    <span
                                        class="text-[11px] px-2 py-0.5 rounded-full bg-slate-100 text-slate-600"
                                    >
                                        {{ stay.tier }}
                                    </span>
                                </div>
                                <p class="mt-1.5 text-xs text-slate-500 flex-1">
                                    Live STO rates, instant availability, and automated
                                    payments—all in one place.
                                </p>
                                <button
                                    type="button"
                                    class="mt-3 inline-flex items-center justify-center w-full rounded-xl bg-blue-900 hover:bg-blue-950 text-white text-xs sm:text-sm font-medium py-2 transition-colors"
                                    @click="goToSignup"
                                >
                                    See more &amp; book in Jumuika Pro
                                </button>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Problem & Why sections (short version) -->
            <section id="problem" class="py-10 sm:py-14 bg-white">
                <div class="max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">
                                Tired of the old way?
                            </h2>
                            <p class="text-sm sm:text-base text-slate-600 mb-4">
                                Spreadsheets, endless emails, late-night WhatsApps, and
                                payment confusion. The traditional way of running B2B
                                tourism in Tanzania is slow, messy, and risky.
                            </p>
                            <div class="space-y-3 text-sm text-slate-700">
                                <div class="flex gap-2">
                                    <span class="mt-1 text-orange-500">•</span>
                                    <p>
                                        <strong>Tour operators</strong> juggle STO rates
                                        from different properties, always worried
                                        something&apos;s outdated.
                                    </p>
                                </div>
                                <div class="flex gap-2">
                                    <span class="mt-1 text-orange-500">•</span>
                                    <p>
                                        <strong>Accommodation owners</strong> chase
                                        confirmations, payments, and reconciliation while
                                        rooms sit empty.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="why" class="space-y-3">
                            <h3 class="text-base font-semibold text-slate-900">
                                Jumuika Pro: Your digital bridge.
                            </h3>
                            <div class="space-y-2 text-sm text-slate-700">
                                <p>
                                    <strong>Connect &amp; trust:</strong> Verified tour
                                    operators and licensed accommodations in one
                                    ecosystem.
                                </p>
                                <p>
                                    <strong>Real-time &amp; effortless:</strong> Live STO
                                    rates, instant availability, and fewer back-and-forth
                                    emails.
                                </p>
                                <p>
                                    <strong>Payments made simple:</strong> Secure,
                                    automated commission splits so everyone gets paid
                                    correctly and on time.
                                </p>
                                <p>
                                    <strong>Built for Tanzania:</strong> Designed around
                                    how the local industry really works—ready to scale
                                    across Africa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA section -->
            <section
                id="cta"
                class="py-10 sm:py-14 bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800 text-white"
            >
                <div class="max-w-5xl mx-auto px-4 sm:px-6 text-center">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-3">
                        Ready to transform your tourism business?
                    </h2>
                    <p class="text-sm sm:text-base text-blue-100 max-w-2xl mx-auto mb-6">
                        Join Jumuika Pro and connect directly with verified partners.
                        Simplify bookings, automate payments, and focus on what you do
                        best: creating unforgettable experiences.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-3">
                        <button
                            type="button"
                            class="inline-flex items-center px-5 py-2.5 rounded-full bg-orange-500 hover:bg-orange-600 text-sm sm:text-base font-semibold text-white shadow-lg shadow-orange-500/40 transition-colors"
                            @click="goToSignup"
                        >
                            Sign Up Free
                        </button>
                        <Link
                            v-if="canLogin"
                            :href="route('login')"
                            class="inline-flex items-center px-4 py-2 rounded-full border border-white/40 text-sm sm:text-base font-medium text-white/90 hover:bg-white/10"
                        >
                            Already with us? Log in
                        </Link>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>
