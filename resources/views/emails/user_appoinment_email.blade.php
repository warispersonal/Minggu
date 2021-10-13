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
            padding: 10px;
        }
        @media (max-width:768px){
            .icons a{
                width: 50px;
                height: 50px;
                font-size: 25px;
                margin: 0px 5px;
                padding: 5px;
            }
            a > img{
                padding:0px !important;
            }
        }
    </style>
</head>

<body>
<div class="mail-contanier">
    <img src="{{asset('email/header.jpg')}}" class="img-fluid" alt="">
    <h1>Name: <span class="name">{{$serviceAdvisor->name}}</span></h1>
    <h1>Email: <span class="name">{{$serviceAdvisor->email}}</span></h1>
    <h1>Phone Number: <span class="name">{{$serviceAdvisor->phone_number}}</span></h1>
    <h1>Bank: <span class="name">{{$serviceAdvisor->bank}}</span></h1>
    <h1>Topic Interest: <span class="name">{{$serviceAdvisor->topic_interest}}</span></h1>
    <h1>Date: <span class="name">{{$serviceAdvisor->date}}</span></h1>
    <h1>Time: <span class="name">{{$serviceAdvisor->time}}</span></h1>
    <h1>Postcode: <span class="name">{{$serviceAdvisor->post_code}}</span></h1>
    <p>Ini pesana daripada Minggu Saham Digital. <br> Tahniah! Anda telah berjaya mendaftar untuk Minggu Saham Digital 2021.<br></p>
    <p>Sila lawati laman web dan media sosial kami untuk mengetahui lebih lanjut tentang peraduan-peraduan dan program-program langsung kami tahun ini.</p>
    <p>Jumpa anda di sana!</p>
    <div class="icons" style="width: max-content; margin: auto;">
        <a href="https://www.facebook.com/minggusahamdigital"><img src="{{asset('socialicon/fb.png')}}" style="object-fit: contain; width: 100%; padding: 15px"></a>
        <a href="https://www.instagram.com/minggusahamdigital/"><img src="{{asset('socialicon/insta.png')}}" style="object-fit: contain; width: 100%; padding: 15px"></a>
        <a href="https://www.minggusahamdigital.com.my"><img src="{{asset('socialicon/link.png')}}" style="object-fit: contain; width: 100%; padding: 15px"></a>
        <a href="https://www.youtube.com/channel/UCoNCjruylHYpwBYkIvRwClA"><img src="{{asset('socialicon/youtube.png')}}" style="object-fit: contain; width: 100%; padding: 15px"></a>
        <a href="https://www.tiktok.com/@minggusahamdigital"><img src="{{asset('socialicon/tiktok.png')}}" style="object-fit: contain; width: 100%; padding: 15px"></a>
    </div>
</div>
</body>

</html>
