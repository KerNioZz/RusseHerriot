<section class="index" aria-label="Index">
	<header class="index__header">
		<div class="index__header--container">
			<p>test</p>
		</div>
	</header>
	<section class="index__body">
		<article class="stack">
			<div class="stack__item">

				<h2 class="bold">Dernier cours</h2>

				<div class="course">
					<div class="course__thumbnail">
						<img src="https://via.placeholder.com/300x200" alt="Miniature du cours : <?= $this->courseInfo['group_name'] ?>">
					</div>
					<div class="course__info">
						<div class="course__info--title">
							<span><?= $this->courseInfo['group_name'] ?></span>
						</div>
						<div class="course__info--numbers">
							<span>Nombre de chapitres : <?= $this->courseInfo['number_of_chapters'] ?></span><span>Nombre de leçons : <?= $this->courseInfo['number_of_lessons'] ?></span>
						</div>
						<div class="course__info--description">
							<p>
								<?= $this->courseInfo['group_description'] ?>
							</p>
						</div>
					</div>
				</div>

				<a href="?action=lessons&amp;alias=<?= $this->courseInfo['group_alias'] ?>" class="button"><span class="button__body"><?= $this->viewMore ?></span></a>


			</div>
			<div class="stack__item">

				<h2 class="bold">Derniers quiz</h2>
				<div class="quiz__container">
					<?php
					foreach ($this->quizzesInfo as $k => $v) {
					?>

						<div class="quiz__item">
							<div class="quiz__thumbnail" style="background: url('./public/img/thumbnails/quizzes/<?= $v['thumbnail'] ?>'); background-size: cover;">
							</div>
							<div class="quiz__info">
								<p class="quiz__info--title">
									<?= $v['title'] ?>
								</p>
								<p class="quiz__info--description">
									<?= $v['description'] ?>
								</p>
							</div>
						</div>

					<?php
					}
					?>
				</div>

				<a href="?action=quizzes" class="button"><span class="button__body"><?= $this->viewMore ?></span></a>


			</div>
		</article>
		<article class="stack">
			<div class="stack__item">
				<h2 class="bold">Espace membre</h2>

				<div class="home__container">
					<div class="home__thumbnail">
						<i class="far fa-user"></i>
					</div>
					<div class="home__description">
						<p>
							Vous avez la possibilité d'avoir accès à un compte utilisateur sur RusseHerriot! Pour l'obtenir, rien de plus simple : suivez le lien ci-dessous, et remplissez le formulaire en suivant les instructions!
						</p>
					</div>
				</div>

				<a href="?action=signin" class="button centerBlock"><span class="button__body"><?= $this->viewMore ?></span></a>
			</div>
		</article>
	</section>
	<footer class="index__footer">
		<h2 class="underline">API</h2>

		<div class="api__container">
			<div class="api__thumbnail">
				<i class="fas fa-cogs"></i>
			</div>
			<div class="api__description">
				Les développeurs ont également la possibilité d'intégrer l'API de RusseHerriot dans leur projet. Vous devrez vous rendre dans votre espace membre, activer le service, et suivre les instructions!
			</div>
		</div>

		<a href="?action=apiInfo" class="button"><span class="button__body"><?= $this->viewMore ?></span></a>
	</footer>
</section>