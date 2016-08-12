
<h1>Mixins</h1>
<section class="item">
	<h2>.lui.box-sizing</h2>
	<div class="content">
		<h3>.this(@args)</h3>

<pre data-title="Usage:">
.lui.box-sizing.this(@args);
</pre>

<pre data-title="Result:">
-webkit-box-sizing: @args;
-moz-box-sizing: @args;
box-sizing: @args;
</pre>

		<h3>.border-box() || .border()</h3>

<pre data-title="Usage:">
.lui.box-sizing.border-box();
.lui.box-sizing.border();
</pre>

<pre data-title="Result:">
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
</pre>

		<h3>.content-box() || .content()</h3>

<pre data-title="Usage:">
.lui.box-sizing.content-box();
.lui.box-sizing.content();
</pre>

<pre data-title="Result:">
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
</pre>
						
	</div>
</section>
		