<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRolAPIRequest;
use App\Http\Requests\API\UpdateRolAPIRequest;
use App\Models\Rol;
use App\Repositories\RolRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class RolController
 * @package App\Http\Controllers\API
 */

class RolAPIController extends AppBaseController
{
    /** @var  RolRepository */
    private $rolRepository;

    public function __construct(RolRepository $rolRepo)
    {
        $this->rolRepository = $rolRepo;
    }

    /**
     * Display a listing of the Rol.
     * GET|HEAD /rols
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $rols = $this->rolRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($rols->toArray(), 'Rols retrieved successfully');
    }

    /**
     * Store a newly created Rol in storage.
     * POST /rols
     *
     * @param CreateRolAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRolAPIRequest $request)
    {
        $input = $request->all();

        $rol = $this->rolRepository->create($input);

        return $this->sendResponse($rol->toArray(), 'Rol saved successfully');
    }

    /**
     * Display the specified Rol.
     * GET|HEAD /rols/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Rol $rol */
        $rol = $this->rolRepository->find($id);

        if (empty($rol)) {
            return $this->sendError('Rol not found');
        }

        return $this->sendResponse($rol->toArray(), 'Rol retrieved successfully');
    }

    /**
     * Update the specified Rol in storage.
     * PUT/PATCH /rols/{id}
     *
     * @param int $id
     * @param UpdateRolAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRolAPIRequest $request)
    {
        $input = $request->all();

        /** @var Rol $rol */
        $rol = $this->rolRepository->find($id);

        if (empty($rol)) {
            return $this->sendError('Rol not found');
        }

        $rol = $this->rolRepository->update($input, $id);

        return $this->sendResponse($rol->toArray(), 'Rol updated successfully');
    }

    /**
     * Remove the specified Rol from storage.
     * DELETE /rols/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Rol $rol */
        $rol = $this->rolRepository->find($id);

        if (empty($rol)) {
            return $this->sendError('Rol not found');
        }

        $rol->delete();

        return $this->sendSuccess('Rol deleted successfully');
    }
}
