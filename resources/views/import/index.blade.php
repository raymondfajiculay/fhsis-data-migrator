<x-layout>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <form class="py-6 px-9" action="{{route('import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload File
                    </label>
                    <div class="mb-8">
                        <input type="file" name="import-file" class="sr-only" id="file" onchange="displayFileName(this)"/>
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
                    <!-- <div class="mb-8">
                        <input type="int">
                    </div> -->
                    <div id="file-name"></div> <!-- This will display the selected file name -->
                </div>

                <div>
                    <button class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Send File
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

<script>
    function displayFileName(input) {
        const fileName = input.files[0].name;
        document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
    }
</script>
