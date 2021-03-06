<!doctype html>
<html>
<head>
	<title>ChapmanU Omni Demo Page</title>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="dist/omni-nav.min.css?ver=1439402182">
	<script type="text/javascript" src="dist/omni-nav.min.js?ver=1439402182"></script>

	<script type="text/javascript" src="//use.typekit.net/nqy1aog.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<style>

	html {
		font-family: "proxima-nova-soft", Arial, Verdana, "Sans Serif";
		color: #222222;
		background: #9F9;
	} 

	body {
		background: #eaeaea;
	}

	h1, h2, h3, h4, h5, h6 {
		font-family: "proxima-nova", "futura-pt", Arial, Verdana, "Sans Serif";
	}

	#content {
		padding:60px;
		max-width: 760px;
		margin: 0 auto;
	}

	blockquote {
		padding: 6px 15px;
		margin:0;
		color: #0070CF;
		background: #DFE1E3;
		margin-bottom: 30px;

		font-size: 14px;
		/*font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
	}

	ul { list-style-type: square; }

	.small {
		font-size: 14px;
		color: #999;
	}

	</style>
</head>
<body>

	<div id="content">
<!-- 		<h1><center>Welcome to the ChapmanU Omni-Nav page!</center></h1> -->

<!-- 		<p>This page demonstrates how the OmniBar functions, and provides some useful information about what is needed to implement it on a website.</p> -->
		
		<h1><center>"Free time is the enemy of progress."</center></h1>

		<p><center>- Casey Neistat</center></p>

		<h2>Instructions to add to a site</h2>
		<p>First, publish all of the assets in the `/dist/` folder to your web server. </p>
		<p>Then link to the following in the <b>&lang; head &rang;</b> of the page: </p>

		<blockquote>
			<ul>
				<li>omni-nav.min.js (7kb)</li>
				<li>omni-nav.min.css (13kb)</li>
			</ul>
		</blockquote>

		<p>Use a server-side include* to add this HTML right before the closing <b>&lang; body &rang;</b> tag, or in the header of your page. It doesn't matter where.</p>

		<blockquote>
			<ul>
				<li>omni-nav.html (5kb)</li>
			</ul>
		</blockquote>

		<!-- <p class="small"><em>* It is highly recommended to use server-side caching when including this file in order to increase performance.  If the file is unreachable, the server should be configured to serve the cached asset indefinitely. </em></p> -->



		<br /><br /><br /><br /><br /><br />

		<h1>Development Instructions</h1>

		<p>Modify the files located in the <b>/src/</b> directory. Use <b>grunt</b> or <b>grunt watch</b> in the terminal to compile assets. You should only ever need to modify the following files; omni-nav.svg is an SVG spritemap with all icons. </p>

		<blockquote>
			<ul>
				<li>src/omni-nav.js</li>
				<li>src/omni-nav.scss</li>
				<li>src/omni-nav.svg</li>
				<li>src/omni-nav.html</li>
			</ul>
		</blockquote>

		<p>Make sure to run grunt to compile your assets before publishing.</p>


		<br /><br /><br /><br /><br /><br />

		<h1>Companion Bar</h1>

		<p>On your page, include the following HTML structure anywhere: </p>

		<blockquote>&lt;div id=&quot;cu_companion_bar&quot;&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;Loyal Companion Bar<br /> &lt;/div&gt;</blockquote>

		<p>Your companion bar content will then magically appear. </p>


		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


	</div>

	<div id="cu_nav">
	<ul id="cu_nav_domain" class="cu_nav_menu cu_nav_selectable">
		<li class="selected"><a class="cu_nav_button" href="http://www.chapman.edu"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_window" /></svg>Chapman.edu</a></li>
		<li><a class="cu_nav_button" href="https://events.chapman.edu"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#calendar" /></svg>Events</a></li>
		<li><a class="cu_nav_button" href="https://blogs.chapman.edu"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#newspaper" /></svg>Blogs</a></li>
		<li><a class="cu_nav_button" href="https://social.chapman.edu"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#chat" /></svg>Social</a></li>
		<li><a class="cu_nav_button" href="https://inside.chapman.edu"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>Inside</a></li>
	</ul>

	<ul class="cu_nav_secondary cu_nav_menu cu_nav_selectable" style="display: none;" data-show-domain="blogs.chapman.edu">
		<li><a class="cu_nav_button" href="/business"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_business" /></svg>Argyros School of Business and Economics</a></li>
		<li><a class="cu_nav_button" href="/ces"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_ces" /></svg>College of Educational Studies</a></li>
		<li><a class="cu_nav_button" href="/copa"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_copa" /></svg>College of Performing Arts</a></li>
		<li><a class="cu_nav_button" href="/crean"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_crean" /></svg>Crean College of Health and Behavioral Sciences</a></li>
		<li><a class="cu_nav_button" href="/dodge"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_dodge" /></svg>Dodge College of Film and Media Arts</a></li>
		<li><a class="cu_nav_button" href="/scst"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_scst" /></svg>Schmid College of Science and Technology</a></li>
		<li><a class="cu_nav_button" href="/law"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_law" /></svg>Fowler School of Law</a></li>
		<li><a class="cu_nav_button" href="/wilkinson"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_wilkinson" /></svg>Wilkinson College of Humanities and Social Sciences</a></li>
		<li><a class="cu_nav_button" href="/happenings"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>Happenings</a></li>
		<li><a class="cu_nav_button" href="/magazine"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>Chapman Magazine</a></li>
		<li><a class="cu_nav_button" href="/students"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>One University Student Blog</a></li>
		<li><a class="cu_nav_button" href="/alumni"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>Alumni</a></li>
		<li class="selected"><a class="cu_nav_button" href="/"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>Browse all blogs</a></li>
	</ul>

	<ul class="cu_nav_secondary cu_nav_menu cu_nav_selectable" style="display: none;" data-show-domain="www.chapman.edu">
		<li data-hide-path="/law"><a class="cu_nav_button" href="/future-students">Prospective Students</a></li>
		<li data-hide-path="/law"><a class="cu_nav_button" href="/students">Current Students</a></li>
		<li data-hide-path="/law"><a class="cu_nav_button" href="/alumni">Alumni</a></li>
		<li data-hide-path="/law"><a class="cu_nav_button" href="/faculty-staff">Faculty &amp; Staff</a></li>
		<li data-hide-path="/law"><a class="cu_nav_button" href="/families">Parents &amp; Families</a></li>

		<li data-show-path="/law"><a class="cu_nav_button" href="/law/admission">Future Law Students</a></li>
		<li data-show-path="/law"><a class="cu_nav_button" href="/law/admission/newly-admitted">New Students</a></li>
		<li data-show-path="/law"><a class="cu_nav_button" href="/law/student-resources">Current Students</a></li>
		<li data-show-path="/law"><a class="cu_nav_button" href="/law/law-faculty">Faculty &amp; Staff</a></li>
		<li data-show-path="/law"><a class="cu_nav_button" href="/law/alumni">Alumni</a></li>
		<li data-show-path="/law"><a class="cu_nav_button" href="/law/employers">Employers</a></li>

		<li class="selected hidden-unless-default"><a class="cu_nav_button" href="#">Find information for...</a></li>
	</ul>

	<div id="cu_login_container" class="cu_nav_menu">

		<div id="cu_identity">
			<!-- <img class="cu_avatar" src="<%= image_path('user_id.png') %>" /> -->
			<svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#user" /></svg>
			<span class="cu_name">Log In</span>
		</div>

		<div id="cu_login_form" class="cu_dropdown_menu" style="display: none;" data-show-domain="blogs.chapman.edu">
			<form action="https://blogs.chapman.edu/wp-login.php" method="post">

				<label for="cu_username" style="display:none;">ChapmanU User ID</label>
				<input name="log" class="username" id="cu_username" type="text" value="ChapmanU User ID" onfocus="if (this.value == 'ChapmanU User ID') {this.value = '';}" onblur="if (this.value == '') {this.value = 'ChapmanU User ID';}" />

				<label for="cu_password" style="display:none;">Password</label>
				<input name="pwd" class="password" id="cu_password" type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}" />

				<input name="submit" type="submit" id="cu_submit" value="Log In" />

			    <input name="rememberme" class="persist" id="cu_persist" type="checkbox" value="forever" />
			    <label for="cu_persist">Remember Me </label>

			  </form>
		</div>
		
		<ul class="cu_dropdown_menu">
			<li><a class="cu_nav_button" href="https://blackboard.chapman.edu/" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#blackboard" /></svg>Blackboard</a></li>
			<li><a class="cu_nav_button" href="https://my.chapman.edu/psp/PA91PROD/EMPLOYEE/EMPL/h/?tab=PAPP_GUEST" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_window" /></svg>MyChapman</a></li>
			<li><a class="cu_nav_button" href="http://panthermail.chapman.edu/" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#email" /></svg>PantherMail</a></li>
			<li><a class="cu_nav_button" href="https://exchange.chapman.edu/" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#email" /></svg>Staff &amp; Faculty Email</a></li>
			<li><a class="cu_nav_button" href="https://mywindow.chapman.edu/" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_window" /></svg>MyWindow</a></li>
			<li><a class="cu_nav_button" href="https://cas.chapman.edu/login?service=https://orgsync.com/cas/chapman-university" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#orgsync" /></svg>OrgSync</a></li>
			<li><a class="cu_nav_button" href="https://ariel.chapman.edu/WebAdvisor/WebAdvisor" target="_blank"><svg viewbox="0 0 512 512"><use xlink:href="dist/omni-nav.svg#cu_monogram" /></svg>WebAdvisor</a></li>
		</ul>

	</div>

	<div id="cu_search">

		<div id="cu_search_box">
			<form action="//www.chapman.edu/search-results/index.aspx">
			<table cellspacing="0" cellpadding="0" class="gsc-search-box">
				<tbody>
					<tr>
						<td class="gsc-input">
							<input id="cu_search_no_js" autocomplete="off" type="text" size="10" class="gsc-input no-js" name="q" title="search" spellcheck="false" style="outline: none;">
						</td>
						<td class="gsc-search-button">
							<input type="button" value="Search" class="gsc-search-button" title="search">
						</td>
						<td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div>
						</td>
					</tr>
				</tbody>
			</table>
			</form>
		</div>

		<div id="cu_search_results">
			<div id="cu_search_results_cell">
				<div id="cu_search_results_ui">

				</div>
			</div>
		</div>
	</div>

</div>