<?php include('header.php'); ?>
<style>
.question:hover{cursor: pointer;color:#68ADC3;}
.stickies{background: #F7F2CB;}
</style>
<section class="grid 1of1 content">

		<ul class="items">
<!-- START STICKIES -->

		<?php foreach(stickies() as $sticky){ ?>
			<li>
				<article class="article-preview force-grid sticky">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#locatie" title="Locatie"><?php echo $sticky->title; ?></a>
						</h3>
						<footer>
							<small>
								Gepost op <time datetime=""><?php echo $sticky->date; ?></time> door <?php echo $sticky->author; ?>.
							</small>
						</footer>

					</div>
					<div class="grid 1of3 stick-to-grid remove-padding center">
						<a href="" title="" class="buttonlink">Lees Meer</a>
					</div>
					
					<?php echo $sticky->text; ?>

				</article>

			</li>
		<?php } ?>
		       

<!-- END STICKIES -->
			<hr />
			<li>
				<article class="latest-article-preview">
					<h1>
						<a href="#welcome" title="Welkom"><?php getWelcomeTitle(); ?></a>
					</h1>
					
					<?php getWelcomeText(); ?>

					<?php foreach(faqs() as $key => $faq){ ?>
						<h3 triggerfor="trigger<?php echo $key; ?>" class="question"><?php echo $faq->title; ?></h3>
						<p id="trigger<?php echo $key; ?>" class="content answer">
						<?php echo $faq->text; ?>
						</p>
					<?php } ?>
					
					
					
					<!--<h3 triggerfor="wat" class="question">Wat is een Hackerspace?</h3>
					<p id="wat" class="content answer">
						Het is een locatie waar gelijkgestemden kunnen samenwerken aan projecten. Vaak zijn dit electronica, informatica of gewoon kunstzinnige experimenten. Al dit experimenteren, of liever gezegd, hacken heeft maar één doel: de hackerspace upgraden tot een plaats die inspireert om nog leukere dingen te maken. Een locatie is 1 kant van het verhaal, aan de andere kant zijn er de leden en bezoekers, de échte bron van ideeën en kennis.
					</p>
					<h3 triggerfor="voorwie" class="question">Voor wie is de Hackerspace?</h3>
					<p id="voorwie" class="content answer">
						Eigenlijk is iedereen welkom! Heb je een vraag? Een idee? Wil je de sfeer eens komen opsnuiven? Kom gerust langs!
					</p>
					<h3 triggerfor="wanneer" class="question">Wanneer komen jullie samen?</h3>
					<p id="wanneer" class="content answer">
						Zolang we geen echte locatie hebben voor onze space, houden we onze wekelijkse meetings in Kermeta. Deze meetings starten om 20h, iedere dinsdag. Kom gerust langs! Je bent meer dan welkom!<br /><br />
						<i><b>Opgelet:</b> Tijdens de zomermaanden houden we onze weeklijkse meetings in 'Het Hooghuis', Lombaardstraat 6, in Hasselt. De timing wordt steeds meegegeven op onze Mailinglist.</i>
					</p>
					<h3 triggerfor="wanneer-nog" class="question">Andere Evenementen?</h3>
					<p id="wanneer-nog" class="content answer">
						Zeker! Zo nu en dan organiseren we eens een DevWeekend of een Workshopdag. Meer info over komende evenementen vind je <a href="http://wiki.hsha.be/index.php/Main_Page">hier</a>.
					</p>-->
<!--
					<a href="" title="" class="buttonlink">Read More</a>

					<footer>
						<small>
							Gepost op <time datetime="dateTime">vrijdag 30 augustus</time> door Brixel.
						</small>
					</footer>-->
				</article>

			</li>



			<hr />

			<!-- ALL THE POSTS -->
			<li>
				<article class="article-preview force-grid">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#article" title="TweetBot">Geen Blogposts</a>
						</h3>
						
						<footer>
							<small>
								Posted <time datetime="">DateTime</time> by Author.
							</small>
						</footer>

					</div>
					<div class="grid 1of3 stick-to-grid remove-padding center">
						<a href="" title="" class="buttonlink">Read</a>
					</div>
					<p>Er zijn nog geen blogberichten op deze pagina.</p>
				</article>
			</li>
			<!--
			<li>
				<article class="article-preview force-grid">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#article" title="TweetBot">Tweetbot</a>
						</h3>
						
						<footer>
							<small>
								Posted <time datetime="">DateTime</time> by Author.
							</small>
						</footer>

					</div>
					<div class="grid 1of3 stick-to-grid remove-padding center">
						<a href="" title="" class="buttonlink">Read</a>
					</div>
					<p>Een automatische tweetbot voor de hackerspace</p>
				</article>
			</li>

			<li>
				<article class="article-preview force-grid">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#article" title="TweetBot">Tweetbot</a>
						</h3>
						
						<footer>
							<small>
								Posted <time datetime="">DateTime</time> by Author.
							</small>
						</footer>

					</div>
					<div class="grid 1of3 stick-to-grid remove-padding center">
						<a href="" title="" class="buttonlink">Read</a>
					</div>
					<p>Een automatische tweetbot voor de hackerspace</p>
				</article>
			</li>
			-->
			<!-- End loop -->
		</ul>


</section>

<?php include('footer.php'); ?>
