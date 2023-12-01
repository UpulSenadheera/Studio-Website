function getListValue() {
   var selectedOption, st;
   selectedOption = document.getElementById("servicename").selectedIndex;
   st=document.getElementById("servicename").options[selectedOption].value
   //alert(st);
   document.getElementById("ServicePrice").value=st;
   }
   
    $(function(){
                $('#ServicePrice, #pax').keyup(function(){
                   var ServicePrice = parseFloat($('#ServicePrice').val()) || 0;
                   var pax = parseFloat($('#pax').val()) || 0;
                   $('#sum').val(ServicePrice * pax);
                });
             });