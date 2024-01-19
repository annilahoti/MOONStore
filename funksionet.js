function fav(id){
    let favoriteElement=document.getElementsByClassName('favorite-button');
    for(let i=0;i<favoriteElement.length;i++){
        let favoriteElement2 = favoriteElement[i];
        if(favoriteElement2.id == id){

            if(favoriteElement2.innerHTML === '<img src="../images/Front/favorite.png" alt="favorite">' ){
                favoriteElement2.innerHTML = '<img src="../images/Front/full-favorite.png" alt="favorite">';
            }else{
                favoriteElement2.innerHTML = '<img src="../images/Front/favorite.png" alt="favorite">';
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

let i = 0;
let imgArray = [
    "images/Front/woman1.jpg",
    "images/Front/woman2.jpg",
    "images/Front/woman3.jpg",
    "images/Front/woman4.jpg",
    "images/Front/woman5.jpg",
    "images/Front/woman6.jpg"

];

function nderroW(){
    document.getElementById('slideshowW').src = imgArray[i];
    if(i<imgArray.length-1){
        i++;
    }
    else{
        i=0;
    }
    setTimeout(nderroW, 3000);
}



let j=0;
let imgArray2 = [
    "images/Front/man1.jpg",
    "images/Front/man2.jpg",
    "images/Front/man3.jpg",
    "images/Front/man4.jpg",
    "images/Front/man5.jpg",
    "images/Front/man6.jpg"

];

function nderroM(){
    document.getElementById('slideshowM').src = imgArray2[j];
    if(j<imgArray2.length-1){
        j++;
    }
    else{
        j=0;
    }
    setTimeout(nderroM, 3000);
}

window.addEventListener('load', function() {
    nderroW(); // Nis slideshow-n për femrat
    nderroM(); // Nis slideshow-n për meshkujt
});



