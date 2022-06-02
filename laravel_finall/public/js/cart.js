let current_cart={
    count:0,
    products :[]
};

function display_cart_logo(){
    console.log(current_cart);
    console.log(current_cart.count);
    const div = document.querySelector("#cart_logo").innerHTML="(" + current_cart.count + ")";
    console.log(div);
}

function buy(id,title,price){
    alert('Product added')
    let founded = false;
    current_cart.products.forEach((product)=>{
        if (product.id === id){
            product.copie++;
            founded=true;
        }
    });
    if (!founded)
        current_cart.products.push({id:id,price : price , title:title,copie:1});

    current_cart.count++;

    display_cart_logo();
    save_cart();
}

function display_cart_name(){
    const cart_content = document.querySelector('#cart_logoo');
    current_cart.products.forEach((product) =>{
        product.price = product.copie* product.price;
cart_content.innerHTML += "<tr><td>" + product.id + "</td>"
                                        + "<td>" + product.title + "</td>"
                                        + "<td>" + product.price + "</td>"
                                        + "<td>" + product.copie + "</td></tr>";
    });
}

function save_cart(){
    localStorage.setItem('current_cart', JSON.stringify(current_cart)) 
}

function load_cart(){
    const saved_cart=JSON.parse(localStorage.getItem('current_cart'));

    if(saved_cart !== undefined && saved_cart !== null){
        current_cart =saved_cart;
        display_cart_logo();
    }

}

load_cart();
