<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $query = Item::query();

        // Name oder ID
        if ($request->filled('item-search')) {
            $search = $request->input('item-search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                    ->orWhere('item_id', 'like', "%$search%");
            });
        }

        // VIP Filter (tags-Spalte enthält ["VIP"])
        if ($request->filled('vip-filter') && $request->input('vip-filter') !== 'all') {
            if ($request->input('vip-filter') === 'yes') {
                $query->where('tags', 'like', '%"VIP"%');
            } elseif ($request->input('vip-filter') === 'no') {
                $query->where('tags', 'not like', '%"VIP"%');
            }
        }

        // Gender Filter
        if ($request->filled('gender-filter') && $request->input('gender-filter') !== 'all') {
            $gender = strtoupper($request->input('gender-filter'));
            $query->where('tags', 'like', "%\"$gender\"%");
        }

        // MSP Version Filter (msp1/msp2 aus graphic_identifier lesen)
        if ($request->filled('msp-version') && $request->input('msp-version') !== 'all') {
            $query->where('graphic_identifier', 'like', '%msp' . $request->input('msp-version') . '%');
        }

        // Sortierung
        switch ($request->input('sort-by')) {
            case 'name-asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name-desc':
                $query->orderBy('name', 'desc');
                break;
            case 'id-asc':
                $query->orderBy('item_id', 'asc');
                break;
            case 'id-desc':
                $query->orderBy('item_id', 'desc');
                break;
            case 'oldest-first':
                $query->orderBy('created_at', 'asc');
                break;
            case 'newest-first':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $items = $query->paginate(30); // oder ->get() für alle

        return view('pages.items.index', compact('items'));
    }

};
