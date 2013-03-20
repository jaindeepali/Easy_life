$(document).ready(function(){
  
	  $("#cat1cont").siblings().hide();
		$("#cat1cont").show();
    allow_done();
		$("#cat1").click(function(){
      allow_done();
			$("#cat1cont").siblings().hide();
			$("#cat1cont").show();
      allow_done();
			});
		$("#cat2").click(function(){
      allow_done();
			$("#cat2cont").siblings().hide();
			$("#cat2cont").show();
      allow_done();
			});
		$("#cat3").click(function(){
      allow_done();
			$("#cat3cont").siblings().hide();
			$("#cat3cont").show();
      allow_done();
			});
		$("#cat4").click(function(){
      allow_done();
			$("#cat4cont").siblings().hide();
			$("#cat4cont").show();
      allow_done();
			});
    function allow_done(){
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
      if($(this).parent().hasClass("strike"))
      {
      var parent=$(this).parent();
      var text=$(this).parent().text();
      console.log(text);
      text = text.split('Delete')[0];
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {do_delete:text},
        datatype: "html",
        success: function(){
          parent.remove();
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
    }
    else
    {
      alert("You have not completed this task yet! Click on 'done' before deleting it.");
    }
    });
$('.read_button').click(function(){
      //allow_done();
      if($(this).parent().hasClass("strike"))
      {
      var parent=$(this).parent();
      var text=$(this).parent().text();
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {read_delete:text},
        datatype: "html",
        success: function(){
                  parent.remove();
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
    }
    else
    {
      alert("You have not completed this task yet! Click on 'done' before deleting it.");
    }
    //allow_done();
    });
$('.watch_button').click(function(){
      //allow_done();
      //e.preventDefault();
      if($(this).parent().hasClass("strike"))
      {
      var parent=$(this).parent();
      var text=$(this).parent().text();
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {watch_delete:text},
        datatype: "html",
        success: function(){
            parent.remove();
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
      }
      else
      {
        alert("You have not completed this task yet! Click on 'done' before deleting it.");
      }
      //allow_done();
    });
$('.visit_button').click(function(){
      //allow_done();
      //e.preventDefault();
      if($(this).parent().hasClass("strike"))
      {
      var parent=$(this).parent();
      var text=$(this).parent().text();
      text = text.split('Delete')[0];
      $(this).attr('value',text);
      console.log(text);
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {visit_delete:text},
        datatype: "html",
        success: function(){
            parent.remove();
          //alert(response);
        },
        error: function(){
          console.log("error");
        }
      });
      }
      else
      {
        alert("You have not completed this task yet! Click on 'done' before deleting it.");
      }
      //allow_done();
    });
  }

});