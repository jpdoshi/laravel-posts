<div class="mb-5 space-y-1.5">
    <p class="text-sm font-semibold">{{ $label }}</p>
    <textarea name="{{ $name }}"
        class="bg-white border border-slate-200 hover:border-slate-300 hover:bg-emerald-50/50 duration-300 focus:border-emerald-500 focus:shadow-[0_0_0_3px_rgb(208,250,229)] rounded-lg p-3 outline-0 w-full font-medium text-[15px] tinymce"
        required placeholder="{{ $placeholder }}" rows="{{ $rows }}"></textarea>
</div>