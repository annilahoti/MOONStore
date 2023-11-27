function fav(id){
    let favoriteElement=document.getElementsByClassName('favorite-button');
    for(let i=0;i<favoriteElement.length;i++){
        let favoriteElement2 = favoriteElement[i];
        if(favoriteElement2.id == id){

            if(favoriteElement2.innerHTML === '<img src="../images/Front/favorite.png" alt="">' ){
                favoriteElement2.innerHTML = '<img src="../images/Front/full-favorite.png" alt="">';
            }else{
                favoriteElement2.innerHTML = '<img src="../images/Front/favorite.png" alt="">';
            }
        }  
    }
}

function cart(id){
    let cartElement = document.getElementsByClassName('add-to-cart');
    for(let i=0;i<cartElement.length;i++){
        let cartElement2 = cartElement[i];
        if(cartElement2.id == id){

            if(cartElement2.innerHTML === '<img src="../images/Front/cart.png" alt="add-to-cart">' ){
                cartElement2.innerHTML = '<img src="../images/Front/fullcart.png" alt="add-to-cart">';
            }else{
                cartElement2.innerHTML = '<img src="../images/Front/cart.png" alt="add-to-cart">';
            }
        }  
    }
}