<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/guru/store" method="post">
                            @csrf
                            <h1>Create Guru :</h1>
                            <div class="mt-4">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" autocomplete="off">
                            </div>

                            <div class="mt-3">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control" autocomplete="off">
                            </div>

                            <div class="mt-3">
                                <label>Gender</label>
                                <select name="gender" class="form-select" aria-label="Default select example">
                                    <option disabled selected>Choose One Gender</option>
                                    <option value="M">Laki Laki</option>
                                    <option value="W">Perempuan</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" autocomplete="off">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary" name="submit" value="sbt"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-11">

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guru as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->age }}</td>
                                <td>
                                    @if ($data->gender == 'M')
                                        Laki - Laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                                <td>{{ $data->alamat }}</td>
                                <td class="d-flex gap-1">
                                    <a class="btn btn-primary btn-sm" href="/guru/update/{{$data->id}}">Edit</a>
                                    <form action="/guru/delete/{{$data->id}}" method="get">
                                        @csrf
                                       <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
