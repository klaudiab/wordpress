<?php get_header(); ?>
	
	<main>
		<section class="insurance-contact">
			<div class="insurance-overlay">
			</div>
			<div class="insurance-about" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
				<h1>Ubezpieczenie majątkowe</h1>
				<p>Skontaktuj się z nami i skorzystaj <br>ze specjalnej oferty!</p>
			</div>
			
			<div class="contact-form" data-aos="fade-down" data-aos-duration="1500">
				<div class="contact-form-container">
					<h3>Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h3>
					
					<input class="form-control" type="text" placeholder="Imię i nazwisko" required="" id="name_surname" name="name_surname">
					<input class="form-control" type="email" placeholder="Adres e-mail" required="" id="email" name="email">
					<input class="form-control" type="tel" placeholder="Nr telefonu" required="" id="phone_number" name="phone_number">
					
					<div class="row">
						<input class="form-control" type="text" placeholder="Miejscowość" required="" id="place" name="place">
						<input class="form-control" type="text" placeholder="Kod pocztowy" required="" id="postal_code" name="postal_code">
					</div>
					
					<div class="checkbox">
						<input type="checkbox" id="checkbox">
						<label for="checkbox">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</label>
					</div>
					
					<button class="btn" type="submit">Wyślij</button>
				</div>
			</div>
		</section>
		
		<section class="insurance-description">
			<div class="insurance-description-container">
				<h2 data-aos="fade-right" data-aos-offset="300">Ubezpieczenia majątkowe</h2>
				<subhead data-aos="fade-right" data-aos-offset="300">Co obejmują?</subhead>
				<p data-aos="fade-left" data-aos-offset="300"><strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </strong></p>
				<p data-aos="fade-left" data-aos-offset="300">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur </p>
				
				<button class="btn" type="submit" data-aos="zoom-in-up">Zamów ubezpieczenie</button>
			</div>
		</section>
	</main>
	
	<?php get_footer(); ?>