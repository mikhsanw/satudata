{!! Form::open(array('id' => 'frmOji', 'route' => [$halaman->kode.'.update', $data->id], 'class' => 'form account-form', 'method' => 'PUT')) !!}
<div class="row">
    <div class="col-md-12">
        <p>
            {!! Form::label('nama', 'Masukkan Nama', array('class' => 'control-label')) !!}
            {!! Form::text('nama', $data->nama, array('id' => 'nama', 'class' => 'form-control', 'autocomplete' => 'off')) !!}
        </p>
        <p>
            {!! Form::label('singkatan', 'Masukkan Singkatan', array('class' => 'control-label')) !!}
            {!! Form::text('singkatan', $data->singkatan, array('id' => 'singkatan', 'class' => 'form-control', 'autocomplete' => 'off')) !!}
        </p>
        <p>
            {!! Form::label('daerah', 'Masukkan Daerah', array('class' => 'control-label')) !!}
            {!! Form::text('daerah', $data->daerah, array('id' => 'daerah', 'class' => 'form-control', 'autocomplete' => 'off')) !!}
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
<style>
    .select2-container {
        z-index: 9999 !important;
    }
</style>
<script src="{{ URL::asset('resources/vendor/jquery/jquery.enc.js') }}"></script>
<script src="{{ URL::asset('resources/vendor/jquery/jquery.form.js') }}"></script>
<script src="{{ URL::asset(config('master.aplikasi.author').'/home/ajax_progress.js') }}"></script>
<script src="{{ URL::asset(config('master.aplikasi.author').'/'.$halaman->kode.'/'.\Auth::id().'/ajax.js') }}"></script>
<script type="text/javascript">
    $('.modal-title').html('<span class="fa fa-edit"></span> Ubah {{$halaman->nama}}');
</script>
