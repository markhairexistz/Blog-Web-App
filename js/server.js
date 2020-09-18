const uploadBtn = document.querySelector('.upload-img');
const chooseFile = document.querySelector('.choose-file');
const fileName = document.querySelector('.file-name');

chooseFile.addEventListener('click', clickUpload);
uploadBtn.addEventListener('change', addText);

fileName.innerHTML = "No Image Chosen...";

function clickUpload(){
	uploadBtn.click();
} 
function addText(){
	if(uploadBtn.value){
		fileName.innerHTML = uploadBtn.value;
	}else{
		fileName.innerHTML = 'No Image Chosen...';
	}
}

//PREVIEW AN IMAGE SELECTED
const image = document.querySelector('#image');
 image.addEventListener('change', displayImage);
 function displayImage(){

 	//declare a FileReader function
 	const fileReader = new FileReader();
//This will wait until the file is fully loaded to the browser
fileReader.onload = () =>{
	//this creates an html img element equivalent to document.createElement('Img');
	//const imageNew = new Image();
 	const imageNew = document.createElement('img');
 	imageNew.classList.add('imgToUpload');
	//insert the source to the Img element
	imageNew.src = fileReader.result;	
	//append the base64 value to the Img elemment
 	document.querySelector('.imgDiv').appendChild(imageNew);

 

 	}
 		//console.log(input.value);

	//this readAsDataURL() returns a base64 data to the browser
 		fileReader.readAsDataURL(image.files[0]);
 
 	//fileReader.readAsText(input.files[0]);
}

//ajax
//insert
/*
//selectors
const image = document.querySelector('#image');
const author = document.querySelector('#author');
const header = document.querySelector('#header');
const content = document.querySelector('#content');
const publish = document.querySelector('#publish');
const formSubmit = document.querySelector('#formPost');
*/
//event
//formSubmit.addEventListener('submit', saveBlog);

//functions
/*
function saveBlog(){
axios({
	url:'post.php',
	method:'get',
	data:{image:image.value,
	author:author.value,
	header:header.value,
	content:content.value}
}).then((fromResolve) => {
	console.log("success:", fromResolve);
}).catch((fromReject)=>{
	console.log("failed:", fromReject);
})
}
*/

/*
function saveBlog(event){
	event.preventDefault();	
	
	const imageFilename = image.files[0].name;
	console.log(imageFilename);
	publish.disabled = true;
	//preloader.classList.add("show");
	publish.innerHTML = "PUBLISHING...";
	
	let formdata = new FormData();


	formdata.append("image", imageFilename);
	formdata.append("author", author.value);
	formdata.append("header", header.value);
	formdata.append("content", content.value);



 let xhr = new XMLHttpRequest();

 xhr.open("POST", "post.php");

 xhr.onreadystatechange = function(){
 	if(xhr.readyState == 4 && xhr.status == 200){
 		if(xhr.responseText == "success"){
 			publish.disabled = true;
 			//loader
 			publish.innerHTML = 'PUBLISHING...';
 		}else{
 			//preloader.classList.remove("show");
 			//publish.innerHTML = xhr.responseText;
 			//btnSend.disabled = true;
 			console.log(xhr.responseText);
 			publish.innerHTML = xhr.responseText;
 
 			setTimeout(()=>{
 			publish.innerHTML = '<i class="fa fa-lg fa-newspaper-o" aria-hidden="true"></i> PUBLISH';
 			publish.disabled = false;
 			},3000)
 		}
 	}
 }
 xhr.send(formdata);
};

*/

/*
function saveBlog(event){
	event.preventDefault();
	console.log("image:",image.value,"author", author.value,"header:", header.value,"content:", content.value);
}
*/
