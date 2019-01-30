<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
<table style="width:100%">
    @foreach($records as $record)
        <tr>
            <th>{{$record->hold_code}}</th>
            <th>{{$record->hold_from_date_new}}</th>
            <th>{{$record->hold_to_date_new}}</th>
        </tr>
    @endforeach
</table>


<script src="js/scripts.js"></script>
</body>
</html>