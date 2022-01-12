<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Database Makanan</title>

</head>
<body>

<div class="container" style="margin-top: 50px;">

    <h4 class="text-center">Laravel Database RealTime Using Google Firebase</h4><br>

    <h5># Add Makanan</h5>
    <div class="card card-default">
        <div class="card-body">
            <form id="addCustomer" class="form-inline" method="POST" action="">
                <div class="form-group mb-2">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email"
                           required autofocus>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" type="email" class="form-control" name="password" placeholder="password"
                           required autofocus>
                </div>
                <button id="submitCustomer" type="button"  class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

    <br>

    <h5># Makanan</h5>
    
    <table class="table table-bordered">
        <tr>
            <th>Ca</th>
            <th>Or</th>
            <th>Nama</th>
            <th>Place</th>
            <th>Price</th>
            <th>Slot</th>
            <th width="180" class="text-center">Action</th> 
        </tr>
        <tbody id="tbody">

        </tbody>
    </table>

</div>

<!-- Update Model -->



{{--Firebase Tasks--}}
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
         apiKey: "AIzaSyCKdsgMK4d98oOgJxObZcITXw7abffjBoI",
          authDomain: "eventin-56d6a.firebaseapp.com",
          databaseURL: "https://eventin-56d6a-default-rtdb.firebaseio.com/",
          projectId: "eventin-56d6a",
          storageBucket: "eventin-56d6a.appspot.com",
          messagingSenderId: "480740067809",
          appId: "1:480740067809:web:1d7dbf4f587341a0e5eaa0",
    };
    
    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
    // Get Data
    firebase.database().ref('event/').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<tr>\
            <td>' + value.category + '</td>\
            <td>' + value.namaEvent + '</td>\
            <td>' + value.userEmail + '</td>\
            <td>' + value.place + '</td>\
            <td>' + value.price + '</td>\
            <td>' + value.slot + '</td>\
            <td><button data-toggle="modal" data-target="#update-modal" class="btn btn-info updateData" data-id="' + index + '">Update</button>\
            <button data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="' + index + '">Delete</button></td>\
          </tr>'); 
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
        $("#submitUser").removeClass('desabled');
    });
    // Add Data
    $('#submitCustomer').on('click', function () {
        var values = $("#addCustomer").serializeArray();
        var name = values[0].value;
        var email = values[1].value;
        var kalori = values[2].value;
        var userID = lastIndex + 1;
        console.log(values);
        firebase.database().ref('getevent/' + userID).set({
            name: name,
            email: email,
            kalori: kalori,
        });
        // Reassign lastID value
        lastIndex = userID;
        $("#addCustomer input").val("");
    });
    // Update Data
    var updateID = 0;
    $('body').on('click', '.updateData', function () {
        updateID = $(this).attr('data-id');
        firebase.database().ref('getevent/' + updateID).on('value', function (snapshot) {
            var values = snapshot.val();
            var updateData = '<div class="form-group">\
            <label for="first_name" class="col-md-12 col-form-label">Name</label>\
            <div class="col-md-12">\
                <input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
            </div>\
        </div>\
        <div class="form-group">\
            <label for="last_name" class="col-md-12 col-form-label">Email</label>\
            <div class="col-md-12">\
                <input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
            </div>\
        </div>\
            <div class="from-group">\
                <label for="first_name" class="col-md-12 col-form-label">Kalori</label>\
                <div class="col-md-12">\
                <input id="first_name" type="text" class="form-control" name="kalori" value="' + values.kalori + '" required autofocus>\
            </div>\
            </div>';
            $('#updateBody').html(updateData);
        });
    });
    $('.updateCustomer').on('click', function () {
        var values = $(".users-update-record-model").serializeArray();
        var postData = {
            name: values[0].value,
            email: values[1].value,
            kalori: values[2].value,
        };
        var updates = {};
        updates['/customers/' + updateID] = postData;
        firebase.database().ref().update(updates);
        $("#update-modal").modal('hide');
    });
    // Remove Data
    $("body").on('click', '.removeData', function () {
        var id = $(this).attr('data-id');
        $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
    });
    $('.deleteRecord').on('click', function () {
        var values = $(".users-remove-record-model").serializeArray();
        var id = values[0].value;
        firebase.database().ref('customers/' + id).remove();
        $('body').find('.users-remove-record-model').find("input").remove();
        $("#remove-modal").modal('hide');
    });
    $('.remove-data-from-delete-form').click(function () {
        $('body').find('.users-remove-record-model').find("input").remove();
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>


