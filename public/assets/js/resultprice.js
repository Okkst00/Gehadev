var mybutton = document.getElementById("myBtn");

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var winScroll =
        document.body.scrollTop || document.documentElement.scrollTop;
    var height =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";

    if (
        document.body.scrollTop > 300 ||
        document.documentElement.scrollTop > 300
    ) {
        mybutton.style.display = "block";
        document.getElementById("navbar").style.top = "0";
    } else {
        mybutton.style.display = "none";
        document.getElementById("navbar").style.top = "-100px";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function time1() {
    clk = new Date();
    let time = clk.getHours() + ":" + clk.getMinutes() + ":" + clk.getSeconds();

    document.getElementById("clocks").innerHTML = time;
}
setInterval(time1, 1000);

function calc() {
    var a = parseInt(document.getElementById("rev").value);
    var b = parseInt(document.getElementById("occ").value);

    total = a / b;

    document.getElementById("total").value = total;
}
