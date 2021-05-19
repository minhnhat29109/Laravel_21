<!-- resources/views/hello2.blade.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>
<body>

    @foreach ($list as $row)
        {{ $row['name'] }} :
        @if($row['status'] == 0)
        Chưa làm
        @elseif($row['status'] == 1)
        Đã hoàn thành
        @elseif($row['status']== -1)
        Không thực hiện
        @else
        @return 
        @endif
        </br>
    @endforeach

</body>
</html>