<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .alert {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Add Company</h2>
            </div>
            <form action="{{ route('companies.store')}}" method="POST" enctype="multipart/form-data" class="col-md-12">
                @csrf
                <div class="mb-3">
                    <label for="companyName" class="form-label"><strong>Company Name</strong></label>
                    <input type="text" id="companyName" name="name" class="form-control" placeholder="Enter Company Name">
                    @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="companyEmail" class="form-label"><strong>Company Email</strong></label>
                    <input type="email" id="companyEmail" name="email" class="form-control" placeholder="Enter Company Email">
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="companyAddress" class="form-label"><strong>Company Address</strong></label>
                    <input type="text" id="companyAddress" name="address" class="form-control" placeholder="Enter Company Address">
                    @error('address')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('companies.index')}}" class="btn btn-secondary btn-action">Back</a>
                    <button type="submit" class="btn btn-primary btn-action">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
