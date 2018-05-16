<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Repositories\KategoriRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KategoriController extends AppBaseController
{
    /** @var  KategoriRepository */
    private $kategoriRepository;

    public function __construct(KategoriRepository $kategoriRepo)
    {
        $this->kategoriRepository = $kategoriRepo;
    }

    /**
     * Display a listing of the Kategori.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->kategoriRepository->pushCriteria(new RequestCriteria($request));
        $kategoris = $this->kategoriRepository->all();

        return view('kategoris.index')
            ->with('kategoris', $kategoris);
    }

    /**
     * Show the form for creating a new Kategori.
     *
     * @return Response
     */
    public function create()
    {
        return view('kategoris.create');
    }

    /**
     * Store a newly created Kategori in storage.
     *
     * @param CreateKategoriRequest $request
     *
     * @return Response
     */
    public function store(CreateKategoriRequest $request)
    {
        $input = $request->all();

        $kategori = $this->kategoriRepository->create($input);

        Flash::success('Kategori saved successfully.');

        return redirect(route('kategoris.index'));
    }

    /**
     * Display the specified Kategori.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kategori = $this->kategoriRepository->findWithoutFail($id);

        if (empty($kategori)) {
            Flash::error('Kategori not found');

            return redirect(route('kategoris.index'));
        }

        return view('kategoris.show')->with('kategori', $kategori);
    }

    /**
     * Show the form for editing the specified Kategori.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kategori = $this->kategoriRepository->findWithoutFail($id);

        if (empty($kategori)) {
            Flash::error('Kategori not found');

            return redirect(route('kategoris.index'));
        }

        return view('kategoris.edit')->with('kategori', $kategori);
    }

    /**
     * Update the specified Kategori in storage.
     *
     * @param  int              $id
     * @param UpdateKategoriRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKategoriRequest $request)
    {
        $kategori = $this->kategoriRepository->findWithoutFail($id);

        if (empty($kategori)) {
            Flash::error('Kategori not found');

            return redirect(route('kategoris.index'));
        }

        $kategori = $this->kategoriRepository->update($request->all(), $id);

        Flash::success('Kategori updated successfully.');

        return redirect(route('kategoris.index'));
    }

    /**
     * Remove the specified Kategori from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kategori = $this->kategoriRepository->findWithoutFail($id);

        if (empty($kategori)) {
            Flash::error('Kategori not found');

            return redirect(route('kategoris.index'));
        }

        $this->kategoriRepository->delete($id);

        Flash::success('Kategori deleted successfully.');

        return redirect(route('kategoris.index'));
    }
}
