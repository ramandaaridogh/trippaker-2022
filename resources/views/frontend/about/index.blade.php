@extends('layouts.master')

@section('title') {{ $title }} @endsection

@section('content')

<!-- Start About Area  -->
<div class="about-area rn-section-gap bg_color--1">
	<div class="about-wrapper">
		<div class="container">
			<div class="row row--35 align-items-center">
				<div class="col-lg-5 col-md-12">
					<div class="thumbnail">
						<img class="w-100" src="assets/images/about/about-3.jpg" alt="About Images" />
					</div>
				</div>
				<div class="col-lg-7 col-md-12">
					<div class="about-inner inner">
						<div class="section-title">
							<h2 class="title">WHO ARE WE?</h2>
							<p class="description">
                                Kami adalah perusahaan yang bergerak dibidang pembuatan kapal Pinisi dan wisata laut. Tim kami di Indonesia Liveaboard memiliki rekam jejak yang terbukti dalam konstruksi kapal Pinisi selama 5 dekade terakhir. Pendiri perusahaan kami adalah generasi ke-10 pembuat kapal Pinisi Indonesia dan hingga saat ini masih menekuni pembuatan kapal sebagai warisan dari nenek moyang yang telah di akui oleh UNESCO sebagai warisan budaya tak benda.
                            </p>
						</div>
						<div class="row mt--30 mt_sm--10">
							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="about-us-list">
									<h3 class="title">Who we are</h3>
									<p>
                                        Bekerjasama dalam proyek anda melalui permodelan bisnis, konsultasi & desain pembuatan kapal, konstruksi kapal, pengawasan konstruksi, sumber peralatan, & pengaturan bisnis.
                                    </p>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="about-us-list">
									<h3 class="title">Who we are</h3>
									<p>
                                        Melalui layanan lengkap kami anda juga dapat memilih untuk menempatkan kapal yang sudah selesai di bawah menejemen kami untuk tahap operasional.
                                    </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Start About Area  -->

<!-- Start Counterup Area  -->
{{-- <div class="rn-counterup-area rn-section-gapBottom bg_color--1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h3 class="fontWeight500">Our Fun Facts</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Start Single Counterup  -->
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="rn-counterup counterup_style--1">
					<h5 class="counter count">992</h5>
					<p class="description">The standard chunk of Lorem Ipsum used since the 1500s is
						reproduced below for those.</p>
				</div>
			</div>
			<!-- Start Single Counterup  -->

			<!-- Start Single Counterup  -->
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="rn-counterup counterup_style--1">
					<h5 class="counter count">575</h5>
					<p class="description">The standard chunk of Lorem Ipsum used since the 1500s is
						reproduced below for those.</p>
				</div>
			</div>
			<!-- Start Single Counterup  -->

			<!-- Start Single Counterup  -->
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="rn-counterup counterup_style--1">
					<h5 class="counter count">69</h5>
					<p class="description">The standard chunk of Lorem Ipsum used since the 1500s is
						reproduced below for those.</p>
				</div>
			</div>
			<!-- Start Single Counterup  -->
		</div>
	</div>
</div> --}}
<!-- End Counterup Area  -->

<!-- Start Finding us Area  -->
<div class="rn-finding-us-area rn-finding-us bg_color--1">
	<div class="inner">
		<div class="content-wrapper">
			<div class="content">
				<h4 class="theme-gradient">OUR HISTORY & TRADITIONAL OF PINISI</h4>
				<p>
                    Perahu pinisi bukan hanya sekedar transpotasi laut, melaikan sejarah besar dan warisan nenek moyang, khusus masyarakat Bulukumba. Pinisi memiliki makna yang mendalam yaitu masih mempercayai adat istiadat dalam pembuatan perahu.
                </p>
                <a class="rn-btn btn-white" href="{{ route('history.index') }}">Baca Selengkapnya</a>
			</div>
		</div>
		<div class="thumbnail">
			<div class="image">
				<img src="assets/images/about/finding-us-01.png" alt="Finding Images">
			</div>
		</div>
	</div>
</div>
<!-- End Finding us Area  -->

<!-- Start team Area  -->
<div class="rn-team-area rn-section-gap bg_color--1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title section-title--3 text-center mb--30">
					<h2 class="title">Skilled Team</h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have
						suffered alteration.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Start Single Team Area  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="team">
					<div class="thumbnail">
						<img src="assets/images/team/team-01.jpg" alt="Team Images" />
					</div>
					<div class="content">
						<h4 class="title">Jone Due</h4>
						<p class="designation">Sr. Web Developer</p>
					</div>
					<ul class="social-icon">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- End Single Team Area  -->

			<!-- Start Single Team Area  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="team">
					<div class="thumbnail">
						<img src="assets/images/team/team-02.jpg" alt="Team Images" />
					</div>
					<div class="content">
						<h4 class="title">Jone Due</h4>
						<p class="designation">Sr. Web Developer</p>
					</div>
					<ul class="social-icon">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- End Single Team Area  -->

			<!-- Start Single Team Area  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="team">
					<div class="thumbnail">
						<img src="assets/images/team/team-03.jpg" alt="Team Images" />
					</div>
					<div class="content">
						<h4 class="title">Jone Due</h4>
						<p class="designation">Sr. Web Developer</p>
					</div>
					<ul class="social-icon">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- End Single Team Area  -->
		</div>
	</div>
</div>
<!-- Start team Area  -->

<!-- Start Testimonial Area  -->
{{-- <div class="rn-testimonial-area rn-section-gap bg_color--5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Start Tab Content  -->
				<div class="rn-testimonial-content tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
					<div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
						<div class="inner">
							<p>Aklima The standard chunk of Lorem Ipsum used since the 1500s is reproduced
								below for those interested. Sections Bonorum et Malorum original.</p>
						</div>
						<div class="author-info">
							<h6><span>Fatima Asrafy </span> - COO, AMERIMAR ENTERPRISES, INC.</h6>
						</div>
					</div>
				</div>
				<!-- End Tab Content  -->

				<!-- Start Tab Nav  -->
				<ul class="testimonial-thumb-wrapper nav nav-tabs" id="myTab" role="tablist">
					<li>
						<button class="active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" role="tab" type="button" aria-controls="tab1" aria-selected="true">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-1.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" role="tab" type="button" aria-controls="tab2" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-2.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" role="tab" type="button" aria-controls="tab3" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-3.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" role="tab" type="button" aria-controls="tab4" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-4.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" role="tab" type="button" aria-controls="tab5" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-5.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" role="tab" type="button" aria-controls="tab6" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-6.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" role="tab" type="button" aria-controls="tab7" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-7.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>

					<li>
						<button id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" role="tab" type="button" aria-controls="tab8" aria-selected="false">
							<div class="testimonial-thumbnai">
								<div class="thumb">
									<img src="assets/images/client/testimonial-8.jpg" alt="Testimonial Images">
								</div>
							</div>
						</button>
					</li>
				</ul>
				<!-- End Tab Content  -->
			</div>
		</div>
	</div>
</div> --}}
<!-- Start Testimonial Area  -->

<!-- Start Brand Area -->
{{-- <div class="rn-brand-area brand-separation">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="brand-style-2">
					<li>
						<img src="assets/images/brand/brand-01.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-02.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-03.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-04.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-05.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-06.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-02.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-03.png" alt="Logo Images" />
					</li>
					<li>
						<img src="assets/images/brand/brand-04.png" alt="Logo Images" />
					</li>
				</ul>
			</div>
		</div>
	</div>
</div> --}}
<!-- End Brand Area -->

<div class="rn-service-details rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-us-list">
                    <h3 class="title theme-gradient">VISI PERUSAHAAN</h3>
                    <p>
                        "Kami bekerja keras untuk menjaga tradisi dan warisan dari nenek moyang kami, agar tetap eksis di Indonesia dan dunia. Dengan membawa keahlian dan keinginan besar, kami membangun hubungan yang kuat dengan para klien kami, mitra dan pemegang saham dan bersama-sama memperluas layanan, jaringan dan jejak langkah kami dalam industry ini untuk para generasi baru dari para pecinta perahu pinisi. kami bekerja keras untuk terus berinovasi dengan perkembangan zaman agar eksistensi dari kapal Pinisi warisan nenek moyang kami tetap mendunia.”
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-us-list">
                    <h3 class="title theme-gradient">MISI PERUSAHAAN</h3>
                    <ul class="liststyle bullet">
                        <li>Meneruskan dan menjaga kearifan lokal warisan dan budaya nenek moyang kami</li>
                        <li>Menjaga nilai-nilai dan filosofi perahu pinisi dengan estetika tradisional</li>
                        <li>Membuka lapangan usaha bagi generasi selanjutnya</li>
                        <li>Ikut berkontribusi dalam menjaga eksistensi kemaritiman Indonesia di mata Dunia</li>
                        <li>Membuka peluang investasi dan kemitraan seluas luasnya</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
