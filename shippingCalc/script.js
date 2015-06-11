$(document).ready(function() {
	
	$("#jumbo2").hide();
	$("#jumbo3").hide();
	
	$("#dbcreation").click(function() {
		$("#jumbo1").hide();
		$("#jumbo2").show();
	});
	
	$("#calcSubmit").click(function() {
		$("#jumbo2").hide();
		$("#jumbo3").show();
		
		
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
				}
			});
		return false; //required to block normal submit since i've used ajax
		}
	});

	$('#dbcreation').validate({
		submitHandler: function (form) {
			$.ajax({
				type: 'POST',
				url: "mainscript.php",
				success:success
			})
			.done(function (response) {
				if (response.success == 'success')
				{
					alert('success');
				}
				else
				{
					alert('fail');
				}
			});
		return false; //required to block normal submit since i've used ajax
		}
	});
});
