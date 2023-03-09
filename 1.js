const params = new URLSearchParams(window.location.search);
if (params.get('login')==1) {
    // alert("email is allready exist");
    document.querySelector('.loginMSG').style.display = "block";
    // document.querySelector('.loginMSG').innerHTML = "Email Or Password is incorect";

}else if (params.get('login')==0){
    document.querySelector('.loginMSG').style.display = "block";
    document.querySelector('.loginMSG').innerHTML = "Email Or Password is incorect";
    document.querySelector('.loginMSG').style.background = "orange";

}
function closeEmailwarning() {
    document.querySelector('.loginMSG').style.display = "none"
}

var shop = {
    "shoping": [
        { "id": "1" },{ "id": "2" },{ "id": "3" },{ "id": "4" },{ "id": "5" },{ "id": "6" },{ "id": "7" },{ "id": "8" },{ "id": "9" },{ "id": "10" },{ "id": "11" },{ "id": "12" },{ "id": "13" },{ "id": "14" }]
};

var category = {
    "cate": [{ "catname": "madhubani1.jpeg", "text": "madhubani" },{ "catname": "miniature1.webp", "text": "miniature" },{ "catname": "oil1.jpeg", "text": "oil" },{ "catname": "warli1.jpeg", "text": "warli" },{ "catname": "gond1.jpg", "text": "gond" },{ "catname": "kalamkari1.jpeg", "text": "kalamkari" },{ "catname": "tanjore1.jpeg", "text": "tanjore" },
    ]
};

function openNewWindow(id) {
    window.location.href = "detail_View.php?id=" + id;
}


// madhubani1.jpeg miniature1.webp oil1.jpeg warli1.jpeg gond1.jpg  kalamkari1.jpeg tanjore1.jpeg
