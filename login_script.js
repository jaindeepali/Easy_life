$(document).ready(function(){
	console.log("working");
	$("#login").show();
	$("#logup").hide();
	$("#btn2").click(function(){
		$("#logup").show();
		$("#login").hide();
	});
	$("#btn3").click(function(){
		if($("#pwd").val()!=$("#pwd1").val())
			alert("Passwords do not match!");
		else if($("#pwd").val()=="")
			alert("Please enter password.");
		else if($("#uname").val()=="")
			alert("Please enter username.");
		else{
			
			$.ajax({
			  type: "POST",
			  url: "login_code.php",
			  data: {uname:$("#uname").val(),
			         pwd:$("#pwd").val(),
			     	 bool:"yes"},
			  datatype: "html",
			  success: function(response){
			  	$("#logup").hide();
			  	alert("You have been successfully registered. You can now SignIn with your Username and Password");
			  	$("#login").show();
			  	$("#uname").val("");
			  	$("#pwd").val("");
			  	$("#pwd1").val("");
			  	console.log(response);
			  },
			  error: function(){
			    console.log("error");
			  }
			});
		}
	});
	$("#btn4").click(function(){
		$("#logup").hide();
		$("#login").show();
		$("#uname").val("");
		$("#pwd").val("");
		$("#pwd1").val("");
	});
});