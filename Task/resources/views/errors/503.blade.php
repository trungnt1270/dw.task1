<!DOCTYPE html>
<html>
<head>
    <title>Be right back.</title>

    <link href="https://fonts.googleapis.com/css?famili=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body{
            height: 100%;
        }

        body{
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: "Lato",sans-serif;
        }

        .container{
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content{
            text-align: 72px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Be right back.</div>
        @if(count($errors)>0)
{{--            danh sach loi--}}
            <div class="alert alert-danger">
                <strong>List errors</strong>
                <br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
</body>
</html>
