//SELECTOR
const slider = document.querySelector('#slider');
const left = document.querySelector('#left');
const right = document.querySelector('#right');

const Allli = document.querySelectorAll('.control ul li');
const ulParents = document.querySelector('.control ul'); //selects ul

let index = 0;
 //eventListener
right.addEventListener('click',slideRight);
left.addEventListener('click',slideLeft);

//FUNCTIONS
function slideRight(){
	index =(index < 2) ? index + 1 : 2;
		//if index is < 3 then index + 1 else index is = 3.
slider.style.transform = 'translate('+(index) * -25+'%)';

//removes class 'selected' from li
document.querySelector('.control .selected').classList.remove('selected');

//add class 'selected' from li
ulParents.children[index].classList.add('selected');
}


function slideLeft(){
	index =(index > 0) ? index - 1 : 0;
	//if index > 0 index minus 1 else set index to 0 
slider.style.transform = 'translate('+(index) * -25+'%)';

//removes class 'selected' from li
document.querySelector('.control .selected').classList.remove('selected');

//add class 'selected' from li
ulParents.children[index].classList.add('selected');
	}


//dot slider
Allli.forEach(function(indicator, ind){
	indicator.addEventListener('click', function(){
	//set index value to ind
	index = ind;
	//remove bg white for selected dot
	document.querySelector('.control .selected').classList.remove('selected');
	//add bg white to new selected dot
		indicator.classList.add('selected');
	//slide the slider div
		slider.style.transform = 'translate('+(ind)* -25+'%)';
		
	})
})

//BLOG MODAL
const featuredBlog = document.querySelectorAll('.featured-blog');
const blogModal = document.querySelector('#blogModal');

//show modal
/**/
for (let i = 0;i < featuredBlog.length; i++) {
    featuredBlog[i].addEventListener('click', showBlogModal);
    //loopp the data attribute
  //const dataAttr = featuredBlog[i].dataset.id;  
  //console.log(dataAttr);
}

//loader gif
const preloader = document.querySelector('.content-preloader');
//modal
const blogForm = document.querySelector('#blogForm');
function showBlogModal(){
	
	blogModal.classList.add('show');
	preloader.classList.add('show');
	//console.log(this.getAttribute('data-id'));
	const dataId = this.getAttribute('data-id');
	let formdata = new FormData();
	formdata.append("dataId", dataId);
	/*
	formdata.append("subject", subject.value);
	formdata.append("message", message.value);
	*/
//get data from post table
let xhr = new XMLHttpRequest();

xhr.open("POST", "functions/selectFeatured.php");

xhr.onreadystatechange = function(){
 	if(xhr.readyState == 4 && xhr.status == 200){
 		if(xhr.responseText == "success"){
 			//show loading
			preloader.classList.add("show");
 		}else{
 			preloader.classList.remove("show");
 			blogForm.innerHTML = xhr.responseText;
 		}
 	}
 }
 xhr.send(formdata);
 
}

const xModal = document.querySelector("#xblogModal");

xModal.addEventListener("click", xblogModal);
function xblogModal(){
	blogModal.classList.remove("show");
}





