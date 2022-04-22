<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    @include('layouts.navbar')
    <div class="container-modal">
        <!-- Button trigger modal -->
        <button type="button" class="btn-new-event " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            New Event
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">CHIWI ACADEMY</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulario -->
                        <form method="post" action="{{ route('admin') }}" class="form-admin was-validated" enctype="multipart/form-data">
                            @csrf                          
                            <div class=" mb-3">
                                <label for="validationTextarea" class="form-label">Create an Event</label>
                                <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="title" placeholder="Title" required></textarea>
                                <label for="timeMeet"></label>
                                <input  type="datetime-local" name="timeMeet" required>
                                <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="maxCupos" placeholder="Participants" required></textarea>
                                <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="description" placeholder="Description" required></textarea>
                                <input type="file" class="form-control" aria-label="file example" name="image" required>
                                <label for="destacada">Destacada</label>
                                <input type="hidden" name="destacada" value="0">
                                <input type="checkbox" name="destacada" value='1'>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn-admin">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($eventos->count())
        @foreach ($eventos as $evento)
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem; height: 40rem;">
                    <img class="card-img-top" src="{{ asset('storage/images/'. $evento->image) }}" alt="Eventos">
                    <div class="card-body">
                    <h5 class="card-title my-2"> {{ $evento->title }} </h5>
                    <h5 class="card-title my-2"> {{ $evento->maxCupos }} </h5>
                    <div class="d-card-text"> 
                        {{ $evento->description }} 
                    </div>
                    <a href="#" class="post-link"><b>Leer más</b></a>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="card-txt-author">Chiwi Acádemy
                            </span>
                        </div>
                        <div class="col-6 text-right">
                            <span class="card-txt-date"> {{ $evento->timeMeet }} </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No hay eventos registrados</p>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

