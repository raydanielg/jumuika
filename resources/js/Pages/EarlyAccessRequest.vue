<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';

const props = defineProps({
    sourcePage: {
        type: String,
        default: 'accommodations',
    },
});

const form = useForm({
    email: '',
    first_name: '',
    last_name: '',
    accommodation_name: '',
    website_url: '',
    notes: '',
    source_page: props.sourcePage,
});

const submit = () => {
    form.post(route('early-access.store'));
};
</script>

<template>
    <Head title="Request Early Access" />

    <div class="min-h-screen flex flex-col bg-slate-50 text-slate-900">
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
                            class="text-[10px] uppercase tracking-[0.16em] text-amber-600"
                        >
                            Early Access
                        </div>
                    </div>
                </div>

                <Link
                    href="/accommodation-owners"
                    class="text-xs sm:text-sm text-slate-600 hover:text-slate-900"
                >
                    ← Back
                </Link>
            </div>
        </header>

        <main
            class="flex-1 bg-gradient-to-b from-[#ecfdf3] via-[#f0fdf4] to-[#e5f6ff] py-10 sm:py-14"
        >
            <div class="max-w-5xl mx-auto px-4 sm:px-6 grid lg:grid-cols-2 gap-10">
                <section>
                    <span
                        class="inline-flex mb-3 px-3 py-1 rounded-full bg-slate-900 text-slate-50 text-[11px] uppercase tracking-wide"
                    >
                        Request Early Access
                    </span>
                    <h1
                        class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-4"
                    >
                        Be among the first to try
                        <span class="block text-amber-600">Jumuika Pro for Accommodations.</span>
                    </h1>
                    <p class="text-sm sm:text-base text-slate-700 max-w-xl mb-3">
                        Our new accommodation platform is on the way. Share a few details
                        about your property and we will send you a beta invite as soon as
                        spots are available.
                    </p>
                    <p class="text-xs sm:text-sm text-slate-500 max-w-xl">
                        We review every request to keep the network focused on verified
                        hotels, lodges, camps and serviced apartments.
                    </p>
                </section>

                <section>
                    <div
                        class="rounded-2xl bg-white/90 border border-slate-200 shadow-lg p-5 sm:p-6"
                    >
                        <h2 class="text-lg font-semibold text-slate-900 mb-1">
                            Request Early Access
                        </h2>
                        <p class="text-xs text-slate-500 mb-4">
                            Fields marked with * are required.
                        </p>

                        <form @submit.prevent="submit" class="space-y-4">
                            <div>
                                <label
                                    for="email"
                                    class="block text-xs font-medium text-slate-700 mb-1"
                                >
                                    Email (business email) *
                                </label>
                                <input
                                    id="email"
                                    v-model="form.email"
                                    type="email"
                                    class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                    required
                                />
                                <p v-if="form.errors.email" class="mt-1 text-xs text-red-600">
                                    {{ form.errors.email }}
                                </p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label
                                        for="first_name"
                                        class="block text-xs font-medium text-slate-700 mb-1"
                                    >
                                        First Name *
                                    </label>
                                    <input
                                        id="first_name"
                                        v-model="form.first_name"
                                        type="text"
                                        class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                        required
                                    />
                                    <p
                                        v-if="form.errors.first_name"
                                        class="mt-1 text-xs text-red-600"
                                    >
                                        {{ form.errors.first_name }}
                                    </p>
                                </div>

                                <div>
                                    <label
                                        for="last_name"
                                        class="block text-xs font-medium text-slate-700 mb-1"
                                    >
                                        Last Name *
                                    </label>
                                    <input
                                        id="last_name"
                                        v-model="form.last_name"
                                        type="text"
                                        class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                        required
                                    />
                                    <p
                                        v-if="form.errors.last_name"
                                        class="mt-1 text-xs text-red-600"
                                    >
                                        {{ form.errors.last_name }}
                                    </p>
                                </div>
                            </div>

                            <div>
                                <label
                                    for="accommodation_name"
                                    class="block text-xs font-medium text-slate-700 mb-1"
                                >
                                    Accommodation name *
                                </label>
                                <input
                                    id="accommodation_name"
                                    v-model="form.accommodation_name"
                                    type="text"
                                    class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                    required
                                />
                                <p
                                    v-if="form.errors.accommodation_name"
                                    class="mt-1 text-xs text-red-600"
                                >
                                    {{ form.errors.accommodation_name }}
                                </p>
                            </div>

                            <div>
                                <label
                                    for="website_url"
                                    class="block text-xs font-medium text-slate-700 mb-1"
                                >
                                    Website (use https://)
                                </label>
                                <input
                                    id="website_url"
                                    v-model="form.website_url"
                                    type="url"
                                    placeholder="https://www.example.com"
                                    class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                />
                                <p
                                    v-if="form.errors.website_url"
                                    class="mt-1 text-xs text-red-600"
                                >
                                    {{ form.errors.website_url }}
                                </p>
                            </div>

                            <div>
                                <label
                                    for="notes"
                                    class="block text-xs font-medium text-slate-700 mb-1"
                                >
                                    Anything else we should know? (optional)
                                </label>
                                <textarea
                                    id="notes"
                                    v-model="form.notes"
                                    rows="3"
                                    class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                />
                                <p v-if="form.errors.notes" class="mt-1 text-xs text-red-600">
                                    {{ form.errors.notes }}
                                </p>
                            </div>

                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="mt-2 inline-flex w-full items-center justify-center rounded-full bg-emerald-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-emerald-700 disabled:opacity-60"
                            >
                                <span v-if="form.processing">Sending...</span>
                                <span v-else>Request Early Access</span>
                            </button>

                            <p
                                v-if="$page.props.flash?.success"
                                class="mt-3 text-xs text-emerald-700 bg-emerald-50 border border-emerald-200 rounded-md px-3 py-2"
                            >
                                {{ $page.props.flash.success }}
                            </p>
                        </form>
                    </div>
                </section>
            </div>
        </main>
    </div>
</template>

