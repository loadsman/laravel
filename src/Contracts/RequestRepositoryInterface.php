<?php

namespace Loadsman\Laravel\Contracts;

use Loadsman\Laravel\Entities\RequestEntity;

interface RequestRepositoryInterface
{
    /**
     * @param $id
     *
     * @return \Loadsman\Laravel\Entities\RequestEntity
     */
    public function find($id);

    /**
     * @param \Loadsman\Laravel\Entities\RequestEntity $request
     *
     * @return void
     */
    public function persist(RequestEntity $request);

    /**
     * @param $id
     *
     * @return bool
     */
    public function exists($id);

    /**
     * @return \Loadsman\Laravel\Collections\RequestCollection|\Loadsman\Laravel\Entities\RequestEntity[]
     */
    public function all();

    /**
     * @return void
     */
    public function flush();

    /**
     * @param string $request
     */
    public function remove($request);

}
