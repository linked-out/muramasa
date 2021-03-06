<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js" integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
<div class="columns" style="padding: 80px 20%">
	<div class="column is-3">
		<div class="card">
			<div style="background: url(https://via.placeholder.com/1000); height: 90px; background-size: cover">
				&nbsp;
			</div>
			<div style="
					background: url(https://avatars1.githubusercontent.com/u/24368528?s=400&v=4); 
					height: 70px; 
					width: 70px; 
					border: solid 3px white;
					border-radius: 50%;
					background-size: cover;
					position: absolute;
					top: 50px;
					left: calc(50% - 35px);
				">
				&nbsp;
			</div>
			<header class="card-header" style="padding: 10px; padding-top: 40px;">
				<div class="media" style="margin: auto">
					<div class="media-content">

						<?php
						if (isset($this->session->user)) {
							$user = $this->session->user;
							echo
								'<p class="title is-6" style="text-align: center">' . $user->firstname . ' ' . $user->lastname . '</p>';
							echo '<p class="subtitle is-6" style="text-align: center">' . $user->email . '</p>';
						}
						?>
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
		<?php
		$posts = array_reverse($posts);
		foreach ($posts as $post) {
			echo '
		<div class="card">
			<div class="card-content">
				<div class="media">
					<div class="media-left">
						<figure class="image is-48x48">
							<img class="profile-pic-lg" src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
						</figure>
					</div>
					<div class="media-content">
						<p class="title is-6">' . $post->firstname . ' ' . $post->lastname . '</p>
						<p class="subtitle is-6">' . $post->email . '</p>
					</div>';
			if ($post->user_id == $this->session->user->id)
				echo
					'<div class="media-right">
						<a href="' . base_url('home/delete/' . $post->id) . '"><i class="fas fa-minus has-text-danger"></i></a>&nbsp;
						<a onClick="edit(' . $post->id . ',\'' . $post->content . '\')" ><i class="fas fa-edit has-text-info"></i></a>
					</div>
				';
			echo		'
		</div>
				<div class="content">' . $post->content . '</div>
			</div>
		</div>
		';
		}
		?>
		<div id="edit-modal" class="modal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<div class="modal-card-head">
					<button class="delete" aria-label="close"></button>
				</div>
				<form method="POST" action="<?php echo base_url('home/edit') ?>">
					<div class="modal-card-body">
						<input type="text" name="id" id="edit-id" value="" hidden>
						<textarea name="content" id="edit-content" class="textarea" placeholder="what's on your mind"></textarea>
					</div>
					<div class="modal-card-foot">
						<input type="submit" class="button is-info" />
					</div>
				</form>
			</div>
		</div>
		<script>
			function edit(id, content) {
				$('#edit-modal').addClass('is-active');
				$('#edit-modal .delete').click(() => $('#edit-modal').removeClass('is-active'));

				$('#edit-content').val(content);
				$('#edit-id').val(id);
			}
		</script>
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
			<div class="modal-card-head">
				<button class="delete" aria-label="close"></button>
			</div>
			<form method="POST" action="<?php echo base_url('home/post') ?>">
				<div class="modal-card-body">
					<textarea name="content" class="textarea" placeholder="what's on your mind"></textarea>
				</div>
				<div class="modal-card-foot">
					<input type="submit" class="button is-info" value="Submit" />
				</div>
			</form>
		</div>
	</div>
	<script>
		$("#post-trigger").click(() => $('#post-modal').toggleClass('is-active'))
		$("#post-modal .delete").click(() => $('#post-modal').toggleClass('is-active'))
		$("#post-modal #modal-cancel").click(() => $('#post-modal').toggleClass('is-active'))
	</script>
</div>

</body>

</html>