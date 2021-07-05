<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Reports;
use Facade\FlareClient\Report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Reports::get();
        return view('admin.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.reports.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        // Reports::create($request->all());
        $report = new Reports;
        $report->category_id = $request->category_id;
        $report->summa       = $request->summa;
        $report->commit      = $request->commit;
        $report->status      = $request->status;
        $report->save();
		return redirect()->route('admin.reports.index')->with('success', 'Установка успешно создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Reports::find($id);
        $categories = Category::all();
        return view('admin.reports.edit', compact('report','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = Reports::find($id);
        $report->category_id = $request->category_id;
        $report->summa       = $request->summa;
        $report->commit      = $request->commit;
        $report->status      = $request->status;
        $report->save();
		return redirect()->route('admin.reports.index')->with('success', 'Установка успешно создан');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reports::find($id)->remove();
		return redirect()->route('admin.reports.index');
    }
}
