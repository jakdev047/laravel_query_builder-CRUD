<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ URL::to('/')}}">ContactBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/about')}}">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('all.contacts')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">

        <div class="jumbotron my-5">
            <h2 class="my-3">Contact Book</h2>
            <a href="{{URL::to('/insert-data')}}" class="btn btn-primary">Add Contact</a>
        </div>

        <table class="table table-border my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <!-- loop -->
                @foreach($parson as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <a href="{{ URL::to('edit-contact/'. $item->id) }}"class="btn btn-info">Edit </a>
                        <a href="{{ URL::to('delete-contact/'. $item->id) }}" class="btn btn-danger">Delete </a>
                        <a href="{{ URL::to('view-contact/'. $item->id) }}" class="btn btn-primary">View </a>
                    </td>
                </tr>
                @endforeach
                <!-- loop end -->


            </tbody>
        </table>
    </div>




    <!-- All Javascript file -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>