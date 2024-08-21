<?php

namespace Modules\PhotoGallery\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\PhotoGallery\Models\PhotoGallery;
use Yajra\DataTables\DataTables;

class PhotoGalleriesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'PhotoGalleries';

        // module name
        $this->module_name = 'photogalleries';

        // directory path of the module
        $this->module_path = 'photogallery::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\PhotoGallery\Models\PhotoGallery";
    }


    public function gallery_list(Request $request){
        return DataTables::of(PhotoGallery::select(['id', 'image', 'updated_at']))
            ->addColumn('image', function ($model) {
                return $model->image_url;  // Using the accessor defined above
            })
            ->addColumn('action', function ($model) {
                $module_name = $this->module_name; // Replace with your actual module name

                $deleteRoute = route("backend.$module_name.destroy", $model->id);

                return '
                <a href="'.$deleteRoute.'" class="btn btn-danger delete-button" data-method="DELETE" data-token="'.csrf_token().'" data-toggle="tooltip" title="Delete">
                    <i class="fas fa-trash-alt"></i>
                </a>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
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

        $validated_request = $request->validate([
            'name' => 'nullable',
            'status' => 'nullable|max:191',
            'image' => 'required',
        ]);
        ($request->image);
        $$module_name_singular = $module_model::create($request->except('image'));

        if ($request->image) {
            $media = $$module_name_singular->addMedia($request->file('image'))->toMediaCollection($module_name);
            $$module_name_singular->image = $media->getUrl();
            $$module_name_singular->save();
        }

        flash("New '".Str::singular($module_title)."' Added")->success()->important();
        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);
        return redirect("admin/{$module_name}");
    }




    public function delete($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';
        $$module_name_singular = $module_model::findOrFail($id);
        $$module_name_singular->delete();
        flash(label_case($module_name_singular).' Deleted Successfully!')->success()->important();
        //logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);
        return redirect("admin/{$module_name}");
    }

}
