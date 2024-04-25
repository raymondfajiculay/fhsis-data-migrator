<x-layout>
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center">FP Record Migrator</h2>
    <div class="flex items-center justify-center p-5">
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form class="py-6 px-9" action="{{route('fprecord')}}" method="POST" enctype="multipart/form-data" onsubmit="showLoadingScreen()">
                @csrf
                <div class="mb-6">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload File
                    </label>
                    <div>
                        <input type="file" name="import-file" class="sr-only" id="file" onchange="displayFileName(this)" />
                        <label for="file" class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                    Drop files here
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    Or
                                </span>
                                <span class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                    Browse
                                </span>
                            </div>
                        </label>
                    </div>
                    <div id="file-name"></div> <!-- Display the selected file name -->
                </div>
                <div class="mb-6 pt-4">
                    <label for="age" class="mb-5 block text-xl font-semibold text-[#07074D]">Age Range</label>
                    <div>
                        <select id="age" name="age" class="h-full rounded-md border-0 bg-transparent text-gray-500 py-1.5 pl-7 pr-20">
                            <option>0-14</option>
                            <option>15-19</option>
                            <option>20-49</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Send File
                    </button>
                </div>
            </form>
            @if (session('status')) <!-- Check if a status message is available -->
                <div class="bg-green-200 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                    {{ session('status') }} <!-- Display the status message -->
                </div>
            @endif
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loading-overlay" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-700 bg-opacity-75">
        <div class="text-white text-xl font-semibold">Uploading...</div>
    </div>
</x-layout>

<script>
    function displayFileName(input) {
        const fileName = input.files[0].name;
        document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
    }

    function showLoadingScreen() {
        document.getElementById('loading-overlay').classList.remove('hidden'); // Display the loading overlay
    }
</script>
