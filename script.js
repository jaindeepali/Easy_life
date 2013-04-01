$(document).ready(function(){
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
      var gparent=$(this).parent().parent().parent();
      var item=$(this).prev().prev();
      var id=item.attr('id');
      var id1="";
      var id2="";
      var id3="";
      var id4="";
      if(gparent.is('#cat1cont'))
        {
          id1=id;
        }
        else if(gparent.is('#cat2cont'))
        {
          id2=id;
        }
        else if(gparent.is('#cat3cont'))
        {
          id3=id;
        }
        else if(gparent.is('#cat4cont'))
        {
          id4=id;
        }
      $.ajax({
        type: "GET",
        url: "code.php",
        data: {do_delete:id1,
               read_delete:id2,
               watch_delete:id3,
               visit_delete:id4},
        datatype: "html",
        success: function(response){
          parent.remove();
          console.log(response);
        },
        error: function(response){
          console.log(response);
        }
      });
    }
    else
    {
      alert("You have not completed this task yet! Click on 'done' before deleting it.");
    }
    });
  }
	  $("#cat1cont").siblings().hide();
		$("#cat1cont").show();
    $("#cat1").css('padding-bottom', '45');
    $("#cat1").siblings().css('padding-bottom', '22');
    //allow_done();
		$("#cat1").click(function(){
      allow_done();
			$("#cat1cont").siblings().hide();
			$("#cat1cont").show();
      $("#cat1").css('padding-bottom', '45');
      $("#cat1").siblings().css('padding-bottom', '22');
      allow_done();
			});
		$("#cat2").click(function(){
      allow_done();
			$("#cat2cont").siblings().hide();
			$("#cat2cont").show();
      $("#cat2").css('padding-bottom', '45');
      $("#cat2").siblings().css('padding-bottom', '22');
      allow_done();
			});
		$("#cat3").click(function(){
      allow_done();
			$("#cat3cont").siblings().hide();
			$("#cat3cont").show();
      $("#cat3").css('padding-bottom', '45');
      $("#cat3").siblings().css('padding-bottom', '22');
      allow_done();
			});
		$("#cat4").click(function(){
      allow_done();
			$("#cat4cont").siblings().hide();
			$("#cat4cont").show();
      $("#cat4").css('padding-bottom', '45');
      $("#cat4").siblings().css('padding-bottom', '22');
      allow_done();
			});

  $('.addtask').click(function(){
        var parent=$(this).parent();
        var prev=$(this).prev();
        var ul=$(this).prev().prev();
        var text1,text2,text3,text4;
        if(parent.is('#cat1cont'))
        {
          text1=prev.val();
          text2="";
          text3="";
          text4="";
        }
        else if(parent.is('#cat2cont'))
        {
          text1="";
          text2=prev.val();
          text3="";
          text4="";
        }
        else if(parent.is('#cat3cont'))
        {
          text1="";
          text2="";
          text3=prev.val();
          text4="";
        }
        else if(parent.is('#cat4cont'))
        {
          text1="";
          text2="";
          text3="";
          text4=prev.val();
        }
        $.ajax({
          type: "GET",
          url: "code.php",//allow_
          data: {addtodo:text1,
                 addtoread:text2,
                 addtowatch:text3,
                 addtovisit:text4},
          datatype: "html",
          success: function(response){
              ul.html(response);
              console.log(response);
              prev.val("");
              allow_done();
          },
          error: function(){
            console.log("error");
          }
        });
        
      });
      allow_done();
});