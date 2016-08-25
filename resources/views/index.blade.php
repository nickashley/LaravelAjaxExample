<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            .cell{
                height:100px;
                border: 1px solid black;
            }
            .red{
                background-color:red;
            }
            .yellow{
                background-color:yellow;
            }
            .blue{
                background-color:blue;
            }
            .white{
                background-color:white;
            }
            .controls li div{
                height:100px;
                border:1px solid black;
                width:100px;
            }

        </style>

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="controls list-unstyled">
                        <li><div class="red"></div></li>
                        <li><div class="yellow"></div></li>
                        <li><div class="blue"></div></li>
                        <li><div class="white"></div></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="cell col-md-3" data-id="row1col1" style="background-color:{{$drawing->row1col1}};"></div>
                        <div class="cell col-md-3" data-id="row1col2" style="background-color:{{$drawing->row1col2}};"></div>
                        <div class="cell col-md-3" data-id="row1col3" style="background-color:{{$drawing->row1col3}};"></div>
                        <div class="cell col-md-3" data-id="row1col4" style="background-color:{{$drawing->row1col4}};"></div>
                    </div>
                    <div class="row">
                        <div class="cell col-md-3" data-id="row2col1" style="background-color:{{$drawing->row2col1}};"></div>
                        <div class="cell col-md-3" data-id="row2col2" style="background-color:{{$drawing->row2col2}};"></div>
                        <div class="cell col-md-3" data-id="row2col3" style="background-color:{{$drawing->row2col3}};"></div>
                        <div class="cell col-md-3" data-id="row2col4" style="background-color:{{$drawing->row2col4}};"></div>
                    </div>
                    <div class="row">
                        <div class="cell col-md-3" data-id="row3col1" style="background-color:{{$drawing->row3col1}};"></div>
                        <div class="cell col-md-3" data-id="row3col2" style="background-color:{{$drawing->row3col2}};"></div>
                        <div class="cell col-md-3" data-id="row3col3" style="background-color:{{$drawing->row3col3}};"></div>
                        <div class="cell col-md-3" data-id="row3col4" style="background-color:{{$drawing->row3col4}};"></div>
                    </div>
                    <div class="row">
                        <div class="cell col-md-3" data-id="row4col1" style="background-color:{{$drawing->row4col1}};"></div>
                        <div class="cell col-md-3" data-id="row4col2" style="background-color:{{$drawing->row4col2}};"></div>
                        <div class="cell col-md-3" data-id="row4col3" style="background-color:{{$drawing->row4col3}};"></div>
                        <div class="cell col-md-3" data-id="row4col4" style="background-color:{{$drawing->row4col4}};"></div>
                    </div>

                </div>
            </div>
        </div>

        <script  src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            var currentColor = '#ffffff';
            $('.red').on('click', function(){
                currentColor = '#ff0000';
            });
            $('.blue').on('click', function(){
                currentColor = '#0000ff';
            });
            $('.white').on('click', function(){
                currentColor = '#ffffff';
            });
            $('.yellow').on('click', function(){
                currentColor = '#ffff00';
            });
            $('.cell').on('click', function(){

                key = $(this).data('id');
                currentCell = $(this);
                $.post('/{{$id}}', {[key]: currentColor}, function(){
                    $(currentCell).css('background-color', currentColor);
                });
            })

        </script>
    </body>
</html>
