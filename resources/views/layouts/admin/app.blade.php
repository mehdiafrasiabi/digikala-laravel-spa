
<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.admin.link')
</head>
<body>
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<livewire:admin.layout.header/>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <livewire:admin.layout.sidebar/>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            {{$slot}}
        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">  1403-1404© کپی رایت</p>
            </div>
            <div class="footer-section f-section-2">
                <span class="copyright"> ساخته شده توسط : <a href="/admin/https://imanpa.ir/store/">مهدی افراسیابی گولک</a> </span></div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
@include('layouts.admin.script')
</body>
</html>
