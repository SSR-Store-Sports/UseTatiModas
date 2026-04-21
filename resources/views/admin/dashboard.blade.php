@extends('_layouts.app')

@section('title', __('dashboard') . ': UseTatiModas')

@section('content')
  <main class="h-full">
    <div class="flex mx-24 justify-center">
      <aside>
        <h1>@lang('menu')</h1>

        <div></div>
      </aside>

      <main>
        <h2>@lang('dashboard')</h2>

        <div>
          <section>
            <a href="">@lang('featured_products')</a>
            <a href="">@lang('products_admin')</a>
            <a href="">@lang('categories')</a>
            <a href="">@lang('stock')</a>
          </section>

          <span></span>

          <section>
            <div class="grid grid-cols-3">
              <div>
                <p>
                  <h3>@lang('total_revenue')</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>R$ 1248,68</span>
                  <span>@lang('revenue_change')</span>
                </div>
              </div>

              <div>
                <p>
                  <h3>@lang('orders_month')</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>250</span>
                  <span>@lang('orders_month_change')</span>
                </div>
              </div>

              <div>
                <p>
                  <h3>@lang('orders_day')</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>12</span>
                  <span>@lang('orders_day_change')</span>
                </div>
              </div>

              <div>
                <p>
                  <h3>@lang('cancellations_month')</h3>
                  <img src="" alt="">
                </p>

                <div>
                  <span>32</span>
                  <span>@lang('cancellations_month_change')</span>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-2">
              <div>
                <h3>@lang('cancellations')</h3>
                <p>@lang('soon')</p>
              </div>

              <div>
                <h3>@lang('popular_products')</h3>
                <p>@lang('soon')</p>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>

    <x-discounts />
  </main>
@endsection