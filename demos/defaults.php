
<h1>Default HTML element styles (WIP)</h1>
<p>
	This feature can be turned off in config.less, if you want to use your own styles, without rewriting everything.
</p>


<section class="item">
	<h2>input</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="text" />
		<br />
		<input type="text" placeholder="This is placeholder" />
		<br />
		<input type="text" value="whatever value you want" />
		
		<h3>disabled</h3>
		<input type="text" disabled />
		<br />
		<input type="text" placeholder="This is placeholder" disabled />
		<br />
		<input type="text" value="whatever value you want" disabled />
		
		<h3>readonly</h3>
		<input type="text" readonly />
		<br />
		<input type="text" placeholder="This is placeholder" readonly />
		<br />
		<input type="text" value="whatever value you want" readonly />
		
		
		<h3>other types</h3>
		password: <input type="password" /><br />
		date: <input type="date" /><br />
		datetime: <input type="datetime" /><br />
		datetime-local: <input type="datetime-local" /><br />
		email: <input type="email" /><br />
		month: <input type="month" /><br />
		number: <input type="number" /><br />
		search: <input type="search" /><br />
		tel: <input type="tel" /><br />
		time: <input type="time" /><br />
		url: <input type="url" /><br />
		week: <input type="week" /><br />
	</div>
</section>

<section class="item">
	<h2>input[type="text"] with datalist</h2>
	<div class="content">
		<h3>normal</h3>
		<input list="browsers" type="text" name="browser">
		<datalist id="browsers">
			<option value="Internet Explorer">
			<option value="Firefox">
			<option value="Chrome">
			<option value="Opera">
			<option value="Safari">
		</datalist>
	</div>
</section>

<section class="item">
	<h2>Select</h2>
	<div class="content">
		<h3>normal</h3>
		<select>
			<option>Lorem ipsum dolor 1</option>
			<option>Lorem ipsum dolor 2</option>
			<option>Lorem ipsum dolor 3</option>
		</select>
		
		<h3>disabled</h3>
		<select disabled>
			<option>Lorem ipsum dolor 1</option>
			<option>Lorem ipsum dolor 2</option>
			<option>Lorem ipsum dolor 3</option>
		</select>
		<br /><br />
		<hr />
	
		<h3>jQuery UI - normal</h3>
		<select class="make_lui_select">
			<option>Custom select option 1</option>
			<option>Custom select option 2 dfggdf dfg</option>
			<option>Custom select option 3dfgdfg dgfgdf</option>
		</select>
		<h3>jQuery UI - disabled</h3>
		<br />
		<select class="make_lui_select" disabled>
			<option>Another select option 1</option>
			<option>Another select option 2</option>
			<option>Another select option 3</option>
		</select>
	</div>
</section>


<section class="item">
	<h2>textarea</h2>
	<div class="content">
		<h3>normal</h3>
		<textarea></textarea>
		<br />
		<textarea placeholder="This is placeholder"></textarea>
		<br />
		<textarea>whatever value you want</textarea>
		
		
		<h3>disabled</h3>
		<textarea disabled></textarea>
		<br />
		<textarea placeholder="This is placeholder" disabled></textarea>
		<br />
		<textarea disabled>whatever value you want</textarea>
		
		<h3>readonly</h3>
		<textarea readonly></textarea>
		<br />
		<textarea placeholder="This is placeholder" readonly></textarea>
		<br />
		<textarea readonly>whatever value you want</textarea>
	</div>
</section>

<section class="item">
	<h2>button</h2>
	<div class="content">
		<h3>normal</h3>
		<button>Click</button>
		
		<h3>disabled</h3>
		<button disabled>cant click</button>
	</div>
</section>

<section class="item">
	<h2>input[type="button"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="button" value="click" />
		
		<h3>disabled</h3>
		<input type="button" value="cant click" disabled />
	</div>
</section>

<section class="item">
	<h2>input[type="submit"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="submit" value="click" />
		
		<h3>disabled</h3>
		<input type="submit" value="cant click" disabled />
	</div>
</section>

<section class="item">
	<h2>input[type="reset"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="reset" value="click" />
		
		<h3>disabled</h3>
		<input type="reset" value="cant click" disabled />
	</div>
</section>

<section class="item">
	<h2>input[type="color"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="color" />
		
		<h3>disabled</h3>
		<input type="color" disabled />
	</div>
</section>

	
<section class="item">
	<h2>input[type="range"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="range" />
		
		<h3>disabled</h3>
		<input type="range" disabled />
	</div>
</section>


<section class="item">
	<h2>input[type="radio"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="radio" />
		
		<h3>disabled</h3>
		<input type="radio" disabled />
	</div>
</section>


<section class="item">
	<h2>input[type="checkbox"]</h2>
	<div class="content">
		<h3>normal</h3>
		<input type="checkbox" />
		
		<h3>disabled</h3>
		<input type="checkbox" disabled />
	</div>
</section>


