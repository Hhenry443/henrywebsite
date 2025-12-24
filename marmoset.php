<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MARMOSET</title>

    <link rel="stylesheet" href="/styles/marmoset.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Bartle&family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <img src="/images/marmoset.jpg">
        <p>My favourite animal is a pygmy marmoset</p>
        <p class="small-text">Just look at that guy, so cute!</p>
        <a class="small-text" href="https://en.wikipedia.org/wiki/Pygmy_marmoset">Click me to learn more about them</a>
    </main>

    <img src="/images/pet-marmoset.png" id="cursor-pet" alt="">

    <script>
        const pet = document.getElementById("cursor-pet");

        let targetX = window.innerWidth / 2;
        let targetY = window.innerHeight / 2;

        let currentX = targetX;
        let currentY = targetY;

        document.addEventListener("mousemove", (e) => {
            targetX = e.clientX;
            targetY = e.clientY;
        });

        function animate() {
            // easing factor (lower = slower, floatier)
            currentX += (targetX - currentX) * 0.06;
            currentY += (targetY - currentY) * 0.06;

            pet.style.left = currentX + "px";
            pet.style.top = currentY + "px";

            requestAnimationFrame(animate);
        }

        animate();
    </script>

</body>
</html>
