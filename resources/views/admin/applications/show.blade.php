@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.application.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>

                @can('application_edit')
                    <a class="btn btn-info" href="{{ route('admin.applications.edit', $application->id) }}">
                        {{ trans('global.edit') }}
                    </a>
                @endcan

                @can('application_delete')
                    <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="{{ trans('global.delete') }}">
                    </form>
                @endcan

            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th width='10%' colspan='1'>
                            {{ trans('cruds.application.fields.name') }}
                        </th>
                        <td colspan="7">
                            {{ $application->name }}
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.version') }}
                        </th>
                        <td colspan="3">
                            {{ $application->version }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.description') }}
                        </th>
                        <td colspan="11">
                            {!! $application->description !!}
                        </td>
                    </tr>

                    <tr>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.entities') }}
                        </th>
                        <td colspan="3">
                            @foreach($application->entities as $entity)
                                <a href="{{ route('admin.entities.show', $entity->id) }}">{{ $entity->name }}</span>
                                @if(!$loop->last)
                                ,
                                @endif                                
                            @endforeach
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.technology') }}
                        </th>
                        <td colspan="3">
                            {{ $application->technology }}
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.external') }}
                        </th>
                        <td colspan="3">
                            {{ $application->external }}
                        </td>
                    </tr>

                    <tr>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.entity_resp') }}
                        </th>
                        <td colspan="3">
                            {{ $application->entity_resp->name ?? '' }}
                        </td>
                        <th>
                            {{ trans('cruds.application.fields.type') }}
                        </th>
                        <td colspan="3">
                            {{ $application->type }}
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.documentation') }}
                        </th>
                        <td colspan="3">
                            {{ $application->documentation }}
                        </td>
                    </tr>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.responsible') }}
                        </th>
                        <td colspan="3">
                            {{ $application->responsible }}
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.users') }}
                        </th>
                        <td colspan="5">
                            {{ $application->users }}
                        </td>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.security_need') }}
                        </th>
                        <td colspan="11">
                            {{ trans('global.confidentiality') }} :
                                {{ array(0=>trans('global.none'),1=>trans('global.low'),2=>trans('global.medium'),3=>trans('global.strong'),4=>trans('global.very_strong'))
                                [$application->security_need_c] ?? "" }}
                            <br>
                            {{ trans('global.integrity') }} :
                                {{ array(0=>trans('global.none'),1=>trans('global.low'),2=>trans('global.medium'),3=>trans('global.strong'),4=>trans('global.very_strong'))
                                [$application->security_need_i] ?? "" }}
                            <br>
                            {{ trans('global.availability') }} :
                                {{ array(0=>trans('global.none'),1=>trans('global.low'),2=>trans('global.medium'),3=>trans('global.strong'),4=>trans('global.very_strong'))
                                [$application->security_need_a] ?? "" }}
                            <br>
                            {{ trans('global.tracability') }} :
                                {{ array(0=>trans('global.none'),1=>trans('global.low'),2=>trans('global.medium'),3=>trans('global.strong'),4=>trans('global.very_strong'))
                                [$application->security_need_t] ?? "" }} 
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.processes') }}
                        </th>
                        <td colspan="5">
                            @foreach($application->processes as $process)
                                <a href="{{ route('admin.processes.show', $process->id) }}">{{ $process->identifiant }}</span>
                                @if(!$loop->last)
                                ,
                                @endif                                
                            @endforeach
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.databases') }}
                        </th>
                        <td colspan="5">
                            @foreach($application->databases as $database)
                                <a href="{{ route('admin.databases.show', $database->id) }}">{{ $database->name }}</span>
                                @if(!$loop->last)
                                ,
                                @endif                                
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.services') }}
                        </th>
                        <td colspan="5">
                            @foreach($application->services as $service)
                                <a href="{{ route('admin.application-services.show', $service->id) }}">{{ $service->name }}</span>
                                @if(!$loop->last)
                                ,
                                @endif                                
                            @endforeach
                        </td>
                        <th colspan="1">
                            {{ trans('cruds.application.fields.logical_servers') }}
                        </th>
                        <td colspan="5">
                            @foreach($application->logical_servers as $logical_server)
                                <a href='{{ route("admin.logical-servers.show", $logical_server->id) }}'>{{ $logical_server->name }}</span>
                                @if(!$loop->last)
                                ,
                                @endif                                
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.application.fields.application_block') }}
                        </th>
                        <td colspan="11">
                            @if ($application->application_block!=null)
                            <a href='{{ route("admin.application-blocks.show", $application->application_block->id) }}'>{{ $application->application_block->name }}</a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.applications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
    <div class="card-footer">
        {{ trans('global.created_at') }} {{ $application->created_at->format(trans('global.timestamp')) }} |
        {{ trans('global.updated_at') }} {{ $application->updated_at->format(trans('global.timestamp')) }} 
    </div>
</div>
@endsection