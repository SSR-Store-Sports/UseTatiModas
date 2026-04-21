<section class="flex flex-col items-center justify-center gap-6 bg-pink-600 border-t-2 border-b-2 border-pink-300 py-12 px-4 shadow-xl/20 shadow-pink-500/50">
    <div class="flex flex-col items-center gap-2 text-center">
        <h2 class="text-white text-3xl font-bold">@lang('receive_exclusive_offers')</h2>
        <p class="text-pink-200 text-sm">@lang('newsletter_description')</p>
    </div>

    <div class="flex gap-2 w-full max-w-md">
        <input
            class="flex-1 px-4 py-3 rounded-md border border-pink-300 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 focus:shadow-[0_0_0_3px_rgba(255,255,255,0.3)]"
            type="email" name="newsletter" placeholder="@lang('email_placeholder')" />
        <button
            class="bg-white text-pink-600 font-semibold px-6 py-3 rounded-md border-2 border-white hover:bg-pink-700 hover:text-white hover:border-white transition-all duration-200 cursor-pointer outline-none whitespace-nowrap">
            @lang('want_discount')
        </button>
    </div>
</section>