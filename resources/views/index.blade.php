<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="My Basket - Stripe Payment Gateway using Laravel/Cashier">
        <meta name="author" content="Devcrud">
        <title>My Basket</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
        <!-- Bootstrap + Meyawo main styles -->
        <link rel="stylesheet" href="assets/css/meyawo.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        <!-- Page Navbar -->
        <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
            <div class="container">
                <a class="logo" href="#">My Basket</a>         
                <ul class="nav">
                    <li class="item">
                        <a class="link" href="#home">Home</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#about">About</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#products">Our Products</a>
                    </li>
                    <!-- <li class="item">
                        <a class="link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#blog">Blog</a>
                    </li> -->
                    <li class="item">
                        <a class="link" href="#contact">Contact</a>
                    </li>
                    <!-- <li class="item ml-md-3">
                        <a href="components.html" class="btn btn-primary">Components</a>
                    </li> -->
                </ul>
                <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                    <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                    </div>
                </a>
            </div>          
        </nav><!-- End of Page Navbar -->

        <!-- page header -->
        <header id="home" class="header">
            <div class="overlay"></div>
            <div class="header-content container">
                <h1 class="header-title">
                    <span class="up">HI!</span>
                    <span class="down">I am Thiyakarajan</span>
                </h1>
                <p class="header-subtitle">LEAD DEVELOPER</p>            

                <div class="btn btn-primary">Welcome to My Portal..............</div>
            </div>              
        </header><!-- end of page header -->

        <!-- about section -->
        <section class="section pt-0" id="about">
            <!-- container -->
            <div class="container text-center">
                <!-- about wrapper -->
                <div class="about">
                    <div class="about-img-holder">
                        <img src="assets/imgs/rajan.png" class="about-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="about-caption">
                        <p class="section-subtitle">Who Am I ?</p>
                        <h2 class="section-title mb-3">About Me</h2>
                        <p> LEAD Developer with 12+ years of experience with Multiple Projects and Customer Requirement Collection with the utmost confidentiality using Multiple PHP and JS frameworks. Possesses a B.Sc. in Computer Science. Looking to leverage my knowledge and experience into a role as CTO.              
                        </p>
                        <button class="btn-rounded btn btn-outline-primary mt-4" onclick="window.open('https://drive.google.com/file/d/1BMj-vf47EJBe6N34jWbhdjO8po3aVoVN/view?usp=share_link','_blank')">Download CV</button>
                    </div>              
                </div><!-- end of about wrapper -->
            </div><!-- end of container -->
        </section> <!-- end of about section -->

        <!-- portfolio section -->
        <section class="section" id="products">
            <div class="container text-center">
                <p class="section-subtitle">Want to Get ?</p>
                <h6 class="section-title mb-6">Our Products</h6>
                <!-- row -->
                <div class="row">
                    @php
                        $i=0;
                    @endphp
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <a href="/view/{{ $product->productCode }}" class="portfolio-card">
                            <img src="assets/imgs/product-bag.png" class="portfolio-card-img" alt="{{ $product->displayName }}">    
                            <span class="portfolio-card-overlay">
                                <span class="portfolio-card-caption">
                                    <h4>{{ $product->productName }}</h5>
                                    <p class="font-weight-normal">{{ $product->description }}</p>
                                </span>                         
                            </span>                     
                        </a>
                    </div>
                    @php
                        $i++;
                        if($i%3==0) { 
                    @endphp
                    </div>
                    <div class="clearfix"><br /></div>
                    <div class="row">
                    @php
                        }
                    @endphp
                    @endforeach
                </div><!-- end of row -->
            </div><!-- end of container -->
        </section> <!-- end of portfolio section -->

        <!-- section -->
        <section class="section-sm bg-primary">
            <!-- container -->
            <div class="container text-center text-sm-left">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-sm offset-md-1 mb-4 mb-md-0">
                        <h6 class="title text-light">Want to work with me?</h6>
                        <p class="m-0 text-light">Always feel Free to Contact me</p>
                    </div>
                    <div class="col-sm offset-sm-2 offset-md-3">
                        <a href="tel:+919688394398" class="btn btn-lg my-font btn-light rounded">Reach Me</a>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of section -->

        <!-- contact section -->
        <section class="section" id="contact">
            <div class="container text-center">
                <p class="section-subtitle">How can you communicate?</p>
                <h6 class="section-title mb-5">Contact Me</h6>
                <h2>Mobile : +91 9688 394 398 </h2>
                <h2>Mobile : +91 8072 379 162 </h2>
                <h2>Email  : thiyakarajan.pa@gmail.com </h2>
            </div><!-- end of container -->
        </section><!-- end of contact section -->

        <!-- footer -->
        <div class="container">
            <footer class="footer">       
                <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">DevCRUD</a></p>
                <!-- <div class="social-links text-right m-auto ml-sm-auto">
                    <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                    <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                </div> -->
            </footer>
        </div> <!-- end of page footer -->
        
        <!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

        <!-- bootstrap 3 affix -->
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

        <!-- Meyawo js -->
        <script src="assets/js/meyawo.js"></script>

    </body>
</html>
