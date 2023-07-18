$(function () {
    $(".purchase").on("click", function (event) {
        event.preventDefault();
        Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Thanh toán thành công",
            showConfirmButton: false,
            timer: 1500,
        });
    });
});
