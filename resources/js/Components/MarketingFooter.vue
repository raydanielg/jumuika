<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="mt-10">
        <!-- CTA strip -->
        <div class="bg-[#bbf7d0] border-t border-emerald-200">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 py-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between text-sm"
            >
                <p class="text-slate-800 font-medium">
                    Start sending your best quotes and managing rooms with Jumuika Pro.
                </p>
                <div class="flex flex-wrap gap-3">
                    <Link
                        href="/early-access"
                        class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-600 text-white text-xs sm:text-sm font-semibold shadow hover:bg-emerald-700"
                    >
                        Sign Up for Early Access
                        <span class="ml-1">→</span>
                    </Link>
                </div>
            </div>
        </div>

        <!-- Main footer -->
        <div class="bg-[#020617] text-slate-200 border-t border-slate-800">
            <div
                class="max-w-6xl mx-auto px-4 sm:px-6 py-6 flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between"
            >
                <div class="flex items-center gap-2">
                    <img
                        src="/logo.png"
                        alt="Jumuika Pro logo"
                        class="h-7 w-7 rounded-md object-contain bg-slate-900 border border-slate-600"
                    />
                    <div class="leading-tight">
                        <p class="font-semibold text-sm">Jumuika Pro</p>
                        <p class="text-[11px] text-slate-400">Sales & inventory for African travel</p>
                    </div>
                </div>

                <div class="flex flex-col gap-2 text-xs sm:text-[11px] text-slate-400">
                    <p class="font-medium text-slate-200">Follow us</p>
                    <div class="flex items-center gap-3">
                        <a href="#" class="hover:text-white">Facebook</a>
                        <a href="#" class="hover:text-white">Instagram</a>
                        <a href="#" class="hover:text-white">LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-800/70">
                <div
                    class="max-w-6xl mx-auto px-4 sm:px-6 py-4 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between text-[11px] text-slate-500"
                >
                    <p>© 2025 Jumuika Pro. All rights reserved.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" class="hover:text-slate-300">Privacy Policy</a>
                        <a href="#" class="hover:text-slate-300">Cookie Policy</a>
                        <a href="#" class="hover:text-slate-300">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

