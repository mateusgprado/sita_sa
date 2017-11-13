<div class="slider">
    <img class="mySlides" src="img/f1.png"/>
    <img class="mySlides" src="img/f2.png"/>
    <img class="mySlides" src="img/f3.png"/>
    <img class="mySlides" src="img/f4.png"/>
    <img class="mySlides" src="img/f5.png"/>
    <img class="mySlides" src="img/f6.png"/>
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
        setTimeout(carousel, 3000); // Change image every 2 seconds
    }
</script>