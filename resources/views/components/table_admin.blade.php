<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
        @if (count($data) > 0)
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No</th>
                    @foreach ($columns as $key => $label)
                        <th class="px-6 py-3">{{ $label }}</th>
                    @endforeach
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
        @endif
        <tbody>
            @foreach ($data as $row)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    @foreach ($columns as $key => $label)
                        <td class="px-6 py-4">
                            @if ($key === 'image_path' && $row->$key)
                                <img src="{{ asset('storage/' . $row->$key) }}" alt="Image" class="w-12 h-12 object-cover rounded">
                            @elseif ($key === 'created_at' || $key === 'updated_at')
                                {{ $row->$key ? $row->$key->format('Y-m-d H:i') : '-' }}
                            @else
                                {{ $row->$key ?? '-' }}
                            @endif
                        </td>
                    @endforeach
                    <td class="px-6 py-4 space-x-2">
                        <!-- Tombol Edit -->
                        <button data-modal-target="{{ $modal_id }}-{{ $row->product_id }}" data-modal-toggle="{{ $modal_id }}-{{ $row->product_id }}" data-id="{{ $row->product_id }}" data-name="{{ $row->name ?? 'Item' }}" class="text-blue-600 hover:underline">Edit</button>

                        <!-- Tombol Delete -->
                        <form class="inline" method="POST" action="{{ str_replace(':id', $row->product_id, $delete_route) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-id="{{ $row->product_id }}" data-name="{{ $row->name ?? 'Item' }}" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Edit Per-Baris -->
                <div id="{{ $modal_id }}-{{ $row->product_id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ $modal_name }}
                                </h3>
                                <button data-modal-hide="{{ $modal_id }}-{{ $row->product_id }}" type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>

                            <form action="{{ str_replace(':id', $row->product_id, $form_action) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="p-4 md:p-5 grid gap-4 mb-4 grid-cols-2">
                                    @foreach ($fields as $field)
                                        <div class="col-span-2">
                                            <label for="{{ $field['name'] }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $field['label'] }}</label>

                                            @switch($field['type'])
                                                @case('text')
                                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ old($field['name'], $row->{$field['name']} ?? '') }}" placeholder="{{ $field['placeholder'] ?? '' }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full max-w-sm p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" {{ $field['required'] ?? false ? 'required' : '' }}>
                                                @break

                                                @case('file')
                                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" {{ $field['required'] ?? false ? 'required' : '' }}>
                                                @break

                                                @case('textarea')
                                                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" rows="4" placeholder="{{ $field['placeholder'] ?? '' }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">{{ old($field['name'], $row->{$field['name']} ?? '') }}</textarea>
                                                @break

                                                @case('select')
                                                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                                        @if(isset($field['options']) && is_array($field['options']))
                                                            @foreach ($field['options'] as $key => $option)
                                                                @php
                                                                    $selectedValue = old($field['name'], $row->{$field['name']} ?? '');
                                                                    $optionValue = is_array($option) ? $option['value'] : $key;
                                                                    $optionLabel = is_array($option) ? $option['label'] : $option;
                                                                @endphp
                                                                <option value="{{ $optionValue }}" {{ $selectedValue == $optionValue ? 'selected' : '' }}>
                                                                    {{ $optionLabel }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                @break
                                            @endswitch

                                            @error($field['name'])
                                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    @endforeach
                                </div>

                                <div
                                    class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Save
                                    </button>
                                    <button data-modal-hide="edit-modal-{{ $row->id }}" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>
