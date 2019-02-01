<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Progressive web demo</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
<table style="width:100%">
    {{cas()->getCurrentUser()}}
    @foreach($records as $record)
        <tr>
            <th>{{$record->hold_code}}</th>
            <th>{{$record->hold_from_date_old}}</th>
            <th>{{$record->hold_to_date_old}}</th>
        </tr>
    @endforeach
</table>


<script src="js/scripts.js"></script>
</body>
</html>