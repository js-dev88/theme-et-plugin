function init(field){
	field.style.border = " 1px solid #663399";
}

function notEmpty(field){
	
	if(field.value ==""){
		field.style.border = "1px solid red";		
		return false;
	}else{
		return true;
	}

}
		
function verif(){
	
	var correctForm = true;
  
	for(var i =0; i < document.forms[0].length;i++){
		var formField = document.forms[0].elements[i];
		var formFieldOK = notEmpty(formField);
		
		correctForm = correctForm && formFieldOK;		
	}
	
		
	if(correctForm == true){
		document.getElementById("champObl").style.color ="black";
		if(document.getElementById("validMAil").style.display=="block"){
			return false;
	    }else if(document.getElementById("formInvPassword").style.display=="block"){
			return false;
		}else if(document.getElementById("validName").style.display=="block"){
			return false;
		}else if(document.getElementById("validFirstname").style.display=="block"){
			return false;
		}else if(document.getElementById("validTel").style.display=="block"){
			return false;
		}else if(document.getElementById("validAdress").style.display=="block"){
			return false;
		}else if(document.getElementById("validCp").style.display=="block"){
			return false;
		}else if(document.getElementById("validVille").style.display=="block"){
			return false;
		}else if(document.getElementById("formInvPassword").style.display=="block"){
			return false;
		}else{
			return true;
		}
		
	}else{
		document.getElementById("champObl").style.color ="red";
		return false;
	}
	
}

 function verifMail(field) {
	 var msg=document.getElementById("validMAil");
      if (((field.value.indexOf("@")>=0)&&(field.value.indexOf(".")>=0))|| field.value=="") {
	     msg.style.display="none";
         return true
       } else {
	     msg.style.display="block";	 		 
         return false
       }
}
  
function verifConfMail(field){
	var msg = document.getElementById("formInvMail");
	var mail = document.getElementById("_insemail").value;
	var strg1 = field.value;
	
	var res = compareField(strg1,mail,msg);
	return res;	
}  




function verifConfPassword(field){
	var msg = document.getElementById("formInvPassword");
	var mdp = document.getElementById("_inspassword").value;
	var strg1 = field.value;
	
	var res = compareField(strg1,mdp,msg);
	return res;
}

function compareField(strg1,strg2,strg3){
	if(strg1 == strg2 || strg1 ==""){
		strg3.style.display="none";
		return true
	}else{
		strg3.style.display="block";	 		 
         return false
	}
}

function verifName(field){
	var regex = /[0-9?&~"#{(\[|_\\^@)\]=}$?£µ*%:,\/!,;.?+]/;
	if( verifField(field.value,document.getElementById("validName"),regex) == true){		
		return true;
	}else{
		return false;
	}
}

function verifFirstname(field){
	 var regex = /[0-9?&~"#{(\[|_\\^@)\]=}$?£µ*%:,\/!,;.?+]/;
	 return verifField(field.value,document.getElementById("validFirstname"),regex);	
}

function verifTel(field){
	var regex = /[a-zA-Z?&~"#{('\[|_\\^@)\]=}$?£µ*%:,\/!,;.?+]/;
	return verifField(field.value,document.getElementById("validTel"),regex);
		
}

function verifAdress(field){
	var regex = /[?&~"#{(\[|_\\^@)\]=}$?£µ*%:\/!;.?+]/;
	return verifField(field.value,document.getElementById("validAdress"),regex);
		
}
function verifCp(field){
	var regex = /[a-zA-Z?&~"#{(\[|_\\^@)\]=}$?£µ*%:\/!,;.?+]/;
	return verifField(field.value,document.getElementById("validCp"),regex);
		
}
function verifVille(field){
	var regex = /[0-9?&~"#{(\[|_\\^@)\]=}$?£µ*%:\/!,;.?+]/;
	return verifField(field.value,document.getElementById("validVille"),regex);
		
}
 
function verifField(chaine,phrase,regex){	
	

	if(regex.test(chaine) == false){
		phrase.style.display="none";
		return true;		
	}else{
		phrase.style.display="block";
		return false;
	}
	
}





