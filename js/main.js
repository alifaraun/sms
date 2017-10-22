
/* modle roles in main page */
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
/* End modle roles */


/* Start carousel-bg */
currentimage = 0;
setInterval(function () {
    if (currentimage > 2)
    {
        currentimage = 0;
    }
    $('.carousel-bg').attr('id', 'carousel-bg-img' + (++currentimage));
}, 3500);
/* End carousel-bg */


