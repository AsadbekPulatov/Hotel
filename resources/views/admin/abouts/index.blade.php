<x-app-layout>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <a href="{{ route('abouts.create') }}"
                           class="btn btn-success float-end">Qo'shish</a>
                        <h3 class="font-bold mb-3 mt-3">Biz haqimizda</h3>
                    </div>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th class="col-1">#</th>
                            <th class="col-3">Sarlavha</th>
                            <th class="col-6">Izoh</th>
                            <th class="col-2">Amallar</th>
                        </tr>
                        @foreach($abouts as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->text }}</td>
                                <td>
                                    <a href="{{ route('abouts.edit', $item) }}" class="btn btn-warning">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <form action="{{ route('abouts.destroy', $item) }}"
                                          method="post" id="course-form">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
