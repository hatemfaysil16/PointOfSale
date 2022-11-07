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
                    
                }
            }
        });
    } 
}
// END GET CITY


   function act(element){
       if($(element). prop('checked'))  
       {
        $('#customerName').attr("disabled", "");
        $('#companyName').attr("disabled", "");
        $('#streetAddress').attr("disabled", "");
        $('#city').attr("disabled", "");
        $('#state').attr("disabled", "");
        $('#phone').attr("disabled", "");
        $('#zipCode').attr("disabled", "");
        console.log('You have Checked it');
       }else
       {
        $('#customerName').attr("disabled", false);
        $('#companyName').attr("disabled", false);
        $('#streetAddress').attr("disabled", false);
        $('#city').attr("disabled", false);
        $('#state').attr("disabled", false);
        $('#phone').attr("disabled", false);
        $('#zipCode').attr("disabled", false);
        console.log('You Un-Checked it');
       }
   }