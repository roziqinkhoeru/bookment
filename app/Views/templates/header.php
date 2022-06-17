<!-- navbar section -->
<div class="nav__section position-sticky">
    <nav class="navbar navbar-expand-lg navbar-light navbar__expand">
        <a class="navbar-brand" href="/">
            <img src="/assets/img/bokorama-logo.png" class="brand__logo" alt="bookorama-logo">
        </a> <!-- end logo navbar -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> <!-- end button collapse -->

        <div class="collapse navbar-collapse nav__bar" id="navbarNav">
            <ul class="navbar-nav">
                <li
                    class="nav-item nav__item <?php if ($tab == "home") : echo "active";endif; ?>">
                    <a class="nav-link nav__link" href="/">Home</a>
                </li>
                <li
                    class="nav-item nav__item <?php if ($tab == "book") : echo "active";endif; ?>">
                    <a class="nav-link nav__link" href="/book">Books</a>
                </li>
                <li
                    class="nav-item nav__item <?php if ($tab == "customer") : echo "active";endif; ?>">
                    <a class="nav-link nav__link" href="/customer">Customer</a>
                </li>
                <li
                    class="nav-item nav__item <?php if ($tab == "cart") : echo "active";endif; ?>">
                    <a class="nav-link nav__link" href="/cart">Cart</a>
                </li>
            </ul>

            <div class="navbar-nav nav__item btn__sec">
                <a href="/Book/login" class="nav-link nav__link btn__login">Log in</a>
            </div>
        </div> <!-- end collapse navbar -->
    </nav> <!-- end navbar -->
</div> <!-- end nav section -->