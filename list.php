

	 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">Rooms</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

<section class="page-section bg-dark">
		
		<div class="container">	
				<div class="col-lg-12">	
				
						<hr>

						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5">
									<img src="img/hollowsquare.jpg" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b>$ 120</b><span> / per day</span></h3>

									<h4><b>
									Hollow Square Style
									</b></h4>
									<div class="align-self-end mt-5">
										<!-- <button class="btn btn-primary  float-right book_now" type="button" data-id="">Book now</button> -->
									</div>
								</div>
							</div>

							</div>
						</div>
						
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5">
									<img src="img/auditorium.jpg" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b>$ 200</b><span> / per day</span></h3>

									<h4><b>
									Auditorium Style
									</b></h4>
									<div class="align-self-end mt-5">
										<!-- <button class="btn btn-primary  float-right book_now" type="button" data-id="">Book now</button> -->
									</div>
								</div>
							</div>

							</div>
						</div>
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5">
									<img src="img/boardroom.jpg" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b>$ 500</b><span> / per day</span></h3>

									<h4><b>
									Boardroom Style
									</b></h4>
									<div class="align-self-end mt-5">
										<!-- <button class="btn btn-primary  float-right book_now" type="button" data-id="">Book now</button> -->
									</div>
								</div>
							</div>

							</div>
						</div>
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5">
									<img src="img/classroom.jpg" alt="">
								</div>
								<div class="col-md-5" height="100%">
									<h3><b>$ 40</b><span> / per day</span></h3>

									<h4><b>
									Classroom Style
									</b></h4>
									<div class="align-self-end mt-5">
										<!-- <button class="btn btn-primary  float-right book_now" type="button" data-id="">Book now</button> -->
									</div>
								</div>
							</div>

							</div>
						</div>
						
				</div>	
		</div>	
</section>
<style type="text/css">
	.item-rooms img {
    width: 23vw;
}
</style>
<script>
	$('.book_now').click(function(){
		uni_modal('Book','admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid='+$(this).attr('data-id'))
	})
</script>