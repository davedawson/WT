<?php require($_SERVER["DOCUMENT_ROOT"]."/_/_inc/header.php"); echo "\n"; ?>

	<section id="conversations" class="wrap">
		<section id="conversation-1" class="conversation">
			<header>
				<section class="author large">
					<img src="/img/users/brendan-photo.jpg" alt="brendan" />
					<p>Brendan</p>
				</section><!-- /.author -->
				<section class="conversation-info">
					<p class="meta">11:18 am <em>in</em> <a href="/cat/flowers">#flowers</a></p>
					<h2>What about these flowers?</h2>
				</section><!-- /.conversation-info -->
			</header>
			<section class="conv-content">
				<section class="post-wrapper">
					<article class="post-content photo cf">
						<img src="/img/uploads/flower.jpg" alt="flowers" />
					</article><!-- /.photo --> 
					<p>Have you made a decision on the flowers? <a href="#" class="button">Tell people!</a></p>
				</section><!-- /.post-wrapper -->
				<section class="discussion">
					<p>Discussing: <a href="#">Brendan</a>, <a href="#">Paige</a> <a href="#" class="button">+ Add someone to this conversation</a></p>
					<section class="form">
						<img src="/img/users/brendan-photo.jpg" alt="brendan" class="author medium" />
						<form>
							<textarea>
							</textarea>
							<a href="#">Add an image or event to this response</a>
							<input type="submit" class="button" value="Repond" />
						</form>
					</section><!-- /.form -->
					<section class="responses">
						<section class="response text">
							<img src="/img/users/paige-photo.jpg" alt="Paige" class="author" />
							<article class="text">
								<p class="meta">4:16 pm</p>
								<p>That’s more like it! Where are those from?</p>
							</article>
						</section><!-- /.response -->
						<section class="response photo">
							<img src="/img/users/brendan-photo.jpg" alt="Paige" class="author" />
							<p class="meta">3:17 pm</p>
							<p>What about something like this?</p>
							<img src="#" alt="flowers" />
						</section><!-- /.response -->
						<section class="response text">
							<img src="/img/users/paige-photo.jpg" alt="Paige" class="author" />
							<article class="text">
								<p class="meta">2:41 pm</p>
								<p>Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus.</p>
							</article>
						</section><!-- /.response -->					</section><!-- /.responses -->
				</section><!-- /.discussion -->
			</section><!-- /.conv-content -->
		</section><!-- /#conversation-1 -->
	</section><!-- /#conversations -->
<?php require($_SERVER["DOCUMENT_ROOT"]."/_/_inc/footer.php"); echo "\n"; ?>