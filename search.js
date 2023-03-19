var picse = document.getElementById('picse');
var area = document.getElementById('searchshowingarea');
var crosssear = document.getElementById('crosssear');
area.style.display = "none";

function searching(){
    area.style.display = "block";
    crosssear.style.display = "block";
    area.innerText = picse.value;
    console.log(picse.value)
    if (picse.value == ""){
    crosssear.style.display = "none";
    }

//ajax work here


}

function closesearch(){
    area.style.display = "none";
    crosssear.style.display = "none";    
}
