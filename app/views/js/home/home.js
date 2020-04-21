$(document).ready(function(){

  var tm = {

    initiate: function(){
      $('#b_date').attr('value', tm.dateplus());
      $('#b_time').attr('value', tm.timeplus());
    },

    timeplus: function(){
      var tim = new Date();
      var hour = ((tim.getHours() < 10 ? "0" : "" ) + tim.getHours());
      var minutes = ((tim.getMinutes() < 10 ? "0" : "" ) + tim.getMinutes());
      if(minutes > 30){
        minutes = '00';
        hour ++;
      }else{
        minutes = '30';
      }
      return hour + ':' + minutes;

    },

    dateplus: function(){
      var ms = new Date().getTime() + 86400000;
      var dayup = new Date(ms);
      $('#b_date').attr("value", dayup.toISOString().slice(0,10));
      $('#b_date').attr('min', dayup.toISOString().slice(0,10));
    }


  }




  var bf = {

    initiate: function(){
      $('#b_book').on('click', function(){
        var book = {
          "fullname":$('#b_name').val(),
          "email":$('#b_email').val(),
          "phone":$('#b_phone').val(),
          "day":$('#b_date').val(),
          "hour":$('#b_time').val(),
          "postcode":$('#b_post').val(),
        }

        if(bf.fvalidate(book) !== false){
          bf.sendemail(book);
        }
      });
    },

    sendemail: function(book){
      console.log(book);
      $.ajax ({
        type: "post",
        dataType: 'json',
        url: "/app/controllers/Booking.php",
        data: book
      }).done(function(res){

        console.log(res); 
        if(res.code == 200){
          bf.clearform();
          swal('Success', 'Your message has been sent successfully', 'success');
        }
      });
    },

    fvalidate: function(e){

      var validation = false;

      if(e.fullname !=''){
        validation = true;
      }else{
        return false;
      }

      if((e.email.length != 0 &&  bf.validateEmail(e.email)!==false) || (e.phone!='' && e.phone.length >= 10)){
        validation = true;
      }else{
        return false;
      }
      
      if(e.postcode.length > 0 && e.postcode.length > 3 ){
        validation = true;
      }else
      {
        return false;
      }

      return true;
    },

    validateEmail:function(e){
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(e.match(mailformat))
      {
        console.log('email validation: pass');
        return true;
      }else{
        return false;
      }
    },

    clearform: function(){
      $('#Booking')[0].reset();
    }
    
  }

  var cf = {

    initiate: function(){
      $('#u_send').on('click', function(){

        var query = {
          "uemail":$('#femail').val(),
          "uphone":$('#fphone').val(),
          "uquery":$('#fquery').val(),
        }
        
        if(cf.formvalidate() == true){
          cf.sendemail(query);
        }
      });
    },

    formvalidate: function(){
      var isValid = $('#contact').validate({
        rules:{
          email:{
            required: true,
            email: true
          },
          query:{
            required:true
          }

        }
      });
      return isValid.form();
    },

    sendemail: function(query){
      $.ajax ({
        type: "post",
        dataType: 'json',
        url: "/app/controllers/Contact.php",
        data: query
      }).done(function(res){
        if(res.code == 200){
          cf.clearform();
          swal('Success', 'Your message has been sent successfully', 'success');
        }
      });
    },

    clearform: function(){
      $('#contact')[0].reset();
    }

  }

  var init = function ()
  {
    tm.initiate();
    bf.initiate();
    cf.initiate();
  }

   init();

});