<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';
import MarketingFooter from '@/Components/MarketingFooter.vue';

const contactForm = useForm({
    first_name: '',
    last_name: '',
    email: '',
    subject: '',
    message: '',
});

const newsletterForm = useForm({
    email: '',
});

const submitContact = () => {
    contactForm.post(route('contact.store'));
};

const submitNewsletter = () => {
    newsletterForm.post(route('newsletter.subscribe'));
};
</script>

<template>
    <Head title="Contact us" />

    <div class="min-h-screen flex flex-col bg-slate-50 text-slate-900">
        <!-- Simple header -->
        <header class="w-full bg-white border-b border-slate-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
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
                        <div class="text-[10px] uppercase tracking-[0.16em] text-emerald-600">
                            Contact
                        </div>
                    </div>
                </div>

                <div class="hidden sm:flex items-center gap-4 text-xs sm:text-sm text-slate-600">
                    <Link href="/tour-operators" class="hover:text-slate-900">For Tour Operators</Link>
                    <Link href="/accommodation-owners" class="hover:text-slate-900">For Accommodations</Link>
                    <Link href="/about" class="hover:text-slate-900">About</Link>
                </div>
            </div>
        </header>

        <main class="flex-1 bg-gradient-to-b from-white via-slate-50 to-slate-100">
            <!-- Contact form section -->
            <section class="max-w-3xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-center mb-2">
                    Contact us
                </h1>
                <p class="text-sm sm:text-base text-slate-600 text-center mb-8">
                    Let us know what you need and we&apos;ll get back to you in no time.
                </p>

                <div
                    class="bg-white rounded-2xl shadow-md border border-slate-200 p-6 sm:p-8"
                >
                    <form @submit.prevent="submitContact" class="space-y-4">
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div>
                                <label
                                    for="first_name"
                                    class="block text-xs font-medium text-slate-700 mb-1"
                                >
                                    First name
                                </label>
                                <input
                                    id="first_name"
                                    v-model="contactForm.first_name"
                                    type="text"
                                    class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                    required
                                />
                                <p
                                    v-if="contactForm.errors.first_name"
                                    class="mt-1 text-xs text-red-600"
                                >
                                    {{ contactForm.errors.first_name }}
                                </p>
                            </div>

                            <div>
                                <label
                                    for="last_name"
                                    class="block text-xs font-medium text-slate-700 mb-1"
                                >
                                    Last name
                                </label>
                                <input
                                    id="last_name"
                                    v-model="contactForm.last_name"
                                    type="text"
                                    class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                    required
                                />
                                <p
                                    v-if="contactForm.errors.last_name"
                                    class="mt-1 text-xs text-red-600"
                                >
                                    {{ contactForm.errors.last_name }}
                                </p>
                            </div>
                        </div>

                        <div>
                            <label
                                for="email"
                                class="block text-xs font-medium text-slate-700 mb-1"
                            >
                                Email address
                            </label>
                            <input
                                id="email"
                                v-model="contactForm.email"
                                type="email"
                                class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                required
                            />
                            <p
                                v-if="contactForm.errors.email"
                                class="mt-1 text-xs text-red-600"
                            >
                                {{ contactForm.errors.email }}
                            </p>
                        </div>

                        <div>
                            <label
                                for="subject"
                                class="block text-xs font-medium text-slate-700 mb-1"
                            >
                                Subject
                            </label>
                            <input
                                id="subject"
                                v-model="contactForm.subject"
                                type="text"
                                class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                required
                            />
                            <p
                                v-if="contactForm.errors.subject"
                                class="mt-1 text-xs text-red-600"
                            >
                                {{ contactForm.errors.subject }}
                            </p>
                        </div>

                        <div>
                            <label
                                for="message"
                                class="block text-xs font-medium text-slate-700 mb-1"
                            >
                                Message
                            </label>
                            <textarea
                                id="message"
                                v-model="contactForm.message"
                                rows="4"
                                class="block w-full rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                                required
                            />
                            <p
                                v-if="contactForm.errors.message"
                                class="mt-1 text-xs text-red-600"
                            >
                                {{ contactForm.errors.message }}
                            </p>
                        </div>

                        <p class="text-[11px] text-slate-500">
                            By submitting this form you agree to our terms and privacy
                            practices for Jumuika Pro.
                        </p>

                        <button
                            type="submit"
                            :disabled="contactForm.processing"
                            class="mt-2 inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow hover:bg-blue-700 disabled:opacity-60"
                        >
                            <span v-if="contactForm.processing">Sending...</span>
                            <span v-else>Send message</span>
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

            <!-- Newsletter section -->
            <section class="border-t border-slate-200 bg-slate-50 py-10 sm:py-14">
                <div class="max-w-3xl mx_auto px-4 sm:px-6 text-center">
                    <h2 class="text-xl sm:text-2xl font-extrabold mb-2">
                        Sign up for our newsletter
                    </h2>
                    <p class="text-sm sm:text-base text-slate-600 mb-5">
                        Get updates about new features, beta programs and news from the
                        Jumuika Pro team.
                    </p>

                    <form
                        @submit.prevent="submitNewsletter"
                        class="flex flex-col sm:flex-row gap-3 justify-center"
                    >
                        <input
                            v-model="newsletterForm.email"
                            type="email"
                            required
                            class="w-full sm:w-72 rounded-md border border-slate-300 px-3 py-2 text-sm shadow-sm focus:border-amber-500 focus:ring-amber-500"
                            placeholder="Enter your email"
                        />
                        <button
                            type="submit"
                            :disabled="newsletterForm.processing"
                            class="inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-blue-700 disabled:opacity-60"
                        >
                            Subscribe
                        </button>
                    </form>

                    <p
                        v-if="$page.props.flash?.newsletterSuccess"
                        class="mt-3 text-xs text-emerald-700 bg-emerald-50 border border-emerald-200 rounded-md px-3 py-2"
                    >
                        {{ $page.props.flash.newsletterSuccess }}
                    </p>

                    <p class="mt-3 text-[11px] text-slate-500">
                        By subscribing, you agree to our terms of service and privacy
                        policy.
                    </p>
                </div>
            </section>
        </main>

        <MarketingFooter />
    </div>
</template>

