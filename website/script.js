let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Apple Laptop',
        image: '1.jpg',
        price: 180000
    },
    {
        id: 2,
        name: 'Apple series watch',
        image: '2.jpg',
        price: 20000
    },
    {
        id: 3,
        name: 'Samsung Tablet',
        image: '3.jpg',
        price: 19000
    },
    {
        id: 4,
        name: 'Boat Speaker',
        image: '4.jpg',
        price: 10000
    },
    {
        id: 5,
        name: 'Iphone 13 max pro',
        image: '5.jpg',
        price: 140000
    },
    {
        id: 6,
        name: 'Boat HeadPhones',
        image: '6.jpg',
        price: 15000
    },
    {
        id: 7,
        name: 'LCD',
        image: '7.jpg',
        price: 13000
    },
    {
        id: 8,
        name: 'Boat HeadPhones',
        image: '8.jpg',
        price: 14000
    },
    {
        id: 9,
        name: 'Nikon Camera',
        image: '7.jpg',
        price: 32000
    },
    {
        id: 10,
        name: 'Amazon Firestick',
        image: '10.jpg',
        price: 15000
    },
    {
        id: 11,
        name: 'Projector',
        image: '11.jpg',
        price: 5000
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="css/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="css/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}