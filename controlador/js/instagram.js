$(document).ready(function () {
    onLoad();
});

function onLoad() {
    $.ajax({
        url: "controlador/php/request.php",
        dataType: 'json',
        type: 'GET',
        success: function (json) {
            $("#profileImage").html('<img src="' + json.profile.photoURL + '" class="img-circle">');
            $("#displayName").html(json.profile.displayName );
            $("#userId").html(json.profile.identifier);
            $("#userFirstName").html(json.profile.firstName );
            $("#userLastName").html(json.profile.lastName );
            $("#userName").html(json.profile.username );
            $("#profileURL").attr("href",json.profile.profileURL );
            $("#profileURL").html(json.profile.profileURL );
            $("#webSiteURL").html(json.profile.webSiteURL );
            $("#gender").html(json.profile.gender );
            $("#language").html(json.profile.language );
            $("#description").html(json.profile.description);
            $("#email").html(json.profile.email);
            $("#phone").html(json.profile.phone);
            $("#region").html(json.profile.region);
            $("#country").html(json.profile.country);
            $("#city").html(json.profile.city);
            $("#birthDay").html(json.profile.birthDay);
            $("#birthMonth").html(json.profile.birthMonth );
            $("#birthYear").html(json.profile.birthYear );
            $("#age").html(json.profile.age);
            
        }
    });
}