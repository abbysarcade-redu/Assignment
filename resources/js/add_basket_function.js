var basket_products = JSON.parse(localStorage.getItem('sku'))||[];


function basket_fuction($sku) {
    console.log(localStorage);
    console.log(basket_products);
    console.log($sku);
    basket_products.push($sku);
    console.log(basket_products);
    localStorage.setItem("sku", JSON.stringify(basket_products));
    console.log(localStorage.getItem("sku"));

}

var basket_length = basket_products.length;
console.log(basket_length);
document.getElementById('basket').innerText = basket_length;
