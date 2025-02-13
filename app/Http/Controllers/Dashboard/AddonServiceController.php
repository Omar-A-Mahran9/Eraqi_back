<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreAddonRequest;
use App\Http\Requests\Dashboard\UpdateAddonRequest;
use App\Models\AddonService;
use Illuminate\Http\Request;

class AddonServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         $count_addon = AddonService::count(); // Get the count of blogs
         $visited_site=10000;
         if ($request->ajax())
            return response(getModelData(model: new AddonService()));
        else
            return view('dashboard.addon.index',compact('count_addon','visited_site'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(StoreAddonRequest $request)
    {
        $data          = $request->validated();

        $brand = AddonService::create($data);

        return response(["addon created successfully"]);
    }
 
    public function show(AddonService $addonService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AddonService $addonService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAddonRequest $request, AddonService $addon)
    {
         $data = $request->validated();
       
        $addon->update($data);

        return response(["brand updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AddonService $addonService)
    {
        //
    }
}
