@extends('frontend.layouts.main')

@section('content')
  
  <!-- contact section 
			================================================== -->
  	<section class="">
	    <div class="container">

	    	<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#singleItem">Single item</a></li>
				<li><a data-toggle="tab" href="#manAndVan">Man and Van</a></li>
				<li><a data-toggle="tab" href="#homeRemoval">Home Removals (Fixed Quote)</a></li>
			</ul>

			<div class="tab-content">

			  	<div id="singleItem" class="tab-pane fade in active">

			  		<div class="col-md-12 padding-top no-left-padding">
		  				<div class="col-md-8">

							<form class="">

						      	<div class="form-group">
								    <label for="inputAddress">Item Description</label>
								    <textarea name="description" class="form-control" placeholder="Item Description">
								    </textarea>
							    </div>

							    <div class="form-row">
								    <div class="form-group col-md-4">
								      <label for="">Length</label>
								      <input name="length" type="number" class="form-control" placeholder="Length">
								    </div>
								    <div class="form-group col-md-4">
								      <label for="">Width</label>
								      <input name="width" type="number" class="form-control" placeholder="Width">
								    </div>
								    <div class="form-group col-md-4">
								      <label for="">Height</label>
								      <input name="height" type="number" class="form-control" placeholder="Height">
								    </div>
							    </div>

							    <div class="form-row">
								    <div class="form-group col-md-6">
								      <label for="">Collection Postcode</label>
								      <input name="collection_postcode" type="text" class="form-control collection_postcode single-item-change" placeholder="Collection Postcode">
								    </div>
								    <div class="form-group col-md-6">
								      <label for="">Delivery Postcode</label>
								      <input name="delivery_postcode" type="text" class="form-control delivery_postcode single-item-change" placeholder="Delivery Postcode">
								    </div>
							    </div>

							    <div class="form-group">
								    <label for="inputAddress">Number of Manpower Required</label>
								    <input type="number" min="0" name="manpower" class="form-control manpower single-item-change" placeholder="Number of Manpower Required">
							    </div>

							    <div class="form-group">
								    <label for="inputAddress">Date</label>
								    <select name="date_type" id="" class="form-control date-drpdwn single-item-change">
								        <option value="Flexible" selected>Flexible</option>
								        <option value="Fixed">Fixed</option>
								    </select>
								    <input class="form-control date-input" type="text" name="date" style="display: none;" placeholder="Date">
							    </div>

							    <div class="form-group">
								    <label for="inputAddress">Time</label>

								    <select name="time" class="form-control time-drpdwn">
								        <option value="AM Pickup" selected>AM Pickup</option>
								        <option value="PM Pickup" >PM Pickup</option>
								        <option value="PM Pickup" >Anytime Pickup Between 8 AM - 8 PM</option>
								        <option value="Specific Time" >Specific Time</option>
								    </select>

								    <div class="time-input-div" style="display: none;">
								    	<div class="form-group col-md-6">
									      <label for="">Collection Time</label>
									      <input class="form-control" type="text" name="collection_time" placeholder="Collection Time">
									    </div>

									    <div class="form-group col-md-6">
									      <label for="">Delivery Time</label>
									      <input class="form-control" type="text" name="delivery_time" placeholder="Delivery Time">
									    </div>
								    </div>
							    </div>

						    </form>
					    </div>

					    <div class="col-md-4">
				    		<h1>Estimated Quote</h1>
				    		<h2>£<span class="quote-price">0.00</span></h2>
				    		<h3 class="distance-display">0 miles</h3>
				    	</div>
			  		</div>

			  	</div>

				<div id="manAndVan" class="tab-pane fade">

				</div>

				<div id="homeRemoval" class="tab-pane fade">

				</div>
			</div>
	  	</div>
  	</section>
<style>
	
	.padding-top {
	    padding-top: 15px;
	}
	.no-left-padding {
	    padding-left: 0px;
	}
</style>
@endsection

@section('after-scripts')
<script type="text/javascript">

	$(document).ready(function(){

		var settings = <?php echo $singleItemSettings; ?>;

		var distance = 0;

		$('.quote-type-checkbox').on('change', function(){
			var divToDisplay = $(this).prop('display-div');
			$('.quote-type-container').each(function(){
				if($(this).hasClass(divToDisplay))
				{

				}
			});
		});

		$(".date-drpdwn").on('change', function(){
			if($(this).val() == 'Fixed')
			{
				$('.date-input').show();
			}
			else
			{
				$('.date-input').hide();
			}
		});

		$('.time-drpdwn').on('change', function(){
			
			if($(this).val() == 'Specific Time')
			{
				$('.time-input-div').show();
			}
			else
			{
				$('.time-input-div').hide();
			}
		});

		$('.single-item-change').on('change', function() {
			var collectionPostcode = $(".collection_postcode").val();
			var deliveryPostcode = $(".delivery_postcode").val();

			if(collectionPostcode && deliveryPostcode)
			{
				if(collectionPostcode != deliveryPostcode)
				{
					calculateDistances(collectionPostcode, deliveryPostcode);				
				}
				else
				{
					alert("Collection and Delivery postcode can not be same.");
					$(".collection_postcode").val("");
					$(".delivery_postcode ").val("");
				}
			}
		});

		function calculateDistances(origin, destination) {
  
		  var service = new google.maps.DistanceMatrixService(); //initialize the distance service
		  return service.getDistanceMatrix(
		    {
		      origins: [origin], //set origin, you can specify multiple sources here
		      destinations: [destination],//set destination, you can specify multiple destinations here
		      travelMode: google.maps.TravelMode.DRIVING, //set the travelmode
		      unitSystem: google.maps.UnitSystem.IMPERIAL,//The unit system to use when displaying distance
		      avoidHighways: false,
		      avoidTolls: false
		    }, calcDistance); // here calcDistance is the call back function
		}

		function calcDistance(response, status) {
		  if (status != google.maps.DistanceMatrixStatus.OK) { // check if there is valid result
		    distance =  0;
		  } else {
		    var origins = response.originAddresses;
		    var destinations = response.destinationAddresses;

		    for (var i = 0; i < origins.length; i++) {
		      var results = response.rows[i].elements;

		      for (var j = 0; j < results.length; j++) {

		      	if(results[j].status == 'OK')
		      	{
		      		distance =  results[j].distance.text.replace(' mi','');
		      	}
		      	else
		      	{
		      		distance = 0;
		      	}		        
		      	$(".distance-display").text(distance+' miles');
		        calculateQuote();
		      }
		    }
		  }
		}

		function calculateQuote(){
			distance 	= parseFloat(distance);
			quotePrice 	= 0;
			if(distance > 0)
			{
				if(distance <= settings.distance.threshold_distance)
				{
					quotePrice = settings.distance.threshold_price;
				}
				else
				{
					rulePrice 		= 0;
					distanceRules 	= settings.distance.rules;
					for(var i = 0; i < distanceRules.length; i++)
					{
						if(distance > distanceRules[i].from && distance <= distanceRules[i].to)
						{
							if(distanceRules[i].is_fixed == 1)
							{
								rulePrice = distanceRules[i].price;
							}
							else
							{
								rulePrice = parseFloat(distanceRules[i].price) * parseFloat(distance);
							}
						}	
					}

					quotePrice = parseFloat(quotePrice)+parseFloat(rulePrice);
				}
			}
			$('.quote-price').text(Number.parseFloat(quotePrice).toFixed(2));
		}

	});


	

</script>
@endsection