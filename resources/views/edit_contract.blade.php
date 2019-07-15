@extends('layout')
@section('content')
					

<div class="box-content">
					

					</p>
						<form class="form-horizontal" method="post" action="{{url('/update_data',$allcontract_info->id)}}">
							{{ csrf_field() }}
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01"> User Name</label>
							  <div class="controls">
							<input type="text" class="input-xlarge datepicker"  name="name" value="{{$allcontract_info->name}}">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01"> User Number</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker"  name="number" value="{{$allcontract_info->number}}">
							  </div>
							</div>

							      
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Contract</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>


@endsection