<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

</head>
<body class="container">
    <br><br>
    <div class="card bg-info">
        <table class="table table-bordered datatable">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".datatable").DataTable({
                processing : true,
                serverSide : true,
                ajax : "{{ route('datatable.getdata') }}",
                columns : [
                    {data : 'id'},
                    {data : 'name'},
                    {data : 'email'}
                ]
            });
        });
    </script>
</body>
</html>
