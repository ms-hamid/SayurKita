<!-- Modal toggle -->
<button data-modal-target="{{ $modal_id }}" data-modal-toggle="{{ $modal_id }}" 
        class="mt-6 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
        type="button">
    {{ $modal }}
</button>

<!-- Main modal -->
<div id="{{ $modal_id }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" 
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    {{ $modal_name }}
                </h3>
                <button data-modal-hide="{{ $modal_id }}" type="button" 
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body with form -->
            <form action="{{ $form_action }}" method="{{ $form_method === 'GET' ? 'GET' : 'POST' }}" enctype="multipart/form-data" class="p-4 md:p-5">
                @csrf
                @if($form_method !== 'GET' && $form_method !== 'POST')
                    @method($form_method)
                @endif

                <div class="grid gap-4 mb-4 grid-cols-2">
                    @foreach ($fields as $field)
                        <div class="col-span-2">
                            <label for="{{ $field['name'] }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                {{ $field['label'] }}
                                @if($field['required'] ?? false)
                                    <span class="text-red-500">*</span>
                                @endif
                            </label>

                            @switch($field['type'])
                                @case('text')
                                @case('email')
                                @case('number')
                                @case('password')
                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] ?? '' }}" value="{{ old($field['name'], $field['value'] ?? '') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error($field['name']) border-red-500 @enderror" {{ ($field['required'] ?? false) ? 'required' : '' }}>
                                @break
                                
                                @case('file')
                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" accept="{{ $field['accept'] ?? 'image/*' }}" data-preview="preview-{{ $field['name'] }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error($field['name']) border-red-500 @enderror" {{ ($field['required'] ?? false) ? 'required' : '' }}>
                                    
                                    <!-- Image preview -->
                                    <img id="preview-{{ $field['name'] }}" src="" alt="Preview" class="mt-2 max-w-full h-auto rounded-lg shadow-sm" style="display: none; max-height: 200px;">
                                @break

                                @case('textarea')
                                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" rows="{{ $field['rows'] ?? 4 }}" placeholder="{{ $field['placeholder'] ?? '' }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error($field['name']) border-red-500 @enderror" {{ ($field['required'] ?? false) ? 'required' : '' }}>{{ old($field['name'], $field['value'] ?? '') }}</textarea>
                                @break

                                @case('select')
                                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error($field['name']) border-red-500 @enderror" {{ ($field['required'] ?? false) ? 'required' : '' }}>
                                        <option value="" {{ !old($field['name'], $field['value'] ?? '') ? 'selected' : '' }} disabled>
                                            {{ $field['placeholder'] ?? 'Select option' }}
                                        </option>
                                        @if(isset($field['options']) && is_array($field['options']))
                                            @foreach ($field['options'] as $key => $option)
                                                @if(is_array($option))
                                                    <option value="{{ $option['value'] }}" 
                                                            {{ old($field['name'], $field['value'] ?? '') == $option['value'] ? 'selected' : '' }}>
                                                        {{ $option['label'] }}
                                                    </option>
                                                @else
                                                    <option value="{{ $key }}" 
                                                            {{ old($field['name'], $field['value'] ?? '') == $key ? 'selected' : '' }}>
                                                        {{ $option }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                @break

                                @case('checkbox')
                                    <div class="flex items-center">
                                        <input type="checkbox" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ $field['value'] ?? '1' }}" {{ old($field['name'], $field['checked'] ?? false) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="{{ $field['name'] }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            {{ $field['label'] }}
                                        </label>
                                    </div>
                                @break

                                @case('radio')
                                    @if(isset($field['options']) && is_array($field['options']))
                                        @foreach ($field['options'] as $key => $option)
                                            <div class="flex items-center mb-2">
                                                <input type="radio" name="{{ $field['name'] }}" id="{{ $field['name'] }}_{{ $key }}" value="{{ is_array($option) ? $option['value'] : $key }}"{{ old($field['name'], $field['value'] ?? '') == (is_array($option) ? $option['value'] : $key) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="{{ $field['name'] }}_{{ $key }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    {{ is_array($option) ? $option['label'] : $option }}
                                                </label>
                                            </div>
                                        @endforeach
                                    @endif
                                @break
                            @endswitch

                            @error($field['name'])
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    @endforeach
                </div>

                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" 
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{ $submit_text ?? 'Save' }}
                    </button>
                    <button data-modal-hide="{{ $modal_id }}" type="button" 
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        {{ $cancel_text ?? 'Cancel' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>