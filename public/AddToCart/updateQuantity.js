function cartUpdate(event) {
    event.preventDefault();
    let urlUpdateCart = $(".update_cart_url").data("url");
    let id = $(this).data("id");
    let quantity = $(this).parents("tr").find("input.quantity").val();
    $.ajax({
        type: "GET",
        url: urlUpdateCart,
        data: {
            id: id,
            quantity: quantity,
        },
        success: function (data) {
            if (data.code === 200) {
                $(".cart-wrapper").html(data.cart_show);
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Cập nhật số lượng thành công",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        },
        error: function () {},
    });
}
function cartDelete(event) {
    event.preventDefault();
    let id = $(this).data("id");
    let urlDelete = $(".cart").data("url");
    $.ajax({
        type: "GET",
        url: urlDelete,
        data: {
            id: id,
        },
        success: function (data) {
            if (data.code === 200) {
                $(".cart-wrapper").html(data.cart_show);
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "Đã xóa sản phẩm trong giỏ hàng",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        },
        error: function () {},
    });
}
$(function () {
    $(document).on("click", ".cart_update", cartUpdate);
    $(document).on("click", ".cart_delete_btn", cartDelete);
});
