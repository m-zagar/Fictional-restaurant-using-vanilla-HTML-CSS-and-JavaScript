let carts = document.querySelectorAll('.jsbutton');

let products = [
	{
		name: 'HTML Burger',
		tag: 'htmlburger',
		price: 20,
		inCart: 0
	},
	{
		name: 'JS Burger',
		tag: 'jsburger',
		price: 30,
		inCart: 0
	},
	{
		name: 'Lorem Ipsum Burger',
		tag: 'loremipsumburger',
		price: 25,
		inCart: 0
	},
	{
		name: 'NotMcNuggets',
		tag: 'notverychickennotmcnuggets',
		price: 25,
		inCart: 0
	},
	{
		name: 'Fresh Fries',
		tag: 'freshfries',
		price: 10,
		inCart: 0
	},
	{
		name: 'Soda',
		tag: 'soda',
		price: 10,
		inCart: 0
	}
];

for(let i=0; i < carts.length; i++){
	carts[i].addEventListener('click', () => {
		cartNumbers(products[i]);
		totalCost(products[i]);
	})
}

function onLoadCartNumbers(){
	let productNumbers = localStorage.getItem('cartNumbers');

	if(productNumbers){
		document.querySelector('.checkout span').textContent = productNumbers;
	}

}

function cartNumbers(product){

	let productNumbers = localStorage.getItem('cartNumbers');

	productNumbers = parseInt(productNumbers);

	if(productNumbers){
		localStorage.setItem('cartNumbers', productNumbers + 1);
		document.querySelector('.checkout span').textContent = productNumbers + 1;
	}else{
		localStorage.setItem('cartNumbers', 1);
		document.querySelector('.checkout span').textContent = 1;
	}

	setItems(product);
}

function setItems(product){
	let cartItems = localStorage.getItem('productsInCart');
	cartItems = JSON.parse(cartItems);

	if(cartItems != null){
		if(cartItems[product.tag] == undefined){
			cartItems = {
				...cartItems,
				[product.tag]: product
			}
		}
		cartItems[product.tag].inCart += 1;
	}else{
		product.inCart = 1;
		cartItems = {
			[product.tag]: product
		}
	}


	
	localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product){

	let cartCost = localStorage.getItem('totalCost');
	
	if(cartCost != null){
		cartCost = parseInt(cartCost);
		localStorage.setItem("totalCost", cartCost + product.price);
	}else{
		localStorage.setItem("totalCost", product.price);
	}
}

function displayCart(){
	let cartItems = localStorage.getItem("productsInCart");
	cartItems = JSON.parse(cartItems);
	let cartCost = localStorage.getItem('totalCost');

	let checkoutlist = document.querySelector
	(".checkoutlist");

	if(cartItems&&checkoutlist){
		Object.values(cartItems).map(item => {
			checkoutlist.innerHTML += `
				<tr>
    				<th><input type="text" name="itemname" value="${item.name}" style="text-align:center; background-color:aqua; border:1px solid aqua;" readonly></th>
    				<th><input type="number" value="${item.price}" style="text-align:center; background-color:aqua; border:1px solid aqua;" readonly></th> 
    				<th><input type="number" value="${item.inCart}" style="text-align:center; background-color:aqua; border:1px solid aqua;" readonly></th>
    				<th><input type="number" value="${item.inCart * item.price}" style="text-align:center; background-color:aqua; border:1px solid aqua;" readonly></th>
 			  	</tr>
 			  	`
		});	

		checkoutlist.innerHTML += `	
				<tr>
					<th></th>
					<th></th>
					<th style="border-top:1px solid blue;">Your total cost:</th>
    				<th style="border-top:1px solid blue;"><input type="number" name="totalcost" value="${cartCost}" style="text-align:center; background-color:aqua; border:1px solid aqua;" readonly></th>
 			  	</tr>
 				`
 	}	
}


onLoadCartNumbers();
displayCart();