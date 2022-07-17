var url = "https://projectelek.malpsoftware.com/main-controller";
var logoutUrl = "https://projectelek.malpsoftware.com/logout";
function closeMenu(){
    var button = document.querySelector(".buttonss");
    var hersey = document.querySelector(".hersey");
    var buttonekrani = document.querySelector(".buttonekrani");
    var kapatma = document.querySelector(".ekrem");

    buttonekrani.style.display = "none";
    hersey.style.display = "block";
}
function eye(){
    if (document.getElementById("password").type == "password"){
        document.getElementById("password").type = "text";
    }else{
        document.getElementById("password").type = "password";
    }
}
function complate(){
    var text = document.getElementById("autoComplate").value;
    if (text.length > 0){
        $.post(url,{
            searchService:1,
            text:text
        }, function (result){
            document.querySelector(".autocomplete-items").classList.add("toggleShow");
            document.getElementById("autoComplete").innerHTML = result;
        });
    }
}
function completed(id){
    $.post(url,{
        getServiceName:id
    }, function (result){
        document.getElementById("autoComplate").value = result;
        document.getElementById("selectService").setAttribute('onclick','create_request('+id+')');
        document.querySelector(".autocomplete-items").classList.remove("toggleShow");
    });
}

function create_request(id){
    $.post(url,{
      create_req:1,
      req_id:id
    }, function (result){
        document.getElementById("changed_part").innerHTML = result;
    });
}
function profile(){
    closeMenu();
    $.post(url,{
        profile:1
    }, function (result){
        document.getElementById("changed_part").innerHTML = result;
    });
}
function login(){
    closeMenu();
    $.post(url,{
        login:1
    }, function (result){
        document.getElementById("changed_part").innerHTML = result;
    });
}

function logout(){
    closeMenu();
    $.post(logoutUrl,{
        logout:1
    }, function (result){
        window.location.reload(false);
    });
}
function select_province(){
    var province_id = document.getElementById("city").value;
    $.post(url,{
        select_province:1,
        province_id:province_id
    }, function (result){
        document.getElementById("select_district").innerHTML = result;
    });
}
function request_province(){
    var il = document.getElementById("city").value;
    var ilce = document.getElementById("district").value;
    $.post(url,{
        request_province:1,
        city:il,
        district:ilce
    }, function (result){
        document.getElementById("changed_part").innerHTML = result;
    });
}
function request_car(id){
    $.post(url,{
        request_car:1,
        car_id:id
    }, function (result){
        document.getElementById("changed_part").innerHTML = result;
    });
}
function save(){
    var des = document.getElementById("note").value;
    $.post(url,{
        save:1,
        des:des
    }, function (result){
        alert(result);
        window.location.reload();
    });
}
function save_profile(){
    var tel = document.getElementById("tel").value;
    $.post(url,{
        save_profile:1,
        tel:tel
    }, function (result){
        alert(result);
        window.location.reload();
    });
}
function update_pass(){
    var cur = document.getElementById("current_pass").value;
    var newd = document.getElementById("new_pass").value;
    $.post(url,{
        update_pass:1,
        cur:cur,
        newd:newd
    }, function (result){
        alert(result);
        window.location.reload();
    });
}

function requests(){
    $.post(url,{
        requests:1
    }, function (result){
        document.getElementById("changed_part").innerHTML = result;
    });
}
function profilBilgileriButton(){
    document.getElementById("accountinfo").setAttribute("style","padding: 0");
    document.getElementById("accountPassword").setAttribute("style","padding: 0");
    document.getElementById("accountPassword").setAttribute("style","display:none");
    document.getElementById("accountGarage").setAttribute("style","padding: 0");
    document.getElementById("accountGarage").setAttribute("style","display:none");
    document.getElementById("profilBilgileriButton").classList.add("browseByCactive");
    document.getElementById("profilSifreButton").classList.remove("browseByCactive");
    document.getElementById("profilAraclarButton").classList.remove("browseByCactive");
}
function profilSifreButton(){
    document.getElementById("accountinfo").setAttribute("style","padding: 0");
    document.getElementById("accountinfo").setAttribute("style","display:none");
    document.getElementById("accountPassword").setAttribute("style","padding: 0");
    document.getElementById("accountGarage").setAttribute("style","padding: 0");
    document.getElementById("accountGarage").setAttribute("style","display:none");
    document.getElementById("profilBilgileriButton").toggleAttribute("class","browseByCactive");
    document.getElementById("profilSifreButton").classList.add("browseByCactive");
    document.getElementById("profilAraclarButton").classList.remove("browseByCactive");
}
function profilSifreButton(){
    document.getElementById("accountinfo").setAttribute("style","padding: 0");
    document.getElementById("accountinfo").setAttribute("style","display:none");
    document.getElementById("accountPassword").setAttribute("style","padding: 0");
    document.getElementById("accountGarage").setAttribute("style","padding: 0");
    document.getElementById("accountGarage").setAttribute("style","display:none");
   // document.getElementById("profilBilgileriButton").classList.remove("browseByCactive");
    document.getElementById("profilSifreButton").classList.add("browseByCactive");
    document.getElementById("profilAraclarButton").classList.remove("browseByCactive");
}
function profilAraclarButton(){
    document.getElementById("accountinfo").setAttribute("style","padding: 0");
    document.getElementById("accountinfo").setAttribute("style","display:none");
    document.getElementById("accountPassword").setAttribute("style","padding: 0");
    document.getElementById("accountPassword").setAttribute("style","display:none");
    document.getElementById("accountGarage").setAttribute("style","padding: 0");


}
function garage(){
    profile();
    profilAraclarButton();
}