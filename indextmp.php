<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drag and drop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>
<body>
<div class="container">
    <h3 class="text-center">Dynamic Drag and Drop table rows</h3>
    <table class="table table-bordered" id="mytable">
        <thead>
        <th>#</th>
        <th>Name</th>
        <th>Desdiption</th>
        </thead>
        <tbody class="row_positision">
        <tr>
            <td>1</td>
            <td>Name 1</td>
            <td>Desc 1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Name 1</td>
            <td>Desc 1</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Name 2</td>
            <td>Desc 1</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Name 1</td>
            <td>Desc 1</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function (){
        $("#mytable").DataTable();
    });

    $(".row_positision").sortable({
        delay:150;
        stop:function(){
            var selectedData = new Array();
            $(".row_positision>tr").each(function (){
                selectedData.push($(this).attr("id"))
            });
        }
    });

</script>
</html>