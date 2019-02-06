<div class="bg-primary collapse hide" id="navbarHeader" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
            	<h4 class="text-white">About Access Kosciusko</h4>
				<p class="text-white">Some information about the site, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
				<button type="button" class="btn btn-outline-light">Email Us today →</button>
				<hr>		
				<h4 class="text-white">Pages</h4>
				<div class="list-group">
	            	<!-- Custom search form if the plugin "search" is enabled -->
					<?php if (pluginActivated('pluginSearch')): ?>
					<a class="list-group-item list-group-item-light form-inline d-block">
						<input id="search-input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-primary my-2 my-sm-0" type="button" onClick="searchNow()">Search</button>
						<script>
						function searchNow() {
							var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
							window.open(searchURL + document.getElementById("search-input").value, "_self");
						}
						</script>
					</a>
					<?php endif ?>
					<!-- Static pages -->
					<?php foreach ($staticContent as $staticPage): ?>
					<a class="list-group-item list-group-item-action list-group-item-light" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
					<?php endforeach ?>
				</div>
        	</div>
            <div class="col-sm-4 offset-md-1 py-4">
            	<h4 class="text-white">Legend</h4>
				<table class="table text-white">
					<thead>
						<tr>
							<th scope="col">Symbol</th>
							<th scope="col">Accessibility Feature</th>
    					</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<td><svg height="20px" viewBox="0 0 68 76" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							        <g id="noun_Wheelchair-ramp_472932" transform="translate(-17.000000, 0.000000)" fill="#FFFFFF">
							            <g id="Group" transform="translate(17.000000, 0.000000)">
							                <polygon id="Path" points="19.97742 44.9809 40.61884 41.1167 48 60 60 58 47 28 29 31 24 17 10 19"></polygon>
							                <path d="M20.99512,64.99902 C22.27198,64.99902 23.56787,64.88134 24.86768,64.63818 C32.14862,63.27502 37.83576,58.27789 40.44233,51.87945 L38.10743,45.65624 L37.90827,45.69353 C37.17023,53.0067 31.71314,59.28691 24.13135,60.70653 C14.91846,62.43651 6.01856,56.33885 4.29346,47.1245 C3.10602,40.78081 5.62543,34.58696 10.31708,30.78026 L8.84955,26.89983 C2.39636,31.50316 -1.18994,39.5703 0.36182,47.86083 C2.24951,57.94287 11.08984,64.99951 20.99512,64.99902 Z" id="Path"></path>
							                <polygon id="Path" points="1 74 1 76 68 76 68 61"></polygon>
							                <circle id="Oval" cx="14" cy="7" r="7"></circle>
							            </g>
							        </g>
							    </g>
							</svg></td>
      <td>Wheelchair Ramp</td>
    </tr>
    <tr>
      <td><svg height="20px" viewBox="0 0 67 69" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="noun_handicap-parking_468464" transform="translate(-18.000000, 0.000000)" fill="#FFFFFF">
            <g id="Group" transform="translate(18.000000, 0.000000)">
                <circle id="Oval" cx="48.5" cy="14.5" r="6.5"></circle>
                <path d="M15,24 C21.6167,24 27,18.61719 27,12 C27,5.38281 21.6167,0 15,0 L8,0 L4,0 L0,0 L0,36 L8,36 L8,24 L15,24 Z M15,8 C17.20557,8 19,9.79395 19,12 C19,14.20605 17.20557,16 15,16 L8,16 L8,8 L15,8 Z" id="Shape" fill-rule="nonzero"></path>
                <path d="M55.43573,32.62549 L54.71716,36.79199 C59.0874,39.44775 62.02246,44.23974 62.02246,49.71679 C62.02246,58.05956 55.23535,64.84667 46.89258,64.84667 C40.42298,64.84667 34.90509,60.75744 32.74628,55.03417 L31.53998,61.08031 C35.02869,65.78112 40.60242,68.84667 46.89258,68.84667 C57.44043,68.84667 66.02246,60.26464 66.02246,49.71679 C66.02246,42.24133 61.70172,35.77087 55.43573,32.62549 Z" id="Path"></path>
                <polygon id="Path" points="48.11139 50.4209 50.01483 40.52283 50.94098 35.15332 51.62231 31.20288 52.6922 25 41 25 38 40 21 40 15 69 26 69 26.15912 68.28381 26.02881 68.25781 28.60748 55.33252 29.5874 50.4209 31.79883 50.4209"></polygon>
            </g>
        </g>
    </g>
</svg></td>
      <td>Handicapped Parking</td>
    </tr>
    <tr>
      <td><svg height="20px" viewBox="0 0 73 71" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="noun_Stairs-Down_466342" transform="translate(-16.000000, 0.000000)" fill="#FFFFFF">
            <g id="Group" transform="translate(16.000000, 0.000000)">
                <polygon id="Path" points="51 19 51 36.2066 33 36.2066 33 53 16 53 16 71 73 71 73 19"></polygon>
                <polygon id="Path" points="26 19 30 19 30 0 11 0 11 4 23.17188 4 0.58594 26.58594 3.41406 29.41406 26 6.82812"></polygon>
            </g>
        </g>
    </g>
</svg></td>
      <td>Stairs</td>
    </tr>
    <tr>
      <td><svg height="20px" viewBox="0 0 100 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="noun_Toilet_466333" fill="#FFFFFF">
            <g id="Group">
                <circle id="Oval" cx="14" cy="6" r="6"></circle>
                <polygon id="Path" points="8 17 0 39 8 39 8 55 20 55 20 39 28 39 20 17"></polygon>
                <circle id="Oval" cx="41" cy="6" r="6"></circle>
                <polygon id="Path" points="27 17 35 39 35 55 47 55 47 39 55 17"></polygon>
                <circle id="Oval" cx="70.65918" cy="6" r="6"></circle>
                <polygon id="Path" points="93.65918 30 79.65918 30 77.65918 17 65.94366 17 66.91986 22.6604 67.60126 26.61096 69.83984 39.59082 84.14569 39.59082 86.51465 39.59082 87.42975 44.15161 89.80707 56 99.65918 56"></polygon>
                <path d="M71.08301,52.29199 C63.86914,52.29199 58,46.42285 58,39.20898 C58,34.67334 60.32214,30.67199 63.83789,28.32409 L63.11139,24.11132 C57.69891,26.98071 54,32.66785 54,39.20898 C54,48.6289 61.66309,56.29199 71.08301,56.29199 C76.51221,56.29199 81.34735,53.73742 84.47846,49.77637 L83.29279,43.86743 C81.41022,48.78491 76.65448,52.29199 71.08301,52.29199 Z" id="Path"></path>
            </g>
        </g>
    </g>
</svg></td>
      <td>Accessible Bathrooms</td>
    </tr>
    <tr>
      <td><svg height="20px" viewBox="0 0 66 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="noun_hand-stuck_466351" transform="translate(-17.000000, 0.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="Group" transform="translate(17.000000, 0.000000)">
                <path d="M48,0.0293 L66,0.0293 L66,69.97065 L48,69.97064 L48,44.80585 L44,46.30542 L44,69.97064 L37,69.97064 L34.95221,52.37208 L24.44141,39.29981 L27.5586,36.79297 L34.73749,45.72131 L48,41.20141 L48,35.47003 L38,37.96899 L32,26.97064 L31.96948,27 L16,27 L21,69.97065 L0,69.97065 L0,0.0293 L44,0.0293 L44,32.97065 L48,31.97065 L48,0.0293 Z M21,22 C24.31372,22 27,19.31372 27,16 C27,12.68628 24.31372,10 21,10 C17.68628,10 15,12.68628 15,16 C15,19.31372 17.68628,22 21,22 Z M58.89062,24.30664 L52.89062,28.30664 L55.10937,31.63476 L61.10937,27.63476 L58.89062,24.30664 Z M58.89062,49.63477 L61.10937,46.30665 L55.10937,42.30665 L52.89062,45.63477 L58.89062,49.63477 Z M61.93848,38.9707 L61.93848,34.9707 L55,34.9707 L55,38.9707 L61.93848,38.9707 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </g>
</svg></td>
      <td>Automatic Door Button</td>
    </tr>
  </tbody>
</table>
              <ul class="list-unstyled">
                <!-- li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li -->
              </ul>
            </div>
            
          </div>
        </div>
      </div>
      
      
<div class="navbar navbar-dark bg-primary box-shadow">
        <div class="container d-flex justify-content-between">
	        
	        
          <a href="<?php echo Theme::siteUrl(); ?>" class="navbar-brand d-flex align-items-center">
            <svg width="40px" height="49px" viewBox="0 0 200 245" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard" transform="translate(-156.000000, -134.000000)" fill="#FFFFFF">
            <g id="Group" transform="translate(156.000000, 134.000000)">
                <polygon id="Path" points="175 129.408163 110.714286 129.408163 100 68 50 68 67.8571429 172.755102 142.857143 172.755102 157.142857 245 200 245"></polygon>
                <circle id="Oval" cx="74" cy="25" r="25"></circle>
                <path d="M75.4178653,229.599691 C41.7526949,229.599691 14.3653077,202.145574 14.3653077,168.398378 C14.3653077,146.171465 26.2852449,126.733136 44.0150154,116.012034 L41.4322049,101 C16.8926681,113.486868 0,138.974155 0,168.398378 C0,210.085796 33.8335318,244 75.4178653,244 C100.847369,244 123.331948,231.281503 137,211.895051 L132.581195,189.694275 C123.926421,212.957254 101.604241,229.599691 75.4178653,229.599691 Z" id="Path"></path>
            </g>
        </g>
    </g>
</svg>
            <strong>&nbsp;&nbsp;<?php echo $site->title(); ?></strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

		</div>
	</div>
</div>
