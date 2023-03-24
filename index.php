<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css tailwind - cdn -->
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Pendaftaran kursus SAcode</title>
</head>
<body class="bg-gray-100">

    <!-- header satrt -->

    <header class="border-2 m-5 p-5 shadow-md bg-white">

        <h1 class="text-3xl font-bold text-gray-700 mb-3 " >Pendaftaran kursus sacode</h1>
        <p class="text-xs font-bold text-gray-500 mb-3 " >silahkan lengkapi formulir dengan baik dan benar</p>

    </header>

    <!-- header end -->

    <!-- main content start -->

    <section  class="border-2 m-5 p-5 shadow-md bg-white">


    <?php 
    //integrasi form tmbah 
    include('form_tambah.php');

    ?>


    </section>

    <!-- main content end -->

    <!-- footer satrt -->

    <footer class="border-2 m-5 p-5 shadow-md bg-white" >

    <p class="text-gray-500 text-xs">copyright &copy 2023, designed by <b>Marthen Teno</b></p>

    </footer>

    <!-- footer end -->

</body>
</html>