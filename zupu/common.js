// JavaScript Document
$(document).ready(function(){
	$('#menu li:eq(2)').hover(function(){
			$('#from').load('index.html');	
			
			});
	$('#menu li:eq(1)').hover(function(){
			$('#from').load('add.html');							  
										  
										  });	
	$('#menu li:eq(0)').hover(function(){
			$('#from').load('delete.php',function(){
			$('#delete').mouseover(function()
			{alert('niho');									  
												  
												  });							          
									
								});	
								  
										  });	
	$('#menu li:eq(3)').hover(function(){
			$('#from').load('select.html');							  
										  
										  });
						  
	/*$('#from').mouseleave(function(){
			$(this).empty();							 
										 })	;	*/							  
								
	$('#submit').click(function(){
		/*	$(this).ajax({
				type:'POST',		 
				url:'login.php',
				success:function(data){
					//$('#from').append(data);
					alert('hdai');
					}		 
						 });
		     return false;*/ 
		    alert('dfhi');
	
								
								});

								})