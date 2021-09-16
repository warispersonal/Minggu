<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        @font-face {
            font-family: "manrope";
            src: url("{{asset('email/font/Manrope-Regular.ttf')}}");
        }
        *{
            font-family: "manrope";
        }
        .img-fluid {
            max-width: 100%;
        }

        .mail-contanier {
            text-align: center;
        }
        .mail-contanier p{
            font-size: 1.5rem;
        }
        .mail-contanier h1{
            font-size: 3rem;
        }
        .icons {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 15px;
        }
        .icons a{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid black;
            font-size: 40px;
            color: black;
            text-decoration: none;
            margin: 0px 10px;
        }
        @media (max-width:768px){
            .icons a{
                width: 50px;
                height: 50px;
                font-size: 25px;
                margin: 0px 5px;
            }
        }
    </style>
</head>

<body>
<div class="mail-contanier">
    <img src="{{asset('email/header.jpg')}}" class="img-fluid" alt="">
    <h1>Hi, <span class="name">{{$user->name}}</span></h1>
    <p>Ini pesana daripada Minguu Sham Digital. <br> Tahniah, anda adalah pemenang Peradua Cabutan Bertuah
        Kamil!<br></p>
    <p>Anda akan menerima <strong>e-baucar Lazada bernilai RM50. </strong> <br> Sila tunggu e-mel daripada kami untuk kod lazada anda.</p>
    <div class="icons">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fas fa-link"></i></a>
        <a href=""><i class="fab fa-youtube"></i></a>
        <a href=""><i class="fab fa-whatsapp"></i></a>
    </div>
</div>
</body>

</html>
