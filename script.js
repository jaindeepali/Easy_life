$(document).ready(function(){
	$("#cat1cont").siblings().hide();
			$("#cat1cont").show();
		$("#cat1").click(function(){
			$("#cat1cont").siblings().hide();
			$("#cat1cont").show();
			});
		$("#cat2").click(function(){
			$("#cat2cont").siblings().hide();
			$("#cat2cont").show();
			});
		$("#cat3").click(function(){
			$("#cat3cont").siblings().hide();
			$("#cat3cont").show();
			});
		$("#cat4").click(function(){
			$("#cat4cont").siblings().hide();
			$("#cat4cont").show();
			});
		$(".done").click(function(){
			if($(this).parent().hasClass("strike"))
			{
				$(this).attr('value',"Done");
				$(this).parent().removeClass("strike");
			}
			else
			{
				$(this).attr('value',"Not Done");
				$(this).parent().addClass("strike");
			}
		});
$('.do_button').click(function(){
      //e.preventDefault();
      var text=$(this).parent().text();
      console.log(text);
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {do_delete:text},
        datatype: "html",
        success: function(response){
          console.log(response);
          $("#cat1cont ul").html(response);
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
    });
$('.read_button').click(function(){
      //e.preventDefault();
      var text=$(this).parent().text();
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {read_delete:text},
        datatype: "html",
        success: function(response){
          console.log(response);
          $("#cat2cont ul").html(response);
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
    });
$('.watch_button').click(function(){
      //e.preventDefault();
      var text=$(this).parent().text();
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {watch_delete:text},
        datatype: "html",
        success: function(response){
          console.log(response);
          $("#cat3cont ul").html(response);
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
    });
$('.visit_button').click(function(){
      //e.preventDefault();
      var text=$(this).parent().text();
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {visit_delete:text},
        datatype: "html",
        success: function(response){
          console.log(response);
          $("#cat4cont ul").html(response);
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
    });
});