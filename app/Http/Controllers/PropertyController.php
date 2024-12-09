<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactPropertyRequest;
use App\Http\Requests\SearchPropertiesRequest;
use App\Mail\ContactPropertyMail;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query()->orderBy('created_at', "desc");
        if($price = $request->validated('price'))
        {
            $query = $query->where('price', '<=', $price);
        }

        if($surface = $request->validated('surface'))
        {
            $query = $query->where('surface', '>=', $surface);
        }

        if($rooms = $request->validated('rooms'))
        {
            $query = $query->where('rooms', '>=', $rooms);
        }

        if($title = $request->validated('title'))      {
            $query = $query->where('title', 'like', "%{$title}%");
        }

        return view('property.index', [
            'properties' => $query->paginate(16),
            'input' => $request->validated()
        ]);
    }

    public function show(string $slug, Property $property)
    {
        $exceptedSlug = $property->getSlug();
        if ($slug != $exceptedSlug) {
            return to_route('property.show', ['slug' => $exceptedSlug, $property]);
        }

        return view('property.show', ['property' => $property]);
    }

    public function contact(ContactPropertyRequest $request, Property $property)
    {
        Mail::send(new ContactPropertyMail($property, $request->validated()));
        return to_route('property.show', ['slug' => $property->getSlug(), 'property' => $property])->with('success', "Message envoyer qvec success !");
    }
}
