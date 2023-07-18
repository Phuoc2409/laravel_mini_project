 <div class="container">
     <div class="cart col-sm-12" data-url="{{ route('deleteCart') }}">
         <div class="row">
             <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                 <thead>
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Hình ảnh</th>
                         <th scope="col">Tên</th>
                         <th scope="col">Giá</th>
                         <th scope="col">Số lượng</th>
                         <th scope="col">Tổng tiền</th>
                         <th scope="col">Hành động</th>
                     </tr>
                 </thead>
                 <tbody>
                     @php
                         $total = 0;
                     @endphp
                     @if (!empty($carts))
                         @foreach ($carts as $id => $cartItem)
                             @php
                                 $total += intval($cartItem['price']) * $cartItem['quantity'];
                                 $emptyCart = '';
                             @endphp
                             <tr>
                                 <th scope="row" class="counterCell"></th>
                                 <td><img class="img_150_100" src="{{ $cartItem['image'] }}" alt=""></td>
                                 <td>{{ $cartItem['name'] }}</td>
                                 <td>{{ number_format($cartItem['price']) }} VND</td>
                                 <td>
                                     <input class="quantity" type="number" value="{{ $cartItem['quantity'] }}"
                                         min="1">
                                 </td>
                                 <td>{{ number_format(intval($cartItem['price']) * $cartItem['quantity']) }} VND
                                 </td>
                                 <td>
                                     <a data-id="{{ $id }}" class="btn btn-info cart_update">Cập nhật</a>
                                     <a data-id="{{ $id }}" class=" btn btn-danger cart_delete_btn">Xóa</a>
                                 </td>

                             </tr>
                         @endforeach
                     @else
                         @php
                             $emptyCart = 'Chưa có gì trong giỏ hàng';
                         @endphp
                     @endif

                 </tbody>
             </table>
             <hr style="height:2px;border-width:0;color:gray;background-color:rgb(255, 255, 255)">
             <div class="col-sm-12 d-flex flex-column justify-content-between">
                 <div class="col-sm-6">{{ $emptyCart }}<br>
                     <div class="d-flex justify-content-between flex-column">
                         <i class="fa fa-shopping-cart"></i>
                         <a href="{{ route('home') }}" style="color:white">Continue Shopping</a>
                     </div>
                 </div>
                 <div class="col-sm-6 text-right">
                     <h2>Total: {{ number_format($total) }}</h2>
                 </div>
             </div>
             @if (!empty($carts))
                 <form action="{{ route('purchase') }}" method="POST">
                     @csrf
                     <hr style="height:2px;border-width:0;color:gray;background-color:rgb(255, 255, 255)">
                     <div class="col-sm-12 text-right">
                         <button type="submit"class="btn btn-success purchase">
                             Thanh toán
                         </button>
                     </div>
                 </form>
             @endif
         </div>
     </div>
 </div>
