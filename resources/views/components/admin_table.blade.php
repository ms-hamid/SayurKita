<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">No</th> {{-- Kolom nomor --}}
                @foreach ($columns as $col)
                    <th scope="col" class="px-6 py-3">{{ $col }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td> {{-- Nomor otomatis --}}
                    @foreach ($columns as $col)
                        <td class="px-6 py-4">
                            {!! $row[$col] ?? '-' !!}
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>        
    </table>
</div>
