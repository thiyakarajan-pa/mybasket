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
        
        <link rel="stylesheet" href="../assets/vendors/themify-icons/css/themify-icons.css">
        <!-- Bootstrap + Meyawo main styles -->
        <link rel="stylesheet" href="../assets/css/meyawo.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .header { min-height:100px; height:100px; background:#695aa6; }

            .StripeElement {
                background-color: white;
                padding: 8px 12px;
                border-radius: 4px;
                border: 1px solid transparent;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
            }
            .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
            }
            .StripeElement--invalid {
                border-color: #fa755a;
            }
            .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
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
                        <a class="link" href="../">Home</a>
                    </li>
                </ul>
                <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                    <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                    </div>
                </a>
            </div>          
        </nav><!-- End of Page Navbar -->
        <header id="home" class="header">
            <div class="overlay"></div>
            <div class="header-content container">
            </div>              
        </header>
        <!-- portfolio section -->
        <section class="section" id="products">
            <div class="container text-center">
                <h6 class="section-title mb-6">{{ $item->productName }}</h6>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6">
                        <img src="../assets/imgs/product-bag.png" class="portfolio-card-img" alt="{{ $item->displayName }}" />
                    </div>
                    <div class="col-md-6 text-left">
                        <h4>Price : {{ $item->unitPrice }}</h4>
                        <p>{{ $item->description }}</p>
                        <div class="panel panel-info">
                            <div class="panel-heading">Buy Now</div>
                            <div class="panel-body">
                                <form action="{{ route('checkout') }}" method="POST" id="subscribe-form">
                                    <div class="form-group">
                                        <input id="amount" type="number" value="{{ $item->unitPrice }}" class="form-control" placeholder="Enter the Price" />
                                    </div>
                                    <div class="form-group">
                                        <input id="card-holder-name" type="text" class="form-control" placeholder="Enter Card Holder Name" />
                                    </div>
                                    <div class="form-row">
                                        <label for="card-element">Card Details</label>
                                        <div id="card-element" class="form-control">
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <div class="stripe-errors"></div>
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        {{ $error }}<br>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div class="form-group text-center">
                                        <button  id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-lg btn-success btn-block">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end of row -->
            </div><!-- end of container -->
        </section> <!-- end of portfolio section -->

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
        <script src="../assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="../assets/vendors/bootstrap/bootstrap.bundle.js"></script>

        <!-- bootstrap 3 affix -->
        <script src="../assets/vendors/bootstrap/bootstrap.affix.js"></script>

        <!-- Meyawo js -->
        <script src="../assets/js/meyawo.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
 
        <script>
            var stripe = Stripe('pk_test_fRhMNhovq7Rf48uP0DPq4LK7');
            var elements = stripe.elements();
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
            var card = elements.create('card', {hidePostalCode: true,
                style: style});
            card.mount('#card-element');
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;

            var payment_method = elements.create('payment');
            
            cardButton.addEventListener('click', async (e) => {
                e.preventDefault();
                const { setupIndent, error } = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card: card,
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
            
                if (error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    paymentMethodHandler(setupIndent.payment_method);
                }
            });

            function paymentMethodHandler(payment_method) {
                var form = document.getElementById('subscribe-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'payment_method');
                hiddenInput.setAttribute('value', payment_method);
                form.appendChild(hiddenInput);
                form.submit();
            }
        </script>
    </body>
</html>
