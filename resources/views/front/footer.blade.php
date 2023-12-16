<div class="main">
    <!-- footer -->
    <footer>
        <div class="col2">Ma'lumot olish &copy; <a href="{{ route("index") }}">Domain Name</a> Barcha huquqlar himoyalangan | Dizayn tomonidan <a target="_blank" href="http://www.templatemonster.com/">shoxista4050@gmail.com</a>
            <nav>
                <ul id="footer_menu">
                    <li class="@if(request()->routeIs('index')) active @endif"><a href="{{ route("index") }}">Biz haqimizda</a></li>
                    <li class="@if(request()->routeIs('services')) active @endif"><a href="{{ route("services") }}">Xizmatlar</a></li>
                    <li class="@if(request()->routeIs('booking')) active @endif"><a href="{{ route("booking") }}">Band qilish</a></li>
                    <li class="@if(request()->routeIs('locations')) active @endif last"><a href="{{ route("locations") }}">Bog'lanish</a></li>
                </ul>
            </nav>
        </div>
        <div class="col1 pad_left1">
            <ul id="icons">
                <li><a href="#" class="normaltip"><img src="{{ asset('assets/images/icon1.jpg') }}" alt=""></a></li>
                <li><a href="#" class="normaltip"><img src="{{ asset('assets/images/icon2.jpg') }}" alt=""></a></li>
                <li><a href="#" class="normaltip"><img src="{{ asset('assets/images/icon3.jpg') }}" alt=""></a></li>
                <li><a href="#" class="normaltip"><img src="{{ asset('assets/images/icon4.jpg') }}" alt=""></a></li>
            </ul>
        </div>
        <!-- {%FOOTER_LINK} -->
    </footer>
    <!-- footer end -->
</div>
