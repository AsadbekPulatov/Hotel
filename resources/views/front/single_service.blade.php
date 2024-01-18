@extends("front.master")
@section("content")
    <div class="box1">
        <div class="wrapper">
            {{--            @include("front.form")--}}
            <div class="pad">
                <div class="wrapper pad_bot2">
                    <img src="{{ asset('uploads/services/'.$service->image) }}" alt="" style="width: 100%;">
                    <p class="pad_bot1" style="text-align: justify; margin-top: 20px"><strong
                            class="color3">{{ $service->title }}</strong><br>
                        {{ $service->text }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="box1">
        <div class="wrapper">
            {{--            @include("front.form")--}}
            <div class="pad">
                <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">XONALAR</h2>
                @foreach($rooms as $item)
                    <div class="col1 pad">
                        <figure class="pad_bot3"><img src="{{ asset('uploads/rooms/'.$item->image) }}"
                                                      alt=""
                                                      style="width: 70%; height: 100px;">
                        </figure>
                        <p class="pad_bot1"><strong class="color3">{{ $item->title }}</strong></p>
                        <p>{{ $item->text }}</p>
                        <ul class="list2">
                            <li><span>{{ $item->room }}</span>Xonalar</li>
                            <li><span>{{ $item->bed }}</span>To'shaklar</li>
                            <li><span>{{ number_format($item->price, 0, ',', ' ') }} so'm</span>Narxi</li>
                        </ul>
                        <a href="#" class="button2">Band qilish</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
