<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<!-- CSS Flwobite -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

	<!-- Image Style -->
	<style>
		.image {
			background-image: url('<?= base_url('') ?>/asep/image/Hexagon1.svg');
		}
	</style>

</head>

<body>
	<div class="image">
		<div class="flex justify-center items-center h-screen bg-blue-950">
			<div class="w-96 p-6 shadow-lg bg-white rounded-md">
				<h1 class=" text-xl block text-center font-semibold mb-4">Login Form</h1>
				<form action="<?= site_url('Auth/login') ?>" method="post">
					<div class="relative z-0 w-full mb-6 group">
						<input type="text" name="username" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " autofocus="" required />
						<label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Input Username</label>
					</div>
					<div class="relative z-0 w-full mb-6 group justify-center">
						<input type="password" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
						<label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
					</div>
					<button type="submit" class="text-purple-700 hover:text-white border-2 w-full border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900 justify-center">Login</button>
					<div id="hilang">
						<?= $this->session->flashdata('alert') ?>
					</div>
				</form>
				<h1 class="text-center text-bold">Hello !!</h1>
			</div>
		</div>
	</div>

	<!-- Scrip Flwobit -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
	
	<!-- jQuery -->
	<script src="<?= base_url('/asep/AdminLTE-3.2.0/') ?>plugins/jquery/jquery.min.js"></script>
	<script>
		$('#hilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);
	</script>
</body>

</html>
