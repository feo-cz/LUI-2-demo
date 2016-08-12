
<h1>Mixins</h1>
<section class="item">
	<h2>.lui.clear</h2>
	<div class="content">
		<h3>.this()</h3>

<pre data-title="Usage:">
.lui.clear.this();
</pre>

<pre data-title="Result:">
display: block;
width: 100%;
clear: both;
</pre>

		<h3>.after()</h3>

<pre data-title="Usage:">
.lui.clear.after();
</pre>

<pre data-title="Result:">
&:after {
	display: block;
	width: 100%;
	clear: both;
	content: "";
}
</pre>


		<h3>.before()</h3>

<pre data-title="Usage:">
.lui.clear.before();
</pre>

<pre data-title="Result:">
&:before {
	display: block;
	width: 100%;
	clear: both;
	content: "";
}
</pre>
						
	</div>
</section>