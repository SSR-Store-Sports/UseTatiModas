<section class="flex flex-col items-center justify-center gap-6 bg-gold-medium border-t border-b border-gold-dark/20 py-12 px-4 shadow-sm">
    <div class="flex flex-col items-center gap-2 text-center">
        <h2 class="text-white text-3xl font-bold">@lang('receive_exclusive_offers')</h2>
        <p class="text-white/90 text-sm">@lang('newsletter_description')</p>
    </div>

    <div class="grid md:flex gap-2 w-full max-w-md">
        <input
            class="flex-1 px-4 py-3 rounded-md border border-white/30 bg-white text-gray-800 placeholder-gray-400 text-sm outline-none transition-all duration-200 focus:ring-2 focus:ring-white/50"
            type="email" name="newsletter" placeholder="@lang('email_placeholder')" />
        <button
            class="bg-white text-gold-dark font-semibold px-6 py-3 rounded-md border-2 border-white hover:bg-gold-dark hover:text-white transition-all duration-200 cursor-pointer outline-none whitespace-nowrap">
            @lang('want_discount')
        </button>
    </div>
</section>

