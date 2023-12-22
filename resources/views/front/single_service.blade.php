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
@endsection
