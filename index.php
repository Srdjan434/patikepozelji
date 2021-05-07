    <?php
        include "data/header.php"   
    ?>

    <div id="news">
        <h2>! ! ! NOVO U PONUDI ! ! !</h2>
        <button id="myBtn">Pogledaj..</button>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Pripremili smo za Vas nešto novo, od sada dizajn koji izaberete možemo odraditi na vašim patikama bez kupovine Air Force patika.<br/> To nije sve, takodje mozemo uraditi i prepravku nekog dizajna, sakriti ogrebotine ili obojiti cele patike i to po ceni od samo 50$!</p>
            </div>
        </div>
        <script>
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
            modal.style.display = "block";
            }
            span.onclick = function() {
            modal.style.display = "none";
            }
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script>
    </div>    

    <div id="products">
            <div class="block">
                <img src="img/Waves.jpg" alt="AF1Waves"/>
                <p class="description"><b> Air Force 1 Waves </b></p>
                <p class="price"><b>120&euro;</b></p>
            </div>
            <div class="block">
                <img src="img/sky.jpg" alt="AF1Sky"/>
                <p class="description"><b> Air Force 1 BlueSky </b></p>
                <p class="price"><b>120&euro;</b></p>
            </div>
            <div class="block">
                <img src="img/b&w.jpg" alt="AF1BlackAndWhite"/>
                <p class="description"><b> Air Force 1 Black And White </b></p>
                <p class="price"><b>120&euro;</b></p>
            </div>
            <div class="block">
                <img src="img/cartoon2.jpg" alt="AF1Cartoon"/>
                <p class="description"><b> Air Force 1 Cartoon </b></p>
                <p class="price"><b>120&euro;</b></p>
            </div>    
            <div class="block">
                <img src="img/flowers.jpg" alt="AF1Flowers"/>
                <p class="description"><b> Air Force 1 Flowers </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div> 
            <div class="block">
                <img src="img/goofy.jpg" alt="AF1Goofy"/>
                <p class="description"><b> Air Force 1 Goofy </b></p>
                <p class="price"><b>120&euro;</b></p>
            </div> 
            <div class="block">
                <img src="img/swoosh.jpg" alt="AF1Swoosh"/>
                <p class="description"><b> Air Force 1 Swoosh </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div> 
            <div class="block">
                <img src="img/jaguar.jpg" alt="AF1Jaguar"/>
                <p class="description"><b> Air Force 1 Jaguar </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div>   
            <div class="block">
                <img src="img/color.jpg" alt="AF1Color"/>
                <p class="description"><b> Air Force 1 Color </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div>  
            <div class="block">
                <img src="img/watergun.jpg" alt="AF1Watergun"/>
                <p class="description"><b> Air Force 1 Watergun </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div>  
            <div class="block">
                <img src="img/cartoon.jpg" alt="AF1Cartoon"/>
                <p class="description"><b> Air Force 1 Cartoon </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div>
            <div class="block">
                <img src="img/tom&jerry.jpg" alt="AF1Tom&jerry"/>
                <p class="description"><b> Air Force 1 Tom&Jerry </b></p>
                <p class="price"><b> 120&euro;</b></p>
            </div>       
    </div>
    <div id="up">
        <a href="#slider"><i class="fas fa-arrow-up"></i></a>
    </div>

    <?php 
        include "data/footer.php"
    ?>