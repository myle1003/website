<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".container-button").click(function(){
            $(".container").fadeOut("slow");
            $(".epend").fadeIn("slow");
        });
    });
    $(document).ready(function(){
        $(".epend").click(function(){
            $(".epend").fadeOut("slow");
            $(".container").fadeIn("slow");
        });
    });
    $(document).ready(function(){
        $(".home").click(function(){
            $(".slide-home").slideToggle("slow");
        });
    });
    $(document).ready(function(){
        $(".news").click(function(){
            $(".slide-news").slideToggle("slow");
        });
    });
    $(document).ready(function(){
        $(".contact").click(function(){
            $(".slide-contact").slideToggle("slow");
        });
    });
    $(document).ready(function(){
        $(".about").click(function(){
            $(".slide-about").slideToggle("slow");
        });
    });

</script>
<div>
    <div class="container">
        <ul>
            <li><a class="home" href="#">Home</a>
                <div class="slide-home" hidden>
                    <ul>
                        <li><a href="#">1.Home</a></li>
                        <li><a href="#">2.Home</a></li>
                        <li><a href="#">3.Home</a></li>
                        <li><a href="#">4.Home</a></li>

                    </ul>
                </div>
            </li>
            <li>
                <a class="news" href="#">News</a>
                <div class="slide-news" hidden>
                    <ul>
                        <li><a href="#">1.News</a></li>
                        <li><a href="#">2.News</a></li>
                        <li><a href="#">3.News</a></li>
                        <li><a href="#">4.News</a></li>

                    </ul>
                </div>
            </li>
            <li>
                <a class="contact" href="#">Contact</a>
                <div class="slide-contact" hidden>
                    <ul>
                        <li><a href="#">1.Contact</a></li>
                        <li><a href="#">2.Contact</a></li>
                        <li><a href="#">3.Contact</a></li>
                        <li><a href="#">4.Contact</a></li>

                    </ul>
                </div>
            </li>
            <li>
                <a class="about" href="#">About</a>
                <div class="slide-about" hidden>
                    <ul>
                        <li><a href="#">1.About</a></li>
                        <li><a href="#">2.About</a></li>
                        <li><a href="#">3.About</a></li>
                        <li><a href="#">4.About</a></li>

                    </ul>
                </div>
            </li>

        </ul>
        <div class="container-button">
            <label>
                Hide
            </label>
        </div>
    </div>
    <div class="epend" hidden>
        <label>=></label>
    </div>


</div>