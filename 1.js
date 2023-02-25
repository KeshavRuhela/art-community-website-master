const params = new URLSearchParams(window.location.search);
if (params.get('login')) {
    // alert("email is allready exist");
    document.querySelector('.loginMSG').style.display = "block"
}
function closeEmailwarning() {
    document.querySelector('.loginMSG').style.display = "none"
}

var shop = {
    "shoping": [
        { "id": "1" },{ "id": "2" },{ "id": "3" },{ "id": "4" },{ "id": "5" },{ "id": "6" },{ "id": "7" },{ "id": "8" },{ "id": "9" },{ "id": "10" },{ "id": "11" },{ "id": "12" },{ "id": "13" },{ "id": "14" }]
};

var category = {
    "cate": [{ "catname": "madhubani1.jpeg", "text": "madhubani1" },{ "catname": "miniature1.webp", "text": "miniature1" },{ "catname": "oil1.jpeg", "text": "oil1" },{ "catname": "warli1.jpeg", "text": "warli1" },{ "catname": "gond1.jpg", "text": "gond1" },{ "catname": "kalamkari1.jpeg", "text": "kalamkari1" },{ "catname": "tanjore1.jpeg", "text": "tanjore1" },
    ]
};

function openNewWindow(id) {
    window.location.href = "detail_View.php?id=" + id;
}


// madhubani1.jpeg miniature1.webp oil1.jpeg warli1.jpeg gond1.jpg  kalamkari1.jpeg tanjore1.jpeg
