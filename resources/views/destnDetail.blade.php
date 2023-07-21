<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="60 DAYS, in Expedition">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="/css/detail2.css" media="screen">
    <link rel="stylesheet" href="/css/detail.css" media="screen">
  
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-b892"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        @if($arba)

        <p><a href="{{route('index')}}">logo</a></p>
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
 
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="carousel_8c97">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <div class="u-align-left u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-left-0 u-opacity u-opacity-40 u-palette-5-light-2 u-shape u-shape-1"></div>
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-32 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                          <h1 class="u-text u-text-1">{{$arba->name}}</h1>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-30">
                    <div class="u-layout-row">
                      <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-17-lg u-size-17-md u-size-17-sm u-size-17-xs u-size-21-xl u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                          <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                        </div>
                      </div>
                      <div class="u-container-style u-layout-cell u-size-39-xl u-size-43-lg u-size-43-md u-size-43-sm u-size-43-xs u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                          <p class="u-text u-text-3">{{$arba->description}}</p>
                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-28 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-container-  u-image u-layout-cell u-right-cell u-size-60 u-image-1">
                    <img w src="{{asset('images/'.$arba->image)}}" alt="coro" width="100%">
                    <div class="u-container-layout u-container-layout-4">
             
                    </div>
                  </div>
                </div>
             
              </div>
              <div class="mapouter"><div class="gmap_canvas">
                <iframe width="804" height="500" margin-top="30px"id="gmap_canvas" src="{{$arba->location}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://123movies-i.net">fast five 123movies</a>
                <br>
                <style>.mapouter{position:relative;text-align:right;height:500px;width:804px;}</style>
                <a href="https://www.embedgooglemap.net"></a>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:804px;}</style>

            </div>
          </div>
        </div>
      </div>
    </section>
    @elseif($nature)
    <p><a href="{{route('index')}}">logo</a></p>
  </a>
  <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
      <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">

      </a>
    </div>
    <div class="u-nav-container">
      <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>
    </div>
    <div class="u-nav-container-collapse">
      <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
        <div class="u-inner-container-layout u-sidenav-overflow">
          <div class="u-menu-close"></div>
          <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
        </div>
      </div>
      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
    </div>
  </nav>
</div></header>
<section class="u-clearfix u-section-1" id="carousel_8c97">
<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
  <div class="u-align-left u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-left-0 u-opacity u-opacity-40 u-palette-5-light-2 u-shape u-shape-1"></div>
  <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
    <div class="u-gutter-0 u-layout">
      <div class="u-layout-row">
        <div class="u-size-32 u-size-60-md">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h1 class="u-text u-text-1">{{$nature->name}}</h1>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-17-lg u-size-17-md u-size-17-sm u-size-17-xs u-size-21-xl u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-2">
                    <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-size-39-xl u-size-43-lg u-size-43-md u-size-43-sm u-size-43-xs u-layout-cell-3">
                  <div class="u-container-layout u-container-layout-3">
                    <p class="u-text u-text-3">{{$nature->description}}</p>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-size-28 u-size-60-md">
          <div class="u-layout-col">
            <div class="u-container-  u-image u-layout-cell u-right-cell u-size-60 u-image-1">
              <img w src="{{asset('images/'.$nature->image)}}" alt="coro" width="100%">
              <div class="u-container-layout u-container-layout-4">
       
              </div>
            </div>
          </div>
       
        </div>
        <div class="mapouter"><div class="gmap_canvas">
          <iframe width="804" height="500" margin-top="30px"id="gmap_canvas" src="{{$nature->location}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://123movies-i.net">fast five 123movies</a>
          <br>
          <style>.mapouter{position:relative;text-align:right;height:500px;width:804px;}</style>
          <a href="https://www.embedgooglemap.net"></a>
          <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:804px;}</style>

      </div>
    </div>
  </div>
</div>
</section>
    @else
    <p><a href="{{route('index')}}">logo</a></p>
  </a>
  <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
      <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">

      </a>
    </div>
    <div class="u-nav-container">
      <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>
    </div>
    <div class="u-nav-container-collapse">
      <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
        <div class="u-inner-container-layout u-sidenav-overflow">
          <div class="u-menu-close"></div>
          <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
        </div>
      </div>
      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
    </div>
  </nav>
</div></header>
<section class="u-clearfix u-section-1" id="carousel_8c97">
<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
  <div class="u-align-left u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-left-0 u-opacity u-opacity-40 u-palette-5-light-2 u-shape u-shape-1"></div>
  <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-spacing-vertical u-layout-wrap u-layout-wrap-1">
    <div class="u-gutter-0 u-layout">
      <div class="u-layout-row">
        <div class="u-size-32 u-size-60-md">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h1 class="u-text u-text-1">{{$relign->name}}</h1>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-left-cell u-size-17-lg u-size-17-md u-size-17-sm u-size-17-xs u-size-21-xl u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-2">
                    <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-size-39-xl u-size-43-lg u-size-43-md u-size-43-sm u-size-43-xs u-layout-cell-3">
                  <div class="u-container-layout u-container-layout-3">
                    <p class="u-text u-text-3">{{$relign->description}}</p>
                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-size-28 u-size-60-md">
          <div class="u-layout-col">
            <div class="u-container-  u-image u-layout-cell u-right-cell u-size-60 u-image-1">
              <img w src="{{asset('images/'.$relign->image)}}" alt="coro" width="100%">
              <div class="u-container-layout u-container-layout-4">
       
              </div>
            </div>
          </div>
       
        </div>
        <div class="mapouter"><div class="gmap_canvas">
          <iframe width="804" height="500" margin-top="30px"id="gmap_canvas" src="{{$relign->location}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://123movies-i.net">fast five 123movies</a>
          <br>
          <style>.mapouter{position:relative;text-align:right;height:500px;width:804px;}</style>
          <a href="https://www.embedgooglemap.net"></a>
          <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:804px;}</style>

      </div>
    </div>
  </div>
</div>
</section>
    @endif
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7ea0"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Visit Gamo u will like it</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Visit Gamo</span>
      </a>
      <p class="u-text">
        <span>Visit Gamo</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Copy write Team Hope</span>
      </a>. 
    </section>
  
</body></html>