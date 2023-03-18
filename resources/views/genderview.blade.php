<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('node_modules/mdb-ui-kit/css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{asset('node_modules/mdb-ui-kit/css/custom.css')}}" />
</head>
<body>

<!-- --------------------------------------- -->
<!-- Start project here-->
<nav class="navbar navbar-light bg-white shadow-none">
    <div class="container-fluid">
        <a class="navbar-brand">
            <!-- back btn -->
            <div class="container mt-3">
                <button type="button" class="btn btn-primary-outline rounded-circle px-3 shadow-none"><i class="fas fa-redo fa-2x"></i></button>
            </div>
            <!-- back btn -->
        </a>
        <form class="d-flex input-group w-auto" >
            <img
                src="{{asset('node_modules/mdb-ui-kit/img/Group 24.png')}}"
                height="40"
                alt="MDB Logo"
                loading="lazy"
            />
        </form>
    </div>
</nav>


<div class="container main-page d-flex justify-content-center flex-wrap p-3 text-center">

    <!-- svg container-->

    <!-- svg container-->

    <!-- content -->
    <div class="container d-flex justify-content-center content mb-5 mt-3 text-center">
        <form method="post" action="{{ route('users.genderstore') }}" class="align-content-center">
            @csrf
            <div class="container mb-5">
                <label class="form-label mt-5 " for="typeText"><span class="main-color fa-2x">بنت <span class="second-color">ولا</span> ولد؟</span></label>
            </div>

            <div class="container d-flex justify-content-center flex-wrap">


                <div class="gender bg-five-color mb-4 me-2 rounded-5">
                    <img
                        src="{{asset('node_modules/mdb-ui-kit/img/boy.png')}}"
                        height="80"
                        alt="MDB Logo"
                        loading="lazy"
                        class=" top-40"
                    />
                    <input type="radio" id="age" name="gender" value="boy" />
                    <label class="btn btn-default third-color" for="a25"></label>
                </div>


                <div class="gender bg-forth-color mb-4 ms-2 rounded-5">
                    <img
                        src="{{asset('node_modules/mdb-ui-kit/img/girl.png')}}"
                        height="80"
                        alt="MDB Logo"
                        loading="lazy"
                        class=" top-40"
                    />
                    <input type="radio" id="age" name="gender" value="girl" />
                    <label class="btn btn-default third-color" for="a25"></label>
                </div>


            </div>
            <div class="container mt-5">
                <button type="submit" class="btn btn-primary btn-rounded pt-2 pb-2 btn-block bg-main-color"><span class="fa-2x">يلا نكمل</span></button>
            </div>


        </form>
    </div>
    <!-- content -->

</div>
<!-- End your project here-->


<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>





















