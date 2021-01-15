<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 5.8 AutoComplete Search Using Jquery UI - W3Adda</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .ui-autocomplete {
            max-height: 100px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Laravel 5.8 AutoComplete Search Using Jquery UI - W3Adda</h2>
            </div>
            <div class="col-12">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input id="search" name="search" type="text" class="form-control" placeholder="Search"
                            style="width: 500px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
        $("#search").autocomplete({            
            source: function(request, response) {
                $.ajax({          
                url: '/autocomplete',
                data: {
                        term : request.term
                 },
                dataType: "json",
                success: function(data){
                   var resp = $.map(data,function(obj){
                        return obj.name;
                   }); 
                   response(resp);
                }
                           });
                                   },
                                           minLength:3,

     }).focus(function () {
                 $(this).autocomplete("search");
                     });
                         });
    

    </script>
</body>

</html>