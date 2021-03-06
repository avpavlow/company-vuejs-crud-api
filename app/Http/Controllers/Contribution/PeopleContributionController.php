<?php

namespace App\Http\Controllers\Contribution;

use App\Models\Contribution\PeopleContribution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleContributionController extends Controller
{

    private $m = PeopleContribution::class;
    private $pk = 'id';

    public function index()
    {
        return PeopleContribution::all();
    }
    public function store(Request $request)
    {
        return $this->rStore($this->m, $request, $this->pk);
    }
    public function show($id)
    {
        return PeopleContribution::where('id', $id)->first();
    }
    public function update(Request $request, $id)
    {
        $model = PeopleContribution::where('id', $id)->first();
        return $this->rUpdate($this->m, $model, $request->all(), $this->pk);
    }
    public function destroy($id)
    {
        $model = PeopleContribution::where('id', $id)->first();
        return $this->rDestroy($model);
    }
    public function multipleUpdate(Request $request)
    {
        return $this->rMultipleUpdate($this->m, $request, $this->pk);
    }
    public function multipleDelete(Request $request)
    {
        return $this->rMultipleDelete($this->m, $request, $this->pk);
    }
}
