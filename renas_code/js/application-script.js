$('.navigation li:nth-child(1)').click(function() {
    //alert("clicked first");
    document.getElementById("app1").style.display = "block";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(2)').click(function() {
    //alert("clicked second");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "block";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(3)').click(function() {
    //alert("clicked third");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "block";
    document.getElementById("app4").style.display = "none";
});

$('.navigation li:nth-child(4)').click(function() {
    //alert("clicked fourth");
    document.getElementById("app1").style.display = "none";
    document.getElementById("app2").style.display = "none";
    document.getElementById("app3").style.display = "none";
    document.getElementById("app4").style.display = "block";
});

