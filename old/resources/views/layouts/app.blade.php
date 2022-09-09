<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BuyPack</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/BuyPack.css')}}">
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <style>

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container mb-4">

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript">

       $(document).ready(function(){
        $("#single").change(function(){
            if(this.checked)
            {
                
                $("[name='partnername']").attr('type', 'hidden');
            }
        })
        $("#couple").change(function(){
            if(this.checked)
            {
                
                $("[name='partnername']").attr('type', 'text');
            }
        })

       });
        $(document).ready(function(){

            var val1="";
            var val2="";


                    $(".form_check_input").change(function() {

                    if(this.checked) {
                        val1=$(this).val();
                     console.log(val1);
                    }
                            $.ajax({
                                type:'get',
                                url:"{!!URL::to('changeprice')!!}",
                                data:{'val2':val2 ,'val1':val1},
                                dataType:'json',
                                success:function(data){
                                    //console.log('success');

                                   console.log(data);
                         
                                   $('.price').text(parseFloat(data.data.priceInMad).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " MAD");
                                   $('.priceUSD').text((data.data.priceInUsd).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " ( ~ approx  USD )");
                                   

                                },
                                error:function(){

                                }
                            });
                    });

                    $(".form_check_input2").change(function() {
                    if(this.checked) {
                    val2=$(this).val();
                    console.log(val2);
                    }


                          $.ajax({
                                type:'get',
                                url:"{!!URL::to('changeprice')!!}",
                                data:{'val2':val2 ,'val1':val1},
                                dataType:'json',
                                success:function(data){
                                    //console.log('success');

                                   console.log(data);
                  
                                   
                                   $('.price').text((data.data.priceInMad).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " MAD");
                                   $('.priceUSD').text((data.data.priceInUsd).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") +" ( ~ approx  USD )");
                                //    $('.priceUsd').text(data.data.priceInMad );
                                   

                                },
                                error:function(){

                                }
                            });


                    });




        });








    </script>

</body>


</html>
