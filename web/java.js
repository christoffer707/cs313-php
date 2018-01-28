function aboutFunction() {
    alert("My name is Christoffer Hemming\nI live in Tacoma Washington with my\n3 children. I am attending BYU-I to\nreceive my degree in software engineering.");
}
var array=[];
var count=0;

function addToCart(name, price){
	array[count]= [name, price];
	console.log("array", array);
	console.log("array", array.toString());
	console.log("array", JSON.stringify(array));
	var hidden = document.getElementById("hiddenItem");
	hidden.value = "";
	hidden.value = array.toString();
	count++;
}