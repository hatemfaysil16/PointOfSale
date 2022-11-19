
    // $('#additionalDiscount').on('click', function () {
            // var subtotal = $('#subtotalNew').val();
            // var additionalDiscount = $('#additionalDiscountNew').val();
            // var tax = $('#tax').val();
            // var totalpacks = $('#totalpacks').val(   (subtotal - additionalDiscount )  + tax   );
            // console.log(totalpacks);
    // });

//START GET CITY
$('#clients_id').on('change', function () {
    var clients_id = $('#clients_id').val();
    getClient(clients_id);
});

function getClient(clients_id) {
    if (clients_id) {
        $.ajax({
            url: $('#url').val()+'invoices/ajaxClient/'+clients_id,
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}",
                clients_id: clients_id,
            },
            dataType: "json",
            success: function (data) {
                if (data) {
                    $('#customerName').val(data.name);
                    $('#companyName').val(data.companyName);
                    $('#streetAddress').val(data.street);
                    $('#state').val(data.CompanyState);
                    $('#city').val(data.companyCity);
                    $('#phone').val(data.phone);
                    $('#zipCode').val(data.PostalCode);
                    function act(element){
                        if($(element).prop('checked')){
                            console.log('hello');
                        }else{
                            console.log('no');
                        }
                    }
                }
            }
        });
    } 
}

function act(element) {
    var clients_id = $('#clients_id').val();
    if (clients_id) {
        $.ajax({
            url: $('#url').val()+'invoices/ajaxClient/'+clients_id,
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}",
                clients_id: clients_id,
            },
            dataType: "json",
            success: function (data) {
                        if($(element).prop('checked')){
                            console.log('yes');
                                if (data) {
                                    $('#customerName2').val(data.name);
                                    $('#companyName2').val(data.companyName);
                                    $('#streetAddress2').val(data.street);
                                    $('#state2').val(data.CompanyState);
                                    $('#city2').val(data.companyCity);
                                    $('#phone2').val(data.phone);
                                    $('#zipCode2').val(data.PostalCode);
                                }
                        }else{
                                if (data) {
                                    $('#customerName2').val('');
                                    $('#companyName2').val('');
                                    $('#streetAddress2').val('');
                                    $('#state2').val('');
                                    $('#city2').val('');
                                    $('#phone2').val('');
                                    $('#zipCode2').val('');
                                }
                        }
            }
        });
    } 
}
// END GET CITY