<header class="position-relative">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger modified-nav-font">
        <div class="container-fluid" id="nav">
            <a class="navbar-brand" href="">PHP BLOG</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link custom-nav {{ ($title==="Home") ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link custom-nav {{ ($title==="About") ? 'active' : '' }}" href="/about">About</a>
                    <a class="nav-link custom-nav {{ ($title==="Blog") ? 'active' : '' }}" href="/blog">Blog</a>
                    <a class="nav-link custom-nav " href="/login">Logout</a>     
                </div>
            </div>
        </div>
    </nav>
</header> 