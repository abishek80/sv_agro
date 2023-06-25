<!-- Footer Start -->
<div class="container-fluid footer position-relative bg-dark text-white-50 py-5 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row g-4 justify-content-evenly">
        <div class="col-lg-4">
            <a href="<?php echo base_url(); ?>" class="navbar-brand">
                <img class="w-75" src="<?php echo base_url(); ?>themes/img/logo-white.png">
            </a>
            <p class="mb-0 mt-3">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ps-lg-5">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="<?php echo base_url(); ?>">Home</a>
                <a class="btn btn-link" href="<?php echo base_url(); ?>aboutus">About Us</a>
                <a class="btn btn-link" href="<?php echo base_url(); ?>product">Products</a>
                <a class="btn btn-link" href="<?php echo base_url(); ?>gallery">Gallery</a>
                <a class="btn btn-link" href="<?php echo base_url(); ?>contactus">Contact Us</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <h4 class="text-light mb-4">Contact Us</h4>
            <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white border-top border-secondary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="py-4 px-5 text-center text-md-start">
            <p class="mb-0">&copy; SV Agro. All Rights Reserved.</p>
        </div>
        <div class="py-4 px-5 bg-secondary footer-shape position-relative text-center text-md-end">
            <p class="mb-0">Designed by <a class="text-white fw-bold fw-bold" href="#">Vivin Paul</a></p>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>themes/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>themes/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>themes/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>themes/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>themes/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>themes/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url(); ?>themes/js/main.js"></script>


<script>
    const galleryStyleSheet = `
`;

    const body = document.querySelector("body");
    const galleryWrapper = document.querySelector(".gallery-wrapper");

    const styeElement = document.createElement("style");
    styeElement.innerHTML = galleryStyleSheet;
    styeElement.style.display = "none";
    body.append(styeElement);

    const galleryPopup = document.createElement("div");
    galleryPopup.className = "gallery-popup";

    galleryPopup.innerHTML = `
    <button class="close">&times;</button>
		<span class="next">&#187;</span>
		<span class="prev">&#171;</span>
		<img src="" alt="">
`;

    const galleryOverlay = document.createElement("div");
    galleryOverlay.className = "gallery-overlay";
    body.prepend(galleryOverlay);
    body.prepend(galleryPopup);

    const images = [...galleryWrapper.querySelectorAll(".gallery-img img")];
    const closeBtn = galleryPopup.querySelector(".close");
    const nextBtn = galleryPopup.querySelector(".next");
    const prevBtn = galleryPopup.querySelector(".prev");

    nextBtn.addEventListener("click", nextImg);
    prevBtn.addEventListener("click", prevImg);

    // Creating Animation For Image Transition
    const imgTransitionNext = `animation: imgTransitionNext 0.45s linear`;
    const imgTransitionPrev = `animation: imgTransitionPrev 0.45s linear`;
    let showImg = galleryPopup.querySelector(".gallery-popup img");

    let selectedImg = null;
    let startCount = 0;
    let endCount = images.length - 1;

    closeBtn.addEventListener("click", (e) => {
        galleryPopup.style.display = "none";
        galleryPopup.classList.remove("active");
        selectedImg === null;
        startCount = 0;
        endCount = images.length - 1;
        body.style.overflow = "auto";
    });

    // Click Next Button Function
    function nextImg() {
        if (selectedImg < 0) return;
        if (selectedImg === endCount) {
            selectedImg = startCount;
        } else {
            selectedImg++;
        }
        showImg.src = images[selectedImg].src;
        addRemoveAnimationNext();
    }

    // Click Prev Button Function
    function prevImg() {
        if (selectedImg < 0) return;
        if (selectedImg === startCount) {
            selectedImg = endCount;
        } else {
            selectedImg--;
        }
        showImg.src = images[selectedImg].src;
        addRemoveAnimationPrev();
    }

    // Initial Click Handler
    images.forEach((img, index) => {
        img.addEventListener("click", (e) => {
            galleryPopup.style.display = "block";
            galleryPopup.classList.add("active");
            showImg.src = e.currentTarget.src;
            selectedImg = index;
            body.style.overflow = "hidden";
        });
    });

    // Function for add and Remove Style Attribute
    function addRemoveAnimationNext() {
        showImg.setAttribute("style", imgTransitionNext);
        setTimeout(() => {
            showImg.setAttribute("style", "");
        }, 500);
    }

    function addRemoveAnimationPrev() {
        showImg.setAttribute("style", imgTransitionPrev);
        setTimeout(() => {
            showImg.setAttribute("style", "");
        }, 500);
    }
</script>
</body>

</html>