$(document).ready(function() {
	


	$("#jumbo3").hide();
	// $("#jumbo2").hide();

	$("#dbcreation").click(function() {
			$.ajax({
				method: 'POST',
				url: "mainscript.php",
				success: function success() {
					location.reload();
//					alert('success');
				},
				error: function error() {
					alert('failure');
				}
			})
	});
	
	$("#calcSubmit").click(function() {
	});
	
	$("#shipagain").click(function() {
		$("#jumbo3").hide();
		$("#jumbo2").show();
	});

	$('#calcForm').validate( {
		submitHandler: function() {
			var form = $(this.currentForm);
			$.ajax({
				url:"calcSubmit.php",
				method: "POST",
				data: { 
					zipVal: form.find("#zipVal").val(),
					weightVal: form.find("#weightVal").val()
				},
				success: function(data){
					$("#costresult").html(data);
					$("#jumbo2").hide();
					$("#jumbo3").show();
				}
			});
		return false; //required to block normal submit since i've used ajax
		}
	});
});
