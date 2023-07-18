<div class="category-tab">
    <!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach ($categories as $indexCategory => $categoryItem)
                <li class="{{ $indexCategory == 0 ? 'active' : '' }}">
                    <a href="#category_tab_{{ $categoryItem->id }}" data-toggle="tab">{{ $categoryItem->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="tab-content">
        @foreach ($categories as $indexCategoryProduct => $categoryProductItem)
            <div class=" tab-pane fade {{ $indexCategoryProduct == 0 ? 'active in' : '' }}"
                id="category_tab_{{ $categoryProductItem->id }}">
                <div class="category_tabs"style="width:100%;height:100vh;overflow:auto">
                    @if ($categoryProductItem->categoryChildren->count())
                        @foreach ($categoryProductItem->categoryChildren as $categoryChildProduct)
                            @foreach ($categoryChildProduct->products as $productItemTab)
                                <h1>{{ $productItemTab->categoryParent }}</h1>

                                <div class="col-sm-3">
                                    <div class=" product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{ config('app.base_url') . $productItemTab->feature_image_path }}"
                                                    alt="" />
                                                <h2>{{ number_format($productItemTab->price) }} VND</h2>
                                                <p>{{ $productItemTab->name }}</p>
                                                @auth
                                                    <a href="#"
                                                        data-url="{{ route('addToCart', ['id' => $productItemTab->id]) }}"
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
                                    {{-- <div class="text-center"> {{ $products->links() }}</div> --}}
                                </div>
                            @endforeach
                        @endforeach
                    @else
                        @foreach ($categoryProductItem->products as $productItemTab)
                            <h1>{{ $productItemTab->categoryParent }}</h1>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ config('app.base_url') . $productItemTab->feature_image_path }}"
                                                alt="" />
                                            <h2>{{ number_format($productItemTab->price) }} VND</h2>
                                            <p>{{ $productItemTab->name }}</p>
                                            <a data-url="{{ route('addToCart', ['id' => $productItemTab->id]) }}"
                                                class="btn btn-default add-to-cart">
                                                <i class="fa fa-shopping-cart"></i>Add
                                                to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach



    </div>
</div>
