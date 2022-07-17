var button = document.querySelector(".buttonss");
var hersey = document.querySelector(".hersey");
var buttonekrani = document.querySelector(".buttonekrani");
var kapatma = document.querySelector(".ekrem");

button.addEventListener("click",()=>{
    buttonekrani.style.display = "inline-block";
    hersey.style.display = "none";
});

kapatma.addEventListener("click",()=>{
    buttonekrani.style.display = "none";
    hersey.style.display = "block";
});

document.querySelector("#section1").parentElement.addEventListener("click",function(e){
    if(e.target.tagName == "INPUT"){
        $.post(url,{
            getService:1
        }, function (result){
            document.getElementById("autoComplete").innerHTML = result;
        });
        document.querySelector(".autocomplete-items").classList.add("toggleShow");
    }else{
        document.querySelector(".autocomplete-items").classList.remove("toggleShow");
    }
});


