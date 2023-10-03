<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Code test empstore</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Poppins',   sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: rgb(14, 34, 43);
}
.box{
    position:relative;
    width: 780px;
    height: 650px;
    background: rgb(80, 72, 189);
    border-radius: 50px 5px;
    overflow: hidden;
    
}
.box::before{
    content : '';
    position: absolute;
    top: -50%;
    left: -50%;
    width :780px;
    height: 650px;
    background: linear-gradient(60deg,transparent,rgb(240, 69, 203),black);
    transform-origin: bottom right;
    animation: animate 5s linear infinite;
}
.box::after{
    content : '';
    position: absolute;
    top: -50%;
    left: -50%;
    width :780px;
    height: 650px;
    background: linear-gradient(60deg,transparent,rgb(5, 252, 136),rgb(233, 231, 231));
    transform-origin: bottom right;
    animation:animate 5s linear infinite;
    animation-delay: -3s;
}
@keyframes animate{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}
form{
    position: absolute;
    inset: 5px;
    border-radius: 90px 10px;
    background: black;
    z-index: 10;
    padding: 30px 30px;
    display: flex;
    flex-direction: column;

}
label{
    color: azure;
}
      
   
   
    </style>
</head>
<body>
<div class="box">
        <form method="POST" action="/updatesaveemp/{{$post['id']}}"  enctype="multipart/form-data">
            @csrf
            <div class="wrapper">
            <h3 style="color: aqua;">You Can Update and Delete YourList..</h3>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Full_name</label>
                    <input type="text" class="form-control" name="uempname" value="{{$post['Full_name']}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Company_ID</label>
                    <input type="text" class="form-control" name="uempcid" value="{{$post['Company_ID']}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="uempemail" value="{{$post['Email']}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="uempphone" value="{{$post['Phone']}}">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-info">Update</button>
                <button type="submit" class="btn btn-info"><a href="/empdelete/{{$post['id']}}" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Delete</a></button>
                <a href="/emplist" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><button type="submit" class="btn btn-info">Go list</button></a>
            </div>
        </form>
    </div>
</body>
</html>