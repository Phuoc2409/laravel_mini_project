  <header id="header">
      <!--header-top-->
      @include('components.header.header-top')
      <!--header-top-->


      <div class="header-bottom">
          <!--header-bottom-->
          <div class="container">
              <div class="row">
                  <div class="col-sm-9">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse"
                              data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>

                      {{-- main menu --}}
                      @include('components.main_menu')
                      {{-- main menu --}}
                  </div>

                  {{-- searchbox --}}
                  @include('components.searchbox')
                  {{-- searchbox --}}
              </div>
          </div>
      </div>
      <!--/header-bottom-->
  </header>
