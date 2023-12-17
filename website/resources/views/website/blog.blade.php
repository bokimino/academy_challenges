<!DOCTYPE html>
<html>
	<head>
		<!-- <title>Document</title> -->
        <title>@yield('title', 'blog')</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />

		<!-- Latest compiled and minified Bootstrap 4.6 CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
			integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
			crossorigin="anonymous"
		/>
		<!-- CSS script -->
		<link rel="stylesheet" href="style.css" />
		<!-- Latest Font-Awesome CDN -->
		<!-- Latest Font-Awesome CDN -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
			integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>
	<body>
		@extends('layouts.main')
         @section('title', 'Blog')
		@include('layouts.styles') 
        @section('content')
		<div class="bg-container">
			<div class="bg-overlay"></div>

			<div class="center text-left text-white">
				<h2>Man must explore, and this is exploration at its greatest</h2>
				<h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
				<p>Posted by Start Boostrap on August 18 2017</p>
			</div>
		</div>
		<div class="container my-3">
			<div class="row">
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis veniam hic natus sed dolor officia quisquam
						accusamus, consequatur alias iusto id minima delectus recusandae
						dolore? Pariatur iure tempore blanditiis illo sint quod accusamus
						architecto praesentium ad voluptate, distinctio, sunt, totam amet
						rerum nemo velit provident. Quia, nesciunt nemo.
					</p>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis veniam hic natus sed dolor officia quisquam
						accusamus, consequatur alias iusto id minima delectus recusandae uod
						accusamus architecto praesentium ad voluptate, distinctio, sunt,
						totam amet rerum nemo velit provident. Quia, nesciunt nemo.
					</p>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis vunt, totam amet rerum nemo velit provident. Quia,
						nesciunt nemo.
					</p>
				</div>
			</div>
			<div class="col-8 offset-2 py-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
					numquam debitis veniam hic natus sed dolor officia quisquam accusamus,
					consequatur alias iusto id minima delectus recusandae dolore? Pariatur
					iure tempore blanditiis illo sint quod accusamus architecto
					praesentium ad voluptate, distinctio, consequatur alias iusto id
					minima delectus recusandae dolore? Pariatur iure tempore blanditiis
					illo sint quod accusamus architecto praesentium ad voluptate,
					distinctio, ssunt, totam amet rerum nemo velit provident. Quia,
					nesciunt nemo.
				</p>
			</div>
			<div class="col-8 offset-2 py-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
					numquam debitis v consequatur alias iusto id minima delectus
					recusandae dolore? Pariatur iure tempore blanditiis illo sint quod
					accusamus architecto praesentium ad voluptate, distinctio, seniam hic
					natus sed dolor officia quisquam accusamus, consequatur alias iusto id
					minima delectus recusandae uod accusamus architecto praesentium ad
					voluptate, distinctio, sunt, totam amet rerum nemo velit provident.
					Quia, nesciunt nemo.
				</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-8 offset-2">
					<h3 class="text-capitalize">Final frontier</h3>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis veniam hic natus sed dolor officia quisquam
						accusamus, consequatur alias iusto id minima delectus recusandae
						dolore? Pariatur iure tempore blanditiis illo sint quod accusamus
						architecto praesentium ad voluptate, distinctio, sunt, totam amet
						rerum nemo velit provident. Quia, nesciunt nemo.
					</p>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis veniam hic natus sed dolor officia quisquam
						accusamus, consequatur alias iusto id minima delectus recusandae uod
						accusamus architecto praesentium ad voluptate, distinctio, sunt,
						totam amet rerum nemo velit provident. Quia, nesciunt nemo.
					</p>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis vunt, totam amet rerum nemo velit provident. Quia,
						nesciunt nemo.
					</p>
				</div>
			</div>
			<div class="col-8 offset-2 py-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
					numquam debitis veniam hic natus sed dolor officia quisquam accusamus,
					consequatur alias iusto id minima delectus recusandae dolore? Pariatur
					iure tempore blanditiis illo sint quod accusamus architecto
					praesentium ad voluptate, distinctio, consequatur alias iusto id
					minima delectus recusandae dolore? Pariatur iure tempore blanditiis
					illo sint quod accusamus architecto praesentium ad voluptate,
					distinctio, ssunt, totam amet rerum nemo velit provident. Quia,
					nesciunt nemo.
				</p>
			</div>
			<div class="col-8 offset-2 py-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
					numquam debitis v consequatur alias iusto id minima delectus
					recusandae dolore? Pariatur iure tempore blanditiis illo sint quod
					accusamus architecto praesentium ad voluptate, distinctio, seniam hic
					natus sed dolor officia quisquam accusamus, consequatur alias iusto id
					minima delectus recusandae uod accusamus architecto praesentium ad
					voluptate, distinctio, sunt, totam amet rerum nemo velit provident.
					Quia, nesciunt nemo.
				</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-8 offset-2">
					<h3 class="text-capitalize">reaching for the start</h3>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis veniam hic natus sed dolor officia quisquam
						accusamus, consequatur alias iusto id minima delectus recusandae
						dolore? Pariatur iure tempore blanditiis illo sint quod accusamus
						architecto praesentium ad voluptate, distinctio, sunt, totam amet
						rerum nemo velit provident. Quia, nesciunt nemo. em ipsum dolor sit
						amet consectetur adipisicing elit. Aliquid, numquam debitis veniam
						hic natus sed dolor officia quisquam accusamus, consequatur alias
						iusto id minima delectus recusandae uod accusamus architecto
						praesentium ad voluptate, distinctio, sunt, totam amet rerum nemo
						velit provident. Quia, nesciunt nem
					</p>
				</div>
				<div class="col-8 offset-2 py-3">
					<div class="w-100">
						<img src="images/blog-image.jpg" alt="" />
						<p class="italic text-secondary text-center mb-0">
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
				<div class="col-8 offset-2 py-3">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
						numquam debitis vunt, totam amet rerum nemo velit provident. Quia,
						nesciunt nemo.
					</p>
				</div>
			</div>
			<div class="col-8 offset-2 py-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
					numquam debitis veniam hic natus sed dolor officia quisquam accusamus,
					consequatur alias iusto id minima delectus recusandae dolore? Pariatur
					iure tempore blanditiis illo sint quod accusamus architecto
					praesentium ad voluptate, distinctio, consequatur alias iusto id
					minima delectus recusandae dolore? Pariatur iure tempore blanditiis
					illo sint quod accusamus architecto praesentium ad voluptate,
					distinctio, ssunt, totam amet rerum nemo velit provident. Quia,
					nesciunt nemo.
				</p>
			</div>
			<div class="col-8 offset-2 py-3">
				<p>
					Lorem ipsum dolor
					<span style="text-decoration: underline">dasd amet</span> sit amet
					elit. Aliquid,
					<span style="text-decoration: underline"
						>consectetur adipisicing</span
					>
					debitis v
				</p>
			</div>
		</div>
		@endsection

		<!-- jQuery library -->
		<script
			src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
			integrity="ha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>

		<!-- Latest Compiled Bootstrap 4.6 JavaScript -->
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
			integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
			crossorigin="anonymous"
		></script>
	</body>
</html>
