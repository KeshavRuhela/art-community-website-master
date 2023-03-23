var picse = $('#picse');
var area =$('#searchshowingarea');
var crosssear = $('#crosssear');

function searching(){
    // alert(picse.val())
    area.show();
    crosssear.show();
    area.text(picse.val());
    console.log(picse.val())
    if (picse.val() == ""){
    crosssear.hide();
    }
    $.ajax({
        url: "http://localhost/art-community-website-master/Api/searching.php",
        type: "GET",
        data:{"text": picse.val()},
        beforeSend: function () {        
            },
        success: function(data) {
            console.log(data);
            area.html(data);
        },
        error : function(data){
            console.log("error");
        }
    });  
}

function closesearch(){
    area.hide();
    crosssear.hide();     
}

// var imag_hover = document.querySelectorAll(".myimagesearch-details");


    
