<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreWebsiteRequest;
use App\Http\Requests\UpdateWebsiteRequest;
use App\Http\Resources\Website as WebsiteResource;
use App\Models\Website;

class WebsiteController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return WebsiteResource::collection(Website::paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreWebsiteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebsiteRequest $request)
    {
        // Generated Using Seeder
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Website $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        // Generated Using Seeder
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateWebsiteRequest $request
     * @param \App\Models\Website $website
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebsiteRequest $request, Website $website)
    {
        // Generated Using Seeder
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Website $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        // Generated Using Seeder
    }
}
