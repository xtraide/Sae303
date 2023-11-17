<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <nav>

    </nav>
</header>

<body>
    <section class="carousel_scene position-absolute top-20 start-50 translate-middle-x"
        style="width: 200px; height: 110px; perspective: 640px;">

        <section class="carousel position-relative w-100 h-100"
            style="transform-style: preserve-3d; transition: transform 0.4s;">

            <div class="face f_01 position-absolute text-center"
                style="height: 120px; width: var(--faceWidth); font-size: 4.4rem; background-color: white; border: 3px solid;">
            </div>
            <div class="face backface back_01 position-absolute"></div>

            <div class="face f_02 position-absolute text-center"
                style="height: 120px; width: var(--faceWidth); font-size: 4.4rem; background-color: white; border: 3px solid;">
            </div>
            <div class="face backface back_02 position-absolute"></div>

            <div class="face f_03 position-absolute text-center"
                style="height: 120px; width: var(--faceWidth); font-size: 4.4rem; background-color: white; border: 3px solid;">
            </div>
            <div class="face backface back_03 position-absolute"></div>

        </section>
    </section>
    <section class="button_wrap position-relative d-flex justify-content-center w-90 mt-23rem">
        <button class="button cursor-pointer width-6rem height-6rem m-2 fs-3" id="prev">prev</button>
        <button class="button cursor-pointer width-6rem height-6rem m-2 fs-3" id="next">next</button>
    </section>
    <script src="../assets/script/script.js"></script>
</body>

</html>