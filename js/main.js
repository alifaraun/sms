
/* modle roles in main page */
function myImg_show() {
    document.getElementById('myModal').style.display = "block";
    document.getElementById("img01").src = document.getElementById('myImg').src;
}
// When the user clicks on <span> (x), close the modal
function myImg_close() {
    document.getElementById('myModal').style.display = "none";
}
/* End modle roles */


/* Start carousel-bg */
currentimage = 1;
var change_img_bg = setInterval(function () {
    if (document.getElementById('carousel-bg-doesnot-exist') == null)
    {
        clearInterval(change_img_bg);
        return null;
    }
    if (currentimage > 2)
    {
        currentimage = 0;
    }
    $('.carousel-bg').attr('id', 'carousel-bg-img' + (++currentimage));
}, 3500);
/* End carousel-bg */


/* Start button go to top */
// When the user scrolls down 500px from the top of the document, show the button
window.onscroll = function () {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("btn-to-top").style.display = "block";
    } else {
        document.getElementById("btn-to-top").style.display = "none";
    }
};
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
/* End button go to top */


/* Start FAQ */
function change_state_faq(question) {
    if ($(question).next().css('display') == 'block')
    {
        $(question).next().hide('slow');
        $(question).find('i').addClass('fa-plus-circle').removeClass('fa-minus-circle');
    }
    else
    {
        $(question).next().show('slow');
        $(question).find('i').addClass('fa-minus-circle').removeClass('fa-plus-circle');
    }
}
/* End FAQ */

