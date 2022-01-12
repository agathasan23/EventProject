<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyCKdsgMK4d98oOgJxObZcITXw7abffjBoI",
        authDomain: "eventin-56d6a.firebaseapp.com",
        databaseURL: "https://eventin-56d6a-default-rtdb.firebaseio.com",
        storageBucket: "eventin-56d6a.appspot.com",
    };
    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
    // Get Data
    firebase.database().ref('konten/').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<p>Kategori :' + value.category + '</p>\
               <p>Organizer :' + value.organizer + '</p>\
               <p>Event :' + value.namaEvent + '</p>\
               <p>Place :' + value.place + '</p>\
               <p>Price :' + value.price + '</p>\
               <p>Slot :' + value.slot + '</p>\); 
           }
            lastIndex = index;
        });
        
        $('#tbody').html(htmls);
        $("#submitUser").removeClass('desabled');
    });

// Add Data
    $('#submitUser').on('click', function () {
        var values = $("#addUser").serializeArray();
        var email = values[0].value;
        var password = values[1].value;
        var userID = lastIndex + 1;
        console.log(values);
        firebase.database().ref('getevent/' + userID).set({
            email : email,
            password : password,
        });
        // Reassign lastID value
        lastIndex = userID;
        $("#addUser input").val("");
    });
</script>