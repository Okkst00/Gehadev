var mybutton = document.getElementById("myBtn");

window.onscroll = function () {
    scrollFunction();
};

// var current = "";

// sections.forEach((section) => {
//   const sectionTop = section.offsetTop;
//   if (pageYOffset >= sectionTop ) {
//     current = section.getAttribute("id"); }
// });

// navLi.forEach((li) => {
//   li.classList.remove("active");
//   if (li.classList.contains(current)) {
//     li.classList.add("active");
//   }
// });

// scroll top function && navbar drop scroll
function scrollFunction() {
    if (
        document.body.scrollTop > 360 ||
        document.documentElement.scrollTop > 360
    ) {
        mybutton.style.display = "block";
        document.getElementById("navbar1").style.top = "0";
    } else {
        mybutton.style.display = "none";
        document.getElementById("navbar1").style.top = "-100px";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// slider header
$(document).ready(function () {
    function detect_active() {
        var get_active = $("#dp-slider .dp_item:first-child").data("class");
        $("#dp-dots li").removeClass("active");
        $("#dp-dots li[data-class=" + get_active + "]").addClass("active");
    }

    $("#dp-next").click(function () {
        var total = $(".dp_item").length;
        $("#dp-slider .dp_item:first-child")
            .hide()
            .appendTo("#dp-slider")
            .fadeIn();
        $.each($(".dp_item"), function (index, dp_item) {
            $(dp_item).attr("data-position", index + 1);
        });

        detect_active();
    });

    $("#dp-prev").click(function () {
        var total = $(".dp_item").length;
        $("#dp-slider .dp_item:last-child")
            .hide()
            .prependTo("#dp-slider")
            .fadeIn();
        $.each($(".dp_item"), function (index, dp_item) {
            $(dp_item).attr("data-position", index + 1);
        });

        detect_active();
    });

    // $("#dp-dots li").click(function () {
    //   $("#dp-dots li").removeClass("active");
    // //   $(this).addClass("active");
    // //   var get_slide = $(this).attr("data-class");
    // //   console.log(get_slide);
    // //   $("#dp-slider .dp_item[data-class=" + get_slide + "]")
    // //     .hide()
    // //     .prependTo("#dp-slider")
    // //     .fadeIn();
    // //   $.each($(".dp_item"), function (index, dp_item) {
    // //     $(dp_item).attr("data-position", index + 1);
    // //   });
    // });

    $("body").on("click", "#dp-slider .dp_item:not(:first-child)", function () {
        var get_slide = $(this).attr("data-class");
        console.log(get_slide);
        $("#dp-slider .dp_item[data-class=" + get_slide + "]")
            .hide()
            .prependTo("#dp-slider")
            .fadeIn();
        $.each($(".dp_item"), function (index, dp_item) {
            $(dp_item).attr("data-position", index + 1);
        });

        detect_active();
    });
});

// change display menu
$(document).ready(function () {
    $("#menu button").click(function () {
        var hrefId = $(this).attr("href");
        $(".main-menu-content .page").hide();
        $(".main-menu-content").find(hrefId).show();
        $("#menu .btn").removeClass("active");
        $(this).addClass("active");
    });
});

var elements = document.getElementsByClassName(".main-menu-content");
for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = displayState;
}

function toggle() {
    document.onclick = function (e) {
        if (e.target.tagName == "BUTTON") {
            var href = e.target.getAttribute("href");
            toggleDisplay("page", "none");
            document.getElementById(href).style.display = "block";
        }
    };
}

window.addEventListener(
    "hashchange",
    () => window.history.pushState({}, "", "/"),
    {}
);

//   onElementHeightChange(document.body, function(){
//     AOS.refresh();
//   }
// );

// var header = document.getElementById("navbar1");
// var btns = header.getElementsByClassName("nav-link");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }

// let section = document.querySelectorAll('section');
//         let lists = document.querySelectorAll('.list');
//         function activeLink(li) {
//             lists.forEach((item) => item.classList.remove('active'));
//             li.classList.add('active');
//         }
//         lists.forEach((item) =>
//             item.addEventListener('click', function(){
//                 activeLink(this);
//             }));

//         window.onscroll = () => {
//             section.forEach(sec => {
//                 let top = window.scrollY;
//                 let offset = sec.offsetTop;
//                 let height = sec.offsetHeight;
//                 let id = sec.getAttribute('id');

//                 if (top >= offset && top < offset + height) {
//                     const target = document.querySelector(`[href='#${id}']`).parentElement;
//                     activeLink(target);
//                 }
//             })
//         };
