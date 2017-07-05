$(document).ready(function(){
  
 $('#productname').on('change',function(e){
   e.preventDefault();
 var option = $("#productname").val();
 //alert("option changed to : "+option);
 $.ajax({
          url: 'stockupdate.php',
          dataType: 'text',
          type: 'post',
          data: {'productname': option},
          success: function(data){
			$('#bln').empty(); 
            $('#bln').append('<input type="number" name="bln" id required="" value="'+data+'"/>');
          },
         error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('Status: '+textStatus);
            alert('Error Thrown: '+errorThrown);
           console.log(textStatus+' & '+errorThrown+' & '+XMLHttpRequest);
          } 
       });   

    });
	
});