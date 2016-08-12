
			<h1>Grid system - basics</h1>
			<p>
				You can notice grid classnames are same or similar to Bootstrap, 
				thats becouse compatibility when we were moving away from bootstrap grid 
				to our custom-made, so we didnt have to re-write half of code we had :)
			</p>
			<h2>LUI Grid features:</h2>
			<ul>
				<li>Change col size per breakpoint (boring, everyone can do this)</li>
				<li>Make left or right margin for each col per breakpoint</li>
				<li>Make 1/5, 1/7, 1/8, 1/9, 1/10, 1,11 cols - there is always a situation, when you need one of these</li>
				<li>Make 10 - 100% col widths <em>.col-[]-10p - col-[]-100p = .col-xs-100p</em><br /><br /></li>

				<li><strong>Holly sh*t stuff:</strong></li>
				<li>Chance BOTH vertical and horizontal cols alignment per breakpoint</li>
				<li>Change cols order per breakpoint (order 1 to 12)</li>
				<li>Change cols visibility (display) per breakpoint <em>via .col-[]-0 = .col-xs-0</em></li>
			</ul>
		</div>
	</div>
</section>

<h2 class="demo">Containers</h2>
<div class="container demo">
	this is <em>.container</em>
</div>
<br />
<div class="container fluid demo">
	this is <em>.container.fluid</em>
</div>
<br />
<div class="container-fluid demo">
	this is <em>.container-fluid</em>
</div>
<h2 class="demo">Containers with maximum width</h2>
<div class="container max_2k demo">
	this is <em>.container.max_2k</em>
</div>
<br />
<div class="container max_hd demo">
	this is <em>.container.max_hd</em>
</div>
<br />
<div class="container max_xl demo">
	this is <em>.container.max_xl</em>
</div>
<br />
<div class="container max_lg demo">
	this is <em>.container.max_lg</em>
</div>
<br />
<div class="container max_md demo">
	this is <em>.container.max_md</em>
</div>
<br />
<div class="container max_sm demo">
	this is <em>.container.max_sm</em>
</div>
<br />
<div class="container max_xs demo">
	this is <em>.container.max_xs</em> (XS default width set on 100%)
</div>
<br />
<h2 class="demo">Grid layout - fixed columns</h2>
<div class="container demo">
	<div class="row demo">
		<div class="col-12 demo_col">
			this is <em>.col-12</em> inside <em>.row</em> inside <em>.container</em>
		</div>
	</div>
</div>
<br />
<div class="container demo">
	<div class="row demo">
		<div class="col-1 demo_col">
			 <em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			<em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			 <em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			<em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			 <em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			<em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			 <em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			<em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			 <em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			<em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			 <em>.col-1</em>
		</div>
		<div class="col-1 demo_col">
			<em>.col-1</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">Grid layout - responsive columns</h2>
<div class="container demo">
	<div class="row demo">
		<div class="col-xs-12 col-md-4 demo_col">
			<em>.col-xs-12.col-md-4</em>
		</div>
		<div class="col-xs-12 col-md-4 demo_col">
			<em>.col-xs-12.col-md-4</em>
		</div>
		<div class="col-xs-12 col-md-4 demo_col">
			<em>.col-xs-12.col-md-4</em>
		</div>
	</div>
</div>
