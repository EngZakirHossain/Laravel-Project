@extends('layout')
@section('content')
					

	<div class="box-content">
					

					</p>
						<form class="form-horizontal" method="post" action="{{url('/save_data')}}">
							{{ csrf_field() }}
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01"> User Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker"  name="name" required="">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"> User Number</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker"  name="number" required="">
							  </div>
							</div>

							      
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Contract</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>



@endsection