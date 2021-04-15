@extends('layouts.app')
@section('content')
	{{-- <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
		<h1 class="text-dark display-4">Todo App</h1>
		<todo-component></todo-component>
	</div> --}}
<section>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="...">
			<div class="carousel-caption header-banner d-md-block">
				<div class="row">
					<div class="col-lg-5 col-md-7 col-sm-12 panel-banner-caption" data-aos="fade-right">
						<h3>Lorem, ipsum dolor sit amet consectetur adipisicing e</h3>
						<p>Some representative placeholder content for the first slide.</p>
						<button class="btn btn-md btn-green font-12">Get Started</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="{{ asset('images/path-1.png') }}" style="position:absolute;bottom:0" alt="">
</div>
</section>
<section>
<div id="carouselExampleCaptions2" class="carousel slide" data-interval="" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner carou-inner-av-les">
		<div class="row mt-5 pt-3">
			<div class="col"></div>
			<div class="col" data-aos="fade-down">
				<h2 class="text-center">Available Tracker</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipis</p>
			</div>
			<div class="col"></div>
		</div>
		<div class="carousel-item active mh-100 vh-100">
			<div class="carousel-caption header-available-lesson d-md-block d-sm-block ">
				<div class="row mb-5">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" width="20%" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item mh-100 vh-100">
			<div class="carousel-caption header-available-lesson d-md-block d-sm-block ">
				<div class="row mb-5">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" width="20%" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item mh-100 vh-100">
			<div class="carousel-caption header-available-lesson d-md-block d-sm-block ">
				<div class="row mb-5">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" style="width:40px;" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" data-aos="zoom-in">
						{{-- <img src="{{ asset('images/idea.png') }}" width="20%" alt=""> --}}
						<img src="{{ asset('images/idea.png') }}" style="display:block; margin-left: auto; margin-right: auto;"/>
						<h5 class="text-center">Lorem ipsum dolor</h5>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error optio possimus veritatis, neque unde ipsum fuga labore sed amet repellat</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section>
	<div id="carouselExampleCaptions3" class="carousel slide mb-5" data-interval="" data-ride="carousel">
		<img src="{{ asset('images/path-2.png') }}" style="position: absolute;top: -48px;z-index: 1;" alt="">
	</div>
	<div class="container py-5 mb-5">
		<div class="row tutor-with-heygo featurette">
			<div class="col-lg-12 mb-5" data-aos="fade-down">
				<h2 class="text-center">About Us</h2>
				<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quos dol</p>
			</div>
			<div class="col-lg-6 pr-5" data-aos="fade-right">
				<img src="{{ asset('images/person-wearing-goggle.png') }}" class="w-100">
			</div>
			<div class="col-lg-6" data-aos="fade-left">
				<div class="row mt-2">
					<div class="col-lg-12 mb-3">
						<div class="row mb-4">
							<div class="col-lg-2">
								<img src="{{ asset('images/reading-book.png') }}" alt="">
							</div>
							<div class="col-lg-10">
								e debitis vitae iure quaerat sequi illum pariatur. Ad fugiat doloribus ipsum voluptatem neque mollitia!
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-lg-2">
								<img src="{{ asset('images/reading-book.png') }}" alt="">
							</div>
							<div class="col-lg-10">
								e debitis vitae iure quaerat sequi illum pariatur. Ad fugiat doloribus ipsum voluptatem neque mollitia!
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-lg-2">
								<img src="{{ asset('images/reading-book.png') }}" alt="">
							</div>
							<div class="col-lg-10">
								e debitis vitae iure quaerat sequi illum pariatur. Ad fugiat doloribus ipsum voluptatem neque mollitia!
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<button class="btn btn-md btn-green w-100 font-12">Get Started</button>
					</div>
					<div class="col-lg-4">
						<button class="btn btn-md btn-default w-100 font-12">Learn More</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-secondary text-light" id="heygo-footer">
	<div class="container py-5 bg-semi-light" id="request-tutor-container">
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<img src="{{ asset('images/hakot-icon-white.png') }}" class="mb-4" alt="">
				<div class="row" style="width: 130px;margin: auto;">
					<div class="col-lg-12 text-center"><label for="" class="m-auto">Follow Us</label></div>
					<div class="col-lg-3 p-0"><i class="fab fa-twitter"></i></div>
					<div class="col-lg-3 p-0"><i class="fab fa-facebook"></i></div>
					<div class="col-lg-3 p-0"><i class="fab fa-linkedin"></i></div>
					<div class="col-lg-3 p-0"><i class="fab fa-instagram-square"></i></div>
				</div>
			</div>
			<div class="col"></div>
		</div>
		<div class="row mt-3">
			<div class="col"></div>
			<div class="col"></div>
			<div class="col text-center">
				<span class="font-12">@2020 Hakot All Rights reserved.</span>
			</div>
			<div class="col"></div>
			<div class="col"></div>
		</div>
	</div>
</section>

@endsection