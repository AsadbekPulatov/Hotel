@extends("front.master")
@section("content")
    <div class="box1">
        <div class="wrapper">
            {{--            @include("front.form")--}}
            <div class="pad">
                <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">Xizmatlar</h2>
                @foreach($services as $item)
                    <div class="wrapper pad_bot2">
                        <figure class="left marg_right1"><img src="{{ asset('uploads/services/'.$item->image) }}" alt="" style="width: 200px; height: 150px;">
                        </figure>
                        <p class="pad_bot1"><strong class="color3">{{ $item->title }}</strong><br>
                            {{ \Illuminate\Support\Str::limit($item->text) }}
                        </p>
                        <a href="#" class="color1">Read More</a></div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
