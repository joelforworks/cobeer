
let area = document.querySelectorAll('area');

console.log(area);

area.forEach((element)=>{
	console.log("Element: ",element);
	console.log("Title: ",element.title);
	let id = element.title;
	console.log(document.getElementById(`${id}`));
	element.onmouseover=()=>{
		document.getElementById(`${id}`).style.display="inline-block";
		document.getElementById(`${id}`).style.width="300px";
	};
	element.onmouseout=()=>{
		document.getElementById(`${id}`).style.display="none";
	};
});

