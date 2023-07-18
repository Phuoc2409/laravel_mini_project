  <div style="margin-top:2rem"class=" recommended_items">
      <!--recommended_items-->
      <h2 class="title text-center">recommended items</h2>

      <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="width:100%;height:500px;overflow:hidden">
              @foreach ($productsRecommend as $keyRecommend => $productRecommendItem)
                  @if ($keyRecommend % 3 == 0)
                      <div class="item {{ $keyRecommend == 0 ? 'active' : '' }}">
                  @endif
                  <div class="col-sm-4">
                      <div class="product-image-wrapper">
                          <div class="single-products">
                              <div class="productinfo text-center">
                                  <img src="{{ config('app.base_url') . $productRecommendItem->feature_image_path }}"
                                      alt="" />
                                  <h2>{{ number_format($productRecommendItem->price) }}</h2>
                                  <p>{{ $productRecommendItem->name }}</p>
                                  @auth
                                      <a href="#"
                                          data-url="{{ route('addToCart', ['id' => $productRecommendItem->id]) }}"
                                          class="btn btn-default add-to-cart addToCart">
                                          <i class="fa fa-shopping-cart"></i>
                                          Add to cart
                                      </a>
                                  @else
                                      <a href="{{ route('login') }}" class="btn btn-default add-to-cart">
                                          <i class="fa fa-shopping-cart"></i>
                                          Add to cart
                                      </a>
                                  @endauth
                              </div>
                          </div>
                      </div>
                  </div>
                  @if ($keyRecommend % 3 == 2)
          </div>
          @endif
          @endforeach
      </div>

      <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
          <i class="fa fa-angle-left"></i>
      </a>
      <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
          <i class="fa fa-angle-right"></i>
      </a>
  </div>
  </div>
