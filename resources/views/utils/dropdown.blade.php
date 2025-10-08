@props(['orders' => []])

<form 
    method="GET"
    action="/home"
    id="dropdown"
    class="hidden w-[200px] px-4 py-5 border border-gray-200  flex-col gap-3 rounded-md shadow-[0px_0px_15px_rgba(0,0,0,0.09)] top-full mt-2 absolute bg-[var(--color-secondary)] ">

    @forelse($orders as $order)
    <label
        class="font-medium h-10 relative flex items-center px-3 gap-3 rounded-lg has-[:checked]:text-blue-500 has-[:checked]:bg-gray-100 text-sm cursor-pointer">

        {{ $order['name'] }}

        <input
            value="{{ $order['id'] }}"
            type="radio"
            name="order"
             onchange="this.form.submit()" 
            class="peer/html w-4 h-4 absolute accent-current right-3 order" />
    </label>
    @empty
    <p class="text-gray-500 text-sm px-3">Nenhuma opção disponível.</p>
    @endforelse
</form>