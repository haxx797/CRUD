<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Add Company</h2>
            </div>
            <form action="{{ route('companies.store')}}" method="POST" enctype="multipart/form-data" class="col-md-12">
                @csrf
                <div class="form-group my-1">
                    <strong>Company Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Company Name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <strong>Company Email</strong>
                    <input type="email" name="email" class="form-control" placeholder="Company email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group my-1">
                    <strong>Company Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Company address">
                    @error('address')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                    <a href="{{ route('companies.index')}}" class="btn btn-secondary float-start">Back</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
