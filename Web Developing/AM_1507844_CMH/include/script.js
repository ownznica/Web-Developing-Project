function delete_user( id ){
	var answer = confirm('Are you sure?');
	if (answer){
        window.location = '../include/delete.php?id=' + id;
    } 
}

function validateCreateFrom(){

//To check title
	if(FormCreate.title.value == ""){
        document.getElementById("errTitle").innerHTML="  Please fill the title in here";
        FormCreate.title.focus();
        return false;
    }
    else
        document.getElementById("errTitle").innerHTML="";
	
//To check year
    if(FormCreate.year.value == "0"){        
        document.getElementById("errYear").innerHTML='  Please Select the Year';
		FormCreate.year.focus();
        return false;
    }
    else
        document.getElementById("errYear").innerHTML="";

//To check genre
    if(FormCreate.genre.value == "0"){        
        document.getElementById("errGenre").innerHTML='  Please Select a Genre';
		FormCreate.genre.focus();
        return false;
    }
    else
        document.getElementById("errGenre").innerHTML="";
	
//To check image
	var fuData = document.getElementById('imgName');
    var FileUploadPath = fuData.value;
	
	if(FileUploadPath == ''){        
        document.getElementById("errImgName").innerHTML='  Please Select an Image';
        return false;
    }else{
		var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
		if (Extension == "gif" || Extension == "png"|| Extension == "jpeg" || Extension == "jpg") {
			document.getElementById("errImgName").innerHTML=""
		}else{
        document.getElementById("errImgName").innerHTML="Photo only allows file types of GIF, PNG, JPG and JPEG. ";
		return false;
		}
	}

//To check synopsis	
	if(FormCreate.synopsis.value == ""){
        document.getElementById("errSynopsis").innerHTML="  Please fill in synopsis here";
        FormCreate.synopsis.focus();
        return false;
    }
    else
        document.getElementById("errSynopsis").innerHTML="";
}

function validateUpdateFrom(){
	
//To check title
    if(FormUpdate.title.value == ""){
        document.getElementById("errTitle").innerHTML="  Please fill in the title here";
        FormUpdate.title.focus();
        return false;
    }
    else
        document.getElementById("errTitle").innerHTML="";
	
//To check image
	var fuData = document.getElementById('imgName');
    var FileUploadPath = fuData.value;
	
	var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
	if (Extension == "gif" || Extension == "png"|| Extension == "jpeg" || Extension == "jpg" || Extension == "") {
		document.getElementById("errImgName").innerHTML=""
	}else{
        document.getElementById("errImgName").innerHTML="Photo only allows file types of GIF, PNG, JPG and JPEG. ";
		return false;
	}

//To check synopsis	
	if(FormUpdate.synopsis.value == ""){
        document.getElementById("errSynopsis").innerHTML="  Please fill in synopsis here";
        FormUpdate.synopsis.focus();
        return false;
    }
    else
        document.getElementById("errSynopsis").innerHTML="";
}
