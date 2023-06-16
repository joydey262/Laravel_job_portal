$(document).ready(function(){

	$("#current_password").keyup(function(){
		var current_password = $("#current_password").val();
		if (current_password > 0) {
			$.ajax({ 
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type:'post',
				url:'/admin/check-admin-password',
				data:{current_password:current_password},
				success:function(resp){
					if(resp=="false"){
						$("#check_password").html("<font color='red'>Password is Incorrect!</font>");
					}else if(resp="true"){
						$("#check_password").html("<font color='green'>Password is Correct!</font>");
					}
				},error:function(){
					alert('Error');
				}
			});			
		}else{
			$("#check_password").html(" ");
		}

	});	

	$("#new_password").keyup(function(){
		var c = $("#confirm_password").val();
		var n = $("#new_password").val();
		if(n <= 0){
			if (c <= 0){
				$("#match_password").html(" ");
			}
			else{
				$("#match_password").html("<font color='red'>Please enter a new password!</font>");
			}			
		}
		else{
			if (c <= 0){
				$("#match_password").html(" ");
			}
			else{
				if( c!= n){
					$("#match_password").html("<font color='red'>Password doesn't Match!</font>");	
				}
				else{
					$("#match_password").html("<font color='green'>Passwords Match!</font>");	
				}
			}
		}
	});

	$("#confirm_password").keyup(function(){
		var c = $("#confirm_password").val();
		var n = $("#new_password").val();

		if(c <= 0){
			if(n = 0){
				$("#match_password").html("<font color='red'>Please enter a new password!</font>");	
			}
			else{
				$("#match_password").html(" ");
			}
		}
		else{
			if(n > 0){
				if(c != n){
					$("#match_password").html("<font color='red'>Password doesn't Match!</font>");
				}
				else{
					$("#match_password").html("<font color='green'>Passwords Match!</font>");
				}
			}
			else{
				$("#match_password").html("<font color='red'>Please enter a new password!</font>");
			}
		}			
	}); 

});