<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefCategoriesRequest;
use App\Http\Requests\UpdateRefCategoriesRequest;
use App\Repositories\RefCategoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Auth;
use Cookie;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\RefCategories;

class RefCategoriesController extends AppBaseController
{
    /** @var  RefCategoriesRepository */
    private $refCategoriesRepository;

    public function __construct(RefCategoriesRepository $refCategoriesRepo)
    {
        $this->refCategoriesRepository = $refCategoriesRepo;
    }

    /**
     * Display a listing of the RefCategories.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->refCategoriesRepository->pushCriteria(new RequestCriteria($request));
        $refCategories = $this->refCategoriesRepository->all();

        return view('ref_categories.index')
            ->with('refCategories', $refCategories);
    }

    public function refs($user_id = null, $ref_category_id = null)
    {
        if (!$user_id) {
            return ridirect(route('/login'));
        }
        if ($ref_category_id) {
            $refCategory = RefCategories::where('id', $ref_category_id)->first();
            RefCategories::where('id', $ref_category_id)->update([
                'referral_count' => $refCategory->refferral_count+1,
                'referral_visits' => $refCategory->refferral_visits+1,
            ]);
        }
    }

    if (Cookie::get('ref_user_id')) {
        return response(route('/register'));
    }
    //Use cookies to track the visit
    return response(route('/register'))
                ->cookie('ref_user_id', $user_id, 60*24*30*12)
                ->cookie('ref_category_id', $ref_category_id, 60*24*30*12);
    /**
     * Show the form for creating a new RefCategories.
     *
     * @return Response
     */
    public function create()
    {
        return view('ref_categories.create');
    }

    /**
     * Store a newly created RefCategories in storage.
     *
     * @param CreateRefCategoriesRequest $request
     *
     * @return Response
     */
    public function store(CreateRefCategoriesRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;

        $refCategories = $this->refCategoriesRepository->create($input);

        Flash::success('Ref Categories saved successfully.');

        return redirect(route('refCategories.index'));
    }

    /**
     * Display the specified RefCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refCategories = $this->refCategoriesRepository->findWithoutFail($id);

        if (empty($refCategories)) {
            Flash::error('Ref Categories not found');

            return redirect(route('refCategories.index'));
        }

        return view('ref_categories.show')->with('refCategories', $refCategories);
    }

    /**
     * Show the form for editing the specified RefCategories.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refCategories = $this->refCategoriesRepository->findWithoutFail($id);

        if (empty($refCategories)) {
            Flash::error('Ref Categories not found');

            return redirect(route('refCategories.index'));
        }

        return view('ref_categories.edit')->with('refCategories', $refCategories);
    }

    /**
     * Update the specified RefCategories in storage.
     *
     * @param  int              $id
     * @param UpdateRefCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefCategoriesRequest $request)
    {
        $refCategories = $this->refCategoriesRepository->findWithoutFail($id);

        if (empty($refCategories)) {
            Flash::error('Ref Categories not found');

            return redirect(route('refCategories.index'));
        }

        $refCategories = $this->refCategoriesRepository->update($request->all(), $id);

        Flash::success('Ref Categories updated successfully.');

        return redirect(route('refCategories.index'));
    }

    /**
     * Remove the specified RefCategories from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refCategories = $this->refCategoriesRepository->findWithoutFail($id);

        if (empty($refCategories)) {
            Flash::error('Ref Categories not found');

            return redirect(route('refCategories.index'));
        }

        $this->refCategoriesRepository->delete($id);

        Flash::success('Ref Categories deleted successfully.');

        return redirect(route('refCategories.index'));
    }
}
