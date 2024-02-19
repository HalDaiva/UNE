<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNE</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100;400;600;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url("background.jpg");
            /*background-position: center;*/
            background-size: cover;
            /*background-repeat: no-repeat;*/
        }
        .material-symbols-outlined {
            font-variation-settings:
                    'FILL' 0,
                    'wght' 650,
                    'GRAD' 0,
                    'opsz' 24
        }
        #myCard {
            display: flex;

            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }
        #p2Card {
            display: flex;
            position: fixed;
            top: 0;
            left: 20px;
            z-index: 10;
        }
        #p3Card {
            display: flex;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }
        #p4Card {
            display: flex;
            position: fixed;
            top: 0;
            right: 20px;
            z-index: 10;
        }
        #drawnCard {
            display: flex;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }
        #stackCard {
            display: flex;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(150%, -50%);
        }

        #chooseColor {
            display: none;
            position: fixed;
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
        }

        #skip {
            display: none;
            position: fixed;
            bottom: 35%;
            left: 50%;
            transform: translateX(-50%);
        }

        .color {
            width: 70px;
            height: 70px;
            margin-inline: 15px;
            cursor: pointer;
            transition: transform 0.5s ease;
        }
        .color:hover {
            transform: translateY(-15px);
        }
        .card {
            position: relative;
            width: 70px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px;
            margin-inline: -15px;
            background-color: white;
            border-radius: 15px;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 50px;
            transition: transform 0.2s, color 0.2s, border-color 0.2s, box-shadow 0.5s;
            /*z-index: 10;*/
        }
        .flip {
            color: rgba(0, 0, 0, 0%) !important;
            border: red solid 8px !important;
            background-image: url("une.png") !important;
            background-size: cover;
            z-index: 1;
        }
        .back {
            color: rgba(0, 0, 0, 0%) !important;
            border: red solid 8px !important;
            background-color: #1e1e1e !important;
            background-image: url("une.png") !important;
            background-size: cover;
            z-index: 1;
            /*transition: box-shadow 0.5s;*/
        }

        #drawnCard > .card {
            margin: -43px;

            /*transform: translate(0, calc(50vh - 78px));*/
            /*transform: translateX(-42vw);*/
        }
        .playable {
            cursor: pointer;
            transition: transform 0.5s ease;
            will-change: transform;
        }
        .playable:hover {
            transform: translateY(-15px);
        }
        .unplayable {
            /*background-color: #b2b2b2;*/
            filter: brightness(40%);
            will-change: transform;
        }
        .a {
            color: red;
            border: red solid 8px;
        }
        .b {
            color: green;
            border: green solid 8px;
        }
        .c {
            color: #ffc100;
            border: #ffc100 solid 8px;
        }
        .d {
            color: blue;
            border: blue solid 8px;
        }
        .z {
            color: black;
            border: black solid 8px;
        }
        #viewButton {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
        #profile1 {
            position: absolute;
            left: 10px;
            bottom: 10px;
        }
        #profile2 {
            position: absolute;
            top: 160px;
            left: 10px;
        }
        #profile3 {
            position: absolute;
            top: 160px;
            left: 50%;
            transform: translateX(-50%);
        }
        #profile4 {
            position: absolute;
            top: 160px;
            right: 10px;
        }
        img {
            border: 7px #afb4b8 solid;
            border-radius: 20px;
            transition: box-shadow 0.5s;
        }
        #alert {
            color: #ffd600;
            font-size: 100px;
            font-weight: 800;
            -webkit-text-stroke: medium black;
            position: fixed;
            top: 50%;
            right: 60%;
            /*left: 40vw;*/
            transform: translate(0, -50%);
        }
        #alert > div {
            position: static;
            transition: transform 1s ease-out, opacity 1s;
            /*top: 0;*/
            /*left: 0;*/
        }
        #wins {
            display: none;
        }
        .block {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 50%);
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100;
        }
        .popup {
            background-color: white;
            width:600px;
            height: 200px;
            border-radius: 20px;
            text-align: center;
            padding: 50px;
            color: red;
            font-size: 60px;
            position: relative;
        }
        .popup > button {
            cursor: pointer;
            width: calc(100% - 40px);
            height: 50px;
            border-radius: 10px;
            border: 0;
            background-color: mediumpurple;
            color: white;
            font-size: 20px;
            position: absolute;
            bottom: 20px;
            left: 20px;
        }
        .popup > button:hover, .popup > button:active {
            background-color: rebeccapurple;
        }
        .skipped {
            display: none;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%) scale(180%, 180%);
            transition: transform 0.3s ease-out, opacity 0.4s;
            opacity: 100%;
            top: 50%;
            color: #ffd600;
            font-size: 100px;
            font-weight: 800;
            -webkit-text-stroke: medium black;
        }
    </style>
</head>
<body>

<div id="myCard"></div>
<div id="profile1"><img src="profile.jpg" alt="p2" width="90px"><div class="skipped" id="skip1">
        <span class='material-symbols-outlined' style='font-size: 90px'>block</span>
    </div></div>
<div id="p2Card"></div>
<div id="profile2"><img src="profile.jpg" alt="p2" width="90px"><div class="skipped" id="skip2">
        <span class='material-symbols-outlined' style='font-size: 90px'>block</span>
    </div></div>
<div id="p3Card"></div>
<div id="profile3"><img src="profile.jpg" alt="p2" width="90px"><div class="skipped" id="skip3">
        <span class='material-symbols-outlined' style='font-size: 90px'>block</span>
    </div></div>
<div id="p4Card"></div>
<div id="profile4"><img src="profile.jpg" alt="p2" width="90px"><div class="skipped" id="skip4">
        <span class='material-symbols-outlined' style='font-size: 90px'>block</span>
    </div></div>

<div id="drawnCard"></div>
<div id="alert"></div>

<div id="chooseColor">
    <div class="color" style="background-color: red" onclick="pickColor('a')"></div>
    <div class="color" style="background-color: green" onclick="pickColor('b')"></div>
    <div class="color" style="background-color: #ffc100" onclick="pickColor('c')"></div>
    <div class="color" style="background-color: blue" onclick="pickColor('d')"></div>
</div>
<div id="wins">
    <div class="block">
        <div class="popup">
            <span id="winner"></span>
            <br>
            <button onclick="location.reload()">Play Again</button>
        </div>
    </div>
</div>

<div id="skip" onclick="skip()"><button>skip</button></div>

<div id="stackCard">
    <div class="card back">
        UNE
    </div>
    <div class="card back playable" style="position: absolute" onclick="drink(1)" id="drink">
        UNE
    </div>

</div>

<button onclick="viewStack()" id="viewButton">Stack</button>

<script>


    let stack = ["a1", "a2", "a3", "a4", "a5", "a6", "a7", "a8", "a9", "a0", "ar", "as", "zw",
        "d1", "d2", "d3", "d4", "d5", "d6", "d7", "d8", "d9", "d0", "dr", "ds", "zw",
        "c1", "c2", "c3", "c4", "c5", "c6", "c7", "c8", "c9", "c0", "cr", "cs", "zw",
        "b1", "b2", "b3", "b4", "b5", "b6", "b7", "b8", "b9", "b0", "br", "bs", "zw"]
    ;
    let drawn = [];
    let p1 = [];
    let p2 = [];
    let p3 = [];
    let p4 = [];

    var played = false;


    shuffleStack(stack);

    for (let i = 0; i < 7; i++) {
        p1.push(stack.pop());
        p2.push(stack.pop());
        p3.push(stack.pop());
        p4.push(stack.pop());
    }

    // alert(p1);

    render();

    // document.querySelector("#stackCard").firstElementChild.style.boxShadow = "0 0 0px 0px #d9b500";

    function render() {
        p1.sort();
        p2.sort();
        p3.sort();
        p4.sort();

        document.querySelector("#myCard").innerHTML = "";
        document.querySelector("#p2Card").innerHTML = "";
        document.querySelector("#p3Card").innerHTML = "";
        document.querySelector("#p4Card").innerHTML = "";

        for (let i in p1) {
            const card = document.createElement("div");

            card.innerHTML = translateCard(p1[i]);
            card.classList.add("card");
            card.classList.add(p1[i]);
            // card.classList.add(p1[i]);

            card.classList.add(p1[i].charAt(0));

            document.querySelector("#myCard").appendChild(card);
        }

        for (let i in p2) {
            const card = document.createElement("div");

            card.innerHTML = translateCard(p2[i]);
            card.classList.add("card");
            card.classList.add("flip");
            card.classList.add(p2[i]);

            card.classList.add(p2[i].charAt(0));

            document.querySelector("#p2Card").appendChild(card);
        }

        for (let i in p3) {
            const card = document.createElement("div");

            card.innerHTML = translateCard(p3[i]);
            card.classList.add("card");
            card.classList.add("flip");
            card.classList.add(p3[i]);

            card.classList.add(p3[i].charAt(0));

            document.querySelector("#p3Card").appendChild(card);
        }

        for (let i in p4) {
            const card = document.createElement("div");

            card.innerHTML = translateCard(p4[i]);
            card.classList.add("card");
            card.classList.add("flip");
            card.classList.add(p4[i]);

            card.classList.add(p4[i].charAt(0));
            document.querySelector("#p4Card").appendChild(card);
        }

    }

    let turn = 1;


    let drawFirst = stack.pop();

    while (true) {
        if (drawFirst.charAt(1) === "2" || drawFirst.charAt(1) === "3" || drawFirst.charAt(1) === "r" || drawFirst.charAt(1) === "s"  || drawFirst.charAt(1) === "w") {
            stack.unshift(drawFirst);
            drawFirst = stack.pop();
        } else {
            break;
        }
    }

    drawn.push(drawFirst);
    draw(drawFirst);
    // alert("wow");

    // enableCard();

    function enableCard() {
        for (let i in p1) {
            let card = document.querySelector("#myCard").children[i];

            if ((drawn[drawn.length - 1].charAt(1) === "2" || drawn[drawn.length - 1].charAt(1) === "3") && inPlus) {
                if (drawn[drawn.length - 1].charAt(1) === p1[i].charAt(1)) {
                    card.classList.remove("unplayable");
                    card.classList.add("playable");
                    card.setAttribute("onclick", "myDraw('" + card.classList.item(1) + "')");
                } else {
                    card.classList.remove("playable");
                    card.classList.add("unplayable");
                }
            } else {
                if (drawn[drawn.length - 1].charAt(1) === p1[i].charAt(1) || drawn[drawn.length - 1].charAt(0) === p1[i].charAt(0) || p1[i].charAt(1) === "w"){
                    card.classList.remove("unplayable");
                    card.classList.add("playable");
                    card.setAttribute("onclick", "myDraw('" + card.classList.item(1) + "')");
                } else {
                    card.classList.remove("playable");
                    card.classList.add("unplayable");
                }
            }
        }
    }

    function disableDrink() {
        document.querySelector("#drink").classList.remove("playable");
        document.querySelector("#drink").removeAttribute("onclick");
    }

    function enableDrink() {
        document.querySelector("#drink").classList.add("playable");
        document.querySelector("#drink").setAttribute("onclick", "drink(1)");
    }

    function enableSkip() {
        document.querySelector("#skip").style.display = "block";
    }

    function disableSkip() {
        document.querySelector("#skip").style.display = "none";
    }

    function shout(word) {
        const alert = document.createElement("div");
        alert.innerHTML = word;
        document.querySelector("#alert").appendChild(alert);
        setTimeout(function () {
            document.querySelector("#alert").firstElementChild.style.transform = "translateY(-100px)";
            document.querySelector("#alert").firstElementChild.style.opacity = "0";
        }, 1);
        setTimeout(function () {
            document.querySelector("#alert").firstElementChild.remove();
        }, 1000);
    }


    async function draw(code, player) {

        if (code.charAt(1) === "2") {
            plus += 2;
            inPlus = true;
            shout("+" + plus);
        } else if (code.charAt(1) === "3") {
            plus += 3;
            inPlus = true;
            shout("+" + plus);

        } else  if (code.charAt(1) === "r") {
            if (reverse) {
                reverse = false;
            } else {
                reverse = true;
            }
            shout("REVERSE");

        } else if (code.charAt(1) === "s") {
            let skippedPlayer = 0;
            if (reverse) {
                turn--;
            } else {
                turn++;
            }

            skippedPlayer = turn;
            if (turn === 5) {
                skippedPlayer = 1;
            } else if (turn === 0) {
                skippedPlayer = 4;
            }

            document.querySelector("#skip" + skippedPlayer).style.display = "block";
            setTimeout(function () {
                document.querySelector("#skip" + skippedPlayer).style.transform = "translate(-50%, -50%) scale(100%, 100%)";
            }, 1);
            setTimeout(function () {
                document.querySelector("#skip" + skippedPlayer).style.opacity = "0%";
            }, 1500);
            setTimeout(function () {
                document.querySelector("#skip" + skippedPlayer).style.display = "none";
                document.querySelector("#skip" + skippedPlayer).style.opacity = "100%";
            }, 2500);

            shout("SKIP");
        }

        const card = document.createElement("div");
        card.innerHTML = translateCard(code);
        card.classList.add("card");
        card.classList.add(code.charAt(0));
        if (player === 1) {
            card.style.transform = "translate(0, calc(50vh - 78px))";
        } else if (player === 2) {
            card.style.transform = "translate(calc(-50vw + 49px), calc(-50vh + 78px))";
        } else if (player === 3) {
            card.style.transform = "translate(0, calc(-50vh + 78px))";
        } else if (player === 4) {
            card.style.transform = "translate(calc(50vw - 49px), calc(-50vh + 78px))";
        }

        document.querySelector("#drawnCard").appendChild(card);
        // if (turn == 1) {
        setTimeout(function () {
            document.querySelector("#drawnCard").lastElementChild.style.transform = "translate(0, 0)"
        }, 1);
        // }

        selectAdjustCard();
    }

    var colorResolve;
    let colorPromise;

    async function myDraw(code) {
        let value = p1.indexOf(code);
        p1.splice(value, 1);
        document.querySelector("#myCard").querySelector("." + code).remove();
        if (code === "zw") {
            disableCard();
            disableSkip();
            document.querySelector("#chooseColor").style.display = "flex";
            colorPromise = new Promise(function (resolve, reject) {
                colorResolve = resolve;
            });
        }
        drawn.push(code);
        draw(code, 1);
        if (code === "zw") {
            await colorPromise;
            document.querySelector("#chooseColor").style.display = "none";
        }
        playedResolve();
    }

    function pickColor(color) {
        drawn.pop();
        drawn.push(color + "w");
        document.querySelector("#drawnCard").lastElementChild.classList.remove("z");
        document.querySelector("#drawnCard").lastElementChild.classList.add(color);
        colorResolve();
    }



    var reverse = false;





    var playedResolve;
    let playedPromise;

    turnLoop();
    // playedPromise.then(
    //     function (value) {
    //         alert("wowaaaa");}
    // )

    // LOOP HERE

    async function turnLoop() {
        let currentTurn = 1;
        while (true) {

            playedPromise  = new Promise(function (resolve, reject) {
                playedResolve = resolve;
            });

            currentTurn = turn;

            // if (empty(turn) !== false) {
            //     document.querySelector("#wins").style.display = "block";
            //     document.querySelector("#winner").innerHTML = empty(turn);
            // } else {
            go(turn);
            // }



            await playedPromise;

            if (empty(currentTurn) !== false) {
                break;
            }

            // if (drawn[drawn.length - 1].charAt(1) === "r") {
            //     if (reverse === true) {
            //         reverse = false;
            //     } else {
            //         reverse = true;
            //     }
            // }
            // if (drawn[drawn.length - 1].charAt(1) === "s") {
            //     if (reverse) {
            //         turn--;
            //     } else {
            //         turn++;
            //     }
            // }

            // alert("next");

            if (reverse) {
                turn--;
            } else {
                turn++;
            }

            if (turn === 5) {
                turn = 1;
            } else if (turn === 0) {
                turn = 4;
            } else if (turn === 6) {
                turn = 2;
            } else if (turn === -1) {
                turn = 3;
            }
        }
        setTimeout(function () {
            document.querySelector("#wins").style.display = "block";
            document.querySelector("#winner").innerHTML = empty(currentTurn);
        }, 500)
    }

    function selectAdjustCard() {
        let p2Card = document.querySelector("#p2Card");
        let p3Card = document.querySelector("#p3Card");
        let p4Card = document.querySelector("#p4Card");
        adjustCard("#p2Card", p2Card.childElementCount);
        adjustCard("#p3Card", p3Card.childElementCount);
        adjustCard("#p4Card", p4Card.childElementCount);
    }

    function adjustCard(id, num) {
        if (num <= 9) {
            for (let i = 1; i <= num; i++) {
                document.querySelector(id).querySelector(":nth-child(" + i +")").style.marginInline = '-15px';
            }
        }
        if (num > 9) {
            for (let i = 1; i <= num; i++) {
                document.querySelector(id).querySelector(":nth-child(" + i +")").style.marginInline = '-22px';
                document.querySelector(id).firstChild.style.marginLeft = '-15px';
                document.querySelector(id).lastChild.style.marginRight = '-15px';
            }
        }
        if (num > 12) {
            for (let i = 1; i <= num; i++) {
                document.querySelector(id).querySelector(":nth-child(" + i +")").style.marginInline = '-30px';
                document.querySelector(id).firstChild.style.marginLeft = '-15px';
                document.querySelector(id).lastChild.style.marginRight = '-15px';
            }
        }

        // if (num > 12) {
        //     for (let i = 1; i <= num; i++) {
        //         document.querySelector(id).querySelector(":nth-child(" + i +")").style.marginInline = '-25px';
        //     }
        // }

    }


    function drink(player) {
        let drunk = stack.pop();

        const card = document.createElement("div");
        card.classList.add("card");
        card.classList.add("back");
        card.style.position = 'absolute';
        document.querySelector("#stackCard").insertBefore(card, document.querySelector("#stackCard").firstChild);
        // disableSuggestion();

        if (player === 1) {

            p1.push(drunk);
            render();
            enableCard();
            disableDrink();
            enableSkip();

            setTimeout(function () {
                document.querySelector("#stackCard").firstElementChild.style.transform = "translate(-112px, calc(50vh - 78px))";
            }, 1);

            disableSuggestion();

        } else if (player === 2) {
            p2.push(drunk);
            render();
            disableCard();

            setTimeout(function () {
                document.querySelector("#stackCard").firstElementChild.style.transform = "translate(calc(-50vw - 64px), calc(-50vh + 78px))";
            }, 1);

        } else if (player === 3) {
            p3.push(drunk);
            render();
            disableCard();

            setTimeout(function () {
                document.querySelector("#stackCard").firstElementChild.style.transform = "translate(-112px, calc(-50vh + 78px))";
            }, 1);

        } else if (player === 4) {
            p4.push(drunk);
            render();
            disableCard();

            setTimeout(function () {
                document.querySelector("#stackCard").firstElementChild.style.transform = "translate(calc(50vw - 160px), calc(-50vh + 78px))";
            }, 1);

        }

        setTimeout(function () {
            document.querySelector("#stackCard").firstElementChild.remove();
        }, 100);

        selectAdjustCard();

        if (stack.length <= 3) {
            let drawnCard = document.querySelector("#drawnCard");
            while (drawn.length > 1) {
                let card = drawn.shift();
                if (card.charAt(1) == "w") {
                    card = "zw";
                }
                stack.push(card);
                drawnCard.removeChild(drawnCard.firstChild);
            }
            shuffleStack(stack);
        }

    }

    let plus = 0;
    let inPlus = false;

    function skip() {
        playedResolve();
    }

    function enableSuggestion() {
        document.querySelector("#stackCard :nth-last-child(2)").style.boxShadow = "0 0 20px 8px #d9b500";
    }

    function disableSuggestion() {
        document.querySelector("#stackCard  :nth-last-child(2)").style.boxShadow = "0 0 0px 0px #d9b500";
    }



    let alreadyDrink = false;

    function empty(turn) {
        let cards = [];
        let win;
        switch (turn) {
            case 1:
                cards = p1;
                win = "Congrats, you win!";
                break;
            case 2:
                cards = p2;
                win = "Player 2 wins!";
                break;
            case 3:
                cards = p3;
                win = "Player 3 wins!";
                break;
            case 4:
                cards = p4;
                win = "Player 4 wins!";
                break;
        }
        // alert(cards.length);
        if (cards == 0) {
            return win;
        } else {
            return false;
        }
    }


    async function go(turn) {
        // document.querySelector("#myCard").style.backgroundColor = "transparent";
        // document.querySelector("#p2Card").style.backgroundColor = "transparent";
        // document.querySelector("#p3Card").style.backgroundColor = "transparent";
        // document.querySelector("#p4Card").style.backgroundColor = "transparent";
        document.querySelector("#profile1").querySelector("img").style.border = "7px #afb4b8 solid";
        document.querySelector("#profile1").querySelector("img").style.boxShadow = "0 0 0 0 #5cc304";
        document.querySelector("#profile2").querySelector("img").style.border = "7px #afb4b8 solid";
        document.querySelector("#profile2").querySelector("img").style.boxShadow = "0 0 0 0 #5cc304";
        document.querySelector("#profile3").querySelector("img").style.border = "7px #afb4b8 solid";
        document.querySelector("#profile3").querySelector("img").style.boxShadow = "0 0 0 0 #5cc304";
        document.querySelector("#profile4").querySelector("img").style.border = "7px #afb4b8 solid";
        document.querySelector("#profile4").querySelector("img").style.boxShadow = "0 0 0 0 #5cc304";
        document.querySelector("#profile" + turn).querySelector("img").style.border = "7px #5cc304 solid";
        document.querySelector("#profile" + turn).querySelector("img").style.boxShadow = "0 0 15px 8px #5cc304";
        if (turn !== 1) {
            alreadyDrink = false;
            disableSkip();
            disableDrink();
            disableCard();
            disableSuggestion();

            let player = "p" + turn;
            let id = player + "Card";
            // document.querySelector("#" + id).style.backgroundColor = "lightgreen";

            let p = [];


            if (turn === 2) {
                p = p2;
                // for (let i = 0; i < p2.length; i++) {
                //
                // }
            } else if (turn === 3) {
                p = p3;
            } else if (turn === 4) {
                p = p4;
            }

            for (let i = 0; i < p.length; i++) {

                if ((drawn[drawn.length - 1].charAt(1) == "2" || drawn[drawn.length - 1].charAt(1) == "3") && inPlus) {
                    if (p[i].charAt(1) == drawn[drawn.length - 1].charAt(1)) {
                        setTimeout(async function () {
                            // alert(i);
                            document.querySelector("#p" + turn + "Card").querySelector("." + p[i]).remove();
                            drawn.push(p[i]);
                            draw(p[i], turn);
                            p.splice(i, 1);
                            playedResolve();
                        }, 1500);
                        break;
                    }
                    if (i == p.length - 1) {
                        let drinkPromise;
                        let drinkResolve;
                        drinkPromise = new Promise(function (resolve, reject) {
                            drinkResolve = resolve;
                        });
                        setTimeout(async function () {
                            let j = 0;
                            let plusCopy = plus;
                            let intervalPromise;
                            let intervalResolve;
                            intervalPromise = new Promise(function (resolve, reject) {
                                intervalResolve = resolve;
                            });
                            let intv = setInterval(function () {
                                drink(turn);
                                j++;
                                if (j == plusCopy) {
                                    intervalResolve();
                                    clearInterval(intv);
                                }
                            }, 200);
                            await intervalPromise;
                            // for (let j = 0; j < plus; j++) {
                            //     drink(2);
                            // }
                            alreadyDrink = true;
                            i = -1;
                            plus = 0;
                            inPlus = false;
                            // playedResolve();
                            drinkResolve();
                        }, 750);
                        // break;
                        await drinkPromise;
                    }
                    continue;
                }

                if (drawn[drawn.length - 1].charAt(1) === p[i].charAt(1) || drawn[drawn.length - 1].charAt(0) === p[i].charAt(0) || p[i].charAt(1) === "w"){
                    let selectedCard = p[i];
                    setTimeout(async function () {
                        // alert(i);
                        document.querySelector("#p" + turn + "Card").querySelector("." + p[i]).remove();
                        drawn.push(p[i]);
                        draw(p[i], turn);
                        p.splice(i, 1);
                        // BOT WILD CARD
                        if (selectedCard === "zw" && p.length != 0) {
                            let choice = p[0].charAt(0);
                            if (choice === "z") {
                                choice = "a";
                            }
                            colorPromise = new Promise(function (resolve, reject) {
                                colorResolve = resolve;
                            });
                            setTimeout(function () {
                                pickColor(choice);
                            }, 1500);
                            await colorPromise;
                        }
                        playedResolve();
                    }, 1500);
                    break;
                }
                if (i == p.length - 1 && !alreadyDrink) {
                    let drinkPromise;
                    let drinkResolve;
                    drinkPromise = new Promise(function (resolve, reject) {
                        drinkResolve = resolve;
                    });
                    setTimeout(function () {
                        drink(turn);
                        alreadyDrink = true;
                        i = -1;
                        // playedResolve();
                        drinkResolve();
                    }, 1500);
                    await drinkPromise;
                } else if (i == p.length - 1 && alreadyDrink) {
                    playedResolve();
                }
            }

        } else {
            if ((drawn[drawn.length - 1].charAt(1) === "2" || drawn[drawn.length - 1].charAt(1) === "3") && inPlus) {
                let found = false;
                for (let i in p1) {
                    if (p1[i].charAt(1) === drawn[drawn.length - 1].charAt(1)) {
                        found = true;
                        break;
                    }
                }
                if (!found) {
                    setTimeout(async function () {
                        let j = 0;
                        let plusCopy = plus;
                        let intervalPromise;
                        let intervalResolve;
                        intervalPromise = new Promise(function (resolve, reject) {
                            intervalResolve = resolve;
                        });
                        let intv = setInterval(function () {
                            drink(1);
                            j++;
                            if (j == plusCopy) {
                                intervalResolve();
                                clearInterval(intv);
                            }
                        }, 200);
                        await intervalPromise;
                        p1Suggest();
                        // for (let j = 0; j < plus; j++) {
                        //     drink(1);
                        // }
                        plus = 0;
                        inPlus = false;
                        enableCard();
                        enableSkip();
                    }, 750);
                }
            } else {
                p1Suggest();
            }



            enableCard();
            enableDrink();
            // document.querySelector("#myCard").style.backgroundColor = "lightgreen";
        }



    }

    function p1Suggest() {
        let found = false;
        for (let i in p1) {

            if (drawn[drawn.length - 1].charAt(1) == p1[i].charAt(1) || drawn[drawn.length - 1].charAt(0) == p1[i].charAt(0) || p1[i].charAt(1) == "w") {
                found = true;
            }
            if (i == p1.length - 1 && !found) {
                enableSuggestion();
                // alert("no card found");
                // alert(found);
            }
        }
    }

    function disableCard() {
        for (let i in p1) {
            let card = document.querySelector("#myCard").children[i];
            if (!(card.classList.contains("unplayable"))){
                card.classList.remove("playable");
                card.classList.add("unplayable");
                card.setAttribute("onclick", "");
            }
        }
    }



    // alert(p1);
    // alert(p2);
    // alert(p3);
    // alert(p4);
    // alert("stack " + stack);



    function translateCard(code) {
        if (code.charAt(1) === "r") {
            return "<span class='material-symbols-outlined' style='font-size: 40px'>cached</span>";
        } else if (code.charAt(1) === "s") {
            return "<span class='material-symbols-outlined' style='font-size: 40px'>block</span>";
        } else if (code.charAt(1) === "w") {
            return "<span class='material-symbols-outlined' style='font-size: 40px'>grid_view</span>";
        } else if (code.charAt(1) === "2" || code.charAt(1) === "3" ) {
            return "+" + code.charAt(1);
        } else {
            return code.charAt(1);
        }
    }


    function shuffleStack(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const randomIndex = Math.floor(Math.random() * (i + 1));
            [array[i], array[randomIndex]] = [array[randomIndex], array[i]];
        }
    }

    function viewStack() {
        selectAdjustCard();
        alert("Stack: " + stack + "\np1: " + p1 + "\np2: " + p2 + "\np3: " + p3 + "\np4: " + p4 + "\ndrawn: " + drawn);
    }
</script>
</body>
</html>