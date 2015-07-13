<?php require_once('includes/header.php') ?>

<h3 class="align-center">Choose pictures you like the most!</h3>

<div class="container marketing align-center">

	<img class="choice" alt="adrenaline_sporty" src="images/quizz/1.adrenaline_sporty1.jpg" />
	<img class="choice" alt="adventurous_sporty" src="images/quizz/2.adventurous_sporty.jpg" />
	<img class="choice" alt="sport_team_adrenaline" src="images/quizz/3.Sport_team_adrenaline.jpg" />
	<img class="choice" alt="adventure_puzzle" src="images/quizz/4.adventure_puzzles.jpg" /> 
	<img class="choice" alt="chill_drinks" src="images/quizz/5.chill_drinks.jpg" />
	<img class="choice" alt="chill_luxury" src="images/quizz/6.Chill_luxury1.jpg" />
	<img class="choice" alt="chill_drinks_luxury" src="images/quizz/7.chill_drinks_luxury.jpg" />
	<img class="choice" alt="food_healthy" src="images/quizz/8.Food_healthy.jpg" />
	<img class="choice" alt="food_chill_health" src="images/quizz/9.Food_chill_healthy.jpg" />
	<img class="choice" alt="culture_chill" src="images/quizz/10.culture_chill1.jpg" /> 
	<img class="choice" alt="culture" src="images/quizz/11.Culture.jpg" />
	<img class="choice" alt="exploring_adventure" src="images/quizz/12.exploring_adventure.jpg" /> 
	<img class="choice" alt="romantic_chill" src="images/quizz/13.Romantic_chill.jpg" />
	<img class="choice" alt="chill_luxury" src="images/quizz/14.Chill_luxury.jpg" />
	<img class="choice" alt="soldier_sport_adventure" src="images/quizz/15.soldier_sport_adventure.jpg" />
	<img class="choice" alt="unknown" src="images/quizz/16.unknown.jpg" /> 
</div>

<script type="text/javascript">
	// When clicked on choice, either add selected or remove selected class, number of choice with selected class denotes number of selected choices
	var picturesToChoose = 5;

    chosenSoFar = function() {
            var chosenSoFar = 0;
            $.each($(".choice"), function(index, value) {
                    if ($(value).hasClass("selected")) {
                            chosenSoFar++;
                    }
            });
            return chosenSoFar;
    };

    hasMoreToChoose = function() {
            return chosenSoFar() < picturesToChoose;
    };

    $(function() {
	    $(".choice").click(function () {
	            if ($(this).hasClass("selected")) {
	                    $(this).removeClass("selected");
	            } else {
	                    if (hasMoreToChoose()) {
	                            $(this).addClass("selected");
	                    }
	            }
	    });
	});
</script>

<?php require_once('includes/footer.php') ?>