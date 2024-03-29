<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="fs-4 font-bold">Mehmonxona tahrirlash</p>
                    <form action="{{ route('rooms.update', $room) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mt-4">
                            <label for="service_id" class="form-label">Xizmat:</label>
                            <select name="service_id" id="service_id" class="form-control form-select">
                                @foreach($services as $item)
                                    <option @if($item->id == $room->service_id) selected @endif value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            @error('service_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="title" class="form-label">Nomi:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $room->title }}">
                            @error('title')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="text" class="form-label">Izoh:</label>
                            <textarea name="text" id="text" class="form-control" rows="3">{{ $room->text }}</textarea>
                            @error('text')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="room" class="form-label">Xonalar soni:</label>
                            <input type="number" name="room" id="room" class="form-control" value="{{ $room->room }}">
                            @error('room')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="bed" class="form-label">Yotoqlar soni:</label>
                            <input type="number" name="bed" id="bed" class="form-control" value="{{ $room->bed }}">
                            @error('bed')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="price" class="form-label">Narxi:</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $room->price }}">
                            @error('price')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label for="image" class="form-label">Rasm:</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <p>Oldingi rasm:</p>
                            <img src="{{ asset('uploads/rooms/'.$room->image)  }}" style="height: 200px;">
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
