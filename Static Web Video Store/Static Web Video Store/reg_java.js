function validation() {
	var empty="";
	var atdot="";
	var pass="";
    var name = document.f.name.value;
    var email = document.f.email.value;
    var nation = document.f.nation.value;
	var pass1= document.f.pass1.value;
	var pass2= document.f.pass2.value;
    if (name == "") {
        empty+="Name must be filled \n";
    }
	if (email == "") {
        empty+="email must be filled \n";
    }
	if (nation == "-1") {
        empty+="Nation must be selected ";
    }
	if(pass1==""){
		pass+="Password not enterd";
	}
	if(pass2==""){
		pass+="Re-Password not enterd\n";
	}
	if(pass1!=pass2){
		pass+="password not matched";
		}
	var at=email.indexOf("@");	
	var dot=email.lastIndexOf(".");
	if(at<0){
		atdot+="@ is not included\n";
		}
	if(dot<0){
		atdot+=". is not included\n";
		}
	if((dot-at-1)!=5){
		atdot+="Character between @ and . is not 5\n";
		}
	if(empty!=""){
		alert(empty);
		}
	if(atdot!=""){
		alert(atdot);
		}
	if(pass!=""){
		alert(pass);
		}
	
}