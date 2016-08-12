
<h1>Mixins</h1>
<section class="item">
	<h2>.lui.filter</h2>
	<div class="content">
		<h3>.this(~"@args")</h3>

<pre data-title="Usage:">
.lui.filter.this(~"@args");
</pre>

<pre>
-webkit-filter: @args;
filter: @args;
</pre>

<pre data-title="Demo:">
.lui.filter.this(~"blur(2px)");
</pre>

		<div class="demo_filter this">
			<img src="/demo.jpg" />
		</div>
		
		<h3>.brightness(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.brightness(@arg);
</pre>

<pre>
-webkit-filter: brightness(@args);
filter: brightness(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.brightness(180%);
</pre>

		<div class="demo_filter brightness">
			<img src="/demo.jpg" />
		</div>
		
		<h3>.contrast(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.contrast(@arg);
</pre>

<pre data-title="Result:">
-webkit-filter: contrast(@args);
filter: contrast(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.contrast(50%);
.lui.filter.contrast(150%);
</pre>

		<div class="demo_filter contrast">
			<img src="/demo.jpg" />
		</div>
		<div class="demo_filter contrast2">
			<img src="/demo.jpg" />
		</div>

		<h3>.grayscale(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.grayscale(@arg);
</pre>

<pre data-title="Result:">
-webkit-filter: grayscale(@args);
filter: grayscale(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.grayscale(50%);
.lui.filter.grayscale(150%);
</pre>

		<div class="demo_filter grayscale">
			<img src="/demo.jpg" />
		</div>
		<div class="demo_filter grayscal2">
			<img src="/demo.jpg" />
		</div>

		<h3>.hue-rotate(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.hue-rotate(@arg);
.lui.clear.hue(@arg);
</pre>

<pre data-title="Result:">
-webkit-filter: hue-rotate(@args);
filter: hue-rotate(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.hue-rotate(-50deg);
.lui.filter.hue-rotate(150deg);
</pre>

		<div class="demo_filter hue-rotate">
			<img src="/demo.jpg" />
		</div>
		<div class="demo_filter hue-rotate2">
			<img src="/demo.jpg" />
		</div>

		<h3>.invert(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.invert(@arg);
</pre>

<pre data-title="Result:">
-webkit-filter: invert(@args);
filter: invert(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.invert(100%);
</pre>

		<div class="demo_filter invert">
			<img src="/demo.jpg" />
		</div>

		<h3>.saturate(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.saturate(@arg);
</pre>

<pre data-title="Result:">
-webkit-filter: saturate(@args);
filter: saturate(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.saturate(5);
</pre>

		<div class="demo_filter saturate">
			<img src="/demo.jpg" />
		</div>

		<h3>.sepia(@arg)</h3>

<pre data-title="Usage:">
.lui.clear.sepia(@arg);
</pre>

<pre data-title="Result:">
-webkit-filter: sepia(@args);
filter: sepia(@args);
</pre>

<pre data-title="Demo:">
.lui.filter.sepia(75%);
</pre>

		<div class="demo_filter sepia">
			<img src="/demo.jpg" />
		</div>
	</div>
</section>
		