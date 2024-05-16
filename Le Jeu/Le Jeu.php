<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../Navigation_Footer/Navigation.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
</head>
<style>
	body {
		background-color: black;
		overflow: hidden;
	}

	html {
		cursor: url("../Annexes/cursor.png"), default;
		cursor: url("../Annexes/Pointer.png"), pointer;
	}
</style>

<body>
	<?php
	include '../Annexes/header.php';
	?>

	<!--==================== SEARCH ====================-->
	<div class="search" id="search">
		<form action="" class="search__form">
			<i class="ri-shopping-cart search__icon"></i>
			<input type="search" placeholder="What are you looking for?" class="search__input">
		</form>

		<i class="ri-close-line search__close" id="search-close"></i>
	</div>

	<!--==================== LOGIN ====================-->
	<div class="login" id="login">
		<form class="login__form" method="post">
			<h2 class="login__title">Connexion</h2>

			<div class="login__group">
				<div>
					<label for="email" class="login__label">Email</label>
					<input type="email" placeholder="Ecris ton mail" id="email" class="login__input" name="Mail">
				</div>

				<div>
					<label for="password" class="login__label">Mot de passe</label>
					<input type="password" placeholder="Entre ton mot de passe" id="password" class="login__input" name="Password">
				</div>
			</div>

			<div>
				<p class="login__signup">
					Tu n'as pas de compte ? <a href="#">Incris-toi !</a>
				</p>

				<a href="#" class="login__forgot">
					J'ai paumé mon mot de passe...
				</a>

				<button type="submit" class="login__button" name="Envoyer">Connexion</button>
			</div>
		</form>

		<i class="ri-close-line login__close" id="login-close"></i>
		<script src="../Navigation_Footer/Navigation.js"></script>
	</div>
	<script type="module">
		window.onload = function() {
			window.scrollTo(0, 0);
		}

		// import kaboom.js
		import kaboom from "https://unpkg.com/kaboom@3000.0.1/dist/kaboom.mjs";

// initialize kaboom context
kaboom({
	// Scale the whole game up
	scale: 4,
    background: [0,0,0],
	// Set the default font
	font: "monospace",
})

		// Loading a multi-frame sprite
		loadSprite("dino", "https://kaboomjs.com/examples/sprites/dino.png", {
			// The image contains 9 frames layed out horizontally, slice it into individual frames
			sliceX: 9,
			// Define animations
			anims: {
				"idle": {
					// Starts from frame 0, ends at frame 3
					from: 0,
					to: 3,
					// Frame per second
					speed: 5,
					loop: true,
				},
				"run": {
					from: 4,
					to: 7,
					speed: 10,
					loop: true,
				},
				// This animation only has 1 frame
				"jump": 8,
			},
		})

		const SPEED = 120
		const JUMP_FORCE = 500

		setGravity(640)

		// Add our player character
		const player = add([
			sprite("dino"),
			offscreen({
				destroy: true
			}),
			pos(center()),
			anchor("center"),
			area(),
			body(),
		])

		// .play is provided by sprite() component, it starts playing the specified animation (the animation information of "idle" is defined above in loadSprite)
		player.play("idle")

		// Add a platform
		add([
			rect(width(), height()),
			area(),
			outline(1),
			pos(0, height() - 40),
			body({
				isStatic: true
			}),
		])

		add([
			rect(width(), 24),
			area(),
			outline(1),
			pos(0, height() - (height() * 1.1)),
			body({
				isStatic: true
			}),
			"toit",
			color(rgb(0, 0, 0)),
		])

		add([
			rect(24, -height()),
			area(),
			outline(1),
			pos(-25, height()),
			body({
				isStatic: true
			}),
			"gauche",
		])

		add([
			rect(24, -height()),
			area(),
			outline(1),
			pos(width(), height()),
			body({
				isStatic: true
			}),
			"droite",
		])



		// Switch to "idle" or "run" animation when player hits ground
		player.onGround(() => {
			if (!isKeyDown("left") && !isKeyDown("right")) {
				player.play("idle")
			} else {
				player.play("run")
			}
		})

		player.onAnimEnd((anim) => {
			if (anim === "idle") {
				// You can also register an event that runs when certain anim ends
			}
		})

		onKeyPress("space", () => {
			if (player.isGrounded()) {
				player.jump(JUMP_FORCE)
				player.play("jump")
			}
		})

		onKeyDown("left", () => {
			player.move(-SPEED, 0)
			player.flipX = true
			// .play() will reset to the first frame of the anim, so we want to make sure it only runs when the current animation is not "run"
			if (player.isGrounded() && player.curAnim() !== "run") {
				player.play("run")
			}
		})

		onKeyDown("right", () => {
			player.move(SPEED, 0)
			player.flipX = false
			if (player.isGrounded() && player.curAnim() !== "run") {
				player.play("run")
			}
		})

		;
		["left", "right"].forEach((key) => {
			onKeyRelease(key, () => {
				// Only reset to "idle" if player is not holding any of these keys
				if (player.isGrounded() && !isKeyDown("left") && !isKeyDown("right")) {
					player.play("idle")
				}
			})
		})

player.onCollide("toit", () => {
	shake(10);
})



</script>
</body>

</html>