document.getElementById('product-form').addEventListener('submit', function(event) {
    event.preventDefault();
   
    const productName = document.getElementById('product-name').value;
   
    if (productName) {
       const xhr = new XMLHttpRequest();
       xhr.open('POST', 'app.php', true);
       xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
       xhr.onreadystatechange = function() {
           if (xhr.readyState === 4 && xhr.status === 200) {
           }
        }
    }
    document.getElementById('load-wishlist').addEventListener('click', function() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'app.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const wishlist = document.getElementById('wishlist');
                wishlist.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
       });
})

const axios = require('axios');

async function addToWishlist() {
 try {
    const response = await axios.post('http://localhost:3000/wishlist/add', {
      name: 'Item name',
      price: 'Item price',
      link: 'Item link',
      description: 'Item description',
    });

    console.log(response.data);
 } catch (error) {
    console.error(error);
 }
}

addToWishlist();
