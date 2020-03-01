@extends('layouts.app')

@section('content')



<!-- Master Container -->

<!-- About Page Intro -->
<div class="view flex-center w-100" >
        <!-- Hero Image -->
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img (132).jpg" class="img-fluid center-block w-100" alt="Image of ballons flying over canyons with mask pattern one.">
        <!-- Mask and flexbox options -->
        <div class="mask flex-center">
            <!-- Content -->
            <div class="container">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12 mb-4 white-text text-center">
                        <h1 class="h1-responsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Company Name</strong></h1>
                        <hr class="hr-light my-4 about-seperate">
                        <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Photography & design</strong></h5>
                        <a class="btn btn-outline-white  services-buttons" >Portfolio</a>
                        <a class="btn btn-outline-white  services-buttons" >Services</a>
                    </div>
                    <!-- /Grid column -->
                </div>
                <!-- /Grid row -->
            </div>
            <!-- /Content -->
        </div>
</div>

<!-- About content view -->



<!-- Parallax testing with side by side by views -->
<!--
<div class="container-fluid "  >
    <div class="row">
        <div class="content col-md-4 text-center text-white my-auto lax"  data-lax-translate-y="0 0, 400 -200">
                <h3>Photography</h3>
                <p>We provide the best quality images for your buck</p>
        </div>
        <div class="content col-md-4 offset-md-4 " >
            <img src="http://4.bp.blogspot.com/-avhkjo2xuTk/Ucm2Lj7eqCI/AAAAAAAAB-4/ftk2XcXBBtQ/s1600/forest.png" class="img-fluid" alt="Forests">
        </div>
    </div>
</div>

<div class="container-fluid "  >
    <div class="row">
        <div class="content col-md-4">
            <img src="http://summermeltdownfest.com/wp-content/themes/summermeltdown2017/library/images/header-mountains-17.png" class="img-fluid" alt="Mountains">
        </div>
        <div class="content col-md-4 offset-md-4 text-center text-white my-auto lax" data-lax-translate-y="0 0, 400 -200">
            <h3>Hand Drawing</h3>
            <p>We provide hand drawing using only the finest tools to ensure the best quality</p>
        </div>
    </div>
</div>

<div class="container-fluid "  >
    <div class="row">
        <div class="content col-md-4 text-center text-white my-auto lax"  data-lax-translate-y="0 0, 400 -200">
                <h3>Animations</h3>
                <p>We provide services to animate short films</p>
        </div>
        <div class="content col-md-4 offset-md-4" >
            <img src="https://1.bp.blogspot.com/-U_loynlvlv8/Tt-_joSp2dI/AAAAAAAAFJg/5Dcp7eVaBOU/s1600/01.png" class="img-fluid" alt="Branches" style="right: 0;">
        </div>
    </div>
</div>
-->

<!-- Staff Members -->
<div class="container-fluid pt-4" style="background-color: orange;">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Our Members</h2>
            <hr class="hr-light  about-seperate pt-0">
        </div>
    </div>
    <div class="row pt-4">
            <div class="col-md-2 offset-md-3">
                <img src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg" class="img-fluid rounded col-md-2" alt="Ali" style="border-color: white;">
            </div>
            <div class="col-md-2">
                <img src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg" class="img-fluid rounded col-md-2" alt="Ali">
            </div>
            <div class="col-md-2">
                <img src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg" class="img-fluid rounded col-md-2" alt="Ali">
            </div>
            
            
            
        
    </div>
</div>



<!--
<div class="container">
    <h1 class="lax" data-lax-translate-y="0 0, 200 -200">Preserve Nature</h1>
    <div class="line">
</div>

<div class="container secondary">
    <h2>Strategic</h2>
    <p class="subtext">Alliances</p>

    <p>Lorem ipsum aosdkasdkaoskckaockaosdo</p>
    <p>Lorem ipsum aosdkasdkaoskckaockaosdo</p>

    <img src="https://wallpapercave.com/wp/Uk7KfE6.jpg" alt="Mountains" class="mountains">
    <img src="https://cdn.wallpapersafari.com/45/46/MOLG0y.jpg" alt="More Mountains" class="mountains2">
</div>
-->

<!-- Laxx.js -->
<script src="https://cdn.jsdelivr.net/npm/lax.js"></script>

<script>
    // Reset to top of page on reload
    /*
    window.onbeforeunload = function() {
        window.scrollTo(0, 0);
    }
    */
    window.onload = function() {
	lax.setup() // init

	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}

	window.requestAnimationFrame(updateLax)
    }
</script>

<script>
    //document.body.style.background = "black";
</script>

<!-- Parallax content using Rellax -->
<!--
<div class="rellax">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img (132).jpg" class="img-fluid" alt="A picture of the forest">
</div>
<div class="rellax" data-rellax-speed="7" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img (132).jpg'); height: 1000px; background-repeat: no-repeat;">
    Im super fast!!
</div>
<div class="rellax" data-rellax-speed="-4" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/8-col/img (132).jpg'); height: 1000px; background-repeat: no-repeat;">
    Im extra slow and smooth
</div>
-->
    
<!--
<script src="{{ asset('js/rellax.min.js') }}">
    var rellax = new Rellax('.rellax', {
        
        center: false,
        wrapper: null,
        round: true,
        vertical: true,
        horizontal: false
    });
    var rellax2 = new Rellax('.rellax2');
</script>
-->

@endsection