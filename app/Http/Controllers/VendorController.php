<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Services\BaseDataTableService;

class VendorController extends Controller
{
    public function index()
    {
        return view('vendor.index', []);
    }
    
    public function getListing(Request $request, BaseDataTableService $datatableService)
    {
        $query = Vendor::select(['vendor_id', 'vendor_name', 'vendor_email', 'vendor_address', 'tax_type', 'phone', 'contact_person']);
        return response()->json(
            $datatableService->getData($request, $query, function ($vendor, $number) {
                return [
                    'id'             => $vendor->id,
                    'no'             => $number,
                    'vendor_id'      => $vendor->vendor_id,
                    'vendor_name'    => $vendor->vendor_name,
                    'vendor_email'   => $vendor->vendor_email,
                    'vendor_address' => $vendor->vendor_address,
                    'tax_type'       => $vendor->tax_type,
                    'phone'          => $vendor->phone,
                    'contact_person' => $vendor->contact_person
                ];
            }, Vendor::$searchableColumns)
        );
    }
}


