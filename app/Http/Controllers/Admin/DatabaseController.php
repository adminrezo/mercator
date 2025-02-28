<?php

namespace App\Http\Controllers\Admin;

use App\Database;
use App\Entity;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDatabaseRequest;
use App\Http\Requests\StoreDatabaseRequest;
use App\Http\Requests\UpdateDatabaseRequest;
use App\Information;
use App\MApplication;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class DatabaseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('database_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $databases = Database::all()->sortBy('name');

        return view('admin.databases.index', compact('databases'));
    }

    public function create()
    {
        abort_if(Gate::denies('database_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $entities = Entity::all()->sortBy('name')->pluck('name', 'id');
        $entity_resps = Entity::all()->sortBy('name')->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $informations = Information::all()->sortBy('name')->pluck('name', 'id');
        $applications = MApplication::all()->sortBy('name')->pluck('name', 'id');
        // lists
        $type_list = Database::select('type')->where('type', '<>', null)->distinct()->orderBy('type')->pluck('type');
        $external_list = Database::select('external')->where('external', '<>', null)->distinct()->orderBy('external')->pluck('external');
        $responsible_list = Database::select('responsible')->where('responsible', '<>', null)->distinct()->orderBy('responsible')->pluck('responsible');

        return view(
            'admin.databases.create',
            compact(
                'entities',
                'entity_resps',
                'informations',
                'applications',
                'type_list',
                'external_list',
                'responsible_list'
            )
        );
    }

    public function store(StoreDatabaseRequest $request)
    {
        $database = Database::create($request->all());
        $database->entities()->sync($request->input('entities', []));
        $database->informations()->sync($request->input('informations', []));
        $database->databasesMApplications()->sync($request->input('applications', []));

        return redirect()->route('admin.databases.index');
    }

    public function edit(Database $database)
    {
        abort_if(Gate::denies('database_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $entities = Entity::all()->sortBy('name')->pluck('name', 'id');
        $entity_resps = Entity::all()->sortBy('name')->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $informations = Information::all()->sortBy('name')->pluck('name', 'id');
        $applications = MApplication::all()->sortBy('name')->pluck('name', 'id');
        // lists
        $type_list = Database::select('type')->where('type', '<>', null)->distinct()->orderBy('type')->pluck('type');
        $external_list = Database::select('external')->where('external', '<>', null)->distinct()->orderBy('external')->pluck('external');
        $responsible_list = Database::select('responsible')->where('responsible', '<>', null)->distinct()->orderBy('responsible')->pluck('responsible');

        $database->load('entities', 'entity_resp', 'informations', 'databasesMApplications');

        return view(
            'admin.databases.edit',
            compact(
                'entities',
                'entity_resps',
                'informations',
                'applications',
                'database',
                'type_list',
                'external_list',
                'responsible_list'
            )
        );
    }

    public function update(UpdateDatabaseRequest $request, Database $database)
    {
        $database->update($request->all());
        $database->entities()->sync($request->input('entities', []));
        $database->informations()->sync($request->input('informations', []));
        $database->databasesMApplications()->sync($request->input('applications', []));

        return redirect()->route('admin.databases.index');
    }

    public function show(Database $database)
    {
        abort_if(Gate::denies('database_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $database->load('entities', 'entity_resp', 'informations', 'databaseSourceFluxes', 'databaseDestFluxes', 'databasesMApplications');

        return view('admin.databases.show', compact('database'));
    }

    public function destroy(Database $database)
    {
        abort_if(Gate::denies('database_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $database->delete();

        return redirect()->route('admin.databases.index');
    }

    public function massDestroy(MassDestroyDatabaseRequest $request)
    {
        Database::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
