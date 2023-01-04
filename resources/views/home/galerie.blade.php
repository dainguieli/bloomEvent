@extends('base')

@section('title','GALERIE')

@section('content')
<section >
    <div id="container">
        <div id="galerie">
          <h3>Gallery</h3>
          <input type="radio" name="img" id="all" checked=checked>
          <input type="radio" name="img" id="wpp">
          <input type="radio" name="img" id="fa">
          <input type="radio" name="img" id="aw">
          <input type="radio" name="img" id="cp">
          <input type="radio" name="img" id="ss">
          <label for="all">Toutes les images</label> -
          <label for="wpp">Wallpaper</label> -
          <label for="fa">Fan Art</label> -
          <label for="aw">Artworks</label> -
          <label for="cp">Cosplay</label> -
          <label for="ss">Screenshot</label>
          <div id="thumbs">

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

           <figure tabindex="0" class="aw">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_23_skins_bundles/Morgana_Splash_4.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="cp">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_23_skins_bundles/Swain_Splash_3.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="ss">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_30_pantheon_splash/Pantheon_Splash.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="wpp">
              <div class="img_cont">
                <img src="http://competitive.euw.leagueoflegends.com/sites/default/files/upload/wallpaper/1920x1080_0.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <figure tabindex="0" class="fa">
              <div class="img_cont">
                <img src="https://riot-web-static.s3.amazonaws.com/images/news/May_2012/2012_05_25_new_skins/Amumu_Splash_7.jpg" alt="">
              </div>
              <figcaption>
                Image Name
                <span class="rune"></span>
              </figcaption>
            </figure>

            <span id="mask"></span>

          </div>
        </div>
        </div>
</section>

@endsection
