		
				<div class="music_column2">	
					<header>
						<h1>JavaJam Coffee House</h1>
					</header>
					<img src="images\heroguitar.jpg" width="100%" height="180px">
					<h2>Music at JavaJam</h2>
						<p id="desc">The first Friday night each month at JavaJam is a special night. Join us from 8pm to 11pm for some music you won't
						want to miss!
						</p>
						<?php
						$previousmonth="";
					foreach($artists as $rec)
					{	
						if ($rec ->Month==$previousmonth) {
							echo "<table align='center' width='517' id='music_table'>";
								echo "	<tr>
								<td id='melanie_img'><img src='".$rec ->Musician_Image_URL."' width='60px' height='60px'></td>
								<td id='music_text1'>".' ' .$rec ->Name.' '.$rec ->Description."</td>
								</tr>";
								echo "</table>";
								$previousmonth=$rec ->Month;

						}
						else{
							echo "<p id='month'>".$rec ->Month."</p>";
								echo "<table align='center' width='517' id='music_table'>";
								echo "	<tr>
								<td id='melanie_img'><img src='".$rec ->Musician_Image_URL."' width='60px' height='60px'></td>
								<td id='music_text1'>".' ' .$rec ->Name.' '.$rec ->Description."</td>
								</tr>";
								echo "</table>";
								$previousmonth=$rec ->Month;
						}
					}

					

				?>
				</div>
			</div>