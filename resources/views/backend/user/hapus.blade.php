{!! Form::open(array('id' => 'frmOji', 'route' => ['user.destroy', $user->id], 'class' => 'form account-form', 'method' => 'DELETE')) !!}
<div class="row">
	<div class="col-md-12">
		<p>
			<label class="control-label">Hapus data <strong>{{ $user->nama }}?</strong></label>
		</p>
	</div>
	{!! Form::hidden('table-list', 'datatable', array('id' => 'table-list')) !!}
</div>
<div class="row">
	<div class="col-md-12">
        <span class="pesan"></span>
        <div id="output"></div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div id="statustxt">0%</div>
            </div>
        </div>
	</div>
</div>
{!! Form::close() !!}
<script src="{{ URL::asset('resources/vendor/jquery/jquery.form.js') }}"></script>
<script src="{{ URL::asset(config('master.aplikasi.author').'/home/ajax_progress.js') }}"></script>
