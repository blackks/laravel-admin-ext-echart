<?php

namespace Encore\Echarts\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;

class EchartsController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Echarts')
            ->row(function (Row $row) {
                $bar = view('echarts.Bar');
                $row->column(1/4, new Box('Bar chart', $bar));
                $line = view('echarts.Line');
                $row->column(1/4, new Box('Line chart', $line));
                $pie = view('echarts.Pie');
                $row->column(1/4, new Box('Pie chart', $pie));
                $scatter = view('echarts.scatter');
                $row->column(1/4, new Box('Scatter chart', $scatter));
                $radar = view('echarts.Radar');
                $row->column(1/4, new Box('Radar chart', $radar));
                $tree = view('echarts.Tree');
                $row->column(1/4, new Box('Tree chart', $tree));
                $funnel = view('echarts.Funnel');
                $row->column(1/4, new Box('Funnel chart', $funnel));
                $graph = view('echarts.Graph');
                $row->column(1/4, new Box('Graph chart', $graph));
                $map = view('echarts.Map');
                $row->column(12,new Box('Map chart', $map));
            });
    }
}