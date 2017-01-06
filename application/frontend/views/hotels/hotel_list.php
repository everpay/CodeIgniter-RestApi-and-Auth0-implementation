<!-- Search Section -->
<div class="search-section">
	<div class="container">
    	<form method="get" action="">
            <div class="row">
                <div class="col-sm-3">
                	<input placeholder="Canada" name="location" type="text">
                </div>
                <div class="col-sm-2">
                	<input id="datepicker-8" placeholder="11/18/2016" name="Check-in" type="text">
                </div>
                <div class="col-sm-2">
                	<input id="datepicker-9" placeholder="01/07/2017" name="Check-out" type="text">
                </div>
                <div class="col-sm-3">
                	<select name="travelers">
                        <option>Adults</option>
                        <option selected="">2+1 with Bedroom + 2 Child</option>
                        <option>1+1 with Bedroom + 1 Child</option>
                        <option>2+1 with Bedroom + Full</option>
                        <option>Full Services 15 Days</option>
                    </select>
                </div>
                <div class="col-sm-2">
                	<input class="button" value="search" type="button">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Search Section end -->

<!--main start -->
<div id="main-wrap">
    <div class="container">
    	<div class="hotellisting-wrap">
            <div class="row">
                <div class="col-sm-3">
                    <aside id="sidebar">
                        <h2>Filter your results</h2>
                        <ul>
                        	<li>
                            	<h5>Search by property name</h5>
                                <input placeholder="Search property name" name="where-go" type="text">
                            </li>
                            <li>
                            	<h5>Price (per night)</h5>
                                <div id="slider-range"></div>
                                <input type="text" id="amount" readonly>
                            </li>
                            <li>
                            	<h5>Filter properties by</h5>
                                <h6>Property Class</h6>
                                <ul>
                                	<li>
                                    	<input type="checkbox" name="class-1" >
                                        <ul>
                                        	<li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <span>5 Stars <em>(6)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-1" >
                                        <ul>
                                        	<li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <span>4 Stars <em>(10)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-1" >
                                        <ul>
                                        	<li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <span>3 Stars <em>(15)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-1" >
                                        <ul>
                                        	<li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <span>2 Stars <em>(5)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-1" >
                                        <ul>
                                        	<li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <span>1 Stars <em>(0)</em></span>
                                    </li>
                                </ul>
                                
                                <h6>Property Type</h6>
                                <ul>
                                	<li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Hotel <em>(100)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Hotel resort <em>(80)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Apart-hotel <em>(40)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Condominium resort <em>(0)</em></span>
                                    </li>
                                </ul>
                                
                                <h6>Amenities</h6>
                                <ul>
                                	<li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Bathtub in room <em>(100)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>High-speed Internet <em>(100)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Air conditioning <em>(100)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Swimming pool <em>(50)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-2" >
                                        <span>Babysitting service <em>(20)</em></span>
                                    </li>
                                    <li class="more-li">
                                    	<input type="checkbox" name="class-2" >
                                        <span>Fitness equipment <em>(40)</em></span>
                                    </li>
                                    <li class="more-li">
                                    	<input type="checkbox" name="class-2" >
                                        <span>Free airport transportation <em>(30)</em></span>
                                    </li>
                                    <li class="more-li">
                                    	<input type="checkbox" name="class-2" >
                                        <span>Free breakfast <em>(10)</em></span>
                                    </li>
                                    <li class="more-li">
                                    	<input type="checkbox" name="class-2" >
                                        <span>Free newspaper <em>(50)</em></span>
                                    </li>
                                    <li class="more-li">
                                    	<input type="checkbox" name="class-2" >
                                        <span>Free parking <em>(80)</em></span>
                                    </li>
                                    <li>
                                    	<div class="more-detial">
                                			<a href="#" class="active">Show more</a>
                                    		<a href="#">Show less</a>
                                		</div>
                                    </li>
                                </ul>
                                
                                <h6>Accessibility</h6>
                                <ul>
                                	<li>
                                    	<input type="checkbox" name="class-3" >
                                        <span>Accessible bathroom <em>(50)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-3" >
                                        <span>In-room accessibility <em>(80)</em></span>
                                    </li>
                                    <li>
                                    	<input type="checkbox" name="class-3" >
                                        <span>Roll-in shower <em>(40)</em></span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-sm-9">
                    <div class="hotels-listing">
                        <h2>Canada: 1050 properties. Showing 1-5</h2>
                        <div class="listing">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="image-wrap">
                                        <a href="#"><img src="images/can-img1.jpg" alt="" ></a>
                                        <div class="discount-tag">
                                        	<span>20% <em>discount</em></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h3><a href="#">Sandman Signature Toronto Airport Hotel</a></h3>
                                    <span>( Toronto, Canada <a href="#"><i class="fa fa-map-marker" aria-hidden="true"> Map</i></a> )</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#">read more...</a></p>
                                </div>
                                <div class="col-sm-2">
                                	<a href="#" class="review">( 50 Reviews )</a>
                                    <p class="star"><i class="fa fa-star" aria-hidden="true"></i> 4 Star Hotel</p>
                                    <div class="rate">
                                    	<span class="old-rate"><em>Old Price</em><strike>PKR 44,280</strike></span>
                                        <span class="new-rate"><em>New Price</em>PKR 20,000</span>
                                        <h6>Nightly rates as low as*</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="listing">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="image-wrap">
                                        <a href="#"><img src="images/can-img2.jpg" alt="" ></a>
                                        <!--<div class="discount-tag">
                                        	<span>20% <em>discount</em></span>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h3><a href="#">Sandman Signature Toronto Airport Hotel</a></h3>
                                    <span>( Toronto, Canada <a href="#"><i class="fa fa-map-marker" aria-hidden="true"> Map</i></a> )</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#">read more...</a></p>
                                </div>
                                <div class="col-sm-2">
                                	<a href="#" class="review">( 50 Reviews )</a>
                                    <p class="star"><i class="fa fa-star" aria-hidden="true"></i> 4 Star Hotel</p>
                                    <div class="rate">
                                    	<!--<span class="old-rate"><em>Old Price</em><strike>PKR 44,280</strike></span>-->
                                        <span class="new-rate"><em>New Price</em>PKR 20,000</span>
                                        <h6>Nightly rates as low as*</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="listing">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="image-wrap">
                                        <a href="#"><img src="images/can-img3.jpg" alt="" ></a>
                                        <div class="discount-tag">
                                        	<span>10% <em>discount</em></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h3><a href="#">Sandman Signature Toronto Airport Hotel</a></h3>
                                    <span>( Toronto, Canada <a href="#"><i class="fa fa-map-marker" aria-hidden="true"> Map</i></a> )</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#">read more...</a></p>
                                </div>
                                <div class="col-sm-2">
                                	<a href="#" class="review">( 50 Reviews )</a>
                                    <p class="star"><i class="fa fa-star" aria-hidden="true"></i> 4 Star Hotel</p>
                                    <div class="rate">
                                    	<span class="old-rate"><em>Old Price</em><strike>PKR 44,280</strike></span>
                                        <span class="new-rate"><em>New Price</em>PKR 20,000</span>
                                        <h6>Nightly rates as low as*</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="listing">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="image-wrap">
                                        <a href="#"><img src="images/can-img4.jpg" alt="" ></a>
                                        <!--<div class="discount-tag">
                                        	<span>20% <em>discount</em></span>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h3><a href="#">Sandman Signature Toronto Airport Hotel</a></h3>
                                    <span>( Toronto, Canada <a href="#"><i class="fa fa-map-marker" aria-hidden="true"> Map</i></a> )</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#">read more...</a></p>
                                </div>
                                <div class="col-sm-2">
                                	<a href="#" class="review">( 50 Reviews )</a>
                                    <p class="star"><i class="fa fa-star" aria-hidden="true"></i> 4 Star Hotel</p>
                                    <div class="rate">
                                    	<!--<span class="old-rate"><em>Old Price</em><strike>PKR 44,280</strike></span>-->
                                        <span class="new-rate"><em>New Price</em>PKR 20,000</span>
                                        <h6>Nightly rates as low as*</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="listing">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="image-wrap">
                                        <a href="#"><img src="images/can-img5.jpg" alt="" ></a>
                                        <div class="discount-tag">
                                        	<span>20% <em>discount</em></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h3><a href="#">Sandman Signature Toronto Airport Hotel</a></h3>
                                    <span>( Toronto, Canada <a href="#"><i class="fa fa-map-marker" aria-hidden="true"> Map</i></a> )</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#">read more...</a></p>
                                </div>
                                <div class="col-sm-2">
                                	<a href="#" class="review">( 50 Reviews )</a>
                                    <p class="star"><i class="fa fa-star" aria-hidden="true"></i> 4 Star Hotel</p>
                                    <div class="rate">
                                    	<span class="old-rate"><em>Old Price</em><strike>PKR 44,280</strike></span>
                                        <span class="new-rate"><em>New Price</em>PKR 20,000</span>
                                        <h6>Nightly rates as low as*</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagnination -->
                    <ul class="pagination">
                        <li class="page-item disabled">
                        	<a class="page-link" href="#" tabindex="-1" aria-label="Previous">
                        		<span aria-hidden="true">First</span>
                        		<span class="sr-only">First</span>
                        	</a>
                        </li>
                        <li class="page-item disabled">
                    		<a class="page-link" href="#" tabindex="-1" aria-label="Previous">
                    			<span aria-hidden="true">Previous</span>
                    			<span class="sr-only">Previous</span>
                    		</a>
                    	</li>
                        <li class="page-item"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item active"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item">
                    		<a class="page-link" href="#" aria-label="Next">
                    			<span aria-hidden="true">Next</span>
                    			<span class="sr-only">Next</span>
                    		</a>
                    	</li>
                        <li class="page-item">
                    		<a class="page-link" href="#" aria-label="Next">
                    			<span aria-hidden="true">Last</span>
                    			<span class="sr-only">Last</span>
                    		</a>
                    	</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--main end -->
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>
jQuery.noConflict();
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
    showHotels();
});
function showHotels() {
    var str = "<?php echo $check_in; ?>";
    if(str!=""){var check_in = str.replace("/", "-")}else{ var check_in = "NULL";}
    var str = "<?php echo $check_out; ?>";
    if(str!=""){var check_out = str.replace("/", "-")}else{ var check_out = "NULL";}
    var rooms = "<?php echo $no_rooms; ?>";
    console.log(rooms);
    jQuery.ajax({
        url : "<?php echo site_url(); ?>/api/hotel/hotels/"+"<?php echo $place; ?>"+"/"+check_in+"/"+check_out+"/"+rooms,
        type : "GET",
        success: function(response){
            console.log(response);
            return false;
           jQuery.each(response,function(index){
                // jQuery('#results').append(response[index].email);
                // console.log(response[index].fields.name);
        });

        console.log(response);
        console.log("success");

    },
    error : function(xhr,errmsg,err) {
        jQuery('#show_stores').html("<div class='alert-box alert radius' data-alert>Oops! We have encountered an error: "+errmsg+
            " <a href='#' class='close'>&times;</a></div>"); // add the error to the dom
        console.log(xhr.status + ": " + xhr.responseText); // provide a bit more info about the error to the console
    } 

    });

}

</script>