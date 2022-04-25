<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CHiWI ACADEMY</title>
</head>
<body>
    @include('layouts.navbar')
    <div class="container-modal">
        <!-- Button trigger modal -->
        @if (auth()->user()->rol === 'profesor')
            <button type="button" class="btn-new-event " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                New Event
            </button>
        @else
            <h2 style="color: #FF7509; text-align: center">Proximos Eventos</h2>

            @if ($eventos->count())
                <div style="display: flex; align-items: center">
                    <h4 style="color: #FF7509;"> Eventos destacados </h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </div>
                @foreach ($eventos as $evento)
                    @if ($evento->destacada === '1')
                        <ul>
                            <li> {{ $evento->title }} </li>
                        </ul> 
                    @endif
                @endforeach
            @endif

        @endif
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

    <div class="d-flex flex-wrap w-100" style="justify-content: center">
            @if ($eventos->count())
            @foreach ($eventos as $evento)
                <div class="d-flex p-2">
                    <div class="card m-auto" style="width: 18rem; height: 32rem;">
                        <img class="card-img-top" style="height: 15vw; object-fit: cover" src="{{ asset('storage/images/'. $evento->image) }}" alt="Eventos">
                        <div class="card-body">
                        <h5 class="card-title my-2"> {{ $evento->title }} </h5>
                        <div style="display: flex; align-items: center">
                            <h5 class="card-title my-2"> {{ $evento->maxCupos }} </h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </div>
                        <div class="d-card-text"> 
                            {{ $evento->description }} 
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author"> {{ $evento->user->name }} 
                                </span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date"> {{ $evento->created_at->diffForHumans() }} </span>
                            </div>
                        </div>
                        @if ($evento->destacada === '1')
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        @endif
                        @if ($evento->ownedBy(auth()->user()))
                            <div style="display: flex;">
                                <form action="{{route('admin.destroy', $evento)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="butdelete" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </form>
                                <!-- Button trigger modal -->
                                <div class="container-modal">
                                    <button type="button" style="width: fit-content; height: fit-content;" class="btn-new-event " data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </button> 
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
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
            {{-- <div class="d-flex justify-content-center">
                {!! $eventos->links() !!}
            </div> --}}
        @else
            <p style="padding-left: 4rem">No hay eventos registrados</p>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>