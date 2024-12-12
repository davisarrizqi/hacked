<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kangmas vs Everybody</title>
    <style>
        /* Global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            width: 100%;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        #background {
            display: flex;
            width: 100vw;
            height: 100vh;
        }

        .inner-container {
            display: flex;
            width: 50%;
            height: 50%;
            margin: auto;
        }

        .text {
            font-size: 4.5rem; /* text-7xl */
            width: fit-content;
            height: fit-content;
            text-align: center;
            margin: auto;
            color: rgba(0, 0, 0, 0.7); /* text-black/70 */
            font-weight: bold;
        }

        /* Background colors for the script */
        .bg-blue-400 {
            background-color: #60a5fa;
        }
        .bg-red-400 {
            background-color: #f87171;
        }
        .bg-yellow-400 {
            background-color: #facc15;
        }
        .bg-green-400 {
            background-color: #4ade80;
        }
        .bg-blue-400 {
            background-color: #60a5fa;
        }
        .bg-black-40 {
            background-color: rgba(0, 0, 0, 0.4);
        }
        .bg-white-40 {
            background-color: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>
<body>
    <div id="background" class="bg-blue-400">
        <div class="inner-container">
            <p class="text">
                <strong>
                    Hacked by Kangmas
                </strong>
            </p>
        </div>
    </div>

    <script>
        const background = document.querySelector('#background');
        var counter = 0; 
        var listingView = [
            'bg-red-400',
            'bg-yellow-400',
            'bg-green-400',
            'bg-blue-400',
            'bg-black-40',
            'bg-white-40',
        ]; 
        var before = 'bg-blue-400';

        setInterval(() => {
            background.classList.replace(before, listingView[counter]);
            before = listingView[counter];
            if(counter === 5) counter = 0;
            else counter += 1;
        }, 100);
    </script>
</body>
</html>
