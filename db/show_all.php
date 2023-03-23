<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .myimage-details {
            position: relative;
            top: -127px;
            left: -198px;
            width: 165px;
            height: 215px;
            border-radius: 15px;
            display: none;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding: 9px;
            margin-top: 3px;
            margin-bottom: -205px;
            margin-right: -190px;

        }

        select {
            font-size: 1.2rem;
            border-radius: 10px;
            margin: 5px;

        }

        .buttona {
            font-size: 1rem;
            padding-right: 1.4rem;
            padding-left: 1.4rem;
            font-weight: 700;
            border-radius: 10px;
            margin: 5px;
            cursor: pointer;


        }

        .filter {

            display: contents;

        }
    </style>
</head>

<body>

    <div class="filters " style="padding:10px; background:lightgray; border-radius:10px;">
        <form id="filter-form" style=" margin:auto;display:table;" action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="filter">Filter By:</div>
            <div class="filter">
                <!-- <label for="Painting"> Category</label> -->
                <select name="painting" id="painting">

                    <option class="fit_category" default value="">Category</option>

                    <option value="Madhubani Painting">Madhubani Painting</option>
                    <option value="Miniature Painting">Miniature Painting</option>
                    <option value="Gond Painting">Gond Painting</option>
                    <option value="Oil Painting">Oil Painting</option>
                    <option value="Warli Painting">Warli Painting</option>
                    <option value="Tanjore Painting">Tanjore Painting</option>
                    <option value="Kalamkari Painting">Kalamkari Painting</option>
                </select>
            </div>
            <div class="filter">
                <!-- <label for="Color">Color</label> -->
                <select name="color" id="color">
                    <option default value="">Color</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                    <option value="Blue">Blue</option>
                    <option value="Grey">Grey</option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Red">Red</option>
                    <option value="Orange">Orange</option>
                    <option value="Neutral">Neutral</option>
                </select>
            </div>
            <div class="filter">
                <!-- <label for="price">Price Range</label> -->
                <select name="price" id="price">
                    <option value="">Price Range</option>
                    <option value="0-50">Rs0 - Rs50</option>
                    <option value="50-100">Rs50 - Rs100</option>
                    <option value="100-500">Rs100 - Rs500</option>
                    <option value="500">Rs500+</option>
                </select>

            </div>
            <div class="filter">
                <!-- <label for="price"> Discount</label> -->
                <select name="Discount" id="Discount">
                    <option value="">Discount</option>
                    <option value="0-10">10%</option>
                    <option value="10-20">20%</option>
                    <option value="30-40">30%</option>
                    <option value="40-50">50%</option>
                    <option value="50-60">60%</option>
                    <option value="60-70">70%</option>
                    <option value="70-80">80%</option>
                    <option value="80-90">90%</option>
                    <option value="90-100">100%</option>
                </select>

            </div>
            <div class="filter">

                <select name="shape" id="shape">
                    <option value="">Shape</option>
                    <option value="Landscape">Landscape</option>
                    <option value="Potrait">Potrait</option>
                    <option value="Panoramic">Panoramic</option>
                    <option value="Square">Square</option>
                    <option value="Slim">Slim</option>

                </select>
            </div>
            <div class="filter">

                <select name="Exclusive" id="Exclusive">
                    <option value="Exclusive">Exclusive</option>

                </select>
            </div>
            <div class="filter">

                <button class="buttona" type="submit">Apply</button>
                <button class="buttona" type="reset">Reset</button>

            </div>
        </form>
    </div>

    <?php


    include "filter.php";
    ?>


</body>


<script>
    var imag = document.querySelectorAll(".all_image");
    var imag_hover = document.querySelectorAll(".myimage-details");
    var a = -1;

    function functioncall(id) {
        imag_hover[id].style.display = "inline-block";
    }

    function functionhide(id) {
        imag_hover[id].style.display = "none";
        // alert(img_id);
    }

    const data = new URLSearchParams(window.location.search);
    // typeof obj.foo !== 'undefined'
    if (typeof data.get('price') !== "undifined") {
        if (data.get('price') != "") {
            let price = document.querySelector("option[value='" + data.get('price') + "']");
            price.selected = true;
        }
    }
    if (typeof data.get('painting') !== "undifined") {
        if (data.get('painting') != "") {
            let price = document.querySelector("option[value='" + data.get('painting') + "']");
            price.selected = true;
        }
    }
</script>


</html>