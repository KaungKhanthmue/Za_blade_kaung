<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code test comlist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color:darkslateblue;">
        <div class="container-fluid mx-auto p-2 mt-5" style="width: 1200px; background-color:black;">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($alldata as $data)
                <div class="col">
                <div class="card h-100">
                    <img src="{{asset('upload/'.$data->logo)}}" class="card-img-top" alt="..." style="width: 370px; height:200px;">
                    <div class="card-body">
                    <table>
                        <tr>
                            <td><h6>Name : </h6></td>
                            <td><p class="fs-6">{{$data['Name']}}</p></td>
                        </tr>
                        <tr>
                            <td><h6>Email : </h6></td>
                            <td><p class="fs-6">{{$data['Email']}}</p></td>
                        </tr>
                        <tr>
                            <td><h6>Website: </h6></td>
                            <td><p class="fs-6">{{$data['Website']}}</p></td>
                        </tr>
                    </table>
                    
                    
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/comstore/{{$data['id']}}" ><button class="btn btn-info me-mx-1" type="button">Edit</button></a>
                            <a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/comcreate" ><button class="btn btn-info me-mx-1" type="button">Create New</button></a>
                        </div>
                    </div>
                    
                </div>
                </div>
            @endforeach  
        </div>
        </div>
    

    <!-- script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>