
function change(){
	var nav = document.querySelector("#nav");
	var li = document.getElementsByTagName("li");
	if(nav.className == "old"){
		nav.className = "new";
		for(i=0;i<4;i++){
		    li[i].style.display = "block"
		};
	}else{
		nav.className = "old";
		for(i=0;i<4;i++){
		    li[i].style.display = "none"
	    };
	};
};

var button = document.querySelector(".click");
button.addEventListener("click", change, false);
