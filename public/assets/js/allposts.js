var mybutton = document.getElementById("myBtn");

    
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;

    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
        }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


    function time1() {
        clk = new Date();
        let time = clk.getHours()+':'+clk.getMinutes()+':'+clk.getSeconds();

        document.getElementById("clocks").innerHTML = time;
    }
    setInterval(time1,1000);


    function instantSearch() {
        document.querySelectorAll('.main-cont')
        .forEach(
            item => item.querySelectorAll('h5')[0]
            .innerText.toLowerCase()
            .indexOf(document.querySelector('#input')
            .value.toLowerCase()) > -1 ? item.style.display = 'block' : item.style.display = 'none'
        );
        
    }


    // $(document).ready(function(){
    //     $(".main-cont").slice(0, 6).show();
    //     $("#loadMore").on("click", function(e){
    //         e.preventDefault();
    //         $(".main-cont:hidden").slice(0, 6).slideDown();
    //         if($(".main-cont:hidden").length == 0) {
    //         $("#loadMore").text("").addClass("noContent");
    //         }
    //     });
    // })