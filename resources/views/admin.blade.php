<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                        <form method="post" action="{{ route('admin') }}" class="form-admin was-validated">
                @csrf                          
                  <div class=" mb-3">
                                <label for="validationTextarea" class="form-label">Create an Event</label>
                            </div>
                            <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="title" placeholder="Title" required></textarea>
                            <label for="timeMeet"></label>
                            <input class="time-for" type="datetime-local" name="timeMeet" required>
                            <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="maxCupos" placeholder="Participants" required></textarea>
                            <textarea class="text-admin form-control is-invalid" id="validationTextarea" name="description" placeholder="Description" required></textarea>
                            <input type="file" class="form-control" aria-label="file example" name="image" required>
                            <label for="destacada">Destacada</label>
                  <input type="checkbox" name="destacada">
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


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
  
     
