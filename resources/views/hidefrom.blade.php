<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Basic Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
        integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <style type="text/css">
        .wfiedls {
            display: none;

        }
    </style>

</head>

<body>


    <div class="container">
        <div class="row">
            <div class="content-main col-md-12">
                <form>
                    <img src="img/logo.png">
                    <br><br>
                    Metsa Wood Quick Estimation tool
                    <br><br>
                    <div class="col-md-9">


                        <fieldset class="form-group">
                            <label for="exampleSelect1">Type of Construction</label>
                            <select class="form-control" id="TypeOfConstruction">
                                <option>Traditional Masonry</option>
                                <option>Timber Frame</option>
                            </select>
                        </fieldset>


                        <!-- Below will only show if Timber Frame is selected -->

                        <fieldset class="form-group wfiedls">
                            <label for="PartyWalls">Which walls are party walls?</label>
                            <br><input type="checkbox"> W1
                            <br><input type="checkbox"> W2
                            <br><input type="checkbox"> W3
                            <br><input type="checkbox"> W4
                        </fieldset>
                        <!-- Above will only show if Timber Frame is selected -->



                        <fieldset class="form-group">
                            <label for="FloorWidthA">Floor Width A(X)</label>
                            <input type="text" class="form-control" id="FloorWidthA" placeholder="Enter in mm">
                            <!--<small class="text-muted">This is the text for A</small>-->

                            <label for="FloorWidthB">Floor Width B(X)</label>
                            <input type="text" class="form-control" id="FloorWidthB" placeholder="Enter in mm">
                            <!-- <small class="text-muted">This is the text for A</small>-->
                        </fieldset>


                        <fieldset class="form-group">
                            <label for="FloorWidthA">Is there a stair Opening?</label>
                            <br><input type="checkbox">
                        </fieldset>


                        <!-- Below will only show if Stair Opening is checked -->
                        <fieldset class="form-group">
                            <label for="FloorWidthA">Opening width C(X)</label>
                            <input type="text" class="form-control" id="DoorWidthC" placeholder="Enter in mm">
                            <!--<small class="text-muted">This is the text for A</small>-->
                            <label for="FloorWidthA">Opening width D(X)</label>
                            <input type="text" class="form-control" id="DoorWidthD" placeholder="Enter in mm">
                        </fieldset>
                        <!-- Above will only show if Stair Opening is checked -->




                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-3">
                <img src="img/drawing.jpg">
            </div>
        </div>
    </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#TypeOfConstruction").on('change', function() {
                var selectedBalue = $("#TypeOfConstruction").val();
                if (selectedBalue == "Timber Frame") {
                    $(".wfiedls").slideDown(500);
                } else {
                    $(".wfiedls").slideUp(500);
                }
            });






        });
    </script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"
        integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous">
    </script>

</body>

</html>
