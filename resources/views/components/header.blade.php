<header class="d-flex justify-content-between flex-nowrap align-items-center">
    <div class="logo">
        <a href="{{ route('home') }}"><i class="fas fa-quote-left"></i> • BBlog</a>   
    </div>
    <div class="navigation flex-grow-1 d-flex  justify-content-center">
        <nav class="nav d-flex justify-content-between align-items-center">
            <a class="" href="{{ route('page.admin') }}">admin</a>
            <a class="" href="{{ route('page.user') }}">user</a>
        </nav>
    </div>
    <div class="log">
        <button type="button" class="btn btn-secondary" id="login">LOGIN</button>
        <button type="button" class="btn btn-secondary" id="signup">SIGNUP</button>
    </div>
    
</header>
