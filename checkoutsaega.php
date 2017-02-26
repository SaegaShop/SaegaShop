}

});

simpleCart.bind( 'beforeCheckout' , function( data ){
full_name: document.getElementById('first_name').value;
        email: document.getElementById('email').value;
        phone: document.getElementById('phone').value;
		deliveryKurir: document.getElementById('deliveryKurir').value;
        deliveryLocation: document.getElementById('deliveryLocation').value;
        address: document.getElementById('address').value;
        postcode: document.getElementById('postcode').value;
        comments: document.getElementById('comments').value;
});