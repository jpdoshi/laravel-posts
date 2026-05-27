<x-layout title="Sign up">
    <div class="max-w-4xl mx-auto p-6 py-12">
        <a href="javascript:history.back()"
            class="hover:text-emerald-500 font-medium flex gap-1 items-center mb-3 w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-3.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            <span class="tracking-tight">Back</span>
        </a>

        <form action="/register" method="POST">
            <x-forms.input label="Full name" placeholder="Enter your full name" name="name"></x-forms.input>
            <x-forms.input label="Email Address" placeholder="Enter your email address" name="email"></x-forms.input>
            <x-forms.input label="Your Password" placeholder="Enter your password" name="password"></x-forms.input>

            <button type="submit" class="btn">Register</button>
        </form>

        <p class="mt-4 text-slate-700 font-medium">Already have an account? <a href="/login"
                class="text-emerald-500 font-bold">Login instead</a></p>
    </div>
</x-layout>