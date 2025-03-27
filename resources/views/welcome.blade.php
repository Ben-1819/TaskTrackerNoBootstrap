<x-guest-layout>
    <div class="titleBox">
        <h1 class="title">Task Tracker</h1>
    </div>
    <div class="welcomeButtons">
        <a href="{{route("login")}}">
            <button class="moveButton">Login</button>
        </a>
        <a href="{{route("register")}}">
            <button class="moveButton">Register</button>
        </a>
    </div>
</x-guest-layout>
