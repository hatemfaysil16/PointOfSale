//START GET CITY
$("#products_id").on("change", function () {
    var products_id = $("#products_id").val();
    getInvoices(products_id);
});
$("#productBarcode").on("change", function () {
    var productBarcode_id = $("#productBarcode").val();
    getInvoices(productBarcode_id);
});

function getInvoices(products_id) {
    if (products_id) {
        $.ajax({
            url: $("#url").val() + "invoices/ajaxProducts/" + products_id,
            type: "GET",
            data: {
                _token: "{{ csrf_token() }}",
                products_id: products_id,
            },
            dataType: "json",
            success: function (data) {
                if (data) {
                    console.log(data);
                    $("#unitPrice").val(data.BoxPrice_shop / data.PacksPerBox);
                    $("#packPrice").val(data.BoxPrice_shop);
                }
            },
        });
    }
}
// END GET CITY
