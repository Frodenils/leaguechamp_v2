@extends('layouts.main')

@section('content')
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            min-height: 100vh;
            background-image: url('images/background.jpg');
        }

        .container1 {
            height: 350px;
            width: 350px;
            background: #451055;
            position: relative;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 10px black;
            transition: 3s all;
        }

        .container1 div {
            height: 50%;
            width: 200px;
            clip-path: polygon(100% 0, 50% 100%, 0 0);
            transform: translateX(-50%);
            transform-origin: bottom;
            position: absolute;
            left: 21%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-family: monospace;
            font-weight: 1000;
            color: #aaaaaa;
            writing-mode: vertical-rl;
        }

        .container1 .one {
            background: #8b21ac;
            left: 50%;
        }

        .container1 .two {
            background: #451055;
            transform: rotate(60deg);
        }

        .container1 .three {
            background: #8b21ac;
            transform: rotate(120deg);
        }

        .container1 .four {
            background: #451055;
            transform: rotate(180deg);
        }

        .container1 .five {
            background: #8b21ac;
            transform: rotate(240deg);
        }

        .container1 .six {
            background: #451055;
            transform: rotate(300deg);
        }

        .mid {
            height: 25px;
            width: 25px;
            border-radius: 50%;
            position: absolute;
            background: #451055;
        }

        #spin {
            height: 60px;
            width: 200px;
            background: #451055;
            position: absolute;
            margin-top: 600px;
            font-size: 30px;
            color: white;
            font-weight: 1000;
            letter-spacing: 4px;
            border: 1px solid white;
            cursor: pointer;
            box-shadow: 0 5px 10px black;
            transition: 0.2s all;
        }

        #spin:hover {
            box-shadow: none;
        }

        .stoper {
            height: 50px;
            width: 40px;
            background: #ffd600;
            position: absolute;
            clip-path: polygon(100% 0, 50% 100%, 0 0);
            margin-top: -350px;
        }
    </style>
    <br>
    <div class="container1">
        <div class="one"><img src="images/{{$val1}}Square.webp" width="60" height="60"></div>
        <div class="two"><img src="images/{{$val2}}Square.webp" width="60" height="60"></div>
        <div class="three"><img src="images/{{$val3}}Square.webp" width="60" height="60"></div>
        <div class="four"><img src="images/{{$val4}}Square.webp" width="60" height="60"></div>
        <div class="five"><img src="images/{{$val5}}Square.webp" width="60" height="60"></div>
        <div class="six"><img src="images/{{$val6}}Square.webp" width="60" height="60"></div>
    </div>
    <span class="mid"></span>
    <button id="spin">Spin</button>
    <div class="stoper"></div>
    <script src="script.js"></script>
    <script>
        let container1 = document.querySelector(".container1");
        let btn = document.getElementById("spin");
        let number = Math.ceil(Math.random() * 10000);

        let flash = document.querySelector(".container1 div");


        btn.onclick = function() {
            container1.style.transform = "rotate(" + number + "deg)";
            number += Math.ceil(Math.random() * 10000);

        }
    </script>
@endsection
