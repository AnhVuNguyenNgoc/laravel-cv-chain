$(document).ready(function(){

    var username; 
    var password; 
    var password_comfirm; 
    var check_term; 

	$("#username").keydown(function(){         
        username = $("#username").val().length;           
        if(username < 8){        
        	$("#username").addClass('error_input');
        }
        else
        	$("#username").removeClass("error_input");
    });

	$("#password_confirm").keydown(function(){  
        password= $("#password").val();     	 
        password_comfirm=$("#password_confirm").val();
        if(password_comfirm.localeCompare(password)!=0){        	
        	$("#password_confirm").addClass('error_input');        	
        	$("#error_password_confirm").html("<font color='red'>Password không khớp ở trên</font>");
        }
        else
        {
        	$("#password_confirm").removeClass("error_input");
            $("#error_password_confirm").html("");    	
        }
    });


    $("#submit_register").click(function(){
        if(username < 8){   
            alert("Tối đa 8 kí tự, xin hãy nhập lại");
            $("#username").focus();
            return false;
        }
        
        check_term = $("#check_term").is(':checked');
        if(!check_term)
        {
            alert("Hãy đánh dấu và đồng điều khoản của chúng tôi");
            return false;
        }
        
    });

    $("#button_acc_add").click(function(){
       copyToClipboard('#text_acc_add');
    });

     $("#button_prv_key").click(function(){
       copyToClipboard('#text_prv_key');
    });
   
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).html()).select();
        document.execCommand("copy");
        $temp.remove();
        alert('Copyed to ClipBoard');
    }
});

