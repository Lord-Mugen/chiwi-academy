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
                                <input type="datetime-local" name="timeMeet" required>
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

    <div class="d-flex flex-wrap w-100">
        @if ($eventos->count())
        @foreach ($eventos as $evento)
        <div class="d-flex mb-5">
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

                    <div>
                        <form action="{{route('admin.destroy', $evento)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="butdelete" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    
        <!-- Button trigger modal -->
        <button type="button" class="btn-new-event " data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
        Edit Event
        </button>

                    </form>
                    <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <form method="post" action="{{ route('admin.update', $evento) }}" class="form-admin was-validated" enctype="multipart/form-data">
                            @csrf 
                                @method('PUT')
                            
                            <div class=" mb-3">
                                <label for="validationTextarea" class="form-label">Edit an Event</label>
                                <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="title"  required> {{ $evento->title }} </textarea>
                                <label for="timeMeet"></label>
                                <input type="datetime-local" name="timeMeet" value="{{$evento->timeMeet}}" required>
                                <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="maxCupos"  required> {{$evento->maxCupos}} </textarea>
                                <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="description"  required> {{$evento->description}} </textarea>
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
            {{ $eventos->links() }}
            @endforeach
            @else
            <p>No hay eventos registrados</p>
            @endif
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>