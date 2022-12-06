//START GET CITY
$("#clients_id").on("change", function () {
    var clients_id = $("#clients_id").val();
    getClient(clients_id);
    $('input[name="additionalDiscount"]').on("keyup", function () {
        var subtotal =
            +$('input[name="subtotal"]').val() -
            +$('input[name="additionalDiscount"]').val() +
            +$('input[name="tax"]').val();
        $('input[name="total"]').val(
            subtotal - +$('input[name="customerbalance"]').val()
        );
        $("#totals").val(subtotal - +$('input[name="customerbalance"]').val());
    });

    $('input[name="tax"]').on("keyup", function () {
        var subtotal =
            +$('input[name="subtotal"]').val() -
            +$('input[name="additionalDiscount"]').val() +
            +$('input[name="tax"]').val();
        $('input[name="total"]').val(
            subtotal - +$('input[name="customerbalance"]').val()
        );
        $("#totals").val(subtotal - +$('input[name="customerbalance"]').val());
    });

    $('input[name="paid"]').on("keyup", function () {
        $('input[name="Left"]').val(
            +$('input[name="paid"]').val() - +$('input[name="total"]').val()
        );
        $("#Left").val(
            +$('input[name="paid"]').val() - +$('input[name="total"]').val()
        );
    });
});

function getClient(clients_id) {
    if (clients_id) {
        $.ajax({
            url: $("#url").val() + "invoices/ajaxClient/" + clients_id,
            type: "GET",
            data: {
                _token: "{{ csrf_token() }}",
                clients_id: clients_id,
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                if (data.payment) {
                    console.log(data.payment);
                    $("#customerBalance").val(
                        data.payment.total_balance == null
                            ? 0
                            : data.payment.total_balance
                    );
                    $("#customerBalances").val(
                        data.payment.total_balance == null
                            ? 0
                            : data.payment.total_balance
                    );
                }
                if (data.client) {
                    $("#customerName").val(data.client.name);
                    $("#companyName").val(data.client.companyName);
                    $("#streetAddress").val(data.client.street);
                    $("#state").val(data.client.CompanyState);
                    $("#city").val(data.client.companyCity);
                    $("#phone").val(data.client.phone);
                    $("#zipCode").val(data.client.PostalCode);
                    function act(element) {
                        if ($(element).prop("checked")) {
                            console.log("hello");
                        } else {
                            console.log("no");
                        }
                    }
                }
            },
        });
    }
}

function act(element) {
    var clients_id = $("#clients_id").val();
    if (clients_id) {
        $.ajax({
            url: $("#url").val() + "invoices/ajaxClient/" + clients_id,
            type: "GET",
            data: {
                _token: "{{ csrf_token() }}",
                clients_id: clients_id,
            },
            dataType: "json",
            success: function (data) {
                if ($(element).prop("checked")) {
                    if (data.client) {
                        $("#customerName2").val(data.client.name);
                        $("#companyName2").val(data.client.companyName);
                        $("#streetAddress2").val(data.client.street);
                        $("#state2").val(data.client.CompanyState);
                        $("#city2").val(data.client.companyCity);
                        $("#phone2").val(data.client.phone);
                        $("#zipCode2").val(data.client.PostalCode);
                    }
                } else {
                    if (data.client) {
                        $("#customerName2").val("");
                        $("#companyName2").val("");
                        $("#streetAddress2").val("");
                        $("#state2").val("");
                        $("#city2").val("");
                        $("#phone2").val("");
                        $("#zipCode2").val("");
                    }
                }
            },
        });
    }
}
// END GET CITY
