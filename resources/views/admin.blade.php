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

    <div class="d-flex  w-100 cards-container">
            @if ($eventos->count())
            @foreach ($eventos as $evento)
                <div class="d-flex">
                   {{-- inicio de card 1--}}
                    <div class="card m-auto" style="width: 18rem; height: 40rem;">
                        <img class="card-img-top" src="{{ asset('storage/images/'. $evento->image) }}" alt="Eventos">
                        <div class="card-body">
                        <h5 class="card-title my-2"> {{ $evento->title }} </h5>
                        <h5 class="card-title my-2"> {{ $evento->maxCupos }} <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                          </svg> </h5>
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
                </div>
                
                {{ $eventos->links() }}
            @endforeach
        @else
            <p>No hay eventos registrados</p>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

