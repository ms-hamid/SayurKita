<form action="{{ str_replace(':id', $row->{ $id_field }, $form_action) }}" method="POST" enctype="multipart/form-data">
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
                        <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] ?? '' }}" accept="{{ $field['accept'] ?? 'image/*' }}" data-preview="preview-{{ $field['name'] }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm" {{ $field['required'] ?? false ? 'required' : '' }}>
                        <!-- Image preview -->
                        <img id="preview-{{ $field['name'] }}" src="" alt="Preview" class="mt-2 max-w-full h-auto rounded-lg shadow-sm" style="display: none; max-height: 200px;">
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
        <button data-modal-hide="{{ $modal_id }}-{{ $row->{ $id_field } }}" type="button"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Cancel
        </button>
    </div>
</form>