@extends('layouts.main')

@section('title', 'Campus Service Portal | Campus helpdesk')

@section('content')
    @include('layouts.header')

    <main class="pt-24 bg-white">
        <section class="relative overflow-hidden bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div class="text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-slate-200 bg-white mb-6">
                            <i data-lucide="clock" class="w-4 h-4 text-[#d97706]"></i>
                            <span class="text-sm text-slate-500">Helpdesk hours: Mon–Fri, 8:00am – 5:00pm</span>
                        </div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-5 leading-tight">
                            Something broken on campus?<br>
                            <span class="text-gradient">Tell us here.</span>
                        </h1>
                        <p class="text-sm sm:text-base text-slate-500 max-w-xl mx-auto lg:mx-0 mb-6 leading-relaxed">
                            Use your campus email to report a fault, book a room, or ask ICT for help. You will see who picked up your ticket and when they plan to come.
                        </p>
                        <div class="grid gap-2 text-left max-w-xl mx-auto lg:mx-0 mb-8">
                            <div class="flex items-start gap-2 text-sm text-slate-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i>
                                <span>Open a ticket in about a minute from your phone.</span>
                            </div>
                            <div class="flex items-start gap-2 text-sm text-slate-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i>
                                <span>Get an email when Estates or ICT takes the job.</span>
                            </div>
                            <div class="flex items-start gap-2 text-sm text-slate-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-[#d97706] mt-0.5 shrink-0"></i>
                                <span>Add a photo so the technician knows what to bring.</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                            <a href="{{ route('register') }}" class="group flex items-center gap-2 px-8 py-4 bg-[#2563eb] text-white rounded-xl font-semibold text-sm hover:bg-[#1d4ed8] glow-blue w-full sm:w-auto justify-center">
                                Open a ticket
                                <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 px-8 py-4 border border-slate-200 bg-white rounded-xl font-semibold text-sm text-slate-900 hover:border-[#2563eb]/40 w-full sm:w-auto">
                                I already have an account
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6 shadow-xl">
                            <div class="flex items-center justify-between mb-5">
                                <div>
                                    <p class="text-xs uppercase tracking-wider text-[#d97706] font-semibold">Today</p>
                                    <p class="text-lg font-semibold mt-1">Tickets being handled</p>
                                </div>
                                <span class="text-xs px-2.5 py-1 rounded-full bg-blue-50 text-[#2563eb] border border-blue-100">12 open</span>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                    <div class="w-9 h-9 rounded-lg bg-blue-50 flex items-center justify-center shrink-0">
                                        <i data-lucide="monitor-play" class="w-4 h-4 text-[#2563eb]"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium truncate">No display in Lecture Hall B2</p>
                                        <p class="text-xs text-slate-500 mt-0.5">ICT · Peter is on site</p>
                                    </div>
                                    <span class="text-[11px] px-2 py-1 rounded-full bg-amber-50 text-[#d97706] shrink-0">Working on it</span>
                                </div>
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                    <div class="w-9 h-9 rounded-lg bg-amber-50 flex items-center justify-center shrink-0">
                                        <i data-lucide="droplets" class="w-4 h-4 text-[#d97706]"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium truncate">Tap leaking in Hostel C, room 14</p>
                                        <p class="text-xs text-slate-500 mt-0.5">Estates · waiting for a plumber</p>
                                    </div>
                                    <span class="text-[11px] px-2 py-1 rounded-full bg-blue-50 text-[#2563eb] shrink-0">New</span>
                                </div>
                                <div class="flex items-start gap-3 p-3 rounded-xl bg-white border border-slate-200">
                                    <div class="w-9 h-9 rounded-lg bg-emerald-50 flex items-center justify-center shrink-0">
                                        <i data-lucide="calendar-check" class="w-4 h-4 text-emerald-600"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium truncate">Hall A1 reserved for Friday seminar</p>
                                        <p class="text-xs text-slate-500 mt-0.5">Halls office · confirmed</p>
                                    </div>
                                    <span class="text-[11px] px-2 py-1 rounded-full bg-emerald-50 text-emerald-700 shrink-0">Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 border-t border-slate-200 pt-8">
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="timer" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">~1 min</div><div class="text-sm text-slate-500">To open a ticket</div></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="building-2" class="w-6 h-6 text-[#d97706]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">5 departments</div><div class="text-sm text-slate-500">Ready to help</div></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0"><i data-lucide="message-square-text" class="w-6 h-6 text-[#2563eb]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Live updates</div><div class="text-sm text-slate-500">On every request</div></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 p-5 rounded-xl bg-white border border-slate-200">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center shrink-0"><i data-lucide="shield-check" class="w-6 h-6 text-[#d97706]"></i></div>
                    <div class="text-center sm:text-left"><div class="text-xl font-bold text-slate-900 mb-1">Secure</div><div class="text-sm text-slate-500">Campus account access</div></div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')
@endsection
