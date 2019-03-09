					
					<div class="column2">	
					<header>
						<h1>JavaJam Coffee House</h1>
					</header>
					<div class="gap">
					</div>
					<h2>Jobs at JavaJam</h2>
					<p id="jobs1">Want to work at JavaJam? Fill out the form below to start your application.Required fields are marked with an asterisk (*).</p><br>
					
						<form id="usrform" method="POST" action="<?php echo base_url()?>Jobs/form_validation" >
						<?php
							if($this->uri->segment(2)=="inserted")
							{
								echo "Data Insert Success!";
							}
						?>
						<table id="usrtab" cellpadding="5">
							<tr><td align="right">*Name:</td><td><input type="text" name="nameinput"><span class="text-danger"><?php echo form_error("nameinput");?></span></td></tr>
							<tr><td align="right">*E-mail:</td><td><input type="text" name="emailinput"><span class="text-danger"><?php echo form_error("emailinput");?></span></td></tr>
							<tr><td align="right" valign="top">*Experience:</td><td><textarea name="experience" form="usrform" rows="3" cols="28"></textarea></td></tr>
							<tr><td align="center"><input type="submit" name="submit" value="Apply"></td></tr>
						</form>
					</table>
				</div>
				
			</div>