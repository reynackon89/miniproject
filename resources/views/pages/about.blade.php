@include('includes.head')
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            About me
        </div>

        <h4>What would you like to know about Reyn? Well, I work full time supporting and provisioning
        AWS infrastructure such as servers, security groups and other AWS services. I am taking three courses.</h4>
        <h4>I graduate in May and look forward to apply what I learned to advance my career in IT.</h4>
    </div>
</div>
</body>
