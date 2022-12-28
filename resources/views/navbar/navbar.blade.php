<nav>

        <ul class="liste-nav">
   <li className="item-nav">
                    <a href='#'><img src="image/logoBloomEvemt.jpg" alt="logo-bloom " class="logo-bloom " />
                    </a>
                </li>
            <li class="item-nav">
                <a class="nav-link @if (Request::route()->getName()== 'home') active @endif" aria-current="page" href="{{ route('home') }}">ACCUEIL</a>
              </li>
              <li class="item-nav">
                <a class="nav-link @if (Request::route()->getName()== 'about') active @endif" aria-current="page" href="{{route('about')}}">À PROPOS</a>
              </li>

                <li class="item-nav">
                  <a class="nav-link @if (Request::route()->getName()== 'realisation') active @endif" aria-current="page" href="{{route('realisation')}}">REALISATION</a>
                </li>
                <li class="item-nav">
                  <a class="nav-link @if (Request::route()->getName()== 'actualite') active @endif"  href="{{route('actualite')}}">ACTUALITÉ</a>
                </li>
                <li class="item-nav">
                  <a class="nav-link @if (Request::route()->getName()== 'galerie') active @endif"  href="{{route('galerie')}}">GALERIE</a>
                </li>
                <li class="item-nav">
                  <a class="nav-link @if (Request::route()->getName()== 'contact') active @endif"  href="{{route('contact')}}">CONTACT</a>
                </li>

        </ul>
        <img src="image/menu.svg" alt="logo menu" class="logo-menu">
    </nav>
