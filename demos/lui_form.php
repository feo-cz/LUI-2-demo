
<h1>Forms</h1>
<p>
	Forms are made to be used directly with LUI flexbox grid. Since you can do stuff like vertical align per line/row of form, set columns with based on actual grid size, etc.
</p>

<h4>Basics</h4>

<p>
	Each line can have custom settings such as vertical/horizontal align, or width. You can put label on top of input or put multiple inputs beside each other, whatever you need! 
	<br />
	<strong>
		NOTICE: each text input or select needs to be wrapped inside .input element.
	</strong>
</p>

				
				
<pre data-title="Source:">
&lt;form class=&quot;<span class="highlight">lui_form</span>&quot;&gt;
	&lt;div class=&quot;<span class="highlight">item</span> row va-center&quot;&gt;
		&lt;div class=&quot;col-xs-12 col-md-3&quot;&gt;
			&lt;label class=&quot;<span class="highlight">label</span> sm-block&quot;&gt;Input&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-xs-12 col-md-7&quot;&gt;
			&lt;div class=&quot;<span class="highlight">input</span>&quot;&gt;
				&lt;input type=&quot;text&quot; /&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;

</pre>

<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" />
			</div>
		</div>
	</div>
</form>


<h4>Prefix / postfix for inputs</h4>

<p>
	Input width is computed via javascript when using prefix/postfix settings
</p>


<pre data-title="Source:">
&lt;form class=&quot;lui_form&quot;&gt;
	&lt;div class=&quot;item row va-center&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;Input postfix demo&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-5 col-sm-12 col-xs-12&quot;&gt;
			&lt;div class=&quot;<span class="highlight">input postfix</span>&quot;&gt;
				&lt;input type=&quot;text&quot; placeholder=&quot;ololololo&quot; /&gt;
				<span class="highlight">&lt;div class=&quot;lui_postfix&quot;&gt;CZK&lt;/div&gt;</span>
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;item row va-center&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;Input prefix demo&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-5 col-sm-12 col-xs-12&quot;&gt;
			&lt;div class=&quot;<span class="highlight">input prefix</span>&quot;&gt;
				<span class="highlight">&lt;div class=&quot;lui_prefix&quot;&gt;CZK&lt;/div&gt;</span>
				&lt;input type=&quot;text&quot; placeholder=&quot;ololololo&quot; /&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;
</pre>


<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input postfix demo</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix">CZK</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input prefix demo</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input prefix">
				<div class="lui_prefix">CZK</div>
				<input type="text" placeholder="ololololo" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input postfix demo (FA)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix fa_a_file"></div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input prefix demo (FA)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input prefix">
				<div class="lui_prefix fa_b_search"></div>
				<input type="text" placeholder="ololololo" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input postfix demo (as button)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input postfix">
				<input type="text" placeholder="ololololo" />
				<a href="#" class="lui_postfix">add file</a>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input prefix demo (as button)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input prefix">
				<a href="#" class="lui_prefix fa_b_search"></a>
				<input type="text" placeholder="ololololo" />
			</div>
		</div>
	</div>
</form>



<h4>Custom select (wrapped by jQuery)</h4>

<p>
	You need jQuery and jQuery UI libs to make this working
</p>
				
<pre data-title="Source:">
&lt;form class=&quot;lui_form&quot;&gt;
	&lt;div class=&quot;item row va-center&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;jQuery Select&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;div class=&quot;input&quot;&gt;
				<span class="highlight">
				&lt;select class=&quot;make_lui_select&quot;&gt;
					&lt;option&gt;Lorem ipsum dolor option in select&lt;/option&gt;
					&lt;option&gt;option in select&lt;/option&gt;
					&lt;option&gt;olololo&lt;/option&gt;
				&lt;/select&gt;
				</span>
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;

	
</pre>

<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">jQuery Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="input">
				<select class="make_lui_select">
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
	</div>
</form>


<h4>Custom Checkboxes</h4>

<p>
	tabindex is recommended if you want your forms accesible - some people may use TAB
</p>
				
				
<pre data-title="Source:">
&lt;form class=&quot;lui_form&quot;&gt;
	&lt;div class=&quot;item row va-center&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;Checkbox1&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-9 col-sm-12 col-xs-12&quot;&gt;
			<span class="highlight">
			&lt;label class=&quot;lui_check&quot;&gt;
				&lt;input type=&quot;checkbox&quot; tabindex=&quot;0&quot; /&gt;
				&lt;span&gt;Check this&lt;/span&gt;
			&lt;/label&gt;
			</span>
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;item row va-top&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;Checks list&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-9 col-sm-12 col-xs-12&quot;&gt;
			<span class="highlight">
			&lt;div class=&quot;lui_check_list&quot;&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_check confirm&quot;&gt;
						&lt;input type=&quot;checkbox&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;First checkbox&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_check delete&quot;&gt;
						&lt;input type=&quot;checkbox&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;Second checkbox&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_check confirm&quot;&gt;
						&lt;input type=&quot;checkbox&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;First checkbox&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_check delete&quot;&gt;
						&lt;input type=&quot;checkbox&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;Second checkbox&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			</span>
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;


</pre>

<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check">
				<input type="checkbox" tabindex="0" />
				<span>Check this</span>
			</label>
		</div>
	</div>
	<div class="item row va-top">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checks list</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_check_list">
				<div>
					<label class="lui_check confirm">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check delete">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check confirm">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check delete">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
			</div>
		</div>
	</div>
</form>


<h4>Custom Radios</h4>

<p>
	Basicaly same usage as custom checkboxes
</p>
				
<pre data-title="Source:">
&lt;form class=&quot;lui_form&quot;&gt;
	&lt;div class=&quot;item row va-center&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;Radio&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-9 col-sm-12 col-xs-12&quot;&gt;
			<span class="highlight">
			&lt;label class=&quot;lui_radio&quot;&gt;
				&lt;input type=&quot;radio&quot; name=&quot;radio&quot; valie=&quot;1&quot; tabindex=&quot;0&quot; /&gt;
				&lt;span&gt;Radio this&lt;/span&gt;
			&lt;/label&gt;
			</span>
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;item row va-ctop&quot;&gt;
		&lt;div class=&quot;col-md-3 col-sm-12 col-xs-12&quot;&gt;
			&lt;label class=&quot;label sm-block&quot;&gt;Radio list&lt;/label&gt;
		&lt;/div&gt;
		&lt;div class=&quot;col-md-9 col-sm-12 col-xs-12&quot;&gt;
			<span class="highlight">
			&lt;div class=&quot;lui_radio_list&quot;&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_radio warning&quot;&gt;
						&lt;input type=&quot;radio&quot; name=&quot;radio1&quot; valie=&quot;1&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;Radio item 1&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_radio confirm&quot;&gt;
						&lt;input type=&quot;radio&quot; name=&quot;radio1&quot; valie=&quot;2&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;Radio item 2&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
				&lt;div&gt;
					&lt;label class=&quot;lui_radio iinfo&quot;&gt;
						&lt;input type=&quot;radio&quot; name=&quot;radio1&quot; valie=&quot;3&quot; tabindex=&quot;0&quot; /&gt;
						&lt;span&gt;Radio item 3&lt;/span&gt;
					&lt;/label&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			</span>
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;

	
</pre>

<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio">
				<input type="radio" name="radio" valie="1" tabindex="0" />
				<span>Radio this</span>
			</label>
		</div>
	</div>
	<div class="item row va-ctop">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio list</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_radio_list">
				<div>
					<label class="lui_radio warning">
						<input type="radio" name="radio1" valie="1" tabindex="0" />
						<span>Radio item 1</span>
					</label>
				</div>
				<div>
					<label class="lui_radio confirm">
						<input type="radio" name="radio1" valie="2" tabindex="0" />
						<span>Radio item 2</span>
					</label>
				</div>
				<div>
					<label class="lui_radio iinfo">
						<input type="radio" name="radio1" valie="3" tabindex="0" />
						<span>Radio item 3</span>
					</label>
				</div>
			</div>
		</div>
	</div>
</form>

				
<hr />
<h2>Everything demo</h2>


<div class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Static slider (not working yet)</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_input_range">
				<div class="range">
					<div class="ranger from" data-value="0 CZK"></div>
					<div class="ranger to" style="left:100px" data-value="5000 CZK"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input w/ placeholder</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" placeholder="Lorem ipsum dolor" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input w/ placeholder readonly</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" placeholder="Lorem ipsum dolor" readonly="readonly" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input w/ placeholder disabled</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" placeholder="Lorem ipsum dolor" disabled="disabled" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input w/ value</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" value="This is value" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input w/ value readonly</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" value="This is value" readonly="readonly" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input w/ value disabled</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input">
				<input type="text" value="This is value" disabled="disabled" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Input postfix demo</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="input postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix">CZK</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block required">Longer postfix</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix">LOREM IPS</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Read only with prefix</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="input prefix">
				<div class="lui_prefix">TEST</div>
				<input type="text" value="read only" readonly="readonly" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="input">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="info">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="input">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="info error fa_b_times">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="input">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="info confirm fa_b_check">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="input">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="info warning fa_b_warning">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	
	
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">jQuery Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="input">
				<select class="make_lui_select">
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
	</div>
	
	
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox1</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check">
				<input type="checkbox" tabindex="0" />
				<span>Check this</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check info">
				<input type="checkbox" tabindex="0" />
				<span>Info</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check confirm">
				<input type="checkbox" tabindex="0" />
				<span>Confirm</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check error">
				<input type="checkbox" tabindex="0" />
				<span>Error</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check warning">
				<input type="checkbox" tabindex="0" />
				<span>Warning</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checkbox simple</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_check">
				<input type="checkbox" tabindex="0" />
				<span></span>
			</label>
		</div>
	</div>
	<div class="item row va-top">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checks list</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_check_list">
				<div>
					<label class="lui_check confirm">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check delete">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check confirm">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check delete">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Checks list inline</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_check_list inline">
				<div>
					<label class="lui_check confirm">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check delete">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check confirm">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check delete">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio">
				<input type="radio" name="radio" valie="1" tabindex="0" />
				<span>Radio this</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block col-lg-3 col-md-6 col-sm-12 col-xs-12">Radio</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio info">
				<input type="radio" name="radio" valie="2" tabindex="0" />
				<span>Info</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio confirm">
				<input type="radio" name="radio" valie="3" tabindex="0" />
				<span>Confirm</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio error">
				<input type="radio" name="radio" valie="4" tabindex="0" />
				<span>Error</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio warning">
				<input type="radio" name="radio" valie="5" tabindex="0" />
				<span>Warning</span>
			</label>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio simple</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<label class="lui_radio">
				<input type="radio" name="radio" valie="6" tabindex="0" />
				<span></span>
			</label>
		</div>
	</div>
	<div class="item row va-ctop">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio list</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_radio_list">
				<div>
					<label class="lui_radio warning">
						<input type="radio" name="radio1" valie="1" tabindex="0" />
						<span>Radio item 1</span>
					</label>
				</div>
				<div>
					<label class="lui_radio confirm">
						<input type="radio" name="radio1" valie="2" tabindex="0" />
						<span>Radio item 2</span>
					</label>
				</div>
				<div>
					<label class="lui_radio iinfo">
						<input type="radio" name="radio1" valie="3" tabindex="0" />
						<span>Radio item 3</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block">Radio list inline</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_radio_list inline">
				<div>
					<label class="lui_radio warning">
						<input type="radio" name="radio1" valie="1" tabindex="0" />
						<span>Radio item 1</span>
					</label>
				</div>
				<div>
					<label class="lui_radio confirm">
						<input type="radio" name="radio1" valie="2" tabindex="0" />
						<span>Radio item 2</span>
					</label>
				</div>
				<div>
					<label class="lui_radio info">
						<input type="radio" name="radio1" valie="3" tabindex="0" />
						<span>Radio item 3</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	
	<hr />
	
	<div class="item">
		<div class="col-md-9 col-sm-12 ml-md-3">
			<button class="lui_button confirm ico_b fa_b_check mobile_big">Confirm</button>
			<button class="lui_button warning ico_b fa_b_refresh mobile_big">Reset</button>
		</div>
		
	</div>

</div>




<!-- JUST TEST -->
<div class="row">

	<div class="col-xs-12 col-md-6 col-lg-4">
		<div class="lui_widget">
			<header>
				<h2 class="title">Widget box</h2>
				<div class="actions">
					<a href="#" class="fa_b_plus"></a>
					<a href="#" class="fa_b_pencil"></a>
					<a class="toggle"></a>
				</div>
			</header>
			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				In faucibus, enim sit amet condimentum posuere, neque 
				ante tristique libero, vel viverra diam massa lacinia justo. 
				Class aptent taciti sociosqu ad litora torquent per 
				conubia nostra, per inceptos himenaeos.
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-4">
		<div class="lui_widget primary">
			<header>
				<h2 class="title">Widget box</h2>
				<div class="actions">
					<a href="#" class="fa_b_plus"></a>
					<a href="#" class="fa_b_pencil"></a>
					<a class="toggle"></a>
				</div>
			</header>
			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				In faucibus, enim sit amet condimentum posuere, neque 
				ante tristique libero, vel viverra diam massa lacinia justo. 
				Class aptent taciti sociosqu ad litora torquent per 
				conubia nostra, per inceptos himenaeos.
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-4">
		<div class="lui_widget dark">
			<header>
				<h2 class="title">Widget box</h2>
				<div class="actions">
					<a href="#" class="fa_b_plus"></a>
					<a href="#" class="fa_b_pencil"></a>
					<a class="toggle"></a>
				</div>
			</header>
			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				In faucibus, enim sit amet condimentum posuere, neque 
				ante tristique libero, vel viverra diam massa lacinia justo. 
				Class aptent taciti sociosqu ad litora torquent per 
				conubia nostra, per inceptos himenaeos.
			</div>
		</div>
	</div>

	<div class="col-12">
		<div class="lui_message">
			<a class="close"></a>
			<div class="title">Basic</div>
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>

	<div class="col-12">
		<div class="lui_message confirm">
			<a class="close"></a>
			<div class="title">Confirm</div>
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>
	<div class="col-12">
		<div class="lui_message error">
			<a class="close"></a>
			<div class="title">Error</div>
			<p>lorem ipsum dolor info box text</p>
			<ul>
				<li>Ipsum in do cillum reprehenderit.</li>
				<li>Sunt est et officia nulla proident eu labore laboris ipsum consequat do voluptate ex ex.</li>
			</ul>
		</div>
	</div>
	<div class="col-12">
		<div class="lui_message warning">
			<a class="close"></a>
			<div class="title">Warning</div>
			<p>lorem ipsum dolor info box text</p>
			<p>lorem ipsum dolor info box text</p>
			<ul>
				<li>Ipsum in do cillum reprehenderit.</li>
				<li>Sunt est et officia nulla proident eu labore laboris ipsum consequat do voluptate ex ex.</li>
			</ul>
		</div>
	</div>
	<div class="col-12">
		<div class="lui_message info">
			<a class="close"></a>
			<div class="title">Info</div>
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>


	<div class="col-12">
		<hr />
	</div>

	


	<div class="col-12">
		<div class="lui_message">
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>

	<div class="col-12">
		<div class="lui_message confirm">
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>
	<div class="col-12">
		<div class="lui_message error">
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>
	<div class="col-12">
		<div class="lui_message warning">
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>
	<div class="col-12">
		<div class="lui_message info">
			<p>lorem ipsum dolor info box text</p>
		</div>
	</div>
</div>
		