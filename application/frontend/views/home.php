

<!-- Home Slider start -->
<div class="slider-content for-mobile">
    <h3><a href="#signup">Sign Up</a> with <span>Jeans Trip</span></h3>
    <p>more then 50,000+ vacation rentals and hotels worldwide !</p>
</div>
<div class="homeslider-wrap">
	<div class="main-slider">
    	<ul class="bxslider">
        	<li style="background:url(../jeanstrip/assets/themes/default/images/slide-2.jpg);">
            	<div class="slider-content">
        			<h3><a href="#signup">Sign Up</a> with <span>Jeans Trip</span></h3>
            		<p>more then 50,000+ vacation rentals and hotels worldwide !</p>
        		</div>
                <div class="overlay"></div>
            </li>
            <li style="background:url(../jeanstrip/assets/themes/default/images/slide-1.jpg);">
            	<div class="slider-content">
        			<h3><a href="#signup">Sign Up</a> with <span>Jeans Trip</span></h3>
            		<p>more then 50,000+ vacation rentals and hotels worldwide !</p>
        		</div>
                <div class="overlay"></div>
            </li>
        </ul>
    </div>
    <div class="homecontent-wrap">
        <ul class="homecontent-tab">
            <li class="active"><a href="#hotels"><i class="fa fa-building-o" aria-hidden="true"></i>Hotels</a></li><li><a href="#flights"><i class="fa fa-plane" aria-hidden="true"></i>Flights</a></li>
        </ul>
        <div class="homecontent-section">
        	<div id="hotels" class="home-tabs" style="display:block;">
            	<form name ="hotel_search" action="<?php echo base_url(); ?>Hotel/get_hotel_list" method="post">
                	<div class="row">
                    	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        	<!--<input type="text" placeholder="City, neighborhood, property, landmark…" name="where-go">-->
                            <div class="typeahead__container">
                                <label>Where would you like to go?</label>
                                <div class="typeahead__field">
                                <span class="typeahead__query">
                                    <input class="js-typeahead-country_v2" name="country_v2[query]" type="search" placeholder="City, neighborhood, property, landmark…" autocomplete="off">
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        	<label>Check-in:</label>
                        	<input type="text" id="datepicker" placeholder="Check-in" name="Check-in">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        	<label>Check-out:</label>
                        	<input type="text" id="datepicker-2" placeholder="Check-out" name="Check-out">
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                        	<label>Rooms:</label>
                            <select name="no_rooms" id="no_rooms">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                        	<label>Adults:</label>
                            <select name="no_adults" id="no_adults">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                        	<label>Childrens:</label>
                            <select name="no_children" id="no_children">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-4 col-xs-offset-3">
                        	<label>&nbsp;</label>
                        	<input class="button" type="submit" value="search" >
                        </div>
                    </div>
                    
                    <div class="refine-search">
                    	<a href="#">Refine your search<i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                        <div class="refinesearch-content clearfix">
                        	<div class="price pull-left">
                        		<p>Price (per night)</p>
                            </div>
    						<div id="slider-range" class="pull-left"></div>
    						<input type="text" id="amount" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div id="flights" class="home-tabs">
            	<div class="flights-type">
                	<ul>
                    	<li class="active"><a href="#round-trip">Round-trip</a></li>
                        <li><a href="#one-way">One Way</a></li>
                        <li><a href="#multi-cities">Multi-City</a></li>
                    </ul>
                </div>
            	<form method="get" action="">
                	<div id="round-trip" class="search-flights" style="display:block;">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying from</label>
                                <input type="text" placeholder="From" name="flying-from">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying to</label>
                                <input type="text" placeholder="To" name="flying-to">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Departing</label>
                                <input id="datepicker-3" type="text" placeholder="Depart" name="departing">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Returning</label>
                                <input id="datepicker-4" type="text" placeholder="Return" name="returning">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Travelers, Class</label>
                                <select name="travelers">
                                    <option selected>1 Traveler, Economy</option>
                                    <option>2 Traveler, Economy</option>
                                    <option>3 Traveler, Economy</option>
                                    <option>4 Traveler, Economy</option>
                                    <option>5 Traveler, Economy</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>&nbsp;</label>
                                <input class="button" type="button" value="search" >
                            </div>
                        </div>
                    </div>
                    
                    <div id="one-way" class="search-flights">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying from</label>
                                <input type="text" placeholder="From" name="flying-from-2">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying to</label>
                                <input type="text" placeholder="To" name="flying-to-2">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label>Departing</label>
                                <input id="datepicker-5" type="text" placeholder="Depart" name="departing-2">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <label>Travelers, Class</label>
                                <select name="travelers">
                                    <option>1 Traveler, Economy</option>
                                    <option selected>2 Traveler, Economy</option>
                                    <option>3 Traveler, Economy</option>
                                    <option>4 Traveler, Economy</option>
                                    <option>5 Traveler, Economy</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-3">
                                <label>&nbsp;</label>
                                <input class="button" type="button" value="search" >
                            </div>
                        </div>
                    </div>
                    
                    <div id="multi-cities" class="search-flights">
                        <div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-9">
                            	<div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    	<input type="text" placeholder="From" name="flying-from">
                                	</div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input type="text" placeholder="To" name="flying-to">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input id="datepicker-6" type="text" placeholder="Depart" name="departing">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <select name="travelers">
                                            <option selected>Anytime</option>
											<option title="Early (4a-8a)">Early (4a-8a)</option>
                                            <option title="Morning (8a-12p)">Morning (8a-12p)</option>
                                            <option title="Afternoon (12p-5p)">Afternoon (12p-5p)</option>
                                            <option title="Evening (5p-9p)">Evening (5p-9p)</option>
                                            <option title="Night (9p-12a)">Night (9p-12a)</option>
                                            <option title="1:00 am">1:00 am</option>
                                            <option title="2:00 am">2:00 am</option>
                                            <option title="3:00 am">3:00 am</option>
                                            <option title="4:00 am">4:00 am</option>
                                            <option title="5:00 am">5:00 am</option>
                                            <option title="6:00 am">6:00 am</option>
                                            <option title="7:00 am">7:00 am</option>
                                            <option title="8:00 am">8:00 am</option>
                                            <option title="9:00 am">9:00 am</option>
                                            <option title="10:00 am">10:00 am</option>
                                            <option title="11:00 am">11:00 am</option>
                                            <option title="Noon">Noon</option>
                                            <option title="1:00 pm">1:00 pm</option>
                                            <option title="2:00 pm">2:00 pm</option>
                                            <option title="3:00 pm">3:00 pm</option>
                                            <option title="4:00 pm">4:00 pm</option>
                                            <option title="5:00 pm">5:00 pm</option>
                                            <option title="6:00 pm">6:00 pm</option>
                                            <option title="7:00 pm">7:00 pm</option>
                                            <option title="8:00 pm">8:00 pm</option>
                                            <option title="9:00 pm">9:00 pm</option>
                                            <option title="10:00 pm">10:00 pm</option>
                                            <option title="11:00 pm">11:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    	<input type="text" placeholder="From" name="flying-from">
                                	</div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input type="text" placeholder="To" name="flying-to">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input id="datepicker-7" type="text" placeholder="Depart" name="departing">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <select name="travelers">
                                            <option selected>Anytime</option>
											<option title="Early (4a-8a)">Early (4a-8a)</option>
                                            <option title="Morning (8a-12p)">Morning (8a-12p)</option>
                                            <option title="Afternoon (12p-5p)">Afternoon (12p-5p)</option>
                                            <option title="Evening (5p-9p)">Evening (5p-9p)</option>
                                            <option title="Night (9p-12a)">Night (9p-12a)</option>
                                            <option title="1:00 am">1:00 am</option>
                                            <option title="2:00 am">2:00 am</option>
                                            <option title="3:00 am">3:00 am</option>
                                            <option title="4:00 am">4:00 am</option>
                                            <option title="5:00 am">5:00 am</option>
                                            <option title="6:00 am">6:00 am</option>
                                            <option title="7:00 am">7:00 am</option>
                                            <option title="8:00 am">8:00 am</option>
                                            <option title="9:00 am">9:00 am</option>
                                            <option title="10:00 am">10:00 am</option>
                                            <option title="11:00 am">11:00 am</option>
                                            <option title="Noon">Noon</option>
                                            <option title="1:00 pm">1:00 pm</option>
                                            <option title="2:00 pm">2:00 pm</option>
                                            <option title="3:00 pm">3:00 pm</option>
                                            <option title="4:00 pm">4:00 pm</option>
                                            <option title="5:00 pm">5:00 pm</option>
                                            <option title="6:00 pm">6:00 pm</option>
                                            <option title="7:00 pm">7:00 pm</option>
                                            <option title="8:00 pm">8:00 pm</option>
                                            <option title="9:00 pm">9:00 pm</option>
                                            <option title="10:00 pm">10:00 pm</option>
                                            <option title="11:00 pm">11:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <input class="button" type="button" value="search" >
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
	</div>
</div>
<!-- Home Slider Ends -->
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>
    jQuery.noConflict();
    
</script>
<script src="<?php echo base_url(); ?>assets/themes/default/js/jquery.typeahead.min.js"></script>
<script>

    var data = {
            hotel: <?php echo json_encode($result["name"]); ?>,
            city: <?php echo json_encode($result["city_hotel"]); ?>
        };
        
jQuery.typeahead({
    input: '.js-typeahead-country_v2',
    minLength: 1,
    maxItem: 3,
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