<?=$this->Html->image('supplementary/monbre_opening.jpg', array('class' => 'imgbdr', 'align' => 'right', 'width' => 300, 'height' => 170, 'style' => 'margin-left: 6px;'));?>
<p>MonBre was the first commercial game that I created: <a href='http://monbre.com' target='_blank'>https://monbre.com</a></p>

<p>I developed MonBre while learning PHP. I had been sketching up monster designs for years, and after marathoning the Digimon World and Monster Rancher games on PS1, I'd come up with some ideas for MonBre. It was a year of developing MonBre before I officially released it to the public. It was, unfortunately, financially unsuccessful.</p>

<p>MonBre is a fantasy RPG in which you raise monsters to fight along with you as you explore the world and clear the dangerous enemies plaguing the world of Aerra. There's an overarching, Pokemon-esque goal of defeating all 10 gods in combat. What made MonBre unique was its open-world nature with a focus on story through quests and boss battles, and atmospheric details. For example, engaging an enemy in the wild didn't have the simple message of "Big Scary Golem wants to fight!", it would be described as a lumbering golem slowly making its way toward you. When you killed the golem, there was descriptive text where it turned back into clay. Even with my first steps into game design, I ensured the world was authentic and believable.</p>

<?=$this->Html->image('supplementary/sliverchimera.png', array('align' => 'left', 'height' => 171, 'style' => 'margin-right: 12px;'));?>

<p>Which is good, because most of my players are visually impaired. Even if MonBre was a mediocre game for most players, it worked out to be quite fun for blind/impaired players, who especially appreciated using the keyboard to fight battles.</p>

<p>MonBre was a very ambitious project. I poured over 2,500 hours into its development, with nearly everything custom-coded, including the forum and message systems. I wish I'd known better than to try and create such a huge world, but in many respects, MonBre was a learning experience, and a necessary stepping stone to greater development. As of late 2017, it is under passive development, which means I'll occasionally step in and develop it for fun. I half-joke that the game will be complete by 2025.</p>

<p>I commissioned <a href='https://vinnieveritas.com'>Vinnie Veritas</a> to draw the gods, and with only a few sentences of description per god, he fleshed out and drew what you see below.</p>

<?
	// In order of appearance!
	$carousel_entries = [	'gloria' => ['name' => 'Gloria, the Entertainer'], 		'quinton' => 	['name' => 'Quinton, the Knowledgeable'], 
							'shara' => 	['name' => 'Shara, the Lover'], 			'harold' => 	['name' => 'Harold, the Righteous'],
							'armen' => 	['name' => 'Armen, the Deceitful'], 		'syntia' => 	['name' => 'Syntia, the Melancholic'],
							'kiera' => 	['name' => 'Kiera, the Elementalist'], 		'mokal' => 		['name' => 'Mokal, the Creator'],
							'krisst' => ['name' => 'Krisst, the Fighter'], 			'omen' => 		['name' => 'Omen, the Deathbringer']];
	// dire($carousel_entries);
?>
<div id="mrbungle" class="carousel slide mb-5" data-ride="carousel" style='width: 75%; height: 40vh;'>
    <ol class="carousel-indicators m-0">
		<?  for ($i = 0; $i < 10; $i++) {  ?>
				<li data-target="#mrbungle" data-slide-to="<?=$i?>" <?=($i == 0) ? 'class="active"' : ''?>></li>		
		<? 	} ?>
    </ol>
    <div class="carousel-inner">
    <?  $i = -1; foreach ($carousel_entries as $url => $stats) { $i++; ?>
    			<div class="carousel-item <?=($i == 0) ? 'active' : ''?>">
    			  <a href='<?=$this->webroot?>/img/supplementary/<?=$url?>.jpg' target='_blank'>
    			  	<?=$this->Html->image("supplementary/$url.jpg", ['class' => 'd-block pb-1'])?>
    			  </a>
    			  <div class="carousel-caption py-0 d-block">
    			    <h5><?=$stats['name']?></h5>
    			  </div>
    			</div>	
    	<? 	} ?>
    </div>
    <a class="carousel-control-prev" href="#mrbungle" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mrbungle" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>