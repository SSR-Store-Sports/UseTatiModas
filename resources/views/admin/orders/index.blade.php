@extends('_layouts.app')

@section('title', 'Orders: UseTatiModas Admin')

@section('content')
<main class="py-12 px-18">
  <div class="max-w-7xl mx-auto">

    <div class="flex-col flex mb-8 gap-2 shadow-[0_8px_4px_-4px_rgba(236,72,153,0.4)]">
      <h1 class="text-pink-600 text-4xl drop-shadow-[0_2px_4px_rgba(236,72,153,0.6)]">
        Orders
      </h1>
      <span class="w-full h-0.5 bg-pink-600"></span>
    </div>

    <section class="bg-white rounded-xl shadow-md shadow-pink-500/20 p-6">
      <h2 class="text-lg font-bold text-gray-800 mb-6">Orders Table</h2>

      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
          <thead>
            <tr class="border-b border-gray-200 text-gray-800">
              <th class="px-4 py-3">Order ID</th>
              <th class="px-4 py-3">Customer</th>
              <th class="px-4 py-3">Products</th>
              <th class="px-4 py-3">Total</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Date</th>
              <th class="px-4 py-3 text-center">Action</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">

            @forelse ($orders as $order)
              <tr class="hover:bg-pink-50/40">

                <td class="px-4 py-4">
                  {{ $order->id }}
                </td>

                <td class="px-4 py-4">
                  {{ $order->customer_name ?? 'Cliente' }}
                </td>

                <td class="px-4 py-4">
                  {{ $order->products ?? '-' }}
                </td>

                <td class="px-4 py-4 font-semibold">
                  R$ {{ number_format($order->total ?? 0, 2, ',', '.') }}
                </td>

                <td class="px-4 py-4">
                  <span class="px-3 py-1 rounded-md text-xs font-bold
                    @if(($order->status ?? '') == 'Approved') bg-green-500
                    @elseif(($order->status ?? '') == 'Pending') bg-yellow-500
                    @else bg-blue-500
                    @endif text-white">
                    {{ $order->status ?? 'Pending' }}
                  </span>
                </td>

                <td class="px-4 py-4">
                  {{ $order->created_at ? \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') : '-' }}
                </td>

                <td class="px-4 py-4 text-center">
                  <form method="POST" action="{{ route('admin.orders.destroy', $order->id) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                      Delete
                    </button>
                  </form>
                </td>

              </tr>
            @empty
              <tr>
                <td colspan="7" class="px-4 py-10 text-center text-gray-400">
                  No orders found.
                </td>
              </tr>
            @endforelse

          </tbody>
        </table>
      </div>
    </section>

  </div>
</main>
@endsection