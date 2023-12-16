<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="fs-4 font-bold">Biz haqimizda ma'lumotni tahrirlash</p>
                    <form action="{{ route('abouts.update', $about) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mt-4">
                            <label for="title" class="form-label">Nomi:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $about->title }}">
                            @error('title')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="text" class="form-label">Izoh:</label>
                            <textarea name="text" id="text" class="form-control" rows="3">{{ $about->text }}</textarea>
                            @error('text')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-info font-bold py-2 px-4 rounded">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
