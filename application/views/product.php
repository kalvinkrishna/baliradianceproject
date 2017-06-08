<!-- portfolio -->
	<div class="page-head" class="portfolio">
		<div class="container">
			<h3>Product</h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
		</div>
	</div>

	<div class="page-filter">
		<div class="container">
			<div class="col-md-12 filter-container">
				<form class="form-inline">
				  <div class="form-group">
				    <input type="text" class="form-control" name="sort" 
				    	disabled="" value="Class" style="width: 70px; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
					<select class="form-control" name="" id="merk" style="width: 170px; border-top-left-radius: 0px; border-bottom-left-radius: 0px; margin-left: -6px;">
						<option value="">All</option>
						<?php
							foreach ($class as $data) {
								echo '
									<option value="'.$data['id_class'].'">'.$data['name_class'].'</option>
								';
							}
						?>
				    </select>
				  </div>
					<div class="form-group pull-right">
				    <input type="text" class="form-control" name="sort" 
				    	disabled="" value="Sort" style="width: 70px; border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
					<select class="form-control" name="" id="merk" style="width: 170px; border-top-left-radius: 0px; border-bottom-left-radius: 0px; margin-left: -6px;">
						<option value="">Name - Ascending</option>
						<option value="">Name - Descending</option>
						<option value="">Price - Ascending</option>
						<option value="">Price - Descending</option>
				    </select>
				  </div>
				</form>
			</div>
		</div>
	</div>

	<div id="portfolio" class="portfolio page-content">
		<div class="container">
				<?php
					$odd = 1;
					//print_r($image);
					foreach ($product as $data) {
					
					if($odd%2==1){
				?>
				<div class="about-grids" style="margin-top:10px;">
					<div class="col-md-6 about-grid">
						<div class="about-grid1">
							<div class="itis">
								<h4><?php echo $data['name']?></h4>
							</div>
							<div class="hji">
								<?php echo substr($data['description'],0,100)."..."; ?>
								<p>Start From IDR 
								<?php
									echo number_format($data['start_price'], 2, ',', '.')
								?></p>
								<br>
								<a href="<?php echo base_url() ?>product/detail/<?php echo $data["id_car"]?>" class="btn btn-danger">View Detail</a>
							</div>
							<div class="about-grid1-pos">
								<img src="<?php echo base_url();?>assets/images/<?php echo $image[$odd-1][0]['src'];?>" alt=" " class="img-responsive car-small" />
							</div>
						</div>
					</div>
				<?php
					}
					else{
				?>

					<div class="col-md-6 about-grid">
						<div class="about-grid1 about-grd1">
							<div class="itis">
								<h4><?php echo $data['name']?></h4>
							</div>
							<div class="hji">
								<?php echo substr($data['description'],0,100)."..."; ?>
								<p>Start From IDR 
								<?php
									echo number_format($data['start_price'], 2, ',', '.')
								?></p>
								<br>
								<a href="<?php echo base_url() ?>product/detail/<?php echo $data["id_car"]?>" class="btn btn-danger">View Detail</a>
							</div>
							<div class="about-grid1-pos1">
								<img src="<?php echo base_url();?>assets/images/cars/<?php echo $image[$odd-1][0]['src'];?>" alt=" " class="img-responsive car-small" />
							</div>
						</div>
				</div>
					<div class="clearfix"></div>
				</div>
				<?php
					}

					$odd++;
					}
					if($odd%2==1){
						echo '<div class="clearfix"></div></div>';
					}

				?>
		</div>
	</div>
<!-- //portfolio -->
