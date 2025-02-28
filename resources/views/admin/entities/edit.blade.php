@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.entity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.entities.update", [$entity->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.entity.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $entity->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="description">{{ trans('cruds.entity.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $entity->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="security_level">{{ trans('cruds.entity.fields.security_level') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('security_level') ? 'is-invalid' : '' }}" name="security_level" id="security_level">{!! old('security_level', $entity->security_level) !!}</textarea>
                @if($errors->has('security_level'))
                    <div class="invalid-feedback">
                        {{ $errors->first('security_level') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.security_level_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="recommended" for="contact_point">{{ trans('cruds.entity.fields.contact_point') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('contact_point') ? 'is-invalid' : '' }}" name="contact_point" id="contact_point">{!! old('contact_point', $entity->contact_point) !!}</textarea>
                @if($errors->has('contact_point'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_point') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.contact_point_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="applications">{{ trans('cruds.entity.fields.applications_resp') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('applications') ? 'is-invalid' : '' }}" name="applications[]" id="applications" multiple>
                    @foreach($applications as $id => $application)
                        <option value="{{ $id }}" {{ (in_array($id, old('applications', [])) || $entity->applications->contains($id)) ? 'selected' : '' }}>{{ $application }}</option>
                    @endforeach
                </select>
                @if($errors->has('applications'))
                    <span class="text-danger">{{ $errors->first('applications') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.applications_resp_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="databases">{{ trans('cruds.entity.fields.databases_resp') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('databases') ? 'is-invalid' : '' }}" name="databases[]" id="databases" multiple>
                    @foreach($databases as $id => $name)
                        <option value="{{ $id }}" {{ (in_array($id, old('databases', [])) || $entity->databases->contains($id)) ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                @if($errors->has('databases'))
                    <span class="text-danger">{{ $errors->first('databases') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.databases_resp_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="recommended" for="processes">{{ trans('cruds.entity.fields.processes') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('processes') ? 'is-invalid' : '' }}" name="processes[]" id="processes" multiple>
                    @foreach($processes as $id => $identificateur)
                        <option value="{{ $id }}" {{ (in_array($id, old('processes', [])) || $entity->entitiesProcesses->contains($id)) ? 'selected' : '' }}>{{ $identificateur }}</option>
                    @endforeach
                </select>
                @if($errors->has('processes'))
                    <span class="text-danger">{{ $errors->first('processes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.entity.fields.processes_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
$(document).ready(function () {
  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: []
      }
    );
  }
});

$(document).ready(function() {
  $(".select2-free").select2({
        placeholder: "{{ trans('global.pleaseSelect') }}",
        allowClear: true,
        tags: true
    }) 
  }); 
</script>
@endsection
