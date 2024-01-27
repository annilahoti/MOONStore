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



