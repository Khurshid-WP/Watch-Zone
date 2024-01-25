<!DOCTYPE html>
<html>
  <head>
    <title>Display JSON Data as Cards</title>
    <style>
        #card-container{
            display:flex;
            width: 100%;
    overflow: hidden;
    overflow-x: scroll;
        }
      .card {
        display: flex;
        flex-direction: column;
        width: 300px;
        height: 400px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 10px;
        box-sizing: border-box;
      }
      .card h2 {
        margin: 0;
      }
      .card p {
        margin: 5px 0;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1 class='h1'>Displaying JSON Data as Cards</h1>
    <div id="card-container"></div>
    <script>
      fetch('https://dummyjson.com/products')
        .then(response => response.json())
        .then(data => {
          const cardContainer = document.getElementById('card-container');
          data.products.forEach(product => {
            const card = document.createElement('div');
            card.classList.add('card');
            card.innerHTML = `
            <img src='${product.thumbnail}'>
              <h2>${product.title}</h2>
              <p>Price: $${product.price}</p>
              <p>Rating: ${product.rating}</p>
              <p>Stock: ${product.stock}</p>
            `;
            cardContainer.appendChild(card);
          });
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    </script>
  </body>
</html>