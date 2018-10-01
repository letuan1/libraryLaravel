<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/book.css')}}">
    <title>CodePen - Sortable Tabular Data</title>


    <style>

    </style>

    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">

<body>
<div id="wrapper">
    <nav class="top-right open">
        <a class="disc l1" href="/library?page=category">
            <div>Categori</div>
        </a>
        <a class="disc l2" href="/library?page=Oder">
            <div>Oder</div>
        </a>
        <a class="disc l3" href="/library?page=student">
            <div>Student</div>
        </a>
        <a class="disc l4" href="/library?page=books">
            <div>Book</div>
        </a>
        <a class="disc l5 toggle">
            Menu
        </a>
    </nav>
    <h1>ODER LIST</h1>

    <table id="keywords">
        <thead>
        <tr>
            <th><span>Id oder</span></th>
            <th><span>Borrowed day</span></th>
            <th><span>Pay day</span></th>
            <th><span>Id student</span></th>
            <th><span>Id books</span></th>
        </tr>
        </thead>
        <tbody>
        @foreach($oders as $oder)
            <tr>
                <td class="lalign">{{ $oder->id_oder }}</td>
                <td>{{$oder->borrowed_day}}</td>
                <td>{{$oder->pay_day}}</td>
                <td>{{$oder->id_student}}</td>
                <td>{{$oder->id_books}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script>


<script>
    $(function () {
        $('#keywords').tablesorter();
    });
    //# sourceURL=pen.js
</script>

<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>


<script>
    toggle = document.querySelectorAll(".toggle")[0];
    nav = document.querySelectorAll("nav")[0];
    toggle_open_text = 'Menu';
    toggle_close_text = 'Close';

    toggle.addEventListener('click', function () {
        nav.classList.toggle('open');

        if (nav.classList.contains('open')) {
            toggle.innerHTML = toggle_close_text;
        } else {
            toggle.innerHTML = toggle_open_text;
        }
    }, false);

    setTimeout(function () {
        nav.classList.toggle('open');
    }, 800);
    //# sourceURL=pen.js
</script>
<script>
    window.console = window.console || function (t) {
    };
</script>


<script>
    if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
    }
</script>
</body>

</html>
