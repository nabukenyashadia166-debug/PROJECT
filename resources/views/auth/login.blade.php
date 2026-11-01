@extends('layouts.main')

@section('title', 'Sign in | Campus Service Portal')

@section('content')
    <main class="min-h-screen bg-slate-50 flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-8">
                <div class="flex items-center justify-center mb-6">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Campus Service Portal" class="h-12 w-12">
                </div>
                <h1 class="text-2xl font-bold text-slate-900 mb-2 text-center">Welcome back</h1>
                <p class="text-sm text-slate-500 text-center mb-6">Sign in to your campus account</p>

                @if ($errors->any())
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="input-field" placeholder="you@campus.ac.ug">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                        <input id="password" type="password" name="password" required class="input-field" placeholder="••••••••">
                    </div>
                    <button type="submit" class="w-full bg-[#2563eb] text-white rounded-xl py-3 font-semibold hover:bg-[#1d4ed8] transition-colors">
                        Sign in
                    </button>
                </form>

                <div class="mt-6 text-center text-sm text-slate-500">
                    Need an account?
                    <a href="{{ route('register') }}" class="font-medium text-[#2563eb]">Create one</a>
                </div>
            </div>
        </div>
    </main>
@endsection
