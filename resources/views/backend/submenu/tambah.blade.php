{!! Form::open(array('id' => 'frmOji', 'route' => ['submenu.store'], 'class' => 'form account-form', 'method' => 'post')) !!}
<div class="row">
	<div class="col-md-6">
		<p>
			{!! Form::label('nama', 'Nama Submenu', array('class' => 'col-md-6 control-label')) !!}
			{!! Form::text('nama', NULL, array('id' => 'nama', 'class' => 'form-control', 'placeholder' => 'Nama Submenu')) !!}
		</p>
		<p>
			{!! Form::label('kode', 'Kode Submenu', array('class' => 'col-md-6 control-label')) !!}
			{!! Form::text('kode', NULL, array('id' => 'kode', 'class' => 'form-control', 'placeholder' => 'Kode Submenu')) !!}
		</p>
		<p>
			{!! Form::label('Link', 'Link', array('class' => 'col-md-6 control-label')) !!}
			{!! Form::text('link', NULL, array('id' => 'link', 'class' => 'form-control', 'placeholder' => 'Link')) !!}
		</p>
	</div>
	<div class="col-md-6">
		<p>
			{!! Form::label('icon', 'Icon', array('class' => 'col-md-6 control-label')) !!}
			{!! Form::text('icon', 'fa-square', array('id' => 'icon', 'class' => 'form-control', 'placeholder' => 'Icon')) !!}
		</p>
		<p>
			{!! Form::label('status', 'Status', array('class' => 'col-md-6 control-label')) !!}
			{!! Form::select('status', array(1 => 'Tampil', 0 => 'Tidak Tampil'), NULL, array('id' => 'status', 'class' => 'form-control')) !!}
		</p>
		<p>
			{!! Form::label('tampil', 'Tampilkan', array('class' => 'col-md-6 control-label')) !!}
			{!! Form::select('tampil', array(1 => 'Private', 0 => 'Public'), NULL, array('id' => 'tampil', 'class' => 'form-control')) !!}
		</p>
	</div>
	{!! Form::hidden('menu_id', NULL, array('id' => 'menu_id')) !!}
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
<script src="{{ URL::asset('ojisatriani/home/ajax_progress.js') }}"></script>
