const secHand = document.getElementsByClassName('sec');
const minHand = document.getElementsByClassName('min');
const hourHand = document.getElementsByClassName('hour');



function setClock(){
	//alert("Done");
	let date = new Date();
	let secRatio = date.getSeconds() / 60;
	let minRatio = (secRatio + date.getMinutes()) / 60;
	let hrRatio = (minRatio + date.getHours()) / 12;

	setRotation(secHand, secRatio);
	setRotation(minHand, minRatio);
	setRotation(hourHand, hrRatio);
}

function setRotation(element, value){
	$(()=>{
		$(element).css('transform',`rotate(${value * 360}deg)`);
	});
}

setClock();
window.setInterval(setClock, 100);