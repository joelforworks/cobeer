
let area = document.querySelectorAll('area')[0]

console.log(area)

area.addEventListener(
	"click",
	()=>{
		let options = {
			'none':'inline-block',
			'':'inline-block',
			'inline-block':'none',
		}
		let trigo =document.querySelectorAll('.trigo')[0].style.display; 
		console.log(trigo);
		document.querySelectorAll('.trigo')[0].style.display = options[trigo];
	}
	,
	false
);

