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
                    <p class="pad_bot2">Men Umirbayeva Shoxista sizga mehmonxonalar haqida ma'lumot beraolaman.Sizga qanday mehmonxona kerak.</p>
                </div>
{{--                <a href="#" class="button1">Read More</a>--}}
            </div>
            <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                    @foreach($carousels as $item)
                        <li><img src="{{ asset('uploads/carousels/'.$item->image) }}" alt="" style="height: 100%"></li>
                    @endforeach

{{--                    <li><img src="{{ asset('assets/images/img2.jpg') }}" alt=""></li>--}}
{{--                    <li><img src="{{ asset('assets/images/img3.jpg') }}" alt=""></li>--}}
{{--                    <li><img src="{{ asset('assets/images/img4.jpg') }}" alt=""></li>--}}
                </ul>
            </div>
        </div>
        <div class="pad">
            <div class="line1">
                <div class="wrapper line2">
                    <div class="col1">
                        <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">Best Rates</h2>
                        <p class="pad_bot1">Lounge Hotel is one of free website templates created by TemplateMonster.com
                            team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML
                            &amp; CSS valid.</p>
                        <a href="#" class="color1">Read More</a></div>
                    <div class="col1 pad_left1">
                        <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">Hotel Guide</h2>
                        <p class="pad_bot1">Lounge Hotel Template goes with 2 packages. PSD source files are available
                            for free for the registered members of Templates.com. Basic package is available for anyone
                            without registration.</p>
                        <a href="#" class="color1">Read More</a></div>
                    <div class="col1 pad_left1">
                        <h2><img src="{{ asset('assets/images/title_marker1.jpg') }}" alt="">Hotel Guide</h2>
                        <p class="pad_bot1">Lounge Hotel Template goes with 2 packages. PSD source files are available
                            for free for the registered members of Templates.com. Basic package is available for anyone
                            without registration.</p>
                        <a href="#" class="color1">Read More</a></div>
                </div>
            </div>

        </div>
    </div>
@endsection
