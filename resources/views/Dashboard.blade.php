<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.14/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="{{asset('css/Dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">
<title>hbsmorocco2023</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                        </ul>
                      </div>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-30">
        <div class="row">
            <div class="col-md-12 main-datatable">
               <div class="RoomType-count d-flex">
                 <ol>
                    <li>Deluxe room : The number of the remaining rooms <b>{{$countdeluxeroom}}/20</b> </li>
                    <li>Junior suite : The number of the remaining rooms <b>{{$countjuniorsuite}}/25</b></li>
                    <li>Prestige suite : The number of the remaining rooms <b>{{$countprestigesuite}}/5</b></li>
                    <li>Superior riad : The number of type requested <b>{{$countsuperiorriad}}</b></li>
                    <li>Premier riad : The number of type requested <b>{{$countpremieriad}}</b></li>
                    <li>Superior Room : The number of the remaining rooms <b>{{$countsuperiorroom}}/10</b></li>
                 </ol>
               </div>
                <div class="card_body">
                    <div class="overflow-x">
                        <table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
                            <thead>
                                <tr>
                                    <th style="min-width:100px;">Full Name</th>
                                    <th style="min-width:100px;">Email</th>
                                    <th style="min-width:100px;">Nationality</th>
                                    <th style="min-width:100px;">Phone</th>
                                    <th style="min-width:100px;">Status</th>
                                    <th style="min-width:100px;">Adress</th>
                                    <th style="min-width:100px;">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->nationality}}</td>
                                    <td>{{$item->tel}}</td>
                                    <td><span class="mode {{$item->status}}">{{$item->status}}</span></td>
                                    <td>{{$item->adress}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$item->fullname}}">
                                            Details
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="{{$item->fullname}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">{{$item->fullname}}</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="fullname" disabled value="{{$item->fullname}}">
                                                    <label for="floatingInput">Full Name</label>
                                                </div>
                                            </div>
                                            @if($item->couple==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="{{$item->partnername}}">
                                                    <label for="floatingInput">Partner Name</label>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="country" disabled value="{{$item->country}}">
                                                    <label for="floatingInput">Country</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="email" disabled value="{{$item->email}}">
                                                    <label for="floatingInput">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="email" disabled value="{{$item->nationality}}">
                                                    <label for="floatingInput">Nationality</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="phone" disabled value="{{$item->tel}}">
                                                    <label for="floatingInput">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="phone" disabled value="{{$item->status}}">
                                                    <label for="floatingInput">status</label>
                                                </div>
                                            </div>
                                            @if($item->price!=null)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="{{$item->price}} MAD">
                                                    <label for="floatingInput">price</label>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="{{$item->adress}}">
                                                    <label for="floatingInput">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="{{$item->notes}}">
                                                    <label for="floatingInput">Special notes</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" style="margin-top: 10px;font-weight:700;margin-left:55px">Room Type :</label>
                                            </div>
                                            @if($item->deluxeroom==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Deluxe room">
                                                    <label for="floatingInput">Deluxe room</label>
                                                </div>
                                            </div>
                                            @endif
                                            @if($item->juniorsuite==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Junior suite">
                                                    <label for="floatingInput">Junior suite</label>
                                                </div>
                                            </div>
                                            @endif
                                            @if($item->prestigesuite==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Prestige suite">
                                                    <label for="floatingInput">Prestige suite</label>
                                                </div>
                                            </div>
                                            @endif
                                            @if($item->roh==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Superior Room">
                                                    <label for="floatingInput">Superior Room</label>
                                                </div>
                                            </div>
                                            @endif
                                            @if($item->premuimriad==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Premuim Riad">
                                                    <label for="floatingInput">Premuim Riad</label>
                                                </div>
                                            </div>
                                            @endif
                                            @if($item->superiorriad ==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Superior Riad >
                                                    <label for="floatingInput">Superior Riad</label>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-md-6">
                                                <label for="" style="margin-top: 10px;font-weight:700;margin-left:55px">Group Type :</label>
                                            </div>
                                            @if($item->couple ==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Couple ">
                                                    <label for="floatingInput">Couple</label>
                                                </div>
                                            </div>
                                            @endif
                                            @if($item->single ==1)
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder=" " name="price" disabled value="Selected : Single">
                                                    <label for="floatingInput">Single</label>
                                                </div>
                                            </div>
                                            @endif
                                           </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
$(document).ready(function () {

if ($.fn.dataTable.isDataTable('#filtertable')) {
    $('#filtertable').DataTable();
}
else {
    $('#filtertable').DataTable({
        scrollY: '50vh',
        scrollX: true,
        scrollCollapse: true,
        buttons: [
            'copy', 'excel', 'pdf'
        ]

    });
}
});


</script>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
