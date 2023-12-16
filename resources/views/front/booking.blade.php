@extends("front.master")
@section("content")
    <div class="box1">
        <div class="wrapper">
            {{--            @include("front.form")--}}
            <div class="pad">
                <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">MEHMONXONA</h2>
                @foreach($rooms as $item)
                    <div class="col1 pad">
                        <figure class="pad_bot3"><img src="{{ asset('uploads/rooms/'.$item->image) }}"
                                                      alt=""
                                                      style="width: 70%;">
                        </figure>
                        <p class="pad_bot1"><strong class="color3">{{ $item->title }}</strong></p>
                        <p>{{ $item->text }}</p>
                        <ul class="list2">
                            <li><span>{{ $item->room }}</span>Xonalar</li>
                            <li><span>{{ $item->bed }}</span>Yotoqlar</li>
                        </ul>
                        <a href="#" class="button2">Band qilish</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
