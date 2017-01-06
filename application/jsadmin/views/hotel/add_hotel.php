 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/default/css/jquery.typeahead.css">

<script src="<?php echo base_url(); ?>assets/themes/default/js/jquery.typeahead.min.js"></script>
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Hotel Details</h3>
      </div>
      <div class="modal-body">
          <div class="hotel_details_form">
              <div class="row">
              <div class="col-sm-6">
                  <div class="typeahead__container">
                        <label>Continent:</label>
                        <div class="typeahead__field">
                        <span class="typeahead__query">
                            <input class="js-typeahead-continents_v2" name="continent_v2[query]" type="search" placeholder="Search" autocomplete="off">
                        </span>
                        </div>
                    </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="typeahead__container">
                        
                        <label>Country:</label>
                        <div class="typeahead__field">
                        <span class="typeahead__query">
                            <input class="js-typeahead-country_v2" name="country_v2[query]" type="search" placeholder="Search" autocomplete="off">
                        </span>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-6">
                    <div class="typeahead__container">
                        
                        <label>City:</label>
                        <div class="typeahead__field">
                        <span class="typeahead__query">
                            <input class="js-typeahead-city_v2" name="city_v2[query]" type="search" placeholder="Search" autocomplete="off">
                        </span>
                        </div>
                    </div>

                   
                  </div>
                  <div class="col-sm-6">
                      <label>Hotel Name:</label>
                      <input type="text" name="name" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-6">
                    <label>Total Rooms:</label>
                    <input type="email" name="email" >
                  </div>
                  <div class="col-sm-6">
                      <label>Available Rooms #:</label>
                      <input type="text" name="name" >
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-sm-6">
                    <label>Website Link:</label>
                    <input type="email" name="email" >
                  </div>
                  <div class="col-sm-6">
                    <label>Email Address:</label>
                    <input type="email" name="email" >
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                    <label>Description:</label>
                    <textarea name="description" placeholder="e.g our hotel is best in providing good quality services."></textarea>
                  </div>
                  
              </div>
              
          </div>
      </div>


      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn <btn-danger></btn-danger>" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>



<script>
var data = {
            continents: [
                 "Africa",
                 "Antarctica",
                 "Asia",
                 "Europe",
                 "North America",
                 "Oceania",
                 "South America"],

            countries: ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
                "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
                "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
                "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
                "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
                "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
                "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"],
            capitals: ["Abu Dhabi", "Abuja", "Accra", "Adamstown", "Addis Ababa", "Algiers", "Alofi", "Amman", "Amsterdam",
                "Andorra la Vella", "Ankara", "Antananarivo", "Apia", "Ashgabat", "Asmara", "Astana", "Asunción", "Athens",
                "Avarua", "Baghdad", "Baku", "Bamako", "Bandar Seri Begawan", "Bangkok", "Bangui", "Banjul", "Basseterre",
                "Beijing", "Beirut", "Belgrade", "Belmopan", "Berlin", "Bern", "Bishkek", "Bissau", "Bogotá", "Brasília",
                "Bratislava", "Brazzaville", "Bridgetown", "Brussels", "Bucharest", "Budapest", "Buenos Aires", "Bujumbura",
                "Cairo", "Canberra", "Caracas", "Castries", "Cayenne", "Charlotte Amalie", "Chisinau", "Cockburn Town",
                "Conakry", "Copenhagen", "Dakar", "Damascus", "Dhaka", "Dili", "Djibouti", "Dodoma", "Doha", "Douglas",
                "Dublin", "Dushanbe", "Edinburgh of the Seven Seas", "El Aaiún", "Episkopi Cantonment", "Flying Fish Cove",
                "Freetown", "Funafuti", "Gaborone", "George Town", "Georgetown", "Georgetown", "Gibraltar", "King Edward Point",
                "Guatemala City", "Gustavia", "Hagåtña", "Hamilton", "Hanga Roa", "Hanoi", "Harare", "Hargeisa", "Havana",
                "Helsinki", "Honiara", "Islamabad", "Jakarta", "Jamestown", "Jerusalem", "Juba", "Kabul", "Kampala",
                "Kathmandu", "Khartoum", "Kiev", "Kigali", "Kingston", "Kingston", "Kingstown", "Kinshasa", "Kuala Lumpur",
                "Kuwait City", "Libreville", "Lilongwe", "Lima", "Lisbon", "Ljubljana", "Lomé", "London", "Luanda", "Lusaka",
                "Luxembourg", "Madrid", "Majuro", "Malabo", "Malé", "Managua", "Manama", "Manila", "Maputo", "Marigot",
                "Maseru", "Mata-Utu", "Mbabane Lobamba", "Melekeok Ngerulmud", "Mexico City", "Minsk", "Mogadishu", "Monaco",
                "Monrovia", "Montevideo", "Moroni", "Moscow", "Muscat", "Nairobi", "Nassau", "Naypyidaw", "N'Djamena",
                "New Delhi", "Niamey", "Nicosia", "Nicosia", "Nouakchott", "Nouméa", "Nukuʻalofa", "Nuuk", "Oranjestad",
                "Oslo", "Ottawa", "Ouagadougou", "Pago Pago", "Palikir", "Panama City", "Papeete", "Paramaribo", "Paris",
                "Philipsburg", "Phnom Penh", "Plymouth Brades Estate", "Podgorica Cetinje", "Port Louis", "Port Moresby",
                "Port Vila", "Port-au-Prince", "Port of Spain", "Porto-Novo Cotonou", "Prague", "Praia", "Cape Town",
                "Pristina", "Pyongyang", "Quito", "Rabat", "Reykjavík", "Riga", "Riyadh", "Road Town", "Rome", "Roseau",
                "Saipan", "San José", "San Juan", "San Marino", "San Salvador", "Sana'a", "Santiago", "Santo Domingo",
                "São Tomé", "Sarajevo", "Seoul", "Singapore", "Skopje", "Sofia", "Sri Jayawardenepura Kotte", "St. George's",
                "St. Helier", "St. John's", "St. Peter Port", "St. Pierre", "Stanley", "Stepanakert", "Stockholm", "Sucre",
                "Sukhumi", "Suva", "Taipei", "Tallinn", "Tarawa Atoll", "Tashkent", "Tbilisi", "Tegucigalpa", "Tehran",
                "Thimphu", "Tirana", "Tiraspol", "Tokyo", "Tórshavn", "Tripoli", "Tskhinvali", "Tunis", "Ulan Bator", "Vaduz",
                "Valletta", "The Valley", "Vatican City", "Victoria", "Vienna", "Vientiane", "Vilnius", "Warsaw",
                "Washington, D.C.", "Wellington", "West Island", "Willemstad", "Windhoek", "Yamoussoukro", "Yaoundé", "Yaren",
                "Yerevan", "Zagreb"]
        };
jQuery.typeahead({
    input: '.js-typeahead-country_v2',
    minLength: 1,
    maxItem: 20,
    order: "asc",
    template: "{{display}} <small style='color:#999;'>{{group}}</small>",
    source: {
        country: {
           data: data.countries
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

jQuery.typeahead({
    input: '.js-typeahead-city_v2',
    minLength: 1,
    maxItem: 20,
    order: "asc",
    template: "{{display}} <small style='color:#999;'>{{group}}</small>",
    source: {
        capital: {
           data: data.capitals
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

jQuery.typeahead({
    input: '.js-typeahead-continents_v2',
    minLength: 1,
    maxItem: 20,
    order: "asc",
    template: "{{display}} <small style='color:#999;'>{{group}}</small>",
    source: {
        continent: {
           data: data.continents
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