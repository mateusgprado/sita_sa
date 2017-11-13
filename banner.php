<div class="slider">
    <img class="mySlides" src="img/f1.jpg"/>
    <img class="mySlides" src="img/fT2.jpg"/>
    <img class="mySlides" src="img/f3.jpg"/>
    <img class="mySlides" src="img/f4.jpg"/>
    <img class="mySlides" src="img/f5.jpg"/>
    <img class="mySlides" src="img/f6.jpg"/>
</div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>