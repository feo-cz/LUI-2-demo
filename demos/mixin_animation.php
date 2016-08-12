
<h1>Mixins</h1>
<section class="item">
	<h3>.lui.animation</h3>
	<div class="content">
		<h4>.this(@args)</h4>

<pre data-title="Usage:">
.lui.animation.this(@args);
</pre>
<pre data-title="Result:">
-webkit-animation: @args;
-moz-animation: @args;
-ms-animation: @args;
animation: @args;
</pre>

		<h4>.delay(@delay)</h4>
						
<pre data-title="Usage:">
.lui.animation.delay(@delay);
</pre>
<pre data-title="Result:">
-webkit-animation-delay: @delay;
-moz-animation-delay: @delay;
-ms-animation-delay: @delay;
animation-delay: @delay;
</pre>

		<h4>.direction(@direction)</h4>
						
<pre data-title="Usage:">
.lui.animation.direction(@direction);
</pre>
<pre data-title="Result:">
-webkit-animation-direction: @direction;
-moz-animation-direction: @direction;
-ms-animation-direction: @direction;
animation-direction: @direction;
</pre>

		<h4>.duration(@duration)</h4>
						
<pre data-title="Usage:">
.lui.animation.duration(@duration);
</pre>
<pre data-title="Result:">
-webkit-animation-duration: @duration;
-moz-animation-duration: @duration;
-ms-animation-duration: @duration;
animation-duration: @duration;
</pre>

		<h4>.fill-mode(@mode)</h4>
						
<pre data-title="Usage:">
.lui.animation.fill-mode(@mode);
</pre>
<pre data-title="Result:">
-webkit-animation-fill-mode: @mode;
-moz-animation-fill-mode: @mode;
-ms-animation-fill-mode: @mode;
animation-fill-mode: @mode;
</pre>

		<h4>.iteration-count(@count) || .count(@count)</h4>
						
<pre data-title="Usage:">
.lui.animation.iteration-count(@count);
.lui.animation.count(@count);
</pre>
<pre data-title="Result:">
-webkit-animation-iteration-count: @count;
-moz-animation-iteration-count: @count;
-ms-animation-iteration-count: @count;
animation-iteration-count: @count;
</pre>

		<h4>.name(@name)</h4>
						
<pre data-title="Usage:">
.lui.animation.name(@name);
</pre>
<pre data-title="Result:">
-webkit-animation-name: @name;
-moz-animation-name: @name;
-ms-animation-name: @name;
animation-name: @name;
</pre>

		<h4>.play-state(@state)</h4>
						
<pre data-title="Usage:">
.lui.animation.play-state(@state);
</pre>
<pre data-title="Result:">
-webkit-animation-play-state: @state;
-moz-animation-play-state: @state;
-ms-animation-play-state: @state;
animation-play-state: @state;
</pre>

		<h4>.timing-function(@function)</h4>
						
<pre data-title="Usage:">
.lui.animation.timing-function(@function);
</pre>
<pre data-title="Result:">
-webkit-animation-timing-function: @function;
-moz-animation-timing-function: @function;
-ms-animation-timing-function: @function;
animation-timing-function: @function;
</pre>

	</div>
</section>
		