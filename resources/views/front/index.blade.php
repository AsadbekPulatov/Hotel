@extends("front.master")
@section("content")
    <div class="box1">
        <div class="wrapper">
            <div id="form1" style="height: 354px;">
                <h2>Menejer</h2>
                <div class="wrapper">
                    <figure class="left marg_right1">
                        <img src="{{ asset('assets/images/Shoxista.jpg') }}" alt="" style="width: 70%;">
                    </figure>
                    <p class="pad_bot1"><strong class="color2">01.05.2020</strong></p>
                    <p class="pad_bot2">Men Umirbayeva Shoxista sizga mehmonxonalar haqida ma'lumot beraolaman.Sizga
                        qanday mehmonxona kerak.</p>
                </div>
                {{--                <a href="#" class="button1">Read More</a>--}}
            </div>
            <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                    @foreach($carousels as $item)
                        <li><img src="{{ asset('uploads/carousels/'.$item->image) }}" alt="" style="height: 100%"></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="wrapper">
            <div class="pad">
                @foreach($abouts as $item)
                    <div class="col1 pad">
                        <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">{{ $item->title }}</h2>
                        <p class="pad_bot1">{{ $item->text }}</p>
{{--                        <a href="#" class="color1">Read More</a>--}}
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
