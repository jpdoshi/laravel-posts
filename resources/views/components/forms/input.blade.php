<div class="mb-5 space-y-1.5">
    <p class="text-sm font-semibold">{{ $label }}</p>
    <input name="{{ $name }}"
        class="bg-white border {{ $errors->has($name) ? 'border-red-500 focus:shadow-[0_0_0_3px_rgb(255,226,226)]' : 'border-slate-200 hover:border-slate-300 hover:bg-emerald-50/50 focus:border-emerald-500 focus:shadow-[0_0_0_3px_rgb(208,250,229)]' }} duration-300 rounded-lg h-10 px-3 outline-0 w-full font-medium text-[15px]"
        placeholder="{{ $placeholder }}" />

    @error($name)
        <p class="-mt-0.5 text-sm text-red-500 font-medium">
            {{ $message }}
        </p>
    @enderror
</div>