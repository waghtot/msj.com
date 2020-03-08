$(document).ready(function(){

    var ms = new Date().getTime() + 86400000;
    var dayup = new Date(ms);
    $('#from_date').attr("min", dayup.toISOString().slice(0,10));

    $('#u_send').on('click', function(){
        var dataen = {
            "email": $('#u_email').val(),
            "phone": $('#u_phone').val(),
            "enquiry": $('#u_query').val(),
        }
        $.ajax({
            type: "POST",
            url: "home/enquiry",
            data: dataen
        }).done(function(res){
            var respo = JSON.parse(res);
            console.log(respo);
        });
    });
});