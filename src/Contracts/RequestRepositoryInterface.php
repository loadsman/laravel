<?php

namespace Loadsman\LaravelPlugin\Contracts;

use Loadsman\LaravelPlugin\Entities\RequestEntity;

interface RequestRepositoryInterface
{
    /**
     * @param $id
     *
     * @return \Loadsman\LaravelPlugin\Entities\RequestEntity
     */
    public function find($id);

    /**
     * @param \Loadsman\LaravelPlugin\Entities\RequestEntity $request
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
     * @return \Loadsman\LaravelPlugin\Collections\RequestCollection|\Loadsman\LaravelPlugin\Entities\RequestEntity[]
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
