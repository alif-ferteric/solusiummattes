{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body> --}}
@extends('template')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('member.update', $members->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="branch">Branchs</label>
                                <select name="branch_id" class="form-control" required>
                                    <option value="1" {{ $members->branch_id == 1 ? 'selected' : '' }}>Pekanbaru
                                    </option>
                                    <option value="2" {{ $members->branch_id == 2 ? 'selected' : '' }}>Jakarta</option>
                                    <option value="3" {{ $members->branch_id == 3 ? 'selected' : '' }}>Bogor</option>
                                    <option value="4" {{ $members->branch_id == 4 ? 'selected' : '' }}>Depok</option>
                                    <option value="5" {{ $members->branch_id == 5 ? 'selected' : '' }}>Tasikmalaya</option>
                                    <option value="6" {{ $members->branch_id == 6 ? 'selected' : '' }}>Bekasi</option>
                                    <option value="7" {{ $members->branch_id == 7 ? 'selected' : '' }}>Palembang</option>
                                    <option value="8" {{ $members->branch_id == 8 ? 'selected' : '' }}>Lampung</option>
                                    <option value="9" {{ $members->branch_id == 9 ? 'selected' : '' }}>Bandung</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name', $members->name) }}" required>

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    name="phone_number" value="{{ old('phone_number', $members->phone_number) }}"
                                    required>

                                @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="text" class="form-control @error('photo') is-invalid @enderror"
                                    name="photo" value="{{ old('name', $members->photo) }}" required>

                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                            <a href="{{ route('member.index') }}" class="btn btn-md btn-secondary">back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- include summernote js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250, //set editable area's height
            });
        })
    </script>
</body>

</html> --}}
