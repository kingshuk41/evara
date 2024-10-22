
    // Dummy product list for demonstration
    const products = [
      { id: 1, name: 'Shirt' },
      { id: 2, name: 'Camping Tent' },
      { id: 3, name: 'Backpack' },
      { id: 4, name: 'Sleeping Bag' },
      { id: 5, name: 'Water Bottle' }
    ];

    function searchProduct(event) {
      event.preventDefault();
      
      // Get the search input value
      const query = document.getElementById('searchQuery').value.toLowerCase();

      // Filter products based on the query
      const filteredProducts = products.filter(product => 
        product.name.toLowerCase().includes(query)
      );

      // Display results
      const resultsDiv = document.getElementById('searchResults');
      resultsDiv.innerHTML = '';

      if (filteredProducts.length > 0) {
        filteredProducts.forEach(product => {
          const productItem = document.createElement('div');
          productItem.textContent = product.name;
          resultsDiv.appendChild(productItem);
        });
      } else {
        resultsDiv.textContent = 'No products found';
      }
    }
 