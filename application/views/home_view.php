<div class="columns" style="padding: 80px 20%">
	<div class="column is-3">
		<div class="card">
			<header class="card-header" style="padding: 10px">
				<div class="media">
					<div class="media-content">
						<p class="title is-6">John Smith</p>
						<p class="subtitle is-6">@johnsmith</p>
					</div>
				</div>
			</header>
			<div class="card-content">
				<div class="content"></div>
			</div>
		</div>
	</div>
	<div class="column container" style="">
		<div class="card">
			<div class="card-content">
				<a id="post-trigger" href="#" class="content has-text-grey" style="text-decoration: underline">
					<div class="fas fa-edit"></div> Mulai buat posting
				</a>
			</div>
		</div>

		<div class="card">
			<div class="card-content">
				<div class="media">
					<div class="media-left">
						<figure class="image is-48x48">
							<img class="profile-pic-lg" src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
						</figure>
					</div>
					<div class="media-content">
						<p class="title is-6">John Smith</p>
						<p class="subtitle is-6">@johnsmith</p>
					</div>
				</div>

				<div class="content">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Phasellus nec iaculis mauris. <a>@bulmaio</a>.
					<a href="#">#css</a> <a href="#">#responsive</a>
					<br>
					<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
				</div>
			</div>

			<footer class="card-footer">
				<a href="#" class="card-footer-item">Suka</a>
				<a href="#" class="card-footer-item">Komentar</a>
				<a href="#" class="card-footer-item">Bagikan</a>
			</footer>
		</div>

		<div class="card">
			<div class="card-content">
				<div class="media">
					<div class="media-left">
						<figure class="image is-48x48">
							<img class="profile-pic-lg" src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
						</figure>
					</div>
					<div class="media-content">
						<p class="title is-6">John Smith</p>
						<p class="subtitle is-6">@johnsmith</p>
					</div>
				</div>
			</div>

			<div class="card-image">
				<figure class="image is-4by3">
					<img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
				</figure>
			</div>

			<div class="card-content">
				<div class="content">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Phasellus nec iaculis mauris. <a>@bulmaio</a>.
					<a href="#">#css</a> <a href="#">#responsive</a>
					<br>
					<time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
				</div>
			</div>

			<footer class="card-footer">
				<a href="#" class="card-footer-item">Suka</a>
				<a href="#" class="card-footer-item">Komentar</a>
				<a href="#" class="card-footer-item">Bagikan</a>
			</footer>
		</div>

	</div>
	<div class="column is-3">

		<div class="card">
			<header class="card-header">
				<small class="has-text-grey-lighter" style="text-align: right; width: 95%">Ad</small>
			</header>
			<div class="card-content">
				<p class="title" id="typed2" style="height: 100px"></p>
				<p class="subtitle">- Blinfoldking</p>
			</div>

			<div class="card-content">
				<a target="_blank" href="https://github.com/blinfoldking" class="button is-link is-outlined">Follow</a>
			</div>
		</div>
		<script>
			var typed2 = new Typed('#typed2', {
				strings: [
					"“Don't follow your dream, Follow my github”"
				],
				typeSpeed: 100,
				backSpeed: 0,
				fadeOut: true,
				loop: true
			});
		</script>
	</div>

	<div id="post-modal" class="modal">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<button class="delete" aria-label="close"></button>
			</header>
			<div class="modal-card-body">
				<textarea class="textarea" placeholder="what's on your mind"></textarea>
			</div>
			<div class="modal-card-foot">
				<button class="button is-info">Post</button>
				<button id="modal-cancel" class="button">Cancel</button>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
	<script>
		$("#post-trigger").click(() => $('#post-modal').toggleClass('is-active'))
		$("#post-modal .delete").click(() => $('#post-modal').toggleClass('is-active'))
		$("#post-modal #modal-cancel").click(() => $('#post-modal').toggleClass('is-active'))
	</script>
</div>

</body>

</html>