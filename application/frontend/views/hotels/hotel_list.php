<!-- Search Section -->
<div class="search-section">
	<div class="container">
    	<form action="<?php echo base_url(); ?>Hotel/get_hotel_list" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <div class="typeahead__container">
                    <label>Where would you like to go?</label>
                    <div class="typeahead__field">
                        <span class="typeahead__query">
                        <input class="js-typeahead-country_v2" name="country_v2[query]" type="search"  autocomplete="off" value="<?php if(isset($place)){echo $place;}else {echo '';} ?>">
                        </span>
                    </div>
                </div>
                </div>
                <div class="col-sm-2">
                    <label>Check-in:</label>
                	<input id="datepicker-8" value="<?php echo $check_in; ?>" name="Check-in" type="text">
                </div>
                <div class="col-sm-2">
                    <label>Check-out:</label>
                	<input id="datepicker-9" value="<?php echo $check_out; ?>" name="Check-out" type="text">
                </div>
                <div class="col-sm-1">
                    <label>Rooms:</label>
                	<select name="no_rooms" id="no_rooms">
                        <option value="1" selected="selected">1</option>
                        <?php for($x = 2; $x <= 15; $x++){ echo '<option value="'.$x.'">'.$x.'</option>';} ?>
                    </select>
                </div>
                <div class="col-sm-1">
                    <label>Adults:</label>
                	<select name="no_adults" id="no_adults">
                        <option value="1" selected="selected">1</option>
                        <?php for($x = 2; $x <= 15; $x++){ echo '<option value="'.$x.'">'.$x.'</option>';} ?>
                    </select>
                </div>
                <div class="col-sm-1">
                	<label>Childrens:</label>
                    <select name="no_children" id="no_children">
                        <option value="1" selected="selected">1</option>
                        <?php for($x = 2; $x <= 15; $x++){ echo '<option value="'.$x.'">'.$x.'</option>';} ?>
                    </select>
                </div>
                  

                <div class="col-sm-2">
                    <label></label>
                	<input class="button" value="search" type="submit">
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
                    <div class="hotels-listing" id="hotels-listing"> 
                        <!--<h2>XXXX: XXX properties. Showing XXX</h2>-->
                                              
                        <!--<div class="listing">
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
                        </div>-->
                        
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
<script src="<?php echo base_url(); ?>assets/themes/default/js/jquery.typeahead.min.js"></script>
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
    //console.log('<?php echo $place; ?>');
    jQuery.ajax({
        url : "<?php echo site_url(); ?>/api/hotel/hotels/"+"<?php echo $place; ?>"+"/"+check_in+"/"+check_out+"/"+rooms,
        type : "GET",
        success: function(response){
            
            //var news = document.getElementsByClassName("hotelsListing")[0];
            //var items = response.items;
            var e = jQuery('<div />', { id: "itemsdiv" }).appendTo('#step-1 .col-md-12'),
            r = jQuery.parseJSON(response),
            i = 0;
            
            jQuery.each(r, function(key, val){
                var minrate = "";
                var maxrate = "";
                if(val.maxrate!="null"){maxrate = val.maxrate; }
                if(val.minrate!="null"){minrate = val.minrate;}
                jQuery('#hotels-listing').append('<div class="listing"><div class="row"><div class="col-sm-3"><div class="image-wrap"><a href="'+val.photo_url+'"><img src="'+val.photo_url+'" alt="'+val.name+'" ></a></div></div>'+
                '<div class="col-sm-6"><h3><a href="'+val.hotel_url+'">'+val.name+'</a></h3><p>'+val.desc_en+'<a href="#">read more...</a></p></div><div class="col-sm-3">'+
                '<a href="#" class="review">( '+val.review_score+' Reviews )</a><p class="star"><i class="fa fa-star" aria-hidden="true"></i> '+val.class+' Star Hotel</p>'+
                '<span class="old-rate"><em>Min Price: </em><strike>$'+minrate+'</strike></span><br /><span class="new-rate"><em>Max Price: </em>$'+maxrate+' </span></div></div>');
                
              });
           
        //console.log(response);
        //console.log("success");

    },
    error : function(xhr,errmsg,err) {
        jQuery('#show_stores').html("<div class='alert-box alert radius' data-alert>Oops! We have encountered an error: "+errmsg+
            " <a href='#' class='close'>&times;</a></div>"); // add the error to the dom
        console.log(xhr.status + ": " + xhr.responseText); // provide a bit more info about the error to the console
    } 

    });

}


var data = {
        hotel: <?php echo json_encode($result["name"]); ?>,
        city: <?php echo json_encode($result["city_hotel"]); ?>
    };
        
jQuery.typeahead({
    input: '.js-typeahead-country_v2',
    minLength: 1,
    maxItem: 10,
    order: "asc",
    template: "{{display}} <small style='color:#999;'>{{group}}</small>",
    source: {
        hotel: {
           data: data.hotel
        },
        city: {
           data: data.city
        }

    },
    callback: {
        onNavigateAfter: function (node, lis, a, item, query, event) {
            if (~[38,40].indexOf(event.keyCode)) {
                var resultList = node.closest("form").find("ul.typeahead__list"),
                    activeLi = lis.filter("li.active"),
                    offsetTop = activeLi[0] && activeLi[0].offsetTop - (resultList.height() / 2) || 0;
 
                resultList.scrollTop(offsetTop);
            }
 
        },
        onResult: function (node, query, result, resultCount) {
           
            if (query === "") return;
 
            var text = "";
            if (result.length > 0 && result.length < resultCount) {
                text = "Showing <strong>" + result.length + "</strong> of <strong>" + resultCount + '</strong> elements matching "' + query + '"';
            } else if (result.length > 0) {
                text = 'Showing <strong>' + result.length + '</strong> elements matching "' + query + '"';
            } else {
                text = 'No results matching "' + query + '"';
            }
            jQuery('#result-container').html(text);
 
        },
        onMouseLeave: function (node, a, item, event) {
 
           jQuery(a).find('.flag-chart').remove();
 
        }
    }
});
</script>