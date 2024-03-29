<?php
  include("connect.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.2/css/lightslider.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.2/css/lightslider.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <style>
        /* input[type="date"]::-webkit-calendar-picker-indicator {
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
        } */
        input[type="date"]::-webkit-inner-spin-button
        input[type="date"]::-webkit-calendar-picker-indicator {
        /* display: none; */
        background: transparent;
        -webkit-appearance: none;
        position: absolute;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        right: 0;
        top: 0;
        width: auto;
        }
        body{
        background: #f8f8f8;
        height: 100%;
        }
        header{
        padding: 16px 100px 16px 100px;
        height: 80px;
        }
       
        .head-filter1{
        color: #856141;
        }
        .head-filter2{
        color: #B8B8B8;
        }
        .head-filter2:hover{
        color: #856141;
        }
        .name{
        font-size: 14px;
        margin-bottom: 0px;
        }
        .diachi{
        font-size: 10px;
        margin-bottom: 0px;
        }
        .user{
        height: 80px;
        width: 320px;
        gap: 40px;
        align-items: center;
        }
        .user1{
        background: #F8F8F8;
        height: 80px;
        width: 256px;
        }
        section{
        margin-top: 30px;
        height:  auto;
        width: 978px;
        
        z-index: 1;
        top: 115px;
        right: 100px;
        
        overflow-x: hidden;
        }
        .wrap{
        height: 1000px;
        }
        aside{
        margin-top: 30px;
        height: 900px;
        width: 310px;
        position: absolute;
        z-index: 1;
        top: 115px;
        left: 90px;
        background-color: #FFFFFF;
        overflow-x: hidden;
        padding-top: 20px;
        }
        .account1, .diachi1-1, .sdt1{
        font-size: 14px;
        }
        .name1{
        font-size: 16px;
        }
        .account{
        padding: 24px 16px 24px 16px;
        gap: 24px;
        }
        .anonymus{
        padding-left: 90px;
        }
        .diachi1-1{
        margin-bottom: 0px;
        }
        .xacthuc{
        margin: auto;
        background: #D9F2E9;
        color: #00A86B;
        font-weight: 600;
        font-size: 14px;
        width: 278px;
        height: 40px;
        border: none;
        gap: 8px;
        padding-left: 70px;
        }
        /* css cho ngày */
      
        /* css section */
        .return{
        color: #3b3b3b;
        background: #d8d8d8;
        gap: 8px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: 600;
        width: 83px;
        }
        .filter{
        height: 56px;
        padding: 12px 24px 12px 24px;
        border-bottom: 1px solid #f0f0f0;
        }
        .menu{
        height: 40px;
        padding: 0px 24px 0px 24px;
        font-size: 14px;
        font-weight: 400;
        gap: 10px ;
        align-items: center;
        }
        .thongtin{
        color: #3b3b3b;
        }
        .thongtin:hover{
        color: #3b3b3b;
        }
        .hoadon{
        color: #b8b8b8;
        }
        .hoadon:hover{
        color: #3b3b3b;
        }
        /* css cho dropdown */
        .dropdown{
        list-style-type: circle;
        }
        a {
        text-decoration: none;
        color: #A67951;
        }
        .sidenav {
        font-size: 14px;
        }

        ul {
        background: #FFFFFF;
        margin: 0;
        padding-left: 0;
        }
        li {
        color: #a67951;
        background: #FFFFFF;
        display: block;
        float: left;
        padding: 1rem;
        position: relative;
        /* text-decoration: none; */
        transition-duration: 0.5s;
        width: 310px;
        }
        li a {
        color: #676767;
        }
        a:hover{
        color: #a67951;
        }
        li:hover {
        background: #FFFFFF;
        cursor: pointer;
        color: #A67951;
        }
       
        
        ul li:hover > ul,ul li ul:hover {
            visibility: visible;
            opacity: 1;
            display: block;
        }
        ul li ul li {
        clear: both;
        width: 100%;
        list-style-type: circle;
        }
        /* css slide ảnh */
        .slideshow-container {
        width: auto;
        position: relative;
        margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }
        .fade:not(.show) {
            opacity: 1;
        }
        /* Position the "next button" to the right */
        .next {
        right: 0;
        }
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }
        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }
        /* Number text (1/3 etc) */
        .numbertext {
        color: #ffffff;
        font-size: 16px;
        position: absolute;
        bottom: 12px;
        right: 34px;
        background: #26262699 60%;
        gap: 10px;
        width: 49px;
        height: 27px;
        padding: 2px 8px 2px 8px;
        }
        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 85px;
        width: 945px;
        margin: 0 2px;
        background-color: #bbb;
        /* border-radius: 50%; */
        display: inline;
        transition: background-color 0.6s ease;
        gap: 8px;
        }
        .active, .dot:hover {
        background-color: #717171;
        }
        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .7}
        to {opacity: 1}
        }
        /* css for information */
        .detail-info{
        width: 977px;
        padding: 24px 16px 24px 16px;
        gap: 32px;
        background: #ffffff;
        }
        .dot{
        background: #ffffff;
        }
        .dot:hover{
        background: #ffffff;
        }
       .roomnumber{
        font-size: 16px;
        margin-bottom: 0px;
       }
       .roomadd{
        font-size: 14px;
        margin-bottom: 0px;
       }
       .rating{
        font-size: 14px;
       }
       .star{
        display: flex;
        gap: 10px;
        width: 140px;
        border-right: 1px solid #f0f0f0;
       }
       .rate{
        width: 120px;
        border-right: 1px solid #f0f0f0;
       }
       .thanhtoan{
        width: 362px;
        height: 32px;
        background: #ff6666;
        gap: 10px;
        color: #ffffff;
       }
       .chiase {
        width: 103px;
        height: 40px;
        background: #ffffff;
        border: 1px solid #856141;
        color: #856141;
        font-weight: 600;
        margin-left: 140px;
        }
        .sodienthoai{
        padding-left: 9px;
        gap: 5px;
        width: 120px;
        height: 32px;
        border: 1px solid #856141;
        background: #ffffff;
        color: #856141;
        }
        .zalo{
        border: 1px solid #0097c7;
        background: #ffffff;
        color: #0097c7;
        font-weight: 600;
        height: 32px;
        width: 119px;
        display: flex;
        align-items: center;
        padding-left: 9px;
        }
        .buttons{
        height: 114px;
        display: inline-grid;
        gap: 37px;
        }
        .ddc{
        gap: 90px;
        font-size: 14px;
        }
        .ddc1{
        border-bottom: 1px solid #f0f0f0;
        }
        /* css cho phần đánh giá */
      
        .tongquan{
        margin-top: 10px;
        margin-right: -10px;
        padding-left: 16px;
        padding-top: 20px;
        width: 20%;
        border-right: 1px solid #d9d9d9;
        }
        .loc{
        background: #f8f8f8;
        height: 122px;
        }
        .thang100{
        margin-bottom: 0px;
        padding-left: 27px;
        font-size: 20px;
        font-weight: 600;
        }
        .thang1000{
        padding-left: 7px;
        }

        .rating1{
        border: 1px solid #e6e6e6;
        border-radius: 5px;
        color: #3b3b3b;
            
        }
        .person2{
        margin-left: 25px;
        }
        .tieude {
        padding-left: 5px;
        color: #3b3b3b;
        font-weight: 600;
        margin-top: 10px;
        }
        .thang1000{
        padding-left: 15px;
        margin-bottom: 0px;
        }
      
        .avatar{
        background: #ffffff;
        padding: auto;
        margin-top: 19px;
        margin-left: 15px;
        }
        .user5{
        background:#ffffff;
        padding-left: 5px;
        padding-right: 0;
        padding-bottom:0;
        padding-top: 15px;
        }
        .anh1{
        display: flex;
        }
        .sao5{
        margin-left: 15px;
        margin-bottom: 15px;
        }
        .star {
        padding-left: 20px;
        display: flex;
        gap: 2px;
        width: 140px;
        border-right: 1px solid #f0f0f0;
        }
        .lorem{
        margin-left: 15px;
        font-size: 16px;
        color: #3b3b3b;
        font-weight: 400;
        }
        .danhgia{
        width: 241px;
        height: 40px;
        gap: 10px;
        color: #ffffff;
        background: linear-gradient(101.94deg, #A67951 0%, #FFCA99 100%);
        padding-left: 65px;
        margin-left: 38%;
        font-weight: 600;
        }
        .binhluan{
        width: 241px;
        height: 40px;
        /* padding: 24px, 12px 24px 12px */
        border-radius: 5px;
        gap: 10px;
        color: #ffffff;
        background: linear-gradient(101.94deg, #A67951 0%, #FFCA99 100%);
        padding-left: 70px;
        margin-left: 38%;
        font-weight: 600;
        }

        .tieude1{
        font-weight: 600;
        }
        /* css cho popup chia sẻ */
        .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
        }

        /* The popup chat - hidden by default */
        
        .chat-popup {
        width: 219px;
        display: none;
        position: absolute;
        /* bottom: 0; */
        top: 695px;
        right: 19px;
        border: 3px solid #f1f1f1;
        z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        resize: none;
        min-height: 200px;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
        background-color: #ddd;
        outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
        background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
        opacity: 1;
        }
        .btnclose{
        width: 104px;
        height: 40px;
        background: #ffffff;
        border: 1px solid #856141;
        color: #856141;
        font-weight: 600;
        margin-left: 101px;
        bottom: 215px;
        /* display: flex; */
        position: absolute;
        }
        .chiase1{
        width: 180px;
        }
        .chiase2{
        width: 190px;
        }
        /* css cho section */
        .persontitle{
        font-size: 16px;
        font-weight: 600;
        }
        #your-name2{
        accent-color: #856141;
        width: 20px;
        height: 20px;
        }
        #your-name3{
        accent-color: #856141;
        width: 20px;
        height: 20px;
        }
        .form-lable1{
        margin-bottom: 3px;
        }
        /* css cho button */
        .modal-footer{
        border: none;
        justify-content: center;
        padding: 1.75rem;
        gap: 25px;
        }
        .btn-secondary{
        width: 234px;
        BORDER: 1px solid #A67951;
        height: 35px;
        border-radius: 5px;
        color: #856141;
        background: #FFFFFF;
        }
        .btn-secondary:hover {
        color: #856141;
        background-color: #ffffff;
        border-color: #856141;
        }
        .btn-primary{
        width: 234px;
        height: 35px;
        color: #FFFFFF;
        background: #d8d8d8;
        }
        .btn-primary:hover{
        background: #d8d8d8;
        }
        .btn-primary:focus{
        background: #d8d8d8;
        box-shadow: 0 0 0 0;
        }
        .btn-secondary:focus {
        color: #856141;
        background-color: #ffffff;
        border-color: #856141;
        box-shadow: 0 0 0 0.25rem rgba(130,138,145,.5);
        }
        /* css cho footer */
        .footer1{
        justify-content: space-evenly;
        margin-left: 70px;
        padding-top: 40px;
        height: 350px;
        }
        .footer2{
        background: #a67951;
        height: 40px;
        }
        #footer{
        background: #ffffff;
        }
        .a{
        color: #3b3b3b;
        font-weight:400;
        background: #FFFFFF;
        display: block;
        padding: 0rem;
        /* text-decoration: none; */
        width: 310px;
        }
        .a:hover{
        color: #3b3b3b;
        }
        .footercap{
        font-size: 14px;
        }
        /* responsive */
        @media only screen and (max-width : 389px) {
        *{
        font-size: 14px;
        }
        .footercap{
        font-size: 10px;
        }
        .textmenu{
        display: none !important;
        }
        .textmenu2 {
        display: flex !important;
        position: absolute;
        top: 80px;
        background: #ffffff;
        width: 100%;
        height: 40px;
        align-items: center;
        /* margin-left: 10px; */
        padding-left: 15px;
        gap: 10px;
        }
        .head-filter3{
        color: #3b3b3b;
        border-bottom: 1px solid #b8b8b8;
        height: 100%;
        padding-top: 10px;
        }
        .head-filter4{
        color: #b8b8b8;
        }
        .logo {
        margin-top: 5px;
        width: 100% !important;
        justify-content: space-between;
        margin-right: 30px;
        right: 23px;
        }
        .headmenu{
        display: flex !important;
        }
        aside{
        display: none;
        }
        .logobig{
        width: 145px;
        }
        section{
        width: 100%;
        right: 0px;
        margin-top: 0px; 
        top: 150px;
        }
        header{
        width: 100%;
        padding: 0px 0px 0px 15px;
        position: fixed;
        top: 0;
        z-index: 1;
        }
        .btn-secondary {
        width: 40%;
        BORDER: 1px solid #A67951;
        height: 35px;
        border-radius: 5px;
        color: #856141;
        background: #FFFFFF;
        }
        .btn-primary {
        width: 40%;
        height: 35px;
        color: #FFFFFF;
        background: #d8d8d8;
        }
        .wrap {
        width: 90%;
        position: sticky;
        /* height: 800px; */
        margin-left: 5%;
        }
        #footer{
        width: 100%;
        
        }
        .footer1 {
        justify-content: space-evenly;
        margin-left: 0px;
        padding-top: 40px;
        height: auto;
        flex-wrap: wrap;
        background: #ffffff;
        padding: 15px;
        }
        .user {
        display: none !important;
        }
       
        .a {
        color: #3b3b3b;
        font-weight: 400;
        background: #FFFFFF;
        display: block;
        padding: 0rem;
        font-size: 14px;
        padding-top: 0px;
        width: 100% !important;
        }
        }
        
        @media only screen and (min-width : 390px) and (max-width: 766px){
            *{
        font-size: 14px;
        }
        .footercap{
        font-size: 10px;
        }
        .textmenu{
        display: none !important;
        }
        .textmenu2 {
        display: flex !important;
        position: absolute;
        top: 80px;
        background: #ffffff;
        width: 100%;
        height: 40px;
        align-items: center;
        /* margin-left: 10px; */
        padding-left: 15px;
        gap: 10px;
        }
        .head-filter3{
        color: #3b3b3b;
        border-bottom: 1px solid #b8b8b8;
        height: 100%;
        padding-top: 10px;
        }
        .head-filter4{
        color: #b8b8b8;
        }
        .logo {
        margin-top: 5px;
        width: 100% !important;
        justify-content: space-between;
        margin-right: 30px;
        right: 23px;
        }
        .headmenu{
        display: flex !important;
        }
        aside{
        display: none;
        }
        .logobig{
        width: 145px;
        }
        section{
        width: 100%;
        right: 0px;
        margin-top: 0px; 
        top: 150px;
        }
        header{
        width: 100%;
        padding: 0px 0px 0px 15px;
        position: fixed;
        top: 0;
        z-index: 1;
        }
        .btn-secondary {
        width: 40%;
        BORDER: 1px solid #A67951;
        height: 35px;
        border-radius: 5px;
        color: #856141;
        background: #FFFFFF;
        }
        .btn-primary {
        width: 40%;
        height: 35px;
        color: #FFFFFF;
        background: #d8d8d8;
        }
        .wrap {
        width: 90%;
        position: sticky;
        /* height: 800px; */
        margin-left: 5%;
        }
        #footer{
        width: 100%;
        }
        .footer1 {
        justify-content: space-evenly;
        margin-left: 0px;
        padding-top: 40px;
        height: auto;
        flex-wrap: wrap;
        background: #ffffff;
        padding: 15px;
        }
        .user {
        display: none !important;
        }
        .a {
        color: #3b3b3b;
        font-weight: 400;
        background: #FFFFFF;
        display: block;
        padding: 0rem;
        font-size: 14px;
        padding-top: 0px;
        width: 100% !important;
        }
        }
        @media only screen and (min-width : 767px) and (max-width: 1024px){
        *{
        font-size: 10px;
        }
        .footercap{
        font-size: 10px;
        }
        body{
        overflow-x: hidden;
        }
        .logobig{
        width: 145px;
        }
        aside {
        margin-top: 0px;
        height: auto;
        width: 35%;
        position: absolute;
        z-index: 1;
        top: 100px;
        left: 10px;
        background-color: #FFFFFF;
        overflow-x: hidden;
        padding-top: 0px;
        }
        .xacthuc {
        margin: auto;
        width: 100%;
        background: #D9F2E9;
        color: #00A86B;
        font-weight: 600;
        font-size: 14px;
        height: 40px;
        border: none;
        gap: 8px;
        padding-left: 0px;
        margin-left: 0px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        }
        section {
        width: 60%;
        right: 12px;
        margin-top: 0px;
        top: 100px;
        }
        header{
        width: 100%;
        padding: 0px 0px 0px 10px;
        position: fixed;
        top: 0;
        z-index: 1;
        height: 70px;
        }
        .btn-secondary {
        width: 40%;
        BORDER: 1px solid #A67951;
        height: 35px;
        border-radius: 5px;
        color: #856141;
        background: #FFFFFF;
        }
        .btn-primary {
        width: 40%;
        height: 35px;
        color: #FFFFFF;
        background: #d8d8d8;
        }
        .wrap{
        width: 100%;
        position: sticky;
        height: 800px;
        }
        #footer{
        width: 100%;
        
        }
        .footer1 {
        justify-content: space-evenly;
        margin-left: 0px;
        padding-top: 40px;
        height: 350px;
        }
        .user {
        display: none !important;
        }
        
        .a {
        color: #3b3b3b;
        font-weight: 400;
        background: #FFFFFF;
        display: block;
        padding: 0rem;
        width: 56px !important;
        font-size: 8px;
        padding-top: 5px;
        }
        }
        
    </style>
</head>
<body>
<?php
  include("header.php");
?> 
<div class="container1 d-flex justify-content-center">
<section class="">
    <div class="bg-white ">
        <h1 class="persontitle p-3 mb-3  " style="color:#3b3b3b;border-bottom: 1px solid #e6e6e6">Payment Detail</h1>
        <div class="w-100 d-flex justify-content-center mt-3 mb-5">
        <img class=""src="{{asset('images/tammn/user.png')}}" alt="">
        </div>
        <form>
            
            <div class=" col-12 px-2">
                    <div class="form-control border-0">
                        <label for="your-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                    </div>
            </div>
            <div class="d-flex flex-wrap ">
                <div class="col-md-6 col-12 px-2">
                    <div class="form-control border-0">
                        <label for="your-name" class="form-label">Email</label>
                        <input type="email" class="form-control" id="your-name" name="email" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-2">
                      <div class="form-control border-0 ">
                        <label for="your-name" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="your-name" name="phone" placeholder="" required>
                      </div>
                </div> 
            </div> 
            <div class="d-flex flex-wrap ">
                <div class="col-md-6 col-12 px-2">
                    <div class="form-control border-0">
                        <label for="your-name" class="form-label">Birthday</label>
                        <input type="text" class="form-control" id="datepicker" name="birthday" placeholder="" required>
                    
                    </div>
                </div>
                <div class=" px-2">
                      <div class="form-control border-0 ">
                        
                        <label for="your-name" class="form-label">Pay by</label>
                            <div class="d-flex gap-2 pt-2 align-items-center">
                                <input type="radio" class="form-control1" id="your-name2" name="gender" placeholder="Nam" required>
                                <label for="your-name2" class="form-label1" >Cash</label>
                                <input type="radio" class="form-control1" id="your-name3" name="gender" placeholder="Nữ"required>
                                <label for="your-name2" class="form-label1" >Credit</label>
                            </div>
                      </div>
                </div> 
            </div> 
            <div class=" col-12 px-2">
                    <div class="form-control border-0">
                        <label for="your-name" class="form-label">Address</label>
                        <input type="text" class="form-control" id="your-name" name="add" placeholder="" required>
                    </div>
            </div>

            <div class="modal-footer">
                        <button  type="reset" class="btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn-primary rounded border-0">Save</button>
            </div>
        </form>
       
    
    </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function() {
    $('.btn-primary').on('click', function() {
        let name = $('input[name=name]').val();
        var regexname = /^[a-zA-ZÃ€ÃÃ‚ÃƒÃˆÃ‰ÃŠÃŒÃÃ’Ã“Ã”Ã•Ã™ÃšÄ‚ÄÄ¨Å¨Æ Ã Ã¡Ã¢Ã£Ã¨Ã©ÃªÃ¬Ã­Ã²Ã³Ã´ÃµÃ¹ÃºÄƒÄ‘Ä©Å©Æ¡Æ¯Ä‚áº áº¢áº¤áº¦áº¨áºªáº¬áº®áº°áº²áº´áº¶áº¸áººáº¼á»€á»€á»‚áº¾Æ°Äƒáº¡áº£áº¥áº§áº©áº«áº­áº¯áº±áº³áºµáº·áº¹áº»áº½á»á»á»ƒáº¿á»„á»†á»ˆá»Šá»Œá»Žá»á»’á»”á»–á»˜á»šá»œá»žá» á»¢á»¤á»¦á»¨á»ªá»…á»‡á»‰á»‹á»á»á»‘á»“á»•á»—á»™á»›á»á»Ÿá»¡á»£á»¥á»§á»©á»«á»¬á»®á»°á»²á»´Ãá»¶á»¸á»­á»¯á»±á»³á»µá»·á»¹\s\W|_]+$/;
        if (name == "") {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Name cant be left empty',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        if(!regexname.test(name)) {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Wrong type of name',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        // validate email
        let email = $('input[name=email]').val();
        var regexEmail = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
        if (email == "") {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Type your email here',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        if(!regexEmail.test(email)) {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Wrong Email type ',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        // validate số điện thoại
        let phone = $('input[name=phone]').val()
        var numberRegex = /^(?:-(?:[1-9](?:\d{0,2}(?:,\d{3})+|\d*))|(?:0|(?:[1-9](?:\d{0,2}(?:,\d{3})+|\d*))))(?:.\d+|)$/;;
        if(phone == ""){
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Type your phone number',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        if(phone.length != 10){
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Phone number contains 10 single number',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        if(!numberRegex.test(phone)) {
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Wrong kind of phone number',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        // validate ngày sinh
        let birthday = $('input[name=birthday]').val()
        var numberRegex = /^(?:-(?:[1-9](?:\d{0,2}(?:,\d{3})+|\d*))|(?:0|(?:[1-9](?:\d{0,2}(?:,\d{3})+|\d*))))(?:.\d+|)$/;;
        if(birthday == ""){
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Type your birthday',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
      
        

        var gender = document.getElementById("your-name2");
        var gender1 = document.getElementById("your-name3");
        if(!gender.checked && !gender1.checked ) {   
            Swal.fire({
            icon: "error",
            title: "Fail",
            text: 'Choose option payment',
            confirmButtonColor: '#84371A',
            });
            return false;
        } else {  
          
        }
       
        let address = $('input[name=add]').val()
        
        if(address == ""){
            Swal.fire({
                icon: "error",
                title: "Fail",
                text: 'Please type your address',
                confirmButtonColor: '#84371A',
            });
            return false;
        }
        
       if(email != "" && name!= "" && address != "" && birthday != "" && phone != "" ){
            Swal.fire({
                icon: "success",
                title: "Sucessful",
                text: 'Valid Information',
                confirmButtonColor: '#84371A',
            });
            return false;
       }
    })
    
})

    // popup 
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    document.getElementById("send").style.display = "none"
    }

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    
    }
    $( function() {
    $( "#datepicker" ).datepicker();
    } );
    </script>
</body>
</html>