<div class="bg-blue-50 p-4 rounded-lg">
    {{-- Be like water. --}}
    @livewire('category.add')
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Product Count
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                
                    @forelse ($categories as $item)
                    <tr class="text-center bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $loop -> index+1 }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $item -> name }}
                    </td>

                    <td class="px-6 py-4">
                        @if ($item -> products -> count() > 0 )
                            {{ $item -> products -> count() }}
                            
                        @else
                            Null
                        @endif
                    </td>

                    <td class="px-6 py-4 text-right">
                        <a wire:click="delete({{ $item -> id }})" href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                    </td>
                    @empty
                        <td colspan="4" class="px-6 py-4 text-center">
                            No Data
                        </td>
                     </tr>
                    @endforelse

            </tbody>
        </table>
    </div>
</div>
