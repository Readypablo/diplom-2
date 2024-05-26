// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'forum.php?logout=true';}		
	});
});


	//Если пользователь отправляет форму
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("../pages/post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});

//Загрузка файла, содержащий логи чата
function loadLog(){		
		$.ajax({
			url: "../pages/log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); // Вставка журнала чата в раздел #chatbox			
		  	},
		});
	}

    	//Загрузка файла, содержащий логи чата
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Высота прокрутки перед запросом
		$.ajax({
			url: "../pages/log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); // Вставка журнала чата в раздел #chatbox			
				
				//вто скрол		
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; 
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); 
				}				
		  	},
		});
	}

    


	$('#submitmsg').on('click', function(e){
		e.preventDefault();
		
		var val = $('#usermsg').val();
		
		if(val.length >= 1){
		  $('#usermsg').val('');
		}
	  });

    setInterval (loadLog, 100);