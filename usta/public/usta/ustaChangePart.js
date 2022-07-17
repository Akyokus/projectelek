var url = "https://projectelek.malpsoftware.com/usta/change";

function bids(){
    $.post(url,{
        bid : 1
    }, function (result){
        document.getElementById("changedPart").innerHTML = result;
    });
    document.getElementById("index").classList.remove('active');
    document.getElementById("bids").classList.remove('active');
    document.getElementById("wallet").classList.remove('active');
    document.getElementById("newBids").classList.add('active');
    document.getElementById("profile").classList.remove('active');
}
function index(){
    $.post(url,{
        index : 1
    }, function (result){
        document.getElementById("changedPart").innerHTML = result;
    });
    document.getElementById("index").classList.add('active');
    document.getElementById("bids").classList.remove('active');
    document.getElementById("wallet").classList.remove('active');
    document.getElementById("newBids").classList.remove('active');
    document.getElementById("profile").classList.remove('active');
}
function wallet(){
    $.post(url,{
        wallet : 1
    }, function (result){
        document.getElementById("changedPart").innerHTML = result;
    });
    document.getElementById("index").classList.remove('active');
    document.getElementById("bids").classList.remove('active');
    document.getElementById("wallet").classList.add('active');
    document.getElementById("newBids").classList.remove('active');
    document.getElementById("profile").classList.remove('active');
}
function myBids(){
    $.post(url,{
        myBids : 1
    }, function (result){
        document.getElementById("changedPart").innerHTML = result;
    });
    document.getElementById("index").classList.remove('active');
    document.getElementById("bids").classList.add('active');
    document.getElementById("wallet").classList.remove('active');
    document.getElementById("newBids").classList.remove('active');
    document.getElementById("profile").classList.remove('active');
}
function setBid(id){
    $.post(url,{
        setBid : 1,
        id: id
    }, function (result){
        document.getElementById("bidButton").innerHTML = result;
    });
}
function profile(){
    $.post(url,{
        profile : 1
    }, function (result){
        document.getElementById("changedPart").innerHTML = result;
    });
    document.getElementById("index").classList.remove('active');
    document.getElementById("bids").classList.remove('active');
    document.getElementById("wallet").classList.remove('active');
    document.getElementById("newBids").classList.remove('active');
    document.getElementById("profile").classList.add('active');
}