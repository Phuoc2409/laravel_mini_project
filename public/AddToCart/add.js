function addToCart(event) {
    event.preventDefault();
    let urlAddToCart = $(this).data("url");
    $.ajax({
        type: "GET",
        url: urlAddToCart,
        dataType: "json",
        success: function (data) {
            if (data.code === 200) {
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Sản phẩm đã được thêm vào giỏ hàng",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        },
        error: function (data) {},
    });
}
$(function () {
    $(".addToCart").on("click", addToCart);
});
