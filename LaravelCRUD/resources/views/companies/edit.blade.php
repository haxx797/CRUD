<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>edit Company</h2>
            </div>
            <div>
                <a href="{{ route('companies.index')}}" class="btn btn-primary"> Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
            @endif
            <form action="{{ route('companies.update', $company->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-1">
                            <strong>Company Name</strong>
                            <input type="text" name="name" value="{{$company->name}}" class="form-control" placeholder="Company Name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-1">
                            <strong>Company Email</strong>
                            <input type="email" name="email" value="{{$company->email}}"class="form-control" placeholder="Company email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-1">
                            <strong>Company Address</strong>
                            <input type="text" name="address" value="{{$company->address}}"class="form-control" placeholder="Company address">
                            @error('address')
                                <div class="alert alert-danger">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="cal-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>