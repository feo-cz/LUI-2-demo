
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
TODO

</pre>

<form class="lui_form">
	<div class="item row va-center">
		<div class="col-xs-12 col-md-4">
			<label class="label xs-block md-inline">Input</label>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="value">
				<input type="text" />
			</div>
		</div>
	</div>
</form>


<form class="lui_form">
	<div class="item row va-top">
		<div class="col-xs-12 col-md-4">
			<label class="label xs-block md-inline">Input</label>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="value">
				<textarea rows="10" cols="10"></textarea>
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
			<label class="label sm-block md-inline">Input postfix demo</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix">CZK</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input prefix demo</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value prefix">
				<div class="lui_prefix">CZK</div>
				<input type="text" placeholder="ololololo" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input postfix demo (FA)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix fa_a_file"></div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input prefix demo (FA)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value prefix">
				<div class="lui_prefix fa_b_search"></div>
				<input type="text" placeholder="ololololo" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input postfix demo (as button)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value postfix">
				<input type="text" placeholder="ololololo" />
				<a href="#" class="lui_postfix">add file</a>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input prefix demo (as button)</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value prefix">
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


<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">jQuery Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<select class="make_lui_select">
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
	</div>
</form>


<h4>jQuery datepicker</h4>

<p>
	You need jQuery and jQuery UI libs to make this working
</p>


<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Datepicker</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" class="make_lui_datepicker" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Datepicker (custom format)</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" class="make_lui_datepicker" data-format="dd.mm.yy" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Datepicker select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" class="make_lui_datepicker_select" data-format="dd.mm.yy" />
			</div>
		</div>
	</div>
</form>


<h4>Custom Checkboxes</h4>

<p>
	tabindex is recommended if you want your forms accesible - some people may use TAB
</p>



<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Checkbox</label>
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
			<label class="label sm-block md-inline">Checks list</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_check_list">
				<div>
					<label class="lui_check positive">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check negative">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check warning">
						<input type="checkbox" tabindex="0" />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check notice">
						<input type="checkbox" tabindex="0" />
						<span>Second checkbox</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="item row va-top">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Checks list</label>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="lui_check_list">
				<div>
					<label class="lui_check positive">
						<input type="checkbox" tabindex="0" checked />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check negative">
						<input type="checkbox" tabindex="0" checked />
						<span>Second checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check warning">
						<input type="checkbox" tabindex="0" checked />
						<span>First checkbox</span>
					</label>
				</div>
				<div>
					<label class="lui_check notice">
						<input type="checkbox" tabindex="0" checked />
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


<form class="lui_form">
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Radio</label>
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
			<label class="label sm-block md-inline">Radio list</label>
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
			<label class="label sm-block md-inline">Input</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input w/ placeholder</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" placeholder="Lorem ipsum dolor" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input w/ placeholder readonly</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" placeholder="Lorem ipsum dolor" readonly="readonly" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input w/ placeholder disabled</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" placeholder="Lorem ipsum dolor" disabled="disabled" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input w/ value</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" value="This is value" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input w/ value readonly</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" value="This is value" readonly="readonly" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input w/ value disabled</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value">
				<input type="text" value="This is value" disabled="disabled" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Input postfix demo</label>
		</div>
		<div class="col-md-7 col-sm-12 col-xs-12">
			<div class="value postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix">CZK</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline required">Longer postfix</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value postfix">
				<input type="text" placeholder="ololololo" />
				<div class="lui_postfix">LOREM IPS</div>
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Read only with prefix</label>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="value prefix">
				<div class="lui_prefix">TEST</div>
				<input type="text" value="read only" readonly="readonly" />
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="status">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="status negative fa_b_times">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="status positive fa_b_check">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="status warning fa_b_warning">
				Lorem ipsum dolor
			</div>
		</div>
	</div>

	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
				<select>
					<option>Lorem ipsum dolor option in select</option>
					<option>option in select</option>
					<option>olololo</option>
				</select>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="status notice fa_b_info">
				Lorem ipsum dolor
			</div>
		</div>
	</div>
	
	
	<div class="item row va-center">
		<div class="col-md-3 col-sm-12 col-xs-12">
			<label class="label sm-block md-inline">jQuery Select</label>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="value">
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
			<label class="label sm-block md-inline">Checkbox1</label>
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
			<label class="label sm-block md-inline">Checkbox</label>
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
			<label class="label sm-block md-inline">Checkbox</label>
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
			<label class="label sm-block md-inline">Checkbox</label>
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
			<label class="label sm-block md-inline">Checkbox</label>
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
			<label class="label sm-block md-inline">Checkbox simple</label>
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
			<label class="label sm-block md-inline">Checks list</label>
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
			<label class="label sm-block md-inline">Checks list inline</label>
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
			<label class="label sm-block md-inline">Radio</label>
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
			<label class="label sm-block md-inline col-lg-3 col-md-6 col-sm-12 col-xs-12">Radio</label>
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
			<label class="label sm-block md-inline">Radio</label>
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
			<label class="label sm-block md-inline">Radio</label>
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
			<label class="label sm-block md-inline">Radio</label>
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
			<label class="label sm-block md-inline">Radio simple</label>
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
			<label class="label sm-block md-inline">Radio list</label>
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
			<label class="label sm-block md-inline">Radio list inline</label>
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