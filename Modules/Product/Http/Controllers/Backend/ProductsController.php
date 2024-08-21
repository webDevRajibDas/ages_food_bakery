<?php

namespace Modules\Product\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Products';

        // module name
        $this->module_name = 'products';

        // directory path of the module
        $this->module_path = 'product::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Product\Models\Product";
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::paginate(15);

        logUserAccess($module_title.' '.$module_action);

        return view(
            "{$module_path}.{$module_name}.index",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action')
        );
    }


    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        $module_action = 'Store';

        $validated_data = $request->validate([
            'title' => 'required|max:191',
            'image' => 'required|image|max:2048',  // 2048 KB = 2 MB
            'type' => 'required',
            'status' => 'required',
        ]);

        $validated_data['created_by'] = auth()->user()->name;
        $record = $module_model::create($validated_data);
        if ($request->hasFile('image')) {
            $media = $record->addMedia($request->file('image'))->toMediaCollection($module_name);
            $record->update(['image' => $media->getUrl()]);
        }

        flash("New '" . Str::singular($module_title) . "' Added")->success()->important();
        return redirect("admin/{$module_name}");
    }

}
