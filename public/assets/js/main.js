//testing
// alert('ok');

const typedText = document.querySelector('.typed-text');

// typedText.style.backgroundColor = 'red';

const typingDelay = 200;
const erasingDelay = 50;
const newTextDelay = 2000;

let tulisanIndex = 0;
let charIndex = 0;

function type () {
	if(charIndex < tulisan[tulisanIndex].length ) {
	 	typedText.textContent += tulisan[tulisanIndex].charAt(charIndex);
	 	charIndex++; 
	 	setTimeout(type, typingDelay);
	}
	else {
		//erase 
		setTimeout(erase, newTextDelay);
	}
}

function erase() {
	if(charIndex > 0) {
		 typedText.textContent = tulisan[tulisanIndex].substring(0,charIndex-1);
		 charIndex--;
		 setTimeout(erase, erasingDelay);
	}
	else {
		tulisanIndex++;
		if(tulisanIndex >= tulisan.length) tulisanIndex = 0;
		setTimeout(type, typingDelay + 1100);

	}
}

document.addEventListener("DOMContentLoaded", function() {
	setTimeout(type, newTextDelay + 250);
} );

$(document).ready(function(){
	$('.err i').click(function(){
		$('.err').hide();
	})

	
})