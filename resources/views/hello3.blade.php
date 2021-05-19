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
    // {{ 'Laravel Zent' . '- 21' }} hello cac ban!
    <p>Tên tôi là: {{ $name }} </p>
    <p>Tôi sinh năm {{ $year }}</p>
    <p>Truong hoc {{ $school }}</p>
    <p>Muc tieu {{ $object }}</p>
    <p>Records {{ $records }}</p>
    <ul>
    @for ($i = 0; $i < count($menu); $i++)
    </br>

        <li>
            <div>
                <a href="#">
                    {{ $menu[$i] }} 
                </a>
            </div>
        </li>

    @endfor
    </ul>

    @if ($records === 1)
        Có 1 
    @elseif ($records > 1)
    Có nhiều
    @else
        Không có
    @endif
</br>

    @php 
    $i = 0;
    $max = count($menu);
    @endphp

    @while ($i< $max)

        {{ $menu[$i] }} 

        @php $i++; @endphp
    @endwhile
</body>
</html>