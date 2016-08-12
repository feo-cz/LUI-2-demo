
			<h1>Grid system - position</h1>
			<p>
				LUI grid will make coding your sites way easier, with these cool features, which will allow you align content both verticaly or horizontaly
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

<h2 class="demo">Horizontal alignment</h2>
<div class="container demo">
	<div class="row a-left demo">
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.a-left</em>
		</div>
	</div>
</div>
<br />
<div class="container demo">
	<div class="row a-center demo">
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.a-center</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">Horizontal alignment - per breakpoint</h2>
<div class="container demo">
	<div class="row a-xs-center a-lg-left demo">
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.a-xs-center.a-lg-left</em>
		</div>
	</div>
</div>
<br />
<div class="container demo">
	<div class="row a-xs-center a-lg-right demo">
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.a-xs-center.a-lg-right</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">vertical alignment</h2>
<div class="container demo">
	<div class="row va-top demo">
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.va-top</em>
			<br /><br />
			<br /><br />
		</div>
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.va-top</em>
		</div>
	</div>
</div>
<br />
<div class="container demo">
	<div class="row va-center demo">
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.va-center</em>
			<br /><br />
			<br /><br />
		</div>
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.va-center</em>
		</div>
	</div>
</div>
<br />
<div class="container demo">
	<div class="row va-bottom demo">
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.va-bottom</em>
			<br /><br />
			<br /><br />
		</div>
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.va-bottom</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">vertical alignment - per breakpoint</h2>
<div class="container demo">
	<div class="row va-xs-top va-lg-bottom demo">
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.va-xs-top.va-lg-bottom</em>
			<br /><br />
			<br /><br />
		</div>
		<div class="col-4 demo_col">
			<em>col-4</em> inside <em>.row.va-xs-top.va-lg-bottom</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">combined alignment</h2>
<div class="container demo">
	<div class="row a-center va-center demo">
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.a-center.va-center</em>
			<br /><br />
			<br /><br />
		</div>
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.a-center.va-center</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">combined alignment with breakpoint difference</h2>
<div class="container demo">
	<div class="row a-xs-left va-xs-top a-lg-right va-lg-bottom va-center demo">
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.a-xs-left.va-xs-top.a-lg-right.va-lg-bottom</em>
			<br /><br />
			<br /><br />
		</div>
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.a-xs-left.va-xs-top.a-lg-right.va-lg-bottom</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">change order per breakpoint</h2>
<div class="container demo">
	<div class="row demo">
		<div class="col-4 o-xs-1 o-md-3 demo_col">
			<em>.col-4.o-xs-1.o-md-3</em><br />
			<h2>col 1 (swap)</h2>
		</div>
		<div class="col-4 o-xs-2 o-md-2 demo_col">
			<em>.col-4.o-xs-2.o-md-2</em><br />
			<h2>col 2 (stay)</h2>
		</div>
		<div class="col-4 o-xs-3 o-md-1 demo_col">
			<em>.col-4.o-xs-3.o-md-1</em><br />
			<h2>col 3 (swap)</h2>
		</div>
	</div>
</div>
<br />
<h2 class="demo">space between</h2>
<div class="container demo">
	<div class="row demo">
		<div class="col-4 ml-1 demo_col">
			<em>.col-4.ml-2</em>
		</div>
		<div class="col-4 ml-1 demo_col">
			<em>.col-4.ml-1</em>
		</div>
	</div>
</div>
<br />
<div class="container demo">
	<div class="row demo">
		<div class="col-xs-12 col-lg-6 ml-lg-6 demo_col">
			<em>.col-xs-12.col-lg-6.ml-lg-6</em>
		</div>
	</div>
</div>

<br />
<div class="container demo">
	<div class="row demo">
		<div class="col-xs-12 col-lg-4 mr-lg-2 demo_col">
			<em>.col-xs-12.col-lg-4.mr-lg-2</em>
		</div>
		<div class="col-xs-12 col-lg-6 demo_col">
			<em>.col-xs-12.col-lg-6</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">fill space verticaly</h2>

<div class="container demo">
	<div class="row stretch demo">
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.stretch</em>
			
		</div>
		<div class="col-4 demo_col">
			<em>.col-2</em> inside <em>.row.stretch</em>
			<br /><br /><br /><br />
			this one is the longest
		</div>
		<div class="col-4 demo_col">
			<em>.col-4</em> inside <em>.row.stretch</em>
		</div>
	</div>
</div>
<br />
<h2 class="demo">fill space horizontaly</h2>

<div class="container demo">
	<div class="row fill demo">
		<div class="col-2 demo_col">
			<em>.col-2</em> inside <em>.row.fill</em>
		</div>
		<div class="col-2 demo_col">
			<em>.col-2</em> inside <em>.row.fill</em>
		</div>
		<div class="col-2 demo_col">
			<em>.col-2</em> inside <em>.row.fill</em>
		</div>
	</div>
</div>