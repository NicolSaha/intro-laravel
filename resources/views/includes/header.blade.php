<nav class="navbar navbar-main navbar-expand-lg navbar-light navbar-transparent headroom">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/img/cocktail.svg" width="25%"/>COCKTAIL BAR</a>
        <div id="navbar-default">
            <ul class="navbar-nav ml-lg-auto flex-row">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <span class="{{ Request::path() === '/' ? 'text-white font-weight-bold' : 'text-light' }}">Home</span>
                    </a>
                </li>
                <li class="nav-item ml-4">
                    <a class="nav-link" href="/reviews">
                        <span class="{{ Request::path() === 'reviews' ? 'text-white font-weight-bold' : 'text-light' }}">Reviews</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="section section-hero section-shaped">
    <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
    </div>
    <br/>
    <br/>
    <div class="col-6 text-center mx-auto -mb-10">
        <p class="h1 text-white">Hi there ... 👋</p>
        <p class="lead text-white">Thank you for visiting our page!</p>
    </div>

    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
