<footer class="bg-gray-900 text-white pt-12 px-8 pb-4 mt-auto">
    <div class="max-w-300 mx-auto grid grid-cols-3 gap-8 md:grid-cols-3 md:text-center">
        <section class="flex flex-col gap-2">
            <h2 class="text-pink-400 text-xl mb-4">@lang('about_us')</h2>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                @lang('about_description')
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <strong class="text-white">@lang('free_shipping_benefit')</strong> @lang('for_purchases_above')
                R$ 199
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <strong class="text-white">@lang('installment_benefit')</strong> @lang('in_installments')
                12x @lang('interest_free')
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <strong class="text-white">@lang('exchange_benefit')</strong> @lang('in_days')
            </p>
        </section>

        <section class="flex flex-col gap-2">
            <h2 class="text-pink-400 text-xl mb-4">@lang('contact')</h2>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <i class="ph ph-phone text-pink-400 text-base min-w-4"></i>
                @lang('phone'): +55 11 97893-6260
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <i class="ph ph-whatsapp-logo text-pink-400 text-base min-w-4"></i>
                @lang('whatsapp'): +55 11 97893-6260
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <i class="ph ph-envelope text-pink-400 text-base min-w-4"></i>
                @lang('email'): contato@tatifitwear.com.br
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <i class="ph ph-clock text-pink-400 text-base min-w-4"></i>
                @lang('service_hours')
            </p>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                <i class="ph ph-storefront text-pink-400 text-base min-w-4"></i>
                @lang('physical_store')
            </p>
            <div class="mt-4">
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <strong class="text-white">@lang('payment_methods'):</strong>
                </p>
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <i class="ph ph-credit-card text-pink-400 text-base min-w-4"></i>
                    @lang('credit_cards')
                </p>
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <i class="ph ph-bank text-pink-400 text-base min-w-4"></i>
                    @lang('pix_boleto')
                </p>
            </div>
        </section>

        <section class="flex flex-col gap-2">
            <h2 class="text-pink-400 text-xl mb-4">@lang('follow_us')</h2>
            <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                @lang('follow_description')
            </p>
            <div class="flex gap-4 my-4 md:justify-center">
                <a href="#" aria-label="Facebook"
                    class="bg-transparent border-2 border-pink-400 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 hover:bg-pink-400 hover:-translate-y-0.5">
                    <img src="{{ asset('assets/facebook_logo.svg') }}" class="w-5 h-5 invert" alt="Facebook" />
                </a>
                <a href="https://www.instagram.com/tatifitmodas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                    aria-label="Instagram" target="_blank"
                    class="bg-transparent border-2 border-pink-400 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 hover:bg-pink-400 hover:-translate-y-0.5">
                    <img src="{{ asset('assets/instagram_logo.svg') }}" class="w-5 h-5 invert" alt="Instagram" />
                </a>
                <a href="https://api.whatsapp.com/send/?phone=5511978936260&text&type=phone_number&app_absent=0&utm_source=ig"
                    aria-label="WhatsApp"
                    class="bg-transparent border-2 border-pink-400 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 hover:bg-pink-400 hover:-translate-y-0.5">
                    <img src="{{ asset('assets/whatsapp_logo.svg') }}" class="w-5 h-5 invert" alt="WhatsApp" />
                </a>
                <a href="https://www.tiktok.com/@tatifitwear1?is_from_webapp=1&sender_device=pc" aria-label="TikTok"
                    class="bg-transparent border-2 border-pink-400 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 hover:bg-pink-400 hover:-translate-y-0.5">
                    <img src="{{ asset('assets/tiktok_logo.svg') }}" class=" w-5 h-5 invert" alt="TikTok" />
                </a>
            </div>

            <div class="mt-4">
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <strong class="text-white">@lang('useful_links'):</strong>
                </p>
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <a href="/guia-tamanhos"
                        class="text-gray-300 no-underline transition-colors duration-300 hover:text-pink-400">@lang('size_guide')</a>
                </p>
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <a href="/cuidar-pecas"
                        class="text-gray-300 no-underline transition-colors duration-300 hover:text-pink-400">@lang('care_instructions')</a>
                </p>
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <a href="/politica-troca"
                        class="text-gray-300 no-underline transition-colors duration-300 hover:text-pink-400">@lang('exchange_policy')</a>
                </p>
                <p class="leading-relaxed text-gray-300 text-sm flex items-center gap-2 md:justify-center">
                    <a href="/privacidade"
                        class="text-gray-300 no-underline transition-colors duration-300 hover:text-pink-400">@lang('privacy')</a>
                </p>
            </div>
        </section>
    </div>

    <div class="border-t border-gray-300 mt-8 pt-4 text-center">
        <p class="text-gray-300 text-xs">
            @lang('rights_reserved')
        </p>
    </div>
</footer>