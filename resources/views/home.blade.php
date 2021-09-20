<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Extrasenses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url(https://s3-prod.crainsdetroit.com/s3fs-public/BobcatBonnies_i.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

        .container-fluid {
            width: 100%;
            height: 100vh;
            margin: 0;
        }

        .modal-body {
            margin: 0 !important;
        }

        .modal {
            padding: 0 !important;
        }

        .menu {
            width: 100%;
            border: 2px solid black;
            background-image: url(https://thumbs.dreamstime.com/b/%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%B0-%D0%BF%D0%B8%D1%86%D1%86%D1%8B-%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D0%BE%D1%81%D1%8B%D0%BB%D0%BA%D0%B0-%D0%B2-%D1%81%D1%82%D0%B8%D0%BB%D0%B5-doodle-%D1%82%D0%B0%D0%BA%D0%B6%D0%B5-%D0%B2%D0%B5%D0%BA%D1%82%D0%BE%D1%80-%D0%B8%D0%BB%D0%BB%D1%8E%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D0%B8-113321404.jpg);
            background-size: cover;
        }

        `

        .anun {
            padding: 20px;
            color: #fff;
            text-align: center;
        }

        .tesakani {

            margin: 10px 120px 5px;
            color: #fff;
            background-color: #222;
            border-radius: 2px;

        }

        .texth {
            color: #fff !important;
        }


        #bg, #kap {
            background-image: url('/new_work/img/12.jpg');
            background-size: cover;
            padding: 10px 50px;
            color: #fff;
        }

        #hase img {
            width: 100%;
        }

        #kap h4 {
            margin-top: 25px;
        }

        #kap i {
            font-size: 30px;
            margin: 50px 30px;
            padding: 10px;
            color: yellow;
            border-radius: 50px;
        }

        #kap i:hover {
            color: rgb(236, 171, 30)
        }

        .col-md-8 {
            text-align: center;
            padding: 100px;
        }

        .col-md-8 img {
            width: 60%;
            height: auto;
            position: relative;
            animation-name: example5;
            animation-duration: 3s;
        }

        @keyframes example5 {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        #anm1 {
            position: relative;
            animation-name: example;
            animation-duration: 1s;
        }

        @keyframes example {
            0% {
                left: -200px;
                top: 0px;
            }
            100% {
                left: 0px;
                top: 0px;
            }
        }

        #anm2 {
            position: relative;
            animation-name: example2;
            animation-duration: 1.3s;
        }

        @keyframes example2 {
            0% {
                left: -200px;
                top: 0px;
            }
            100% {
                left: 0px;
                top: 0px;
            }
        }

        #anm3 {
            position: relative;
            animation-name: example3;
            animation-duration: 1.6s;
        }

        @keyframes example3 {
            0% {
                left: -200px;
                top: 0px;
            }
            100% {
                left: 0px;
                top: 0px;
            }
        }

        #anm4 {
            position: relative;
            animation-name: example4;
            animation-duration: 1.9s;
        }

        @keyframes example4 {
            0% {
                left: -200px;
                top: 0px;
            }
            100% {
                left: 0px;
                top: 0px;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div id="anm1">
                <button type="button" class="btn btn-warning text-white btn-block my-5 font-weight-bold text-dark"
                        data-toggle="modal" data-target="#myModal">
                    Extrasenses
                </button>

            </div>

            <div id="anm2">
                <button type="button" class="btn btn-warning text-white btn-block my-5 font-weight-bold text-dark"
                        data-toggle="modal" data-target="#myModal1">
                    Test
                </button>
            </div>

            <div id="anm3">
                <button type="button" class="btn btn-warning text-white btn-block my-5 font-weight-bold text-dark"
                        data-toggle="modal" data-target="#myModal2">
                    History
                </button>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row" id="bg">
                    <div class="col-md-12 bgt">
                        <div class="table-responsive">
                            <h3 class="text-center">Extrasenses</h3>
                            <h3 class="text-center">Truly answer percent</h3>
                            <table class="table table-bordered table-hover text-white">
                                <thead>
                                <tr>
                                    @if(!empty($extrasences_arr['check']))
                                        @foreach($extrasences_arr['check'] as $key=>$value)
                                            <th>Extrasense {{$key+1}}</th>
                                        @endforeach
                                    @endif
                                </tr>
                                </thead>
                                <tbody class="tbody">
                                <tr>
                                    @if(!empty($extrasences_arr['check']))
                                        @foreach($extrasences_arr['check'] as $key=>$value)
                                            <th class="text-white">{{number_format(array_count_values($value)[1] * 100/count($value), 2)}}
                                                %
                                            </th>
                                        @endforeach
                                    @endif
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Clos</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row" id="bg">
                    <div class="col-md-6 bgt">
                        <div class="form-group">
                            <label for="uname">Type a number from 10 to 999:</label>
                            <input type="number" min="10" max="999" class="form-control" id="test_num"
                                   placeholder="Enter number from 10 to 999">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ready">Ready</button>
                            <button type="submit" class="btn btn-success float-right submit">Submit</button>
                        </div>

                    </div>
                    <div class="col-md-6 bgt">
                        <div class="table-responsive">
                            <p>Results from extrasenses</p>
                            <table class="table table-bordered table-hover text-white">
                                <thead>
                                <tr>
                                    <th>Extrasense 1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                </tr>
                                </thead>
                                <tbody class="tbody">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row" id="bg">
                    <div class="col-md-12 bgt">
                        <div class="table-responsive">
                            <h3 class="text-center">Extrasenses answers</h3>
                            <table class="table table-bordered table-hover text-white">
                                <thead>
                                <tr>
                                    @if(!empty($extrasences_arr['answer']))
                                        @foreach($extrasences_arr['answer'] as $key=>$value)
                                            <th>Extrasense {{$key+1}}</th>
                                        @endforeach
                                    @endif
                                </tr>
                                </thead>
                                <tbody class="tbody">
                                @if(!empty($extrasences_arr['answer']))
                                    @foreach($extrasences_arr['number'] as $key=>$number)
                                        <tr>
                                            @foreach($extrasences_arr['answer'] as $extrasense)
                                                <th class="@if($extrasense[$key] == $number){{'text-danger'}}@else{{'text-success'}}@endif">{{$extrasense[$key]}}</th>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Clos</button>
            </div>

        </div>
    </div>
</div>

<script>
    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#test_num').on('change', function () {
        let my_number = $(this).val();
        if (my_number > 999) {
            my_number = 999;
        } else {
            if (my_number < 10) {
                my_number = 10;
            } else {
                my_number = parseInt(my_number);
            }
        }
        $(this).val(my_number);
    });

    $('.ready').on('click', function () {
        let my_number = $('#test_num').val();
        let class_name = '';
        if (my_number > 9 && my_number < 1000) {
            let request = $.ajax({
                'url': 'get_extrasenses_answers',
                method: 'post',
                dataType: 'json',
                data: {
                    _token: CSRF_TOKEN,
                    the_number: my_number
                }
            });
            request.done(function (msg) {
                let html = '<tr>';
                $.each(msg, function (key, value) {
                    if (value === my_number) {
                        class_name = 'text-success';
                    } else {
                        class_name = 'text-danger';
                    }
                    html += '<th class="' + class_name + '">' + value + '</th>';
                })
                html += '</tr>'
                $('.tbody').append(html);
            })
        } else {
            alert('Please type valid number');
        }
    })
</script>
</body>
</html>
