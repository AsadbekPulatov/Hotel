<nav>
    <ul id="menu">
        <li class="@if(request()->routeIs('index')) active @endif"><a href="{{ route("index") }}">Biz haqimizda</a></li>
        <li class="@if(request()->routeIs('service')) active @endif"><a href="{{ route("service") }}">Xizmatlar</a></li>
        <li class="@if(request()->routeIs('booking')) active @endif"><a href="{{ route("booking") }}">Band qilish</a></li>
        <li class="@if(request()->routeIs('locations')) active @endif"><a href="{{ route("locations") }}">Bog'lanish</a></li>
    </ul>
</nav>
