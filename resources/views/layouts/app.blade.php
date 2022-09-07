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

            var val1="";
                    var val2="";
                    

                    $(".form_check_input").change(function() {
                    // if(this.checked) {
                    
                    // // console.log(val1)
                    // }
                    val1=$(this).val();
                    });

                    $(".form_check_input2").change(function() {
                    // if(this.checked) {
                    
                    // //console.log(val2)
                    // }
                    val2=$(this).val();
                    

                   //console.log(val1,val2);

                    $.ajax({
                                type:'get',
                                url:"/BuyPack1",
                                data:{'val1':val1,'val2':val2},
                                dataType:'json',
                                success:function(data){
                                    //console.log('success');

                                    console.log(data);

                                    //console.log(data.length);

                                //    div.find('.total1').html(" ");
                                //    div.find('.total1').append("daada");
                                },
                                error:function(){

                                }
                                });
                    });

                

        });

        

       

        

     
    </script>
    
</body>


</html>
