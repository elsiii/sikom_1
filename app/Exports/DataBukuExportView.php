<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

// use App\Models\Buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataBukuExportView implements FromView,WithEvents
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('data_buku.exportExcel', [
            'data' => $this->data
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event){
                //Auto-width each column
                foreach ($event->sheet->getColumnIterator() as $colomn) {
                    $column = $colomn->getColumnIndex();
                    $event->sheet->getColumnDimension($column)->setAutoSize(true);
                }
            },
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Buku::all();
    }
    
}
