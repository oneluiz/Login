<?php
if(!isset($_SESSION['email'])) {
?>
<div class="user-plate">
	<a href="?login" class="card-character plate-logged-out" onclick="return Login.open()">
		<span class="card-portrait"></span>
		<span class="wow-login-key"></span>
		<span class="login-msg"><strong>Log in now</strong> to enhance and personalize your experience!</span>
	</a>
</div>
<?php 
}else{
?>
<div class="user-plate">
	<a id="user-plate" class="card-character plate-alliance ajax-update" rel="np" href="#"></a>
	<div class="meta-wrapper meta-alliance ajax-update">
		<div class="character-card card-game-char ajax-update">
			<div class="message">
				<span class="player-name">
				<?php echo @$profile['first_name'].'&nbsp;'.$profile['last_name'] ?> </span>
				<div class="character">
					<a class="character-name context-link serif " href="#" rel="np"> Rïp </a>
					<div class="guild">
						<a class="guild-name" href="#" rel="np"> Crysis </a>
					</div>
					<span class="avatar-frame">
						<img src="http://us.battle.net/static-render/us/ragnaros/159/88928927-avatar.jpg?alt=wow/static/images/2d/avatar/1-0.jpg" class="avatar avatar-wow"/>
						<span class="border"></span>
						<span class="icon icon-wow"></span>
					</span>
					<div id="context-1" class="ui-context character-select">
						<div class="context">
							<a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
							<div class="context-user">
								<strong>Rïp</strong>
							</div>
							<div class="context-links">
								<a href="#" title="Profile" rel="np" class="icon-profile link-first">
								<span class="context-icon"></span>Profile </a>
								<a href="#" title="View my posts" rel="np" class="icon-posts">
								<span class="context-icon"></span>
								</a>
								<a href="#" title="View auctions" rel="np" class="icon-auctions">
								<span class="context-icon"></span>
								</a>
								<a href="#" title="View events" rel="np" class="icon-events link-last">
								<span class="context-icon"></span>
								</a>
							</div>
						</div>
						<div class="character-list">
							<div class="primary chars-pane">
								<div class="char-wrapper">
									<a href="#" class="char pinned" rel="np">
										<span class="pin"></span>
										<span class="name">Rïp</span>
										<span class="class wow-class-5">90 Human Priest</span>
										<span class="realm up">Ragnaros</span>
									</a>
								</div>
								<a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
									<span class="plus"></span>
									Manage Characters<br/>
									<span>Customize characters that appear in this menu.</span>
								</a>
							</div>
							<div class="secondary chars-pane" style="display: none">
								<div class="char-wrapper scrollbar-wrapper" id="scroll">
									<div class="scrollbar">
										<div class="track">
											<div class="thumb">
											</div>
										</div>
									</div>
									<div class="viewport">
										<div class="overview">
											<a href="#" class="wow-class-5 pinned" rel="np" data-tooltip="Human Priest (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											90 Rïp </a>
											<a href="/wow/en/character/tichondrius/R%C3%AF/" class="wow-class-5" rel="np" onclick="CharSelect.pin(1, this); return false;" data-tooltip="Human Priest (Tichondrius)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Rï </a>
											<a href="/wow/en/character/ragnaros/Sul%C3%AF/" class="wow-class-7" rel="np" onclick="CharSelect.pin(2, this); return false;" data-tooltip="Draenei Shaman (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_11_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_7.jpg" alt="" width="14" height="14"/>
											</span>
											42 Sulï </a>
											<a href="/wow/en/character/ragnaros/Kriztal/" class="wow-class-8" rel="np" onclick="CharSelect.pin(3, this); return false;" data-tooltip="Human Mage (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_8.jpg" alt="" width="14" height="14"/>
											</span>
											90 Kriztal </a>
											<a href="/wow/en/character/ragnaros/Danassa/" class="wow-class-2" rel="np" onclick="CharSelect.pin(4, this); return false;" data-tooltip="Draenei Paladin (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_11_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_2.jpg" alt="" width="14" height="14"/>
											</span>
											45 Danassa </a>
											<a href="/wow/en/character/kelthuzad/R%C3%AF/" class="wow-class-5" rel="np" onclick="CharSelect.pin(5, this); return false;" data-tooltip="Human Priest (Kel'Thuzad)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Rï </a>
											<a href="/wow/en/character/malganis/R%C3%AF/" class="wow-class-5" rel="np" onclick="CharSelect.pin(6, this); return false;" data-tooltip="Human Priest (Mal'Ganis)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Rï </a>
											<a href="/wow/en/character/drakkari/R%C3%AF/" class="wow-class-5" rel="np" onclick="CharSelect.pin(7, this); return false;" data-tooltip="Human Priest (Drakkari)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Rï </a>
											<a href="/wow/en/character/illidan/Priestiko/" class="wow-class-5" rel="np" onclick="CharSelect.pin(8, this); return false;" data-tooltip="Human Priest (Illidan)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Priestiko </a>
											<a href="/wow/en/character/ragnaros/Rossh%C3%AF/" class="wow-class-1" rel="np" onclick="CharSelect.pin(9, this); return false;" data-tooltip="Pandaren Warrior (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_25_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_1.jpg" alt="" width="14" height="14"/>
											</span>
											67 Rosshï </a>
											<a href="/wow/en/character/ragnaros/Trompux/" class="wow-class-6" rel="np" onclick="CharSelect.pin(10, this); return false;" data-tooltip="Gnome Death Knight (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_7_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_6.jpg" alt="" width="14" height="14"/>
											</span>
											77 Trompux </a>
											<a href="/wow/en/character/quelthalas/Kr%C3%B2ker/" class="wow-class-8" rel="np" onclick="CharSelect.pin(11, this); return false;" data-tooltip="Worgen Mage (Quel'Thalas)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_22_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_8.jpg" alt="" width="14" height="14"/>
											</span>
											39 Kròker </a>
											<a href="/wow/en/character/darkspear/Ripsito/" class="wow-class-5" rel="np" onclick="CharSelect.pin(12, this); return false;" data-tooltip="Human Priest (Darkspear)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Ripsito </a>
											<a href="/wow/en/character/sargeras/Ripsito/" class="wow-class-5" rel="np" onclick="CharSelect.pin(13, this); return false;" data-tooltip="Human Priest (Sargeras)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_5.jpg" alt="" width="14" height="14"/>
											</span>
											1 Ripsito </a>
											<a href="/wow/en/character/ragnaros/Donpikaro/" class="wow-class-4" rel="np" onclick="CharSelect.pin(14, this); return false;" data-tooltip="Gnome Rogue (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_7_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_4.jpg" alt="" width="14" height="14"/>
											</span>
											3 Donpikaro </a>
											<a href="/wow/en/character/ragnaros/Likeastone/" class="wow-class-10" rel="np" onclick="CharSelect.pin(15, this); return false;" data-tooltip="Human Monk (Ragnaros)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_1_0.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_10.jpg" alt="" width="14" height="14"/>
											</span>
											20 Likeastone </a>
											<a href="/wow/en/character/drakkari/Lafollador%C3%A2/" class="wow-class-4" rel="np" onclick="CharSelect.pin(16, this); return false;" data-tooltip="Night Elf Rogue (Drakkari)">
											<span class="icon icon-race">
											<img src="http://media.blizzard.com/wow/icons/18/race_4_1.jpg" alt="" width="14" height="14"/>
											</span>
											<span class="icon icon-class">
											<img src="http://media.blizzard.com/wow/icons/18/class_4.jpg" alt="" width="14" height="14"/>
											</span>
											1 Lafolladorâ </a>
											<div class="no-results hide">
												No characters were found
											</div>
										</div>
									</div>
								</div>
								<div class="filter">
									<input type="input" class="input character-filter" value="Filter…" alt="Filter…"/><br/>
									<a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">Return to characters</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>